<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    //propiedad computada
    public function getResultsProperty(){
        return Course::where('name','LIKE','%'. $this->search . '%')->where('status',3)->take(8)->get();
    }
}
