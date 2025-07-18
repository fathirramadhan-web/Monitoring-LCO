@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Tambah Data {{ ucfirst($model) }}</h1>

    <form method="POST" action="{{ route('data.store', ['model' => $model]) }}">
        @csrf

        @if ($model === 'lcolog')
            <label>Tanggal</label>
            <input type="date" name="date" required><br>
            <label>Done</label>
            <input type="number" name="done" required><br>
            <label>Target</label>
            <input type="number" name="target" required><br>
        @else
            <label>Label</label>
            <input type="text" name="label" required><br>
            <label>Jumlah</label>
            <input type="number" name="jumlah" required><br>
        @endif

        <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
