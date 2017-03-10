<?php namespace Ibrdrahim\product\Models;

use Model;

/**
 * Model
 */
class Game extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ibrdrahim_product_game';

    public $hasMany = [
        'devlog' => ['Ibrdrahim\product\Models\Devlog',
                    'order'      => 'devlog_date desc']
    ];

    public $attachOne = [
        'featured_image' => 'System\Models\File',
        'logo_image' => 'System\Models\File'
    ];
    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
}