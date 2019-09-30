@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome Admin!
                    <div class="container">

    
                            <hr>
                            {{ Form::open(['method' => 'GET', 'route' => ['user.show',Auth::id()]]) }}
                            {{ Form::submit('view profile', ['class' => 'btn btn-primary btn-sm']) }}
                            {{ Form::close() }}
                            {{ Form::open(['method' => 'GET', 'route' => ['admin.users']]) }}
                            {{ Form::submit('List users', ['class' => 'btn btn-primary btn-sm', 'style' => 'margin-top:10px']) }}
                            {{ Form::close() }}





                            </div>

                    </div>

                </div>


            </div>


        </div>


    </div>

</div>



@endsection
