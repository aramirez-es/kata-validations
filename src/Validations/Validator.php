<?php

namespace Validations;

class Validator
{
	public function isValid($input, $type)
	{
    	if ( $type[0] == 'S' ){
    		return is_string( $input );
    	}

        return is_int( $input );
	}
}
