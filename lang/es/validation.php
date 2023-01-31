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

    'accepted' => 'El atributo: debe ser aceptado .',
    'accepted_if' => 'El atributo:debe ser aceptado cuando; other es:evaluado',
    'active_url' => 'El atributo :no es una url valida.',
    'after' => 'El atributo: debe ser una fecha posterior o igual a:la fecha.',
    'after_or_equal' => 'El atributo:debe ser una fecha posterior o igual al:dia.',
    'alpha' => 'El atributo :Sol debe contener letras.',
    'alpha_dash' => 'El atributo:solo debe contener letras,numeros,guiones y guiones bajos .',
    'alpha_num' => 'El atributo:solo debe debe contener letras y numeros.',
    'array' => 'El atributo:debe ser una matriz.',
    'ascii' => 'El atributo :solo debe contener caracteristicas y simbolos alfanumericos de un solo byte .',
    'before' => 'El :atributo debe ser una fecha anterior a :fecha.',
    'before_or_equal' => 'El atributo: debe ser una fecha anterior o igual a :fecha.',
    'entre' => [
        'array' => 'El atributo : debe tener entre elementos :min y :max.',
        'file' => 'El atributo : debe estar entre :min y :max kilobytes.',
        'numeric' => 'El atributo : debe estar entre :min y :max..',
        'string' => 'El atributo : debe estar entre los caracteres :min y :max.',
    ],
    'boolean' => 'El campo:atributo debe ser verdadero o falso.',
    'confirmed' => 'La confirmación del atributo no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El atributo : no es una fecha válida.',
    'date_equals' => 'El atributo : debe ser una fecha igual a :date.',
    'date_format' => 'El :atributo no coincide con el formato :formato.',
    'decimal' => 'El atributo :debe tener :lugar decimales decimales.',
    'declined' => 'El :atributo debe ser rechazado.',
    'declined_if' => 'El atributo : debe ser rechazado cuando :other es:evaluado.',
    'different' => 'El :atributo y :otro deben ser diferentes.',
    'digits' => 'El atributo : debe ser : dígitos.',
    'digits_between' => 'El atributo : debe estar entre :min y :max digitales.',
    'dimensions' => 'El atributo : tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El :atributo no puede terminar con uno de los siguientes: :valores.',
    'doesnt_start_with' => 'El atributo : no puede comenzar con uno de los siguientes:valores.',
    'email' => 'El atributo : debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :atributo debe terminar con uno de los siguientes: :valores.',
    'enum' => 'El atributo :re seleccionado no es válido.',
    'exists' => 'El atributo : seleccionado no es válido.',
    'file' => 'El atributo :debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El :atributo debe tener más de :elementos de valor.',
        'file' => 'El: atributo debe ser mayor que :valor kilobytes.',
        'numeric' => 'El atributo : debe ser mayor que :valor.',
        'string' => 'El atributo : debe ser mayor que :valores.',
    ],
    'gte' => [
        'array' => 'El atributo: debe tener elementos de valor o más.',
        'file' => 'El atributo : debe ser mayor o igual a :value kilobytes.',
        'numeric' => 'El atributo : debe ser mayor o igual a :valor.',
        'string' => 'El atributo : debe ser mayor o igual a :valores.',
    ],
    'image' => 'El atributo : debe ser una imagen.',
    'in' => 'El atributo :seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El atributo : debe ser un entero.',
    'ip' => 'El atributo : debe ser una dirección IP válida.',
    'ipv4' => 'El atributo : debe ser una dirección IPv4 válida.',
    'ipv6' => 'El atributo : debe ser una dirección IPv6 válida.',
    'json' => 'El atributo debe ser una cadena JSON válida.',
    'lowercase' => 'El atributo: debe estar en minusculas.',
    'lt' => [
        'array' => 'El atributo:debe tener menos de :elementos de valor.',
        'file' => 'El atributo : debe ser menor que :valor kilobytes',
        'numeric' => 'El atributo : debe ser menor que :valor.',
        'string' => 'El atributo :debe ser menor que :valores.',
    ],
    'lte' => [
        'array' => 'El atributo : no debe tener más de :elementos de valor.',
        'file' => 'El atributo : debe ser menor o igual a :value kilobytes.',
        'numeric' => 'El atributo : debe ser menor o igual a :valor.',
        'string' => 'El atributo : debe ser menor o igual a caracteres :value.',
    ],
    'mac_address' => 'El atributo: debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El atributo : no debe tener más de :max elementos.',
        'file' => 'El atributo: no debe ser mayor que :max kilobytes.',
        'numeric' => 'El atributo : no debe ser mayor que :max.',
        'string' => 'El atributo : no debe ser mayor que los caracteres :max.',
    ],
    'max_digits' => 'El atributo : no debe tener más de :max dígitos.',
    'mimes' => 'El atributo: debe ser un archivo de tipo: evaluado.',
    'mimetypes' => 'El atributo: debe ser un archivo de tipo: evaluado.',
    'min' => [
        'array' => 'El atributo: debe tener al menos elementos :min.',
        'file' => 'El atributo : debe ser al menos :menos kilobytes.',
        'numeric' => 'El atributo : debe ser al menos :min.',
        'string' => 'El atributo : debe ser al menos : caracteres min.',
    ],
    'min_digits' => 'El atributo : debe tener al menos :min dígitos.',
    'multiple_of' => 'El atributo : debe ser un múltiplo de :evaluado.',
    'not_in' => 'El atributo : seleccionado no es válido.',
    'not_regex' => 'El formato atributo:no es válido..',
    'numeric' => 'El atributo : debe ser un número.',
    'password' => [
        'letters' => 'El atributo : debe contener al menos una letra.',
        'mixed' => 'El atributo : debe contener al menos una letra mayúscula y una letra minúscula.',
        'numbers' => 'El atributo : debe contener al menos un número.',
        'symbols' => 'El atributo : debe contener al menos un símbolo.',
        'uncompromised' => 'El atributo dado ha aparecido en una fuga de datos. Por favor, elija un :atributo diferente.',
    ],
    'present' => 'El campo atributo debe estar presente.',
    'prohibited' => 'El campo atributo: está prohibido.',
    'prohibited_if' => 'El campo atrubuto: está prohibido cuando :other es :evaluado.',
    'prohibited_unless' => 'El campo atributo :está prohibido a menos que :other esté en :evaluacion.',
    'prohibits' => 'El campo atributo: prohíbe que :other esté presente.',
    'regex' => 'El formato atributo: no es válido.',
    'required' => 'El campo atributo: es obligatorio.',
    'required_array_keys' => 'El campo atributo: debe contener entradas para: :evaluacion.',
    'required_if' => 'El campo atributo: es obligatorio cuando :other es :evaluar.',
    'required_if_accepted' => 'El campo atributo: es obligatorio cuando se acepta :other.',
    'required_unless' => 'El campo atributo: es obligatorio a menos que :other esté en :evalues.',
    'required_with' => 'El campo atributo: es obligatorio cuando :evalues está presente.',
    'required_with_all' => 'El campo atributo:es obligatorio cuando : evalues no está presente.',
    'required_without' => '.',
    'required_without_all' => 'El campo atributo: es obligatorio cuando ninguno de :evalues está presente.',
    'same' =>  'El :atributo y :otro deben coincidir.',
    'size' => [
        'array' => 'El atributo : debe contener elementos :tamaño.',
        'file' => 'El :atributo debe ser :tamaño kilobytes.',
        'numeric' => 'El atributo : debe ser : de tamaño.',
        'string' => 'El atributo : debe ser :personajes de tamaño.',
    ],
    'starts_with' => 'El :atributo debe comenzar con uno de los siguientes: :valores.',
    'string' => 'El atributo : debe ser una cadena.',
    'timezone' => 'El atributo : debe ser una zona horaria válida.',
    'unique' => 'El :atributo ya se ha tomado.',
    'uploaded' => 'El :atributo no se pudo cargar.',
    'uppercase' => 'El atributo debe estar en mayúsculas.',
    'url' => 'El atributo : debe ser una URL válida.',
    'ulid' => 'El atributo : debe ser un ULID válido.',
    'uuid' => 'El atributo : debe ser un ULID válido.',

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
            'rule-name' => 'mensaje personalizado',
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

    'attribute' => [],

];
