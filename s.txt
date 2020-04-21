var http = require('http');
var express = require('express'),
	app = module.exports.app = express();

var server = http.createServer(app);
var io = require('socket.io')(server);
var Redis = require('ioredis');

var redis = new Redis();
redis.subscribe('news-action');
redis.on('message', function (channel, message) {
	console.log('Message: '+ message);
	console.log('Channel: '+ channel);
	message = JSON.parse(message);
	io.emit(channel + ':' + message.event, message.data);
});

server.listen(3000, function () {
	console.log('Listening on post 3000')
});