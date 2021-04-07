#!/usr/bin/python3

import asyncio
import websockets

async def hello(websocket, path):
    name = await websocket.recv()
    greeting = str(name)
    await websocket.send(greeting)
    

start_server = websockets.serve(hello, "151.248.113.144", 8765)

asyncio.get_event_loop().run_until_complete(start_server)
asyncio.get_event_loop().run_forever()
