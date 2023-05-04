<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;

class UserDatatables extends Component
{
    use WithPagination;
    public $term = "";
    
    public function render()
    {
        $term = '%'.$this->term.'%';
        
        $users = User::where('name','like',$term)->paginate(10);

        $data = [
            'users' => $users,
        ];

        return view('livewire.user-datatables', $data);
        
    }
}
