@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">📋 Data Monitoring</h1>

        <a href="{{ route('data.create', ['model' => 'lcolog']) }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah LCO Log</a>
        <a href="{{ route('data.create', ['model' => 'distribution']) }}" class="bg-green-500 text-white px-4 py-2 rounded ml-2">+ Tambah Distribusi</a>

        <div class="mt-6">
            <h2 class="text-lg font-semibold">📅 LCO Logs</h2>
            <ul>
                @foreach ($logs as $log)
                    <li>{{ $log->date }} - Done: {{ $log->done }} / Target: {{ $log->target }}
                        <a href="{{ route('data.edit', ['model' => 'lcolog', 'id' => $log->id]) }}" class="text-blue-600 ml-2">Edit</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-lg font-semibold">📦 Distribusi Produk</h2>
            <ul>
                @foreach ($distributions as $dist)
                    <li>{{ $dist->label }} - {{ $dist->jumlah }}
                        <a href="{{ route('data.edit', ['model' => 'distribution', 'id' => $dist->id]) }}" class="text-blue-600 ml-2">Edit</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
