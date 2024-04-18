<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Projects')


@section('content')

    @include('projects.banner')
    <section id="main-container" class="main-container">
        <div class="container">

            @include('home.project-gallery')

        </div><!-- Conatiner end -->
    </section>

@endsection

