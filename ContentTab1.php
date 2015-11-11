<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dash</title>
        <link type="text/css" rel="stylesheet" href="Bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="MyStyle/Mystyle.css">
        <script type="text/javascript" src="Jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="MyJs/MyJavascript.js"></script>

        <script src="Bootstrap/js/bootstrap.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Correos.com</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="Dash.php">Salida</a></li>
                        <li class="active"><a href="ContentTab1.php">Enviados</a></li>
                    </ul>
                </div>
            </div>
        </nav>



    <!--    <div class="tab-pane fade" id="Main1">
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

                    <button type='button' class='btn btn-primary btn-lg '> Editar
                    </button>
                    <button type='button' class='btn btn-primary btn-lg '> Eliminar
                    </button>
                </form>

            </div>

        </div>
    </div>





    <?php
    // put your code here
    ?>
</body>
<script>$(document).ready(function () {
        $('#myTab a[href="#Main1"]').tab('show');
        $('#myTab a[href="#Main2"]').tab('show');


    }
    );</script>
</html>
