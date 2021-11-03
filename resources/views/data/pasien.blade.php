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
                                    <th>No Rekam Medis</th>
                                    <th>Nama</th>
                                    <th>Tanggal Tes</th>
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
                    <label>No Lab:</label>
                    <input type="text" class="form-control" name="no_lab" id="no_lab">
                </div>
                <div class="form-group">
                    <label>No Rekam Medis:</label>
                    <input type="text" class="form-control" name="no_rm" id="no_rm">
                </div>
               
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label>Nama Dokter:</label>
                    <input type="text" class="form-control" name="nama_dok" id="nama_dok">
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
                    <label>Umur:</label>
                    <input type="text" class="form-control" name="umur" id="umur">
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
                    <label>No Hp:</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                </div>
                <div class="form-group">
                    <label>Lokasi:</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi">
                </div>
                <div class="form-group">
                    <label>Tanggal Tes:</label>
                    <input type="text" class="form-control" name="tgl_tes" id="tgl_tes">
                </div>
                <div class="form-group">
                    <label>Bahan:</label>
                    <input type="text" class="form-control" name="bahan" id="bahan">
                </div>
                <div class="form-group">
                    <label>Hasil Pemeriksaan:</label>
                    <select class="form-control mb-1" name="hasil" id="hasil">
                        <option value="Positif">Positif</option>
                        <option value="Negatif">Negatif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nilai Rujukan:</label>
                    <select class="form-control mb-1" name="nilai_rujukan" id="nilai_rujukan">
                        <option value="Positif">Positif</option>
                        <option value="Negatif">Negatif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Satuan:</label>
                    <select class="form-control mb-1" name="satuan" id="satuan">
                        <option value="Positif">Positif</option>
                        <option value="Negatif">Negatif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Metode:</label>
                    <select class="form-control mb-1" name="metode" id="metode">
                        <option value="Swab">Swab</option>
                        <option value="Rapid">Rapid</option>
                        <option value="PCR">PCR</option>
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
                {data: 'no_rm', name: 'no_rm'},
                {data: 'nama', name: 'nama'},
                {data: 'tgl_tes', name: 'tgl_tes'},
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
                    no_lab: $('#no_lab').val(),
                    no_rm: $('#no_rm').val(),
                    nama: $('#nama').val(),
                    nama_dok: $('#nama_dok').val(),
                    jns_kelamin: $('#jns_kelamin').val(),
                    umur: $('#umur').val(),
                    tgl_lahir: $('#tgl_lahir').val(),
                    alamat: $('#alamat').val(),
                    no_hp: $('#no_hp').val(),
                    lokasi: $('#lokasi').val(),
                    tgl_tes: $('#tgl_tes').val(),
                    bahan: $('#bahan').val(),
                    hasil: $('#hasil').val(),
                    nilai_rujukan: $('#nilai_rujukan').val(),
                    satuan: $('#satuan').val(),
                    metode: $('#metode').val(),
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
                    no_lab: $('#editNo_lab').val(),
                    no_rm: $('#editNo_rm').val(),
                    nama: $('#editNama').val(),
                    nama_dok: $('#editNama_dok').val(),
                    jns_kelamin: $('#editJns_kelamin').val(),
                    umur: $('#editUmur').val(),
                    tgl_lahir: $('#editTgl_lahir').val(),
                    alamat: $('#editAlamat').val(),
                    no_hp: $('#editNo_hp').val(),
                    lokasi: $('#editLokasi').val(),
                    tgl_tes: $('#editTgl_tes').val(),
                    bahan: $('#editBahan').val(),
                    hasil: $('#editHasil').val(),
                    nilai_rujukan: $('#editNilai_rujukan').val(),
                    satuan: $('#editSatuan').val(),
                    metode: $('#editMetode').val(),
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
                    $('.datatable').DataTable().ajax.reload();
                    setInterval(function(){ 
                        // $('.datatable').DataTable().ajax.reload();
                        $('#DeletePasienModal').hide();
                        location.reload();
                    }, 1000);
                }
            });
        });
    });
</script>
@endsection