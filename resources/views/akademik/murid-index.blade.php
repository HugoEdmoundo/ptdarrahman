@extends('layouts.app')

@section('title', 'Akademik - Murid')

@section('content')
<div class="container-fluid">
    <h1>Mata Pelajaran</h1>
    <p>Daftar mata pelajaran yang tersedia</p>
    
    <div class="row">
        @foreach($akademik as $guru => $mapels)
            @foreach($mapels as $mapel)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mapel }}</h5>
                        <p class="card-text">Guru: {{ $guru }}</p>
                        <a href="{{ route('akademik.murid.show', $mapel) }}" class="btn btn-primary">
                            Lihat Materi
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</div>
@endsection