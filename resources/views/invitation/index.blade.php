<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>{{ $invitation->nickname_man }} &amp; {{ $invitation->nickname_woman }}</title>
    <meta name="description" content="The Wedding of {{ $invitation->nickname_man }} &amp; {{ $invitation->nickname_woman }}" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ $invitation->photo_couple }}/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $invitation->nickname_man }} &#038; {{ $invitation->nickname_woman }}" />
    <meta property="og:description" content="The Wedding of {{ $invitation->nickname_man }} &amp; {{ $invitation->nickname_woman }}" />
    <meta property="og:url" content="{{ $invitation->photo_couple }}" />
    <meta property="og:site_name" content="seovwedding" />
    <meta property="og:image"
        content="{{ $invitation->photo_couple }}" />
    <meta property="og:image:secure_url"
        content="{{ $invitation->photo_couple }}" />
    <meta property="og:image:width" content="1002" />
    <meta property="og:image:height" content="1500" />
    <meta property="og:image:alt" content="{{ $invitation->nickname_man }} &#038; {{ $invitation->nickname_woman }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <style>
        :root {
            --primary: rgba(182, 132, 68, 0.589);
            --primary-fill: rgb(212, 168, 109);
            --text: rgb(143, 93, 29);
            --text-darken: rgb(175, 104, 11);
            --white: #ffffff;
            --shadow: rgba(0, 0, 0, 0.486);
        }

        @font-face {
            font-family: 'font1';
            src: url("{{ asset('template/template1/font1.ttf') }}");
        }

        @font-face {
            font-family: 'font2';
            src: url("{{ asset('template/template1/font2.otf') }}");
        }

        @font-face {
            font-family: 'font2bold';
            src: url("{{ asset('template/template1/font2bold.otf') }}");
        }

        @font-face {
            font-family: 'font3';
            src: url("{{ asset('template/template1/font3.ttf') }}");
        }

        @font-face {
            font-family: 'font4';
            src: url("{{ asset('template/template1/font4.ttf') }}");
        }

        html,
        body {
            margin: 0px;
            padding: 0px;
            width: 100%;
        }

        div.background {
            background: url("{{ asset('img/master/background.jpg') }}");
            background-repeat: repeat;
        }

        div.transbox {
            background-color: rgba(230, 195, 154, 0.3);
        }

        .font1 {
            font-family: font1;
            color: var(--text);
        }

        .font2 {
            font-family: font2;
            color: var(--text);
        }

        .font3 {
            font-family: font3;
            color: var(--text);
            font-size: 18pt;
        }

        .font4 {
            font-family: font4;
            color: var(--text);
            font-size: 25pt;
        }

        .font-white {
            color: var(--white);
        }

        .counter {
            color: var(--white);
            background-color: var(--primary);
        }

        .text-darken {
            color: var(--text-darken)';'
        }

        .avatar {
            object-fit: cover;
            width: 50vw;
            height: 50vw;
        }

        .arrows {
            position: absolute;
            width: 60px;
            height: 72px;
            bottom: 20px;
        }

        .absolute {
            position: absolute;
        }

        .arrows path {
            stroke: var(--primary);
            fill: transparent;
            stroke-width: 2px;
            animation: arrow 2.25s infinite;
            -webkit-animation: arrow 2.25s infinite;
        }

        @keyframes arrow {
            0% {
                opacity: 0
            }

            40% {
                opacity: 1
            }

            80% {
                opacity: 0
            }

            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes arrow {
            0% {
                opacity: 0
            }

            40% {
                opacity: 1
            }

            80% {
                opacity: 0
            }

            100% {
                opacity: 0
            }
        }

        .arrows path.a1 {
            animation-delay: -1s;
            -webkit-animation-delay: -1s;
        }

        .arrows path.a2 {
            animation-delay: -0.75s;
            -webkit-animation-delay: -0.7s;
        }

        .arrows path.a3 {
            animation-delay: -0.5s;
            -webkit-animation-delay: -0.5s;
        }

        .overflow-x-hidden {
            overflow-x: hidden;
        }

        .ornament1 {
            position: absolute;
            top: 0;
            left: 0;
        }

        .ornament1-flip {
            position: absolute;
            top: 0;
            right: 0;
        }

        .mt {
            margin-top: 0;
        }

        .ornament2 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .ornament2-bottom {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .bismillah {
            height: 0%;
            width: 0%;
        }

        .rounded-img {
            height: 286px;
            width: 214px;
            border-radius: 20px;
            box-shadow: 5px 10px 20px 0 var(--shadow)
        }

        .relative {
            position: relative;
        }

        * {
            box-sizing: border-box;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--primary);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .container {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .container::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid var(--primary);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0%;
        }

        .right {
            left: 50%;
        }

        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid var(--primary);
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent var(--primary);
        }

        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid var(--primary);
            border-width: 10px 10px 10px 0;
            border-color: transparent var(--primary) transparent transparent;
        }

        .right::after {
            left: -16px;
        }

        .content {
            padding: 20px 30px;
            background-color: var(--primary);
            position: relative;
            border-radius: 6px;
        }

        .icon-parallax {
            height: 110px;
        }

        .card {
            color: var(--white);
            background-color: var(--primary);
        }

        .card-white {
            color: var(--primary);
            background-color: var(--white);
        }

        .maps {
            color: var(--white);
            background-color: var(--primary);
        }

        .location {
            color: var(--white);
            background-color: var(--primary);
            border-radius: 10px;
            width: fit-content;
        }

        a:link {
            text-decoration: none;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            max-width: 100%;
            max-height: 100%;
        }

        .protocol {
            height: auto;
        }

        .form-control {
            border-color: var(--primary);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px var(--primary);
            color: var(--text);
        }

        .form-control::-webkit-input-placeholder {
            color: var(--primary);
        }

        .form-control:-moz-placeholder {
            color: var(--primary);
        }

        .form-control::-moz-placeholder {
            color: var(--primary);
        }

        .form-control::placeholder {
            color: var(--primary);
        }

        .form-control:-ms-input-placeholder {
            color: var(--primary);
        }

        .button {
            background: linear-gradient(to bottom right, var(--primary), var(--primary));
            border: 0;
            border-radius: 12px;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: font2;
            font-size: 16px;
            font-weight: 500;
            line-height: 2.5;
            outline: transparent;
            padding: 0 1rem;
            text-align: center;
            text-decoration: none;
            transition: box-shadow .2s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
        }

        div.scroll {
            height: 500px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .navbar {
            background-color: var(--text);
            border-radius: 20px;
        }

        .iconbar {
            height: 100px;
            width: 80%;
            max-width: 480px;
            border-radius: 2em;
            top: 50%;
            left: 50%;
            color: var(--white);
            background-color: var(--primary-fill);
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            cursor: pointer;
            overflow: hidden;
            box-shadow: 0px -1px 12px 0.1px var(--shadow);
        }

        .icons {
            font-family: Nunito;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 0.4em;
            border-radius: 1em;
        }

        .icons i {
            margin-right: 0.2em;
            font-size: 2.2em;
        }

        .icons span {
            display: none;
            font-size: 1.2em;
            vertical-align: top;
        }

        .active {
            /*   background:pink; */
        }

        .botón {
            bottom: 12vh;
            left: 75vw;
            align-items: center;
            position: fixed;
            display: flex;
            justify-content: center;
            box-shadow: var(--shadow);
        }

        .fondo {
            background: var(--primary-fill);
            border-radius: 50%;
            box-shadow: 0 1px 2.2px rgba(0, 0, 0, 0.051),
                0 2.3px 5.3px rgba(0, 0, 0, 0.059), 0 4.4px 10px rgba(0, 0, 0, 0.06),
                0 7.8px 17.9px rgba(0, 0, 0, 0.059), 0 14.6px 33.4px rgba(0, 0, 0, 0.059),
                0 35px 80px rgba(0, 0, 0, 0.07);
            cursor: pointer;
            position: absolute;
        }

        .botón:active .fondo {
            background: var(--primary-fill);
        }

        .icono {
            transform: rotate(-120deg);
            transition: transform 500ms;
        }

        .parte {
            background: white;
            position: absolute;
        }

        .izquierda {
            clip-path: polygon(43.77666% 55.85251%,
                    43.77874% 55.46331%,
                    43.7795% 55.09177%,
                    43.77934% 54.74844%,
                    43.77855% 54.44389%,
                    43.77741% 54.18863%,
                    43.77625% 53.99325%,
                    43.77533% 53.86828%,
                    43.77495% 53.82429%,
                    43.77518% 53.55329%,
                    43.7754% 53.2823%,
                    43.77563% 53.01131%,
                    43.77585% 52.74031%,
                    43.77608% 52.46932%,
                    43.7763% 52.19832%,
                    43.77653% 51.92733%,
                    43.77675% 51.65633%,
                    43.77653% 51.38533%,
                    43.7763% 51.11434%,
                    43.77608% 50.84334%,
                    43.77585% 50.57235%,
                    43.77563% 50.30136%,
                    43.7754% 50.03036%,
                    43.77518% 49.75936%,
                    43.77495% 49.48837%,
                    44.48391% 49.4885%,
                    45.19287% 49.48865%,
                    45.90183% 49.48878%,
                    46.61079% 49.48892%,
                    47.31975% 49.48906%,
                    48.0287% 49.4892%,
                    48.73766% 49.48934%,
                    49.44662% 49.48948%,
                    50.72252% 49.48934%,
                    51.99842% 49.4892%,
                    53.27432% 49.48906%,
                    54.55022% 49.48892%,
                    55.82611% 49.48878%,
                    57.10201% 49.48865%,
                    58.3779% 49.4885%,
                    59.6538% 49.48837%,
                    59.57598% 49.89151%,
                    59.31883% 50.28598%,
                    58.84686% 50.70884%,
                    58.12456% 51.19714%,
                    57.11643% 51.78793%,
                    55.78697% 52.51828%,
                    54.10066% 53.42522%,
                    52.02202% 54.54581%,
                    49.96525% 55.66916%,
                    48.3319% 56.57212%,
                    47.06745% 57.27347%,
                    46.11739% 57.79191%,
                    45.42719% 58.14619%,
                    44.94235% 58.35507%,
                    44.60834% 58.43725%,
                    44.37066% 58.41149%,
                    44.15383% 58.27711%,
                    43.99617% 58.0603%,
                    43.88847% 57.77578%,
                    43.82151% 57.43825%,
                    43.78608% 57.06245%,
                    43.77304% 56.66309%,
                    43.773% 56.25486%);
            transition: clip-path 500ms;
        }

        .derecha {
            clip-path: polygon(43.77666% 43.83035%,
                    43.77874% 44.21955%,
                    43.7795% 44.59109%,
                    43.77934% 44.93442%,
                    43.77855% 45.23898%,
                    43.77741% 45.49423%,
                    43.77625% 45.68961%,
                    43.77533% 45.81458%,
                    43.77495% 45.85858%,
                    43.77518% 46.12957%,
                    43.7754% 46.40056%,
                    43.77563% 46.67156%,
                    43.77585% 46.94255%,
                    43.77608% 47.21355%,
                    43.7763% 47.48454%,
                    43.77653% 47.75554%,
                    43.77675% 48.02654%,
                    43.77653% 48.29753%,
                    43.7763% 48.56852%,
                    43.77608% 48.83952%,
                    43.77585% 49.11051%,
                    43.77563% 49.38151%,
                    43.7754% 49.65251%,
                    43.77518% 49.9235%,
                    43.77495% 50.1945%,
                    44.48391% 50.19436%,
                    45.19287% 50.19422%,
                    45.90183% 50.19408%,
                    46.61079% 50.19394%,
                    47.31975% 50.1938%,
                    48.0287% 50.19366%,
                    48.73766% 50.19353%,
                    49.44662% 50.19338%,
                    50.72252% 50.19353%,
                    51.99842% 50.19366%,
                    53.27432% 50.1938%,
                    54.55022% 50.19394%,
                    55.82611% 50.19408%,
                    57.10201% 50.19422%,
                    58.3779% 50.19436%,
                    59.6538% 50.1945%,
                    59.57598% 49.79136%,
                    59.31883% 49.39688%,
                    58.84686% 48.97402%,
                    58.12456% 48.48572%,
                    57.11643% 47.89493%,
                    55.78697% 47.16458%,
                    54.10066% 46.25764%,
                    52.02202% 45.13705%,
                    49.96525% 44.01371%,
                    48.3319% 43.11074%,
                    47.06745% 42.4094%,
                    46.11739% 41.89096%,
                    45.42719% 41.53667%,
                    44.94235% 41.3278%,
                    44.60834% 41.24561%,
                    44.37066% 41.27137%,
                    44.15383% 41.40575%,
                    43.99617% 41.62256%,
                    43.88847% 41.90709%,
                    43.82151% 42.24461%,
                    43.78608% 42.62041%,
                    43.77304% 43.01978%,
                    43.773% 43.428%);
            transition: clip-path 500ms;
        }

        .puntero {
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            -webkit-tap-highlight-color: transparent;
        }

        .active .icono {
            transform: rotate(-90deg);
        }

        .active .izquierda {
            clip-path: polygon(56.42249% 57.01763%,
                    54.93283% 57.0175%,
                    53.00511% 57.01738%,
                    50.83554% 57.01727%,
                    48.62036% 57.01718%,
                    46.55585% 57.01709%,
                    44.83822% 57.01702%,
                    43.66373% 57.01698%,
                    43.22863% 57.01696%,
                    42.86372% 57.01904%,
                    42.56988% 57.01621%,
                    42.3402% 56.99486%,
                    42.16778% 56.94152%,
                    42.0457% 56.84267%,
                    41.96705% 56.68478%,
                    41.92493% 56.45432%,
                    41.91246% 56.13777%,
                    41.91258% 55.76282%,
                    41.9129% 55.37058%,
                    41.91335% 54.96757%,
                    41.91387% 54.56032%,
                    41.91439% 54.15537%,
                    41.91485% 53.75926%,
                    41.91517% 53.3785%,
                    41.91529% 53.01965%,
                    41.94275% 52.72355%,
                    42.02117% 52.51653%,
                    42.14465% 52.38328%,
                    42.30727% 52.30854%,
                    42.50308% 52.27699%,
                    42.72619% 52.27341%,
                    42.97065% 52.28248%,
                    43.23056% 52.2889%,
                    43.94949% 52.28896%,
                    45.45083% 52.28912%,
                    47.47445% 52.28932%,
                    49.76027% 52.28957%,
                    52.04818% 52.28981%,
                    54.07805% 52.29003%,
                    55.5898% 52.29019%,
                    56.32332% 52.29024%,
                    56.58221% 52.28816%,
                    56.83726% 52.28948%,
                    57.07897% 52.30593%,
                    57.29794% 52.34898%,
                    57.48468% 52.43029%,
                    57.62978% 52.56146%,
                    57.72375% 52.7541%,
                    57.75718% 53.01981%,
                    57.75713% 53.37763%,
                    57.75699% 53.81831%,
                    57.75679% 54.31106%,
                    57.75657% 54.82507%,
                    57.75635% 55.32958%,
                    57.75615% 55.79377%,
                    57.75601% 56.18684%,
                    57.75596% 56.47801%,
                    57.7549% 56.50122%,
                    57.74034% 56.5624%,
                    57.6955% 56.64887%,
                    57.60334% 56.748%,
                    57.44691% 56.84712%,
                    57.20925% 56.93358%,
                    56.87342% 56.99471%);
        }

        .active .derecha {
            clip-path: polygon(56.42249% 42.44625%,
                    54.93283% 42.44637%,
                    53.00511% 42.44649%,
                    50.83554% 42.4466%,
                    48.62036% 42.4467%,
                    46.55585% 42.44679%,
                    44.83822% 42.44685%,
                    43.66373% 42.4469%,
                    43.22863% 42.44691%,
                    42.86372% 42.44483%,
                    42.56988% 42.44767%,
                    42.3402% 42.46902%,
                    42.16778% 42.52235%,
                    42.0457% 42.6212%,
                    41.96705% 42.77909%,
                    41.92493% 43.00956%,
                    41.91246% 43.32611%,
                    41.91258% 43.70105%,
                    41.9129% 44.0933%,
                    41.91335% 44.49631%,
                    41.91387% 44.90355%,
                    41.91439% 45.3085%,
                    41.91485% 45.70462%,
                    41.91517% 46.08537%,
                    41.91529% 46.44422%,
                    41.94275% 46.74032%,
                    42.02117% 46.94735%,
                    42.14465% 47.0806%,
                    42.30727% 47.15534%,
                    42.50308% 47.18688%,
                    42.72619% 47.19047%,
                    42.97065% 47.1814%,
                    43.23056% 47.17497%,
                    43.94949% 47.17491%,
                    45.45083% 47.17476%,
                    47.47445% 47.17455%,
                    49.76027% 47.1743%,
                    52.04818% 47.17406%,
                    54.07805% 47.17384%,
                    55.5898% 47.17369%,
                    56.32332% 47.17363%,
                    56.58221% 47.17571%,
                    56.83726% 47.17439%,
                    57.07897% 47.15795%,
                    57.29794% 47.1149%,
                    57.48468% 47.03359%,
                    57.62978% 46.90242%,
                    57.72375% 46.70977%,
                    57.75718% 46.44406%,
                    57.75713% 46.08625%,
                    57.75699% 45.64557%,
                    57.75679% 45.15282%,
                    57.75657% 44.6388%,
                    57.75635% 44.1343%,
                    57.75615% 43.6701%,
                    57.75601% 43.27703%,
                    57.75596% 42.98586%,
                    57.7549% 42.96265%,
                    57.74034% 42.90148%,
                    57.6955% 42.815%,
                    57.60334% 42.71587%,
                    57.44691% 42.61675%,
                    57.20925% 42.53029%,
                    56.87342% 42.46916%);
        }

        @media only screen and (max-width: 600px) {
            .ornament1 {
                transform-origin: top left;
            }

            .ornament1-flip {
                transform-origin: top right;
            }

            .mt {
                margin-top: 15vh
            }

            .arrows {
                position: absolute;
                margin-left: -5vw;
                bottom: 70px;
            }

            .ornament2 {
                /* transform: scale(0.2);
                transform-origin: left; */
                height: 100px;
                top: 38vh;
                left: 30vw;
            }

            .ornament2-bottom {
                transform: scale(0.2);
                transform-origin: left;
                top: 7870px;
                left: 30vw;
            }

            .bismillah {
                height: 50%;
                width: 50%;
            }

            .rounded-img {
                height: 171.6px;
                width: 128.4px;
                transform-origin: top;
                border: 7px solid var(--white);
            }

            .rn-50 {
                right: -50px;
            }

            .rl-50 {
                left: -50px;
            }

            .font3-sm {
                font-family: font3;
                color: var(--text);
                font-size: 23pt;
            }

            .font2-sm {
                font-family: font2;
                color: var(--text);
                font-size: 10pt;
            }

            .font1-sm {
                font-family: font1;
                color: var(--text);
                font-size: 25pt;
            }

            #couple-lg {
                display: none;
            }

            .left {
                left: 0px;
            }

            /* Place the timelime to the left */
            .timeline::after {
                left: 31px;
            }

            /* Full-width containers */
            .container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            /* Make sure that all arrows are pointing leftwards */
            .container::before {
                left: 60px;
                border: medium solid var(--primary);
                border-width: 10px 10px 10px 0;
                border-color: transparent var(--primary) transparent transparent;
            }

            /* Make sure all circles are at the same spot */
            .left::after,
            .right::after {
                left: 15px;
            }

            /* Make all right containers behave like the left ones */
            .right {
                left: 4px;
            }

            .left {
                left: 4px;
            }

            .card {
                border-radius: 20px
            }

            .card-white {
                border-radius: 20px
            }

            .maps {
                border-radius: 20px;
                height: 400px;
            }

            .swiper-sm {
                margin-top: -80px
            }

            .bank-image {
                width: 150px;
            }

            .protocol {
                height: 75px;
            }

            .fondo {
                height: 10vw;
                width: 10vw;
            }

            .icono {
                height: 12vw;
                width: 12vw;
            }

            .parte {
                height: 12vw;
                width: 12vw;
            }

            .puntero {
                height: 12vw;
                width: 12vw;
            }
        }

        @media only screen and (min-width: 600px) {
            .ornament1 {
                transform: scale(0.5);
                transform-origin: top left;
            }

            .ornament1-flip {
                transform: scale(0.5);
                transform-origin: top right;
            }
        }

        @media only screen and (min-width: 768px) {
            .ornament1 {
                transform: scale(0.5);
                transform-origin: top left;
            }

            .ornament1-flip {
                transform: scale(0.5);
                transform-origin: top right;
            }
        }

        @media only screen and (min-width: 992px) {
            .ornament1 {
                transform: scale(0.5);
                transform-origin: top left;
            }

            .ornament1-flip {
                transform: scale(0.5);
                transform-origin: top right;
            }
        }

        @media only screen and (min-width: 1200px) {
            .ornament1 {
                transform: scale(0.5);
                transform-origin: top left;
            }

            .ornament1-flip {
                transform: scale(0.5);
                transform-origin: top right;
            }

            .mt {
                margin-top: 15vh
            }

            .font2bold {
                font-size: 50px
            }

            .avatar {
                object-fit: cover;
                width: 15vw;
                height: 15vw;
            }

            .ornament2 {
                transform: scale(0.3);
                transform-origin: top;
                margin-top: 430px;
                margin-left: 520px
            }

            .ornament2-bottom {
                transform: scale(0.3);
                transform-origin: bottom;
                top: 8200px;
                margin-left: 520px
            }

            .card {
                border-radius: 20px
            }

            .card-white {
                border-radius: 20px
            }

            .bismillah {
                height: 25%;
                width: 25%;
            }

            .maps {
                border-radius: 20px;
                height: 400px;
            }

            .font3-lg {
                font-family: font3;
                color: var(--text);
                font-size: 40pt;
            }

            .font4-lg {
                font-family: font3;
                color: var(--text);
                font-size: 40pt;
            }

            .font1-lg {
                font-family: font1;
                color: var(--text);
                font-size: 70pt;
            }

            #couple-sm {
                display: none;
            }

            .left {
                left: -15.9vw;
            }

            .right {
                left: 15.9vw;
            }

            .main-container-lg {
                max-width: 1000px
            }

            .swiper-lg {
                margin-top: -80px
            }

            .bank-image {
                width: 150px;
            }
        }
    </style>
    <style>
        @media only screen and (max-device-width:480px) {
            .iconbar {
                height: 60px;
                width: 90%;
            }

            .icons i {
                font-size: 1.3em;
            }

            .icons span {
                font-size: 0.8em;
            }
        }
    </style>
    <style>
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: var(--white);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay::before {
            content: "";
            background-image: url("{{$invitation->photo_couple}}");
            background-position: 50%;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.25;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay {
                overflow-y: auto;
            }

            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>
</head>

<body>
    <div id="myNav" class="overlay d-lg-none" style="z-index: 1002; height: 100%;">
        <div class="overlay-content">
            <p class="font4 mt-2 display-1" style="font-weight: bolder">
                <b>{{ $invitation->name_couple }}</b>
            </p>
            <img src="{{ $invitation->photo_couple }}" class="rounded-circle rounded avatar">
            <p class="font2 font2-sm mt-4 display-1">
                Kepada Bapak/Ibu/Saudara/i
            </p>
            <h1 class="font4 mt-2 display-1">
                {{ $to }}
            </h1>
            <p class="font2 font2-sm mt-2 display-1 px-5">Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami.</p>
            <div class="d-flex justify-content-center">
                <a class="location" href="#" onclick="closeNav()">
                    <div class="font2 font2-sm text-white py-1 px-2">
                        <b>Buka Undangan</b>
                    </div>
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('template/template1/ornament2.png') }}" class="ornament2" style="top: 50%">
        </div>
    </div>
    <div>
        <img src="{{ asset('template/template1/ornament2.png') }}" class="ornament2">
    </div>
    <div class="background">
        <div class="transbox">
            <div id="home" class="vh-100 overflow-x-hidden">
                <div class="relative">
                    <img src="{{ asset('template/template1/ornament1.png') }}" class="w-50 ornament1 rl-50">
                    <img src="{{ asset('template/template1/ornament1flip.png') }}" class="w-50 ornament1-flip rn-50">
                </div>
                <div class="text-center mt">
                    <p class="font4 font4-lg">
                        The Wedding Of
                    </p>
                    <img src="{{ $invitation->photo_couple }}"
                        class="rounded-circle rounded avatar">
                    <p class="font1 mt-5 display-1">
                        {{ $invitation->name_couple }}
                    </p>
                    <p class="font2 mx-2 mt-3" style="font-size: 12pt">
                        Kami berharap Anda menjadi bagian dari hari istimewa kami!
                    </p>
                    <div class="row justify-content-center" id="countdown">
                        <div class="w-auto m-2 rounded counter">
                            <p id="days" class="mt-3"></p>
                        </div>
                        <div class="w-auto m-2 rounded counter">
                            <p id="hours" class="mt-3"></p>
                        </div>
                        <div class="w-auto m-2 rounded counter">
                            <p id="minutes" class="mt-3"></p>
                        </div>
                        <div class="w-auto m-2 rounded counter">
                            <p id="seconds" class="mt-3"></p>
                        </div>
                    </div>
                    <svg class="arrows">
                        <path class="a1" d="M0 0 L15 16 L30 0"></path>
                        <path class="a2" d="M0 20 L15 36 L30 20"></path>
                        <path class="a3" d="M0 40 L15 56 L30 40"></path>
                    </svg>
                </div>
            </div>
            <div id="couple" class="min-vh-100 p-5">
                <div class="text-center">
                    <img src="{{ asset('template/template1/bismillah.png') }}" class="bismillah">
                    <p class="font3 font3-lg mt-3">
                        Assalamualaikum Wr. Wb
                    </p>
                    <p class="font2 font2-sm font2-lg">
                        Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk
                        menghadiri acara pernikahan kami:
                    </p>
                    <div id="couple-sm">
                        <div>
                            <img src="{{ $invitation->photo_man }}" class="rounded-img">
                        </div>
                        <p class="font3 font3-sm font3-lg mt-3">
                            {{ $invitation->fullname_man }}
                        </p>
                        <p class="font2 font2-sm font2-lg">
                            Putra Pertama dari <br> Bapak {{ $invitation->father_man }} & Ibu
                            {{ $invitation->mother_man }}
                        </p>
                        <p class="mx-3 font1-sm font1-lg">
                            &
                        </p>
                        <div>
                            <img src="{{ $invitation->photo_woman }}" class="rounded-img">
                        </div>
                        <p class="font3 font3-sm font3-lg mt-3">
                            {{ $invitation->fullname_woman }}
                        </p>
                        <p class="font2 font2-sm font2-lg">
                            Putri Pertama dari <br> Bapak {{ $invitation->father_woman }} & Ibu
                            {{ $invitation->mother_woman }}
                        </p>
                    </div>
                    <div id="couple-lg">
                        <div class="row justify-content-center align-items-center mt-5">
                            <div class="col-4">
                                <div>
                                    <img src="{{ $invitation->photo_man }}" class="rounded-img">
                                </div>
                                <p class="font3 font3-sm font3-lg mt-3">
                                    {{ $invitation->fullname_man }}
                                </p>
                                <p class="font2 font2-sm font2-lg">
                                    Putra {{ $invitation->child_man }} dari <br> Bapak
                                    {{ $invitation->father_man }} & Ibu
                                    {{ $invitation->mother_man }}
                                </p>
                            </div>
                            <div class="col-1">
                                <p class="mx-3 font1-sm font1-lg">
                                    &
                                </p>
                            </div>
                            <div class="col-4">
                                <div>
                                    <img src="{{ $invitation->photo_woman }}" class="rounded-img">
                                </div>
                                <p class="font3 font3-sm font3-lg mt-3">
                                    {{ $invitation->fullname_woman }}
                                </p>
                                <p class="font2 font2-sm font2-lg">
                                    Putri {{ $invitation->child_woman }} dari <br> Bapak
                                    {{ $invitation->father_woman }} & Ibu
                                    {{ $invitation->mother_woman }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute">
                <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                    data-rellax-speed="2">
            </div>
            <div class="d-flex justify-content-end">
                <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                    data-rellax-speed="3" style="height: 60px;">
            </div>
            <div id="schedule" class="overflow-x-hidden">
                <div class="relative mt-n5">
                    <img src="{{ asset('template/template1/ornament1.png') }}" class="w-50 ornament1 rl-50">
                    <img src="{{ asset('template/template1/ornament1flip.png') }}" class="w-50 ornament1-flip rn-50">
                </div>
                <div id="" class="d-flex justify-content-center mt-5">
                    <div class="py-5 main-container-lg">
                        <div class="text-center">
                            <p class="font4 font4-lg px-5">
                                Indahnya Hari Yang Dinanti
                            </p>
                            <div class="mx-4">
                                <div class="row justify-content-center" id="countdown">
                                    <div class="w-auto m-2 rounded counter">
                                        <p id="days2" class="mt-3"></p>
                                    </div>
                                    <div class="w-auto m-2 rounded counter">
                                        <p id="hours2" class="mt-3"></p>
                                    </div>
                                    <div class="w-auto m-2 rounded counter">
                                        <p id="minutes2" class="mt-3"></p>
                                    </div>
                                    <div class="w-auto m-2 rounded counter">
                                        <p id="seconds2" class="mt-3"></p>
                                    </div>
                                </div>
                                <p class="font2 font2-sm mt-4 text-center">
                                    Dan kawinkanlah orang-orang yang sendirian di antara kamu, dan orang-orang yang
                                    layak
                                    (berkawin) dari hamba-hamba sahayamu yang lelaki dan hamba-hamba sahayamu yang
                                    perempuan.
                                    Jika mereka miskin Allah akan memampukan mereka dengan karunia-Nya. Dan Allah Maha
                                    luas
                                    (pemberian-Nya) lagi Maha Mengetahui
                                    <br>
                                    QS. An Nur:32
                                </p>
                                @foreach ($invitation->schedule as $schedule)
                                    <div>
                                        <div class="card mt-5">
                                            <p class="font4 text-white pt-3">{{ $schedule->name_schedule }}</p>
                                            <p class="font2 text-white" style="font-size: 13pt">
                                                <b><i>{{ $schedule->date }}</i></b>
                                                <br>
                                                <span style="font-size: 11pt">
                                                    Pukul: {{ $schedule->time }}
                                                </span>
                                                <br>
                                                <span style="font-size: 11pt">
                                                    Alamat: {{ $schedule->address_schedule }}
                                                </span>
                                            </p>
                                        </div>
                                        @if ($schedule->location_schedule)
                                            <div class="card mt-3 p-2">
                                                <iframe style="border-radius: 20px" class="maps"
                                                    src="{{ $schedule->location_schedule }}" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            </div>
                                        @endif
                                        @if ($schedule->link_location_schedule)
                                            <div class="d-flex justify-content-center mt-3">
                                                <a class="location" href="{{ $schedule->link_location_schedule }}"
                                                    target="_blank">
                                                    <div class="font2 text-white py-2 px-3">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        <b>Lihat Lokasi</b>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute">
                <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                    data-rellax-speed="5.8" style="height: 50px;">
            </div>
            <div class="absolute">
                <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                    data-rellax-speed="2">
            </div>
            <div class="absolute" style="left: 75%">
                <div class="d-flex justify-content-end">
                    <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                        data-rellax-speed="3.8" style="height: 50px;">
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{ asset('template/template1/ornament3.png') }}" class="icon-parallax rellax"
                        data-rellax-speed="4" style="height: 80px;">
                </div>
            </div>
            <div id="galery" class="pt-5">
                <div class="text-center">
                    <p class="font4 font4-lg">
                        Galeri Foto
                    </p>
                </div>
                <div class="swiper mySwiper swiper-sm swiper-lg mt-1">
                    <div class="swiper-wrapper">
                        @foreach ($invitation->photo as $photo)
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img src="{{ $photo->file_photo }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div id="amplop" class="py-5 d-flex justify-content-center ">
                <div class="main-container-lg ">
                    <div class="text-center">
                        <p class="font4 font4-lg">
                            Amplop Digital
                        </p>
                        <p class="font2 font2-sm px-5">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.
                            Dan
                            jika memberi adalah ungkapan tanda kasih Anda, Anda dapat
                            memberi kado secara cashless.</p>
                        <div class="card-white mx-4 p-3 shadow">
                            @if ($invitation->bank == 'bri')
                                <img src="{{ asset('img/master/bri.png') }}" class="bank-image">
                            @elseif ($invitation->bank == 'bni')
                                <img src="{{ asset('img/master/bni.png') }}" class="bank-image">
                            @elseif ($invitation->bank == 'mandiri')
                                <img src="{{ asset('img/master/mandiri.png') }}" class="bank-image">
                            @elseif ($invitation->bank == 'btn')
                                <img src="{{ asset('img/master/btn.png') }}" class="bank-image">
                            @elseif ($invitation->bank == 'bca')
                                <img src="{{ asset('img/master/bca.png') }}" class="bank-image">
                            @endif
                            <hr size="3px" style="background-color: var(--text-darken)">
                            <p class="font2 font2-sm text-darken"><b>Nomor : {{ $invitation->number_bank }}</b></p>
                            <div class="d-flex justify-content-center mt-3">
                                <div class="location">
                                    <div class="font2 text-white py-2 px-3">
                                        <b>Salin Nomor</b>
                                    </div>
                                </div>
                            </div>
                            <p class="font2 font2-sm text-darken mt-3"><b>A/n {{ $invitation->name_bank }}</b></p>
                        </div>
                        <div class="card-white m-4 p-3 shadow">
                            <p class="font4 font4-lg">
                                Kirim Hadiah
                            </p>
                            <hr size="3px" style="background-color: var(--text-darken)">
                            <p class="font2 font2-sm text-darken">
                                <b>
                                    {{ $invitation->name_gift }}<br>
                                    No.hp : {{ $invitation->number }} <br>
                                    Alamat lengkap : {{ $invitation->address_gift }}
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="protocol" class="d-flex justify-content-center">
                <div class="text-center main-container-lg">
                    <p class="font4 font4-lg">
                        Protokol Kesehatan
                    </p>
                    <p class="font2 font2-sm px-4">Guna mencegah penyebaran Covid-19, diharapkan bagi tamu undangan
                        untuk mematuhi Protokol Kesehatan di bawah ini :
                    </p>
                    <div class="d-flex justify-content-between px-5">
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol1.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Cuci Tangan</p>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol2.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Gunakan Masker</p>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol3.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Jaga Jarak</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between px-5">
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol4.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Tidak Bersalaman</p>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol5.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Gunakan Handsanitizer</p>
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('template/template1/protocol6.png') }}" class="protocol">
                            <p class="font2 font2-sm mt-3">Hindari Kerumunan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1"
                        d="M0,128L30,117.3C60,107,120,85,180,101.3C240,117,300,171,360,192C420,213,480,203,540,192C600,181,660,171,720,186.7C780,203,840,245,900,245.3C960,245,1020,203,1080,208C1140,213,1200,267,1260,272C1320,277,1380,235,1410,213.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                    </path>
                </svg>
                <div style="background-color: #ffffff" class="py-3 px-5 text-center d-flex justify-content-center">
                    <div class="main-container-lg ">
                        <p class="font2 font2-sm">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan
                            untukmu isteri-isteri dari
                            jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya
                            diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                            tanda-tanda bagi kaum yang berfikir.
                            <br>(Q.S Ar Rum : 21)
                        </p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1"
                        d="M0,96L30,106.7C60,117,120,139,180,144C240,149,300,139,360,117.3C420,96,480,64,540,69.3C600,75,660,117,720,144C780,171,840,181,900,186.7C960,192,1020,192,1080,170.7C1140,149,1200,107,1260,96C1320,85,1380,107,1410,117.3L1440,128L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
                    </path>
                </svg>
            </div>
            <div id="greetings" class="pb-5 pt-5">
                <div class="text-center">
                    <p class="font4 font4-lg">
                        Ucapkan Sesuatu
                    </p>
                    <p class="font2 font2-sm">Berikan Ucapan & Doa Restu</p>
                </div>
                <div class="d-lg-flex justify-content-center">
                    <form action="{{ route('greeting.create', $invitation->id) }}" method="POST"
                        class="px-4 main-container-lg">
                        @csrf
                        <div class="form-group">
                            <label for="tamu" class="font2">Nama Tamu</label>
                            <input type="text" class="form-control card-white font2" id="tamu"
                                name="guest" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group mt-2">
                            <label for="ucapan" class="font2">Ucapan</label>
                            <textarea class="form-control card-white font2" id="ucapan" name="greeting" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="kehadiran" class="font2">Kehadiran</label>
                            <select class="form-control card-white form-control-sm font2" name="attendance">
                                <option value="Hadir">Hadir</option>
                                <option value="Akan hadir">Akan Hadir</option>
                                <option value="Tidak hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="button">Kirimkan Ucapan</button>
                        </div>

                    </form>
                    <div class="scroll mt-3 main-container-lg">
                        @foreach ($invitation->greeting as $greeting)
                            <div class="card m-3 shadow px-3 py-2">
                                <div class="d-flex justify-content-start">
                                    <p class="font2 text-white">
                                        <b>
                                            {{ $greeting->guest }}
                                            ({{ $greeting->attendance }})
                                        </b>
                                    </p>
                                </div>
                                <p class="font2 font2-sm text-white">
                                    {{ $greeting->greeting }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="ending" class="overflow-x-hidden pb-5">
                <div class="text-center pb-5">
                    <p class="font4 font4-lg">
                        Terima Kasih
                    </p>
                    <img src="{{ $invitation->photo_couple }}"
                        class="rounded-circle rounded avatar">
                    <div class="d-flex justify-content-center">
                        <div class="main-container-lg mx-4 my-5">
                            <p class="font2 font2-sm">
                                Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i
                                berkenan
                                hadir
                                dan memberikan doa restu.
                                Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
                            </p>
                        </div>
                    </div>

                    <p class="font3 font3-lg">
                        Wassalamualaikum Wr. Wb.
                    </p>
                    <p class="font1 mt-2 display-1">
                        {{ $invitation->name_couple }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom d-flex justify-content-center mb-4 d-lg-none" style="z-index: 1000;">

        <div class="audio">
            <iframe src="{{ asset('template/template1/backsound.mp3') }}" allow="autoplay" id="audio"
                style="display:none"></iframe>
            <audio id="audioID" autoplay loop>
                <source src="{{ asset('template/template1/backsound.mp3') }}" type="audio/mp3">
            </audio>
            <div class="botón fixed-bottom" id="botón">
                <div class="fondo"></div>
                <div class="icono">
                    <div class="parte izquierda" fill="#fff"></div>
                    <div class="parte derecha" fill="#fff"></div>
                </div>
                <div class="puntero"></div>
            </div>
        </div>
        <div class="iconbar">
            <div class="icons" data-test="home">
                <i class="icon fa fa-home"></i>
                <span class="font2" style="color: var(--primary-fill)"><b>Home</b></span>
            </div>
            <div class="icons" data-test="couple">
                <i class="icon fa fa-heart"></i>
                <span class="font2" style="color: var(--primary-fill)"><b>Mempelai</b></span>
            </div>
            <div class="icons" data-test="schedule">
                <i class="icon fa fa-calendar-o"></i>
                <span class="font2" style="color: var(--primary-fill)"><b>Tanggal</b></span>
            </div>
            <div class="icons" data-test="galery">
                <i class="icon fa fa-picture-o"></i>
                <span class="font2" style="color: var(--primary-fill)"><b>Galeri</b></span>
            </div>
            <div class="icons" data-test="greetings">
                <i class="icon fa fa-comments"></i>
                <span class="font2" style="color: var(--primary-fill)"><b>Ucapan</b></span>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        var countDownDate = new Date('{{ $invitation->countDownDate }}').getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("days").innerHTML = days + '<br>Hari';
            document.getElementById("hours").innerHTML = hours + '<br>Jam';
            document.getElementById("minutes").innerHTML = minutes + '<br>Menit';
            document.getElementById("seconds").innerHTML = seconds + '<br>Detik';
            document.getElementById("days2").innerHTML = days + '<br>Hari';
            document.getElementById("hours2").innerHTML = hours + '<br>Jam';
            document.getElementById("minutes2").innerHTML = minutes + '<br>Menit';
            document.getElementById("seconds2").innerHTML = seconds + '<br>Detik';
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = 0 + '<br>Hari';
                document.getElementById("hours").innerHTML = 0 + '<br>Jam';
                document.getElementById("minutes").innerHTML = 0 + '<br>Menit';
                document.getElementById("seconds").innerHTML = 0 + '<br>Detik';
                document.getElementById("days2").innerHTML = 0 + '<br>Hari';
                document.getElementById("hours2").innerHTML = 0 + '<br>Jam';
                document.getElementById("minutes2").innerHTML = 0 + '<br>Menit';
                document.getElementById("seconds2").innerHTML = 0 + '<br>Detik';
            }
        }, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var rellax = new Rellax('.rellax');
    </script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script>
        function check() {
            if ($('.iconbar>div').hasClass('active')) {
                $(".iconbar>.icons:nth-of-type(1)").css({
                    'background-color': '#ffffff',
                    'color': 'var(--primary-fill)'
                });
                $(".iconbar>.icons:nth-of-type(2)").css({
                    'background-color': '#ffffff',
                    'color': 'var(--primary-fill)'
                });
                $(".iconbar>.icons:nth-of-type(3)").css({
                    'background-color': '#ffffff',
                    'color': 'var(--primary-fill)'
                });
                $(".iconbar>.icons:nth-of-type(4)").css({
                    'background-color': '#ffffff',
                    'color': 'var(--primary-fill)'
                });
                $(".iconbar>.icons:nth-of-type(5)").css({
                    'background-color': '#ffffff',
                    'color': 'var(--primary-fill)'
                });

                $('.iconbar>div:not(.active)').css({
                    'background-color': 'transparent',
                    'color': 'white'
                });
            }
        };

        $(".icons").click(function() {
            window.location.href = '#' + this.getAttribute("data-test");
            $(this).addClass("active");
            $(".icons").not(this).removeClass("active");
            check();
            $(".icons>span").hide(400);
            $("> span", this).show(400);
        });
    </script>
    <script>
        var myaudio = document.getElementById("audioID");
        var button = document.getElementById("botón");
        $(".botón").click(function() {
            this.classList.toggle('active');
            return myaudio.paused ? myaudio.play() : myaudio.pause();
        });

        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
            button.classList.toggle('active');
            return myaudio.paused ? myaudio.play() : myaudio.pause();
        }
    </script>
</body>

</html>
