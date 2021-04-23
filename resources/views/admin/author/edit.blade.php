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
                <div class="form-group @error('name')
                    has-error
                @enderror">
                    <label for="">Nama</label>
                    <input type="text" name='name' class="form-control" placeholder="Masukan Nama Penulis" value=" {{ old('name') ?? $author->name}}">
                    @error('name')
                    <span class="help-block ">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
