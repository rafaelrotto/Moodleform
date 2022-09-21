/*iniciando DataTables */

$(document).ready(function () {
    $('#reports').DataTable();
});

$(document).ready(function () {
    $("#date").mask("99/99/9999", { placeholder: "dd/mm/aaaa" });
    $("#start").mask("00:00:00", { placeholder: "00:00:00" });
    $("#end").mask("00:00:00", { placeholder: "00:00:00" });
    $("#duration").mask("00:00:00", { placeholder: "00:00:00" });
});

/* Modal de criação de relatórios */

function OpenReportModal() {
    $('#reportModal').modal('show');
}

function CloseReportModal() {
    $('#reportModal').modal('hide');
}

var cor = document.getElementById('color');
cor.style.display = 'none';

function setColor() {
    var status = document.getElementById('status').value;
    if (status == "Finalizado") {
        document.getElementById('color').value = "#17da03";
    } else if (status == "Em andamento") {
        document.getElementById('color').value = "#fbc414";
    } else if (status == "Pendente") {
        document.getElementById('color').value = "#da030f";
    }
}




