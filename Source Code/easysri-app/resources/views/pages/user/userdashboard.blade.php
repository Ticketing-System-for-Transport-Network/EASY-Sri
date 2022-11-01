@extends('layouts.home')

@section('content')
    <header>
        <a href="{{ route('cardview') }}" class="logo">Easy Sri</a>
        <div class="logo-img">
            <img src="logo.png" alt="logos">
        </div>
        <div class="righSide">
            <div class="btns dayNight">
                <ion-icon name="moon-outline"></ion-icon>
                <ion-icon name="sunny-outline"></ion-icon>
            </div>
            <div class="btns menuToggle">
                <ion-icon name="grid-outline"></ion-icon>
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
    </header>

    <section class="main">
        <video src="video/Video.mp4" autoplay loop muted=""></video>
        <img src="mask.jpg" class="mask">
        <h2>Welcome</h2>
        <p class="copyrightTexts">&copy Easy Sri - 2022</p>
        <ul class="social">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
    </section>

    <!--Sidebar Navigation-->
    <ul class="navigation">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('userRegandTopup') }}">Apply Easy-Sri</a></li>
        <li><a href="{{ route('userpurchase') }}">Top-UP</a></li>
        <li><a href="{{ route('useruserschedule') }}">Schedule</a></li>
        <li><a href="{{ route('userfare') }}">Fares</a></li>
        @if (Auth::user())
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <li class="nav-item">
                    <x-jet-dropdown-link href="{{ route('logout') }}"
                        @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </li>
            </form>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    </ul>
@endsection

@push('css')

    <style>
       
        :root {
            --black: #333;
            --white: #fff;
        }

        .dark {
            --black: #fff;
            --white: #333;
        }

        img {
            position: absolute;
            left: 70px;
            bottom: -130px;
            width: 200px;
            height: 200px;
        }

        header {
            position: absolute;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 40px 100px;
            z-index: 10000;
        }

        header .logo {
            position: relative;
            display: block;
            color: var(--black);
            text-decoration: none;
            font-size: 2em;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            cursor: pointer;
        }

        .righSide {
            display: flex;
        }

        .btns {
            position: relative;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-left: 10px;
        }

        .btns ion-icon {
            font-size: 1.5em;
            color: var(--black);
        }

        .btns .menuToggle ion-icon {
            font-size: 3em;
        }

        .btns ion-icon:nth-child(2) {
            display: none;
        }

        .btns.active ion-icon:nth-child(2) {
            display: block;
        }

        .btns.active ion-icon:nth-child(1) {
            display: none;
        }

        .main {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            user-select: none;
            mix-blend-mode: screen;
        }

        .dark .mask {
            filter: invert(1);
            mix-blend-mode: multiply;
        }

        .main h2 {
            position: relative;
            z-index: 3;
            font-size: 16vw;
            color: #fff;
            text-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
        }

        .navigation {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: var(--white);
            z-index: 4;
            transition: 0.5s;
        }

        .navigation.active {
            left: 0;
        }

        .navigation li {
            list-style: none;
        }

        .navigation li a {
            display: inline-flex;
            margin: 5px 0;
            font-size: 1.35em;
            text-decoration: none;
            color: var(--black);
            padding: 5px 20px;
            border-radius: 40px;
        }

        .navigation li a:hover {
            background: var(--black);
            color: var(--white);
        }

        .copyrightTexts {
            position: absolute;
            left: 100px;
            bottom: 40px;
            z-index: 4;
            font-weight: 500;
            font-size: 1.2em;
            color: var(--black);
        }

        .social {
            position: absolute;
            right: 100px;
            bottom: 40px;
            z-index: 4;
            display: flex;
            flex-direction: column;
        }

        .social li {
            list-style: none;
        }

        .social li a {
            text-decoration: none;
            color: var(--black);
            font-size: 1.75em;
        }
    </style>
@endpush

@push('js')
    <script>
        let dayNight = document.querySelector('.dayNight')
        let menuToggle = document.querySelector('.menuToggle')
        let body = document.querySelector('body')
        let navigation = document.querySelector('.navigation')

        dayNight.onclick = function() {
            body.classList.toggle('dark')
            dayNight.classList.toggle('active')
        }

        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active')
            navigation.classList.toggle('active')
        }
      
    </script>
    
@endpush
