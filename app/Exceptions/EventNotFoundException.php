<?php

namespace App\Exceptions;

use Exception;

class EventNotFoundException extends Exception
{
    function report (){}

    function render (){
        return view('errors.404-event-not-found');
    }
}
