@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('notification.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label class="mb-0">Descrição</label>
            <input class="form-control" type="text" name="describe" placeholder="Descrição">
        </div>

        <button class="btn btn-primary">
            Salvar
        </button>
    </form>

</div>
@endsection