<?php

namespace App\Http\Controllers;

use App\Models\Installer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InstallerController extends Controller
{
    public function index()
    {
        $installers = Installer::all();
        return view('installers.index', compact('installers'));
    }

    public function create()
    {
        return view('installers.create');
    }

    public function store(Request $request)
    {
        $installer = new Installer();
        $installer->business_name = $request->business_name;
        //$installer->url = str_slug($request->business_name);
        $installer->url = Str::slug($request->business_name);
        $installer->email = $request->email;
        $installer->phone_number = $request->phone_number;
        $installer->website_url = $request->website_url;
        $installer->address_1 = $request->address_1;
        $installer->address_2 = $request->address_2;
        $installer->city = $request->city;
        $installer->county = $request->county;
        $installer->postcode = $request->postcode;
        $installer->status = $request->status;
        $installer->save();

        return redirect()->route('installers.index');
    }

    public function edit($id)
    {
        $installer = Installer::find($id);
        return view('installers.edit', compact('installer'));
    }

    public function update(Request $request, $id)
    {
        $installer = Installer::find($id);
        $installer->business_name = $request->business_name;
        $installer->email = $request->email;
        $installer->phone_number = $request->phone_number;
        $installer->website_url = $request->website_url;
        $installer->address_1 = $request->address_1;
        $installer->address_2 = $request->address_2;
        $installer->city = $request->city;
        $installer->county = $request->county;
        $installer->postcode = $request->postcode;
        $installer->status = $request->status;
        $installer->save();

        return redirect()->route('installers.index');
    }

    public function destroy($id)
    {
        Installer::destroy($id);
        return redirect()->route('installers.index');
    }
}

