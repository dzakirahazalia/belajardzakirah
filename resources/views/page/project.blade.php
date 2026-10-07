@extends('layouts.app')

@section('title', 'Project')

@section('content')

<div class="mb-4 text-center">
    <h2 class="fw-bold">Portofolio Project</h2>
    <p class="text-muted">
        Daftar Project yang pernah dikerjakan oleh mahasiswa.
    </p>
</div>

<div class="row justify-content-center">

    @foreach ($projects as $project)

        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm border-0">

                <img src="{{ asset('img/' . $project->image) }}"
                     alt="Project Image"
                     class="card-img-top"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body">

                    <span class="badge {{ $project->status == 'selesai' ? 'bg-success' : 'bg-danger' }} mb-2">
                        {{ $project->status }}
                    </span>

                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>

                    <p class="card-text">
                        {{ Str::limit($project->description, 100) }}
                    </p>

                    <a href="{{ route('project.show', $project->id) }}"
                       class="btn btn-primary">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>

{{-- Pagination --}}
<div class="d-flex justify-content-center mt-5">
    {{ $projects->links('pagination::bootstrap-5') }}
</div>

@endsection