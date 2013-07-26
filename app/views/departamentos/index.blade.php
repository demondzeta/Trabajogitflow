@extends('layouts.scaffold')

@section('main')

<h1>All Departamentos</h1>

<p>{{ link_to_route('departamentos.create', 'Add new departamento') }}</p>

@if ($departamentos->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
				<th>Codigo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{{ $departamento->nombre }}}</td>
					<td>{{{ $departamento->codigo }}}</td>
                    <td>{{ link_to_route('departamentos.edit', 'Edit', array($departamento->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('departamentos.destroy', $departamento->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no departamentos
@endif

@stop