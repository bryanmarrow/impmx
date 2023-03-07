const formCampeonato = document.querySelector('.formCampeonato');
// const btnValidarCodigo = document.getElementById('btnValidarCodigo');
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


$("#select_hotel").change(function () {
    let hotel_sel = $("#select_hotel option:selected").val();

    if (hotel_sel == 0) {
        $('#nom_hotel').removeClass("d-none");
        $('#nom_hotel_add').prop('required', true);
    } else {
        $('#nom_hotel').addClass("d-none");
        $('#nom_hotel_add').prop('required', false);
    }

    console.log(hotel_sel)


})

// btnValidarCodigo.addEventListener('click', function(){
//     let codFullPass = document.getElementById('codFullPass').value;

//     if(codFullPass==''){
//         console.log('vacio');
//     }else{
//         // console.log(codFullPass);
//             $.ajax({
//                 type: 'POST',
//                 url: '../ajax/codFullPass.php',
//                 data: { codFullPass: codFullPass },
//                 beforeSend: function () {
//                     // preloader.classList.add('active');
//                 },
//                 success: function (datos) {
//                     // console.log(datos)
//                     let alertValidarCodigo = document.querySelector('.alertValidarCodigo').classList;

//                     if(datos.numToken>0){
//                         // alert('Código correcto');                        



//                         alertValidarCodigo.contains('valid-tooltip')? alertValidarCodigo.add('valid-tooltip'): alertValidarCodigo.remove('invalid-tooltip');
//                         alertValidarCodigo.contains('invalid-tooltip')? alertValidarCodigo.add('invalid-tooltip'): alertValidarCodigo.remove('valid-tooltip');
//                         alertValidarCodigo.add('valid-tooltip');
//                         alertValidarCodigo.add('d-block');
//                         document.querySelector('.alertValidarCodigo').textContent = 'Código registrado';
//                         document.querySelector('.validCodigo').value = 0

//                         $('#codFullPass').attr('readonly', true);
//                         $('#btnValidarCodigo').attr('disabled', true);
//                     }else{
//                         // alert('Código no registrado');

//                         // alertValidarCodigo.toggle('invalid-tooltip');
//                         alertValidarCodigo.contains('valid-tooltip')? alertValidarCodigo.add('valid-tooltip'): alertValidarCodigo.remove('invalid-tooltip');
//                         alertValidarCodigo.contains('invalid-tooltip')? alertValidarCodigo.add('invalid-tooltip'): alertValidarCodigo.remove('valid-tooltip');
//                         alertValidarCodigo.add('invalid-tooltip');
//                         alertValidarCodigo.add('d-block');
//                         document.querySelector('.alertValidarCodigo').textContent = 'Código no registrado';
//                         document.querySelector('.validCodigo').value = 1
//                     }
//                 }
//             });

//     }

// });



formCampeonato.addEventListener('submit', function (e) {
    e.preventDefault();
    const DataFormCampeonato = new FormData(formCampeonato);


    for (let [name, value] of DataFormCampeonato) {
        console.log(`${name} = ${value}`);
    }

    // validarCodigo = DataFormCampeonato.get('validCodigo');
    // if(validarCodigo>0){
    //     alert('Necesitar validar código');
    // }else{
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
                preloader.classList.add('active');
            },
            success: function (datos) {

                if (datos.respuesta == 'success') {
                    preloader.classList.remove('active');
                    document.querySelector('.alertaexitoso').textContent = 'Registro exitoso';
                    $('.sucessregistro').modal('show')
                    $('.sucessregistro').on('show.bs.modal', interval())
                } else {
                    alert('Intente más tarde, por favor');
                }




            }
        });

    }
    // }

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
    // window.location.href = getUrl.origin;
    location.reload();
}

function integrantesgrupos(data) {
    numint = document.querySelector('#numintegrantes').value

    //     item_amt = parseFloat(item) * parseFloat(numint),
    //     tax_amt = parseFloat(tax) * parseFloat(item_amt),
    //     total_amt = parseFloat(item_amt) + tax_amt;

    var container = document.getElementById("integrantesgrupo");

    var o = 0;

    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }
    for (i = 0; i < numint; i++) {
        // container.appendChild(document.createTextNode(i+1));

        const divcolnomintegrante = document.createElement("div");
        divcolnomintegrante.classList.add("col-md-3");
        divcolnomintegrante.classList.add("col-sm-12");

        const divcoldate = document.createElement("div");
        divcoldate.classList.add("col-md-3");
        divcoldate.classList.add("col-sm-12");

        const divgen = document.createElement("div");
        divgen.classList.add("col-md-3");
        divgen.classList.add("col-sm-12");

        const divcodFullPass = document.createElement("div");
        divcodFullPass.classList.add("col-md-3");
        divcodFullPass.classList.add("col-sm-12");



        const fieldsetform = document.createElement("fieldset");
        fieldsetform.classList.add("form-group");
        fieldsetform.classList.add("m-2");

        const divformcheck = document.createElement("div");
        divformcheck.classList.add("form-check");

        const divcustomcontrolmasc = document.createElement("div")
        divcustomcontrolmasc.classList.add("form-check")
        // divcustomcontrolmasc.classList.add("custom-radio")
        divcustomcontrolmasc.classList.add("form-check-inline")

        const divcustomcontrolfem = document.createElement("div")
        divcustomcontrolfem.classList.add("form-check")
        // divcustomcontrolfem.classList.add("custom-radio")
        divcustomcontrolfem.classList.add("form-check-inline")


        const divformgroupnombregrupo = document.createElement("div");
        divformgroupnombregrupo.classList.add("form-group");

        const divformgroupdategrupo = document.createElement("div");
        divformgroupdategrupo.classList.add("form-group");

        const divformgroupgen = document.createElement("div");
        divformgroupgen.classList.add("form-group");

        const divformgroupcodfullpass = document.createElement("div");
        divformgroupcodfullpass.classList.add("form-group");

        const labelnombregrupo = document.createElement("label");
        labelnombregrupo.classList.add('form-label');
        labelnombregrupo.for = "nombregrupo_p"
        labelnombregrupo.textContent = `Nombre completo del integrante:`;

        const labeldate_birthday = document.createElement("label");
        labeldate_birthday.classList.add('form-label');
        labeldate_birthday.for = "nombregrupo_p"
        labeldate_birthday.textContent = `Fecha de nacimiento:`;

        const labelgenero = document.createElement("label");
        labelgenero.classList.add('form-label')
        labelgenero.for = "genero_p"
        labelgenero.textContent = 'Género:';

        const labelcodfullpass = document.createElement("label");
        labelcodfullpass.classList.add('form-label');
        labelnombregrupo.for = "codfullpass_integrante"
        labelcodfullpass.textContent = `Código de confirmación de Dancer Pass`;

        const labelgeneromasc = document.createElement("label");
        labelgeneromasc.classList.add("form-label")
        labelgeneromasc.htmlFor = "masculino" + i;
        labelgeneromasc.textContent = 'Masculino';

        const labelgenerofem = document.createElement("label");
        labelgenerofem.classList.add("form-label")
        labelgenerofem.htmlFor = "femenino" + i;
        labelgenerofem.textContent = 'Femenino';


        const span = document.createElement("span");
        span.classList.add("text-muted");
        span.textContent = "*";

        const inputnom = document.createElement("input");
        inputnom.type = "text";
        inputnom.name = "idnumintegrantes" + i;
        inputnom.classList.add("form-control");
        inputnom.required = true;

        const inputcod = document.createElement("input");
        inputcod.type = "text";
        inputcod.name = "codfullpass" + i;
        inputcod.classList.add("form-control");
        inputcod.required = true;

        const inputdate_birthday = document.createElement("input");
        inputdate_birthday.type = "date";
        inputdate_birthday.name = "date_birthday" + i;
        inputdate_birthday.classList.add("form-control");
        inputdate_birthday.required = true;

        const inputgenmasc = document.createElement("input");
        inputgenmasc.type = "radio";
        inputgenmasc.name = "generoint" + i;
        inputgenmasc.id = "masculino" + i;
        inputgenmasc.for = "masculino" + i;
        inputgenmasc.value = "Masculino";
        inputgenmasc.classList.add("form-check-input");
        inputgenmasc.required = true;

        const inputgenfem = document.createElement("input");
        inputgenfem.type = "radio";
        inputgenfem.name = "generoint" + i;
        inputgenfem.id = "femenino" + i;
        inputgenfem.for = "femenino" + i;
        inputgenfem.value = "Femenino";
        inputgenfem.classList.add("form-check-input");
        inputgenfem.required = true;

        const divfeedback = document.createElement("div");
        divfeedback.classList.add("invalid-feedback");
        divfeedback.textContent = "Campo requerido";


        divformgroupnombregrupo.appendChild(labelnombregrupo);
        divformgroupnombregrupo.appendChild(span);
        divformgroupnombregrupo.appendChild(inputnom);
        divformgroupnombregrupo.appendChild(divfeedback);

        divformgroupcodfullpass.appendChild(labelcodfullpass);
        divformgroupcodfullpass.appendChild(span);
        divformgroupcodfullpass.appendChild(inputcod);
        divformgroupcodfullpass.appendChild(divfeedback);

        divformgroupdategrupo.appendChild(labeldate_birthday);
        divformgroupdategrupo.appendChild(span);
        divformgroupdategrupo.appendChild(inputdate_birthday);
        divformgroupdategrupo.appendChild(divfeedback);



        divcustomcontrolmasc.appendChild(inputgenmasc)
        divcustomcontrolmasc.appendChild(labelgeneromasc)

        divcustomcontrolfem.appendChild(inputgenfem)
        divcustomcontrolfem.appendChild(labelgenerofem)

        divformcheck.appendChild(divcustomcontrolmasc)
        divformcheck.appendChild(divcustomcontrolfem)
        fieldsetform.appendChild(labelgenero)
        fieldsetform.appendChild(divformcheck)

        divformgroupgen.appendChild(fieldsetform);
        //   divformgroupgen.appendChild(labelgenero);
        //   divformgroupgen.appendChild(span);
        //   divformgroupgen.appendChild(inputgenmasc);
        //   divformgroupgen.appendChild(span);
        //   divformgroupgen.appendChild(inputgenmasc);
        //   divformgroupgen.appendChild(divfeedback);



        divcolnomintegrante.appendChild(divformgroupnombregrupo);
        divcoldate.appendChild(divformgroupdategrupo);
        divgen.appendChild(divformgroupgen);
        divcodFullPass.appendChild(divformgroupcodfullpass)

        container.append(divcolnomintegrante);
        container.append(divcoldate);
        container.append(divgen);
        container.append(divcodFullPass);

        ++o;



    }

    // document.querySelector(".total").textContent = total_amt.toFixed(2);
    // document.querySelector(".tax").textContent = tax_amt.toFixed(2);
    // document.querySelector(".subtotal").textContent = item_amt.toFixed(2);
    // document.querySelector(".discount").textContent = descuento.toFixed(2);

    // useNextLoad();

}