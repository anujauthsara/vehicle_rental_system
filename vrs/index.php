
<?php
include_once 'header.php'
?>

<h1>Hello <?php

if(isset($_SESSION["username"])){
  echo $_SESSION["username"].'!';
}else{
  echo 'user !';
}

 ?></h1>
 
<h2>Welcome to CAR2GO<h2>

<?php
include_once 'footer.php'
?>