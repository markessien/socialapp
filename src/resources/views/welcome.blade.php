<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Timbu Social</title>

        <meta name="description" Content="" />
		<meta name="keywords" Content="" />
		<!-- Twitter card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="" />
		<!-- Open graph -->
        <meta property="og:site_name" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png"/>
        <!-- Favicon -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
@extends('components.header')
<body>

@section('content')
<div class="content">
    <div class="title m-b-md">
        Timbu Social
    </div>
    <div class="content">
        <div class="m-b-md">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam atque dolor maxime laborum aliquam nesciunt, quia dignissimos labore provident esse. Dignissimos repellat tenetur quasi molestiae perferendis, soluta modi consequuntur. Non.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis, non atque aut rem alias voluptatem possimus minima obcaecati. Officia nisi in incidunt qui ipsam commodi, iure harum nesciunt quibusdam.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tempora quos, saepe, aspernatur impedit in maiores aperiam perferendis dicta sint, perspiciatis blanditiis. Voluptas nesciunt deleniti iure, amet nisi iusto rerum?
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut quo repellendus aliquid magni ex quaerat repellat et odio inventore ducimus ad praesentium optio consequuntur, voluptatem facilis earum quia ipsum quae.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus repudiandae omnis totam iusto vero, fugit odit delectus aliquid at veritatis magnam cumque! Eius dolor dolores laboriosam quas optio, voluptas voluptate!
    </p>
</div>
</div>


</div>

@include('components.footer')

</body>
</html>


@endsection
