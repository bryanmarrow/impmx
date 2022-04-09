const formCampeonato = document.querySelector('.formCampeonato');
const btnValidarCodigo = document.getElementById('btnValidarCodigo');
const preloader = document.querySelector('.page-loading');
var getUrl = window.location;

$("#comprobantepago").change(function () {
    var file = this.files[0];
    var imagefile = file.type;
    var sizefile = file.size;
    var match = ["image/jpeg", "image/png", "image/jpg", "application/pdf"];

    var sizemax = 3000000;

    // console.log(sizefile)

    if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]) || (imagefile == match[3]) || (imagefile == match[4]))) {
        alert('Por favor seleccione un formato válido: (JPEG/JPG/PNG).');
        $("#comprobantepago").val('');
        return false;
    }
    if (sizefile > sizemax) {
        alert('Archivo demasiado grande, favor de reducirlo');
        $("#comprobantepago").val('');
        return false;
    }
    $("label[for='file']").text(this.files[0].name);
});


btnValidarCodigo.addEventListener('click', function(){
    let codFullPass = document.getElementById('codFullPass').value;

    if(codFullPass==''){
        console.log('vacio');
    }else{
        // console.log(codFullPass);
            $.ajax({
                type: 'POST',
                url: '../ajax/codFullPass.php',
                data: { codFullPass: codFullPass },
                beforeSend: function () {
                    // preloader.classList.add('active');
                },
                success: function (datos) {
                    // console.log(datos)
                    let alertValidarCodigo = document.querySelector('.alertValidarCodigo').classList;

                    if(datos.numToken>0){
                        // alert('Código correcto');                        
                        
                        
                        
                        alertValidarCodigo.contains('valid-tooltip')? alertValidarCodigo.add('valid-tooltip'): alertValidarCodigo.remove('invalid-tooltip');
                        alertValidarCodigo.contains('invalid-tooltip')? alertValidarCodigo.add('invalid-tooltip'): alertValidarCodigo.remove('valid-tooltip');
                        alertValidarCodigo.add('valid-tooltip');
                        alertValidarCodigo.add('d-block');
                        document.querySelector('.alertValidarCodigo').textContent = 'Código registrado';
                        document.querySelector('.validCodigo').value = 0
                        
                        $('#codFullPass').attr('readonly', true);
                        $('#btnValidarCodigo').attr('disabled', true);
                    }else{
                        // alert('Código no registrado');
                        
                        // alertValidarCodigo.toggle('invalid-tooltip');
                        alertValidarCodigo.contains('valid-tooltip')? alertValidarCodigo.add('valid-tooltip'): alertValidarCodigo.remove('invalid-tooltip');
                        alertValidarCodigo.contains('invalid-tooltip')? alertValidarCodigo.add('invalid-tooltip'): alertValidarCodigo.remove('valid-tooltip');
                        alertValidarCodigo.add('invalid-tooltip');
                        alertValidarCodigo.add('d-block');
                        document.querySelector('.alertValidarCodigo').textContent = 'Código no registrado';
                        document.querySelector('.validCodigo').value = 1
                    }
                }
            });

    }

});



formCampeonato.addEventListener('submit', function(e){
    e.preventDefault();
    const DataFormCampeonato = new FormData(formCampeonato);
    
    
    // for (let [name, value] of DataFormCampeonato) {
    //     console.log(`${name} = ${value}`);
    // }

    validarCodigo = DataFormCampeonato.get('validCodigo');
    if(validarCodigo>0){
        alert('Necesitar validar código');
    }else{
        // console.log('Todo bien');

        if (formCampeonato.checkValidity() === false) {
            formCampeonato.classList.add('was-validated');
            
        } else {

            $.ajax({
                type: 'POST',
                url: '../ajax/forms.php',
                data: DataFormCampeonato,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    // preloader.classList.add('active');
                    preloader.classList.add('active');
                },
                success: function (datos) {
                    
                    if(datos.respuesta=='success'){
                        preloader.classList.remove('active');
                        document.querySelector('.alertaexitoso').textContent = 'Registro exitoso';
                        $('.sucessregistro').modal('show')
                        $('.sucessregistro').on('show.bs.modal', interval())
                    }else{
                        console.log(datos)
                    }
                    

                }
            });

        }
    }
    
})

var inter, t;

function interval() {
    t = 15;
    inter = setInterval(function () {
        document.getElementById("testdiv").innerHTML = t--;
    }, 1000, "JavaScript");

    setTimeout(redirect, 15000)
}

function redirect() {
    window.location.href = getUrl.origin;
}