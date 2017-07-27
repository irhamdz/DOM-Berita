<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>TUGAS Sistem Terdistribusi DOM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Perpustakaan Berbasis Web">
    <meta name="keywords" content="Perpustakaan, perpus, online, website">
    <meta name="author" content="Hakko Bio Richard"/>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
</style>
</head>
<body style="background-color:#E2E1E1">
	<?php
	include_once('simple_html_dom.php');
	$htmlcnn = new simple_html_dom();
	$htmlrep = new simple_html_dom();
	$htmlviv = new simple_html_dom();
	$htmltem = new simple_html_dom();
	$alamatcnn ="http://www.cnnindonesia.com/";
	$alamatrep ="http://www.republika.co.id/";
	$alamatviv ="http://www.viva.co.id/";
	$alamattem ="https://www.tempo.co/";
	$htmlcnn->load_file($alamatcnn);
	$htmlrep->load_file($alamatrep);
	$htmlviv->load_file($alamatviv);
	$htmltem->load_file($alamattem);

	$c=0;
	$r=0;
	$v=0;
	$t=0;
	if(isset($_POST['qcari'])){
	$qcari=$_POST['qcari'];
	}
	if (isset($_POST['channel'])) 
	{	
		$channelketemu=implode(',', $_POST['channel']); 
	}


	?>

	 
        <div class="col-lg-12">
        	<br>
        	<!-- <div class="alert alert-success"> -->
        	
        	<div class="col-md-10 col-md-offset-1">
	            
	              <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
	             <!--<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
				<center><h4>TUGAS SISTEM TERDISTRIBUSI DOM</h4></center>
				<center>Copyright @ Irham Dzuhri 2016</center>
			</div>
			
			<div class="col-md-1">
				<a class="btn btn-danger"  href="index.php" data-placement="bottom" >
	            <i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali 
	        	</a>
        	</div>
        	
        	<!-- </div> -->
        </div>
        <div>
-

        </div>
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
             <!--<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
		<center>Pencarian Berita dengan kata kunci : <b><?php echo $qcari?></b> </center>
          </div>
        </div>
        <?php
        /*if ( in_array($value, array(0, 1, 2)) ) {
        	echo "tidak Berhasil";
        }*/
      /* 	if($value=="CNNIndonesia" || $value=="Republika" and $value=="Viva"){
        	echo "Berhasil";*/
      /*  }
        else{
        	echo"tidak berhasil";
        }*/
        ?>
        <?php
        if($channelketemu=="cnn")
        {
		include "cnn.php";
		}

		if($channelketemu=="republika")
		{
		include "republika.php";
		}

		if($channelketemu=="viva")
		{
		include "viva.php";
		}

		if($channelketemu=="tempo")
		{
		include "tempo.php";
		}

		if($channelketemu=="cnn,republika")
		{
		include "cnn-republika.php";
		}

		if($channelketemu=="cnn,viva")
		{
		include "cnn-viva.php";
		}

		if($channelketemu=="cnn,tempo")
		{
		include "cnn-tempo.php";
		}

		if($channelketemu=="republika,viva")
		{
		include "republika-viva.php";
		}

		if($channelketemu=="republika,tempo")
		{
		include "republika-tempo.php";
		}

		if($channelketemu=="viva,tempo")
		{
		include "viva-tempo.php";
		}

		if($channelketemu=="cnn,republika,viva")
		{
		include "cnn-republika-viva.php";
		}

		if($channelketemu=="cnn,republika,tempo")
		{
		include "cnn-republika-tempo.php";
		}

		if($channelketemu=="cnn,viva,tempo")
		{
		include "cnn-viva-tempo.php";
		}

		if($channelketemu=="republika,viva,tempo")
		{
		include "republika-viva-tempo.php";
		}

		if($channelketemu=="cnn,republika,viva,tempo")
		{
		include "4channel.php";
		}
		?>
      

	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.fittext.js"></script>
	<script src="js/wow.min.js"></script>

</body>
</html>


