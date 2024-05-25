<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Models\Penjualan;
use App\Models\Stok;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $laptop = Laptop::count();
        $penjualan = Penjualan::count();
        $stok = Stok::count();
        $supplier = Supplier::count();  
        return view("admin.dashboard.index", compact("laptop","penjualan","stok","supplier"));
    }
}
