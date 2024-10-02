<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function reset($user, array $input)
    {
        //mensaje de error personalizado
        Validator::make($input, [
            'password' => 'required|confirmed|min:8|string',
        ], [
            'password.required' => 'El campo contraseña es obligatorio',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'string' => 'El campo contraseña debe ser una cadena de texto',

        ])->validate();

        // Validator::make($input, [
        //     'password' => $this->passwordRules(),
        // ])->validate();

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
        //mensaje de éxito personalizado
        session()->flash('message', 'Su Contraseña Fue Actualizada Exitosamente 😉');
    }
}
