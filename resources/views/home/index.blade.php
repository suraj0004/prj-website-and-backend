<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Home')


@section('content')

@include('home.banner')

@include('home.call-to-action')

@include('home.about-us')


@include('home.facts')


@include('home.what-we-do')

@include('home.project-gallery')

@include('home.testimonials')

@include('home.newsletter')

@include('home.news-blog')
@endsection
