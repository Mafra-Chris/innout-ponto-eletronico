<?php

class AppException extends Exception
{

    public function __construct($errors = [], 
    $message = 'Erros de validação',
    $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}
