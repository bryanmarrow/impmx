const formCampeonato = document.querySelector('.formCampeonato');


formCampeonato.addEventListener('submit', function(e){
    e.preventDefault();
    const DataFormCampeonato = new FormData(formCampeonato);
    
    for (let [name, value] of DataFormCampeonato) {
        console.log(`${name} = ${value}`);
    }

    // if (formCampeonato.checkValidity() === false) {
    //     formCampeonato.classList.add('was-validated');
        
    // } else {

        $.ajax({
            type: 'POST',
            url: '../ajax/forms.php',
            data: DataFormCampeonato,
            processData: false,
            contentType: false,
            beforeSend: function () {
                // preloader.classList.add('active');
            },
            success: function (datos) {
                console.log(datos)
            }
        });

    // }

    
})