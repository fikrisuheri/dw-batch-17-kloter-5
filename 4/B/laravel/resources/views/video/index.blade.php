@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="{{ route('video.add') }}" class="btn btn-primary">Add Video</a>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach ($video as $item)
        <div class="col-md-3">
            <div class="card mr-1 bg-light" style="border: none">
                <img class="card-img-top" src="{{ asset('storage/'.$item->thumbnail) }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <span class="card-title">{{ $item->title }}</span>
                        <small>{{ $item->nama_category}}</small>
                    </div>
                    <a href="{{ route('video.detail',$item->id) }}" class="btn btn-primary mt-3 btn-block">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection