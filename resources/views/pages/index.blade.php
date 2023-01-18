@extends('layouts.home')

@section('content')
    <!-- Banner About me -->
    <section id="home" class="section about">
            <div class="container">
                <div class="title">
                    <h1>Full-stack Web Developer</h1>
                </div>
                <div class="banner">
                    <img src="{{ asset('/public/img/amadou.webp') }}" alt="Thierno Amadou Mouctar Balde">
                    <div class="description">
                        <span>
                            I'm <b>Mouctar</b>, looking for a <b>Junior PHP/Laravel</b> position <br>
                            I love Coding and Travelling.
                        </span> 
                    </div>
                    <div class="social">
                        <a href="https://twitter.com/MouctarDaka" target="_blank" aria-label="twitter" class="twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/MUK94" target="_blank" aria-label="github" class="github">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/thierno-amadou-mouctar-balde-595578155/" target="_blank" aria-label="linkedIn" class="linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="1em" 
                                height="1em" 
                                preserveAspectRatio="xMidYMid meet" 
                                viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <div class="area" >
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div >
    </section>

    <section id="projects" class="section project">
        <h2>Top Projects</h2>
        <div class="container">
            @foreach ($viewData['projects'] as $project)              
            <div class="card-project">
                <img src="{{ asset('/public/storage/'.$project->getImage()) }}" alt="{{ $project->getTitle() }}">
                <div class="contenu">
                    <div class="stack">
                        <span>
                            {{ $project->getStack() }}
                        </span>
                    </div>
                    <a href="/project/{{ $project->getSlug() }}" class="title">
                        <h3>{{ $project->getTitle() }}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="1em" 
                            height="1em" 
                            preserveAspectRatio="xMidYMid meet" 
                            viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2Z"/>
                        </svg>
                    </a>
                    <p class="body">
                        {{ $project->getDescription() }}
                    </p>
                    <div class="links">
                        <a href="{{ $project->getGithub() }}" target="_blank">Github</a>
                        <a href="{{ $project->getDemo() }}" target="_blank">Demo</a>
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </section>

    <!-- Slider About-->
    <section id="about" class="myself section">
        <div class="section__title section__title--me">
            <h2 class="section__description">Who is Mouctar ?</h2>
        </div>
        <div class="slider">
            <div class="slide">
                <div class="me">
                <h3 class="me__header">
                    Formal Education
                </h3>
                <blockquote class="me__text">
                    I hold a Master of Science (MSc) in Electrical Engineering
                    from Pan African University hosted in Jomo Kenyatta University and 
                    I am certified author by the Indonesian Journal of Electrical Engineering
                    and Computer Science 
                    <a href="http://doi.org/10.11591/ijeecs.v27.i1.pp309-317" target="_blank">(IJEECS)</a>
                </blockquote>
                <address class="me__author">
                    <img src="{{ asset('/public/img/MouctarBalde.webp') }}" alt="" class="me__photo" />
                    <h6 class="me__name">Thierno Amadou</h6>
                    <p class="me__location">Conakry, GN</p>
                </address>
                </div>
            </div>
            
            <div class="slide">
                <div class="me">
                <h3 class="me__header">
                    My Journey into Coding
                </h3>
                <blockquote class="me__text">
                    I was introduced to C programming and OOP in C++ for the first time in 2015, 
                    as an Electronics Engineering student at the University of Conakry (UGANC). 
                    It was an awful experience, but after hearing that this is what you need to create websites 
                    like Facebook, I fell in love with it. After graduating in 2019, 
                    I took Mathieu Nebra's PHP & MySQL course on Openclassroom, I was amazed, and Web Development has since been my passion.
                </blockquote>
                <address class="me__author">
                    <img src="{{ asset('/public/img/amadou.webp') }}" alt="" class="me__photo" />
                    <h6 class="me__name">Thierno Amadou</h6>
                    <p class="me__location">Conakry, GN</p>
                </address>
                </div>
            </div>
            
            <div class="slide">
                <div class="me">
                <h3 class="me__header">
                    Aspiration
                </h3>
                <blockquote class="me__text">
                    The freedom that a career in software development provides is what motivates me to pursue it. 
                    One can work remotely, freelance, or go on an entrepreneurial path. Although it takes a 
                    lot of energy and attention to continual study to get there, it's worth it. 
                    I enjoy web programming because I enjoy making things.
                </blockquote>
                <address class="me__author">
                    <img src="{{ asset('/public/img/balde.webp') }}" alt="" class="me__photo" />
                    <h6 class="me__name">Thierno Amadou</h6>
                    <p class="me__location">Conakry, GN</p>
                </address>
                </div>
            </div>
            
            <!-- silder  buttons and dots -->
            <button aria-label="none" class="slider__btn slider__btn--left">&larr;</button>
            <button aria-label="none" class="slider__btn slider__btn--right">&rarr;</button>
            
            <div class="dots"></div>
        </div>
    </section>

    <section id="skills" class="section skills">
        <h2>Skills</h2>
        <div class="skills-container">
            <ul class="title">
                <li>
                    <button aria-label="none" id="experience" class="active" >
                        <h3>Experience with</h3>
                    </button>
                </li>
                <li>
                    <button aria-label="none" id="learning">
                        <h3>Proficient in</h3>
                    </button>
                </li>
            </ul>
            <!-- Experience With -->
            <div class="boxSkill" id="">
                @foreach ($viewData['skills'] as $skill)    
                    <div class="description">
                        <img src="{{ asset('/public/storage/'.$skill->getImage()) }}" alt="{{ $skill->getTitle() }}">
                        <span>
                            {{ $skill->getTitle()  }}
                        </span>
                    </div>
                @endforeach

            </div>
            <!-- Still Learning -->
            <div class="hidden">
                <div class="description">
                    <img src="/public/img/bootstrap.webp" alt="bootstrap">
                    <span>Bootstrap</span>
                </div>
                <div class="description">
                    <img src="/public/img/sass.webp" alt="sass">
                    <span>SASS</span>
                </div>
                <div class="description">
                    <img src="/public/img/python.webp" alt="python">
                    <span>Python</span>
                </div>
                <div class="description">
                    <img src="/public/img/django.webp" alt="django">
                    <span>Django</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section services">
        <h2>Services</h2>
        <div class="service-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h4 class="name">Web Development</h4>
                        <p class="name">
                            I offer full-stack web application development 
                            services, from planning to maintenance by applying
                            software development best practices. Think it, I web it!
                        </p>

                    </div>
                </div>
                <div class="face face2">
                    <h5>Web Development</h5>
                    <img src="{{ asset('/public/img/coding.webp') }}" alt="Web Development">
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h4 class="name">Graphic Design</h4>
                        <p class="name">
                            I offer Photoshop, Canva, OBS and 
                            wondershare Filmora services. This include all
                            kind of digital contents - Photos, posters,
                            videos for your youtube channel, etc.
                        </p>

                    </div>
                </div>
                <div class="face face2">
                    <h5>Graphic Design</h5>
                    <img src="/public/img/design.webp" alt="Graphic Design">
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h4 class="name">Data Entry</h4>
                        <p class="name">
                            I can automate the booring staff 
                            for you! Microsoft excel, MS Visio, 
                            academic writing, Data Visualization, etc
                        </p>   
                    </div>
                </div>
                <div class="face face2">
                    <h5>Data Entry</h5>
                    <img src="{{ asset('/public/img/typing.webp') }}" alt="Data Entry">
                </div>
            </div>                  
        </div>
        <div class="contact-btn">
            <a href="mailto:mklecodeur@gmail.com" class="menu__link" aria-label="email">Get a Quote</a>
        </div>
    </section>
@endsection