<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event | Dashboard </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{session('speudo')}}</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Deconnexion</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li>
                    <a href="{{route('event')}}"><i class="fa fa-beer"></i> <span class="nav-label">Evenement </span></a>
                </li>
                <li>
                    <a href="{{route('category')}}"><i class="fa fa-list-alt"></i> <span class="nav-label">Categorie</span></a>
                </li>
                <li>
                    <a href="{{route('booking')}}"><i class="fa fa-universal-access"></i> <span class="nav-label">Reservation</span>  </a>
                </li>
                <li>
                    <a href="{{route('users')}}"><i class="fa fa-users"></i> <span class="nav-label">Utilisateurs</span>  </a>
                </li>
                <li>
                    <a href="{{route('admin')}}"><i class="fa fa-user"></i> <span class="nav-label">Administrateur</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="fa fa-sign-out"></i> Deconnexion
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')
        <div class="footer">
            <div>
                <strong>Copyright</strong> ChapChap &copy; 2019
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<!-- FooTable -->
<script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>

<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>
</body>
</html>

