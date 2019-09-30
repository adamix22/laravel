@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/admin" class="btn btn-primary"> Go back</a>

        <h1>User(s)</h1>
</div>

@if (count($users) > 0)

@foreach ($users as $user)
<div class="container">


        <ul class="list-group">
       <li class="list-group-item">

                 <div style="float:right;margin-top:25px">
                        <td>
                                {{ Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $user->id]]) }}
                                {{ Form::submit('Delete this user', ['class' => 'btn btn-danger btn-sm']) }}
                                {{ Form::close() }}
                                </td>
                
                           </div>
                        <h3>
                                {{$user->name}}
                        </h3>
                
                
                            <dd> {{$user->email}}</dd>
                        <small> created at {{$user->created_at}}</small>
                
                
                    </li>
                 </ul>
                
                </div>
                
                
                @endforeach
                
                @else
                <div class="container">
                        <h3>No Users</h3>
                    </div>
            

@endif

@endsection
