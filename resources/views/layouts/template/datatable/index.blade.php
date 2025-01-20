@extends('layouts.default')

@section('content')
<div class="row">
   	<div class="col-lg-12">
        <!--begin::Example-->
        <!--begin::Card-->
        <div class="card card-custom" data-card="true" id="kt_card_1" style="">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Card Tools</h3>
                </div>
				<div class="card-toolbar">
					<a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Toggle Card">
						<i class="ki ki-arrow-down icon-nm"></i>
					</a>
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reload Card">
						<i class="ki ki-reload icon-nm"></i>
					</a>
                    <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove Card">
						<i class="ki ki-close icon-nm"></i>
					</a>
				</div>
            </div>
            <div class="card-body" kt-hidden-height="423" style="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled.
                </p>
            </div>
        </div>

   	</div>

</div>
@endsection

@push('js')
<script src="/assets/backend/js/pages/features/cards/tools.js?v=7.0.6"></script>
@endpush
