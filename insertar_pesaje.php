<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Crossfit</title>
</head>
<body>
    <?php include('index.php'); ?>
    <section>
        <form action="/powercrossfit/insertar_pesaje.php" method="post">
            <span></span>
                <input type="text" multiple name="usuario" id="usuario" placeholder="Selecciona el Usuario" list="drawfemails" required size="15">
                
                <datalist id="drawfemails">
                <?php
                if ($result = mysqli_query($conn,"SELECT * from usuarios")) {
                
                    while ($row = mysqli_fetch_row($result)){
                ?>
                   
                   <option value=<?php  echo $row[0];?> ><?php echo $row[1]; ?></option>                                
                   
                <?php
                }}?>
                </datalist>
                <input type="number" name="peso" placeholder="peso">
                <input type="number" name="brazo" placeholder="brazo">
                <input type="number" name="pecho" placeholder="pecho">
                <input type="number" name="cintura" placeholder="cintura">
                <input type="number" name="cadera" placeholder="cadera">
                <input type="number" name="muslo" placeholder="muslo">
                <input type="submit" name="buscar" value="Insertar">
        </form>
        <?php if(isset($_POST['buscar'])){ 
            $usuario=$_POST['usuario'];
            $peso=$_POST['peso'];
            $brazo=$_POST['brazo'];
            $pecho=$_POST['pecho'];
            $cintura=$_POST['cintura'];
            $cadera=$_POST['cadera'];
            $muslo=$_POST['muslo'];
            
            $resultado = insertar($conn,$usuario,$peso,$brazo,$pecho,$cintura,$cadera,$muslo); 
            echo $resultado;
            
            } ?>
    </section>
</body>
</html>