const io = require('socket.io')(https);
const process.env.PORT || 8000;


const users = {};

io.on('connection', socket =>{
    socket.on('new-user-joined', name =>{
        console.log("New user", name)
        users[socket.id] = name;
        socket.broadcast.emit('user-joined', name);
        console.log("i am ready to deploy")
    });

    socket.on('send', message =>{
        socket.broadcast.emit('receive', {message: message, name: users[socket.id]})
    });
  
   
    socket.on('disconnect', message =>{
        socket.broadcast.emit('left', users[socket.id]);
        delete users[socket.id];
    });
})
