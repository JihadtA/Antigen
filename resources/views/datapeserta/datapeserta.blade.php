@extends('layouts.master')
@section('breadcrumb')
<h2>{{ $title }}</h2>
@endsection
@section('content')
<a href="/datapeserta/add" class="btn btn-primary btn-sm">Tambah</a>
<p></p>   
   @if (session('pesan'))
   <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h5><i class="icon fas fa-check"></i> Success!</h5>
       {{ session('pesan') }}
     </div>
       
   @endif

  
   <div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Jenis Cek</th>
          <th>Hasil</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($datapes as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{$data->nik}}</td>
              <td>{{$data->nama}}</td>
              <td>{{$data->jns_cek}}</td>
              <td>{{$data->hasil}}</td>
              <td>
                <a href="/datapeserta/detail/{{$data->id}}" class="btn btn-sm btn-success">Detail</a>
                <a href="/datapeserta/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
   </div>

   @foreach ($datapes as $data)
       <div class="modal fade" id="delete{{ $data->id }}">
           <div class="modal-dialog modal-sm">
           <div class="modal-content bg-danger">
               <div class="modal-header">
               <h4 class="modal-title">{{ $data->nama }}</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                   <p>Apakah Anda yakin ingin menghapus data ini ???&hellip;</p>
               </div>
               <div class="modal-footer justify-content-between">
                   <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                   <a href="/datapeserta/delete/{{ $data->id }}" class="btn btn-outline-light">Yes</a>
               </div>
           </div>
           <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
       <!-- /.modal -->
     @endforeach 
@endsection
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>