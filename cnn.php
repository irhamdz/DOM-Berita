<div class="col-md-12">
                <div class="panel panel-default">
				  <div class="panel-heading">
				  	<center>
				  	<a href="http://www.cnnindonesia.com/">
				  		<img src="//www.cnnindonesia.com/assets/image/logo_new.png">
				  	</a>
				  	</center>
				  </div>
				  <div class="panel-body">

				  	<?php
						foreach($htmlcnn->find('a') as $linkjudul)
						{ 
							if (substr("'".$linkjudul->href."'",1,24)=="http://cnnindonesia.com/")
							{
								
								$urlnya=$linkjudul->href;
								$pecah=explode('/',$urlnya);
								$judul=str_replace("-"," ",$pecah[5]);
								$judulketemu=preg_match("/".$qcari."/i", $judul); 
								if($judulketemu){
									$c++;
									/*echo "==============================================================================================<br>";*/
									/*echo " Berita <b> CNN </b> dengan kata kunci: <b>".$qcari."</b>";*/
									echo "<br>";
									echo "<center>";
									echo "<h4><p class='uppercase'>".$judul."</p></h4>";
									echo "</center>";
									echo "<a href='".$urlnya."'target='_blank'>".$urlnya."</a><br><br>";

									$htmlcnn->load_file($urlnya);
								foreach($htmlcnn->find('div') as $linkisi)
								{
									if ($linkisi->class=="text_detail")
									{	
										$beritanya=str_replace("'","-",(strip_tags($linkisi)));
										echo "Isi Berita :<br>".$beritanya."<br>";
										/*echo "==============================================================================================<br>";*/

									}
								}break;
								}//if
								/*else if($judulketemu == FALSE)
								{
									echo "tidak ada berita";
									
								}break;*/

							}
						}	
						?>
				  </div>
				  <div class="panel-footer">
				  	<?php echo "<center> banyak berita CNN: ".$c."</center>"; ?>
				  </div>
				</div>
                    
       </div><!--end col-6 -->