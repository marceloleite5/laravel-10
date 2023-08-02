<h1>Nova dúvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
<p style="color: brown">{{ $error }}</p>
    @endforeach
@endif

<a href="{{ route('supports.index')}}">Voltar</a>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input type="text" name="subject" id="" placeholder="Assunto" value="{{ old('subject') }}">

    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">
        {{ old('body')}}
    </textarea>

    <button type="submit">Enviar</button>
</form>
