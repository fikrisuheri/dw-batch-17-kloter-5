@extends('layout')
@section('content')
<div class="container">
    <div class="text-right">
        <a href="{{ route('category.add') }}" class="btn btn-primary">Add Category</a>
    </div>
</div>
<div class="container mt-5">
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @php
        $no = 1
        @endphp
        @foreach ($category as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->name }}</td>
            <td>
            <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger">Hapus</a>
                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection