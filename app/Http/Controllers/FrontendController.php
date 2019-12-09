<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Info;

class FrontendController extends Controller
{
    public function get_locations()
    {
        $locations = Location::all();
        return view('welcome', compact('locations'));
    }

    public function save_info(Request $request)
    {
        $location = Location::where('value', $request->get('dpt'))->first()->name;
        
        if($request->eligble == 1){
            $eligble = 'Eligble';
        }else{
            $eligble = 'Not Eligble';
        }
        Info::create([
            'location' => $location,
            'who' => $request->etes,
            'surface_type' => $request->surface,
            'energy' => $request->energie,
            'area' => $request->superficie,
            'number_people' => $request->personnes,
            'tax' => $request->revenue,
            'name' => $request->get('nom'),
            'first_name' => $request->get('prenom'),
            'phone_number' => $request->get('tel'),
            'email' => $request->get('email'),
            'site_url' => $request->get('site_url'),
            'eligble' => $eligble,
        ]);

        return 'ok';
    }
}
