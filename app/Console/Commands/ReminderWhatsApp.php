<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use stdClass;

class ReminderWhatsApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (carbon::now()->format('d.m.y') < Carbon::createFromDate(2021, 4, 19)->format('d.m.y')) {
            $user = User::where('status_pembayaran', false)->whereNull('nama_rek')->get();
            $users = [];

            foreach ($user as $value) {
                $usr = (object)[];
                $usr->id = $value->id;
                $usr->name = $value->name;
                $usr->email = $value->email;
                $usr->hp = $value->hp;
                if ($usr->id == 2) {
                    log::info([$value->created_at->addDays(4)->format('d.m.y'), Carbon::now()->format('d.m.y')]);
                }
                if ($value->created_at->addDays(4)->format('d.m.y') == Carbon::now()->format('d.m.y')) {
                    $usr->kirim = 1;
                    array_push($users, $usr);
                } else if ($value->created_at->addDays(6)->format('d.m.y') == Carbon::now()->format('d.m.y')) {
                    $usr->kirim = 2;
                    array_push($users, $usr);
                } else if ($value->created_at->addDays(8)->format('d.m.y') == Carbon::now()->format('d.m.y')) {
                    $usr->kirim = 3;
                    array_push($users, $usr);
                }
            }
            $result = [];
            if (count($users) > 0) {
                $client = new Client();
                foreach ($users as $usr) {
                    if ($usr->hp) {
                        $phone = substr_replace($usr->hp, "62", 0, 0);
                    }
                    $total_harga = (int) env('HARGA_EVENT') + $usr->id;
                    // $total_harga = 1000;

                    $message = '
                    Salam Bapak/Ibu. ' . $usr->name . '
    
apakah jadi mengikuti kegiatan Pelatihan ?

' . env('JENIS') . env('JUDUL_1') . '
*' . env('JUDUL_2') . '*
' . env('JUDUL_DESCRIPTION') . '

Jumlah sesi: ' . env('JUMLAH_SESI') . '
Tanggal: ' . env('TGL') . '
Jam: ' . env('WAKTU') . '

Harga: *Rp.' . number_format($total_harga, 0, ",", ".") . '*

Silahkan transfer senilai ke rekening dibawah ini:

BRI
No. Rek. 213501000250301
Atas Nama: Lembaga Pengembangan dan Konsultasi Nasional

Mandiri
No. Rek. 0060010942294
Atas Nama: Lembaga Pengembangan dan Konsultasi Nasional

Mohon upload Bukti transfer di link ' . route("landing") . '

Komunikasi selanjutnya dengan panitia :
WhatsApp Only :
*https://wa.me/' . env('WA_1', 0) . '*
Panitia :
*' . env('WA_2', 0) . '*
*' . env('WA_3', 0) . '*

Terimakasih


*Info:*
Setelah Anda melakukan upload bukti pembayaran silahkan tunggu konfirmasi pembayaran dari Panitia,
Setelah di konfirmasi maka anda akan mendapatkan *WhatsApp* ke nomor handphone Anda berupa link Group WhatsApp

*Kunjungi juga Website* : https://www.LPKN.id';

                    $data = [
                        "phone" => $phone,
                        "body" => $message
                    ];
                    // $rsl = env('WA_URL') . '/sendMessage?token=' . env('WA_TOKEN');
                    $rsl = $client->request('POST', env('WA_URL') . '/sendMessage?token=' . env('WA_TOKEN'), [
                        'form_params' => $data
                    ])->getBody()->getContents();
                    array_push($result, $rsl);
                    sleep(1);
                }
            } else {
                Log::channel('cron')->info('No Reminder');
            }
            // log::info(['Reminder', $result]);
            Log::channel('cron')->info(['Reminder', $result]);

            return 0;
        }
        return 0;
    }
}
