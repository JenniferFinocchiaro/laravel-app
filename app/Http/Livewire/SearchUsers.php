<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-users', [
            'users' => Recipe::where('title', $this->search)->get(),
        ]);
    }
}