@extends('layout.master')
@section('page-title', 'Contact page')

@section('page-header', 'Contact us')

@section('content')

    <p>This is the Contact page content.</p>

    <p>Please leave your message</p>

    <img src="{{ asset('contact-files/57pdphF8Z8jVAWuy.png')}}" class="h-32 w-32">
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="{{ url('contact-us') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" name="email" class="border-2 border-gray-500">
        </div>

        <div>
            <label for="">You message</label>
            <br>
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-500"></textarea>
        </div>

        <div>
            <label>Your attatchment</label>
            <br>
            <input type="file" name="image">
        </div>

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