@extends('layouts.master')

@section('content')

	<h1>User "{{ $user->name }}"</h1>

	<hr>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="row">
				<div class="col-sm-6">
					<p><b>Name:</b></p>
				</div>
				<div class="col-sm-6">
					<p>{{ $resource->name or '-' }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p><b>Email:</b></p>
				</div>
				<div class="col-sm-6">
					<p>{{ $resource->email or '-' }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2 col-sm-offset-3 col-xs-4">
			<a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-block" title="Edit this user">
				<i class="fa fa-pencil fa-fw"></i>
				<span class="hidden-xs hidden-sm">Edit</span>
			</a>
		</div>
		<div class="col-sm-2 col-xs-4">
			<a href="{{ route('user.roles.edit', $user->id) }}" class="btn btn-primary btn-block" title="Roles for this user">
				<i class="fa fa-users fa-fw"></i>
				<span class="hidden-xs hidden-sm">Roles</span>
			</a>
		</div>
		<div class="col-sm-2 col-xs-4">
			<a href="{{ route('user.index') }}" class="btn btn-default btn-block">
				<i class="fa fa-arrow-left fa-fw"></i>
				<span class="hidden-xs hidden-sm">Back</span>
			</a>
		</div>
	</div>

@endsection
