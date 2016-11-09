@extends('layouts.app')


@section('content')
    <h1>hello from the view of contact</h1>

        @if(count($people))
            <ul>
           @foreach( $people as $person)
               <li>{{ $person }}</li>
            @endforeach
            </ul>
        @endif

@stop


@section('footer')
    <script>alert('hello')</script>

@stop
