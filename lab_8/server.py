#!/usr/bin/python3
import socket

sock = socket.socket()
sock.bind(('', 9092))
sock.listen(1)

while True:
    conn, addr = sock.accept()
    print("connected: "+addr[0])

    while True:
        data = conn.recv(1024)
        if not data:
            break
        conn.send(str(int(data.decode('utf-8')) * 2).encode('utf-8'))
    conn.close()