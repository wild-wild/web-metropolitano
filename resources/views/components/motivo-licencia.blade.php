<div class="bg-secondary rounded-3 p-2 m-1 col-5">
    <label for="exampleFormControlInput1" class="form-label">Motivo de Licencia</label>
    <select wire:model="motivo" class="form-control text-uppercase" aria-label="Default select example">
        <option selected>SELECCIONE EL MOTIVO DE LA LICENCIA</option>
        <option value="Licencia por Enfermedad">Licencia por Enfermedad</option>
        <option value="Asuntos Familiares Urgentes">Asuntos Familiares Urgentes</option>
    </select>
    {{-- error --}}
    @error('motivo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
