<div class="col-md-12">
                <div class="panel panel-default">
				  <div class="panel-heading">
				  	<center>
				  	<a href="https://www.tempo.co/">
				  		<img src="http://cdn.tmpo.co/web/teco/images/logo-tempo-small.gif" alt="Tempo.Co">
				  	</a>
				  	</center>
				  </div>
				  <div class="panel-body">
				  	<?php
						foreach($htmltem->find('a') as $linkjudul)
						{ 	
							$link=str_replace("/", "", $linkjudul->href);
							echo $link."<br>";


							$linkambil=preg_match("/tempo.coread/", $link);

							if ($linkambil)
							{
								
								
								$urlnya=$linkjudul->href;
								echo $urlnya."<br>";
								$pecah=explode('/',$urlnya);
								$judul=str_replace("-"," ",$pecah[9]);
								$judulketemu=preg_match("/".$qcari."/i", $judul); 
								if($judulketemu){
									$t++;
									/*echo "==============================================================================================<br>";*/
									/*echo " Berita <b> CNN </b> dengan kata kunci: <b>".$qcari."</b>";*/
									echo "<br>";
									echo "<center>";
									echo "<h4><p class='uppercase'>".$judul."</p></h4>";
									echo "</center>";
									echo "<a href='".$urlnya."'target='_blank'>".$urlnya."</a><br><br>";

									$htmltem->load_file($urlnya);
								foreach($htmltem->find('p') as $linkisi)
								{
									if ($linkisi)
									{	
										$beritanya=str_replace("'","-",(strip_tags($linkisi)));
										echo $beritanya."<br>";
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
				  	<?php echo "<center> banyak berita tempo: ".$t."</center>"; ?>
				  </div>
				</div>
                    
       </div><!--end col-6 -->