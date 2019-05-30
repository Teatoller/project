@extends('layout')
    @section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects">

    {{ csrf_field() }}

    <span>
        <div class="field">
        <label for="title" class="label">Project Title</label>
        </div>

        <div class="control">

    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title"><br>
        </div>

    </span>
    <span>
        <div class="field">
        <label for="description" class="label">Project Description</label>
        </div>
        <div class="control">
        
    <span><textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project description"></textarea></span><br>
        </div>
    </span>
        <div class="field">
    <div class="control">

    <button type="submit" class="button is-link">Create Project</button>
    
    </div>
        </div>

        @if ($errors->any())
        <div class="notification is-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            @endif

    </form>

@endsection 

