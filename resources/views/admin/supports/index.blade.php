@extends('admin.layouts.app')

@section('title', 'Forum')

@section('header')
@include('admin.supports.partials.header', compact('supports'))
@endsection

@section('content')

<a href="{{ route('supports.create')}}">Nova dúvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{$support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{$support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id)}}"><b>+</b></a>
                    <a href="{{ route('supports.edit', $support->id)}}"><b>Editar</b></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination :paginator="$supports"
              :appends="$filters"
/>

@endsection
