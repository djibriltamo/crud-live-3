<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{

    public $name ='';
    public $email ='';
    public $phone ='';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers|max:255'
        ],[
            'name.required' => 'The name is required',
            'email.required' => 'The email is required',
            'email.unique' => 'This email is already taken',
            'phone.required' => 'The phone is required',
            'phone.unique' => 'This is already taken'
        ]);

        Customer::create($validated);

        session()->flash('success', 'Customer Created succesfully');

        return $this->redirect('/customers', navigate:true);
    }
}
