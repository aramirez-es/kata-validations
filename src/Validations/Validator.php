<?php

namespace Validations;

class Validator
{
    private $validation_map = [
        'S' => 'is_string',
        'I' => 'is_int',
    ];

    public function isValid($input, $validation_rules)
    {
        if (empty($validation_rules)) {
            return true;
        }

        if ($this->isValidationTypeRight($validation_rules[0])){

            $is_valid = $this->isValidType($input, $validation_rules[0]);

            if ($is_valid && !empty($validation_rules[1])) {
                $is_valid = $this->isValidLength($input, $validation_rules[1]);
            }

            return $is_valid;
        }

        throw new \UnexpectedValueException('Validation type unknow');
    }

    private function isValidationTypeRight($type)
    {
        return isset($this->validation_map[$type]);
    }

    private function isValidType($input, $type)
    {        
        return $this->validation_map[$type]( $input );
    }

    private function isValidLength($input, $length)
    {
        return strlen($input) === $length;
    }
}