@extends('layouts.list')

@section('content')
<div class="content container-fluid flex-fill overflow-auto mt-2">
    <div class="row">
        @foreach ($data as $subcategory)
        <x-dcategories src="/assets/img/sample.jpeg" href="{{ $subcategory->code }}" description="{{ $subcategory->description }}" alt="">{{ $subcategory->name }}</x-dcategories>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    
@endsection