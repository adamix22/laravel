@extends('layouts.app')

@section('content')
<div class="container" style="">
        <h1> Change User details </h1>
        <hr>
</div>

{{ Form::open(['method' => 'PATCH', 'route' => ['user.update', $user->id]]) }}
<div class="container">
 <b> Name :</b>   {{ Form::text('name') }}
 <hr>
 <b> Email :</b>   {{ Form::text('email')}}
 <hr>
 <b> Password :</b>   {{ Form::text('password')}}
 <hr>

 {{ Form::submit('Update details', ['class' => 'btn btn-primary btn-sm']) }}
 {{ Form::close() }}


</div>


@endsection