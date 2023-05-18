@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li style="color:crimson"> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Crea un nuovo progetto!</h1>

<form action="{{ route('admin.projects.store') }}" method="POST">
@csrf

<label for="title">Title</label>
<input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">>

<label for="description">Description:</label>
<input type="text" name="description" id="description" value="{{ old('description', $project->description) }}">>

<input type="submit" value="Aggiungi Progetto!">
</form>
    
@endsection