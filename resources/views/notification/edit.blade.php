@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('notification.update', $notification->id) }}" method="post">
        @csrf
        @method('put')
        
        <div class="form-group">
            <label class="mb-0">Descrição</label>
            <input class="form-control" type="text" name="describe" 
                   placeholder="Descrição" value="{{ $notification->describe }}">
        </div>

        <button class="btn btn-primary">
            Salvar
        </button>
    </form>
</div>
@endsection