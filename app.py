# Food Recommendation Service for Health-Compromised Persons

from importlib.resources import contents
from flask import Flask, render_template, request, redirect, url_for
from dbInterface import *
import requests, json

app = Flask(__name__)

@app.route('/', methods=["GET", "POST"])
def main_page():
    if request.method == "POST":
        foodmenu = request.form['medicalhistory']
        return redirect(url_for('menu', menutype = foodmenu))
    return render_template('index.html')

@app.route('/foodmenu/<menutype>', methods=["GET", "POST"])
def menu(menutype):
    if menutype == 'Diabetic':
        req = requests.get('http://127.0.0.1:5000/api/Diabetic')
        json_data = json.loads(req.content)
    elif menutype == 'HBP':
        req = requests.get('http://127.0.0.1:5000/api/HBP')
        json_data = json.loads(req.content)
    elif menutype == 'Cancer':
        req = requests.get('http://127.0.0.1:5000/api/Cancer')
        json_data = json.loads(req.content)
    elif menutype == 'Heart Attack':
        req = requests.get('http://127.0.0.1:5000/api/Heart Attack')
        json_data = json.loads(req.content)
    elif menutype == 'Kidney':
        req = requests.get('http://127.0.0.1:5000/api/Kidney')
        json_data = json.loads(req.content)
    elif menutype == 'Alzheimer':
        req = requests.get('http://127.0.0.1:5000/api/Alzheimer')
        json_data = json.loads(req.content)
    elif menutype == 'Osteoporosis':
        req = requests.get('http://127.0.0.1:5000/api/Osteoporosis')
        json_data = json.loads(req.content)
    else:
        json_data = null

    return render_template('submit.html', diseasetype = menutype, listdata = json_data)

@app.route('/option')
def option():
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
