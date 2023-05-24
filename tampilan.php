<head>
<title>Horoskop Anda</title>
<style type="text/css">
   @font-face {
         font-family: "Font Digital";
         src: url(ObelixPro-Broken-cyr.ttf)
         }
 
   .digital {
         font-family: "Font Digital";
		 font-size:150px;
         }
		 
	body{
		background-image:url(bb3.jpg);repeat-x
		background-position:center;
		background-color:rgba(51,16,153,0.85);
	}
	@font-face {
         font-family: "Font";
         src: url(GoSpeeds.ttf)
         }
	.makan{
			 font-family: "Font";
			 font-size:100px;
		 }
</style>
</head>

<body>
<center><h1> <p class="digital">  HOROSKOP </p></h1><center>

<form method="get" action="tampilan.php">
<table width="337" border="5" align="center">
  <tr>
    <td width="119">Nama</td>
    <td width="9"><b>:</b></td>
    <td width="187"><input type="text" name="txtnama" /></td>
  </tr>
  
  <tr>
    <td>Jenis Kelamin</td>
    <td><b>:</b></td>
    <td><input type="radio" name="jk" value="pria"/>Laki-Laki<br>
    	<input type="radio" name="jk" value="Perempuan"/>Cewe
        </td>
  </tr>
  
  <tr>
    <td>Tanggal Lahir</td>
    <td><b>:</b></td>
    <td>Tanggal :
	  <select name="tanggal">
		<?php
			for($c =1; $c <=30; $c++)
			{
			echo "<option value='".$c."'>".$c."</option>";
			}
		?>
		</select><br>

		Bulan :
	  <select name="bulan">
		<?php
		$bulan = array("Januari", "Febuari", "Maret", 
						"April", "Mei", "Juni", "Juli", 
						"Agustus","September", "Oktober", 
						"November", "Desember");

				foreach($bulan as $moon)
				{
				echo "<option value='".$moon."'>".$moon."</option>";	
				}
		?>
		</select><br>

		Tahun :
		<select name="tahun">
		<?php
		for($y =1994; $y <= 2020; $y++)
		{
		echo "<option value='".$y."'>".$y."</option>";
		}
		?>
		</select>
    </td>
    </tr>
  
    <tr>
    <td align="center" colspan="3"><input type="submit" value="SAVE" name="sasa">  
         <input type="reset" value="CANCEL"></td>
    </tr>
	</table>

</form><hr>

<?php
error_reporting(E_ALL&~E_NOTICE); ?>
<?php
$nama	= $_REQUEST['txtnama'];
$jenis 	= $_REQUEST['jk'];
$tanggal	= $_REQUEST['tanggal'];
$bulan	= $_REQUEST['bulan'];	
$tahun	= $_REQUEST['tahun'];
$simpan	= $_REQUEST['sasa'];

	if ((($tanggal >= 21)&&($bulan == "Desember"))|| (($tanggal <=19)&&($bulan == "januari")))
	{
	$bintang 	= "Capricorn";
	$asmara 	= "Langeng dalam hubungan";
	$keuangan 	= "Kalo rezeki tak akan kemana";
	$pekerjaan 	= "apa bila anda giat mencari pekerjaan, maka anda akan mendapatkannya";
	$foto 		= "ca.jpg";

	}elseif ((($tanggal >= 20)&&($bulan == "January"))|| (($tanggal <=18)&&($bulan == "Februari")))
	{
	$bintang 	= "Aquarius";
	$asmara 	= "Move on gih, sudah terlalu lama dirimu sendiri";
	$keuangan 	= "Harus lebih hati-hati dalam mengelola keuangan";
	$pekerjaan 	= "anda dapat mencari pekerjaan dengan mudah";
	$foto 		= "aq.jpg";

	}elseif ((($tanggal >= 19)&&($bulan == "Februari"))|| (($tanggal <=20)&&($bulan == "Maret")))
	{
	$bintang 	= "Pisces";
	$asmara 	= "karna anda orang yang setia maka anda akan Langeng dalam hubungan";
	$keuangan 	= "Karna anda anak yang rajin, maka rejeki akan mengalir pada anda";
	$pekerjaan 	= "karna anda orangnya pandai, maka pekerjaan yang akan datang keanda";
	$foto 		= "pi.jpg";

	}elseif ((($tanggal >= 21)&&($bulan == "Maret"))|| (($tanggal <=20)&&($bulan == "April")))
	{
	$bintang 	= "Aries";
	$asmara 	= "Masih Zaman punya pacar";
	$keuangan 	= "Kamu terbialng orang kaya, karna orang tuamu memiliki banyak uang";
	$pekerjaan 	= "kamu kali ini fokus mengejar ilmu, ketimbang bekerja";
	$foto 		= "ar.jpg";

	}elseif ((($tanggal >= 21)&&($bulan == "April"))|| (($tanggal <=20)&&($bulan == "Mei")))
	{
	$bintang 	= "Taurus";
	$asmara 	= "kamu terlalu terburu ingin punya pacar, karna kamu iri dengan temanmu yang telah memiliki pacar";
	$keuangan 	= "kamu terlalu boros, dengan banyak belanja";
	$pekerjaan 	= "kamu bisa bekerja di bidang apa ajh, karna kamu orangnya pintar";
	$foto 		= "ta.jpg.";

	}elseif ((($tanggal >= 21)&&($bulan == "Mei"))|| (($tanggal <=20)&&($bulan == "Juli")))
	{
	$bintang 	= "Gemini";
	$asmara 	= "kamu terlalu banyak memilih dalam mencari pasangan";
	$keuangan 	= "menabung. adalah caramu menghindari dari kata kemiskinan";
	$pekerjaan 	= "kamu tidak puas, dan tidak juga ingin melepad pekerjaanmu sekarang ini";
	$foto 		= "g.jpg";

	}elseif ((($tanggal >= 21)&&($bulan == "Juni"))|| (($tanggal <=20)&&($bulan == "Juli")))
	{
	$bintang 	= "Cancer.";
	$asmara 	= "kamu orang yang penyayang, dan selalu perhati, tapi jangan kepada semua orang";
	$keuangan 	= "untuk saat ini kamu tidak ingin boros, dan tidak juga menabung";
	$pekerjaan 	= "bosan? kata itulah yang sedang kamu alami di pekerjaanmu saat ini";
	$foto 		= "c.jpg";

	}elseif ((($tanggal >= 21)&&($bulan == "Juli"))|| (($tanggal <=21)&&($bulan == "Agustus")))
	{
	$bintang 	= "Leo";
	$asmara 	= "jangan terlalu sering berselingkuh, entar diselingkuhi";
	$keuangan 	= "mulailah menabung untuk masa depan";
	$pekerjaan	 = "apa bila anda giat mencari pekerjaan, maka anda akan mendapatkannya";
	$foto 		= "l.jpg.";

	}elseif ((($tanggal >= 22)&&($bulan == "Agustus"))|| (($tanggal <=22)&&($bulan == "September")))
	{
	$bintang 	= "Virgo";
	$asmara 	= "kamu memilih setia pada pasanganmu yang saat ini";
	$keuangan 	= "kamu terlalu boros dalam hal elektronik";
	$pekerjaan 	= "kamu mendapat pekerjaan apapun itu, selagi itu positif";
	$foto 		= "v.png";

	}elseif ((($tanggal >= 23)&&($bulan == "Semptember"))|| (($tanggal <=22)&&($bulan == "Oktober")))
	{
	$bintang 	= "Libra";
	$asmara 	= "Langeng dalam hubungan";
	$keuangan 	= "Kalo rezeki tak akan kemana";
	$pekerjaan 	= "kamu lebih memilih menciptakan lapangan pekerjaan";
	$foto 		= "li.jpg";

	}elseif ((($tanggal >= 23)&&($bulan == "Oktober"))|| (($tanggal <=22)&&($bulan == "November")))
	{
	$bintang 	= "Scorpio";
	$asmara 	= "zomblo? itu adalah kata-kata yang ingin kamu hindari";
	$keuangan 	= "kamu masih memiliki cukup uang, untuk kehidupanmu 1 tahun kedepan";
	$pekerjaan 	= "kamu memilih untuk menjadi seorang wiraswasta";
	$foto 		= "s.jpg";

	}elseif ((($tanggal >= 23)&&($bulan == "November"))|| (($tanggal <=20)&&($bulan == "Desember")))
	{
	$bintang 	= "Sagitarius";
	$asmara 	= "jangan setia pada pasangan yang sering menyelingkuhimu";
	$keuangan 	= "orangnya cenderung pelit";
	$pekerjaan 	= "jika kamu bermalas-malasan mencari pekerjaan maka kamu gak bakal dapat pekerjeaan tersebut";
	$foto 		= "sa.jpg";

	}
?>
<table width="100%" border="5" align="center">
    <tr>
      <th colspan="3" scope="col"><c class="makan"><div align="center">HASIL</div></c></th>
    </tr>
    
    <tr>
    <td>Nama anda</td>
    <td><b>:</b></td>
    <td > <?php echo "".$nama." "  ?></td>
	</tr>
    
    <tr>
    <td>Jenis kelamin</td>
    <td><b>:</b></td>
    <td > <?php echo "".$jenis." "?></td>
    </tr>
    
    <tr>
    <td>tanggal lahir anda</td>
    <td><b>:</b></td>
    <td > <?php echo "".$tanggal." ".$bulan." ".$tahun.""?></td>
    </tr>
    
     <tr>
    <td>Bintang anda</td>
    <td><b>:</b></td>
    <td > <?php echo "".$bintang." " ?></td>
    </tr>

 	<tr>
    <td>Keuangan anda</td>
    <td><b>:</b></td>
    <td > <?php echo " ".$keuangan." " ?></td>
    </tr>

	 	<tr>
    <td>Asmara anda</td>
    <td><b>:</b></td>
    <td > <?php echo "".$asmara." " ?></td>
    </tr>

	<tr>
    <td>Pekerjaan anda</td>
    <td><b>:</b></td>
    <td > <?php echo " ".$pekerjaan." " ?></td>
    </tr>

<tr>
<td align="center" colspan="3"><?php echo "<img src=".$foto.">"?></td>
</tr>

<center ><marquee><u><i>copyright by enjel @183017</u></i><marquee><center>