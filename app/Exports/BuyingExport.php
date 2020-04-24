<?php

namespace App\Exports;

use App\Buying;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BuyingExport implements FromView
{
    public function view(): View
    {
        return view('exports.buying', [
            'buying' => Buying::all()
        ]);
    }
}
