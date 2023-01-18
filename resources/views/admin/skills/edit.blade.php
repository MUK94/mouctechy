@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="navigation">
                @include('inc.sidenav')
            </div>
            <div class="display-projects">
                <div class="project-row">
                    <h2>Edit Skill</h2>
                    <div class="create-form">
                        <form action="{{ route('admin.skills.update', ['id'=>$viewData['skill']->getId()]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label htmlfor="title">Title</label>
                            <input id="title" type="text" name="title" value="{{ $viewData['skill']->getTitle() }}"  required />
                            
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