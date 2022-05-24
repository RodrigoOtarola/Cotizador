$(document).ready(function () {
    $("tr td #eliminar").click(function (ev) {
        ev.preventDefault()
        Swal.fire({
            title: '¿Seguro quieres eliminaar?',
            text: "Si desea eliminar, el registro se mantendra en la base de datos.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
        }).then((result) => {
            if (result.value) {
                //ajax

                Swal.fire(
                    'Eliminado',
                    'Registro eliminado con exito',
                    'success'
                )
            }
        })
    })
});


