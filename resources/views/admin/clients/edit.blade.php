@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>{{ $client->name }}</h1>
			<form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST" data-toggle="validator">
				{{ csrf_field() }}
			  <div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control"  name="name" value="{{ $client->name }}">
			  </div>
			  <div class="form-group">
				<label for="">Email address</label>
				<input type="email" class="form-control"  name="email" value="{{ $client->contact_email }}">
			  </div>			 
			  <div class="form-group">
				<label for="">Address 1</label>
				<input type="text" class="form-control"  name="address_1" value="{{ $client->address_1 }}">
			  </div>			 
			  <div class="form-group">
				<label for="">Address 2</label>
				<input type="text" class="form-control"  name="address_2" value="{{ $client->address_2 }}">
			  </div>			  
			  <div class="form-group">
				<label for="">City</label>
				<input type="text" class="form-control"  name="city" value="{{ $client->city }}">
			  </div>			  
			  <div class="form-group">
				<label for="">State</label>
				<input type="text" class="form-control"  name="state" value="{{ $client->state }}">
			  </div>			  
			  <div class="form-group">
				<label for="">Zip</label>
				<input type="text" class="form-control"  name="zip" value="{{ $client->zip }}">
			  </div>			  
			  <div class="form-group">
				<label for="">Phone</label>
				<input type="text" class="form-control"  name="phone" value="{{ $client->phone }}">
			  </div>			  
			  <div class="form-group">
				<label for="">Fax</label>
				<input type="text" class="form-control"  name="fax" value="{{ $client->fax }}">
			  </div>
				
				
			  <label for="">Active</label>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_yes" value="1" @if($client->isActive == 1) checked @endif>
					Yes
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_no" value="0" @if($client->isActive == 0) checked @endif>
					No
				  </label>
				</div>
				
				
				
			  <button type="submit" class="btn btn-default">Save</button>
			</form>

			
        </div>
    </div>    
</div>
@push('scripts')
    <script src="/js/clients.js"></script>
@endpush
@endsection