<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {{ Html::text('name', (isset($data->name) ? $data->name : ''))->class([ $errors->has('name') ? 'form-control is-invalid' : 'form-control'])->required() }}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Email </label>
  <div class="col-lg-9">
    {{ Html::email('email', (isset($data->email) ? $data->email : ''))->class([ $errors->has('email') ? 'form-control is-invalid' : 'form-control'])->required() }}
    @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Phone </label>
  <div class="col-lg-9">
    {{ Html::number('phone', (isset($data->phone) ? $data->phone : ''))->class([ $errors->has('phone') ? 'form-control is-invalid' : 'form-control'])->required() }}
    @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Username </label>
  <div class="col-lg-9">
    {{ Html::text('username', (isset($data->username) ? $data->username : ''))->class([ $errors->has('username') ? 'form-control is-invalid' : 'form-control'])->required() }}
    @error('username') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
                        <label class="col-3 col-form-label">Checkboxes</label>
                        <div class="col-9 col-form-label">
                            <div class="checkbox-list">
                                <label class="checkbox">
                                    <input type="checkbox"  name="Checkboxes4"/>
                                    <span></span>
                                    Default
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" checked="checked" name="Checkboxes4"/>
                                    <span></span>
                                    Checked
                                </label>
                                <label class="checkbox checkbox-disabled">
                                    <input type="checkbox" disabled="disabled" name="Checkboxes4"/>
                                    <span></span>
                                    Disabled
                                </label>
                            </div>
                        </div>
                    </div>

@if($formMode == 'create')
<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Password </label>
  <div class="col-lg-9">
    {{ Html::password('password')->class($errors->has('password') ? 'form-control is-invalid' : 'form-control')->required() }}
    @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Confirm Password </label>
  <div class="col-lg-9">
    {{ Html::password('confirm-password')->class($errors->has('confirm-password') ? 'form-control is-invalid' : 'form-control')->required() }}
    @error('confirm-password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
@endif
