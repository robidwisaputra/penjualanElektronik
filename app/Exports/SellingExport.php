<?php

namespace App\Exports;

use App\Selling;
use Maatwebsite\Excel\Concerns\FromCollection;

class SellingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Selling::all();
    }
}
