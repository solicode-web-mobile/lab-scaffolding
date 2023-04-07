<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/projects.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/projects.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>