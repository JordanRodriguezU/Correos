/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var Events = {
    ClickTabEdit: function () {
        $("#form1").css("display", "block");
        $("#form2").css("display", "none");
//        $.ajax({
//            type: 'POST',
//            url: "ContentTab1.php",
//            success: function (a) {
//                $("#Main2").html(a);
//            }
//        });
    },
    ClickTabDelete: function () {
        //debugger;
        $("#form1").css("display", "none");
        $("#form2").css("display", "block");
//        $.ajax({
//            type: 'POST',
//            url: "ContentTab1.php",
//            success: function (a) {
//                $("#Main1").html(a);
//            }
//        });

    },
    //Valida los Campos a La hora de Editar Un Mail
    ValidarMail: function () {
        var mail = $('#correo').val();
        // debugger;
        var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        if ($('#nombre').val() === "") {
            $('#nombre').css("color", "red");
            return false;
        }
        if (mail.search(patron) !== 0)
        {
            //Mail correcto
            // object.style.color = "#000";
            $('#correo').css("color", "red");
            return false;
        }
        if ($('#pass').val() === "") {
            $('#pass').css("color", "red");
            return false;
        }
        return true;

    },
    ClickCorreo: function (element) {
        $('#mailcontent').css('display', 'block');
        $("#form2").css("display", "block");
        $("#form1").css("display", "block");
        $('#tabs2').prop('class', 'active');
        $('#tabs').prop('class', '');
        $('#asunto').val($(element).data('asunto'));
        $('#asunto2').val($(element).data('asunto'));

        $('#destinatarios').val($(element).data('destinatario'));
        $('#destinatarios2').val($(element).data('destinatario'));

        $('#info').val($(element).data('contenido'));
        $('#info2').val($(element).data('contenido'));

        $('#idcorreo').val($(element).data('id'));
        $('#idcorreo2').val($(element).data('id'));
        $("#form2").css("display", "none");



    },
    ClickCorreoEnviados: function (element) {
        //debugger;
        $('#mailcontent').css('display', 'block');
         //$("#form2").css("display", "block");
        $('#asunto2').val($(element).data('asunto'));
        $('#destinatarios2').val($(element).data('destinatario'));
        $('#info2').val($(element).data('contenido'));
        $('#idcorreo2').val($(element).data('id'));
    },
    SelectAllCorreoByJsonOut: function (Correo, id, url) {
        //debugger;
        var request = $.ajax({
            url: url,
            method: "POST",
            data: {"id": id}
        });
        request.done(function (msg) {
             //debugger;
            $('#Mails').html("");
            if (msg.Result !== "No Results")
            {
                
                for (var i in msg.Result) {
                    var correo = msg.Result[i];
                    $('#Mails').append("<a class='linkmailout'> <div class='ContentMail' onclick='Events.ClickCorreo(this);'" +
                            "data-asunto='" + correo.asunto + "' data-contenido='" + correo.contenido + "' data-destinatario='" + correo.destinatario + "' data-id='" + correo.id + "' class='col-md-4 mailout'>" +
                            "<h3 class='infocorreo'><span>" + Correo + "</span></h3><h4 class='infocorreo'><span>" + correo.asunto + "</span></h4></div></a>");
                }
            } else {
                
                $('#mailcontent').css('display', 'none');

            }
        });
    },
    EditarCorreo: function (url) {
        //debugger;
        if (Events.ValidarEditarMail())
        {
            var request = $.ajax({
                url: url,
                method: "POST",
                data: {"id": $('#idcorreo').val(), "asunto": $('#asunto').val(), "destinatario": $('#destinatarios').val(),
                    "contenido": $('#info').val()}
            });
            request.done(function (msg) {
                if (msg === "Ready") {
                    alert("Correo Actualizado Exitosamente");
                    $('#asunto2').val($('#asunto').val());
                    $('#destinatarios2').val($('#destinatarios').val());
                    $('#info2').val($('#info').val());

                }
            });
        }
    },
    EliminarCorreo: function (url) {
        var request = $.ajax({
            url: url,
            method: "POST",
            data: {"id": $('#idcorreo2').val()}
        });
        request.done(function (msg) {
            if (msg === "Ready") {
                alert("Correo Elimiado Exitosamente");
                Events.Borrar();
            }
        });

    },
    Borrar: function () {
        $('#asunto2').val("");
        $('#destinatarios2').val("");
        $('#info2').val("");
        $('#idcorreo2').val("");
        $('#asunto').val("");
        $('#destinatarios').val("");
        $('#info').val("");
        $('#idcorreo').val("");
        $('#mailcontent').css('display', 'none');
    },
    SelectAllCorreoByJsonSent: function (Correo, id, url) {


        var request = $.ajax({
            url: url,
            method: "POST",
            data: {"id": id}
        });
        request.done(function (msg) {
            $('#Mails').html("");
             if (msg.Result !== "No Results"){
            
            for (var i in msg.Result) {
                var correo = msg.Result[i];
                $('#Mails').append("<a class='linkmailout'> <div class='ContentMail' onclick='Events.ClickCorreoEnviados(this);'" +
                        "data-asunto='" + correo.asunto + "' data-contenido='" + correo.contenido + "' data-destinatario='" + correo.destinatario + "' data-id='" + correo.id + "' class='col-md-4 mailout'>" +
                        "<h3 class='infocorreo'><span>" + Correo + "</span></h3><h4 class='infocorreo'><span>" + correo.asunto + "</span></h4></div></a>");
            }
        }else{
            $('#mailcontent').css('display', 'none');
        }
        });
    },
    ValidarEditarMail: function () {
        //debugger;
        if ($('#asunto').val() === "") {
            alert('El Campo Asunto esta Vacio');
            $('#asunto').css('background', 'bisque');
            setTimeout(function () {
                $('#asunto').css('background', '');
            }, 5000);
            return false;
        }
        var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        var destinatarios = $('#destinatarios').val();
        var dividir = destinatarios.toString().split(',');
        var cont = dividir.length;
        for (var i = 0; i < dividir.length; i++) {
            var destinatario = dividir[i].trim();
            if (destinatario.search(patron) !== 0)
            {
                //Mail correcto
                // object.style.color = "#000";
                // $('#correo').css("color", "red");
                alert("El Mail " + destinatario + " No Tiene Formato Valido! Recuerde Separar los Mails por ','");
                $('#destinatarios').css('color', 'red');
                $('#destinatarios').css('background', 'bisque');
                setTimeout(function () {
                    $('#destinatarios').css('color', '#555');
                    $('#destinatarios').css('background', '');
                }, 5000);
                return false;




            }
        }
        if ($('#info').val() === "") {
            alert("El Contenido del Mail Esta Vacio");
            $('#info').css('background', 'bisque');
            setTimeout(function () {
                $('#info').css('background', '');
            }, 5000);
            return false;
        }

        return true;

    },
    ValidarCrearMail: function () {
        //debugger;
        var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        var destinatarios = $('#destinatarios').val();
        var dividir = destinatarios.toString().split(',');
        var cont = dividir.length;
        for (var i = 0; i < dividir.length; i++) {
            var destinatario = dividir[i].trim();
            if (destinatario.search(patron) !== 0)
            {
                //Mail correcto
                // object.style.color = "#000";
                // $('#correo').css("color", "red");
                alert("El Mail " + destinatario + " No Tiene Formato Valido! Recuerde Separar los Mails por ','");
                $('#destinatarios').css('color', 'red');
                $('#destinatarios').css('background', 'bisque');
                setTimeout(function () {
                    $('#destinatarios').css('color', '#555');
                    $('#destinatarios').css('background', '');
                }, 5000);
                return false;




            }
        }
        return true;
    }

};
