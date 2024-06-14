@extends('layouts.show')

@section('content')
<div class="content container-fluid flex-fill overflow-hidden my-2 bg-danger-subtle">
    <div class="row h-100 bg-warning">
        <div class="col-3">
            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary">edit</a>
            <form action="{{ route('brands.destroy', $brand->id) }} " method="POST"      onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
            <img src="{{ asset('storage/Brands/' .$brand->image) }}" alt="{{ $brand->name }}" class="img-fluid">
        </div>
        <div class="col-9 h-100">
            <div class="container-fluid h-100">
                <div class="row align-items-start h-100 overflow-auto">
                    <div class="col-12 bg-danger">{{ $brand->name }}</div>
                    <div class="col-12 bg-danger">{{ $brand->description }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection