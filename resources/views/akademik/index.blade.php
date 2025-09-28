@extends('layouts.app')

@section('title', 'Data Akademik - Admin')

{{-- HALAMAN ADMIN --}}

@section('content')
<div class="container-fluid">
    <h1>Data Akademik - Admin View</h1>
    <p>Halaman untuk admin melihat semua data akademik</p>
    
    <div class="row">
        @foreach($akademik as $guru => $mapels)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5>{{ $guru }}</h5>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach($mapels as $mapel)
                        <li>{{ $mapel }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

