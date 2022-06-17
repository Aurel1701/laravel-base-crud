@extends('layouts.app')

@section('content')
<div class=" d-flex justify-content-center mt-5">
    <form action="{{ route ('comics.store') }}" method="post">
            @csrf
            <div class="mb-2">
                <label for="title" class="form-label me-2">Title</label>
                <input type="text" name="title" placeholder="Insert Title" value="">
            </div>
            <div class="mb-2">
                <label for="thumb" class="form-label me-2">Thumb</label>
                <input type="text" name="thumb" placeholder="Insert Thumb" value="">
            </div>
            <div class="mb-2">
                <label for="price" class="form-label me-2">Price</label>
                <input type="text" name="price" placeholder="Insert Price" value="">
            </div>
            <div class="mb-2">
                <label for="series" class="form-label me-2">Series</label>
                <input type="text" name="series" placeholder="Insert Series" value="">
            </div>
            <div class="mb-2">
                <label for="sale_date" class="form-label me-2">Sale Date</label>
                <input type="text" name="sale_date" placeholder="Insert Sale Date" value="">
            </div>
            <div class="mb-2">
                <label for="type" class="form-label me-2">Type</label>
                <input type="text" name="type" placeholder="Insert Type" value="">
            </div>
            <div class="mb-2">
                <label for="description" class="form-label me-2">Description</label>
                <textarea class="form-control" name="description" placeholder="Insert Description" rows="3" value=""></textarea>
            </div>
            <input type="submit" class="btn btn-info" value="Search Comic"></button>
    </form>
</div>
    @endsection