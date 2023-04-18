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
            <div class="row">
                @foreach(['姓名','通訊地址2324324'] as $label_name)
                    <x-Component::form_input_custom col="12" field="name" type="file" prepend="true" append="true" required="true">
                        <x-slot:label_name>{{ $label_name }}</x-slot:label_name>
                        <x-slot:prepend_text>text</x-slot:prepend_text>
                        <x-slot:append_text><input type="checkbox"/></x-slot:append_text>
                    </x-Component::form_input_custom>
                @endforeach
            </div>
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
