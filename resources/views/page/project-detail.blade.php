@extends('layouts.app')

@section('title', 'Detail Project')

@section('content')

<div class="container py-4">

    {{-- Tombol kembali --}}
    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-secondary">
            ← Kembali ke Daftar Project
        </a>
    </div>

    {{-- Detail Project --}}
    <div class="row align-items-center">

        {{-- BAGIAN GAMBAR --}}
        <div class="col-md-7 mb-4 mb-md-0">

            <div class="p-4" style="background-color: #d9d47a;">

                <img src="{{ asset('img/' . $project->image) }}"
                     alt="{{ $project->title }}"
                     class="img-fluid w-100"
                     style="max-height: 500px; object-fit: contain;">

            </div>

        </div>

        {{-- BAGIAN INFORMASI --}}
        <div class="col-md-5">

            {{-- Status --}}
            <span class="badge bg-success mb-3">
                {{ $project->status }}
            </span>

            {{-- Judul --}}
            <h1 class="fw-normal mb-3">
                {{ $project->title }}
            </h1>

            {{-- Deskripsi --}}
            <p class="text-muted fs-5">
                {{ $project->description }}
            </p>

            {{-- Tech --}}
            <p class="mb-0">
                <strong>Tech:</strong> Figma & Canva
            </p>

        </div>

    </div>

</div>

@endsection