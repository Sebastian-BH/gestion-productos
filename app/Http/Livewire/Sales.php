<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Sales extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $product, $cant;
    public $selectedProduct=null;
    public $updateMode = false;
    public $producto=null, $maxstock=null, $maxsale=null;
    public $aux=0;

    public function render()
    {
		
        return view('livewire.sales.view', [
            'products' => Product::all()
        ]);
    }
	
    
    public function updatedselectedProduct($producto_id)
    {
		$this->producto = Product::where('id', $producto_id)->get();
    
    }


    public function store($id)
    {
        $this->validate([		
		'cant' => 'required',
        ]);
        
        if ($this->producto[0]->stock >= $this->cant && $this->cant > 0){
            $this->aux=$this->producto[0]->stock-$this->cant;
            Sale::create([ 
                'product' => $id,
                'cant' => $this-> cant
            ]);            

            $this->resetInput();
            $this->emit('closeModal');
            $this->edit($id,$this->aux);
            session()->flash('message', 'Venta exitosa.');
        }else{
            $this->resetInput();
            $this->emit('closeModal');
            session()->flash('msg', 'Lo sentimos cantidad insuficiente.');
       }
        
    }

    public function edit($id, $aux)
    {
        $record = Product::findOrFail($id);

        if($record) {
            $record->stock = $aux;
            $record->save();
        }
    }

    public function maxStock()
    {
        $this->maxstock = Product::orderBy('stock', 'desc')->first();
        
        if( $this->maxstock != null){
            if($this->maxstock->stock <= 0){
                session()->flash('meseg', 'Todos los productos estan agotados');
            }
           // dd($this->maxstock);
        }else{
            session()->flash('meseg', 'No hay productos registrados');
        }
    }

    public function maxSale()
    {
        $this->maxsale = DB::table('sales')        
        ->select('product', DB::raw('SUM(cant) as total'))
        ->groupBy('product')
        ->orderBy('total', 'desc')
        ->first();

   
        if($this->maxsale != null){
            $this->maxsale = Product::where('id', $this->maxsale->product)->get();
          //  dd( $this->maxsale );
        }else{
            session()->flash('mseg', 'No se han realizado ventas.');
        }
       
       
        // $this->maxsale = DB::table('sales')        
        //     ->join('products', 'products.id', '=', 'sales.product')            
        //     ->select('products.name', DB::raw('SUM(cant)'))
        //     ->groupBy('product','name')
        //     ->orderBy('product', 'desc')
        //     ->limit(1)
        //     ->get();


        // if($this->maxsale == null){
        //     session()->flash('mseg', 'No se han realizado ventas.');
        // }       
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->product = null;
		$this->cant = null;
    }
   

    public function update()
    {
        $this->validate([
		'product' => 'required',
		'cant' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Sale::find($this->selected_id);
            $record->update([ 
			'product' => $this-> product,
			'cant' => $this-> cant
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Sale Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Sale::where('id', $id);
            $record->delete();
        }
    }
}
