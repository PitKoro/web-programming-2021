let ws = new WebSocket("ws://151.248.113.144:7001/");
ws.onopen = function(e){
    console.log('WS OPEN!!!!');
};

ws.onmessage = function (event){
    let ping = Math.round(Number(event.data)/100000000000000000)
    $('.ws-ping').empty().append(ping + ' ms');
};

ws.onclose = function(e){
    console.log('WS CLOSE!!!!');
};
