<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $company_id, $document, $name, $lastname, $phone, $addres, $email, $username, $token, $role_id, $login, $status;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.users.view', [
            'users' => User::latest()
						->orWhere('document', 'LIKE', $keyWord)
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('lastname', 'LIKE', $keyWord)
						->orWhere('phone', 'LIKE', $keyWord)
						->orWhere('addres', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('username', 'LIKE', $keyWord)
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
		$this->company_id = null;
		$this->document = null;
		$this->name = null;
		$this->lastname = null;
		$this->phone = null;
		$this->addres = null;
		$this->email = null;
		$this->username = null;
		$this->token = null;
		$this->role_id = null;
		$this->login = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'company_id' => 'required',
		'name' => 'required',
		'role_id' => 'required',
		'login' => 'required',
		'status' => 'required',
        ]);

        User::create([ 
			'company_id' => $this-> company_id,
			'document' => $this-> document,
			'name' => $this-> name,
			'lastname' => $this-> lastname,
			'phone' => $this-> phone,
			'addres' => $this-> addres,
			'email' => $this-> email,
			'username' => $this-> username,
			'token' => $this-> token,
			'role_id' => $this-> role_id,
			'login' => $this-> login,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'User Successfully created.');
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id; 
		$this->company_id = $record-> company_id;
		$this->document = $record-> document;
		$this->name = $record-> name;
		$this->lastname = $record-> lastname;
		$this->phone = $record-> phone;
		$this->addres = $record-> addres;
		$this->email = $record-> email;
		$this->username = $record-> username;
		$this->token = $record-> token;
		$this->role_id = $record-> role_id;
		$this->login = $record-> login;
		$this->status = $record-> status;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'company_id' => 'required',
		'name' => 'required',
		'role_id' => 'required',
		'login' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'company_id' => $this-> company_id,
			'document' => $this-> document,
			'name' => $this-> name,
			'lastname' => $this-> lastname,
			'phone' => $this-> phone,
			'addres' => $this-> addres,
			'email' => $this-> email,
			'username' => $this-> username,
			'token' => $this-> token,
			'role_id' => $this-> role_id,
			'login' => $this-> login,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'User Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
