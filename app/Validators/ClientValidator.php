<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 10:11
 */

namespace Curso\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator {

    protected $rules = [
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];

}