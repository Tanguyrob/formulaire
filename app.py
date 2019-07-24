# -*- coding: utf-8 -*
from flask import Flask, render_template, request

app = Flask(__name__)


@app.route("/")
def hello():
    return 'hello world'

@app.route("/signup")
def signup():
    return render_template('signup.html')

'''
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
'''   
    
@app.route("/signin", methods=["GET", "POST"])
def signin():
    error = None
    if request.method == "POST":
        email = request.form["email"]
        password = request.form["password"]
        password_hash = hashlib.sha256(str(password).encode("utf-8")).hexdigest()

        req_connection_client = "SELECT * FROM Client where Email = '%s' AND PasswordHash = '%s' "
        cursor.execute(req_connection_client % (email, password_hash))
        resultat_connection_client = cursor.fetchall()

        if len(resultat_connection_client) == 0:
            session['email'] = None
            error = "Cette adresse courriel ou ce mot de passe ne sont pas valides, veuillez reessayer"
            return render_template("signin.html", error=error)

    elif request.method == "GET":
        return render_template("signin.html")

if __name__== "__main__":
    app.run()