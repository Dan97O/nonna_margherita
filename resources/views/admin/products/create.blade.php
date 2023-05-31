@extends('layouts.app')

@section('title', 'Add new item')

@section('content')

    <div class="container">
        <form action="{{ route('admin.products.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Name here">
                <small id="helpId" class="form-text text-muted">Insert name here</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="Product here">
                <small id="helpId" class="form-text text-muted">Insert Price here</small>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="Product here">
                <small id="helpId" class="form-text text-muted">Insert image here</small>
            </div>

            <div class="mb-3">
                <label for="in_stock" class="form-label">in stock</label>
                <input type="checkbox" class="form-control" value="1" name="in_stock" id="in_stock"
                    aria-describedby="helpId" placeholder="Product here">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">weight</label>
                <input type="text" class="form-control" name="weight" id="weight" aria-describedby="helpId"
                    placeholder="Product here">
                <small id="helpId" class="form-text text-muted">Insert weight here</small>
            </div>
            <div class="mb-3">
                <label for="product_code" class="form-label">product_code</label>
                <input type="text" class="form-control" name="product_code" id="product_code" aria-describedby="helpId"
                    placeholder="Product here">
                <small id="helpId" class="form-text text-muted">Insert product_code here</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>

            <button type="submit">Save</button>
        </form>

    </div>


@endsection
