#!/usr/bin/python3
import pymysql
from http.server import BaseHTTPRequestHandler, HTTPServer
import asyncio
import websockets

async def do_GET(websocket, path):
    id = await websocket.recv()
            
    con = pymysql.connect('185.4.72.67', 'korolev', 'YTQO2UHN', 'korolev', charset='utf8')
    cur = con.cursor()
    cur.execute('SELECT * FROM chat WHERE id = ' + id)
    user = cur.fetchall()[0]

    response = "<p>id = "+ str(user[0]) + "</p><p>name = " + user[1] + "</p><p>description = " + user[2] + "</p>"
    
    await websocket.send(response)
    

start_server = websockets.serve(do_GET, "151.248.113.144", 7000)

asyncio.get_event_loop().run_until_complete(start_server)
asyncio.get_event_loop().run_forever()