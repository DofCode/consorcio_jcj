<?php namespace JAlejandroArias\Inmuebles\Models;

use Model;

/**
 * Model
 */
class Inmueble extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public function scopeName($query, $name)
    {
        if (!is_null($name)) {
            return $query->where('name', 'like', '%'.$name.'%');
        }

        return $query;
    } 

    public function scopeStatus($query, $status)
    {
        if (!is_null($status)) {
            return $query->where('status_id', $status);
        }

        return $query;
    }
    
    public function scopeType($query, $type)
    {
        if (!is_null($type)) {
            return $query->where('type_id', $type);
        }

        return $query;
    }

    public function scopeRegion($query, $region)
    {
        if (!is_null($region)) {
            return $query->where('region_id', $region);
        }

        return $query;
    }
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jalejandroarias_inmuebles_';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'                => 'required|between:4,60',
        'status'              => 'required',
        'country'             => 'required',
        'region'              => 'required',
        'type'                => 'required',
        'description'         => 'required|between:35,500',
        'album'               => 'required'
    ]; 

    public function getCountryOptions()
    {
        return Country::lists('name', 'id');
    }
    
    public function getRegionOptions($value, $data)
    {   
        $countryId = isset($data->country)
            ? $data->country
            : key($this->getCountryOptions());

        if(!$data->country) {
            $region = Region::where('country_id', $countryId)->get();
        }else {
            $region = Region::where('country_id', $countryId->id)->get();
        }

        return collect($region)->lists('name', 'id');
    }
        
    public $belongsTo = [
        'country' => ['JAlejandroArias\Inmuebles\Models\Country', 'key' => 'country_id'],
        'region' => ['JAlejandroArias\Inmuebles\Models\Region', 'key' => 'region_id'],
        'type' => ['JAlejandroArias\Inmuebles\Models\Type', 'key' => 'type_id'],
        'status' => ['JAlejandroArias\Inmuebles\Models\Status', 'key' => 'status_id']
    ];

    public $attachMany = [
        'album' => 'System\Models\File'
    ];
}
