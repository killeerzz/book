<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buku</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/respon1.css">
</head>
<body>
<!--/ .header -->
<ul class="menuatas" id="myTopnav">
  <li style="font-size: 12px;margin-top: 1em;margin-right: 1em;float: left; color: white;"><h2> OFFSET SURYA MUSABA</h2></li>
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
			<h3><p class="tempat-mengetik">Selamat Datang Di OFFSET SURYA MUSABA</p><p style="margin-bottom: 0px;background: #137409 none repeat scroll 0% 0%;width: 10em;color: #FFF;font-size: 15px;padding-left: 5px;">Buku</h3>
<table  style="width:100%">
<td style="width:100%;">

<p style="margin-top:1em;"><img src="image/buku.jpg" style="width: 100%;height: 100%;">
<p style="margin-bottom: 2px;">Kekuatan jilid yang memastikan daya tahan produk<p >
<a href="order.php" style="font-size:18px; ">Beli</a>
<br>
<h3><p style="margin-bottom: 0px;background: #137409 none repeat scroll 0% 0%;width: 10em;color: #FFF;font-size: 15px;padding-left: 5px;">PORTOFOLIO</h3>

<table  style="width:100%">
<td style="width:25%; border:0px solid gray;">
<p style="margin-bottom: 2px;"><img src="image/buku1.jpg" style="width: 100%;height: 100%; border:3px solid #dedede;"><p style="margin-bottom: 0px;">
Buku<p style="margin-bottom: 0px;"><a href="order.php" style="font-size:18px; ">Beli</a><p style="margin-bottom: 0px;">
	Ukuran Cetak : 15 x 22 - 70 x 100
    Tebal Kertas : 30 gms - 500gms</p>
</td>
<td style="width:25%; border:0px solid gray;">
<p style="margin-bottom: 2px;"><img src="image/buku2.jpg" style="width: 100%;height: 100%; border:3px solid #dedede;"><p style="margin-bottom: 0px;">
Buku<p style="margin-bottom: 0px;"><a href="order.php" style="font-size:18px; ">Beli</a><p style="margin-bottom: 0px;">
	Ukuran Cetak : 15 x 22 - 70 x 100
    Tebal Kertas : 30 gms - 500gms</p>
</td>
<td style="width:25%; border:0px solid gray;">
<p style="margin-bottom: 2px;"><img src="image/buku3.jpg" style="width: 100%;height: 100%; border:3px solid #dedede;"><p style="margin-bottom: 0px;">
Buku<p style="margin-bottom: 0px;">
<a href="order.php" style="font-size:18px; ">Beli</a><p style="margin-bottom: 0px;">
	Ukuran Cetak : 15 x 22 - 70 x 100
    Tebal Kertas : 30 gms - 500gms</p>
</td>
</table>
</td>
</table>
</div>
</div> 

	<!--/ .main -->

	<div class="footer">
		
		<p>Copyright &copy; 2015_OFFSET SURYA MUSABA </p>
	</div><!--/ .footer -->
 


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