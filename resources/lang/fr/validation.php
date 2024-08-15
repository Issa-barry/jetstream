<?php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'email' => 'Le champ :attribute doit être une adresse email valide.',
    'regex' => 'Le champ :attribute saisie est invalide.',
    'same' => 'La vaeleur des champ doivent être identique.',
    'accepted' => 'Vous devez accepter les termes et conditions.',
    'max' => [
        'string' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        'numeric' => 'La valeur de :attribute doit être au plus :max.',
        'file' => 'La taille de :attribute ne doit pas depasser :max kilo-octets.', 
        'array' => 'Le champ :attribute doit contenir au maximum :max éléments.',
    ],
    'min' => [ 
        'numeric' => 'La valeur de :attribute doit être au moins :min.',
        'file' => 'La taille de :attribute doit être au moins de :min kilo-octets.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
    ],
    'custom' => [
            'civilite' => [
                'required' => 'Indiquez votre civilite.',
                'max' => 'La civilite ne doit pas dépasser :max caractères.',
                'string' => 'La civilite  doit être une chaîne de caractères.',
            ],
            'nom' => [
                'required' => 'Le nom est obligatoire.',
                'string' => 'Le nom  doit être une chaîne de caractères.',
                'max' => 'Le nom ne doit pas dépasser :max caractères.',
                'min' => 'Le nom doit contenir au moins :min caractères.',
                'regex' => 'Le prenom saisie est invalide.',
            ],
            'prenom' => [
                'required' => 'Le prenom est obligatoire.',
                'string' => 'Le prenom  doit être une chaîne de caractères.',
                'max' => 'Le prenom ne doit pas dépasser :max caractères.',
                'min' => 'Le prenom doit contenir au moins :min caractères.',
                'regex' => 'Le prenom saisie est invalide.',
            ],
            'telephone' => [
                'required' => 'Le numéro de téléphone est obligatoire.',
                'max' => 'Le numéro saisie est trop long.',
                'string' => 'Le numréo de telephone doit être une chaîne de caractères.',
                'numeric' => 'La valeur de :attribute doit être du numérique.',
                'regex' => 'Le numréo de telephone est invalide.',
            ],
            'date_naissance' => [
                'required' => 'La date de naissance est obligatoire.',
            ],
            'email' => [
            'regex' => 'L\'adresse email saisie n\'est pas  valide.',
            'required' => 'L\'adresse email est obligatoire.',
            'email' => 'L\'adresse email saisie n\'est pas  valide.',
            'max' => 'L\'adresse email ne doit pas dépasser 255 caractères.',
            'unique' => 'Cette adresse e-mail est déjà utilisée.',
        ],
        'password' => [
            'required' => 'Le mot de passe est obligatoire.',
            'min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'regex' => 'Le mot de passe doit contenir :  majuscule, minuscule, chiffre et caractère spécial.',
            'confirmed' => 'Le mots de passe et la confirmation ne correspondent pas.',
        ],
       'terms' => [
        'required' => 'Vous devez accepter les termes et conditions.',
        'accepted' => 'Vous devez accepter les termes et conditions.',
       ],
    ],
    'attributes' => [
        'nom' => 'Nom',
        'prenom' => 'Prénom',
        'date_naissance' => 'Date de naissance', 
        'genre' => 'Genre',
        'email' => 'Adresse email',
        'phone' => 'Numéro de téléphone',
        'password' => 'mot de passe',
    ],
];
