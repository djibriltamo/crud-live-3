<div class="card offset-3 col-6">

    <div class="card-header">
      Edit Customer
    </div>

    <div class="card-body">

        <form wire:submit.live="update">

            <div class="mb-3">
                <label for="name" class="form-label">Name of the customer</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" wire:model.live="name" autocomplete="off">
                @error('name')
                    <p class="text text-danger">{{ $message}}</p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="name" id="email" aria-describedby="email" wire:model.live="email" autocomplete="off">
              @error('email')
                <p class="text text-danger">{{ $message}}</p>
              @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="name" name="phone" aria-describedby="phone" wire:model.live="phone" autocomplete="off">
                @error('phone')
                    <p class="text text-danger">{{ $message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Edit</button>
            <button wire:navigate href="/customers" type="submit" class="btn btn-secondary btn-sm">View List</button>

          </form>

    </div>

</div>