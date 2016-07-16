<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    "accepted"          => "Deve ser aceito.",
    "active_url"        => "Não contém um URL válido.",
    "after"             => "Deverá conter uma data posterior a :date.",
    "alpha"             => "Deverá conter apenas letras.",
    "alpha_dash"        => "Deverá conter apenas letras, números e traços.",
    "alpha_num"         => "Deverá conter apenas letras e números .",
    "array"             => "Precisa ser um conjunto.",
    "before"            => "Deverá conter uma data anterior a :date.",
    "between"           => [
        "numeric"           => "Deverá ter um valor entre :min - :max.",
        "file"              => "Deverá ter um tamanho entre :min - :max kilobytes.",
        "string"            => "Deverá conter entre :min - :max caracteres.",
        "array"             => "Precisa ter entre :min - :max itens.",
    ],
    "boolean"           => "deverá ter o valor verdadeiro ou falso.",
    "confirmed"         => "A confirmação para o campo :attribute não coincide.",
    "date"              => "Não contém uma data válida.",
    "date_format"       => "A data indicada para o campo :attribute não respeita o formato :format.",
    "different"         => "Os campos :attribute e :other deverão conter valores diferentes.",
    "digits"            => "Deverá conter :digits dígitos.",
    "digits_between"    => "Deverá conter entre :min a :max dígitos.",
    "email"             => "Não contém um endereço de email válido.",
    "exists"            => "O valor selecionado para o campo :attribute é inválido.",
    "filled"            => "É obrigatório.",
    "image"             => "Deverá conter uma imagem.",
    "in"                => "Não contém um valor válido.",
    "integer"           => "Deverá conter um número inteiro.",
    "ip"                => "Deverá conter um IP válido.",
    'json'              => 'Deverá conter uma string JSON válida.',
    "max"               => [
        "numeric"           => "Não deverá conter um valor superior a :max.",
        "file"              => "Não deverá ter um tamanho superior a :max kilobytes.",
        "string"            => "Não deverá conter mais de :max caracteres.",
        "array"             => "Deve ter no máximo :max itens.",
    ],
    "mimes"             => "Deverá conter um arquivo do tipo: :values.",
    "min"               => [
        "numeric"           => "Deverá ter um valor superior ou igual a :min.",
        "file"              => "Deverá ter no mínimo :min kilobytes.",
        "string"            => "Deverá conter no mínimo :min caracteres.",
        "array"             => "Deve ter no mínimo :min itens.",
    ],
    "not_in"            => "Contém um valor inválido.",
    "numeric"           => "Deverá conter um valor numérico.",
    "regex"             => "O formato do valor é inválido.",
    "required"          => "É obrigatório.",
    "required_if"       => "É obrigatório quando o valor do campo :other é igual a :value.",
    "required_with"     => "É obrigatório quando :values está presente.",
    "required_with_all" => "É obrigatório quando um dos :values está presente.",
    "required_without"  => "É obrigatório quanto :values não está presente.",
    "required_without_all" => "É obrigatório quando nenhum dos :values está presente.",
    "same"              => "Os campos :attribute e :other deverão conter valores iguais.",
    "size"              => [
        "numeric"           => "Deverá conter o valor :size.",
        "file"              => "Deverá ter o tamanho de :size kilobytes.",
        "string"            => "Deverá conter :size caracteres.",
        "array"             => "Deve ter :size itens.",
    ],
    "string"            => "Deve ser uma string.",
    "timezone"          => "Deverá ter um fuso horário válido.",
    "unique"            => "O valor indicado para o campo :attribute já se encontra utilizado.",
    "url"               => "O formato do URL indicado para o campo :attribute é inválido.",
    "autocomplete"      => "Preciso que você selecione um item da lista.",
];