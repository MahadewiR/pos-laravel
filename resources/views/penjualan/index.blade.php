@extends('layouts.app')
@section('title', 'Tansaksi Penjualan')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kode Transaksi</label>
                    <input type="text" class="form-control" readonly value="{{ $kode_transaksi ?? '' }}"
                        name="kode_transaksi">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Tanggal Transaksi</label>
                    <input type="text" class="form-control" readonly value="<?= date('d/M/Y') ?>"
                        name="tanggal_transaksi">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kategori Produk*</label>
                    <select class="form-control" name="category_id" id="category_id" required>
                        <option value="">Pilih Kategori Produk</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat['category_name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Nama Produk*</label>
                    <select class="form-control" name="product_id" id="product_id" required>
                        <option value="">Pilih Nama Produk</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Qty Produk*</label>
                    <input type="number" class="form-control" placeholder="" id="qty_product" min="0" required>
                </div>
            </div>
        </div>

        <input type="hidden" value="" id="product_price">
        <input type="hidden" value="" id="product_name">

        <div class="table-transaction mt-5">
            <div align="right" class="mb-3">
                <button type="button" class="btn btn-primary tambah-produk">Tambah Produk</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="row mt-2">
                    <div class="col-sm-8">
                        <h3>Total:</h3>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="total_price"></h4>
                        <input type="hidden" name="total_price" id="total_price_val">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-8">
                        <h3>Di Bayar:</h3>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="dibayar"
                            placeholder="Masukan nominal pembayaran disini." style="border: none;" name="dibayar">
                    </div>
                </div>

                <div class="row
                            mt-2">
                    <div class="col-sm-8">
                        <h3>Kembalian:</h3>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="kembalian_text"></h3>
                        <input type="hidden" class="form-control bg-white " readonly id="kembalian" style="border: none; "
                            name="kembalian">
                    </div>
                </div>

                <div class="mt-4" align="right">
                    <button type="submit" class="btn btn-success">Buat Pesanan</button>
                </div>

            </div>
        </div>
    </form>
@endsection
