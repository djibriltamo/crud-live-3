<div class="card offset-3 col-6">

    <h5 class="card-header">List of customers</h5>

    <div class="card-body">
      <h5 class="card-title">{{ $customer->name}}</h5>
      <p class="card-text">{{ $customer->email}}</p>
      <p class="card-text">{{ $customer->phone}}</p>

      <a  wire;navigate href="/customers" class="btn btn-primary">Go Back</a>
    </div>

</div>