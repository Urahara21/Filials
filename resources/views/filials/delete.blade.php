@extends('layouts.app')

@section('content')
    <h1>Удалить филиал</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form method="POST" action="{{ route('filials.destroy', $filial->id) }}">
        @csrf
        @method('DELETE')
        <p>Вы уверены, что хотите удалить филиал "{{ $filial->name }}"?</p>
        <button type="submit" class="btn btn-danger">Да, удалить</button>
    </form>
@endsection
