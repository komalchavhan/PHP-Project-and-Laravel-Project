<?php

namespace App\Exports;

use App\Models\Management;
use Maatwebsite\Excel\Concerns\FromCollection;

class ManagementsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Management::all();
    }
}
