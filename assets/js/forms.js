const formCampeonato = document.querySelector('.formCampeonato');
const btnValidarCodigo = document.getElementById('btnValidarCodigo');
const preloader = document.querySelector('.page-loading');


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
                    
                    preloader.classList.remove('active');
                    console.log(datos)

                }
            });

        }
    }



    

    
})

