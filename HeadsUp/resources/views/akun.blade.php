!<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="akun.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">PROFIL</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="{{ asset('meng.jpeg')}}" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">MengNangis</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
                        <a class="nav-link" id="order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order" aria-selected="false">
							<i class="fa fa-inbox text-center mr-1"></i> 
							Order
						</a>
                        <a class="nav-link" id="guide-tab" data-toggle="pill" href="#guide" role="tab" aria-controls="guide" aria-selected="false">
							<i class="fa fa-question-circle-o text-center mr-1"></i> 
							Return Guide
						</a>
                        <a class="nav-link" id="cs-tab" data-toggle="pill" href="#cs" role="tab" aria-controls="cs" aria-selected="false">
							<i class="fa fa-phone text-center mr-1"></i> 
							Customer Services
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input type="text" class="form-control" value="MengNangis">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="jjanghaw@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" value="082111633078">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Alamat</label>
									<textarea class="form-control" rows="4">Jalan ITS No.12, Sukolilo, Surabaya Timur, Jawa Timur, 20115</textarea>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" id="logout">Log Out</button>
							<button class="btn btn-light">Edit</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
						<h3 class="mb-4">Pesananku</h3>
							<div class="box">
								<i class="fa fa-credit-card text-center mr-1"></i> <br>
								Tagihan
							</div>
        					<div class="box">
								<i class="fa fa-dropbox text-center mr-1"></i> <br>
								Dikemas
							</div>
        					<div class="box">
								<i class="fa fa-truck text-center mr-1"></i> <br>
								Diantar
							</div>
					</div>
                    <div class="tab-pane fade" id="guide" role="tabpanel" aria-labelledby="guide-tab">
						<h3 class="mb-4">Return Guide</h3>
						<p class="mb-4">
							KEBIJAKAN PENGEMBALIAN PRODUK : <br>
							<br>
							Produk HeadsUp memiliki masa garansi 6 bulan (ada beberapa yang tidak memiliki masa garansi, bisa check pada kolom deskripsi produk). <br>
							<br>
							Produk yang telah dibeli dapat ditukar dalam waktu 3 hari setelah pembelian dengan syarat dan ketentuan sebagai berikut: <br>

							1. WAJIB membuat video unboxing (bila tidak, tidak bisa klaim)
								Produk masih dalam keadaan baik dan normal (tidak ada cacat fisik akibat pemakaian atau human error) <br>
							2. Produk masih dalam keadaan tersegel (jika produk memiliki segel) <br>
							3. Box dan Aksesoris harus lengkap seperti saat barang diterima (box rusak/hancur/tanpa box, tidak bisa ganti unit) <br>
							4. Untuk penukaran produk, biaya ditanggung sepenuhnya oleh Pembeli. <br>
							<br>
							Hubungi CS kami untuk alamat pengembalian <br>
								Nama: Noel <br>
								Nomor telepon: +62 812-8986-xxxx <br>
							<br>
							Harap sertakan: <br>
								1. Nomor faktur/pesanan <br>
								2. Deskripsi kendala <br>
							Layanan pelanggan: Senin - Jumat 09:00 - 17:00 <br>
							<br>
							* Ketentuan dapat berubah kapan saja tanpa pemberitahuan. <br>
						</p>
					</div>
                    <div class="tab-pane fade" id="cs" role="tabpanel" aria-labelledby="cs-tab">
						<h3 class="mb-4">Customer Service</h3>
						<div class="box2">
							Email <br>
							<br>
							Customer Service: care@headsup.com

							PR&Influncers Collab: marketing@headsup.com

							Become a Reseller: business@headsup.com

							Recruiting: hrzp@headsup.com
						</div>
						<div class="box2">
							Phone<br>
							<br>
							Tel: +1 800 220 8056<br>
							<br>

							Mon-Fri: UTC-5 <br>
							10:00AM – 18:00PM <br>
							(Except on national holidays)
						</div>
					</div>
				</div>
            </div>
		</div>

	</section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</body>
</html>