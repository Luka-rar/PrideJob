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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'empresa' => ['required', 'boolean'],
            'client' => ['required', 'boolean'],
            'admin' => ['required', 'boolean'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        
            if($input['empresa'] == 1){
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'empresa' => $input['empresa'],
                    'client' => 0,
                    'admin' => 0,
                    'password' => Hash::make($input['password']),
                ]);
            } else{
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'empresa' => $input['empresa'],
                    'client' => 1,
                    'admin' => 0,
                    'password' => Hash::make($input['password']),
                ]);
            }

            

        
    }
}
