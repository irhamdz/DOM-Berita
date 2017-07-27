       <div class="col-md-12">
                <div class="panel panel-default">
				  <div class="panel-heading">
				  	<center>
				  	<a href="http://www.republika.co.id/">
				  	<img src="http://www.republika.co.id/files/images/1republika.co.id_03.png" >
					</a>
					</center>
				  </div>
				  <div class="panel-body">
				  	<?php
					foreach($htmlrep->find('a') as $linkjudul)
					{ 	
						$link=str_replace("/", "", $linkjudul->href);
						$linkambil=preg_match("/republika.co.idberita/", $link);
						if ($linkambil)
						{
							
							$urlnya=$linkjudul->href;
							$pecah=explode('/',$urlnya);
							$judul=substr(str_replace("-"," ",$pecah[9]),9);
							$judulketemu=preg_match("/".$qcari."/i", $judul); 
							if($judulketemu){
								$r++;
								
								echo "<br>";
								echo "<center>";
								echo "<h4><p class='uppercase'>".$judul."</p></h4>";
								echo "</center>";
								echo "<a href='".$urlnya."'target='_blank'>".$urlnya."</a><br><br>";

								$htmlrep->load_file($urlnya);
							foreach($htmlrep->find('div') as $linkisi)
							{
								if ($linkisi->class=="content-detail")
								{	
									$beritanya=str_replace("'","-",(strip_tags($linkisi)));
									echo "Isi Berita :<br>".$beritanya."<br>";
									

								}
							}break;
							}

						}
					}
					?>
				  </div>
				  <div class="panel-footer">
				  		<?php echo "<center> banyak berita Republika: ".$r."</center>"; ?>
				  </div>
				</div>
                    
       </div><!--end col-6 -->