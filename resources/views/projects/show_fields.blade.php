<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __('models/projects.fields.title').':') !!}
    <p>{{ $project->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('models/projects.fields.description').':') !!}
    <p>{{ $project->description }}</p>
</div>

