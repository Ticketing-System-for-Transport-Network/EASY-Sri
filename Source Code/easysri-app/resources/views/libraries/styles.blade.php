<!-- Styles -->
@livewireStyles
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<style>
    nav {
        height: 100px;
        background-color: #111;
    }

    .func-link {
        padding: 12px;
        font-size: 30px;
        color: #FFA500;
        text-decoration: none;
    }

    .func-link:hover {
        color: #FFA500;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }

        to {
            text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
    }
    footer {
        position: relative;
        width: 100%;
        height: auto;
        padding: 50px 100px;
        background: #111;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    footer .container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row;
    }
    footer .container .sec.aboutus {
        width: 40%;
    }

    footer .container h2 {
        position: relative;
        color: #fff;
        font-weight: 500;
        margin-bottom: 15px;
    }

    footer .container h2:before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 2px;
        background: #FFA500;
    }

    footer p {
        color: #999;
    }

    .sci {
        margin-top: 20px;
        display: flex;
    }

    .sci li {
        list-style: none;
    }

    .sci li a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: #222;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 4px;
    }

    .sci li a:hover {
        background: #FFA500;
    }

    .sci li a ion-icon {
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 20px;
        margin-left: 10px;
        margin-top: 10px;
    }

    .quickLinks {
        position: relative;
        width: 25%;
    }

    .quickLinks ul li{
        list-style: none;
    }

    .quickLinks ul li a {
        color: #999;
        text-decoration: none;
        margin-bottom: 10px;
        display: inline-block;
    }

    .quickLinks ul li a:hover {
        color: #fff;
    }

    .contact {
        width: calc(35% - 60px);
        margin-right: 0 !important;
    }

    .contact .info {
        position: relative;
    }

    .contact .info li {
        display: flex;
        margin-bottom: 16px;
    }

    .contact .info li span:nth-child(1) {
        color: #fff;
        font-size: 20px;
        margin-right: 10px;
    }

    .contact .info li a {
        color: #999;
        text-decoration: none;
    }

    .contact .info li a:hover {
        color: #fff;
    }

    .copyrightText {
        width: 100%;
        background: #181818;
        padding: 2px 100px;
        text-align: center;
        color: #999;
    }

    @media (max-width: 991px) {
        footer {
            padding: 40px;
        }

        footer .container {
            flex-direction: column;
        }

        footer .container .sec {
            margin-right: 0;
            margin-bottom: 40px;
        }

        footer .container .sec.aboutus, .quickLinks, .contact {
            width: 100%;
        }
    }
    .image {
        margin-left: 1250px;
        margin-top: -300px;
    }
</style>

@stack('css')
