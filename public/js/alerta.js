window.livewire.on('alerta', data => {
        const {
                type,
                message,
                icon
        } = data;
        Swal.fire({
                icon: icon || type,
                title: message,
                showConfirmButton: true,
                // cambiar texto al boton
                confirmButtonText: 'Aceptar <i class="fa-solid fa-thumbs-up"></i>',
        });
});

window.livewire.on('alertaFlash', data => {
    const { type, message, icon } = data;
    Swal.fire({
        icon: icon || type,
        title: message,
        showConfirmButton: false,
        timer: 3000,
        // index 10000
        position: 'top-end',
        width: 250,
        // alto
        heightAuto: true,
        // texto mas pequeño
        customClass: {
            title: 'title-class',
            content: 'content-class',
            popup: 'popup-class',
        },
    });
});





window.livewire.on('alertaRecargar', data => {
        const {
                type,
                message,
                icon
        } = data;
        Swal.fire({
                icon: icon || type,
                title: message,
                showConfirmButton: true,
                allowOutsideClick: false, // Evitar el cierre haciendo clic fuera del modal
                // cambiar texto al boton
                confirmButtonText: 'Aceptar <i class="fa-solid fa-thumbs-up"></i>',
        }).then((result) => {
                if (result.isConfirmed) {
                        location.reload();
                }
        });
});
// ALERTA DE SOLICITUD
window.livewire.on('alertaSolicitud', data => {
        const {
                type,
                message,
                icon
        } = data;
        Swal.fire({
                icon: icon || type,
                title: message,
                allowOutsideClick: false, // Evitar el cierre haciendo clic fuera del modal
                showConfirmButton: true,
                // cambiar texto al boton
                confirmButtonText: 'Ver Solicitud <i class="fa-solid fa-thumbs-up"></i>',
                // agregar boton cancelar
                showCancelButton: true,
        }).then((result) => {
                if (result.isConfirmed) {
                        window.livewire.emit('volverView');
                }
        });
});
// ALERTA DE CONFIRMACION
window.livewire.on('alertaConfirmar', data => {
        const {
                type,
                message,
                icon,
        } = data;
        Swal.fire({
                icon: icon || type,
                title: message,
                showConfirmButton: true,
                showCancelButton: true,
                // poner icono
                confirmButtonText: 'Si <i class="fa-solid fa-thumbs-up"></i>',
                confirmButtonColor: ' #258872',
                cancelButtonText: 'No <i class="fa-solid fa-xmark"></i>',
                cancelButtonColor: '#d33',
                allowOutsideClick: false, // Evitar el cierre haciendo clic fuera del modal
        }).then((result) => {
                if (result.isConfirmed) {
                        window.livewire.emit('siConfirmoDelete');
                }
        });
}
);
window.livewire.on('alertaRestauracion', data => {
        const {
                type,
                message,
                icon,
        } = data;
        Swal.fire({
                icon: icon || type,
                title: message,
                showConfirmButton: true,
                showCancelButton: true,
                // poner icono
                confirmButtonText: 'Si <i class="fa-solid fa-thumbs-up"></i>',
                confirmButtonColor: ' #258872',
                cancelButtonText: 'No <i class="fa-solid fa-xmark"></i>',
                cancelButtonColor: '#d33',
                allowOutsideClick: false, // Evitar el cierre haciendo clic fuera del modal
        }).then((result) => {
                if (result.isConfirmed) {
                        window.livewire.emit('siConfirmoRestauracion');
                }
        });
}
);
// alerta mensaje
window.livewire.on('alertaMensaje', data => {
        const {
                type,
                message,
                icon
        } = data;
        Swal.fire({
                icon: icon || type,
                title:'Solicitud Rechazada',
                // texto
                text: message,
                showConfirmButton: true,
                // cambiar texto al boton
                confirmButtonText: 'Aceptar <i class="fa-solid fa-thumbs-up"></i>',
                // desactivar clic fuera del modal
                allowOutsideClick: false,
        }).then((result) => {
                if (result.isConfirmed) {
                        window.livewire.emit('volverView');
                }
        });


});
