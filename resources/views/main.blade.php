@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3 text-light" style="background-color: #2F2415;">
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
                <div class="col-md-9" style="overflow: auto; height: 800px; background-color: #E9DFD3;">
                    <h3>Товары: </h3>
                    <div class="row">
                        <?php for ($i=0;$i<8;$i++){
                            ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="img-block" style="height: 200px; text-align: center">
                                        <img class="h-100 w-auto" src="{{asset('images/2kp3scovq0owgk48844ww4scg.jpg')}}" alt="">
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Товар1</h5>
                                        <p class="card-text">Price$</p>
                                        <button class="btn btn-primary w-100">Подробнее</button>
                                    </div>
                                </div>
                            </div>
<?php
                        }?>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2" style="background-color: #342B1E;">3</div>
    </div>
</div>

@endsection
