@extends('layouts.app')
@section('title', 'Category')
@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Category Name*</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="category_name" placeholder="Category Name">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-5">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
@endsection
