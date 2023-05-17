@extends('layouts.app')

@section('content')
<h1>PROJECTS LIST</h1>

@foreach ($projects as $project)

<div>
    <h2>{{$project->title}}</h2>
</div>
 
@endforeach
    
@endsection