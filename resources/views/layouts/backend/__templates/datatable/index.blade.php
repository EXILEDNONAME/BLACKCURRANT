@extends('layouts.default')

@push('head')
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-custom" data-card="true" id="kt_card_1" style="">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Main </h3>
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

        <div class="table-responsive">
          <table width="100%" class="table table-hover table-separate table-head-custom table-checkable table-sm rounded" id="main_table">
            <thead>
              <tr>
                <th class="no-export"> </th>
                <th> No. </th>

                @yield('table-header')
                <th class="no-export"> </th>
              </tr>
            </thead>
          </table>
        </div>

      </div>
    </div>

  </div>

</div>
@endsection

@push('js')
<script src="/assets/backend/js/pages/features/cards/tools.js?v=7.0.6"></script>
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>
<script src="/assets/backend/js/pages/crud/datatables/basic/basic.js?v=7.0.6"></script>

<script>
var table = $('#main_table').DataTable({
  "bInfo": false,
  "sPaginationType": "full_numbers",
  serverSide: true,
  searching: true,
  rowId: 'Collocation',
  select: {
    style: 'multi',
    selector: 'td:first-child .checkable',
  },
  ajax: {
    url: "{{ URL::current() }}",
    "data" : function (ex) {
      @stack('filter-data')
    }
  },
  headerCallback: function(thead, data, start, end, display) {
    thead.getElementsByTagName('th')[0].innerHTML = `
    <label class="checkbox checkbox-single checkbox-solid checkbox-primary mb-0">
    <input type="checkbox" value="" class="group-checkable"/>
    <span></span>
    </label>`;
  },
  "lengthMenu": [[50, 100, 250, 500, -1], [50, 100, 250, 500, "All"]],
  buttons: [
    { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
    { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'excelHtml5', exportOptions: {  columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
  ],
  columns: [
    {
      data: 'checkbox', orderable: false, searchable: false, width: '1',
      render: function(data, type, row, meta) { return '<label class="checkbox checkbox-single checkbox-primary mb-0"><input type="checkbox" data-id="' + row.id + '" class="checkable"><span></span></label>'; },
    },
    {
      data: 'autonumber', orderable: true, searchable: false, 'className': 'align-middle text-center', width: '1',
      render: function(data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1; }
    },
    @if (empty($date) || $date == 'true')
    {
      data: 'date', orderable: true, 'className': 'align-middle text-nowrap', 'width': '1',
      render: function ( data, type, row ) {
        if (data == null) { return '<center> - </center>'}
        else { return data; }
      }
    },
    @endif
    @yield('table-body')
    @if (empty($active) || $active == 'true')
    {
      data: 'active', orderable: true, 'className': 'align-middle text-center', width: '1',
      render: function ( data, type, row ) {
        if ( data == 0 ) { return '<a href="javascript:void(0);" id="active" title="Switch To Active" data-id="' + row.id + '"><span class="label label-dark label-inline"> {{ __("default.label.no") }} </span></a>'; }
        if ( data == 1 ) { return '<a href="javascript:void(0);" id="inactive" title="Switch To Inactive" data-id="' + row.id + '"><span class="label label-info label-inline"> {{ __("default.label.yes") }} </span></a>'; }
      }
    },
    @endif
    {
      data: 'action',
      orderable: false,
      searchable: false,
      width: '1',
      render: function(data, type, row) {
        return '' +
        '<div class="dropdown dropdown-inline">' +
        '<button type="button" class="btn btn-hover-light-dark btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ki ki-bold-more-ver"></i></button>' +
        '<div class="dropdown-menu dropdown-menu-xs" style="">' +
        '<ul class="navi navi-hover py-5">' +
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '" class="navi-link"><span class="navi-icon"><i class="flaticon2-expand"></i></span><span class="navi-text">{{ __("default.label.view") }}</span></a></li>' +
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '/edit" class="navi-link"><span class="navi-icon"><i class="flaticon2-contract"></i></span><span class="navi-text">{{ __("default.label.edit") }}</span></a></li>' +
        '<li class="navi-item"><a href="javascript:void(0);" class="navi-link delete" data-id="' + row.id + '"><span class="navi-icon"><i class="flaticon2-trash"></i></span><span class="navi-text"> {{ __("default.label.delete./") }} </span></a></li>' +
        '</ul>' +
        '</div>' +
        '</div>';
      },
    },
  ],
  order: [
    [sort, 'asc']
  ]
});
</script>
@endpush
