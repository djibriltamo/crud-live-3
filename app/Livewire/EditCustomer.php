<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{

    public $name;
    public $email;
    public $phone;
    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function update()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255'
        ],[
            'name.required' => 'The name is required',
            'email.required' => 'The email is required',
            'phone.required' => 'The phone is required'
        ]);

        $this->customer->update($validated);

        session()->flash('success', 'Customer Updated succesfully');

        return $this->redirect('/customers', navigate:true);
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
