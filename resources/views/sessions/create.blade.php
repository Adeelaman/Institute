@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Start a Session</div>

                <div class="card-body">
                    <form method="POST" action="/session">
                        @csrf

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Session Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objective" class="col-md-4 col-form-label text-md-right">Objective</label>

                            <div class="col-md-6">
                                <input id="objective" type="text" class="form-control @error('objective') is-invalid @enderror" name="objective" required autocomplete="objective">

                                @error('objective')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" required autocomplete="status">

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="activity" class="col-md-4 col-form-label text-md-right">Activity</label>

                            <div class="col-md-6">
                                <input id="activity" type="text" class="form-control @error('activity') is-invalid @enderror" name="activity" required autocomplete="activity">

                                @error('activity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Start
                                </button>
                            </div>
                           
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 offset-4"><a class="" href="/session/{id}">Exit</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection