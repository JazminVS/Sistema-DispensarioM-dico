/*AQUI TODO LO DEL JAVASCRIPT*/

function validateForm() {
    var x = document.forms["myForm"]["cantidad_entrega"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

