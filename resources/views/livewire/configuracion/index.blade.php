@section('title', 'Configuracion')
<section class="contenido">
    @include('livewire.configuracion.create')
    @include('livewire.configuracion.update')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex">
                                <a class="bg-dark text-light btn border-bottom border-2">
                                    <b>Listado de Usuarios</b> <i class="fa-solid fa-users"></i>
                                </a>
                            </div>
                            <a class="btn btn-sm bg-success" data-bs-toggle="modal" data-bs-target="#addUsuario">
                                Agregar Usuario
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr class="bg-dark">
                                        <td class="text-light text-center">#</td>
                                        <th class="text-light text-center">Nombre</th>
                                        <th class="text-light text-center">apellido</th>
                                        <th class="text-light text-center">Correo Electronico</th>
                                        <th class="text-light text-center">Rol</th>
                                        <td class="text-light text-center"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-uppercase">{{ $usuario->name }}</td>
                                            <td class="text-uppercase">{{ $usuario->apellido }}</td>
                                            <td class="text-uppercase">{{ $usuario->email }}</td>
                                            <td class="text-uppercase">
                                                @if (!empty($usuario->getRoleNames()))
                                                    @foreach ($usuario->getRoleNames() as $rolNombre)
                                                        <h5><span class="badge bg-dark">{{ $rolNombre }}</span>
                                                        </h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td width="110">
                                                <div class="btn-group">
                                                    <a class="dropdown-item btn" data-bs-toggle="modal"
                                                        data-bs-target="#editUsuario"
                                                        wire:click="edit({{ $usuario->id }}) "><i
                                                            class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- no eliminar usuario con ID=1 --}}

                                                    @if ($usuario->id == 1)
                                                        <a class="dropdown-item btn disabled"><i
                                                                class="fa fa-trash"></i>
                                                        </a>
                                                    @else
                                                        @if ($usuario->id == Auth::user()->id)
                                                            <a class="dropdown-item btn disabled"><i
                                                                    class="fa fa-trash"></i>
                                                            </a>
                                                        @else
                                                            <a class="dropdown-item btn "
                                                                wire:click.prevent="delete({{ $usuario->id }})"><i
                                                                    class="fa fa-trash"></i>
                                                            </a>
                                                        @endif
                                                    @endif

                                                </div>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $usuarios->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--alerta preventivo al eliminar Usuario -->
    <script>
        window.addEventListener('delete-confirmar', event => {
            Swal.fire({
                title: 'Eliminar Usuario?',
                text: "Confirma si desea Eliminar!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteuser')
                }
            })
        });
        window.addEventListener('destroyuser', event => {
            Swal.fire(
                'Eliminado!',
                'Has eliminado al Usuario',
                'success'
            )
        });
    </script>
</section>
