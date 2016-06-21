<html>
<head>
<title>MIM Gonilan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/thumbs/mimlogoatas.jpg" alt="" width="1100" height="300"/></a>
</div>
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->
<div class="wrap">
<div class="header_btm">
		<style>
#cssmenu ul,
#cssmenu li,
#cssmenu span,
#cssmenu a {
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu {
  height: 49px;
  border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  background: #141414;
  background: -moz-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #32323a), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -o-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -ms-linear-gradient(top, #32323a 0%, #141414 100%);
  background: linear-gradient(to bottom, #32323a 0%, #141414 100%);
  filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#32323a', EndColorStr='#141414', GradientType=0);
  border-bottom: 2px solid #0fa1e0;
}
#cssmenu:after,
#cssmenu ul:after {
  content: '';
  display: block;
  clear: both;
}
#cssmenu a {
  background: #141414;
  background: -moz-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #32323a), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -o-linear-gradient(top, #32323a 0%, #141414 100%);
  background: -ms-linear-gradient(top, #32323a 0%, #141414 100%);
  background: linear-gradient(to bottom, #32323a 0%, #141414 100%);
  filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#32323a', EndColorStr='#141414', GradientType=0);
  color: #ffffff;
  display: inline-block;
  font-family: Helvetica, Arial, Verdana, sans-serif;
  font-size: 12px;
  line-height: 49px;
  padding: 0 72px;
  text-decoration: none;
}
#cssmenu ul {
  list-style: none;
}
#cssmenu > ul {
  float: left;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu > ul > li:hover:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  bottom: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #0fa1e0;
  margin-left: -10px;
}
#cssmenu > ul > li:first-child > a {
  border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
}
#cssmenu > ul > li:last-child > a {
  border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
}
#cssmenu > ul > li.active > a {
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
  background: #070707;
  background: -moz-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #26262c), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -o-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -ms-linear-gradient(top, #26262c 0%, #070707 100%);
  background: linear-gradient(to bottom, #26262c 0%, #070707 100%);
  filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#26262c', EndColorStr='#070707', GradientType=0);
}
#cssmenu > ul > li:hover > a {
  background: #070707;
  background: -moz-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #26262c), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -o-linear-gradient(top, #26262c 0%, #070707 100%);
  background: -ms-linear-gradient(top, #26262c 0%, #070707 100%);
  background: linear-gradient(to bottom, #26262c 0%, #070707 100%);
  filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#26262c', EndColorStr='#070707', GradientType=0);
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
}
#cssmenu .has-sub {
  z-index: 1;
}
#cssmenu .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub ul {
  display: none;
  position: absolute;
  width: 200px;
  top: 100%;
  left: 0;
}
#cssmenu .has-sub ul li {
  *margin-bottom: -1px;
}
#cssmenu .has-sub ul li a {
  background: #0fa1e0;
  border-bottom: 1px dotted #6fc7ec;
  filter: none;
  font-size: 11px;
  display: block;
  line-height: 120%;
  padding: 10px;
}
#cssmenu .has-sub ul li:hover a {
  background: #0c7fb0;
}
#cssmenu .has-sub .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub .has-sub ul {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
}
#cssmenu .has-sub .has-sub ul li a {
  background: #0c7fb0;
  border-bottom: 1px dotted #6db2d0;
}
#cssmenu .has-sub .has-sub ul li a:hover {
  background: #095c80;
}
</style>
<div id='cssmenu'>
<ul>
   <li class='active '><a href='admin.php'><span>Home</span></a></li>
   <li class='has-sub '><a href='adminprofil.php'><span>Profil</span></a>
    <li class='has-sub '><a href='#'><span>Anggota Sekolah</span></a>
            <ul>
               <li><a href='admin-guru.php'><span>Guru</span></a></li>
                <li class='has-sub'><a href='#'><span>Siswa</span></a>
					<ul>
						<li><a href='adminkelas1.php'><span>Kelas I</span></a></li>
						<li><a href='adminkelas2.php'><span>Kelas II</span></a></li>
						<li><a href='adminkelas3.php'><span>Kelas III</span></a></li>
						<li><a href='adminkelas4.php'><span>Kelas IV</span></a></li>
						<li><a href='adminkelas5.php'><span>Kelas V</span></a></li>
						<li><a href='adminkelas6.php'><span>Kelas VI</span></a></li>
					</ul>
					</li>
            </ul>
         </li>
		 <li class='has-sub '><a href='admingaleri.php'><span>Galeri</span></a>
         <li class='has-sub '><a href='#'><span>Ekstrakulikuler</span></a>
           <ul>
               <li><a href='adminrebana.php'><span>Rebana</span></a></li>
               <li><a href='adminrenang.php'><span>Renang</span></a></li>
			   <li><a href='admintapaksuci.php'><span>Tapak Suci</span></a></li>
			   <li><a href='adminhizbulWathon.php'><span>Hizbul Wathan</span></a></li>
			   <li><a href='adminenglihsclub.php'><span>English Club</span></a></li>
			   <li><a href='adminarabicclub.php'><span>Arabic Club</span></a></li>
			   <li><a href='admintahfizddanqiroahclub.php'><span>Tahfidz dan Qiro'ah Club</span></a></li>
			   <li><a href='adminfutsal.php'><span>Futsal</span></a></li>
            </ul>
         </li>
		 <li class='has-sub '><a href='adminkontak.php'><span>Kontak</span></a>
      </ul>
   </li>   
</ul>
</div>
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
	<div class="header_right">
		<ul>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">Silahkan Masukkan judul dan Foto</h2>
</div>
</div>
</div>
</head>
<body>
<center>
<div id="form-upload">
<form action="simpanfoto.php" method="post" enctype="multipart/form-data">
  <h3 align="center">Isikan judul dan pilih file yang akan di upload :</h3>
  <br>
  <br>
  <table>
  <tr>
   <td>No</td><td>:</td><td><input type="text" name="id">
 <td>Judul</td><td>:</td><td><input type="text" name="judul">
 <td>Pilih File</td><td>:</td><td><input type="file" name="image"><td><input type="submit" name="simpan" value="Simpan"/></td>
 <td><input type="reset" name="reset" value="Batal"/></td></tr>
</table>
</form>
<br>
<br>
<ul>
<li><b>KETERANGAN</b></li>
<li>Jenis file yang bisa di upload JPG, PNG, GIF</li>
<li>Ukuran file atau size max = 850 kb </li>
</ul>
</div>
<div class="footer_top">
<div class="wrap">
<div class="footer">
	<!-- start grids_of_3 -->
	<div class="span_of_3">
		<div class="span1_of_3">
			<h3>INFORMASI</h3>
			<p>Program Pembelajaran :</p>
            <p>1. Kelas Full Day</p>
            <p> Fasilitas : Ruang Kelas Ber AC, pembelajaran yang innovative, guru-guru yang berkualitas S1 dan S2, mengembangkan pendidikan ramah anak.</p>
            <p>2. Kelas Reguler</p>
            <p>Fasilitas : Ruang kelas nyaman, pembelajaran yang innovative, guru-guru yang berkualitas S! dan S2, mengembangkan Pendidikan ramah anak. </p>
        </div>
		<div class="span1_of_3">
		  <h3>INFORMASI</h3>
			<p>Pengumuman</p>
            <p>Syarat-syarat Pendaftaran :</p>
            <p>1. Usia min 6 tahun</p>
            <p>2. Menyerahkan Foto Copy Akte Kelahiran</p>
            <p>3. Menyerahkan Foto Copy kartu Keluarga </p>
            <p>4. Foto Copy Ijazah TK (Menyusul kalo sudah lulus)</p>
            <p>Waktu Pendaftaran :</p>
            <p>11-20 Februari 2016</p>
            <p>Tempat :</p>
            <p>Kampus MI Muhammadiyah Innovative Gonilan</p>
        </div>
		<div class="span1_of_3">
			<h3>fOTO</h3>
			<ul class="f_nav">
				<li><a href="#"><img src="images/thumbs/DSC06001.JPG" alt="" /> </a></li>
				<li><a href="#"><img src="images/thumbs/DSC08169.JPG" alt="" /> </a></li>
				<li><a href="#"><img src="images/thumbs/DSC08166.JPG" alt="" /> </a></li>
				<li><a href="#"><img src="images/thumbs/DSC06473.JPG" alt="" /> </a></li>
				<li><a href="#"><img src="images/thumbs/DSC_1691.JPG" alt="" /> </a></li>
				<li><a href="#"><img src="images/thumbs/DSC09706.JPG" alt="" /> </a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_mid">
<div class="wrap">
<div class="footer">
	<div class="f_search">
		<form>
		</form>
	</div>
	<div class="soc_icons">
			<ul>
				<li><a class="icon1" href="https://id-id.facebook.com/people/Mim-Gonilan/100004624758142"></a></li>
				<li><a class="icon3" href="#"></a></li>
			</ul>	
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
	<div class="copy">
		<p class="link"><span>© UMS Informatika.2013</span></p>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>
</body>
</html>