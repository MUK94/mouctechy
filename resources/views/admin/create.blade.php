@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="navigation">
                @include('inc.sidenav')
            </div>
            <div class="display-projects">
                <div class="project-row">
                    <h2>Add New Project</h2>
                    <div class="create-form">
                        <form action="/admin/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <label htmlfor="title">Title</label>
                            <input id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Title"  required />
                            
                            <label htmlfor="stack">Stack</label>
                            <input id="stack" type="text" name="stack" value="{{ old('stack') }}" placeholder="stack"  required />
                            
                            <label htmlfor="github">Github</label>
                            <input id="github" type="text" name="github" value="{{ old('github') }}" placeholder="github"  required />
                            
                            <label htmlfor="demo">Demo</label>
                            <input id="demo" type="text" name="demo" value="{{ old('demo') }}" placeholder="demo"  required />

                            <label htmlfor="editor">Description</label>
                            <textarea id="editor" class="description" name="description" value="{{ old('description') }}" placeholder=""  required>
                            </textarea>
                            
                            <div class="submit">
                                <input id="file" type="file" name="image"  required/>
                                <button type="submit">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection