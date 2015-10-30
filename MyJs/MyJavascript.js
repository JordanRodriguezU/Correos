/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var Events = {
    Salida: function () {
        $("#Main2").css("display", "block");
        $("#Main1").css("display", "none");
//        $.ajax({
//            type: 'POST',
//            url: "ContentTab1.php",
//            success: function (a) {
//                $("#Main2").html(a);
//            }
//        });
    },
    Enviados: function () {
        $("#Main2").css("display", "none");
        $("#Main1").css("display", "block");
//        $.ajax({
//            type: 'POST',
//            url: "ContentTab1.php",
//            success: function (a) {
//                $("#Main1").html(a);
//            }
//        });

    }

};
