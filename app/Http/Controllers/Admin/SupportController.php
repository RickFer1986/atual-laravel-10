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

        return view("admin.supports.index", compact('supports'));
    }

    public function show(string|int $id)
    {
        // OTHERS FORMS:
        // Support::find($id);
        // Support::where('id', '$id')->first();
        // Support::where('id', '=', '$id')->first();
        if(!$support = Support::find($id))
        {
            return back();
        }
        
        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);

        return redirect()->route('supports.index');
    }
}
