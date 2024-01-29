<html>
<body style="background-color:84C4A4">
<h1> DATABASE GET: 
<br/>
Welcome, <?php echo $_POST["email"]; ?>
</h1>
<hr/>
<ul>
<b>
<li>
 Your uploaded data is  <?php echo $_FILES["file1"]["size"]; ?> bytes large.
</li> 
<li>
Your uploaded data is of type <?php echo $_FILES["file1"]["type"]; ?> .
</li>

</b>


</ul>
</body>
</html>
