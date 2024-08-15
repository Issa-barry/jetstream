<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $messages = [
          'terms.accepted' => 'Vous devez accepter les termes et conditions.',
        ];

        // $emailRegex = '/^[a-zA-Z0-9._%+-]+@example\.com$/';
        $emailRegex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

        Validator::make($input, [
            'nom' => ['required', 'string','min:2', 'max:255'],
            'prenom' => ['required', 'string','min:2', 'max:255'],
            'telephone' => ['required', 'string', 'max:20', 'max:255'],
            'email' => ['required', 'string', 'email', 'regex:' . $emailRegex, 'max:255', 'unique:users'],
            'password' => ['required','max:255', 'regex:' . $passwordRegex,'confirmed'],
            // 'password' => ['required','min:8', 'max:255', 'confirmed', 'regex:' . $passwordRegex],
            // 'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ], $messages)->validate();

        return User::create([ 
            'nom' => $input['nom'],
            'prenom' => $input['prenom'],
            'telephone' => $input['telephone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
