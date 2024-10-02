<div wire:ignore.self class="modal fade" id="addUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <B> REGISTRAR USUARIOS</B>
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
                <form action="#" wire:submit.prevent="store" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Nombres</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="name" type="text"
                                placeholder="Ingrese sus Nombres" onkeyup="this.value=this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="apellido" type="text"
                                placeholder="Ingrese sus Apellidos" onkeyup="this.value=this.value.toUpperCase()">
                        </div>

                    </div>
                    <div class="form-group">
                        <label f>Correo Electronico</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="email" type="email"
                                placeholder="Ingrese su Correo Electronico"
                                onkeyup="this.value=this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password" type="text"
                                placeholder="Ingrese una Contraseña">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Repetir Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password_confirmation" type="text"
                                placeholder="Repita la Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Rol</label>
                        <select wire:model="role" class="form-control text-uppercase">
                            <option value="">Seleccione un Rol</option>
                            @foreach ($roles as $rol)
                                <option class="text-uppercase" value="{{ $rol->id }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-10 mx-auto bg-success ">
                            <button type="submit" value="enviar" class="btn btn-store">Registrar Usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
