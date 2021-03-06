@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>New Client</h1>
			<form id="new_user_form" action="{{ route('clients.store') }}" method="POST" data-toggle="validator">
				{{ csrf_field() }}
			  <div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" value="" name="name" required>
			  </div>
			  <div class="form-group">
				<label for="">Email address</label>
				<input type="email" class="form-control" value="" name="email" required>
			  </div>			 
			  <div class="form-group">
				<label for="">Address 1</label>
				<input type="text" class="form-control" value="" name="address_1" >
			  </div>			 
			  <div class="form-group">
				<label for="">Address 2</label>
				<input type="text" class="form-control" value="" name="address_2" >
			  </div>			  
			  <div class="form-group">
				<label for="">City</label>
				<input type="text" class="form-control" value="" name="city" >
			  </div>			  
			  <div class="form-group">
				<label for="">State</label>
				<input type="text" class="form-control" value="" name="state" >
			  </div>			  
			  <div class="form-group">
				<label for="">Zip</label>
				<input type="text" class="form-control" value="" name="zip" >
			  </div>			  
			  <div class="form-group">
				<label for="">Phone</label>
				<input type="text" class="form-control" value="" name="phone" >
			  </div>			  
			  <div class="form-group">
				<label for="">Fax</label>
				<input type="text" class="form-control" value="" name="fax" >
			  </div>
				
				
			  <label for="">Active</label>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_yes" value="1">
					Yes
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_no" value="0">
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