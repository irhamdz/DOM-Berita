<?php
include_once('simple_html_dom.php');
$html = new simple_html_dom();
$alamat = "http://www.cnnindonesia.com/";
$html->load_file($alamat);

$i=0;
foreach($html->find('a') as $linkisi)
{
	if (substr("'".$linkisi->href."'",1,24)=="http://cnnindonesia.com/")
	{
		$i++;
		$urlnya=$linkisi->href;
		echo "isi url-nya : <a href='".$urlnya."'>".$urlnya."</a><br>";
		$pecah=explode('/',$urlnya);
		$judul=str_replace("-"," ",$pecah[5]);
		echo $judul."<p>";
	}
}	

echo "banyak berita : ".$i;


?>