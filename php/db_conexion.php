<?php
/*function condb()
{*/
$user = "root";
$password = "";
$database = "powercrossfit";
$table = "usuarios";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
     return $db;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
/*}*/

$db = condb();
function validarUsuario($correo_usuario,$db)
{
   // $db = condb();
    
    $query = "SELECT count(*) FROM usuarios WHERE correo='$correo_usuario'";
    $result = $db->query($query);
    $salida = $result -> fetchColumn();
    return ($salida==1); 

}

function validarLogin($correo_usuario, $clave,$db)
{
   // $db = condb();
    $query = "SELECT count(*) FROM usuarios WHERE correo='$correo_usuario' and clave='$clave'";

    $result = $db->query($query);
    $salida = $result -> fetchColumn();
    return ($salida==1);    
  
}

function buscar($db , $id_usuario){
    //$db = condb();

    
        $busqueda = "SELECT U.nombre , P.peso , P.brazo, P.pecho, P.cintura, P.cadera, P.pierna, P.fecha 
                 from usuarios U, peso_usuario P where U.id = P.usuario_id and U.id = $id_usuario" ;
        
    if ($result = $db->query($busqueda)) {
        return   $result;         
    }
    
}

function validarPrivilegio($db,  $correo_usuario){
    "SELECT usuarios.nombre, privilegios.nombre FROM `usuarios` , privilegios , usuarios_privilegios WHERE usuarios.id=usuarios_privilegios.usuario_id and privilegios.id=usuarios_privilegios.privilegio_id and usuarios.correo='joseanquero@gmail.com'";
}


function insertar($db,$usuario,$peso,$brazo,$pecho,$cintura,$cadera,$muslo){
   // $db = condb();
$registro= "insert into peso_usuario  ( usuario_id, peso , brazo, pecho, cintura, cadera, pierna) values ($usuario,$peso,$brazo,$pecho,$cintura,$cadera,$muslo)";
if ($query = $db->query($registro) === false) {
    return "Registro fallido";
}else 
 return "Registro Con exito";
}
?>