<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    protected $table = "offices";
    protected $guarded = [];

    // csv file column count
    public const CSV_COLUMN_COUNT = 7;

    // column fields array
    public static $columnFields = [
        0 => 'id',
        1 => 'name',
        2 => 'city',
        3 => 'state',
        4 => 'zip',
        5 => 'latitude',
        6 => 'longitude'
    ];


    /**
     * @param $zip
     * @return array
     */
    public static function getAutocompleteArray( $zip ){
        $result = [];

        if(!empty($zip)){
            $offices = Offices::where('zip', 'LIKE', '%'.$zip.'%')->get();
            if(count($offices))
                foreach ($offices as $office)
                    $result[] = [
                        'key' => $office->zip,
                        'value' => $office->zip
                    ];
        }

        return $result;
    }

    public function region(){
        return $this->hasOne(Regions::class, 'state', 'state');
    }

}
