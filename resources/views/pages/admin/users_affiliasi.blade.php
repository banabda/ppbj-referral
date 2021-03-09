@extends('layouts.admin')
@section('content')

<style>
    .cut-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>

<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i
                data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                class="breadcrumb--active">Users Affiliasi</a> </div>
        <!-- END: Breadcrumb -->

        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                <img alt="img" src="https://avatars.dicebear.com/api/initials/Admin Lpkn.svg">
            </div>
            <div class="dropdown-box w-56">
                <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                        <div class="font-medium">LPKN Admin</div>
                        <div class="text-xs text-theme-41 dark:text-gray-600">Admin</div>
                    </div>
                    <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>


    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">

        <!-- BEGIN: Weekly Top Products -->
        <div class="col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Data Peserta Affiliasi
                </h2>
            </div>
            <div class="flex box p-2 flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="flex-auto items-center sm:mr-4 mt-3 xl:mt-0">
                    <input type="text" id="db-search" placeholder="Nama .." class="input w-full border">
                </div>
                <div class="flex-auto items-center sm:mr-4 mt-3 xl:mt-0">
                    <input type="text" id="db-search-unique" data-column="1" placeholder="Total tagihan .." class="input w-full border rupiah">
                </div>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                    <select id="db-jumlah" class="input border mr-2">
                        <option value="5">5 Data</option>
                        <option value="10">10 Data</option>
                        <option value="20">20 Data</option>
                        <option value="30">30 Data</option>
                        <option value="40">40 Data</option>
                        <option value="50">50 Data</option>
                        <option value="-1">All</option>
                    </select>
                    <a href="{{ route('admin.export.user') }}" target="_blank">
                        <button class="button box flex items-center bg-green-800 text-white dark:text-white-300"> <i
                                data-feather="file-text" class="hidden sm:block w-4 h-4 xl:mr-2"></i> Export to Excel
                        </button>
                    </a>
                    <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#modalImport"
                            class="button inline-block bg-theme-1 xl:ml-2 text-white">Import Order Online</a> </div>
                </div>
            </div>

            <div class="flex box p-2 flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="flex-auto items-center sm:mr-4 mt-3 xl:mt-0">
                    <input id="db-verified-at" placeholder="Tanggal upload pembayaran .." data-daterange="true" class="input w-full text-center border block mx-auto">
                </div>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                    <select id="db-status" class="input border mr-2">
                        <option selected value="-1">Semua data</option>
                        <option value="1">Sudah diverifikasi</option>
                        <option value="2">Sudah melakukan pembayaran</option>
                        <option value="3">Belum melakukan pembayaran</option>
                    </select>
                </div>
            </div>

            <div class="modal" id="modalImport">
                <div class="modal__content">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">Import Order Online</h2> 
                    </div>
                    <div class="w-full">
                        <form id="importOrderOnlineForm" method="POST" action="{{ route('admin.import.user') }}">
                            <input name="file" type="file" /> 
                        
                    </div>
                    <div class="px-5 py-3 text-right border-t border-gray-200 dark:border-dark-5"> 
                        <button class="button w-20 bg-theme-1 text-white">Upload</button> </div>
                    </form>
                </div>
            </div>

            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0 my-3">
                <table class="table table-report sm:mt-2" id="userTableData">
                    <thead>
                        <tr>
                            <!-- <th class="whitespace-no-wrap bg-white">MENGUNDANG</th> -->
                            <!-- <th class="whitespace-no-wrap bg-white">UNIQUE<br>NUMBER</th> -->
                            <th class="whitespace-no-wrap bg-white">NAMA<br>LENGKAP</th>
                            <th class="text-center whitespace-no-wrap bg-white">PESERTA<br>TERUNDANG</th>
                            <th class="text-center whitespace-no-wrap bg-white">PESERTA<br>MEMBAYAR</th>
                            <th class="text-center whitespace-no-wrap bg-white">TOTAL<br>REWARDS</th>
                            <th class="text-center whitespace-no-wrap bg-white">REK. BANK</th>
                            <!-- <th class="text-center whitespace-no-wrap bg-white">STATUS<br>PEMBAYARAN</th> -->
                            <!--<th class="text-center whitespace-no-wrap bg-white">PROSES</th>-->
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- END: Weekly Top Products -->

        </div>
    </div>
</div>
<!-- END: Content -->

 <div class="modal" id="basic-modal-preview">
    <div class="modal__content modal__content--lg p-10 text-center relative"><a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
        <div class="intro-y box p-5">
            <div class="flex">
                <div class="mr-auto font-medium text-base"><h2 class="text-lg font-medium mr-auto mt-2" id="nama"></h2></div>
                <!-- <div class="font-medium text-base">$220</div> -->
            </div>
            <div class="flex pt-4 border-t border-gray-200 dark:border-dark-5">
                <div class="mr-auto">Email</div>
                <div class="text-theme-6" id="email"></div>
            </div>
            <div class="flex mt-4">
                <div class="mr-auto">No.Tlp/HP</div>
                <div id="hp"></div>
            </div>
            <div class="flex mt-4">
                <div class="mr-auto">Link Affiliasi</div>
                <div id="ref_link"></div>
            </div>
            <div class="flex mt-4">
                <div class="mr-auto">Terundang</div>
                <div id="terundang"></div>
            </div>
            <div class="flex mt-4">
                <div class="mr-auto">Membayar</div>
                <div id="membayar"></div>
            </div>
            <div class="flex mt-4 pt-4 border-t border-gray-200 dark:border-dark-5">
                <div class="mr-auto font-medium text-base">Total Rewards</div>
                <div class="font-medium text-base" id="rewords"></div>
            </div>
        </div>
    </div>
 </div>


<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>
<script type="text/javascript">
	$(document).ready(() => {

        $(document).on('keyup', ".rupiah",  function () {
            this.value = formatRupiah(this.value, "");
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? rupiah : "";
        }

    })
</script>

<script>
    function proses_pembayaran(id) {
        Swal.fire({
            title: 'Apa anda yakin?',
            text: "Proses pembayaran akan terverifikasi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, verifikasi!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    text : "Mengirim email ke peserta..."
                });
                swal.showLoading();

                return fetch(`{{ route('admin.proses.pembayaran') }}/`+id)
                    .then(response => {
                        swal.close();

                        if (!response.ok) {
                            throw new Error(response.data.message)
                        }

                        $('#userTableData').DataTable().draw(false);
                        return response.json()
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                        `Request failed: ${error}`
                        )
                    })
            }
        })
    }

    var startDate, endDate;

    var table = $('#userTableData').DataTable({
        dom : 'Brtp',
        processing: true,
        serverSide: true,
        ajax: {
            url : "{{ route('admin.users_affiliasi') }}",
            data : function (d) {
                d.id = $('#db-search-unique').val();
                d.startDate = startDate;
                d.endDate = endDate;
                d.status = $('#db-status').val();
            }
        },
        pageLength: 5,
        columns: [
            // {data: 'mengundang', name: 'mengundang', orderable: false, searchable: false},
            // {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            // {data: 'unique_number', name: 'unique_number'},
            {data: 'nama_peserta', name: 'nama_peserta'},
            {data: 'total_mengundang', name: 'total_mengundang'},
            {data: 'total_terverifikasi', name: 'total_terverifikasi'},
            // {data: 'ref', name: 'ref'},
            // {data: 'diundang_oleh', name: 'diundang_oleh'},
            {data: 'total_rewards', name: 'total_rewards'},
            {data: 'rek_bank', name: 'rek_bank', orderable: false, searchable: false},
            // {data: 'status_pembayaran', name: 'status_pembayaran', orderable: false, searchable: false},
            // {data: 'button_proses', name: 'button_proses', orderable: false, searchable: false}
        ]
    });

    var picker = new Litepicker(
        { 
            element: document.getElementById('db-verified-at'),
            format: 'DD/MM/YYYY' ,
            singleMode: false,
            numberOfColumns: 2,
            numberOfMonths: 2,
            showWeekNumbers: true,
            singleMode: false,
            numberOfColumns: 2,
            numberOfMonths: 2,
            showWeekNumbers: true,
            dropdowns: {
                minYear: 1990,
                maxYear: null,
                months: true,
                years: true
            },
            onSelect: function(date1, date2){
                startDate = date1.valueOf();
                endDate = date2.valueOf();
                table.draw(false);
            }
        }
    );

    $('#db-search-unique').keyup(function(){
        table.columns(1).search( $(this).val() ).draw();
    });

    $('#db-search').keyup(function(){
        table.columns(2).search( $(this).val() ).draw();
    });

    $('#db-jumlah').on('change', function(){
        table.page.len($(this).val()).draw();
    });

    $('#db-status').on('change', function(){
        table.draw(false);
    });

    $('#importOrderOnlineForm').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: $(this).attr("action"),
            data: new FormData($('#importOrderOnlineForm')[0]),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.status == "ok"){
                    toastr["success"](data.messages);
                    location.reload();
                }
            },
            error: function(data){
                var data = data.responseJSON;
                if(data.status == "fail"){
                     toastr["error"](data.messages);
                }
            }
        });
    });
    
  function detail_users(id){
    user_id = id;
    //Ajax Load data from ajax
    $.ajax({
        url : "{{ route('admin.detail_user') }}/" + user_id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('#nama').text(data.peserta['name']);
            $('#email').text(data.peserta['email']);
            $('#hp').text(data.peserta['hp']);
            $('#ref_link').text(data.ref_link);
            $('#terundang').text(data.julah_terundang);
            $('#membayar').text(data.julah_terverifikasi);
            $('#rewords').text(data.rewords);

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
  }
</script>
@endsection