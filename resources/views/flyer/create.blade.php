@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Selling Your House</h1>
        <br>

        <div class="card">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br/>
                @endif
                <form action="{{route('flyer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" name="street">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" name="zip" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="country">Country:</label>
                                <select id="country" name="country" class="form-control">
                                    @foreach (App\Http\countries\Country::all() as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="state" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Sale Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="description" id="description" class="form-control"
                                          row="100"></textarea>
                            </div>
                            <button type="submit " class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
