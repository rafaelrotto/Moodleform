$(document).ready(function () {
    $('#reports').DataTable();
});


function OpenReportModal() {
    $('#reportModal').modal('show');
}

function CloseReportModal() {
    $('#reportModal').modal('hide');
}

$(document).on('click', '.edit-modal', function () {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').removeClass('delete');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    var stuff = $(this).data('info').split(',');
    fillmodalData(stuff)
    $('#myModal').modal('show');
});
