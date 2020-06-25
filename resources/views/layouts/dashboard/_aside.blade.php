<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-right image">
               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>


            <div class="pull-left info">
                <p> {{ Auth::user()->name }} </p>
            
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        /dashboard
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-th"></i><span>Dashboard</span></a></li>

                <li><a href="{{ route('clients.index') }}"><i class="fa fa-th"></i><span>Clients</span></a></li>

                <li><a href="{{ route('services.index') }}"><i class="fa fa-th"></i><span>Services</span></a></li>
            

                

           

            

            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </section>

</aside>

