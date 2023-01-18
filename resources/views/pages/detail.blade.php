@extends('layouts.home')
@section('title', $viewData['title'])
@section('content')
    <section class="detail">
        <p class="bar">
            <a href="/">Home</a> &#62; <span>{{ $viewData['project']->getTitle() }}</span>
        </p>
        <div class="project__detail">
            <h1>{{ $viewData['project']->getTitle() }}</h1>
            <div class="stack">
                <span><strong>Stack: </strong>{{ $viewData['project']->getStack() }}</span>
                <span class="date"><strong>Last Update: </strong>{!! date('d-M-y', strtotime($viewData['project']->getUpdatedAt())) !!}</span>
            </div>
            <img src="{{ asset('/public/storage/'.$viewData['project']->getImage()) }}" alt="{{ $viewData['project']->getTitle() }}" width="250px">
            <article>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia asperiores aspernatur laborum harum voluptates qui, 
                illo maxime laudantium veritatis beatae blanditiis, porro aliquid. Ut at ullam, repellat consectetur ipsam laboriosam.
            </article>
            <div class="links">
                <a href="{{ $viewData['project']->getGithub() }}" target="_blank">Github</a>
                <a href="{{ $viewData['project']->getDemo() }}" target="_blank">Demo</a>
            </div>
        </div>
    </section>   
@endsection