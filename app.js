const { port } = require('./controllers/environment');

const path = require('path');
const express = require('express');

const app = express();
app.use(express.json())
app.use(express.static(path.join(__dirname, "public")))

app.set('views', path.join(__dirname, "views"));
app.set('view engine', 'pug');

app.get('/', (req, res) => {
    res.status(200).render('index')
})

app.get('/admin-login', (req, res) => {
    res.status(200).render('admin_login')
})

app.get('/application-form', (req, res) => {
    res.status(200).render('application_form')
})

app.get('/new-admin', (req, res) => {
    res.status(200).render('new_admin')
})

app.get('/student-login', (req, res) => {
    res.status(200).render('student_login')
})

app.get('/visitors', (req, res) => {
    res.status(200).render('visitors')
})

app.listen(port, function () {
    console.log('⚡server running on port ' + port + ' ⚡');
})
