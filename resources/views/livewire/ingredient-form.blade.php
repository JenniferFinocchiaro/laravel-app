<div class= 'container'>
    <div class= 'row'>
    
        <form wire:submit.prevent="save">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <h1>Aggiungi Ingrediente</h1>

                    <label for="name">Nome</label>
                    <input  class="form-control" type="text" wire:model.lazy="ingredient.name">
                    @error('ingredient.name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input class="form-control" type="number" wire:model="ingredient.price">
                    @error('ingredient.price') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" type="submit" class="btn btn-primary" >Save</button>

        </form>
    </div>
</div>