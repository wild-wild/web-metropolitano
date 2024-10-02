{{-- <div wire:ignore class="form-control" x-data="{}" x-init="() => {
    $('.select2').select2();
    $('.select2').on('change', function(e) {
        let elementName = $(this).attr('id');
        @this.set(elementName, e.target.value);
    })
}">
    <select class="select2 " {{ $attributes }} style="width: 100%;">
        <option value="">Seleccione Estudiante | por Numero de CI</option>
        @foreach ($padresAll as $row)
            <option class="text-uppercase" value="{{ $row->id }}">{{ $row->ciPadre }} | {{ $row->name }}
                {{ $row->apellido }}</option>
        @endforeach
    </select>
</div> --}}
