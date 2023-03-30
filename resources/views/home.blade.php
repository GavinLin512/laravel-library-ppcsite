@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card card-cyan">
        <div class="card-header">測試卡片</div>
        <div class="card-body">
            <div class="row">
                @foreach(['姓名','通訊地址'] as $label_name)
                    <x-Component::form_input_col6 field="name">
                        <x-slot:label_name>{{ $label_name }}</x-slot:label_name>
                    </x-Component::form_input_col6>
                @endforeach
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
