import sqlite3
import os

data_path = 'D:\\projects\\Emotion_Recognition-master\\db'
filename = 'RECORDOne'

os.makedirs(data_path, exist_ok=True)

db = sqlite3.connect(data_path + filename + '.sqlite3')
db.execute('CREATE TABLE IF NOT EXISTS RECORDOne (Number REAL,Name TEXT)')

number=1234
name="Partha"
db.execute('INSERT INTO RECORDOne (Number,Name) VALUES (?,?)',(number,name))
db.commit()
db.close()
