
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="myfirstdatabase";


try {
  $pdo= new PDO("mysql:host=$servername;dbname=$db", $username, $password);

  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM definitions";
    
    $result = $pdo->query($sql);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit();
}

?>

