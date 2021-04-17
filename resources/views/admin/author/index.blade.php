@extends('admin.template.default')


@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h1 class="box-title">Data Penulis</h1>
                <a href="{{route('admin.auhtor.create')}}" class="btn btn-primary"> Tambah Penulis</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                  @include('admin.template.partials.alert')
                <table id="author" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
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
<script>
    $(function(){
        $('#author').DataTable({
            processing : true,
            serverSide: true,
            ajax: '{{route('admin.auhtor.data')}}',
            columns : [
                {data : 'DT_RowIndex', orderable: false, searchabel: false},
                {data : 'name'},
                {data : 'action'}
            ],
        })
    });
</script>
@endpush
