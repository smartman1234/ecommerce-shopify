
@extends('layouts.main2')
    @push('title')
    <title>Landing Page</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/style.css">

    @endpush

    @section('main-section')

    <div class="Section_top">
        <div class="content">
            <h1>Ecommerce Shopify</h1>
            <a href="/hompage">Explore Us</a>
            <br>
            <br>
            <a href="/login">Continue as Admin</a>
        </div>
    </div>

    @endsection
