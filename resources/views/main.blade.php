@extends('layouts.app')

@section('content')
<div class="main">
    <div class="container-fluid content">
        <div class="col-md-2 bg-danger">
            <h3>Категории:</h3>
            <div class="list-group">
                <button class="list-group-item list-group-item-action">Категория1</button>
                <button class="list-group-item list-group-item-action">Категория1</button>
                <button class="list-group-item list-group-item-action">Категория1</button>
                <button class="list-group-item list-group-item-action">Категория1</button>
                <button class="list-group-item list-group-item-action">Категория1</button>
                <button class="list-group-item list-group-item-action">Категория1</button>
            </div>
        </div>
        <div class="col-md-8 bg-info">
            <h3>Товары: </h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/2kp3scovq0owgk48844ww4scg.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Товар1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="col-md-2 bg-success">3</div>
    </div>
</div>

@endsection
