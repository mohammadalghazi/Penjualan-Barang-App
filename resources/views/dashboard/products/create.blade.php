@extends('layouts.dashboard')

@section('content')
<div class="content container-fluid h-100 d-flex flex-column">
    <div class="row justify-content-center py-3">
        <form class="col-6 py-2 rounded bg-light" action="{{ route('products.store') }}" method="POST">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="productName" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="productName">
                </div>
                <div class="mb-3">
                    <label for="productSize" class="form-label">Size</label>
                    <input type="text" class="form-control" name="size" id="productSize" required>
                </div>
                <div class="mb-3">
                    <label for="productStock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="productStock" required>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="productPrice" required>
                </div>
                <div class="mb-3">
                    <label for="productStatus" class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" id="productStatus" required>
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Category</label>
                    <select class="form-control" name="category_id" id="productCategory" required>
                        @foreach ($subcategories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productBrand" class="form-label">Brand</label>
                    <select class="form-control" name="brand_id" id="productBrand" required>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->brand_id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="categoryDescription" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="categoryDescription" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection