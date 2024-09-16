@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <div class="table-responsive">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if (session('info'))
            <div class="alert alert-danger">{{ session('info') }}</div>
        @endif
        <div align="right"><a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Tambah</a></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['category_name'] }}</td>
                        <td style="display: flex">
                            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>|
                            {{-- <a href="{{ route('user.destroy', $item->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                            <form action="{{ route('category.destroy', $item->id) }}" method="POST"
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
