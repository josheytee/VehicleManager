<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = collect([]);
        $query = $request->search;
        if ($query && $type = $request->type == 'vehicle') {
            $type = 'vehicle';
            $results = Vehicle::where('name', 'like', $query . '%')
                ->orWhere('model', 'like', $query . '%')->get();
        } elseif ($query && $request->type == 'owner') {
            $type = 'owner';
            $results = Owner::where('name', 'like', $query . '%')
                // ->orWhere('model', 'like', $query . '%')
                ->get();
        } else {
            $type = "vehicle";
            $default = true;

            // $results = Owner::latest()->get();
            $results = Vehicle::latest()->get();
        }

        // dump($results);
        return view('home', compact('results', 'type', 'default'));
    }

    public function search(Request $request)
    {
        dump('re');
    }
}
