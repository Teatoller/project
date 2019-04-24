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

    <input type="text" class="input" name="title" placeholder="Project title" required ><br>
        </div>

    </span>
    <span>
        <div class="field">
        <label for="description" class="label">Project Description</label>
        </div>
        <div class="control">
        
    <span><textarea name="description" class="textarea" placeholder="Project description" required ></textarea></span><br>
        </div>
    </span>
    <div>

    <button type="submit" class="button is-link">Create Project</button>
    
    </div>
    </form>

@endsection 

