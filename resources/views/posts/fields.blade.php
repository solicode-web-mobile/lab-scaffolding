<!-- Member Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', __('models/posts.fields.member_id').':') !!}
    {!! Form::number('member_id', null, ['class' => 'form-control', 'required']) !!}
</div>