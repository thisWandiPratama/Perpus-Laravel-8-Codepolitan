@extends('admin.template.default')


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Penulis</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.author.update', $author)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name='name' class="from-control" placeholder="Masukan Nama Penulis" value="{{$author->name}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
