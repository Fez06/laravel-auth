@extends('layouts.app')

@section('content')
<h1>PROJECTS LIST</h1>

@foreach ($projects as $project)

<div>
    <h2><a href="{{ route('admin.projects.show', $project) }}">{{$project->title}}</a></h2>
    <a href="{{ route('admin.projects.edit', $project) }}"><button type="button">Modifica</button></a>
    <form action="{{ route('admin.projects.destroy', $project->id) }}"
        method="POST">
        @csrf
        @method('DELETE')
        
        <input type="submit" id="delete" value="Elimina">
    </form>
</div>
 
@endforeach

<a href="{{ route('admin.projects.create') }}"><button type="button">Crea un nuovo progetto</button></a>
    
@endsection