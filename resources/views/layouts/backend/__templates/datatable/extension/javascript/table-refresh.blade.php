$("#table-refresh").on("click", function() {
  KTApp.block('#main_table', {
    overlayColor: '#000000',
    state: 'primary',
    message: "{{ __('default.label.please-wait') }} ..."
  });
  setTimeout(function() {
    KTApp.unblock('#main_table');
    $('#collapse_bulk').collapse('hide');
    $('.filter-form').val('');
    table.search( '' ).columns().search( '' ).draw();
    table.ajax.reload();
  }, 2000);
});
