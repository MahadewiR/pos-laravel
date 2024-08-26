@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
    <form action="{{ route('product.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori *</label>
            </div>
            <div class="col-sm-5">
                <select type="text" class="form-control" name="category_id" placeholder="Nama Kategori">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option {{ $category->id == $edit->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Produk *</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="product_name" value="{{ $edit->product_name }}"
                    placeholder="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Qty *</label>
            </div>
            <div class="col-sm-5">
                <input required type="number" class="form-control" name="product_qty" value="{{ $edit->product_qty }}"
                    placeholder="Qty">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Harga *</label>
            </div>
            <div class="col-sm-5">
                <input required type="number" class="form-control" name="product_price" value="{{ $edit->product_price }}"
                    placeholder="Harga">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

@endsection
