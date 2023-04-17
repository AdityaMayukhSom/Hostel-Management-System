import { port } from './controllers/environment';

import path from 'path';
import cors from 'cors';
import express from 'express';
import bodyParser from 'body-parser';

// this is the root directory path for the project
const rootDir = path.resolve(__dirname, '..')

const app = express();

app.use(cors())
app.use(bodyParser.json())
app.use(express.static(path.join(rootDir, "public")))

app.set('views', path.join(rootDir, "views"));
app.set('view engine', 'pug');

app.get('/', (req, res) => {
    res.status(200).render('index')
})

app.listen(port, function () {
    console.log('⚡server running on port ' + port + ' ⚡');
})
