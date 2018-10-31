@extends('layouts.master')
@section('styles')
@parent
<link rel="stylesheet" href="{{ mix('css/calendar.css') }}">
@endsection
@section('layout')
    <main id="calendar">
        @yield('content')
    </main>
@endsection
@section('scripts')
@parent
<script src="{{ mix('js/calendar.js') }}"></script>
@endsection
