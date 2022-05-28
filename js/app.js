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

