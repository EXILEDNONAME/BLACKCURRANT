<div class="form-group row">
  <label class="col-lg-3 col-form-label"> User </label>
  <div class="col-lg-9">
    {{ Html::select('model_id', management_users(), (isset($data->model_id) ? $data->model_id : NULL))->placeholder('- Select User -')->class('form-control')->required() }}
    @error('model_id') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Role </label>
  <div class="col-lg-9">
    {{ Html::select('role_id', management_roles(), (isset($data->role_id) ? $data->role_id : NULL))->placeholder('- Select Role -')->class('form-control')->required() }}
    @error('role_id') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
