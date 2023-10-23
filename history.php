<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/respon1.css">
</head>
<body>
<!--/ .header -->
<ul class="menuatas" id="myTopnav">
  <li style="font-size: 12px;margin-top: 1em;margin-right: 1em;float: left; color: white;"><h2>OFFSET SURYA MUSABA</h2></li>
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
			<h3><p class="tempat-mengetik">Selamat Datang Di OFFSET SURYA MUSABA</p><p style="margin-bottom: 0px;background: #137409 none repeat scroll 0% 0%;width: 10em;color: #FFF;font-size: 15px;padding-left: 5px;">History</h3>
			<p><img src="image/history.jpg" alt=""></p>
<p >SEJARAH</p>

<p >1972</p>
<p >Seiring perkembangan Koran Kompas yang merupakan Koran terbesar di Indonesia, Gramedia Printing didirikan. </p>

<p >1997</p>
<p >Dengan teknologi cetak jarak jauh yang digunakan, Gramedia Printing menjadi perusahaan percetakan pertama yang mampu mencetak koran dan tabloid nasional serta koran terbitan luar negeri seperti Wall Street Journal Asia di beberapa kota secara serentak di seluruh Indonesia. </p>

<p>2005
<p >Gramedia Printing unit Cikarang didirikan sebagai bagian dari komitmen perusahaan untuk memasuki pasar "commercial Printing". </p>

<p>2006
<p>Dengan semakin banyaknya jumlah buku yang dicetak oleh Gramedia Printing, maka didirikanlah Gramedia Printing unit Bandung.</p>

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