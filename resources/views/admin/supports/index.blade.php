<h1>Listagem do Suportes</h1>

<a href="{{ route('supports.create') }}">Criar dúvidas</a>

<table>
    <thead>
        <th>Assuntos</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">Ir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>