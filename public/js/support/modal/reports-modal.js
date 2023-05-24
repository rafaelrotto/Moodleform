function returnDurationTime() {
    let startTime = document.getElementById('start').value;
    let endTime = document.getElementById('end').value;

    document.getElementById('duration').value = (endTime.replace(/:/g, '') - startTime.replace(/:/g, '')) / 100 ^ 0;
}


function uncheck(id) {
    if (id == 'student') {
        $('#teacher').attr('checked', false);
        $('#employer').attr('checked', false);

        document.getElementById('form-student').style.display = 'block';

        document.getElementById('form-teacher').style.display = 'none';
        document.getElementById('form-employer').style.display = 'none';

        document.getElementById('save-modal-button').style.display = 'block';
    }

    if (id == 'teacher') {
        $('#student').attr('checked', false);
        $('#employer').attr('checked', false);

        document.getElementById('form-teacher').style.display = 'block';

        document.getElementById('form-student').style.display = 'none';
        document.getElementById('form-employer').style.display = 'none';

        document.getElementById('save-modal-button').style.display = 'block';
    }

    if (id == 'employer') {
        $('#student').attr('checked', false);
        $('#teacher').attr('checked', false);

        document.getElementById('form-employer').style.display = 'block';

        document.getElementById('form-student').style.display = 'none';
        document.getElementById('form-teacher').style.display = 'none';

        document.getElementById('save-modal-button').style.display = 'block';
    }
}

function checkIfChecked(checkbox) {
    if (!checkbox.checked) {
        document.getElementById('form-student').style.display = 'none';
        document.getElementById('form-teacher').style.display = 'none';
        document.getElementById('form-employer').style.display = 'none';
        document.getElementById('save-modal-button').style.display = 'none';
    }
}
