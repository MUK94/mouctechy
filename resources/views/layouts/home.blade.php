<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Thierno Amadou Mouctar Balde, Full-stack Web Developer">
        <meta name="description" content="Portfolio website, all about Web Development">
        <meta name="keywords" content="Web Development, JavaScript, Laravel, MySQL">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="{{ asset('/public/logo.png') }}" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;600&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/css/admin.css') }}">

    
        <title>@yield('title', 'Mouctechy')</title>
    </head>
    <body>
        <!-- Navigation -->
        <header class="header">
            <a href="/" class="logo">
                <img src="{{ asset('/public/img/favicon.webp') }}" alt="mouctechy">
            </a>
            <nav class="nav">
                <ul class="menu">
                    <li>
                        <a href="tel:+254758375665" class="menu__link" aria-label="phone">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.95 21q-3.225 0-6.287-1.438q-3.063-1.437-5.425-3.8q-2.363-2.362-3.8-5.425Q3 7.275 3 4.05q0-.45.3-.75t.75-.3H8.1q.35 0 .625.225t.325.575l.65 3.5q.05.35-.012.637q-.063.288-.288.513L7 10.9q1.05 1.8 2.625 3.375T13.1 17l2.35-2.35q.225-.225.588-.338q.362-.112.712-.062l3.45.7q.35.075.575.337q.225.263.225.613v4.05q0 .45-.3.75t-.75.3Z"/>
                            </svg>
                            <span>Call me</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:mklecodeur@gmail.com" class="menu__link" aria-label="email">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-1 14H5c-.55 0-1-.45-1-1V8l6.94 4.34c.65.41 1.47.41 2.12 0L20 8v9c0 .55-.45 1-1 1zm-7-7L4 6h16l-8 5z"/>
                            </svg>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li>
                        <button aria-label="none" class="menuBtn btn" class="menu__link" onclick="openNav()">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2Z"/>
                            </svg>
                        </button>
                    </li>
                </ul>
                <ul class="mobile-menu" id="sideNav" onclick="closeNav()">
                    <li><span class="closeBtn">&times;</span></li>
                    <li class="mobile-menu-link"><a href="#home">Home</a></li>
                    <li class="mobile-menu-link"><a href="#projects">Projects</a></li>
                    <li class="mobile-menu-link"><a href="#about">About</a></li>
                    <li class="mobile-menu-link"><a href="#skills">Skills</a></li>
                    <li class="mobile-menu-link"><a href="#services">Services</a></li>
                </ul>
            </nav>
        </header>
    
        <!-- Main content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="section footer">
            <div class="container">
                <div class="col-1">
                    <h5>Find me</h5>
                    <ul>
                        <li class="footer__item">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 7.35q3.05-2.8 4.525-5.088Q18 11.975 18 10.2q0-2.725-1.738-4.463Q14.525 4 12 4Q9.475 4 7.737 5.737Q6 7.475 6 10.2q0 1.775 1.475 4.062Q8.95 16.55 12 19.35Zm0 2.275q-.2 0-.4-.075t-.35-.2Q7.6 18.125 5.8 15.363Q4 12.6 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.4-1.8 5.163q-1.8 2.762-5.45 5.987q-.15.125-.35.2q-.2.075-.4.075ZM12 10.2Z"/>
                            </svg>
                            <address>
                                <span>GN, Conakry</span>
                                <span>Ratoma</span>
                            </address>
                        </li>
                    </ul>
                </div>
                <div class="col-1">
                    <h5>Connect with me</h5>
                    <ul>
                        <li class="footer__item">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/>
                            </svg>
                            <a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/" target="_blank" class="linkedIn">
                                <span>Linkedin</span>
                            </a>
                        </li>
                        <li class="footer__item">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"/>
                            </svg>
                            <a href="https://twitter.com/MouctarDaka" target="_blank" class="twitter">
                                <span>Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1">
                    <h5>My Channel</h5>
                    <ul>
                        <li class="footer__item">
                            <div class="g-ytsubscribe" data-channelid="UCTJqEvE24klETyG6631IUSw" data-layout="default" data-count="default"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <small>© 2021 - 2022 Thierno Amadou Mouctar Balde, All rights reserved</small>
            </div>

        </footer>
        <!-- JavaScript -->

        <script>
            function openNav() {
                document.getElementById('sideNav').style.width = "320px";
            }
            function closeNav() {
                document.getElementById('sideNav').style.width = "0";
            }
        </script>
    
        <script src="{{ asset('/public/js/index.js') }}"></script>
        <script src="https://apis.google.com/js/platform.js"></script>
    
    </body>
</html>