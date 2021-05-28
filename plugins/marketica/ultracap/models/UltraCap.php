<?php namespace Marketica\Ultracap\Models;

use Model;

/**
 * Model
 */
class UltraCap extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'marketica_ultracap_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
