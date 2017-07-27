<?php
include_once('simple_html_dom.php');
$html = new simple_html_dom();
$alamat = "http://www.republika.co.id/";
$html->load_file($alamat);

$i=0;
foreach($html->find('a') as $linkisi)
{
		$link=str_replace("/", "", $linkisi->href);
		$linkambil=preg_match("/republika.co.idberita/", $link);
	if ($linkambil)
	{
		$i++;
		$urlnya=$linkisi->href;
		echo "isi url-nya : <a href='".$urlnya."'>".$urlnya."</a><br>";
		$pecah=explode('/',$urlnya);
		$judul=substr(str_replace("-"," ",$pecah[9]),9);
		echo $judul."<p>";
	}
		/*$urlnya=$linkisi->href;
		echo "isi url-nya : <a href='".$urlnya."'>".$urlnya."</a><br>";*/
}
/*

	if (substr("'".$linkisi->href."'",1,24)=="http://cnnindonesia.com/")
	{
		$i++;
		$urlnya=$linkisi->href;
		echo "isi url-nya : <a href='".$urlnya."'>".$urlnya."</a><br>";
		$pecah=explode('/',$urlnya);
		$judul=str_replace("-"," ",$pecah[5]);
		
		echo $judul."<p>";
	}
}*/	

echo "banyak berita : ".$i;

?>