<?php
  
namespace App\Imports;
  
// use App\Models\User;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Hash;
  
class ExcelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'contact_no'  => $row['mobile'],
        ]);
    }
}