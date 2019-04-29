<?php namespace JAlejandroArias\Inmuebles\Models;

use Model;

/**
 * Model
 */
class Status extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jalejandroarias_inmuebles_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'                => 'required|between:4,35',
    ];

    public $hasMany = [
        'inmueble' => 'JAlejandroArias\Inmuebles\Models\Inmueble'
    ];
}
