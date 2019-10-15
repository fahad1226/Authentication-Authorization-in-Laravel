@include('backend.includes.header')

<body id="page-top">

@include('backend.includes.navbar')

<div id="wrapper">

@include('backend.includes.sidebar')


@include('backend.includes.dashboard')


@yield('content')

@include('backend.includes.footer')