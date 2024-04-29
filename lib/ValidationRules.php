<?php

namespace Lib;

class ValidationRules
{
    public static function merge(string $fieldName, array $rules, bool $isArray = false)
    {
        $prefix = empty($fieldName) ? '' : $fieldName.'.'.($isArray ? '*.' : '');
        $newRules = [];
        foreach ($rules as $key => $rule) {
            $keyName = $prefix.$key;
            $newRules[$keyName] = $rule;
        }

        return $newRules;
    }
}
