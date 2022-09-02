<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LocationsImport;
use App\Exports\LocationsExport;
use DB;
class LocationFinderController extends Controller
{
    public function searchAddress(Request $request){
        $keyword = $request->query('search');
        
        $keywords = preg_split('/[\s,_-]+/', $keyword);
        $search = Location::where(function ($q) use ($keywords) {
            foreach ($keywords as $k) {
                $q->orWhere('Address', 'like', "% {$k}%");
                $q->orWhere('Address', 'like', "{$k}%");
            }
        })->get();        
        return response()->json(array('search'=>$search, 'keyword'=>$keyword));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        DB::table('locations')->truncate();
        Excel::import(new LocationsImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new LocationsExport, 'location-collection.xlsx');
    }    

}
