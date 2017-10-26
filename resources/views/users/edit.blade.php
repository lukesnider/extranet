@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>{{ $user->name }}</h1>
			<form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
				{{ csrf_field() }}
			  <div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" value="{{ $user->name }}" name="name">
			  </div>
			  <div class="form-group">
				<label for="">Email address</label>
				<input type="email" class="form-control" value="{{ $user->email }}" name="email">
			  </div>
			  <label for="">Roles</label>
				<select multiple class="form-control" name="roles[]">
				  @foreach($roles AS $role)
					<option value="{{ $role->id }}" @if($user->roles->contains($role->id)) selected @endif>{{ $role->role }}</option>
				  @endforeach
				</select>
				
				
				
			  <label for="">Active</label>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_yes" value="1" @if($user->isActive == 1) checked @endif >
					Yes
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="active" id="active_no" value="0" @if($user->isActive == 0) checked @endif>
					No
				  </label>
				</div>
				
				
				
			  <button type="submit" class="btn btn-default">Save</button>
			</form>

			
        </div>
    </div>    
</div>
@endsection