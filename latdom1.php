<!DOCTYPE html>
<html>
<head>
<style>
p.uppercase {
    text-transform: uppercase;
}

p.lowercase {
    text-transform: lowercase;
}

p.capitalize {
    text-transform: capitalize;
}
</style>
</head>
<body>
	<?php
	include_once('simple_html_dom.php');
	$htmlcnn = new simple_html_dom();
	$htmlrep = new simple_html_dom();
	$alamatcnn ="http://www.cnnindonesia.com/";
	$alamatrep ="http://www.republika.co.id/";
	$htmlcnn->load_file($alamatcnn);
	$htmlrep->load_file($alamatrep);

	$c=0;
	$r=0;
	$katakunci="ahok";
	foreach($htmlcnn->find('a') as $linkjudul)
	{ 
		if (substr("'".$linkjudul->href."'",1,24)=="http://cnnindonesia.com/")
		{
			
			$urlnya=$linkjudul->href;
			$pecah=explode('/',$urlnya);
			$judul=str_replace("-"," ",$pecah[5]);
			$judulketemu=preg_match("/".$katakunci."/i", $judul); 
			if($judulketemu){
				$c++;
				echo "Berita CNN dengan kata kunci: <b>".$katakunci."</b>";
				echo "<br>";
				echo "<h4><p class='uppercase'>".$judul."</p></h4>";
				echo "<a href='".$urlnya."'target='_blank'>".$urlnya."</a><br><br>";

				$htmlcnn->load_file($urlnya);
			foreach($htmlcnn->find('div') as $linkisi)
			{
				if ($linkisi->class=="text_detail")
				{	
					$beritanya=str_replace("'","-",(strip_tags($linkisi)));
					echo "Isi Berita :<br>".$beritanya."<br>";
					echo "==============================================================================================<br><br>";

				}
			}break;
			}//if
			/*else
			{
				echo "tidak ada berita";
				
			}break;*/

		}
	}
	echo "banyak berita CNN: ".$c;	
	echo "<br>";
	
	foreach($htmlrep->find('a') as $linkjudul)
	{ 
		if (substr("'".$linkjudul->href."'",1,34)=="http://www.republika.co.id/berita/")
		{
			
			$urlnya=$linkjudul->href;
			$pecah=explode('/',$urlnya);
			$judul=str_replace("-"," ",$pecah[9]);
			$judulketemu=preg_match("/".$katakunci."/i", $judul); 
			if($judulketemu){
				$r++;
				echo "Berita Republika dengan kata kunci : ".$katakunci;
				echo "<br>";
				echo "<h4><p class='uppercase'>".$judul."</p></h4>";
				echo "<a href='".$urlnya."'>".$urlnya."</a><br><br>";

				$htmlrep->load_file($urlnya);
			foreach($htmlrep->find('div') as $linkisi)
			{
				if ($linkisi->class=="text_detail")
				{	
					$beritanya=str_replace("'","-",(strip_tags($linkisi)));
					echo "Isi Berita :<br>".$beritanya."<br>";
					echo "==============================================================================================<br><br>";

				}
			}break;
			}

		}
	}echo "banyak berita Republika: ".$r;






?>


</body>
</html>


