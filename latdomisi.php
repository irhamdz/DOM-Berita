<?php
include_once('simple_html_dom.php');
$urlnya="http://nasional.news.viva.co.id/news/read/768046-kisah-amokrane-sabet-sebelum-tewas-ditembak-polisi-bali";

$htmlisi = new simple_html_dom();
$htmlisi->load_file($urlnya);
//echo "isi url-nya 2 : ".$urlnya."<br>";

$pecah=explode('/',$urlnya);
$judul=substr(str_replace("-"," ",$pecah[5]),6);
echo $judul."<p>";

foreach($htmlisi->find('span') as $linkisi)
{
	if ($linkisi->itemprop=="description")
	{	
		$beritanya=str_replace("'","-",(strip_tags($linkisi)));
		echo "isinya beritanya : ".$beritanya."<br>";
	}
}



?>