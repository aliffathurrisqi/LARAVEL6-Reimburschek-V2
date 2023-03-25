<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class DashboardController extends Controller
{
    public function default()
    {
        return redirect()->route('dashboard');
    }

    public function index()
    {
        $data['users'] = User::find(1);

        return view('dashboard', $data);
    }

    public function edit()
    {
        $data['users'] = User::find(1);

        return view('pages.user-edit', $data);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'penempatan'=>'required',
        ]);

        $user = User::find(1);
        $user->name = $request->name;
        $user->position = $request->position;
        $user->penempatan = $request->penempatan;
        $user->save();

        return redirect()->back();
    }
}
