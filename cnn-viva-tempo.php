<div class="col-md-6">
                <div class="panel panel-default">
				  <div class="panel-heading">				  	
				  	<center>
				  	<a href="http://www.cnnindonesia.com/">
				  		<img src="//www.cnnindonesia.com/assets/image/logo_new.png" width="100" height="100">
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

       <div class="col-md-6">
                <div class="panel panel-default">
				  <div class="panel-heading">
				  	<center>
				  	<a href="http://www.viva.co.id/">
				  		<img src="http://cdn-media.viva.id/appaux/portal/img/element/logo.png" alt="Logo">
				  	</a>
				  	</center>
				  </div>
				  <div class="panel-body"><?php
					foreach($htmlviv->find('a') as $linkjudul)
					{ 	
						$link=str_replace("/", "", $linkjudul->href);
						$linkambil=preg_match("/viva.co.idnews/", $link);
						if ($linkambil)
						{
							
							$urlnya=$linkjudul->href;
							$pecah=explode('/',$urlnya);
							$judul=substr(str_replace("-"," ",$pecah[5]),6);
							$judulketemu=preg_match("/".$qcari."/i", $judul); 
							if($judulketemu){
								$v++;
								
								echo "<br>";
								echo "<center>";
								echo "<h4><p class='uppercase'>".$judul."</p></h4>";
								echo "</center>";
								echo "<a href='".$urlnya."'target='_blank'>".$urlnya."</a><br><br>";

								$htmlviv->load_file($urlnya);
							foreach($htmlviv->find('span') as $linkisi)
							{
								if ($linkisi->itemprop=="description")
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
				  <?php echo "<center> banyak berita Viva: ".$v."</center>"; ?>
				  </div>
				</div>
                    
       </div><!--end col-6 -->

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
							$linkambil=preg_match("/tempo.coread/", $link);
							if ($linkambil)
							{
								
								$urlnya=$linkjudul->href;
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