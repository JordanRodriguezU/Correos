<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Usuario</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('MyStyle/Mystyle.css') ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('Bootstrap/css/bootstrap.css') ?>">
        <script type="text/javascript" src="<?php echo base_url('MyJs/MyJavascript.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('Jquery/jquery-2.1.4.min.js') ?>"></script>



    </head>
    <body>
      
        <form method="post" action="Users/Confirmar" onsubmit="return Events.ValidarNewUser()" style="margin-top: 15%" class="form-horizontal" role="form"> 
            <div class="form-group">

                <label for="nombre" class="col-sm-2 control-label labelusers">Usuario</label> <div class="col-sm-10">

                    <input onkeyup="Events.onkeyUpNameUser();" onblur="Events.OnBlur('<?php echo base_url('Users/VerifyUser'); ?>')" name="nombre" required type="text" class="form-control enterUsers" id="nombre" placeholder="Introduzca Su Nombre">

                </div>

            </div>

            <div class="form-group">

                <label for="correo" class="col-sm-2 control-label labelusers">Correo Electronico</label> <div class="col-sm-10">

                    <input required name="mail" type="text" class="form-control enterUsers" id="correo" placeholder="Introduzca Su Correo">

                </div>

            </div>
            <div class="form-group">

                <label for="pass" class="col-sm-2 control-label labelusers">Contraseña</label> <div class="col-sm-10">

                    <input required name="pass" type="password" class="form-control enterUsers" id="pass" placeholder="Introduzca Su Contraseña">

                </div>

            </div>

            <div class="form-group">

                <div class="col-sm-offset-2 col-sm-10">

                    <button id="btnNewUser" type="submit" class="btn btn-default">Crear Usuario</button><img id="spinner" src="<?php echo base_url('MyStyle/giphy.gif') ?>"> </div>
            </div>

        </form>
        <?php
        // put your code here
        ?>
        <script>
        $(document).ready(function (){
           $('#spinner').hide(); 
        });
        </script>
    </body>
</html>
