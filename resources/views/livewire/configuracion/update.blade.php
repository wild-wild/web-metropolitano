<div wire:ignore.self class="modal fade" id="editUsuario"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <b>ACTUALIZAR USUARIO</b>
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="#" wire:submit.prevent="update" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label >Nombre</label>
                            <input wire:model.lazy="name" type="text" class="form-control text-uppercase" required onkeyup = "this.value=this.value.toUpperCase()">
                            @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label >Apellido</label>
                            <input wire:model.lazy="apellido" type="text" class="form-control text-uppercase" id="nivel" required onkeyup = "this.value=this.value.toUpperCase()">
                            @error('apellido')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label >Correo Electronico</label>
                            <input wire:model.lazy="email" type="email" class="form-control" id="sigla" required onkeyup = "this.value=this.value.toUpperCase()">
                            @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Rol</label>
                            <select wire:model='role' class="form-control text-uppercase">
                                <option value="">Seleccione un Rol</option>
                                @foreach ($roles as $row)
                                    <option class="text-uppercase" value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" value="enviar" class="btn btn-secondary close-modal">Actualizar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
