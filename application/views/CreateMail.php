<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Mail</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('Bootstrap/css/bootstrap.css') ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('MyStyle/Mystyle.css') ?>">
        <script type="text/javascript" src="<?php echo base_url('Jquery/jquery-2.1.4.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('MyJs/MyJavascript.js') ?>"></script>

    </head>
    <body>
        <div align="center"><?php echo validation_errors(); ?></div>
        <?php echo form_open('VerifyMail');
        ?>
        <div id="frmCrear">
            <form id="form1" role='form'>
            <div class='form-group'>

                <label for='asunto' class='col-sm-2 control-label'>Asunto:</label> <div class='col-sm-10'>

                    <input required name='asunto' type='text' class='form-control create' id='asunto'>

                </div>

            </div>
            <div class='form-group'>

                <label for='destinatarios' class='col-sm-2 control-label'>Destinatario:</label> <div class='col-sm-10'>

                    <input required name='destinatario' type='text' class='form-control create' id='destinatarios'>

                </div>

            </div>

            <div class='form-group'>


                <label id='lblinfo' for='info'>Informacion:</label>

                <textarea required name='informacion' id='info' class='form-control create' rows='3'></textarea> </div>

            <button id="btncrear" type='submit' class='btn btn-primary btn-lg '> Crear
            </button>

            <input id='idcorreo' type='hidden' name='id' value='' />

        </form>
        </div>

        <?php
        // put your code here
        ?>
    </body>
    <script>
    $(document).ready(function (){
       $('form').submit(function (){
          return Events.ValidarCrearMail();
       }); 
    });
    </script>
</html>
