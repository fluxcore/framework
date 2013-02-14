@extends('layout.debug')

@section('title')
	@parent {{ get_class($e) }}
@stop

@section('content')
	<h2>fluxcore<span>debug</span></h2>

	<h3>exception<span>message</span></h3>
	<p>
		{{ $e->getMessage() }}<br/>
		<small>{{ $e->getFile() }}:{{ $e->getLine() }}</small>
	</p>

	<h3>stack<span>trace</span></h3>
	<div class="table-container">
		<table>
			<tr><th>Function</th><th>File</th><th>Line</th></tr>

			@foreach ($e->getTrace() as $trace)
			<tr>
				@if (isset($trace['class']))
				<td>{{ $trace['class'] }}{{ $trace['type'] }}{{ $trace['function'] }}()</td>
				@else
				<td>{{ $trace['function'] }}()</td>
				@endif
				<td>{{ $trace['file'] }}</td>
				<td>{{ $trace['line'] }}</td>
			</tr>
			@endforeach
		</table>
	</div>
@stop