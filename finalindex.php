<html>
    <head>
        <title>APLIKASI CUACA</title>
    </head>
    
    <body><p>
	<body bgcolor="pink">
        <h1 align=center>PRAKIRAAN CUACA PENERBANG PARALAYANG </h1>
		<h2 align=center>Informasi Terkini & Terupdate</h2><body bgcolor="white" text="black" onload="waktu()">  
		
   <table align=center style="border:4px">
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

</script> 
   
      <hr color="#A52A2A" size="3" width="100%"><br>
	  
	   <div align=center
		<center>Pilih Lokasi: <br><p>
		<a href="Makassar.php"><input class="btnForm" type="submit"  value="Makassar"></a> <p>
		<a href="Manokwari.php"><input class="btnForm" type="submit" value="Manokwari"/><br><p>
		<a href="Pekanbaru.php"><input class="btnForm" type="submit" value="Pekanbaru"></a> <br><p>
		<a href="Sumedang.php"><input class="btnForm" type="submit"  value="Sumedang"></a> <br><p>
		<a href="Tasikmalaya.php"><input class="btnForm" type="submit" value="Tasikmalaya"></a> 

        </div>
	   
</body>
</html>


