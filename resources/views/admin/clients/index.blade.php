@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>Clients</h1> 
        </div>
    </div>    
	
	<div class="row">
        <div class="col-md-8 col-md-offset-3">
		  <table id="clientsTable">
			<thead>
			  <tr>
				<th>Name</th>
				<th>Email</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($clients AS $client)
			  <tr>
				<td><a href="{{ route('clients.edit', ['id' => $client->id]) }}">{{ $client->name }}</a></td>
				<td>{{ $client->contact_email }}</td>
			  </tr>
			@endforeach
			</tbody>
		  </table>
        </div>
    </div>
</div>
@push('scripts')
    <script src="/js/clients.js"></script>
@endpush
@endsection
