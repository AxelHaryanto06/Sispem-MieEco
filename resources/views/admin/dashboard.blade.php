@extends('layouts.master')

@section('title')

@endsection

@section('content')
    <section class="content-header">
        <h1>
        Dashboard        
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                <h3>{{ $total_pesanan }}</h3>
    
                <p>Total Pesanan</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h3>{{ $total_menu }}</h3>
    
                <p>Total Menu</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <h3>{{ $total_pengguna }}</h3>
    
                <p>Jumlah Pengguna</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
            </div>
            <!-- ./col -->
            {{-- <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                <h3>65</h3>
    
                <p>Unique Visitors</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
            </div> --}}
            <!-- ./col -->
        </div>
    </section>
@endsection