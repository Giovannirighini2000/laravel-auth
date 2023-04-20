@extends('layouts.app')


@section('content')
    <div class="container">
        <div>
            <h1>
                I tuoi progetti
            </h1>
            <div>
                <a class="btn" href="{{route('projects.create')}}">Nuovo progetto</a>
            </div>
        </div>
        <div class="container">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>TITOLO</th>
                        <th>SLUG</th>
                        <th>DESCRIZIONE</th>
                        <th>DATE</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td><a href="{{route('projects.show',$project)}}">{{$project->title}}</a></td>
                        <td>{{$project->slug}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->date}}</td>
                        <td>{{$project->url}}</td>
                        <td>
                            <a class="btn " href="{{route('projects.edit',$project)}}">MODIFICA</a>
                        </td>
                    </tr>
                    @empty 
                    <tr>
                        <td>Vuoto</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </div>


@endsection