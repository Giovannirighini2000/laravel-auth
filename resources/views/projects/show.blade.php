@extends('layouts.app')


@section('content')
    
<div class="container">
    <div class="d-flex">
        <div >
            <h1>{{$project->title}}</h1>
            <p>{{$project->slug}}</p>
            <p>{{$project->description}}</p>
            <p>{{$project->date}}</p>
            <p>{{$project->url}}</p>
            
        </div>
        <div>
            <a class="btn" href="{{route('projects.edit',$project)}}">MODIFICA</a>
        </div>

    </div>
    

</div>

@endsection