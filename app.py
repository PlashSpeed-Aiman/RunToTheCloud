# Food Recommendation Service for Health-Compromised Persons

from flask import Flask
from dbInterface import *
app = Flask(__name__)


@app.route('/')
def hello():
    return 'Hello, World!'



@app.route('/api/<disease_type>')
def query_disease_food(disease_type:str):
    query_result = query_db('app_db.db',disease_type)
    return query_result

