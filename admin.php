<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/respon1.css">
</head>
<body>
<!--/ .header -->
<ul class="menuatas" id="myTopnav">
  <li style="font-size: 12px;margin-top: 1em;margin-right: 1em;float: left; color: white;"><h2>KR Store</h2></li>
	<li><a href="index.php">Logout</a><li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction

()">=</a>
  </li>
</ul>

<div class="container">

	<div class="main">

</div>
		<div class="middle" style="margin-top:2em; width:100%;">
			<h3><p class="tempat-mengetik">Selamat Datang Di OFFSET SURYA MUSABA</p><p style="margin-bottom: 0px;background: #137409 none repeat scroll 0% 0%;width: 10em;color: #FFF;font-size: 16px;padding-left: 5px;">Halaman Admin</h3>
    <?php
       
      include("koneksi.php");
       
       
      $koneksi = koneksi_db();
      $sql  = "select * from coba order by nama";
      $aksi = mysql_query($sql,$koneksi);
       
      echo "	  <div class='scrollable'><table id='tfhover' class='tftable' align='center'><colgroup><col width='20' /><col width='300' /><col width='100' /></colgroup>
			<tbody>
			<tr style='background: #6a9bd2;'>
             <td>No</td>
             <td>Nama Pemesan</td>
			 <td>Alamat Pemesan</td>
			 <td>Instansi/Perusahaan</td>
			 <td>Ukuran</td>
			 <td>Pesan</td>			
			 <td>Gambar</td>
			 <td>Email</td>
            </tr>";
             
      $no = 1;
	
      while($data=mysql_fetch_array($aksi)) :?>
         <tr>
          <td>
           <?php echo $no; ?>
          </td>	
		  <td>

             <?php  echo $nama=stripslashes($data['nama']);	 ?>

          </td>
		  		  <td>

             <?php  echo $alamat=stripslashes($data['alamat']);	 ?>

          </td>
		  		  <td>

             <?php  echo $perusahaan=stripslashes($data['perusahaan']);	 ?>

          </td>
		  		  <td>

             <?php  echo $panjang=stripslashes($data['panjang']);	 ?>
X
             <?php  echo $lebar=stripslashes($data['lebar']);	 ?>

          </td>
		  		  <td>

             <?php  echo $pesan=stripslashes($data['pesan']);	 ?>

          </td>
		  
          <td>
           <center>
             <img src="image/<?php echo  $data['nama_image']; ?>" height="200" width="200" border="0"/> 
           </center>
          </td>
				  <td>

             <?php  echo $email=stripslashes($data['email']);	 ?>

          </td>
         </tr>
	 
      <?php 
      $no++;
      endwhile;
	  ?>

     </tbody>
      </table></div>
      <br />
</div> 
</div>
	<!--/ .main -->
</div>
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