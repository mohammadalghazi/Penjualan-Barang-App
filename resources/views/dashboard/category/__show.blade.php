@extends('layouts.show')

@section('content')
<div class="content container-fluid flex-fill overflow-hidden my-2 bg-danger-subtle">
    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">edit</a>
    <form action="{{ route('category.destroy', $category->id) }} " method="POST"      onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">delete</button>
    </form>
    <div class="row h-100 bg-warning">
        <div class="col-3">
            <img src="{{ asset('assets/img/sample.jpeg') }}" alt="{{ $category->name }}" class="img-fluid">
        </div>
        <div class="col-9 h-100">
            <div class="container-fluid h-100">
                <div class="row align-items-start h-100 overflow-auto">
                    <div class="col-12 bg-danger">{{ $category->name }}</div>
                    <div class="col-12 bg-danger">{{ $category->description }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection