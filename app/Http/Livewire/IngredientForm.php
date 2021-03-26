<?php

namespace App\Http\Livewire;
use App\Models\Ingredient;
use Livewire\Component;

class IngredientForm extends Component
{
    public Ingredient $ingredient;
   

    protected $rules = [
        'ingredient.name' => 'required|string',
        'ingredient.price' => 'required|integer|max:500',
    ];

    public function mount()
    {
        $this->ingredient = new Ingredient();
        
    }

    public function save()
    {
        $this->validate();

        $this->ingredient->save();

        session()->flash('message', 'Ingrediente aggiunto correttamente');
    }


    
}
