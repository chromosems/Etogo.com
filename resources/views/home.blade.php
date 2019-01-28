@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
        <div class="col-md-12">
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

                            <div class="jumbotron">
                                <h1>Want to sell Your House..?</h1>
                                <p>Then kindly click on the create flyer button to get your started
                                    by creating a flyer containing information of the house,</p>
                            </div>

                            <a href="flyer/create" class="btn btn-primary">Create A flyer </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}
@endsection
