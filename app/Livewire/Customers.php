<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $customers = [];
    public $search = '';

    public function mount()
    {
        $this->customers = Customer::paginate(5);
    }

    public function delete(Customer $customer)
    {
        $customer->delete();

        session()->flash('danger', 'Customer Deleted Succesfully');

        return $this->redirect('/customers', navigate:true);
    }

    public function render()
    {

        if (! $this->search)
        {
            $customers = Customer::paginate(5);
        }else{
            $customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate();
        }

        return view('livewire.customers', compact('customers'));
    }

}
