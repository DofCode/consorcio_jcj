<?php namespace JAlejandroArias\Inmuebles\Models;

use Model;

/**
 * Model
 */
class Region extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jalejandroarias_inmuebles_regions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'                => 'required|between:4,35',
        'country'                => 'required',
    ];

    public $hasMany = [
        'inmueble' => 'JAlejandroArias\Inmuebles\Models\Inmueble',
    ];

    public $belongsTo = [
        'country' => ['JAlejandroArias\Inmuebles\Models\Country', 'key' => 'country_id']
    ];
}
