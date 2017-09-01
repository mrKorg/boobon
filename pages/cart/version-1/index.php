@extends('front.layouts.layout')

@section('title', $page->title)
@section('description', $page->description)
@section('keywords', $page->keywords)
@section('image', $page->social_image_url)

@section('modals')
    @parent
    @include('front.layouts.parts.modals.modal-offer')
@show

@section('content')

    @include('front.layouts.parts.pageHeader', ['title' => $page->title])
    <vue-horizontal-checkout></vue-horizontal-checkout>
@stop