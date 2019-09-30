@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
<div class="card">
        <div class="card-header">Dashboard</div>
        <div>
                @if ($user->is_admin == '0')
                <a href="/home" class="btn btn-primary"> Go back</a>
                @else
                <a href="/admin" class="btn btn-primary"> Go back</a>

                @endif
                       
                        <hr>

        </div>
        
<div class="container">
                

  <b> name  </b>   : {{$user->name}}
  <hr>
  <b> email </b>   : {{$user->email}}
  <hr>
  <small>
        <b> created at</b>: {{$user->created_at}}
  </small>
 
  <hr>
  <small>
        <b> updated at</b>: {{$user->updated_at}}
  </small>
  

   <hr>
    
</div>   
{{ Form::open(['method' => 'GET', 'route' => ['user.edit', $user->id]]) }}
{{ Form::submit('Edit details', ['class' => 'btn btn-primary btn-sm', 'style'=>'float:right;margin-right:25px']) }}
{{ Form::close() }}
</div> 
        </div>
</div>

@endsection