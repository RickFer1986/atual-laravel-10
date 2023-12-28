<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        // RETORNA TODOS OS DADOS DO BANCO
        $supports = $support->all();

        //dd($supports);

        return view("admin.supports.index", compact('supports'));
    }
}
