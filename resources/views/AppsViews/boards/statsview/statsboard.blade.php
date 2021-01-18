@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="">{{$project['libelle']}}</a> / <a href="#">{{$board['libelle']}}</a> / <a style="color:#546bc7">Stats</a></h1>
    
    <hr>

    <div class="container">

        <button class="btn btn-circle"> <i class="fas fa-ellipsis-v"></i></button>Indicateurs

        <section id="our-stats">
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-code fa-2x text-green"></i>
                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500">100</h2>
                        <p class="count-text ">Taches crées</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-percent fa-2x text-green"></i>
                        <h2 class="timer count-title count-number" data-to="1700" data-speed="1500">55%</h2>
                        <p class="count-text ">Avancement</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-user-friends fa-2x text-green"></i>
                        <h2 class="timer count-title count-number" data-to="11900" data-speed="1500">11 / 5</h2>
                        <p class="count-text ">Collaborateurs / teams</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-bug fa-2x text-green"></i>
                        <h2 class="timer count-title count-number" data-to="157" data-speed="1500">157</h2>
                        <p class="count-text ">Buggs traités (50%)</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <canvas id="statusChart" class="col-md-6" height="150px"></canvas>

            <canvas id="prioriteChart" class="col-md-6" height="150px"></canvas>
        </div>

        

    </div>
</div>
@stop


@section('addJS')
<script type="text/javascript" src="{{env('DIRLIB')}}chartjs/chart.js"></script>
<script type="text/javascript" src="{{ asset('js/Stats.js') }}"></script>
@stop
