@extends('layout.layout_checkout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <h2>Checkout</h2>

        <!-- Detail Produk -->
        <div class="table-container">
            <table class="table table-bordered table-detail-produk">
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
                    <!-- Isi tabel detail produk di sini -->
                    <tr>
                        <td><i class="fa fa-trash" aria-hidden="true" onclick="hapusBaris(this)"></i></td>
                        <td><img src="headphone.jpg" alt="Foto Produk" class="img-thumbnail"></td>
                        <td> <h5>Headphone ZXRI-X</h5> <br> <p>Variant : Black, Wireless</p></td>
                        <td>Rp 1.700.000</td>
                        <td>1</td>
                        <td>In Stock</td>
                        <td>Rp 1.700.000</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>

        <!-- Alamat Kirim, Voucher, Rincian -->
        <div class="mt-4">
            <!-- Form Alamat Kirim -->
            <form>
                <h4>Alamat Kirim</h4>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea class="form-control" id="address" rows="3" required></textarea>
                </div>
            </form>

            <!-- Form Voucher -->
            <form class="mt-4">
                <h4>Voucher</h4>
                <div class="form-group">
                    <label for="voucherCode">Kode Voucher:</label>
                    <input type="text" class="form-control" id="voucherCode">
                </div>
                <button type="submit" class="btn btn-lgreen ml-2">Apply Voucher</button>
            </form>

            <!-- Rincian -->
            <div class="mt-4">
                <h4>Rincian</h4>
                <div class="rincian">
                    <label for="subtotal">Subtotal</label>
                    <span>Rp 1.700.000</span>
                </div>
                <div class="rincian">
                    <label for="proteksi">Biaya Proteksi Produk</label>
                    <span>Rp 6.000</span>
                </div>
                <div class="rincian">
                    <label for="proteksi">Biaya Ongkos Kirim</label>
                    <span>Rp 10.000</span>
                </div>
                <div class="rincian">
                    <label for="total">Total</label>
                    <span>Rp 1.716.000</span>
                </div>
            </div>

            <!-- Button Delivery Method, Payment Method, Buat Pesanan -->
            <div class="mt-4">
                <button type="button" class="btn btn-lgreen ml-2">Delivery Method</button>
                <button type="button" class="btn btn-lgreen ml-2">Payment Method</button>
                <button type="button" class="btn btn-green ml-2">Buat Pesanan</button>
            </div>
        </div>
    </div>

    <script>
        function hapusBaris(row) {
        var index = row.parentNode.parentNode.rowIndex;
        document.querySelector('table').deleteRow(index);
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
</body>

</html>

@endsection
