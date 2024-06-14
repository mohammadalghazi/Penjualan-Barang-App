@extends('layouts.list')

@section('content')
<div class="content container-fluid flex-fill overflow-auto mt-2">
    <div class="row">
        @foreach ($data as $subcategory)
        <x-dsubcategories 
            src="{{ asset('assets/img/sample.jpeg') }}" 
            href="{{ route('subcategory.show', $subcategory->id) }}" 
            desc="{{ $subcategory->description }}"
            reg="{{ $subcategory->created_at }}"
            alt="{{ $subcategory->name }}">
            {{ $subcategory->name }}
        </x-dsubcategories>
        {{-- <a href="{{ route('subcategory.show', $subcategory->id) }}" class="btn btn-primary">show</a> --}}
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    
@endsection