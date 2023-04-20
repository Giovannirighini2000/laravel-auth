
@extends('layouts.app')


@section('content')
    
<div>
    modifica
  </div>
  <div class="container">
      <form action="{{ route('projects.store') }}" method="POST">
  
          @csrf
          
    
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
          </div>
  
          <div class="mb-3">
              <label for="slug" class="form-label">slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
          </div>
    
          <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
          </div>
    
          
    
          <div class="mb-3">
            <label for="date" class="form-label">date </label>
            <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
          </div>
    
          <div class="mb-3">
            <label for="url" class="form-label">url project</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
          </div>
    
        </div>
    
          <button type="submit" class="btn btn-primary">Salva</button>
      </form>
      @if ($errors->any())
      <div class="alert alert-danger mt-3">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
        
      </div>
  @endif
    
  
  </div>

@endsection


