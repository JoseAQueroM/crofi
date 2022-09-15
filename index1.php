<?php
$user = "usuariopc";
$password = "lp1210";
$database = "powercrossfit";
$table = "usuarios";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
echo "Conexion Exitosa";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function buscar($conn){
    
        $id_usuario = $_POST['usuario'];
        if( $id_usuario == "%"){
            $busqueda = "SELECT U.nombre , P.peso , P.brazo, P.pecho, P.cintura, P.cadera, P.pierna 
                     from usuarios U, peso_usuario P where U.id = P.usuario_id " ;
        }else {
            $busqueda = "SELECT U.nombre , P.peso , P.brazo, P.pecho, P.cintura, P.cadera, P.pierna 
                     from usuarios U, peso_usuario P where U.id = P.usuario_id and U.id = $id_usuario" ;}
        if ($result = $db->query($busqueda)) {
            return   $result;         
        }
    }
function insertar($conn,$usuario,$peso,$brazo,$pecho,$cintura,$cadera,$muslo){
    $registro= "insert into peso_usuario  ( usuario_id, peso , brazo, pecho, cintura, cadera, pierna) values ($usuario,$peso,$brazo,$pecho,$cintura,$cadera,$muslo)";
    if ($query = $db->query($registro) === false) {
        return "Registro fallido";
    }else 
     return "Registro Con exito";
}
?>