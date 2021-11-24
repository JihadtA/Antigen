@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" >
<style>
    .borderless td, .borderless th {
        border: none;
        width: 33%;
        padding-left: 6px;
        padding-right: 6px;
    }
    .borderless {
  	    width: 100%;
    }
</style>
@endsection
@section('content')

<div class="text-right mr-3">
    <button style="margin-bottom: 15px" class="btn btn-primary btn-sm" type="button"  data-toggle="modal" data-target="#CreatePasienModal">
        <strong>Tambah Pasien</strong>
    </button>
</div>
<div id="kopi-covid"></div>
<script>
var f = document.createElement("iframe")
f.src = "https://kopi.dev/widget-covid-19/"
f.width = "100%"
f.height = 380
f.scrolling = "no"
f.frameBorder = 0
var rootEl = document.getElementById("kopi-covid")
console.log(rootEl)
rootEl.appendChild(f)
</script>

<!-- Create Pasien Modal -->
<div class="modal fade" id="CreatePasienModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pasien</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form id="submitData">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong> Pasien was added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <table class="borderless">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>No Lab:</label>
                                <input type="text" class="form-control" name="no_lab" id="no_lab">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>No Rekam Medis:</label>
                                <input type="text" class="form-control" name="no_rm" id="no_rm">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Lokasi:</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group">
                                <label>Nama:</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Nama Dokter:</label>
                                <input type="text" class="form-control" name="nama_dok" id="nama_dok">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Umur:</label>
                                <input type="text" class="form-control" name="umur" id="umur">
                            </div>
                        </td>
                        <td colspan="2" rowspan="2">
                            <div class="form-group">
                                <label>Alamat:</label>
                                <textarea class="form-control" name="alamat" id="alamat" style="margin-top: 0px; margin-bottom:0px; height:133px;" ></textarea>
                            </div>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Tanggal Lahir:</label>
                                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" data-provide="datepicker">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>No Hp:</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Jenis Kelamin:</label>
                                <select class="form-control mb-1" name="jns_kelamin" id="jns_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Tanggal Tes:</label>
                                <input type="text" class="form-control" name="tgl_tes" id="tgl_tes" data-provide="datepicker">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Metode:</label>
                                <select class="form-control mb-1" name="metode" id="metode">
                                    <option value="Swab">Swab</option>
                                    <option value="Rapid">Rapid</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>IgM:</label>
                                <select class="form-control mb-1" name="igm" id="igm">
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Negatif</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>IgG:</label>
                                <select class="form-control mb-1" name="igg" id="igg">
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Negatif</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Apakah anda memiliki keluhan Demam ?</label> <br>
                                <input type="radio"  id="k_satu1" name="k_satu" value="1"> Ya</label> <br>
                                <input type="radio" id="k_satu2" name="k_satu" value="0" checked> Tidak</label> <br>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Apakah anda memiliki keluhan Nyeri telan ?</label> <br>
                                <input type="radio"  id="k_dua1" name="k_dua" value="1"> Ya</label> <br>
                                <input type="radio" id="k_dua2" name="k_dua" value="0" checked> Tidak</label> <br>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="form-group">
                                <label>Apakah anda Pernah :</label> <br>
                                <li>Datang ke wilayah zona merah dan melakukan aktivitas disana</li>
                                <li>Pernah berinteraksi dengan terduga pasien Covid-19</li>
                                <li>Pernah mengalami gajala yang berhubungan dengan Covid-19</li>
                                <li>Pernah mengikuti acara yang dihadiri banyak orang pada saat pandemi corona</li><br>
                                <input type="radio"  id="screening1" name="status" value="1"> Ya</label>
                                <input type="radio" id="screening2" name="status" value="0" checked> Tidak</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Apakah anda memiliki keluhan Batuk?</label> <br>
                                <input type="radio"  id="k_tiga1" name="k_tiga" value="1"> Ya</label> <br>
                                <input type="radio" id="k_tiga2" name="k_tiga" value="0" checked> Tidak</label> <br>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label>Apakah anda memiliki keluhan Nafas pendek / Sesak nafas / Nafas terasa berat ?</label> <br>
                                <input type="radio"  id="k_empat1" name="k_empat" value="1"> Ya</label> <br>
                                <input type="radio" id="k_empat2" name="k_empat" value="0" checked> Tidak</label><br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>
                    </table>
    

                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreatePasienForm">Tambah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
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
                    igm: $('#igm').val(),
                    igg: $('#igg').val(),
                    metode: $('#metode').val(),
                    k_satu: $('input[name="k_satu"]:checked').val(),
                    k_dua: $('input[name="k_dua"]:checked').val(),
                    k_tiga: $('input[name="k_tiga"]:checked').val(),
                    k_empat: $('input[name="k_empat"]:checked').val(),
                    screening: $('input[name="status"]:checked').val(),
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
                            location.href = "{{ route('pasien.index') }}";
                            // location.reload();
                        }, 2000);
                    }
                }
            });
        });
</script>
@endsection

@section('script')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/date.js') }}"></script>
@endsection