<div class="modal fade" id="modal_companies_observation_view_{{ $company->id }}" tabindex="-1" role="dialog" aria-labelledby="modal_companies_observation_view_{{ $company->id }}" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{ Form::model($company, ['route' => ['admin.companies.update', $company], 'method' => 'put']) }}
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">{{ 'Observações - '.$company->name }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-left">
				<div class="form-group">
					{{ Form::textarea('observation', null, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class="modal-footer  justify-content-start">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>