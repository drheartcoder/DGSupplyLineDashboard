<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index', compact('managers'));
    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(Request $request)
    {
        $manager = new Manager();
        $manager->first_name = $request->first_name;
        $manager->last_name = $request->last_name;
        $manager->email = $request->email;
        $manager->role = $request->role;
        $manager->status = $request->status;
        $manager->save();

        return redirect()->route('managers.index');
    }

    public function edit($id)
    {
        $manager = Manager::find($id);
        return view('managers.edit', compact('manager'));
    }

    public function update(Request $request, $id)
    {
        $manager = Manager::find($id);
        $manager->first_name = $request->first_name;
        $manager->last_name = $request->last_name;
        $manager->email = $request->email;
        $manager->role = $request->role;
        $manager->status = $request->status;
        $manager->save();

        return redirect()->route('managers.index');
    }

    public function destroy($id)
    {
        Manager::destroy($id);
        return redirect()->route('managers.index');
    }
}
