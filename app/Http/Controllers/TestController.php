<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Laptop;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create()
    {
        $supplier = Supplier::create([
           'name' => 'le khoan'
        ]);

        for($i = 0; $i < 100; $i++) {
            Laptop::create([
                'name' => "laptop " . $i,
                'supplier_id' => $supplier->id,
            ]);
        }
    }

    public function show($id) {
        $supplier = Supplier::with(['laptops' => function($query) {
            $query->where('name', '=', 'laptop 2');
        }])->find($id);

        dd($supplier);
    }
}

