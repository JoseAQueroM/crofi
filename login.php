
<?php include('php/users_login.php'); ?>
<?php include("./header.php") ?>
<body >
        <div class="register-contenedor">
            <div class="registrar">
                <h2 class="titulo-login">Login</h2>
                <form class="form-Container  col-12 col-md-12 col-lg-12" action="" method="POST">
                    <input class="input-Correo input" name="correo_usuario" type="email" placeholder="Correo">
                    <input class=" input" name="user_pass" type="password" placeholder="Contraseña">
                    <p><?php echo $salida;?></p>
                    
                    <input class="btn " name="entrar" class=" button-Login" type="submit" value="Entrar">

                    <a href="recuperar.php" class="recuperar">¿Has olvidado tu contraseña? </a>
                </form>
            </div>
        </div>
</body>

        <?php include("./footer.php") ?>
