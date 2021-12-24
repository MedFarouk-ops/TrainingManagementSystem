<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <div class="btn-group">
                    <div class="action_btn">
                    <div class="dropdown">
                        <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Login as ...
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin</a>
                            <a class="dropdown-item" href="{{ route('formateur.dashboard') }}">Formateur</a>
                            <a class="dropdown-item" href="{{ route('login') }}">Candidat</a>
                        </div>
                    </div>
                        @if (Route::has('register'))
                        <div class="dropdown">
                        <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Register as ...
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                            <a class="dropdown-item" href="{{ route('formateur.register') }}">Formateur</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Candidat</a>
                        </div>
                        </div>
                        </div>
                        </div>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel">
                            @component('components.who')
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
