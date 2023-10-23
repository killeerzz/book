<!DOCTYPE html>
<html lang="en">
<head>
	<title>PT. OFFSET SURYA MUSABA</title>
	<link rel="stylesheet" href="css/respon1.css">
</head>
<body>
<!--/ .header -->
<ul class="menuatas" id="myTopnav">
  <li style="font-size: 12px;margin-top: 1em;margin-right: 1em;float: left; color: white;"><h2 >OFFSET SURYA MUSABA</h2></li>
  <li><a class="active" href="login.php">Login</a></li>


  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction

()">=</a>
  </li>
</ul>

<div class="container">

	<div class="main">
		
	 <!--/ .header -->	<p><img src="image/logo.jpg" style="margin-left: 20px; margin-top: 44px;"></p>
<div class="left">	
	<table >
	<nav>
	<div class="menu-item1">
	<h4><a href="index.php">Home</a></h4>
	<ul>
	<li><a href="naskhah.php">Naskhah</a></li>
	<li><a href="new.php">New release</a></li>
	<li><a href="best.php">Best seller</a></li>
	</ul>
	</div>

	<div class="menu-item2">
	<h4><a href="profil.php">Profil</a></h4>
	<ul>
	<li><a href="history.php">History</a></li>
	<li><a href="comitmen.php">Commitment</a></li>
	</ul>
	</div>

	<div class="menu-item">
	<h4><a href="Produk.php">Produk</a></h4>
	<ul>
	<li><a href="buku.php">Buku</a></li>
	<li><a href="majalah.php">Majalah</a></li>
	<li><a href="komersial.php">Komersial</a></li>
	<li><a href="kemasan.php">Kemasan</a></li>
	<li><a href="katalog.php">Katalog</a></li>
	<li><a href="koran.php">Koran</a></li>
	</ul>
	</div>

	<div class="menu-item">
	<h4><a href="carapesan.php">Cara Pesan</a></h4>
	</div>

	<div class="menu-item">
	<h4><a href="kontakkami.php">Kontak Kami</a></h4>
	</div>
	</nav>
	</table>
	<div class="left2"> 

</div>
</div> 


</div>
		<div class="middle">
			<h3><p class="tempat-mengetik" style="font-size:15px;">Selamat Datang Di OFFSET SURYA MUSABA</p></h3>
			<p><div id="container-layout" style="margin-right: 1em;width: 100%;margin-top: -28px;">	
	<div id="container">
		
		<img class="slides" src="image/benner1.jpg"/>
		<img class="slides" src="image/benner2.jpg"/>
		<img class="slides" src="image/benner3.jpg"/>
		<img class="slides" src="image/profil.jpg"/>

	</div>	</div> 
	<h3 style="margin-top: -49px;"><p style="background: rgb(19, 116, 9) none repeat scroll 0% 0%;width: 16em;padding-left: 5px;margin-bottom: 0px;font-size: 14px;color: white; ">Statistik Penjualan tahun 2016</p>
</h3>



<div class="tabel1">
<p style="margin-bottom: 0px;margin-top: 9px;font-size: 16px;">Buku</p>
<p style="font-size: 18px;">1300 judul</p>
</div>
<div class="tabel2">
<p style="margin-bottom: 0px;margin-top: 9px;font-size: 16px;">Majalah</p>
<p style="font-size: 18px;">3000 Buah</p>
</div>
<div class="tabel3">
<p style="margin-bottom: 0px;margin-top: 9px;font-size: 16px;">Komersial</p>
<p style="font-size: 18px;">5000 Buah</p>
</div>
<div class="tabel4">
<p style="margin-bottom: 0px;margin-top: 9px;font-size: 16px;"> Jumlah Penulis</p>
<p style="font-size: 18px;">100 Orang</p>
</div>

<br>
<p>
<table border="1" style="margin-top:0px;">
<h3 style="margin-top: 7em;"><p style="margin-bottom: 0px;background: #137409 none repeat scroll 0% 0%;width: 10em;color: #FFF;font-size: 15px;padding-left: 5px; margin-top: -1.5em; float:left;">Selamat Datang</p></h3>
</table><p style=" text-indent:0.5in;">PT. OFFSET SURYA MUSABA adalah sebuah perusahaan percetakan yang bergerak di bidang offset packaging. Jenis packaging yang kami buat bervariatif mulai dari pharmacy packaging, food packaging, labeling dan bentuk promosional lainnya.</p>

<p style=" text-indent:0.5in;">Kami telah menyediakan packaging untuk berbagai macam customer yang berada di seluruh Nusantara. Di bekali dengan unit design yang memadai, kami dapat memberikan layanan ekstra untuk customer dengan memberikan design yang sesuai dan tepat untuk kebutuhan customer kami.</p>

</div> </div>
	<!--/ .main -->

	<div class="footer">
		
		<p>Copyright &copy; 2015_OFFSET SURYA MUSABA </p>
	</div> <!--/ .footer -->
 


</body>

<script>
			var index = 1;
			
			function plusIndex(n) {
				index = index + n;
				showImage(index);
			}

			
			
			showImage(1);
			
			
			function showImage(n) {
				var i;
				var x = document.getElementsByClassName("slides");
				if(n > x.length) { index = 1};
				if(n < 1) { index= x.length};
				for (i=0;i<x.length;i++)
					{
						x[i].style.display = "none";
					}
				x[index-1].style.display = "block";
		}
		autoSlide();
		function autoSlide() {
			var i;
				var x = document.getElementsByClassName("slides");
				for (i=0;i<x.length;i++)
					{
						x[i].style.display = "none";
					}				
					if(index > x.length) { index = 1};

				x[index-1].style.display = "block";
				index++;
				setTimeout(autoSlide,2000);
		
		}
	</script>	
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "menuatas") {
        x.className += " responsive";
    } else {
        x.className = "menuatas";
    }
}
</script>	
</html>