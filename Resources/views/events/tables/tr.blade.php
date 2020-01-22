<tr>
	<td class="align-middle">{{ $event->name }}</td>
	<td class="align-middle">{{ $event->token }}</td>
	<td class="text-right align-middle">
		{{ Form::Open(['route' => ['admin.events.destroy', $event->company->id, $event->id], 'method' => 'delete']) }}
		<div class="btn-group" role="group">
			<a href="{{ route('admin.events.edit', [$event->company, $event]) }}" class="btn btn-primary"><i class="fa fa-cog"></i></a>
			{{ Form::button('<i class="fa fa-trash-o"></i>', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
		</div>
		{{ Form::Close() }}
	</td>
</tr>