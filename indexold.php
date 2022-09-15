<?php
$user = "usuariopc";
$password = "lp1210";
$database = "powercrossfit";
$table = "usuarios";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Conexion Exitosa</h2><ol>";
  

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
