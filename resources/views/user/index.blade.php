@extends('layouts.app')
@section('title', 'Data User')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @if (session('info'))
        <div class="alert alert-danger">{{ session('info') }}</div>
    @endif
    <div class="table-responsive">
        <div align="right"><a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah</a></div>
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td style="display: flex">
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>|
                            {{-- <a href="{{ route('user.destroy', $item->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                            <form action="{{ route('user.destroy', $item->id) }}" method="POST" style="display:inline;">
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
