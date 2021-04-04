<?php

namespace App\Imports;

use App\Models\Regions;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CsvImport implements ToCollection{

    //create model
    private $model;

    //created rows count
    private $createdRows = 0;

    /**
     * CsvImport constructor.
     * @param $model
     */
    public function __construct($model){
        $this->model = $model;
    }


    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows){
        if(count($rows)){

            //create database array
            $createArray = [];

            foreach ($rows as $rowKey => $row){
                if(isset($row[0])){
                    //parse string to array
                    $dataArray = explode(';', $row[0]);

                    //validate data line
                    if(count($dataArray) == $this->model::CSV_COLUMN_COUNT && is_numeric($dataArray[0]))
                        foreach ($dataArray as $columnKey => $fieldVal)
                            //push data to create array
                            $createArray[$rowKey][$this->model::$columnFields[$columnKey]] = $fieldVal;
                }
            }

            //add rows to database
            if(count($createArray))
                foreach ($createArray as $createItem){
                    $oldItem = $this->model::find($createItem['id']);
                    if(!isset($oldItem)){
                        $this->model::create($createItem);
                        ++$this->createdRows;
                    }
                }
        }

    }

    /**
     * @return int
     */
    public function getCreatedRows(): int{
        return $this->createdRows;
    }

}
