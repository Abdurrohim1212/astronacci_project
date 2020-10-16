<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>
        Astronacci
    </title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('WelcomePage/index.css')}}" />
</head>

<body>
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-md">
                    <div class="navbar-brand">ASTRONACCI</div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 offset-md-2 info">

                <p class="text-center">
                    This is What You're Looking For !! Come and Join US
                </p>
                <a href="{{ route('registration') }}" class="btn btn-md text-center">Sign Up Now</a>
                <br><br>
                <a href="{{ route('login') }}" class="btn btn-md text-center">Already Have Membership</a>
            </div>
        </div>
    </div>
</body>

</html>