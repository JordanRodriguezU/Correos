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
        <form id="form1" role='form'>
            <div class='form-group'>

                <label for='asunto' class='col-sm-2 control-label'>Asunto:</label> <div class='col-sm-10'>

                    <input name='asunto' type='text' class='form-control' id='asunto'>

                </div>

            </div>
            <div class='form-group'>

                <label for='destinatarios' class='col-sm-2 control-label'>Destinatario:</label> <div class='col-sm-10'>

                    <input name='destinatario' type='text' class='form-control' id='destinatarios'>

                </div>

            </div>

            <div class='form-group'>


                <label id='lblinfo' for='info'>Informacion:</label>

                <textarea name='informacion' id='info' class='form-control' rows='3'></textarea> </div>

            <button type='submit' class='btn btn-primary btn-lg '> Enviar
            </button>

            <input id='idcorreo' type='hidden' name='id' value='' />

        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
