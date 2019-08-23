var express = require('express');
var app = express();

app.use(express.static('wwwroot'));

var port = 3000;
app.listen(port,function(){
	console.log("サーバがポート%dで起動しました。モード:%s",port,app.settings.env)
});