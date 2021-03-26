<div class='container'>
    <div class='row'>
    <h1>Ingredienti</h1>
    <h1>{{ $this->ingredient->name }}</h1>
    <h1>{{ $this->ingredient->price }}</h1>

    <button wire:click="deleteIngredient">Elimina</button>
    </div>
</div>