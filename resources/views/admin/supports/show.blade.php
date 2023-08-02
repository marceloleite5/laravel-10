<h1>Detalhes da dúvida {{ $support->id }}</h1>
<a href="{{ route('supports.index')}}">Voltar</a>
<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Assunto: {{ $support->status }}</li>
    <li>Assunto: {{ $support->body }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id )}}" method="post">
    @csrf()
    @method('DELETE')
<button type="submit">Excluir</button>
</form>
