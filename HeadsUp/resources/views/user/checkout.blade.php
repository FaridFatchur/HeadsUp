@extends('layout.layout_checkout')
@section('content')

<table>
    <thead>
        <tr>
            <th></th>
            <th>Foto Produk</th>
            <th>Detail Produk</th>
            <th>Harga per Unit</th>
            <th>Jumlah Produk</th>
            <th>Status di Gudang</th>
            <th>Harga Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#" onclick="hapusBaris(this)">🗑️</a></td>
            <td><img src="{{ asset('img/produk.png') }}" alt="Foto Produk"></td>
            <td>Detail Produk 1</td>
            <td>$10.00</td>
            <td>5</td>
            <td>Ready</td>
            <td>$50.00</td>
        </tr>
        <!-- Tambahkan baris lain sesuai kebutuhan -->
    </tbody>
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alamat</a></td>
            <td><button>ubah</td>
        </tr>
        <!-- Tambahkan baris lain sesuai kebutuhan -->
    </tbody>
</table>
@endsection
