<?php namespace Ibrdrahim\product\Models;

use Model;

/**
 * Model
 */
class Devlog extends Model
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

    public $belongsTo = [
        'game' => 'Ibrdrahim\product\Models\Game'
    ];

    public $attachOne = [
        'featured_image' => 'System\Models\File'
    ];
    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
    public $table = 'ibrdrahim_product_devlog';
}