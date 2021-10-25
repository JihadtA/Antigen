@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $judultabel }}</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            Data
        </li>
        <li class="breadcrumb-item active">
            <strong>Pasien</strong>
        </li>
    </ol>
@endsection
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="text-right mr-3">
                            <button class="btn btn-primary btn-sm" type="button"  data-toggle="modal" data-target="#CreatePasienModal">
                                <strong>Create Pasien</strong>
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Cek</th>
                                    <th>Hasil</th>
                                    <th width="150" class="text-center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Pasien Modal -->
<div class="modal fade" id="CreatePasienModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pasien Create</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong>Pasien was added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label>NIK:</label>
                    <input type="text" class="form-control" name="nik" id="nik">
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    {{-- <input type="text" class="form-control" name="jns_kelamin" id="jns_kelamin"> --}}
                    <select class="form-control mb-1" name="jns_kelamin" id="jns_kelamin">
                        <option value="Laki-Laki" @if (isset($pasien)) @if ($pasien->jns_kelamin == "Laki-Laki") selected @endif @endif>Laki-Laki</option>
                        <option value="Perempuan" @if (isset($pasien)) @if ($pasien->jns_kelamin == "Perempuan") selected @endif @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Pemeriksaan:</label>
                    {{-- <input type="text" class="form-control" name="jns_cek" id="jns_cek"> --}}
                    <select class="form-control mb-1" name="jns_cek" id="jns_cek">
                        <option value="Rapid">Rapid</option>
                        <option value="Swap">Swap</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hasil Pemeriksaan:</label>
                    {{-- <input type="text" class="form-control" name="hasil" id="hasil"> --}}
                    <select class="form-control mb-1" name="hasil" id="hasil">
                        <option value="Positif">Positif</option>
                        <option value="Negatif">Negatif</option>
                    </select>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreatePasienForm">Create</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Pasien Modal -->
<div class="modal" id="EditPasienModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pasien Edit</h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong>Pasien was added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="EditPasienModalBody">
                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitEditPasienForm">Update</button>
                <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Pasien Modal -->
<div class="modal fade" id="DeletePasienModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pasien Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h4>Are you sure want to delete this Pasien?</h4>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="SubmitDeletePasienForm">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>

<!-- Detail Pasien Modal -->
<div class="modal" id="DetailPasienModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Pasien</h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong>Pasien was added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="DetailPasienModalBody">
                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // init datatable.
        var dataTable = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            pageLength: 5,
            // scrollX: true,
            "order": [[ 0, "desc" ]],
            ajax: '{{ route('get-pasien') }}',
            columns: [
                {data: 'nik', name: 'nik'},
                {data: 'nama', name: 'nama'},
                {data: 'jns_cek', name: 'jns_cek'},
                {data: 'hasil', name: 'hasil'},
                {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
            ]
        });

        // Create Pasien Ajax request.
        $('#SubmitCreatePasienForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('pasien.store') }}",
                method: 'post',
                data: {
                    nik: $('#nik').val(),
                    nama: $('#nama').val(),
                    jns_kelamin: $('#jns_kelamin').val(),
                    tmpt_lahir: $('#tmpt_lahir').val(),
                    tgl_lahir: $('#tgl_lahir').val(),
                    alamat: $('#alamat').val(),
                    jns_cek: $('#jns_cek').val(),
                    hasil: $('#hasil').val(),
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('.datatable').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#CreatePasienModal').modal('hide');
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });

         // Get single Pasien in DetailModel
         $('.modelClose').on('click', function(){
            $('#DetailPasienModal').hide();
        });
        var id;
        $('body').on('click', '#getDetailPasienData', function(e) {
            // e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: "pasien/"+id+"/detail",
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                    console.log(result);
                    $('#DetailPasienModalBody').html(result.html);
                    $('#DetailPasienModal').show();
                }
            });
        });



        // // Detail Data Function
        // var deleteID;
        // $('body').on('click', '#getDetailPasienData', function(){
        //     deleteID = $(this).data('id');
        // })
        // $('#SubmitDeletePasienForm').click(function(e) {
        //     e.preventDefault();
        //     var id = deleteID;
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         url: "pasien/"+id,
        //         method: 'DELETE',
        //         success: function(result) {
        //             setInterval(function(){ 
        //                 $('.datatable').DataTable().ajax.reload();
        //                 $('#DeletePasienModal').hide();
        //             }, 1000);
        //         }
        //     });
        // });

        // Get single Pasien in EditModel
        $('.modelClose').on('click', function(){
            $('#EditPasienModal').hide();
        });
        var id;
        $('body').on('click', '#getEditPasienData', function(e) {
            // e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: "pasien/"+id+"/edit",
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                    console.log(result);
                    $('#EditPasienModalBody').html(result.html);
                    $('#EditPasienModal').show();
                }
            });
        });

        // Update Pasien Ajax request.
        $('#SubmitEditPasienForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "pasien/"+id,
                method: 'PUT',
                data: {
                    nik: $('#editNik').val(),
                    nama: $('#editNama').val(),
                    jns_kelamin: $('#editJns_kelamin').val(),
                    tmpt_lahir: $('#editTmpt_lahir').val(),
                    tgl_lahir: $('#editTgl_lahir').val(),
                    alamat: $('#editAlamat').val(),
                    jns_cek: $('#editJns_cek').val(),
                    hasil: $('#editHasil').val(),
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('.datatable').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#EditPasienModal').hide();
                        }, 2000);
                    }
                }
            });
        });

        // Delete Pasien Ajax request.
        var deleteID;
        $('body').on('click', '#getDeleteId', function(){
            deleteID = $(this).data('id');
        })
        $('#SubmitDeletePasienForm').click(function(e) {
            e.preventDefault();
            var id = deleteID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "pasien/"+id,
                method: 'DELETE',
                success: function(result) {
                    setInterval(function(){ 
                        $('.datatable').DataTable().ajax.reload();
                        $('#DeletePasienModal').hide();
                    }, 1000);
                }
            });
        });
    });
</script>
@endsection