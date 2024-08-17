<div>

    <div class="row">

        <div class="col-auto">
            <button wire:navigate href="/customers/create" class="btn btn-primary mb-2">Create</button>
        </div>

        <div class="col-auto">
            <input type="text" wire:model.live.debounce.150ms="search" placeholder="search..." class="form-control">
        </div>

    </div>
        @livewire('flash-message')

        <table class="table ">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>

            <tbody>

                @foreach ($customers as $key => $customer)

                    <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>

                        <td>
                            <button wire:navigate href="/customers/{{$customer->id}}" class="btn btn-info btn-sm">View</button>
                            <button wire:navigate href="/customers/{{$customer->id}}/edit" class="btn btn-success btn-sm">Edit</button>
                            <button wire:click="delete({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>

                    </tr>

                @endforeach
                
            </tbody>
            
        </table>
        {{ $customers->links() }}
</div>