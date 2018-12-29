@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Welkom bij {{ config('app.name') }}
                            </h1>
                            <small>
                                Toegang alleen voor bevoegd beruikers.
                            </small>
                        </div>
                        <div class="text-center m-t-lg">
                            <a href="/login">Gebruikers</a> | <a href="{{ route('admin-login') }}">Beheer</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection
