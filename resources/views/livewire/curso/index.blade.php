@section('title', 'Curso')
    <div class="container-fluid mt-2">
        @include('livewire.curso.create')
        @include('livewire.curso.update')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex">
                                <a class="move-left btn">
                                    <b>Cursos</b> <i class="bi bi-bookmarks"></i>
                            </div>

                            <div class="d-flex input-group w-auto">
                                <input type="search" class="form-control rounded" placeholder="Buscar Curso"
                                    aria-label="Search" value="{{ old('search') }}" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createCurso">
                                Registrar Curso
                            </a>

                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive mitabla">
                            <table class="table table-bordered table-sm table-hover">
                                <thead class="thead">
                                    <tr class="bg-dark">
                                        <td class="text-light text-center">#</td>
                                        <th class="text-light text-center">Curso</th>
                                        <th class="text-light text-center">Paralelo</th>
                                        <td class="text-light text-center"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- FOR --}}
                                    @foreach ($cursos as $row)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nombre }}</td>
                                            <td>{{ $row->paralelo }}</td>
                                            <td>
                                                {{--    BOTONES --}}
                                                <a class="btn btn-sm btn-success" wire:click='edit({{ $row->id }})'
                                                    data-bs-toggle="modal" data-bs-target="#updateCurso">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                {{-- ELIMINAR wire:click='delete({{ $row->id }})' --}}
                                                <a class="btn btn-sm btn-danger" wire:click='delete({{ $row->id }})'>
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                {{-- BOTONES --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- FOR --}}

                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{-- {{ $datos->links() }} --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Body --}}