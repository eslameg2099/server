@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Edite Clients</h1>

            <ol class="breadcrumb">
               <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{ route('clients.index') }}">Clients</a></li>
                <li class="active">Edite</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">EDite</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('clients.update', $client->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" value="{{ $client->title }}">
                        </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $client->description }}" >
                            </div>

                        <div class="form-group">
                            <label>Stats</label>
                                <input type="text" name="stats" class="form-control"  value="{{ $client->stats }}" >
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control"  value="{{ $client->phone }}">
                        </div>

                            <div class="form-group">
                                <label>Datastrat</label>
                                <input type="text" name="datastrat" class="form-control"  value="{{ $client->datastrat }}" >
                            </div>

                        <div class="form-group">
                            <label>Dataend</label>
                                <input type="text" name="dataend" class="form-control"  value="{{ $client->dataend }}" >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Edite</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection