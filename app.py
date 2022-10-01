# Food Recommendation Service for Health-Compromised Persons

from flask import Flask
from dbInterface import *
app = Flask(__name__)


@app.route('/')
def main_page():
    return """
    <!DOCTYPE html>
    <head></head>
    <body>
        <h1>OPTIONS</h1>
        <p><a href="/api/disease list">Get Disease List</a></p>
        <p><a href="/api/DIABETIC">Get DIABETICS Recipe List</a></p>
    </body>
    <html>
    """


@app.route('/api/disease list')
def hello():
    return dict(disease_type=['diabetic', 'hbp'])


@app.route('/api/<disease_type>')
def query_disease_food(disease_type: str):
    query_result = query_db('app_db.db', disease_type)
    if query_result:
        return query_result
    return "Not Found"
