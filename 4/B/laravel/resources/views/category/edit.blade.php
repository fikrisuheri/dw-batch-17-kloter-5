@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="javascript:void(0)" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="container mt-5 jumbotron">
    <h3>Edit Kategori</h3>
<form action="{{ route('category.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="name" id="" class="form-control" required value="{{ $category->name }}">
            <input type="hidden" name="id" id="" class="form-control" required value="{{ $category->id }}">
        </div>
        <button type="submit" class="btn btn-success btn-block">Update Kategori</button>
    </form>
</div>
@endsection