<?php

namespace App\Http\Livewire;
use App\Models\Ingredient;
use Livewire\Component;

class ShowIngredient extends Component
{
    public $ingredientId;

    public function getIngredientProperty()
    {
        return Ingredient::find($this->ingredientId);
    }

    public function mount()
    {
        $this->ingredient = new Ingredient();
        
        
    }

    public function deleteIngredient()
    {
        $this->ingredient->delete();
    }
}
