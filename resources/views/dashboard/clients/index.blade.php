@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Clients</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> </a></li>
                <li class="active">Clients</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Clients <small></small></h3>

                    <form action="" method="get">

                        <div class="row">

                           

                            <div class="col-md-4">
                               
                                    <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> ADD client</a>
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($clients->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>Description</th>
                                <th>stats</th>
                                <th>phone</th>
                                <th>Datastrat</th>
                                <th>Dataend</th>
                                <th>service</th>
                                <th>operations</th>


                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($clients as $index=>$client)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $client->title}}</td>
                                    <td>{{ $client->description}}</td>
                                    <td>{{ $client->stats}}</td>
                                    <td>{{ $client->phone}}</td>
                                    <td>{{ $client->datastrat}}</td>
                                    <td>{{ $client->dataend}}</td>
<td><a href="{{ route('services.index', ['client_id' => $client->id]) }}" class="btn btn-info btn-sm">services user</a></td>
                                    <td>                                    
                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edite</a>
                                        
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                            </form><!-- end of form -->
                                            
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{ $clients->appends(request()->query())->links() }}
                        
                    @else
                        
                        <h2>Not clients found </h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection