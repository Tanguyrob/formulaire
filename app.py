# -*- coding: utf-8 -*
from flask import Flask, render_template, request

app = Flask(__name__)


@app.route("/")
def hello():
    return 'hello world'

@app.route("/signup")
def signup():
    return render_template('signup.html')


@app.route("/donnees", methods='POST')
def donnees():
    if request.method:
        nom = request.form['nom']
        prenom = request.form['prenom']
        telephone = request.form['telephone']
        email = request.form['email']
        password = request.form['password']
        age = request.form['age']
        sexe = request.form['sexe']    
        sport = request.form['sport']
        musique = request.form['musique']
        voyage = request.form['voyage']
        plage = request.form['plage']
        lecture = request.form['lecture']
        theatre = request.form['theatre']
        cinema = request.form['cinema']
        soiree = request.form['soiree']
        comments = request.form['comments']
        pays = request.form['pays']
    
    
    

if __name__== "__main__":
    app.run(port=8000)