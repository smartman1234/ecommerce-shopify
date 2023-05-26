
    @extends('layouts.main2')
    @push('title')
    <title>About Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')

   <x-NavBar></x-NavBar>

    <section class="section1">
        @foreach($infos as $info)
        <div class="div1">
            <h1 >
                {{$info["heading"]}}
            </h1>
            <p >
                {{$info["info"]}}
            </p>

        </div>
        @endforeach
        
    </section>

    <x-Foot />
    @endsection
