@extends('layout')

@section('title')
    {{$name}} - Adventurer Sports
@stop

@section('content')
    <h1>{{$name}}</h1>
    Description: {{$description}}
<hr>
Size: {{$size}}
<hr>
Image: {{$image}}
<hr>
<a href="/category/{{$category}}">Back to product category</a>
@stop