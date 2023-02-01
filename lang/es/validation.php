<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute es correcto.',
    'accepted_if' => 'El :attribute debe ser correcto cuando: other es :value.',
    'active_url' => 'El :attribute no es una url valida.',
    'after' => 'El :attribute debe ser una fecha posterior a:date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual :date.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo debe contener letras,numeros,guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo debe contener letras y numeros.',
    'array' => 'El :attribute debe ser una matriz.',
    'ascii' => 'El :attribute solo debe contener caracteres y simbolos alfanumericos de solo un byte.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El :attribute debe tener entre elementos :min y :max items.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string' => 'El :attribute debe estar entre los caracteres :min y :max characters.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => ' El :attribute la confirmacion no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El :attribute no es una fecha valida.',
    'date_equals' => 'El:attribute debe ser una fecha igual a:date.',
    'date_format' => 'El :attribute no coincide con el formato:format.',
    'decimal' => 'El :attribute debe tener lugar :decimal decimal places.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe ser rechazado cuando:other es :value.',
    'different' => 'El :attribute y otro :other must be different.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El:attribute debe estar entre :min y :max digits.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no validas.',
    'distinct' => 'El:attribute tiene un valor duplicado.',
    'doesnt_end_with' => ' El :attribute no puede terminar con uno de los siguientes: :values.',
    'doesnt_start_with' => 'El :attribute no puede comenzar con uno de los siguientes::values.',
    'email' => 'El :attribute debe ser una direccion de correo electronico valida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El selected :attribute seleccionado no es valido.',
    'exists' => 'El selected :attribute no es valido .',
    'file' => ' El :attribute debe ser un archivo.',
    'filled' => ' El :attribute debe tener un valor value.',
    'gt' => [
        'array' => 'El :attribute debe tener mas de :value items.',
        'file' => 'El :attribute debe ser mayor que:value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'string' => ' El :attribute debe srr mayor que :value characters.',
    ],
    'gte' => [
        'array' => 'El :attribute debe tener :value items or more.',
        'file' => 'El :attribute debe ser mayor o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor o igual a  :value.',
        'string' => 'El:attribute debe ser mayor o igual :value characters.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El selected :attribute seleccionado no es valido.',
    'in_array' => ' El :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una direccion ip valida.',
    'ipv4' => 'El :attribute debe ser una direccion IPv4 valida.',
    'ipv6' => 'El:attribute debe ser una direccion IPv6 valida .',
    'json' => 'El :attribute debe ser una cadena  JSON valida.',
    'lowercase' => 'El :attribute debe estar en minusculas.',
    'lt' => [
        'array' => ' El :attribute debe tener menos de :value items.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'numeric' => ' El :attribute debe ser menor que el:value.',
        'string' => 'El :attribute debe ser menor que :value characters.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener mas de  :value items.',
        'file' => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor o igual :value.',
        'string' => 'El :attribute debe ser menor o igual a :value characters.',
    ],
    'mac_address' => 'El:attribute debe ser una direccion mac valida .',
    'max' => [
        'array' => 'El :attribute no debe tener mas de :max items.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'string' => 'El :attribute no debe ser :max characters.',
    ],
    'max_digits' => 'El :attribute no debe tener mas de :max digits.',
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El :attribute debe tener al menos de elementos :min items.',
        'file' => 'El :attribute  debe ser al menos :min kilobytes.',
        'numeric' => 'El :attribute debe ser al menos :min.',
        'string' => 'El :attribute debe ser al menos  :min characters.',
    ],
    'min_digits' => 'El :attribute debe tener al menos :min digits.',
    'multiple_of' => 'El :attribute debe ser un multiplo de :value.',
    'not_in' => 'El selected :attribute seleccionado no es valido.',
    'not_regex' => 'El:attribute no es valido.',
    'numeric' => 'El :attribute debe ser un numero.',
    'password' => [
        'letters' => 'El :attribute debecontener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayuscula y una letra minuscula.',
        'numbers' => ' El :attribute debe contener al menos un numero.',
        'symbols' => ' El :attribute debe contener al menos un simbolo.',
        'uncompromised' => 'El given :attribute ha aparecido en una fuga de datos.Por favor elija un :attribute.',
    ],
    'present' => 'El :attribute debe estar presente.',
    'prohibited' => 'El :attribute esta prohibido.',
    'prohibited_if' => ' El :attribute esta prohibido cuando :other es :value.',
    'prohibited_unless' => 'El :attribute esta prohibido a menos que  :other es en :values.',
    'prohibits' => 'El :attribute prohibe que:other from being present.',
    'regex' => 'El :attribute no es valido.',
    'required' => 'El :attribute es obligatorio.',
    'required_array_keys' => ' El :attribute debe contener entradas para : :values.',
    'required_if' => 'El :attribute es obligatorio cuando:other es :value.',
    'required_if_accepted' => 'El :attribute es obligatorio a menos que :other es accepted.',
    'required_unless' => 'El :attribute es obligatorio a menos que :other es en :values.',
    'required_with' => 'El :attribute es obligatorio cuando:values es present.',
    'required_with_all' => 'El :attribute es obligatorio cuando :values están present.',
    'required_without' => 'El :attribute es obligatorio cuando :values es not present.',
    'required_without_all' => 'El :attribute es obligatorio cuando ninguno de :values están present.',
    'same' => 'El :attribute y  :other must match.',
    'size' => [
        'array' => 'El :attribute debe contener :size items.',
        'file' => ' El :attribute debe ser :size kilobytes.',
        'numeric' => 'El :attribute debe ser :size.',
        'string' => 'El :attribute debe ser  :size characters.',
    ],
    'starts_with' => ' El :attribute debe comenzar con uno de los siguientes : :values.',
    'string' => ' El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una timezone.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => ' El :attribute no se pudo cargar.',
    'uppercase' => 'El :attribute debe estar en minusculas.',
    'url' => 'El:attribute debe ser una URL valida.',
    'ulid' => ' El:attribute debe ser una ULID valida.',
    'uuid' => 'El :attribute debe ser una  UUID valida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-mensaje',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
