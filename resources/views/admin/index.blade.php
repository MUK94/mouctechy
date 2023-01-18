@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="navigation">
                @include('inc.sidenav')
            </div>
            <div class="display-projects">
                <h2>Projects</h2>
                <div class="project-row">
                    <table>
                        <thead>
                            <th>Title</th>
                            <th>Stack</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        @foreach ($viewData['projects'] as $project)
                            <tbody>
                                <tr class="box">
                                    <td>{{ $project->getTitle() }}</td>
                                    <td>{{ $project->getStack() }}</td>
        
                                    <td>
                                        <a href="{{ route('admin.edit', ['id'=>$project->getId()]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="1em" 
                                            height="1em" 
                                            preserveAspectRatio="xMidYMid meet" 
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575q.837 0 1.412.575l1.4 1.4q.575.575.6 1.388q.025.812-.55 1.387ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6Z"/></svg>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.delete', ['id'=>$project->getId()]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="del">
                                                <svg xmlns="http://www.w3.org/2000/svg" 
                                                    width="1em" 
                                                    height="1em" 
                                                    preserveAspectRatio="xMidYMid meet" 
                                                    viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="display-projects skills-admin">
                    <h2>Skills</h2>
                    <div class="project-row">
                        <table>
                            <thead>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            @foreach ($viewData['skills'] as $skill)
                                <tbody>
                                    <tr class="box">
                                        <td>{{ $skill->getTitle() }}</td>
                                        <td>
                                            <a href="{{ route('admin.skills.edit', ['id'=>$skill->getId()]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" 
                                                width="1em" 
                                                height="1em" 
                                                preserveAspectRatio="xMidYMid meet" 
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor" d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575q.837 0 1.412.575l1.4 1.4q.575.575.6 1.388q.025.812-.55 1.387ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6Z"/></svg>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.skills.delete', ['id'=>$skill->getId()]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="del">
                                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                                        width="1em" 
                                                        height="1em" 
                                                        preserveAspectRatio="xMidYMid meet" 
                                                        viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection