var num = Math.floor(Math.random() * 1000000000000);
console.log(num);
JsBarcode(".barcode",num.toString(), {format: "EAN13"}).init();
var canvas = document.getElementById("barcode");
window.location = canvas[0].toDataURL("image/png");
console.log(canvas.toDataURL("image/png"));

function addProd(){
    num = Math.floor(Math.random() * 1000000000000);
    console.log(num);
    JsBarcode(".barcode",num.toString(), {format: "EAN13"}).init();
    var kodebar = document.getElementById("kodebar");
    console.log(kodebar);
    kodebar.value  = num;
    //$(".kodebar").val(num);
    return false;
}