function eliminar() {
    $("#eliminar").submit();
    Swal.fire({
        title: '¿Seguro que quiere eliminar?',
        text: 'El registro se mantendra en la base de datos',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
};


