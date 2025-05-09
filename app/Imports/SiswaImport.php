<?php

namespace App\Imports;

use App\Models\Backend\__Application\Datatable\Sheet;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sheet([
            "name" => $row[1],
            "description" => $row[2],
        ]);
    }
}
