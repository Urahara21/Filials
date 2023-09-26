@extends('layouts.app')

@section('content')
    <h1>Список филиалов</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <a href="{{ route('filials.create') }}" class="btn btn-primary mb-3">Добавить филиал</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Адрес</th>
            <th>Состояние</th>
            <th>Широта</th>
            <th>Долгота</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($filials as $filial)
            <tr>
                <td>{{ $filial->id }}</td>
                <td>{{ $filial->name }}</td>
                <td>{{ $filial->address }}</td>
                <td>{{ $filial->state->name }}</td>
                <td>{{ $filial->latitude }}</td>
                <td>{{ $filial->longitude }}</td>
                <td>
                    <a href="{{ route('filials.delete', $filial->id) }}" class="btn btn-danger btn-sm">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
