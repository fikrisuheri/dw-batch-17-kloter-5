@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="javascript:void(0)" class="btn btn-primary" onclick="window.history.back()">Kembali</a>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <iframe width="420" height="315"
        src="https://www.youtube.com/embed/{{ $video->attache }}">
            </iframe>
        </div>
        <div class="col-md-6">
            <h3>{{ $video->title }}</h3>
            <h5 class="text-warning">{{ $video->nama_category }}</h5>
            <div class="mt-2">
                <a href="{{ route('video.edit',$video->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('video.delete',$video->id) }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
@endsection