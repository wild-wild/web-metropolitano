<div wire:ignore.self class="modal fade" id="updateCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <b>ACTUALIZAR CURSO</b>
                </h5>
                <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update" class="form-horizontal" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="nombreCurso" class="form-label">Nombre del Curso</label>
                        <input wire:model="nombreCurso" type="text" class="form-control" id="nombreCurso" placeholder="Nombre del Curso" required>
                        @error('nombreCurso')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="paraleloCurso" class="form-label">Paralelo del Curso</label>
                        <input wire:model="paraleloCurso" type="text" class="form-control" id="paraleloCurso" placeholder="Paralelo del Curso" required>
                        @error('paraleloCurso')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button type="submit" class="btn bg-success">ACTUALIZAR</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
