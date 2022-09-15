<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Products extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $reference, $price, $weight, $category, $stock;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.products.view', [
            'products' => Product::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('reference', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
						->orWhere('weight', 'LIKE', $keyWord)
						->orWhere('category', 'LIKE', $keyWord)
						->orWhere('stock', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->reference = null;
		$this->price = null;
		$this->weight = null;
		$this->category = null;
		$this->stock = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'reference' => 'required',
		'price' => 'required',
		'weight' => 'required',
		'category' => 'required',
		'stock' => 'required',
        ]);

        Product::create([ 
			'name' => $this-> name,
			'reference' => $this-> reference,
			'price' => $this-> price,
			'weight' => $this-> weight,
			'category' => $this-> category,
			'stock' => $this-> stock
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Producto creado exitosamente.');
    }

    public function edit($id)
    {
        $record = Product::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->reference = $record-> reference;
		$this->price = $record-> price;
		$this->weight = $record-> weight;
		$this->category = $record-> category;
		$this->stock = $record-> stock;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'reference' => 'required',
		'price' => 'required',
		'weight' => 'required',
		'category' => 'required',
		'stock' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Product::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'reference' => $this-> reference,
			'price' => $this-> price,
			'weight' => $this-> weight,
			'category' => $this-> category,
			'stock' => $this-> stock
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Producto actualizado exitosamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Product::where('id', $id);
            $record->delete();
        }
    }
}
