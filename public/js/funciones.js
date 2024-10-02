
// funciones para subir archivos
function uploadFile() {
        const inputFile = document.getElementById("inputGroupFile02");
        const uploadMessage = document.getElementById("uploadMessage");
        const progressContainer = document.getElementById("progressContainer");
        const progressBar = document.getElementById("progressBar");
        const progressCounter = document.getElementById("progressCounter");

        const file = inputFile.files[0];
        const reader = new FileReader();
        let progress = 0;

        reader.onload = function () {
                const interval = setInterval(function () {
                        progress += 1;
                        progressCounter.innerText = progress;
                        progressBar.value = progress;

                        if (progress === 100) {
                                clearInterval(interval);
                                uploadMessage.style.display = "block";
                                progressContainer.style.display = "none";
                        }
                }, 10);
        };

        reader.readAsDataURL(file);
        progressContainer.style.display = "block";
}

// mostrar barra de carga en update
function uploadFileFile() {
        const inputFile = document.getElementById("inputGroupFile02File");
        const uploadMessage = document.getElementById("uploadMessageFile");
        const progressContainer = document.getElementById("progressContainerFile");
        const progressBar = document.getElementById("progressBarFile");
        const progressCounter = document.getElementById("progressCounterFile");

        const file = inputFile.files[0];
        const reader = new FileReader();
        let progress = 0;

        reader.onload = function () {
                const interval = setInterval(function () {
                        progress += 1;
                        progressCounter.innerText = progress;
                        progressBar.value = progress;

                        if (progress === 100) {
                                clearInterval(interval);
                                uploadMessage.style.display = "block";
                                progressContainer.style.display = "none";
                        }
                }, 10);
        };

        reader.readAsDataURL(file);
        progressContainer.style.display = "block";
}

// funciona para limpiar los upload
window.livewire.on('limpiarUploadFile', data => {
        const inputFile = document.getElementById("inputGroupFile02File");
        const uploadMessage = document.getElementById("uploadMessageFile");
        const progressContainer = document.getElementById("progressContainerFile");
        const progressBar = document.getElementById("progressBarFile");
        const progressCounter = document.getElementById("progressCounterFile");

        inputFile.value = '';
        uploadMessage.style.display = "none";
        progressContainer.style.display = "none";
        progressBar.value = 0;
        progressCounter.innerText = 0;
});
// tooltips
//tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
})
// select
$(document).ready(function() {
        // console log
        console.log('funcionando');
        $('#estudiante_id').select2();
});
