<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('Bootstrap/css/bootstrap.css') ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('MyStyle/Mystyle.css') ?>">
        <script type="text/javascript" src="<?php echo base_url('Jquery/jquery-2.1.4.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('MyJs/MyJavascript.js') ?>"></script>

        <script src="<?php echo base_url('Bootstrap/js/bootstrap.js') ?>"></script>

    </head>
    <body>
        <nav class="navbar navbar-inverse c">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Correos.com</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url('Salida'); ?>">Salida</a></li>
                        <li><a href="<?php echo base_url('Enviados'); ?>">Enviados</a></li>
                    </ul>
                </div>
                <li class="dropdown">

                    <a	href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $username ?> <b class="caret"></b>

                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="<?php echo base_url('NewMail');?>">Crear Nuevo Correo</a></li>

                        <li class="divider"></li>

                        <li><a href="#">Salir</a></li> </ul>

                </li>
            </div>
        </nav>

        <!--
        
                <div class="tab-pane fade" id="Main1">
                        <div class='container'>
                        <div class='col-md-4 cmail'>
        
                            <a class='linkmailout' href='#'> <div  class='col-md-4 mailout'>
        
        
                                    
                                        <h3><span>Hola</span></h3>
                                        <h4><span>Retraso examen</span></h4>
                                    
                                </div>
                            </a>
                            <a class='linkmailout' href='#'> <div  class='col-md-4 mailout'>
        
        
                                    
                                        <h3><span>Hola</span></h3>
                                        <h4><span>Calificaciones</span></h4>
                                   
                                </div>
                            </a>
                            <a class='linkmailout' href='#'> <div  class='col-md-4 mailout'>
        
        
                                    
                                        <h3><span>Hola</span></h3>
                                        <h4><span>Revision de tarea</span></h4>
                                    
                                </div>
                            </a>
        
        
        
        
                            <a class='linkmailout' href='#'> <div  class='col-md-4 mailout'>
        
        
                                    
                                        <h3><span>Hola</span></h3>
                                        <h4><span>envio de examenes</span></h4>
                                        
                                  
                                </div>
                            </a>
        
                        </div>
                    </div>
                    <div class='container'>
        
                        <div id='mailcontent' class='col-md-8'>
        
                            <form role='form' action='#' method='post'>
                                <div class='form-group'>
        
                                    <label for='asunto' class='col-sm-2 control-label'>Asunto:</label> <div class='col-sm-10'>
        
                                        <input type='text' class='form-control' id='asunto'>
        
                                    </div>
        
                                </div>
                                <div class='form-group'>
        
                                    <label for='destinatarios' class='col-sm-2 control-label'>Destinatario:</label> <div class='col-sm-10'>
        
                                        <input type='text' class='form-control' id='destinatarios'>
        
                                    </div>
        
                                </div>
        
                                <div class='form-group'>
        
        
                                    <label id='lblinfo' for='name'>Informacion:</label>
        
                                    <textarea id='info' class='form-control' rows='3'></textarea> </div>
                                <button type='button' class='btn btn-primary btn-lg '> Eliminar
                                </button>
                            </form>
        
                        </div>
        
                    </div>
                </div>
        
                </div>
        -->



        <div class="tab-pane fade in active" id="Main2">

            <div id="Mails" class='container'>

                    <?php foreach ($result->result() as $row) {
                        
                     ?>
                    <a class='linkmailout'> <div class='ContentMail' onclick='Events.ClickCorreo(this);' data-asunto='<?php echo $row->asunto; ?>' data-contenido='<?php echo $row->contenido ?>' data-destinatario='<?php echo $row->destinatario ?>' data-id='<?php echo $row->id; ?>' class='col-md-4 mailout'>



                            <h3 class='infocorreo'><span><?php echo $correo ?></span></h3>
                            <h4 class='infocorreo'><span><?php echo $row->asunto; ?></span></h4>

                        </div>
                    </a>
                    <?php } ?>

                
            </div>
            <div class='container'>


                <div id='mailcontent' class='col-md-8'>
                    <ul id='myTab' class='nav nav-tabs'>

                        <li id="tabs2" onclick="Events.ClickTabEdit()" class='active'><a href='#form1' data-toggle='tab'>Editar</a>

                        </li>

                        <li onclick="Events.ClickTabDelete()" id='tabs'><a href='#form2' data-toggle='tab'>Eliminar</a></li>



                    </ul>

                    <form id="form1">
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

                        <button type="button" onclick='Events.EditarCorreo("<?php echo base_url('salida/Edit')?>")' class='btn btn-primary btn-lg '> Editar
                        </button>

                        <input id='idcorreo' type='hidden' name='id' value='' />

                    </form>

                    <form id="form2">
                        <div class='form-group'>

                            <label for='asunto2' class='col-sm-2 control-label'>Asunto:</label> <div class='col-sm-10'>

                                <input disabled name='asunto' type='text' class='form-control disabled' id='asunto2'>

                            </div>

                        </div>
                        <div class='form-group'>

                            <label for='destinatarios2' class='col-sm-2 control-label'>Destinatario:</label> <div class='col-sm-10'>

                                <input disabled name='destinatario' type='text' class='form-control disabled' id='destinatarios2'>

                            </div>

                        </div>

                        <div class='form-group'>


                            <label id='lblinfo2' for='info2'>Informacion:</label>

                            <textarea disabled name='informacion' id='info2' class='form-control disabled' rows='3'></textarea> </div>

                        <button type='button' onclick='Events.EliminarCorreo("<?php echo base_url('salida/Delete')?>")' class='btn btn-primary btn-lg '> Eliminar
                        </button>
                        <input id='idcorreo2' type='hidden' name='id' value='' />

                    </form>

                </div>

            </div>
        </div>

        <script>
            $(document).ready(function () {
            $('#mailcontent').css('display','none');
            
            setInterval(function (){Events.SelectAllUserByJson("<?php echo $correo; ?>","<?php echo $id; ?>","<?php echo base_url('correos/LoadCorreos')?>");},3000);
            });
        </script>
    </body>
</html>
