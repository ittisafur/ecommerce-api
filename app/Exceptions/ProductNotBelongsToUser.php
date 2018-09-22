<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return [
    		'errors' => 'You are not the User for this Product.'
    	];
    }
}
