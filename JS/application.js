const signup = document.querySelector('.submit-button');
const form = document.querySelector('#application-form');
const php = "model.php";
const formData = new FormData(form);
var currStatus;


form.addEventListener('submit', (e) => {
    e.preventDefault();


    fetch(php, {
        method: 'POST',
        body: formData
    }).then(res => {
        return res.text()
    }).then(data => {
        console.log(data);
    }).catch(err => {
        alert(err);
    })
});