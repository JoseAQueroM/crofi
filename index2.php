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
        <form action="/powercrossfit/index2.php" method="post">
            <span></span>
                <input type="text" multiple name="usuario" id="usuario" placeholder="Selecciona el Usuario" list="drawfemails" required size="30">
                
                <datalist id="drawfemails">
                <?php
                if ($result = mysqli_query($conn,"SELECT * from usuarios")) {
                ?>
                    <option value="%" >Todos</option>
                <?php
                    while ($row = mysqli_fetch_row($result)){
                ?>
                   
                   <option value=<?php  echo $row[0];?> ><?php echo $row[1]; ?></option>                                
                   
                <?php
                }}?>
                </datalist>
                <input type="submit" name="buscar">
        </form>
        <?php if(isset($_POST['buscar'])){ 
            $resultado = buscar($conn); 
            while ($row = mysqli_fetch_row($resultado)){
                echo $row[0]." ";
                echo $row[1]." ";
                echo $row[2]." ";
                echo $row[3]." ";
                echo $row[4]." ";
                echo $row[5]." ";
                echo $row[6]." ";
            ?>
            <br>
            <?php
            
            }
            } ?>
    </section>
</body>
</html>