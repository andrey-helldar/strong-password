<?php

namespace Helldar\StrongPassword\Rules;

final class Rules
{
    public const ALL = [
        'case_diff'  => CaseDiffRule::class,
        'letters'    => LettersRule::class,
        'min_length' => MinLengthRule::class,
        'numbers'    => NumbersRule::class,
        'strong'     => StrongRule::class,
        'symbols'    => SymbolsRule::class,
    ];

    public const PREFIX = 'psw_';

    public static function get(string $rule): string
    {
        return static::ALL[$rule];
    }

    public static function names(): array
    {
        return array_keys(static::ALL);
    }

    public static function name(string $key): string
    {
        return static::PREFIX . $key;
    }
}
