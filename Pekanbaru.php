<html>  
   <head> <body bgcolor="pink"> 
      <title>Prakiraan Cuaca </title>
      <center><h1>Prakiraan Cuaca Untuk Penerbang Paralayang</h1>
      <h3>Jam :</h3>
  </head>
   
   <body bgcolor="white" text="black" onload="waktu()">  
   <table align=center style="border:4px solid cream" bgcolor="#CCCCCC">
   <tr>
   <td>  
   <div id="output">  
   </div>
   </td>
   </tr>  
   </table>  
  
    <script type="text/javascript">  
    // 1 detik = 1000  
    window.setTimeout("waktu()",1000);    
    function waktu() 
	{     
    var tanggal = new Date();    
    setTimeout("waktu()",1000);    
    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
    } 

</script><br>
   
<?php

    $tgl=date('l,d-m-Y');
	echo $tgl;
	echo "<br>";
	
     
	$json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/conditions/q/indonesia/pekanbaru.json");  
    $parsed_json= json_decode($json_string);


    $location    = $parsed_json->{"current_observation"}->{"display_location"}->{"state_name"};
	$city        = $parsed_json->{"current_observation"}->{"display_location"}->{"city"};
    $temperature = $parsed_json->{"current_observation"}->{"temperature_string"};
    $angin       = $parsed_json->{"current_observation"}->{"wind_string"};
 	$kelembaban  = $parsed_json->{"current_observation"}->{"relative_humidity"};
    $jarak       = $parsed_json->{"current_observation"}->{"visibility_km"};
    $tekanan     = $parsed_json->{"current_observation"}->{"pressure_in"};
	$cuaca       = $parsed_json->{"current_observation"}->{"weather"};
	$icon        = $parsed_json->{"current_observation"}->{"icon"};
    
	
	echo "Negara :$location \n";
	echo "<br>";
    echo "Kota : $city \n";
	echo "<br>";
    echo "Temperatur : $temperature\n";
	echo "<br>";
	echo "Kecepatan Angin : $angin \n";
	echo "<br>";
	echo "Kelembaban : $kelembaban \n";
	echo "<br>";
	echo "Jarak Pandang : $jarak\n";
	echo "<br>";
	echo "Tekanan Udara : $tekanan ` \n";
    echo "<br>";
	echo "Cuaca : $cuaca \n";
	echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br/>";	
    echo "Caution :";
    echo "<br>";
	
	if ($cuaca == "Clear")
	echo "Keadaan cuaca sangat mendukung untuk penerbangan paralayang";
	    
	else if($cuaca == "Mostly Cloudy")
	echo "Keadaan cuaca kurang mendukung untuk penerbangan paralayang";
		
	else 
	echo "Keadaan cuaca tidak mendukung untuk melakukan penerbangan paralayang ";
	
	
?>
   
   <p><br><form action="finalindex.php" method="get">
		  <input class="btnForm" type="submit" name="submit" value="Kembali"/></center>
		  </form>

</body>
</html>