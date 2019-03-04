<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
/*
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    *
    public function model(array $row)
    {
        return new User([
            'name'     => $row[0],

            'email'    => $row[1], 

            'password' => \Hash::make('123456'),

        ]);
    
    }
}
*/
class UsersImport implements WithMultipleSheets, SkipsUnknownSheets
{
    public function sheets(): array
    {
        return [
            'Worksheet 1' => new FirstSheetImport(),
            'Worksheet 2' => new SecondSheetImport(),
        ];
    }
    
    public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }
}