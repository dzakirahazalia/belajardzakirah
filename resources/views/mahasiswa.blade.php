@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow-sm border-0">

                {{-- Header Profile --}}
                <div class="card-body text-center py-4">

                    <img 
                        src="{{ asset('img/foto.jpg') }}" 
                        alt="Foto Profil"
                        class="rounded-circle mb-3"
                        style="width: 120px; height: 120px; object-fit: cover;"
                    >

                    <h2 class="fw-bold mb-1">
                        {{ $mahasiswa['nama'] }}
                    </h2>

                    <span class="badge bg-success">
                        {{ $mahasiswa['status'] }}
                    </span>

                </div>

                {{-- Data Mahasiswa --}}
                <div class="card-body border-top">

                    <div class="row py-3 border-bottom">
                        <div class="col-sm-4 fw-bold text-muted">
                            NIM
                        </div>
                        <div class="col-sm-8">
                            {{ $mahasiswa['nim'] }}
                        </div>
                    </div>

                    <div class="row py-3 border-bottom">
                        <div class="col-sm-4 fw-bold text-muted">
                            Email
                        </div>
                        <div class="col-sm-8">
                            {{ $mahasiswa['email'] }}
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-sm-4 fw-bold text-muted">
                            Program Studi
                        </div>
                        <div class="col-sm-8">
                            {{ $mahasiswa['prodi'] }}
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection