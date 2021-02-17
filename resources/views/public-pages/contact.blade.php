@extends('layout.master')
@section('page-title', 'Contact page')

@section('page-header', 'Contact us')

@section('content')

    <p>This is the Contact page content.</p>

    <p>Please leave your message</p>
    
   <form action="{{ url('contact-us') }}" method="post">
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
            <button type="submit" class="bg-blue-400 px-2 py-1 rounded-full text-white">Send your message </button>
        </div>
   </form>

@stop