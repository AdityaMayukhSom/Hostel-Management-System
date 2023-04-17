import { port } from './controllers/environment';

import path from 'path';
import cors from 'cors';
import express from 'express';
import bodyParser from 'body-parser';

const app = express();

app.use(cors())
app.use(bodyParser.json())
app.use(express.static(path.join(__dirname, "public")))

app.set('views', path.join(__dirname, "views"));
app.set('view engine', 'pug');

app.get('/', (req, res) => {
    res.status(200).render('index')
})

app.listen(port, function () {
    console.log('this is a fking web server running you moron')
})
