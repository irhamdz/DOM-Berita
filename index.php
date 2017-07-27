<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>		

		<form action="latdom2.php" method="POST">
            	<br>
            	<br>
            	<center>
            		<div>
                        <fieldset data-role="controlgroup">
                        <legend><strong>Masukan Kata Kunci Pencarian: </strong></legend>
                		<!-- <h4><strong>Masukan Kata Kunci Pencarian: </strong> </h4> -->
                		<input type='text' class="form-control input-sm pull-right" style="width: 150px;"  name='qcari' placeholder='Kata Kunci' required /> 
		            	</fieldset>
		            </div> 
                    <br>
                    <div>
                        <fieldset data-role="controlgroup">
                        <legend><strong>Pilih Channel Berita: </strong></legend>
                        <input type="checkbox" name="channel[]" id="checkbox-1" class="custom" value="cnn" checked/>
                        <label for="checkbox-1">CNN Indonesia</label>
                        <input type="checkbox" name="channel[]" id="checkbox-2" class="custom" value="republika"/>
                        <label for="checkbox-2">Republika</label>
                        <input type="checkbox" name="channel[]" id="checkbox-3" class="custom" value="viva"/>
                        <label for="checkbox-3">Viva</label>
                        <input type="checkbox" name="channel[]" id="checkbox-4" class="custom" value="tempo"/>
                        <label for="checkbox-4">Tempo</label>
                        </fieldset>
                        </br>
                    </div>  
                    <button type="submit"> OK </button>    
                </center>
        </form>  
                <br>
                <center>
                <a href="cnn2.php">>>  Tampilkan Semua Berita CNN <a><br>
                <a href="republika2.php">>>  Tampilkan Semua Berita Republika <a><br>
                <a href="cnn2.php">>> Tampilkan Semua Berita Viva <a><br>
                <a href="cnn2.php">>> Tampilkan Semua Berita Tempo <a>
                </center>
</body>
</html> 