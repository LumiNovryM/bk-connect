@extends('layout.template.siswa_dashboard')

@section('title-tab', 'LifeGuidance')

@section('siswa_content')
    <div class="card">
        <div class="card-body mt-3">
            <h5 class="card-title">Lihat Pertemuan</h5>
            <p class="card-text">This is a cool Bootstrap card. You can customize it according to your needs.</p>
            <a href="{{ route('list_bimbingan_sosial') }}" class="btn">Lihat Pertemuan</a>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Buat Bimbingan Sosial</h5>
            <p class="card-text">This is a cool Bootstrap card. You can customize it according to your needs.</p>
            <a href="{{ route('create_bimbingan_sosial') }}" class="btn">Buat Bimbingan</a>
        </div>
    </div>
@endsection
