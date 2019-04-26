<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pendaftaran Siswa Baru</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
		<a href="#">
			<img src="logo_putih.png" width="150" alt="">
		</a>
		
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="form-daftar.php" class="nav-link">Daftar Baru</a></li>
				<li class="nav-item"><a href="pendaftar.php" class="nav-link">Pendaftar</a></li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="kontak" data-toggle="dropdown">Kontak</a>
					<div class="dropdown-menu">
						<a href="https://www.facebook.com/smktelkommalang/" class="dropdown-item">Facebook</a>
						<a href="https://www.instagram.com/smktelkommalang/?hl=en" class="dropdown-item">Instagram</a>
					</div>
				</li>
			</ul>
		</div>
		</nav>
		<?php if(isset($_GET['status'])): ?>
		<P>
			<?php
				if($_GET['status'] == 'sukses'){
					echo "Pendaftaran siswa baru berhasil!";
				} else {
					echo "Pendaftaran gagal!";
				}
			?>
		</p>
		<?php endif; ?>
	<style media="screen">
		.text-red{color:red;}
		div.hider{
			width: 100%;
			height: 500px;
			background-image: url(front.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			}
		div.bayangan{
			width: 100%;
			height: 500px;
			background: #000;
			opacity: 0.65;
			float: left;
			}
		div.hider h1{
			position: absolute;
			text-align: center;
			color: #fff;
			top: 150px;
			left: 350px;
			font-weight: bolder;
			font-family: "Arial";
			font-size: 50px;
			}
		div.hider h1 img{
			width: 100px;
			height: auto;
			}
			
		div.about{
			width: 100%;
			height: 400px;
			padding: 0;
			float: left;
			margin-top: 20px;
		}
		
		div.about .left{
			width: 50%;
			height: 100%;
			float: left;
		}
		div.about .left h1{
			text-align: right;
			text-transform: uppercase; /* huruf kapital*/
			font-size: 50px;
			font-family:sans-serif;
			font-weight: 20;
			border-right: 10px solid red;
			padding-right: 10px;
		}

		div.about .left p{
			text-align: right;
			font-size: 20px;
			color: grey;
		}
		div.about .right{
			width: 50%;
			height: 100%;
			float: right;
		}

		div.about .right img{
			width: 300px;
			height: auto;
		}
		
		div.penghargaan{
		  width: 100%;
		  height: 550px;
		  background: url("gedung.jpg") no-repeat center;
		  background-size: cover;
		  float: right;
		  margin-top: 50px;
		  margin-bottom: 50px;
		  position: relative;
		}

		div.penghargaan .gelap{
		  width: 100%;
		  height: 100%;
		  background: linear-gradient(to right, #000, #000, transparent);
		  float: left;
		  opacity: 0.6;

		  position: absolute;
		}

		div.penghargaan .left{
		  width: 50%;
		  text-align:right;
		  border-right: 5px solid red;
		  padding-right: 20px;
		  position: absolute;
		  margin-top: 200px;
		  float: left;
		}

		div.penghargaan .left h1{
		  margin:2px;
		  font-size: 40px;
		  font-family: sans-serif;
		  text-transform: uppercase;
		  color: #fff;
		}

		div.penghargaan .left h2{
		  margin:2px;
		  font-size: 30px;
		  font-family: sans-serif;
		  color: #fff;
		}

		div.penghargaan .left h3{
		  margin:2px;
		  font-size: 25px;
		  font-family: sans-serif;
		  color:#fff;
		}

		div.penghargaan .right{
		  position: absolute;
		  left:700px;
		  width: 30%;
		  height: auto;
		  text-align:left;
		  top: 200px;
		  float: left;

		}

		div.penghargaan .right img{
		  width: 100px;
		  height: auto;
		}
		div.partner{
			margin-top: 20px;
			width: 100%;
			height: auto;
			float: left;
		}
		div.partner .bunder{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			background: red;
			display: flex;
			margin: 0 auto;
		}
		div.partner .bunder img{
			background-image: url(groups.png);
			border-radius: 50%;
			height: auto;
			width: 100%;
		}
		div.partner .bunder span{
			font-size: 40px;
			margin: auto;
			color: #fff;
		}

		div.partner h1{
			font-size: 40px;
			text-transform: uppercase;
			color: #000;
			text-align: center;
			font-family: sans-serif;
		}

		div.partner p{
			font-size:25px;
			text-align: center;
			color: grey;
		}

		div.partner .gambar{
		  width: 70%;
		  height: auto;
		  margin: 0 auto;
		  text-align: center;
		}

		div.partner .gambar img{
		  width: 150px;
		  height: auto;
		  margin:20px;
		}
		
	</style>
		<div class="hider">
			<div class="bayangan">
			<h1>
				<img src="TS.png">
				<br>Pendaftaran Siswa Baru</br>
			</h1>
			</div>
		</div>
		<div class="about">
			<div class="left">
				<h1>
					About <br>
					SMK Telkom <br>
					Malang
				</h1>
				
				<p>
					SMK Telkom Malang adalah pelopor
					sekolah menengah kejuruhan pertama di Indonesia
					di bidang Teknologi dan Informatika.
					Berpengalaman dari tahun 1992 yang
					telah terakreditasi "A" dan mempunyai
					standart mutu ISO 9001:2008.
				</p>
			</div>
			<div class="right">
				<img src="depan.jpg" border="red">
			</div>
		</div>
		
			<div class="penghargaan">
			  <div class="gelap">
			  </div>
			  <div class="left">
				<h2><span class="text-grey">Meraih Penghargaan</span></h2>
				<h1>Sekolah <span class="text-red">Keren</span></h1>
				<h3>Pada tahun 2017-sekarang</h3>
			  </div>
			</div>

		<div class="partner">
			<div class="bunder">
				<img src="groups.png">
			</div>
			<h1>Partner <span class="text-red">Kami</span></h1>
			<p>Dukungan dari berbagai pihak</p>
			<div class="gambar">
				<img src="p1.png" alt="">
				<img src="p2.png" alt="">
				<img src="p3.png" alt="">
				<img src="p4.png" alt="">
			</div>
		</div>
	</body>
</html>
	