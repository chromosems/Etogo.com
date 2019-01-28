@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-3">

                        <h1>{{$flyer->street}}</h1>
                        <h2>${{!! number_format( $flyer->price)}}</h2>
                        {{$flyer->description}}
                    </div>
                    <div class="col-sm-9">
                        @foreach ($flyer->photos as $photo)
                            <img src="{{$photo->path}}" alt="">
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <h2>Drop image Here</h2>
        <form id="addPhotosForm" action="/{{$flyer->zip}}/{{$flyer->street}}/photos" method="POST" class="dropzone">
            @csrf
        </form>

    </div>
@endsection

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

    <script>
        /**
         * file name validation on submiting usintg the form*/
        Dropzone.options.addPhotosForm = {
            paraName: 'photo',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        }
    </script>

@endsection
