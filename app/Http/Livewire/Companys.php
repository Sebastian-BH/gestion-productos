<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Company;

class Companys extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $country_id, $name, $nit, $phone, $email, $status;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.companies.view', [
            'companies' => Company::latest()
						->orWhere('country_id', 'LIKE', $keyWord)
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('nit', 'LIKE', $keyWord)
						->orWhere('phone', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
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
		$this->country_id = null;
		$this->name = null;
		$this->nit = null;
		$this->phone = null;
		$this->email = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'status' => 'required',
        ]);

        Company::create([ 
			'country_id' => $this-> country_id,
			'name' => $this-> name,
			'nit' => $this-> nit,
			'phone' => $this-> phone,
			'email' => $this-> email,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Company Successfully created.');
    }

    public function edit($id)
    {
        $record = Company::findOrFail($id);

        $this->selected_id = $id; 
		$this->country_id = $record-> country_id;
		$this->name = $record-> name;
		$this->nit = $record-> nit;
		$this->phone = $record-> phone;
		$this->email = $record-> email;
		$this->status = $record-> status;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Company::find($this->selected_id);
            $record->update([ 
			'country_id' => $this-> country_id,
			'name' => $this-> name,
			'nit' => $this-> nit,
			'phone' => $this-> phone,
			'email' => $this-> email,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Company Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Company::where('id', $id);
            $record->delete();
        }
    }
}
