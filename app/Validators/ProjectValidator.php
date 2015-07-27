<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 10:11
 */

namespace Curso\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator {

    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required'
    ];

}