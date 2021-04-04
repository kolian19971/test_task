<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = "regions";
    protected $guarded = [];

    // csv file column count
    public const CSV_COLUMN_COUNT = 3;

    // column fields array
    public static $columnFields = [
        0 => 'id',
        1 => 'region',
        2 => 'state'
    ];
}
