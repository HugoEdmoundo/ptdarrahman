@extends('layouts.app')

@section('title', 'Akademik - Guru')

@section('content')
<div class="container-fluid">
    <h1>Dashboard Akademik - Guru</h1>
    <p>Halo, {{ $guru }}</p>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Mata Pelajaran yang Diajar</h5>
                </div>
                <div class="card-body">
                    @if(!empty($mapel))
                    <div class="list-group">
                        @foreach($mapel as $m)
                        <a href="{{ route('akademik.guru.show', $m) }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-book me-2"></i>{{ $m }}
                        </a>
                        @endforeach
                    </div>
                    @else
                    <p class="text-muted">Anda belum memiliki mata pelajaran yang ditugaskan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection