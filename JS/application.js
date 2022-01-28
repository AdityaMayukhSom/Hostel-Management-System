const signup = document.querySelector('.submit-button');
const form = document.querySelector('#application-form');
const php = "model.php";
const formData = new FormData(form);
var currStatus;


signup.addEventListener('click', (e) => {
    e.preventDefault();
    fetch(php, {
        method: 'POST',
        body: formData
    }).then(res => {
        currStatus = res.status;
        return res.text()
    }).then(data => {
        alert(data);
        if (currStatus == 200)
            location.href = "index.html"
    }).catch(err => {
        alert(err);
    })
});