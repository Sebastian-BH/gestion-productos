<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sale;

class Sales extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $sorteo_id, $phone, $total, $status;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.sales.view', [
            'sales' => Sale::latest()
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('sorteo_id', 'LIKE', $keyWord)
						->orWhere('phone', 'LIKE', $keyWord)
						->orWhere('total', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
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
		$this->user_id = null;
		$this->sorteo_id = null;
		$this->phone = null;
		$this->total = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'user_id' => 'required',
		'sorteo_id' => 'required',
		'phone' => 'required',
		'total' => 'required',
		'status' => 'required',
        ]);

        Sale::create([ 
			'user_id' => $this-> user_id,
			'sorteo_id' => $this-> sorteo_id,
			'phone' => $this-> phone,
			'total' => $this-> total,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Sale Successfully created.');
    }

    public function edit($id)
    {
        $record = Sale::findOrFail($id);

        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->sorteo_id = $record-> sorteo_id;
		$this->phone = $record-> phone;
		$this->total = $record-> total;
		$this->status = $record-> status;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'user_id' => 'required',
		'sorteo_id' => 'required',
		'phone' => 'required',
		'total' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Sale::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'sorteo_id' => $this-> sorteo_id,
			'phone' => $this-> phone,
			'total' => $this-> total,
			'status' => $this-> status
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
