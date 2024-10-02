@section('title', 'Roles')
    @include('livewire.role.create')
    @include('livewire.role.update')
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex ">
                                <a class=" btn border-top border-end border-start border-2 bg-c-se co-ho-bla-pri">
                                    <b>Roles | Listado</b> <i class="fa-solid fa-people-group"></i>
                                </a>
                            </div>
                            <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createRol">
                                Registrar Rol
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead bg-dark">

                                    <tr class="text-center">
                                        <td class="text-light">#</td>
                                        <th class="text-light">Rol</th>
                                        <td class="text-light"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $row)
                                        <tr class="text-center text-uppercase">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                <a class="btn btn-sm bg-success" data-bs-toggle="modal"
                                                    data-bs-target="#updateRol" wire:click="edit({{ $row->id }})">
                                                    <i class="fa-solid fa-edit"
                                                        wire:click="edit({{ $row->id }})"></i>
                                                </a>
                                                <a class="btn btn-sm bg-danger"
                                                    wire:click="delete({{ $row->id }})">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                                {{-- {{ $roles->links() !! }}</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>