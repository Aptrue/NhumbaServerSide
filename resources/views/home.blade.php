@section('plugins.Chartjs', true)
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nhumba Dashboard</h1>
@stop

@section('content')
      <div>
             <div class="row">
                <div class="col">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Feedback</span>
                          <span class="info-box-number">1,410</span>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="far fa-flag"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Imoveis</span>
                          <span class="info-box-number">{{ $realstate }}</span>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-person"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Correctores</span>
                          <span class="info-box-number">1,410</span>
                        </div>
                      </div>
                </div>
             </div>
             <div class="row">

                  <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                  <div class=""></div></div><div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                  </div>
                  </div>
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 364px;" width="728" height="500" class="chartjs-render-monitor"></canvas>
             </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
