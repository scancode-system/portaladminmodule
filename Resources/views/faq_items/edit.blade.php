@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Editando FAQ - {{ $faq_item->id }}</h5>
	<div class="card-body">
		{{ Form::model($faq_item, ['route' => ['admin.faq_items.update', $faq_item], 'method' => 'put']) }}
		<div class="form-group">
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
		</div>
		<div class="form-group">
			{{ Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Coloque aqui o conteudo do FAQ']) }}
		</div>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('admin.faq_topics') }}">Lista de FAQ - Topicos</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('admin.faq_items', $faq_item->faq_topic) }}">Lista de FAQ - Topicos</a>
</li>
<li class="breadcrumb-item text-capitalize">Editando FAQ</li>
@endsection