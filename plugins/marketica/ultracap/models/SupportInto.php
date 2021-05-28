<?php namespace Marketica\Ultracap\Models;

use Model;

/**
 * Model
 */
class SupportInto extends Model
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
    public $table = 'marketica_ultracap_support';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
        'image2' => 'System\Models\File',
        'image3' => 'System\Models\File',
    ];
}
