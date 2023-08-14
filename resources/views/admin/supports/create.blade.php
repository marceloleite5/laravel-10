<h1>Nova dúvida</h1>

<x-alert></x-alert>

<a href="{{ route('supports.index')}}">Voltar</a>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>
