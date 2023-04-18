@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <x-Component::card_custom color="cyan">
        <x-slot:header>填寫資料</x-slot:header>
        <x-slot:content>

        </x-slot:content>
    </x-Component::card_custom>

@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
