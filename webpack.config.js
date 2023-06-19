const path = require('path')
module.exports = {
    entry: './js/main.js',
    mode: 'development',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
}