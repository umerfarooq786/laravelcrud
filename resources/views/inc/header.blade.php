<!DOCTYPE html>

<html>
<head>
    <title> Laravel CRUD Application</title>
    {{--<link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">--}}

    <link rel="stylesheet" type ="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type ="text/css" href="{{ url('css/style.css') }}">

    <script type="text/javascript" src="{{ url('js/jquery-3.1.0.js') }}}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <style>
        .banner-bg-agileits {

            background-image:url({{url('images/g6.jpg')}}) no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            max-height: 400px;
        }
        </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Laravel Crud</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
            <li class="nav-item dropdown show">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Dropdown</a>
                <div class="dropdown-menu show" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            {{--<div class="dropdown">--}}
                {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
                    {{--<span class="caret"></span></button>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">HTML</a></li>--}}
                    {{--<li><a href="#">CSS</a></li>--}}
                    {{--<li><a href="#">JavaScript</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

    </ul>

</div>
</nav>

{{--<ul class="nav nav-tabs">--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link active" data-toggle="tab" href="#home">Home</a>--}}
    {{--</li>--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" data-toggle="tab" href="#profile">Profile</a>--}}
    {{--</li>--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
    {{--</li>--}}
    {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
        {{--<div class="dropdown-menu">--}}
            {{--<a class="dropdown-item" href="#">Action</a>--}}
            {{--<a class="dropdown-item" href="#">Another action</a>--}}
            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a class="dropdown-item" href="#">Separated link</a>--}}
        {{--</div>--}}
    {{--</li>--}}
{{--</ul>--}}
{{--<div id="myTabContent" class="tab-content">--}}
    {{--<div class="tab-pane fade show active" id="home">--}}
        {{--<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane fade" id="profile">--}}
        {{--<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane fade" id="dropdown1">--}}
        {{--<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane fade" id="dropdown2">--}}
        {{--<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>--}}
    {{--</div>--}}
{{--</div>--}}