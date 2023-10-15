// var fs = require('fs');

// var privateKey = fs.readFileSync('server.key', 'utf8');
// var certificate = fs.readFileSync('server.crt', 'utf8');
// var credentials = { key: privateKey, cert: certificate };

                // const express = require('express');

                // const app = express();

                // const server = require('http').createServer(app);
                // // const server = require('https').createServer(credentials, app);


                // const io = require('socket.io')(server, { cors: { origin: " *" } });

                // io.on('connection', (socket) => {
                //     // console.log('Cliente conectado: ');
                //     console.log('Cliente conectado: ' + socket.id);

                //     // recivimos el mensaje del cliente y mandamos la respuesta
                //     socket.on('saludo', (user_id) => {
                //         console.log(user_id);
                //         const respuesta = "Hola cambita " + user_id;
                //         io.emit('saludo_respuesta', respuesta);
                //     });

    // socket.on('input-clase-server', function (data) {
    //     io.emit('input-clases-cliente', data)
    // });

    // socket.on('addAtributo', function (data) {
    //     io.emit('addAtributoClient', data);
    // });

    // socket.on('addClass', function (data) {
    //     console.log("socket clase data: " + data)
    //     io.emit('addClassClient', data);
    // });

    // socket.on('addRelation', function (data) {
    //     console.log("socket relacion data: " + data);
    //     io.emit('addRelationClient', data);
    // })

    // socket.on('deleteRelation', function (data) {
    //     console.log("socket delete relacion data: " + data);
    //     io.emit('deleteRelationClient', data);
    // })

    // socket.on('nameClass', function (data) {
    //     io.emit('nameClassClient', data);
    // })


                    //     socket.on('disconnect', () => {
                    //         console.log("Cliente Desconectado: " + socket.id);
                    //     });

                    // });
                    // var port = 3000;
                    // server.listen(port, () => {
                    //     console.log('Servidor Conectado');
                    // });
