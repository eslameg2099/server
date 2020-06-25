@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>DAshborad</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>DAshborad</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $Clients }}</h3>

                            <p>Clients</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="{{ route('clients.index') }}" class="small-box-footer">Show<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$services}}</h3>

                            <p>Services</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('services.index') }}" class="small-box-footer">Show <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                

            </div><!-- end of row -->

            <div class="box box-solid">

                <div class="box-header">
                    <h3 class="box-title">Sales Graph</h3>
                </div>
                <div class="box-body border-radius-none">
                    <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div>
                <!-- /.box-body -->
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
