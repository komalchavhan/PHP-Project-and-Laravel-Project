<?php

namespace App\Exports;

use App\Models\UserM;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsermanagementsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserM::all();
    }
}