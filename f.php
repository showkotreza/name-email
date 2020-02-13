<html>
<head> <title>Register</title></head>
<body>

<?php

$nameErr=$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	//echo $nameErr;
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	//echo $emailErr;
  } 
  else {
    $email = test_input($_POST["email"]);
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2> Registration</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<b>Name:<b> <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<b>Email:<b> <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php


         echo "<h2>Your Given details are as :</h2>";
		 
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
?>	
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $name;

fwrite($myfile, $txt);

$txt =$email;

fwrite($myfile, $txt);

fclose($myfile);
?>	 
		 
</body>
</html>
