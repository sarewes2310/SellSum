import Quagga from 'quagga'; // ES6
//const Quagga = require('quagga').default; // Common JS (important: default)

Quagga.init({
    inputStream : {
      name : "Live",
      type : "LiveStream",
      target: document.querySelector('#test_barcode')    // Or '#yourElement' (optional)
    },
    decoder : {
      readers : ["code_128_reader"]
    }
  }, function(result) {
        if(result.codeResult) {
            console.log("result", result.codeResult.code);
            alert(result.codeResult.code);
        } else {
            console.log("not detected");
            alert('not detected');
        }
        console.log("Initialization finished. Ready to start");
        Quagga.start();
        Quagga.onDetected(function(result){
            var last_code = result.codeResult.code;
            console.log(last_code);
            alert(last_code);
        });
  });