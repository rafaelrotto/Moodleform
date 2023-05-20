function returnDurationTime() {
    let startTime = document.getElementById('start').value;
    let endTime = document.getElementById('end').value;

    document.getElementById('duration').value = (endTime.replace(/:/g, '') - startTime.replace(/:/g, '')) / 100 ^ 0;
}
