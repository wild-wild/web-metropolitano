
    <x-jet-form-section submit="updateProfileInformation">
    
            <x-slot name="title">
                {{ __('Informacion del perfil') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('Actualice la información de perfil y la dirección de correo electrónico de su cuenta.') }}
            </x-slot>
        
            <x-slot name="form">
        
                <x-jet-action-message on="saved">
                    {{ __('Informacion de perfil Actualizado Correctamente') }}
                </x-jet-action-message>
                    <!-- Name -->
                    <div class="mb-3">
                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                        <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.name" autocomplete="name" />
                        <x-jet-input-error for="name" />
                    </div>
                    <!-- apellido -->
                    <div class="mb-3">
                        <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                        <x-jet-input id="apellido" type="text" class="{{ $errors->has('apellido') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.apellido" autocomplete="apellido" />
                        <x-jet-input-error for="apellido" />
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                        <x-jet-input disabled id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.email" />
                        <x-jet-input-error for="email" />
                    </div>
                </div>
            </x-slot>
        
            <x-slot name="actions">
                <div class="d-flex align-items-baseline">
                    <x-jet-button class="btn-success" >
                        <b>ACTUALIZAR</b>
                    </x-jet-button>
                </div>
            </x-slot>
    
    </x-jet-form-section>
