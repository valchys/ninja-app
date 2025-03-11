<?php

namespace App\Http\Controllers;

use App\Models\NInja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NinjaController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Ninja - Web App';
        $viewData['subtitle'] = 'List of Ninjas';
        $viewData['ninjas'] = Ninja::orderBy('chakra', 'desc')->get();

        return view('ninja.list')->with('viewData', $viewData);
    }

    public function register(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Ninja';

        return view('ninja.register')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Ninja::validate($request);

        $newNinja = new Ninja;
        $newNinja->setName($request->input('name'));
        $newNinja->setVillage($request->input('village'));
        $newNinja->setChakra($request->input('chakra'));
        $newNinja->save();

        return redirect()->route('ninja.register')->with('success', 'Ninja registered successfully!');

    }

    public function stats(): View
    {
        $viewData = [];
        $viewData['title'] = 'Ninja - Web App';
        $viewData['subtitle'] = 'Ninja stats';
        $viewData['ninjas'] = Ninja::all();

        $ninjas = Ninja::all();

        $viewData['ninjasByVillage'] = $ninjas->groupBy('village')->map->count();
        $viewData['totalChakra'] = $ninjas->sum('chakra');

        return view('ninja.stats')->with('viewData', $viewData);
    }
}
