@extends('layouts.app')

@section('content')
<h1>PROJECTS LIST</h1>

@foreach ($projects as $project)

<div>
    <h2><a href="{{ route('admin.projects.show', $project->id) }}">{{$project->title}}</a></h2>
</div>
 
@endforeach

<a href="{{ route('admin.projects.create') }}"><button type="button">Crea un nuovo progetto</button></a>
    
@endsection