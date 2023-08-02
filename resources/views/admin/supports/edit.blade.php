<h1>Dúvida {{ $support->id}}</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
<p style="color: brown">{{ $error }}</p>
    @endforeach
@endif

<a href="{{ route('supports.index')}}">Voltar</a>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <input type="text" name="subject" id="" placeholder="Assunto" value="{{ $support->subject }}">

    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">
        {{ $support->body }}
    </textarea>

    <button type="submit">Enviar</button>
</form>
