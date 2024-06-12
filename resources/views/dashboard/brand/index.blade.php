@extends('layouts.list')

@section('content')
<div class="content container-fluid flex-fill overflow-auto mt-2">
    <div class="row">
        @foreach ($data as $brand)
        <x-dcategories src="{{ asset('storage/Brands/' .$brand->image) }}" href="{{ route('brands.show', $brand->id) }}" description="{{ $brand->description }}" alt="{{ $brand->name }}">{{ $brand->name }}</x-dcategories>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    
@endsection