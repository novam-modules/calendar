@extends('layouts.admin')
@section('head')
    <title>Calendar {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/calendar.css') }}">
@endsection
@section('layout')
<div id="calendar" class="calendar">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/calendar.js') }}"></script>
@endsection
