@extends('layout.master')
@section('page-title', 'Welcome page')

@section('page-header', 'Welcome')

@section('content')

    <p>This is the welcome page content.</p>

    <p>Cards</p>

    @foreach($cards as $card)
    	<p>{{ $card->name }}</p>
    @endforeach
@stop