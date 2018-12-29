<!-- Extend the layout -->
@extends('layouts.algemeen')

<!-- Assign page title -->
@section('title', 'Personalia')

@section('header')

@endsection

<!-- Content of page -->
@section('content')

<div class="wrapper wrapper-content">
    <div

    {{ $id->voornaam }}<br>
    {{ $id->achternaam }}<br>
    {{ $id->adres }}<br>
    {{ $id->burgerlijkestaat }}<br>
    <br>
    {{ $id->email_intern }}<br>
    {{ $id->login_naam }}<br>
    <br>
    {{ $id->geboortedag }}<br>
    {{ $id->geboorteplaats }}<br>
    {{ $id->nationaliteit }}<br>
    {{ $id->geslacht }}<br>
    <br>    
    {{ $id->rijbewijs }}<br>
    {{ $id->sedula }}<br>
    {{ $id->telefoon_mobile }}<br>
    <br>
    <a href="../perslijst">Hoofd Menu</a>
    
</div>

@endsection

@section('scripts')
<!-- Script -->
@endsection