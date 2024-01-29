<html>
<head>
      <link rel="stylesheet" href="./style.css">
</head>


<h1> 
ENTER YOUR CREDENTIALS AND POST BELOW:
</h1>
<hr/>
<body>

<form action="handlePost.php" method="post" enctype="multipart/form-data" >
E-mail: <input type="text" name="email"><br>
JSON PATH: <input type="file" name="file1"><br>
<input type="submit">



</form>


<?php
$DIR= getcwd();
if(is_dir($DIR)){
	$DirEntires = scandir($DIR,1);
		foreach($DirEntries as $Entry){

echo $Entry."<br/>\n";
		}




}
?>


</body>









</html>
