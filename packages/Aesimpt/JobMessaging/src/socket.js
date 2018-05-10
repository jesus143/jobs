var server = require('http').Server();

var io = require('socket.io')(server);

var Redis = require('ioredis');
var redis = new Redis();

redis.subscribe('job-message');

redis.on('message', function(channel, message){
    message = JSON.parse(message);

    console.log(message);

    var sender_id = message.data.data.sender_id;
    var msg = message.data.data.message;
    var sender_name = message.data.data.sender_name;
    var job_id = message.data.data.job_id;

    console.log("connected  sender " + sender_id
    + ' message: ' + msg + " sender_name " + sender_name + " job_id " + job_id);
    console.log();
    io.emit(channel + ':' + job_id, message);
});

server.listen(3001);
