@extends('layouts.app')

@section('page-title', $project->title)
@section('content')
  <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back to all projects</a>
  <hr>
  <div class="row">
    <div class="col-8">
      <img src="{{ $project->getImageThumb() }}" alt="Project Thumbnail" width="240px" class="d-block mb-4">
      <p><strong>Description:</strong><br> {{ $project->description }}</p>
    </div>
    <div class="col-4 text-end">
      <h3>Type:</h3>
      <span class="badge rounded-pill"
        style="background-color: {{ $project->type?->color ?? 'black' }}">{{ $project->type?->label ?? 'No type' }}</span>

      <h3 class="mt-5">Technologies:</h3>
      @forelse ($project->technologies as $technology)
        <span class="badge rounded-pill"
          style="background-color: {{ $technology->color }}">{{ $technology->label }}</span>
      @empty
        Nessun label
      @endforelse
    </div>
  </div>
@endsection
