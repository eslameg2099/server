@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>services</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> services</a></li>
              
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">ADD</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>services</label>
                            <select name="client_id" class="form-control">
                                <option value=""> Not Select </option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}" >{{ $client->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                        
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" >
                            </div>

                            <div class="form-group">
                            <label>type</label>
                            <div class="nav-tabs-custom">

                                @php
                                    
                                    $maps = ['facebook', 'youtube', 'twitter'];
                                @endphp

                               

                                <div class="tab-content">

                                    


                                            @foreach ($maps as $map)
                                                <label><input type="checkbox" name="type[]" value="{{ $map }}">{{$map}} </label>
                                            @endforeach

                                        </div>


                                </div><!-- end of tab content -->
                                
                            </div><!-- end of nav tabs -->
                            
                        </div>

                            
                             <div class="form-group">
                                <label>link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                       

                       

                        <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control ckeditor"> {{ old( 'description') }}</textarea>
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> ADD</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection