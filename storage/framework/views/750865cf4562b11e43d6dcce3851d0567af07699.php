<div wire:ignore.self id="verDocumentoImg" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="imageModalLabel">Documento Subido</h5>
                <button wire:click="volverView()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="<?php echo e(asset('storage/respaldos') . '/' . $docRespaldoName); ?>" alt="IMG" class="img-fluid" style="height:500px">
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/viewDoc.blade.php ENDPATH**/ ?>