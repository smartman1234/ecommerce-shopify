
    @extends('layouts.main2')
    @push('title')
    <title>Contact Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')
    <x-Navbar />
    <section class="section1">
        <div class="div1">
            @foreach($infos as $info)

            <h1 >
                {{$info["heading"]}}
            </h1>
            <p >
                {{$info["info"]}}
            </p>
            @endforeach
        </div>
        
    </section>
    <x-Foot />
    @endsection
