<html>  
   <head> <body bgcolor="orange"> 
      <title>Prakiraan Cuaca </title>
      <center><h1>Prakiraan Cuaca Untuk Penerbang Paralayang</h1>
      <h3>Waktu hari ini :</h3>
  </head>
   
   <body bgcolor="white" text="black" onload="waktu()">  
   <table align=center style="border:4px solid cream" bgcolor="#CCCCCC">
   <tr><td>  
   <div id="output">  
   </div>
   </td></tr>  
   </table>  
  
    <script type="text/javascript">  
    // 1 detik = 1000  
    window.setTimeout("waktu()",1000);    
    function waktu() {     
    var tanggal = new Date();    
    setTimeout("waktu()",1000);    
    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
   } 

</script> 
   
  <br>
   
<?php
  
	$tgl=date('l,d-m-Y');
	echo $tgl;
	echo "<br>";


  $json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/conditions/q/indonesia/manokwari.json");
  $parsed_json = json_decode($json_string);
  $location= $parsed_json->current_observation->display_location->state_name;
  $city= $parsed_json->current_observation->display_location->city;
  $Temperature= $parsed_json->current_observation->temperature_string; 
  $Cuaca= $parsed_json->current_observation->weather;
  $Angin= $parsed_json->current_observation->wind_string;
  $Kelembaban= $parsed_json->current_observation->relative_humidity;
  $JarakPandang= $parsed_json->current_observation->visibility_km;
  $Tekanan= $parsed_json->current_observation->pressure_in;
  
  echo
  "Negara : $location </br>
  Kota : $city </br>
  Temperatur : $Temperature</br>
  Cuaca : $Cuaca </br>
  Kecepatan Angin : $Angin </br>
  Kelembaban : $Kelembaban </br>
  Jarak Pandang : $JarakPandang </br>
  Tekanan Udara : $Tekanan \n";
  
  
?>
   <p><br><form action="index.php" method="get">
	<input class="btnForm" type="submit" name="submit" value="Kembali"/></center>
	</form>

 </body>
</html>