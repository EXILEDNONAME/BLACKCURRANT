@extends('layouts.default')
@section('title', 'Settings')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-custom gutter-b card-sticky" data-card="true" id="kt_page_sticky_card">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> {{ __('default.label.optimizations') }} </h3>
        </div>
        <div class="card-toolbar">
          <div class="btn-group">
            <button type="submit" class="btn btn-sm btn-outline-primary" form="exilednoname-form">
              <span class="font-weight-bolder"> {{ __('default.label.apply') }} </span>
            </button>
          </div>
        </div>
      </div>



        <form method="POST" id="exilednoname-form" action="{{ URL::current() }}/update" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
        </form>


    </div>
  </div>
</div>
@endsection
