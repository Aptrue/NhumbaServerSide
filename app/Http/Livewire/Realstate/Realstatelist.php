<?php

namespace App\Http\Livewire\Realstate;

use Livewire\Component;
use App\Models\Realstate;
use Livewire\WithPagination;

class Realstatelist extends Component
{

    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    public function render()
    {


        $realstates = Realstate::where('city', 'like', '%'.$this->search.'%')
        ->orderBy('id','ASC')->paginate(7);

        return view('livewire.realstate.realstatelist',compact(
            'realstates'
        ) );
    }
}
