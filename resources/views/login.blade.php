<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event | Login </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<style>
    /*
    body{
        color: #fff;
        display: flex;
        position: relative;
        justify-content: space-around;
        background: url({{URL::to('img/bg.jpg')}}) no-repeat center;
        background-size: cover;
        height: 100vh;
    }*/
</style>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">
    <div class="row">
        @include('includes.validator')
        <div class="col-md-6">
            <h2 class="font-bold" >Event App</h2>
            <p >
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <form class="m-t" role="form" action="{{url('/login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Connexion</button>

                    <a href="#">
                        <small>Forgot password?</small>
                    </a>
                </form>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright ChapChap
        </div>
        <div class="col-md-6 text-right">
            <small>© 2019</small>
        </div>
    </div>
</div>

</body>

</html>

