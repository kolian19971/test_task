<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CsvRequest;

use App\Imports\CsvImport;
use App\Models\Offices;
use App\Models\Regions;
use Excel;
use Illuminate\Http\Request;

class AdminController extends Controller{

    public function index(){
        return view('admin.index', [
            'title' => 'Admin dashboard'
        ]);
    }

    /**
     * @param CsvRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importRegions( CsvRequest $request ){
        $import = new CsvImport(new Regions());
        Excel::import($import, $request->file('file'));

        return back()->with('success', $import->getCreatedRows().' regions imported');
    }

    /**
     * @param CsvRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importOffices( CsvRequest $request ){
        $import = new CsvImport(new Offices());
        Excel::import($import, $request->file('file'));

        return back()->with('success', $import->getCreatedRows().' offices imported');
    }

    public function clearDatabase( Request $request ){
        Regions::truncate();
        Offices::truncate();

        return true;
    }

}
