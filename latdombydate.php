<?php
include_once('simple_html_dom.php');
$htmlisi = new simple_html_dom();

$files = array();
$urls = array(
    'http://www.cnnindonesia.com/gaya-hidup/indeks/10/?page=5',
    'http://www.cnnindonesia.com/gaya-hidup/indeks/10/?page=6',
);

foreach($urls as $url) {

    $html = file_get_html($url);

    // Find all article blocks
    foreach($html->find('div.text2') as $file) {
        $item['date'] = $file->find('span.date', 0)->plaintext;
        $item['judul'] = $file->find('h3', 0)->plaintext;
//        $files[] = $item;
        $item['link'] = $file->find('a', 0)->href;
		echo "Tanggal : ".$item['date'];
		echo "<br>";
		echo "Judul : ".$item['judul'];
		echo "<br>";
		echo "Link : <a href=\"".$item['link']."\">".$item['link']."</a>"; 
		echo "<br>";
		$htmlisi->load_file($item['link']);
			foreach($htmlisi->find('div') as $linkisi)
			{
				if ($linkisi->class=="text_detail")
				{	
					$beritanya=str_replace("'","-",(strip_tags($linkisi)));
					echo "Isi :<br>".$beritanya."<br>";
				}
    		}
//print(files);
	}
}
?>