@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
			<h1>Projects</h1> 
        </div>
    </div>    
	
	<div class="row">
        <div class="col-md-8 col-md-offset-3">
		  <table id="projectsTable">
			<thead>
			  <tr>
				<th>Project</th>
				<th>Last Update</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($projects AS $project)
			  <tr>
				<td>{{ $project->name }}</td>
				<td>{{ $project->last_updated }}</td>
			  </tr>
			@endforeach
			</tbody>
		  </table>
        </div>
    </div>
</div>
@push('scripts')
    <script src="/js/projects.js"></script>
@endpush
@endsection
