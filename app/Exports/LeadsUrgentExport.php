<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadsUrgentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lead::query()->where('urgency', 'urgent')->get(['id','fname','email','mobile','address','sqft','steep','existingmaterial','urgency','true','material','isinterestedinfinancing']);
    }
    
    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'mobile',
            'address',
            'sqft',
            'slope',
            'existing material',
            'urgency',
            'insurance',
            'required material',
            'insterested in finance'
        ];
    }
    
}
