require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
//importar sweetalert para las vistas eliminar
window.Swal = require('sweetalert2')