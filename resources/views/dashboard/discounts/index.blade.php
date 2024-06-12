@extends('layouts.list')

@section('content')
<div class="content container-fluid flex-fill overflow-auto mt-2">
    <div class="row">
        @foreach ($data as $brand)
        <x-dcategories src="{{ asset('assets/img/sample.jpeg') }}" href="{{ $brand->code }}" description="{{ $brand->description }}" alt="">{{ $brand->name }}</x-dcategories>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    
@endsection