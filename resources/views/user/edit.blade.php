@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
    <form action="{{ route('user.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Nama Lengkap *</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="name" placeholder="Nama Lengkap"
                    value="{{ $edit->name }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Email*</label>
            </div>
            <div class="col-sm-5">
                <input required type="email" class="form-control" name="email" placeholder="email@gmail.com"
                    value="{{ $edit->email }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="">Password *</label>
            </div>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" placeholder="*******">
            </div>
        </div>


        <div class="mb-3 row">
            <div class="col-sm-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>


    </form>
@endsection
