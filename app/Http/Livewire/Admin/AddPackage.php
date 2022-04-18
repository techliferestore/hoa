<?php

namespace App\Http\Livewire\Admin;
use App\Models\fix_plain_service_label;
use App\Models\monthly_tran;
use Livewire\Component;

class AddPackage extends Component
{

    public $monthly_transaction_name,$monthly_name,$fixplains,$fixplain_id;
    public  $plain_price,$price,   $plain_labels; 




    public function render()
    {
        $this->monthly_transaction_name = monthly_tran::all();

        

        return view('livewire.admin.add-package');
    }
}
