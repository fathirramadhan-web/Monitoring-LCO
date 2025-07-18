@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Edit Data {{ ucfirst($model) }}</h1>

    <form method="POST" action="{{ route('data.update', ['model' => $model, 'id' => $data->id]) }}">
        @csrf
        @method('PUT')

        @if ($model === 'lcolog')
            <label>Tanggal</label>
            <input type="date" name="date" value="{{ $data->date }}" required><br>
            <label>Done</label>
            <input type="number" name="done" value="{{ $data->done }}" required><br>
            <label>Target</label>
            <input type="number" name="target" value="{{ $data->target }}" required><br>
        @else
            <label>Label</label>
            <input type="text" name="label" value="{{ $data->label }}" required><br>
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $data->jumlah }}" required><br>
        @endif

        <button type="submit" class="mt-2 bg-green-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
