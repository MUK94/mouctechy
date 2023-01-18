@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="navigation">
                @include('inc.sidenav')
            </div>
            <div class="display-projects">
                <div class="project-row">
                    <h2>Edit Project</h2>
                    <div class="create-form">
                        <form action="{{ route('admin.update', ['id'=>$viewData['project']->getId()]) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <label htmlfor="title">Title</label>
                            <input id="title" type="text" name="title" value="{{ $viewData['project']->getTitle() }}"  required />
                            
                            <label htmlfor="stack">Stack</label>
                            <input id="stack" type="text" name="stack" value="{{ $viewData['project']->getStack() }}"  required />
                            
                            <label htmlfor="github">Github</label>
                            <input id="github" type="text" name="github" value="{{ $viewData['project']->getGithub() }}"  required />
                            
                            <label htmlfor="demo">Demo</label>
                            <input id="demo" type="text" name="demo" value="{{ $viewData['project']->getDemo() }}" required />

                            <label htmlfor="editor">Description</label>
                            <textarea id="editor" class="description" name="description" required>
                                {{ $viewData['project']->getDescription() }}
                            </textarea>
                            
                            <div class="submit">
                                <input id="file" type="file" name="image"/>
                                <button type="submit">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection