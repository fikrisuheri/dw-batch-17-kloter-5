@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="javascript:void(0)" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="container mt-5 jumbotron">
    <h3>Edit Video</h3>
    <form action="{{ route('video.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Edit Video</label>
            <input type="text" name="title" id="" class="form-control" required value="{{ $video->title }}">
            <input type="hidden" name="id" id="" class="form-control" required value="{{ $video->id }}">
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
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail" id="" class="form-control">
            <small>Kosongkan jika tidak akan mengubah poto</small>
        </div>
        <div class="form-group">
            <label for="">Kode Embed Youtube</label>
            <input type="text" name="attache" id="" class="form-control" required value="{{ $video->attache }}">
        </div>
        <button type="submit" class="btn btn-success btn-block">Simpan video</button>
    </form>
</div>
@endsection