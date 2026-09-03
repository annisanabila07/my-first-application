@extends('layouts.admin')

@section('title', 'Dashboard - Admin Desa Sukamaju')
@section('page_title', 'Ringkasan Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-lg p-5 shadow-sm border-l-4 border-blue-500">
        <div class="text-gray-500 text-sm font-medium">Total Berita Ditulis</div>
        <div class="text-3xl font-bold text-gray-800 mt-1">{{ $totalBerita }}</div>
    </div>
    <div class="bg-white rounded-lg p-5 shadow-sm border-l-4 border-emerald-500">
        <div class="text-gray-500 text-sm font-medium">Total Dokumentasi Galeri</div>
        <div class="text-3xl font-bold text-gray-800 mt-1">{{ $totalGaleri }}</div>
    </div>
    <div class="bg-white rounded-lg p-5 shadow-sm border-l-4 border-amber-500">
        <div class="text-gray-500 text-sm font-medium">Potensi & UMKM Desa</div>
        <div class="text-3xl font-bold text-gray-800 mt-1">{{ $totalPotensi }}</div>
    </div>
</div>

<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-bold text-gray-800">Berita Terbaru</h2>
        <a href="{{ route('berita.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700">+ Tambah Berita Baru</a>
    </div>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-100 text-gray-600 text-xs uppercase tracking-wider">
                <th class="p-3 border-b">Judul Berita</th>
                <th class="p-3 border-b">Tanggal Buat</th>
                <th class="p-3 border-b text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            @forelse($beritaTerbaru as $item)
            <tr>
                <td class="p-3 font-medium text-gray-800">{{ $item->judul }}</td>
                <td class="p-3 text-gray-500">{{ $item->created_at->format('d M Y') }}</td>
                <td class="p-3 text-center space-x-2">
                    <a href="{{ route('berita.edit', $item->id) }}" class="text-amber-600 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="p-3 text-center text-gray-500">Belum ada berita ditambahkan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
