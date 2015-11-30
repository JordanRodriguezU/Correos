<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('MyStyle/Mystyle.css') ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('Bootstrap/css/bootstrap.css') ?>">

        <script type="text/javascript" src="<?php echo base_url('MyJs/MyJavascript.js') ?>"></script>
         <script type="text/javascript" src="<?php echo base_url('Jquery/jquery-2.1.4.min.js') ?>"></script>

 
    </head>
    <body>
        <div align="center"><?php echo validation_errors();?></div>
        <?php echo form_open('VerifyLogin');
        ?>
        <div aria-label="hola" id="scope">
            <form class="form-horizontal" role="form"> <div class="form-group">

                    <label for="user" class="col-sm-2 control-label">Usuario</label> <div class="col-sm-10">

                        <input name="user" type="text" class="form-control" id="user" placeholder="Introduzca Su Usuario">

                    </div>

                </div>

                <div class="form-group">

                    <label for="password" class="col-sm-2 control-label">Contraseña</label> <div class="col-sm-10">

                        <input name="pass" type="password" class="form-control" id="password" placeholder="Introduza Su Contraseña">

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox">

                            <label>

                                <input type="checkbox"> Recordarme </label>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default">Inicio Sesion</button>
                        <a href="Users"><button type="button" class="btn btn-default">Crear Cuenta</button></a>
                    </div>
                </div>
        </div>

    </form>
</div>
<?php
// put your code here
?>
<script>
    $(document).ready(function () {
        //debugger;
        if ($('#Error').length > 0) {
            alert($('#Error').val());
        }
    });
</script>
</body>
</html>

