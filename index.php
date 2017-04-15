
<html>
    <head>
        <title>APP CUACA</title>
    </head>
    
    <body><p>
	<body bgcolor="pink">
        <h1 align=center>PRAKIRAAN CUACA PENERBANG PARALAYANG </h1>
		<h2 align=center>Informasi Terkini & Terupdate</h2><body bgcolor="white" text="black" onload="waktu()">  
		
   <table align=center style="border:4px">
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
   
      <hr color="#A52A2A" size="4" width="100%"><br>
	<form enctype="multipart/form-data" method="POST" action="tampilan.php">

		<center>Cari Lokasi: <br>
		<textarea name="deskripsi" rows="1" cols="30"></textarea><br>
		<input type="submit" value="submit">
	
	</form>
     </div>
	   
    </body>
</html>


