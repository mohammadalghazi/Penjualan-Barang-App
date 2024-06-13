@extends('layouts.dashboard')

@section('content')
<div class="content container-fluid h-100 d-flex flex-column overflow-auto">
    <div class="row justify-content-center py-3">
        <form class="col-6 py-2 rounded bg-light" action="{{ route('products.store') }}" method="POST">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="productName" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="productName" required>
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
                    <label for="productDiscount" class="form-label">Discount</label>
                    <select class="form-control" name="discount_id" id="productDiscount">
                        <option value="" selected disabled>Select Discount</option>
                        @foreach ($discounts as $discount)
                            <option value="{{ $discount->id }}">{{ $discount->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productExpired" class="form-label">Expired</label>
                    <input type="date" class="form-control" name="expired_at" id="productExpired">
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Category</label>
                    <select class="form-control" name="category_id" id="productCategory" required>
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($subcategories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productBrand" class="form-label">Brand</label>
                    <select class="form-control" name="brand_id" id="productBrand" required>
                        <option value="" selected disabled>Select Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="productDescription" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection