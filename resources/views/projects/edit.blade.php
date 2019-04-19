@extends('layout')

@section('content')

<h1>Edit Project</h1>

<form>
    <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>
</form>

@endsection
