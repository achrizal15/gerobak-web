@extends('layout.public.app')
@section('styles')
    @vite('resources/css/app.scss')
@endsection
@section('content')
    @include('public._sections.banner')

    @include('public._sections.about')

    @include('public._sections.service')

    @include('public._sections.pricing')

    @include('public._sections.testimoni')

    @include('public._sections.counter')

    @include('public._sections.faq')

    @include('public._sections.work_process_area')
@endsection
