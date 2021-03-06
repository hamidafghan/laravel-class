@extends('layout.master')
@section('page-title', 'Contact page')

@section('page-header', 'Contact us')

@section('content')

    <p>This is the Contact page content.</p>

    <p>Please leave your message</p>
    
   <form action="{{ url('contact-us') }}" method="post" enctype="multipart/form-data" id="contact-us-form">
        @csrf
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" value="{{@old('email')}}" name="email" class="border-2 border-gray-500">
        </div>
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <div>
            <label for="">DoB</label>
            <br>
            <input type="text" value="{{@old('dob')}}" name="dob" class="border-2 border-gray-500">
        </div>
        @error('dob')
            <p class="text-red-500">{{ $message }}</p>
        @enderror


        <div>
            <label for="">You message</label>
            <br>
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-500">{{@old('message')}}</textarea>
        </div>
        @error('message')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div>
            <label>Your attatchment</label>
            <br>
            <input type="file" name="image">
        </div>
        @error('image')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div>
            <label for="">Remember Me</label>
            <br>
            <input type="checkbox" checked="checked" name="remember">
        </div>

        <div>
            <button type="submit" class="bg-blue-400 px-2 py-1 rounded-full text-white">Send your message </button>
        </div>
   </form>
@stop

@section('page-level-js')
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ContactUsRequest', '#contact-us-form') !!}

@stop