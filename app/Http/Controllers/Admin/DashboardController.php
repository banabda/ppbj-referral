<?php

namespace App\Http\Controllers\Admin;

use View;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Models\ReferrCountTerverifikasi;

use App\Exports\UsersExport;
use App\Imports\OrderOnlineImport;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('admin/login');
        }

        if(request()->ajax()) {
            $query = User::with('mengundang','diundang', 'pembayaran.file')->where('email', '!=', 'admin@lpkn.org')->orderBy('updated_at', 'desc');

            return datatables()->eloquent($query)
                ->addColumn('mengundang', function($query){
                    $counter = 0;
                    $ret = '<div class="flex">';
                    if(!empty($query->mengundang)){
                        foreach($query->mengundang as $item){
                            if($counter > 2){
                                break;
                            }else{
                                $ret .= '
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="img" class="tooltip rounded-full"
                                        src="https://avatars.dicebear.com/api/initials/'.$item->name.'.svg"
                                        title="'.$item->name.'">
                                </div>
                                ';
                                $counter++;
                            }
                        }

                        if($counter > 2 && ($query->mengundang->count() - $counter) != 0){
                            $diff = $query->mengundang->count() - $counter;
                            $ret .= '
                            <div class="w-10 h-10 image-fit">
                                <div class="rounded-full text-center">
                                    '. number_format($diff,0,',','.') .' +
                                </div>
                            </div>
                            ';
                        }
                        $ret .= '</div>';
                    }else{
                        $ret .= '</div>';
                    }
                    return $ret;
                })
                ->addColumn('nama_peserta', function($query){
                    return '<a onclick="detail_users('.$query->id.')" href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="text-theme-1"><b>'.$query->name.'</b></a>';
                })
                ->addColumn('total_mengundang', function($query){
                    return isset($query->mengundang) ? number_format(count($query->mengundang),0,',','.') : 0;
                })
                ->addColumn('diundang_oleh', function($query){
                    return isset($query->diundang) ? $query->diundang->name : "";
                })
                ->addColumn('bukti_pembayaran', function($query){
                    return isset($query->pembayaran) && isset($query->pembayaran->file) ? "<img src='".asset('uploads/'.$query->pembayaran->file->path)."' class='h-16 w-auto' data-action='zoom'>" : "";
                })
                ->addColumn('total_tagihan', function($query){
                    $id = $query->id;
                    $total = env('HARGA_EVENT', 0) + $id;

                    return 'Rp ' . number_format($total,0, ',', '.');
                })
                ->addColumn('unique_number', function($query){
                    return $query->id;
                })
                ->addColumn('status_pembayaran', function($query){
                    if($query->status_pembayaran == 0){
                        return '
                        <span class="px-2 py-1 rounded-full bg-theme-12 text-white mr-1">Belum diverifikasi</span>
                        ';
                    }else{
                        return '
                        <span class="px-2 py-1 rounded-full bg-theme-1 text-white mr-1">Terverifikasi</span>
                        ';
                    }
                })
                ->addColumn('button_proses', function($query){
                    if ($query->status_pembayaran == 1) {
                        return '<a onclick="detail_users('.$query->id.')" href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="button inline-block bg-gray-700 text-white">View</a>';
                    } else {
                        return '<a onclick="detail_users('.$query->id.')" href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="button inline-block bg-gray-700 text-white">View</a><button class="button inline-block bg-theme-1 text-white float-right" onclick="proses_pembayaran('.$query->id.')">Proses</button>';
                    }

                })
                ->filter(function ($query) use ($request) {
                    if (!empty($request->get('id'))) {

                        $req = str_replace(".", "", $request->get('id'));

                        $tagihan = $req - env('HARGA_EVENT', 0);
                        if($tagihan > 0){
                            $query->where('id', $tagihan);
                        }
                    }

                    if (!empty($request->get('startDate')) && !empty($request->get('endDate'))) {
                        $startDate = date('Y-m-d', round($request->get('startDate') / 1000));
                        $endDate = date('Y-m-d', round($request->get('endDate') / 1000));
                        
                        $query->whereHas('pembayaran', function($q) use ($startDate, $endDate){
                            $q->whereBetween('created_at', [$startDate, $endDate]);
                        });
                    }

                    if (!empty($request->get('status'))) {
                        $req = $request->get('status');

                        switch($req) {
                            case 1 :
                                $query->where('status_pembayaran', 1);
                            break;
                            case 2 :
                                $query->where('status_pembayaran', 0)->has('pembayaran');
                            break;
                            case 3 :
                                $query->where('status_pembayaran', 0)->doesnthave('pembayaran');
                            break;
                        }

                    }
                })
                ->rawColumns(['mengundang', 'nama_peserta', 'total_mengundang', 'diundang_oleh', 'status_pembayaran', 'bukti_pembayaran', 'button_proses', 'unique_number'])
                ->addIndexColumn()
                ->make(true);
        }

        $users = User::query()->with('mengundang','diundang')->where('email', '!=', 'admin@lpkn.org');
        $pemenang = ReferrCountTerverifikasi::with('user')->orderBy('jumlah', 'desc')->limit(10)->get();

        $data = array(
            'total_user' => $users->count(),
            'total_user_terverifikasi' => $users->where('status_pembayaran', 1)->count(),
            'pemenang' => $pemenang
        );

        return View::make('pages.admin.dashboard', $data);
    }
    
    public function users_affiliasi(Request $request)
    {
        if (!Auth::check()) {
            return redirect('admin/login');
        }

        if(request()->ajax()) {
            $query = User::with('mengundang', 'mengundang_terverifikasi', 'diundang', 'pembayaran.file')->where('email', '!=', 'admin@lpkn.org')->where('affiliasi', '=', 1)->orderBy('updated_at', 'desc');

            return datatables()->eloquent($query)
                ->addColumn('mengundang', function($query){
                    $counter = 0;
                    $ret = '<div class="flex">';
                    if(!empty($query->mengundang)){
                        foreach($query->mengundang as $item){
                            if($counter > 2){
                                break;
                            }else{
                                $ret .= '
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="img" class="tooltip rounded-full"
                                        src="https://avatars.dicebear.com/api/initials/'.$item->name.'.svg"
                                        title="'.$item->name.'">
                                </div>
                                ';
                                $counter++;
                            }
                        }

                        if($counter > 2 && ($query->mengundang->count() - $counter) != 0){
                            $diff = $query->mengundang->count() - $counter;
                            $ret .= '
                            <div class="w-10 h-10 image-fit">
                                <div class="rounded-full text-center">
                                    '. number_format($diff,0,',','.') .' +
                                </div>
                            </div>
                            ';
                        }
                        $ret .= '</div>';
                    }else{
                        $ret .= '</div>';
                    }
                    return $ret;
                })
                ->addColumn('nama_peserta', function($query){
                    return '<a onclick="detail_users('.$query->id.')" href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="text-theme-1"><b>'.$query->name.'</b></a>';
                })
                ->addColumn('total_mengundang', function($query){
                    return isset($query->mengundang) ? number_format(count($query->mengundang),0,',','.') : 0;
                })
                ->addColumn('total_terverifikasi', function($query){
                    return isset($query->mengundang_terverifikasi) ? number_format(count($query->mengundang_terverifikasi),0,',','.') : 0;
                })
                ->addColumn('total_rewards', function($query){
                    return isset($query->mengundang_terverifikasi) ? 'Rp.'.number_format((count($query->mengundang_terverifikasi)*10000),0,',','.') : 'Rp.0';
                })
                ->addColumn('diundang_oleh', function($query){
                    return isset($query->diundang) ? $query->diundang->name : "";
                })
                ->addColumn('bukti_pembayaran', function($query){
                    return isset($query->pembayaran) && isset($query->pembayaran->file) ? "<img src='".asset('uploads/'.$query->pembayaran->file->path)."' class='h-16 w-auto' data-action='zoom'>" : "";
                })
                ->addColumn('total_tagihan', function($query){
                    $id = $query->id;
                    $total = env('HARGA_EVENT', 0) + $id;

                    return 'Rp ' . number_format($total,0, ',', '.');
                })
                ->addColumn('unique_number', function($query){
                    return $query->id;
                })
                ->addColumn('status_pembayaran', function($query){
                    if($query->status_pembayaran == 0){
                        return '
                        <span class="px-2 py-1 rounded-full bg-theme-12 text-white mr-1">Belum diverifikasi</span>
                        ';
                    }else{
                        return '
                        <span class="px-2 py-1 rounded-full bg-theme-1 text-white mr-1">Terverifikasi</span>
                        ';
                    }
                })
                ->addColumn('button_proses', function($query){
                        return '<button class="button inline-block bg-theme-1 text-white float-right" onclick="proses_pembayaran('.$query->id.')">View</button';
                })
                ->addColumn('rek_bank', function($query){
                        return '<b>'.$query->nama_rek.'</b><br/>'.$query->nama_bank.' '.$query->no_rek;
                })
                ->filter(function ($query) use ($request) {
                    if (!empty($request->get('id'))) {

                        $req = str_replace(".", "", $request->get('id'));

                        $tagihan = $req - env('HARGA_EVENT', 0);
                        if($tagihan > 0){
                            $query->where('id', $tagihan);
                        }
                    }

                    if (!empty($request->get('startDate')) && !empty($request->get('endDate'))) {
                        $startDate = date('Y-m-d', round($request->get('startDate') / 1000));
                        $endDate = date('Y-m-d', round($request->get('endDate') / 1000));
                        
                        $query->whereHas('pembayaran', function($q) use ($startDate, $endDate){
                            $q->whereBetween('created_at', [$startDate, $endDate]);
                        });
                    }

                    if (!empty($request->get('status'))) {
                        $req = $request->get('status');

                        switch($req) {
                            case 1 :
                                $query->where('status_pembayaran', 1);
                            break;
                            case 2 :
                                $query->where('status_pembayaran', 0)->has('pembayaran');
                            break;
                            case 3 :
                                $query->where('status_pembayaran', 0)->doesnthave('pembayaran');
                            break;
                        }

                    }
                })
                ->rawColumns(['mengundang', 'nama_peserta', 'total_mengundang', 'diundang_oleh', 'status_pembayaran', 'bukti_pembayaran', 'button_proses', 'rek_bank', 'unique_number'])
                ->addIndexColumn()
                ->make(true);
        }

        $users = User::query()->with('mengundang','diundang')->where('email', '!=', 'admin@lpkn.org');
        $pemenang = ReferrCountTerverifikasi::with('user')->orderBy('jumlah', 'desc')->limit(10)->get();

        $data = array(
            'total_user' => $users->count(),
            'total_user_terverifikasi' => $users->where('status_pembayaran', 1)->count(),
            'pemenang' => $pemenang
        );

        return View::make('pages.admin.users_affiliasi', $data);
    }

    public function detail_user($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response([
                'ok' => false,
                'data' => [
                    'message' => 'Pendaftar tidak ditemukan'
                ]
            ],422);
        }
        $peserta = User::with('mengundang', 'mengundang_terverifikasi', 'diundang', 'pembayaran.file')->where('id', $id)->first();
        $julah_terundang = count($peserta->mengundang);
        $julah_terverifikasi = count($peserta->mengundang_terverifikasi);
        $rewords = 'Rp.'.number_format((count($peserta->mengundang_terverifikasi)*10000));
        $ref_link = route("landing").'?ref='.$peserta->ref;
        $stts_pembayaran = $peserta->status_pembayaran == 1 ? "LUNAS" : "BELUM";
        return Response::json(array('peserta' => $peserta, 'julah_terundang' => $julah_terundang, 'julah_terverifikasi' => $julah_terverifikasi, 'rewords' => $rewords, 'ref_link' => $ref_link, 'stts_pembayaran' => $stts_pembayaran));
    }



    public function proses($id){
        $user = User::find($id);

        if (!$user) {
            return response([
                'ok' => false,
                'data' => [
                    'message' => 'Pendaftar tidak ditemukan'
                ]
            ],422);
        }

        $user->status_pembayaran = 1;
        $user->save();

        $user = User::with('mengundang:ref_by,name,instansi','diundang')->where('id', $id)->first();
        
        $this->send_wa($user);

        // Mail::to($user->email)->send(new OrderShipped('Pendaftaran Berhasil!', $user, 'email.template'));

        return response([
            'ok' => true,
            'data' => [
                'message' => 'Pendaftar Status berhasil diproses'
            ]
        ],200);
    }
    
    public function send_wa($user){
        //send wa
        $group_wa_nya = env('WA_GROUP_5', 0);
        $gelombang_nya = env('TGL', '');
        $messages =
'Yth Bapak/Ibu 
*'.$user->name.'*

Terima kasih sudah melakukan pembayaran 

*'.env('JENIS', 0).'* 
'.env('JUDUL_1', 0).'
*'.env('JUDUL_2', 0).'*
'.env('JUDUL_DESCRIPTION', 0).'

'.$gelombang_nya.'
'.env('WAKTU', 0).'
'.env('WAKTU_2', 0).'

*Agar Memudahkan Koordinasi Kegiatan Silahkan Bergabung di Group WhatsApp*

Link group WhatsApp : '.$group_wa_nya.'

*Link Zoom Workshop Online :*
(Untuk link pertemuan akan kami infokan di dalam grup WA)

Komunikasi selanjutnya dengan panitia :
WhatsApp Only :
*https://wa.me/'.env('WA_1', 0).'*
Panitia :
*'.env('WA_2', 0).'*
*'.env('WA_3', 0).'*

Terimakasih
        ';

        $data_wa = array(
           'phone' => '62'.$user->hp,
           'body' => $messages
        );

        $data_string = json_encode($data_wa);
        $ch = curl_init('https://eu216.chat-api.com/instance194657/sendMessage?token=7fsnbsm1kvhubq9m');

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
           'Content-Type: application/json',
           'Content-Length: ' . strlen($data_string)
           )
        );
        $result = curl_exec($ch);
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'Export User Data Referral Program.xlsx');
    }

    public function import_order_online(Request $request)
    {

        $data = $request->all();

        $validator = Validator::make($data, array(
            'file' => "required|mimes:xls,xlsx",
        ));

        if ($validator->fails()) {
            return response()->json([
                'status'    => "fail",
                'messages' => $validator->errors()->first(),
            ], 422);
        }

        Excel::import(new OrderOnlineImport, request()->file('file'));

        return response()->json([
            'status'    => "ok",
            'messages' => "Data berhasil diperbarui"
        ], 200);
    }
}
