<h1>Listagem dos suportes</h1>
<a href="{{ route('supports.create')}}">Nova dúvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{$support->subject }}</td>
                <td>{{$support->status }}</td>
                <td>{{$support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id )}}"><b>+</b></a>
                    <a href="{{ route('supports.edit', $support->id )}}"><b>Editar</b></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
