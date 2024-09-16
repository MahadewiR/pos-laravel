@extends('layouts.app')
@section('title', 'Tambah User')
@section('content')
    <form action="{{ route('user.store') }}" method="POST">

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Nama Lengkap *</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="name" placeholder="Nama Lengkap">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Email*</label>
            </div>
            <div class="col-sm-5">
                <input required type="email" class="form-control" name="email" placeholder="email@gmail.com">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Password *</label>
            </div>
            <div class="col-sm-5">
                <input required type="password" class="form-control" name="password" placeholder="*******">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Konfirmasi Password *</label>
            </div>
            <div class="col-sm-5">
                <input required type="password" class="form-control" name="konfirmasiPassword" placeholder="*******">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>


    </form>
@endsection
