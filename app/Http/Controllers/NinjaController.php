<?php

namespace App\Http\Controllers;

use App\Models\NInja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NinjaController extends Controller
{
    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Ninja';

        return view('ninja.register')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Ninja::validate($request);

        $newComputer = new Ninja;
        $newComputer->setName($request->input('name'));
        $newComputer->setVillage($request->input('village'));
        $newComputer->setChakra($request->input('chakra'));
        $newComputer->save();

        return redirect()->route('ninja.register')->with('success', 'Ninja registered successfully!');

    }
}
