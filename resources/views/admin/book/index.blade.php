@extends('admin.template.default')


@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h1 class="box-title">Data Buku</h1>
                <a href="{{route('admin.author.create')}}" class="btn btn-primary"> Tambah Buku</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="author" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Penulis</th>
                    <th>Sampul</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>


                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Hapus" style="display: none">
    </form>
@endsection

@push('scripts')
<script src='{{asset('assets/plugins/bootstrap-notify.min.js')}}'></script>
@include('admin.template.partials.alerts')
<script>
    $(function(){
        $('#author').DataTable({
            processing : true,
            serverSide: true,
            ajax: '{{route('admin.book.data')}}',
            columns : [
                {data : 'DT_RowIndex', orderable: false, searchabel: false},
                {data : 'title'},
                {data : 'description'},
                {data : 'author'},
                {data : 'cover'},
                {data : 'action'}
            ],
        })
    });
</script>
@endpush
