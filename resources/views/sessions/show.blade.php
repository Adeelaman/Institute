@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as a Trainer !') }}

                    <br> <a href="/session/create" style="margin: 4px; "> Start a Session</a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding: 30px;">
                <!-- <div class="card-header"></div> -->
                @if($records==true)

                    <table class="card-body table table-bordered">
                        <h4>Your Sessions go here</h4>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Department</th>
                            <th>Objective</th>
                            <th>Status</th>
                            <th>Activity</th>
                        </tr>

                     @foreach($records as $record)

                     <tr>
                         <td>{{$loop->index + 1}}</td>
                         <td>{{ $record->type }}</td>
                         <td>{{ $record->department }}</td>
                         <td>{{ $record->objective }}</td>
                         <td>{{ $record->status }}</td>
                         <td>{{ $record->activity }}</td>
                     </tr>

                     @endforeach

                    </table>


                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
