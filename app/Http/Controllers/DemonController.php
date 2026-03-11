<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemonRequest;
use Illuminate\View\View;
use App\Models\Demon;
use Illuminate\Http\RedirectResponse;

class DemonController extends Controller
{

    public function index(): View
    {
        return view('demon.index');
    }

    public function list(): View
    {
        $viewData = [];
        $viewData["subtitle"] =  "Todos los demonios";
        $viewData["demons"] = Demon::all();

        return view('demon.list')->with("viewData", $viewData);
    }


    public function save(StoreDemonRequest $request): RedirectResponse
    {
        Demon::create($request->validated());

        return back();
    }

    public function create(): View
    {
        $viewData = [];
        $viewData["subtitle"] = "Crear un demonio";

        return view('demon.create')->with("viewData", $viewData);
    }


    public function stats(): View
    {
        $viewData = [];
        $viewData["subtitle"] = "Estadísticas de demonios";
        
        $demons = Demon::all();
        $stats = $demons->groupBy('hierarchy')->map(function($group, $hierarchy) {
            return (object)[
                'hierarchy' => $hierarchy,
                'total' => $group->count()
            ];
        });
        
        $viewData["stats"] = $stats;
        
        $viewData["maxBloodLevel"] = $demons->max('blood_level') ?? 0;

        return view('demon.stats')->with("viewData", $viewData);
    }
}