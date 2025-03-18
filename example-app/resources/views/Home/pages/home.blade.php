@extends('home.index')
@section('body')
    @include('Home.components.Hero_Section')

    @include('Home.components.about')

    @include('Home.components.team')

    @include('Home.components.business')

    @include('Home.components.working')

    @include('Home.components.testimonial')

    @include('Home.components.blogs')
@endsection
