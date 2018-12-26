/*AQUI TODO LO DEL JAVASCRIPT*/

var nav4 = window.Event ? true : false;
function aceptNum(evt){
    var key = nav4 ? evt.which : evt.keyCode;
    return (key <= 13 || (key>= 48 && key <= 57));
}
