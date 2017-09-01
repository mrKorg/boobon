@extends('front.layouts.layout')
@section('title','welcome')
@section('javascript')
    @parent

    <script>
        new Vue({ });
    </script>
@stop

@section('content')

    <a href="#modal-offer" class="open-popup-link">modal-offer</a><br>
    @include('front.layouts.parts.modals.modal-offer')
    <a href="#modal-addReview" class="open-popup-link">modal-addReview</a><br>
    @include('front.layouts.parts.modals.modal-addReview')
    <a href="#modal-payment-shipment" class="open-popup-link">modal-payment-shipment</a><br>
    @include('front.layouts.parts.modals.modal-payment-shipment')
    <a href="#modal-payment-shipment-more" class="open-popup-link">modal-payment-shipment-more</a><br>
    @include('front.layouts.parts.modals.modal-payment-shipment-more')
    <a href="#modal-message" class="open-popup-link">modal-message</a><br>
    @include('front.layouts.parts.modals.modal-message')
    <a href="#modal-login" class="open-popup-link">modal-login</a><br>
    @include('front.layouts.parts.modals.modal-login')
    <a href="#modal-partner" class="open-popup-link">modal-partner</a><br>
    @include('front.layouts.parts.modals.modal-partner')
    <a href="#modal-resetPassword" class="open-popup-link">modal-resetPassword</a><br>
    @include('front.layouts.parts.modals.modal-resetPassword')
    <vue-add-review></vue-add-review>

@stop