@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Лист бариста </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div><a class="" href="{{ url('/') }}">
                        Машина №1
                    </a></div>
                    <ul>
                        <li>marshmallowchino</li>















                        <li>espresso</li>
                        <li>macchiato</li>
                        <li>hot_chocolate</li>
                        <li>doppio</li>
                        <li>americano</li>
                        <li>cappuchino</li>
                        <li>latte</li>
                        <li>cocoa</li>
                        <li>mocha</li>
                        <li>fruit_milk</li>
                        <li>tea</li>
                        <li>add_milk</li>
                        <li>add_toping</li>
                        <li>add_marshmallow</li>
                        <li>kroissant</li>
                    </ul>
                    <div><a class="" href="{{ url('/') }}">
                        Машина №2
                    </a> </div>
                   <div><a class="" href="{{ url('/') }}">
                        Машина №3
                    </a> </div>
                   <div><a class="" href="{{ url('/') }}">
                        Машина №4
                    </a> </div>
                    <div><a class="" href="{{ url('/') }}">
                        Машина №5
                    </a> </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
