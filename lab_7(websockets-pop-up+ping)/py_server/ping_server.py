#!/usr/bin/python3

import asyncio
import websockets
import os

async def ping(websocket, path):
    while True:
        ping = os.popen('ping -c 1 www.google.com')
        result = ping.readlines()
        msLine = result[-1].strip()
        msStr = msLine.split(' = ')[-1]
        msValue = ''.join(i for i in msStr if i.isdigit())
        await websocket.send(msValue)
        await asyncio.sleep(2)

start_server = websockets.serve(ping, "151.248.113.144", 7001)

asyncio.get_event_loop().run_until_complete(start_server)
asyncio.get_event_loop().run_forever()