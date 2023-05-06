const dotenv = require('dotenv');
dotenv.config();

const port = Number.parseInt(process.env.PORT || '3000')

module.exports = {
    port
}