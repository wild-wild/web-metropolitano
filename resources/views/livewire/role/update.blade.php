<div wire:ignore.self class="modal fade" id="updateRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri text-light">
                <h5 class="modal-title">
                    <b>REGISTRAR | Rol</b>
                </h5>
                <button wire:click.prevent="cancel" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-horizontal">
                    <div class="form-group">
                        <label for="name"><b>Nombre Del Rol</b></label>
                        <input wire:model="name" type="text"
                            class="form-control  @error('permisos')
                        is-invalid
                    @enderror"
                            id="name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label><b>Permisos para este Rol</b></label><br>
                        @foreach ($permisosRol as $row)
                            <input wire:model="permisos" class="m-1 align-middle" type="checkbox"
                                value="{{ $row->id }}">
                            <label class="text-center m-0">{{ $row->name }}</label>
                            <br>
                        @endforeach
                        @error('permisos')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button type="submit" class="btn btn-store close-modal">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>