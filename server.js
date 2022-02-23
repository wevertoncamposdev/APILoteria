const http = require('http');

const endereco = 'localhost';
const porta = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Olá Mundo!');
});

server.listen(porta, endereco, () => {
    console.log(`Server running at http://${endereco}:${porta}/`);
});