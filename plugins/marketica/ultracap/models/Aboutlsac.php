<?php namespace Marketica\Ultracap\Models;

use Model;

/**
 * Model
 */
class Aboutlsac extends Model
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
    public $table = 'marketica_ultracap_aboutlsuc';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'upload1' => 'System\Models\File',
        'upload2' => 'System\Models\File',
        'upload3' => 'System\Models\File',
    ];
}
