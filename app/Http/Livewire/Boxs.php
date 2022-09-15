<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Box;

class Boxs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord ;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.boxs.view', [
            'boxes' => Box::latest()
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
    }

    public function store()
    {
        $this->validate([
        ]);

        Box::create([ 
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Box Successfully created.');
    }

    public function edit($id)
    {
        $record = Box::findOrFail($id);

        $this->selected_id = $id; 
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Box::find($this->selected_id);
            $record->update([ 
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Box Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Box::where('id', $id);
            $record->delete();
        }
    }
}
