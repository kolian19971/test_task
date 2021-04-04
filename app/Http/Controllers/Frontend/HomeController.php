<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offices;
use App\Models\Regions;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view('frontend.home', [
            'title' => 'Home page'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAutocompleteHints( Request $request ){
        $zip = intval($request->get('zip'));
        return response()->json(Offices::getAutocompleteArray($zip));
    }

    public function getOffices( Request $request ){
        $result = [
            'office_html' => ''
        ];
        $zip = intval($request->get('zip'));

        $office = Offices::where('zip', $zip)->first();

        //isset office flag
        $result['isset'] = isset($office) ? 1 : 0;

        if(isset($office)){
            $region = Regions::where('state', $office->state)->first();

            if(isset($region)){
                $regionStateArray = Regions::where('region', $region->region)
                                           ->get()
                                           ->pluck('state', 'state')
                                           ->toArray();

                if(count($regionStateArray)){
                    $offices = Offices::with('region')->whereIn('state', $regionStateArray)->get();

                    if(count($offices)){
                        $result['offices'] = $offices->toArray();
                        $result['office_html'] = view('frontend._part._offices', [
                            'offices' => $result['offices']
                        ])->render();
                    }

                }
            }

        }

        return $result;
    }

}
