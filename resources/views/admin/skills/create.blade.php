@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="navigation">
                @include('inc.sidenav')
            </div>
            <div class="display-projects">
                <div class="project-row">
                    <h2>Add New Skill</h2>
                    <div class="create-form">
                        <form action="/admin/skills/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <label htmlfor="title">Title</label>
                            <input id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Title"  required />
                            
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