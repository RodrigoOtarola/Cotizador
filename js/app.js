// $(document).ready(function () {
//     $("tr td #eliminar").click(function (ev) {
//         ev.preventDefault();
//         //Recupera nombre
//         var nombre = $(this).parents('tr:first').find('td:first').text();
//         //Recupera id.
//         var id = $(this).attr('data-id');
//         var self = this;
//         Swal.fire({
//             title: '¿Seguro quieres eliminar ' + nombre + '?',
//             text: "Si desea eliminar, el registro se mantendra en la base de datos.",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Si, eliminar',
//             cancelButtonText: 'Cancelar'
//         }).then((result) => {
//             if (result.value) {
//                 //ajax
//                 $.ajax({
//                     type: 'POST',
//                     url: './index.php',
//                     data: {'id': id},
//                     success: function () {
//                         $(self).parents('tr').remove();
//                         Swal.fire(
//                             'Eliminado',
//                             'Registro eliminado con exito',
//                             'success'
//                         )
//                     }
//                 });
//             }
//         })
//     })
// })

function eliminar() {
    return confirm("Seguro que desea eliminar");
}

function crear() {
    M.toast({
        html: 'Registro creado con exito',/*Cración del texto que sale en msje*/
        displayLength: 4000,/*Duración del mensaje de alertas*/
        classes: "green",/*Para que el cuadro cambie color*/
    });
}
function edit() {
    M.toast({
        html: 'Registro actualizado.',/*Cración del texto que sale en msje*/
        displayLength: 4000,/*Duración del mensaje de alertas*/
        classes: "green",/*Para que el cuadro cambie color*/
    });
}


function calcular(){
    //Accedimos a valores
    var p_origen = eval(document.getElementById('p_origen').value);
    var flete = eval(document.getElementById('v_flete').value);
    var seguro = eval(document.getElementById('v_seguro').value);

    //Suma de precio origen, flete y seguro.
    preValor = (p_origen + flete + seguro);

    //Advalorem
    Advalorem  = (preValor * 0.06);
    document.getElementById('v_advalorem').value = Advalorem;

    //Valor cif
    v_cif = (preValor + Advalorem)
    document.getElementById('v_cif').value = v_cif;

    //Impuesto adicional
    var i_adicional = eval(document.getElementById('impto_adicional').value);
    // alert(i_adicional);
    impto_adic = Math.round((v_cif * i_adicional)/100);
    document.getElementById('v_iadicional').value = impto_adic;

    //Valor neto
    v_neto =  v_cif + impto_adic;
    // console.log(v_neto);

    //iva
    const iva = 0.19;
    calcIva = v_neto * iva;
    document.getElementById('iva').value = calcIva;
    // console.log(calcIva);

    //Sumar total
    total = calcIva + v_neto;
    document.getElementById('v_total').value = total;

}

