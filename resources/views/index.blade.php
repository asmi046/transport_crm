@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
 <section id="global_app">
    <div class="container">
        <h1>Тест входящих сообщений</h1>
        <vats-mesages></vats-mesagess>
    </div>
 </section>

@endsection

