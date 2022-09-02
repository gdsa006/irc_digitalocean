<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Exports\LeadsExport;
use App\Exports\LeadsCheckingExport;
use App\Exports\LeadsSoonExport;
use App\Exports\LeadsUrgentExport;
use Maatwebsite\Excel\Facades\Excel;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('new.dashboard.import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new LeadsExport, 'leads.xlsx');
    }

    public function exportCheckingLeads() 
    {
        return Excel::download(new LeadsCheckingExport, 'leads-checking.xlsx');
    }

    public function exportSoonLeads() 
    {
        return Excel::download(new LeadsSoonExport, 'leads-soon.xlsx');
    }

    public function exportUrgentLeads() 
    {
        return Excel::download(new LeadsUrgentExport, 'leads-urgent.xlsx');
    }
     


}
