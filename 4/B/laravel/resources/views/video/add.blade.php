@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="javascript:void(0)" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="container mt-5 jumbotron">
    <h3>Tambah Video</h3>
<form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nama Video</label>
            <input type="text" name="title" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">kategori</label>
            <select name="category_id" id="" class="form-control" required>
                @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="thumbnail" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">kode embed youtube</label>
            <input type="text" name="attache" id="" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Simpan Video</button>
    </form>
</div>
@endsection