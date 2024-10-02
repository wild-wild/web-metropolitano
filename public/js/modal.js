window.livewire.on('cerrarModal', () => {
    $('#createCurso').modal('hide');
    $('#updateCurso').modal('hide');
    // materia
    $('#createMateria').modal('hide');
    $('#updateMateria').modal('hide');
    // estudiante
    $('#createEstudiante').modal('hide');
    $('#updateEstudiante').modal('hide');
    // padre
    $('#createPadre').modal('hide');
    $('#updatePadre').modal('hide');
    $('#updateLicencia').modal('hide')
    // verificarLicencia
    $('#verificarLicencia').modal('hide');
    // config editUsuario addUsuario
    $('#editUsuario').modal('hide');
    $('#addUsuario').modal('hide');

});
window.livewire.on('volverView', () => {
    $('#viewLicenciasSolicitadas').modal('show');
});
window.livewire.on('volverRegistroEstudiante', () => {
    $('#seleccionarPadre').modal('hide');
    $('#createEstudiante').modal('show');
});
window.livewire.on('volverRegistroEstudiante2', () => {
    $('#seleccionarPadre').modal('hide');
    $('#createEstudiante').modal('show');
});
window.livewire.on('abrirModalMaterias', () => {
    $('#modalMateria').modal('show');
});
window.livewire.on('cerrarModalMaterias', () => {
    $('#modalMateria').modal('hide');
});
