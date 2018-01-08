@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                    @can('dashboard_access')
                        You can access admin dashboard
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
