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
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion-bag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Pesanan</span>
                    <span class="info-box-number">{{ $total_pesanan }}</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Pengguna</span>
                    <span class="info-box-number">{{ $total_pengguna }}</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-bookmark"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Menu</span>
                    <span class="info-box-number">{{ $total_menu }}</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>           
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Layanan</span>
                    <span class="info-box-number">{{ $total_layanan }}</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
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