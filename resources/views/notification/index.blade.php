@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{ route('notification.create') }}">
        Nova Notificação
    </a>

    <hr>

    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @forelse($notifications as $notification)
            <tr>
                <td>{{ $notification->id }}</td>
                <td>{{ $notification->describe }}</td>
                <td>{{ $notification->status ? 'Ativo' : 'Inativo' }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('notification.edit', $notification->id) }}">
                        Editar
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="font-weight-bold">Não há notificações por aqui</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection