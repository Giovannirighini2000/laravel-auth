@extends('layouts.app')


@section('content')
    
<div>
    modifica
  </div>
  <div class="container">
      <form action="{{ route('projects.update',$project) }}" method="POST">
  
          @csrf
          @method('PUT')
    
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$project->title) }}">
          </div>
  
          <div class="mb-3">
              <label for="slug" class="form-label">slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug',$project->slug) }}">
          </div>
    
          <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description',$project->description) }}">
          </div>
    
          
    
          <div class="mb-3">
            <label for="date" class="form-label">date </label>
            <input type="text" class="form-control" id="date" name="date" value="{{ old('date',$project->date) }}">
          </div>
    
          <div class="mb-3">
            <label for="url" class="form-label">url project</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url',$project->url) }}">
          </div>
    
        </div>
    
          <button type="submit" class="btn btn-primary">Salva</button>
      </form>
    
  
  </div>

@endsection