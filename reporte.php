<?php
session_start();
include('./php/db_conexion.php');

if (!isset($_SESSION['correo_login'])) {
    header("location: login.php");
    die();
}
?>
<?php include("./header.php") ?>

    <section class="body">
        
    
        <?php 
        $sesion =$_SESSION['correo_login'];
        $consult = $db->query("SELECT * FROM $table where correo= '$sesion'");
        foreach($consult as $salida) {
        $id_usuario = $salida['id'];
        $nombre_usuario = $salida ['nombre'];
        } 
        if(isset($id_usuario)){ 
            $resultado = buscar($db , $id_usuario); 
            ?>
            <h1 class="titulo titulo-color" data-aos="zoom-in-left">Bienvenida <?php echo $nombre_usuario; ?></h1>
            <h3 class="sub_titulo titulo-color" data-aos="zoom-in-right">Registro de Peso Mensual</h3>
            <div class="grilla" data-aos="zoom-in">
                <div class="medidas">Mes</div>
                <div class="medidas">Peso</div>
                <div class="medidas">Brazo</div>
                <div class="medidas">Pecho</div>
                <div class="medidas">Cintura</div>
                <div class="medidas">Cadera</div>
                <div class="medidas">Pierna</div>
              

            
            <?php
            foreach($resultado as $row) {
                echo "<div>".$row['fecha']."</div> ";
                echo "<div>".$row['peso']."</div> ";
                echo "<div>".$row['brazo']."</div> ";
                echo "<div>".$row['pecho']."</div> ";
                echo "<div>".$row['cintura']."</div> ";
                echo "<div>".$row['cadera']."</div> ";
                echo "<div>".$row['pierna']."</div> ";
            ?>
            <?php }?>

            </div>      
            <?php } ?>

    
    </section >
   
</body>
<script src="js/main.js"></script>
<?php include("./footer.php") ?>