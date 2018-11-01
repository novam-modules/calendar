@extends('layouts.master')
@section('styles')
@parent
<link rel="stylesheet" href="{{ mix('css/calendar.css') }}">
@endsection
@section('layout')
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Calendar {{ $title ?? '' }}</h2>
        </div>
    </header>
    <section id="calendar">
        @yield('content')
    </section>
@endsection
@section('scripts')
@parent
<script src="{{ mix('js/calendar.js') }}"></script>
@endsection
