<?php

return array(
    "accepted" => "Pole :attribute musi zostać zaakceptowane.", //yes, 1, true
    "active_url" => "Pole :attribute nie jest prawidłowym adresem URL.",
    "after" => "Pole :attribute musi być datą późniejszą niż :date.",
    "alpha" => "Pole :attribute może zawierać tylko litery.",
    "alpha_dash" => "Pole :attribute może zawierać tylko litery, cyfry i podkreślenia.",
    "alpha_num" => "Pole :attribute może zawierać tylko litery i cyfry.",
    "array" => "Pole :attribute musi być tablicą.",
    "before" => "Pole :attribute musi być datą wcześniejszą niż :date.",
    'before_or_equal' => 'Pole :attribute nie może być datą późniejszą od :date.',
    "between" => array(
        "numeric" => "Pole :attribute musi być wartością pomiędzy :min i :max.",
        "file" => "Pole :attribute musi mieć pomiędzy :min a :max kilobajtów.",
        "string" => "Pole :attribute musi mieć pomiędzy :min a :max znaków.",
        "array" => "Pole :attribute musi mieć pomiędzy :min a :max pozycji.",
    ),
    "boolean" => "Pole :attribute musi być true lub false",
    'confirmed' => 'Niepoprawne potwierdzenie pola :attribute.',
    "date" => "Pole :attribute nie jest prawidłową datą.",
    "date_format" => "Pole :attribute nie zgadza się z formatem :format.",
    "different" => "Pole :attribute i :other muszą być różne.",
    "digits" => "Pole :attribute musi mieć :digits cyfr.",
    "digits_between" => "Pole :attribute musi mieć pomiędzy :min a :max cyfr.",
    "email" => "Pole :attribute musi być poprawnym adresem e-mail.",
    "exists" => "Pole :attribute jest nieprawidłowe.",
    "image" => "Pole :attribute musi być obrazkiem.",
    "in" => "Pole :attribute zawiera nieprawidłową wartość.",
    "integer" => "Pole :attribute musi być liczbą.",
    "ip" => "Pole :attribute musi być poprawnym adresem IP.",
    "max" => array(
        "numeric" => "Wartość pola :attribute nie może być większa niż :max.",
        "file" => "Pole :attribute nie może być większy niż :max kilobajtów.",
        "string" => "Pole :attribute nie może być dłuższe niż :max znaków.",
        "array" => "Pole :attribute nie może mieć więcej niż :max pozycji.",
    ),
    "mimes" => "Pole :attribute musi być plikiem typu: :values.",
    "min" => array(
        "numeric" => "Wartość pola :attribute musi większa lub równa :min.",
        "file" => "Pole :attribute musi mieć co najmniej :min kilobajtów.",
        "string" => "Pole :attribute musi mieć co najmniej :min znaków.",
        "array" => "Pole :attribute musi mieć co najmniej :min pozycji.",
    ),
    "not_in" => "wybrany :attribute jest nieprawidłowy.",
    "numeric" => "Pole :attribute musi być liczbą.",
    "regex" => "format :attribute jest nieprawidłowy",
    "required" => "Pole :attribute jest wymagane.",
    "required_if" => "Pole :attribute jest wymagane.",
    "required_with" => "Pole :attribute jest wymagane, gdy :values są zdefiniowane.",
    "required_with_all" => "Pole :attribute jest wymagane, gdy :values są zdefiniowane.",
    "required_without" => "Pole :attribute jest wymagane, gdy :values nie są zdefiniowane.",
    "required_without_all" => "Pole :attribute jest wymagane, gdy żadne z :values nie są zdefiniowane.",
    "same" => "Pole :attribute i :other muszą być takie same.",
    "size" => array(
        "numeric" => "Pole :attribute must be :size.",
        "file" => "Pole :attribute musi mieć :size kilobajtów.",
        "string" => "Pole :attribute musi mieć :size znaków.",
        "array" => "Pole :attribute musi zawierać :size pozycji.",
    ),
    "unique" => "Pole :attribute jest już zajęty.",
    "url" => "format :attribute jest nieprawidłowy.",
    "timezone" => "Pole :attribute musi być prawidłową strefą czasową.",
    'gt' => [
        'numeric' => 'Pole :attribute musi zawierać liczbę większą od :value.',
        'file' => 'Pole :attribute musi zawierać liczbę większą od :value kilobytes.',
        'string' => 'Pole :attribute musi zawierać liczbę większą od :value characters.',
        'array' => 'Pole :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Pole :attribute musi zawierać liczbę większą lub równą :value.',
        'file' => 'Pole :attribute musi zawierać liczbę większą lub równą :value kilobytes.',
        'string' => 'Pole :attribute musi zawierać liczbę większą lub równą :value characters.',
        'array' => 'Pole :attribute must have :value items or more.',
    ],
    'json' => 'Pole :attribute musi zawierać dane w formacie JSON.',
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
    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      |--------------------------------------------------------------------------
      |
      | following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => array(
        'username' => 'nazwa użytkownika'
    ),
);
