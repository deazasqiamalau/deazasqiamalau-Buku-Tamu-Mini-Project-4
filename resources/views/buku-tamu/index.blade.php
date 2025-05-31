@extends('layout')

@section('title', 'Daftar Buku Tamu')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-4">Daftar Buku Tamu</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('buku-tamu.create') }}" class="btn btn-custom mb-4">+ Tambah Tamu</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Instansi</th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tamu as $tamu)
                    <tr>
                        <td>{{ $tamu->nama }}</td>
                        <td>{{ $tamu->email }}</td>
                        <td>{{ $tamu->instansi }}</td>
                        <td>{{ $tamu->pesan }}</td>
                        <td>{{ \Carbon\Carbon::parse($tamu->waktu_kunjungan)->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('buku-tamu.edit', $tamu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('buku-tamu.destroy', $tamu->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
