@extends('admin.adminheader')


@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
<ul>
	@foreach($users as $user)
     <li>{{ $user->name }} ({{ $user->email }}) . {{ '|' }} <button><a href="">Delete</a></button></li>
	@endforeach
</ul>
@endsection    

