@extends('front.layouts.layout')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)
@section('image', $page->social_image_url)


@section('content')
    <vue-vertical-checkout></vue-vertical-checkout>
@stop