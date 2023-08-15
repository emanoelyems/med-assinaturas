<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;1,100;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css\style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="{{ URL::asset('js/style.js') }}"></script>

    <title>Med Assinatura</title>
</head>
    <body class="bg-gradient">
        <header id="header" class="row row-cols-auto bg-black align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="140" viewBox="0 0 150 140" fill="none">
                    <g filter="url(#filter0_bd_9_274)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M75 120C102.614 120 125 97.6142 125 70C125 42.3858 102.614 20 75 20C47.3858 20 25 42.3858 25 70C25 97.6142 47.3858 120 75 120ZM75 115C99.8528 115 120 94.8528 120 70C120 45.1472 99.8528 25 75 25C50.1472 25 30 45.1472 30 70C30 94.8528 50.1472 115 75 115Z"
                            fill="url(#paint0_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M68 63H74V69H68V63Z" fill="url(#paint1_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M68 31H74V61H68V31Z" fill="url(#paint2_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M76 31H82V61H76V31Z" fill="url(#paint3_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M76 79H82V109H76V79Z" fill="url(#paint4_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M68 79H74V109H68V79Z" fill="url(#paint5_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M84 69V63H114V69H84Z" fill="url(#paint6_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M36 69V63H66V69H36Z" fill="url(#paint7_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M36 77V71H66V77H36Z" fill="url(#paint8_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M84 77V71H114V77H84Z" fill="url(#paint9_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M76 63H82V69H76V63Z" fill="url(#paint10_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M68 71H74V77H68V71Z" fill="url(#paint11_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M76 71H82V77H76V71Z" fill="url(#paint12_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M114 54.8462V61H89.8064H84V54.8462V31H89.8064V54.8462H114Z"
                            fill="url(#paint13_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M59.8462 31H66V55.1935V61H59.8462H36V55.1935H59.8462V31Z" fill="url(#paint14_linear_9_274)"
                            shape-rendering="crispEdges" />
                        <path d="M90.1538 109H84V84.8064V79H90.1538H114V84.8064H90.1538V109Z"
                            fill="url(#paint15_linear_9_274)" shape-rendering="crispEdges" />
                        <path d="M36 85.1538V79H60.1935H66V85.1538V109H60.1935V85.1538H36Z"
                            fill="url(#paint16_linear_9_274)" shape-rendering="crispEdges" />
                        <path
                            d="M61.3462 55.1935V32.5H64.5V55.1935V59.5H59.8462H37.5V56.6935H59.8462H61.3462V55.1935ZM89.8064 56.3462H112.5V59.5H89.8064H85.5V54.8462V32.5H88.3064V54.8462V56.3462H89.8064ZM88.6538 84.8064V107.5H85.5V84.8064V80.5H90.1538H112.5V83.3064H90.1538H88.6538V84.8064ZM60.1935 83.6538H37.5V80.5H60.1935H64.5V85.1538V107.5H61.6935V85.1538V83.6538H60.1935ZM123.5 70C123.5 96.7858 101.786 118.5 75 118.5C48.2142 118.5 26.5 96.7858 26.5 70C26.5 43.2142 48.2142 21.5 75 21.5C101.786 21.5 123.5 43.2142 123.5 70ZM75 116.5C100.681 116.5 121.5 95.6812 121.5 70C121.5 44.3188 100.681 23.5 75 23.5C49.3188 23.5 28.5 44.3188 28.5 70C28.5 95.6812 49.3188 116.5 75 116.5ZM69.5 64.5H72.5V67.5H69.5V64.5ZM69.5 32.5H72.5V59.5H69.5V32.5ZM77.5 32.5H80.5V59.5H77.5V32.5ZM77.5 80.5H80.5V107.5H77.5V80.5ZM69.5 80.5H72.5V107.5H69.5V80.5ZM85.5 67.5V64.5H112.5V67.5H85.5ZM37.5 67.5V64.5H64.5V67.5H37.5ZM37.5 75.5V72.5H64.5V75.5H37.5ZM85.5 75.5V72.5H112.5V75.5H85.5ZM77.5 64.5H80.5V67.5H77.5V64.5ZM69.5 72.5H72.5V75.5H69.5V72.5ZM77.5 72.5H80.5V75.5H77.5V72.5Z"
                            stroke="url(#paint17_linear_9_274)" stroke-width="3" shape-rendering="crispEdges" />
                    </g>
                    <defs>
                        <filter id="filter0_bd_9_274" x="-5" y="-10" width="160" height="160"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="15" />
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_9_274" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                result="effect2_dropShadow_9_274" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="12" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.138365 0 0 0 0 0.0641667 0 0 0 0 0.366667 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="effect1_backgroundBlur_9_274"
                                result="effect2_dropShadow_9_274" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_9_274" result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint5_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint6_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint7_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint8_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint9_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint10_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint11_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint12_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint13_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint14_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint15_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint16_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.4" />
                            <stop offset="1" stop-color="white" stop-opacity="0.1" />
                        </linearGradient>
                        <linearGradient id="paint17_linear_9_274" x1="75" y1="20" x2="75"
                            y2="120" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FEFEFE" stop-opacity="0.1" />
                            <stop offset="0.32449" stop-color="#393939" />
                            <stop offset="0.663265" stop-color="#393939" stop-opacity="0.5" />
                            <stop offset="1" stop-color="#FEFEFE" stop-opacity="0.08" />
                        </linearGradient>
                    </defs>
                </svg>
            <h1 class="title text-white">MED ASSINATURAS</h1>
        
        </header>


            @yield('content')



        <footer id="footer" class="container-fluid bg-black p-2 text-center ">
            <h5 class="text-white ass">MEDGRUPO</h5>
        </footer>

    <!-- Biblioteca html2canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    
</body>

</html>
