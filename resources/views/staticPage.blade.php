@extends('layout')

@section('title')
    {{$title}} - Adventurer Sports
@stop

@section('content')
    <h1>{{$title}}</h1>
    {!! $text !!}
@stop