@extends('layouts.app')
@section('title', 'Data Produk')
@section('content')
    <div class="table-responsive">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if (session('info'))
            <div class="alert alert-danger">{{ session('info') }}</div>
        @endif
        <div align="right"><a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah</a></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Nama Produk</th>
                    <th>Qty</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item['product_name'] }}</td>
                        <td>{{ $item['product_qty'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['product_price'] }}</td>
                        <td style="display: flex">
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>|

                            <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
