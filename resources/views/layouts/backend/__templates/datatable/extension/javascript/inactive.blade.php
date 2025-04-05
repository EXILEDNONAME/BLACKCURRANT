@if (empty($active) || $active == 'true')
$('body').on('click', '#inactive', function () {
  var id = $(this).data("id");
  $.ajax({
    type: "get", url: "{{ URL::current() }}/inactive/"+id, processing: true, serverSide: true,
    success: function (data) {
      KTApp.block('#main_body', {
        overlayColor: '#000000',
        state: 'info',
        message: '{{ __('default.label.processing') }} ...'
      });
      setTimeout(function() {
        KTApp.unblock('#main_body');
        var oTable = $('#main_table').dataTable();
        oTable.fnDraw(false);
        toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
        toastr.success("{{ __('default.notification.success.item-inactive') }}");
      }, 2000);
    },
    error: function (data) {
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.error("{{ __('default.notification.error./') }}");
    }
  });
});
@endif
