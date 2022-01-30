const submitButton = document.querySelector('.submit-button');
const form = document.querySelector('#application-form');
const php = './PHP/process.php';

submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    saveData();
});

function saveData() {
    var applicationElement = document.getElementsByClassName('application-input');
    var formData = new FormData();
    for (var count = 0; count < applicationElement.length; count++) {
        formData.append(applicationElement[count].name, applicationElement[count].value);
    }
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.open("GET", php);
    ajaxRequest.send(formData);
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
            document.getElementById("application-form").reset();
            // document.getElementById('success-message').innerHTML = ajaxRequest.responseText;
            // setTimeout(function() {
            //     document.getElementById('success-message').innerHTML = '';
            // }, 2000);
            console.log(ajaxRequest.responseText);
        }
    }
}





// form.addEventListener('submit', (e) => {
//     e.preventDefault();
//     fetch(php, {
//         method: 'POST',
//         body: formData
//     }).then(res => {
//         return res.text()
//     }).then(data => {
//         console.log(data);
//     }).catch(err => {
//         alert(err);
//     });
// });