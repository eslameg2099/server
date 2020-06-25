@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Service</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> </a></li>
                <li class="active">Services</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px"> Services <small></small></h3>

                    <form action="" method="get">

                        <div class="row">

                           

                            <div class="col-md-4">
                               
                                    <a href="{{ route('services.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> ADD Service</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($services->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>type</th>
                                <th>client</th>
                                <th>link</th>
                                <th>Description</th>
                                <th>operations</th>

                                


                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($services as $index=>$service)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $service->title}}</td>
                                    <td>{{ $service->type}}</td>
                                    <td>{{ $service->client->title}}</td>
                                    <td>{{ $service->link}}</td>
                                    <td>{!! $service->description !!}</td>
                                    <td>
                                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edite</a>
                                        
                                            <form action="{{ route('services.destroy', $service->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                            </form><!-- end of form -->
                                            
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{ $services->appends(request()->query())->links() }}
                        
                    @else
                        
                        <h2>Not services found </h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection