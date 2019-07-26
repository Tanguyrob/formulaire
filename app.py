# -*- coding: utf-8 -*
from flask import Flask, render_template, request

app = Flask(__name__)


@app.route("/")
def hello():
    return 'hello world'

@app.route("/signup")
def signup():
    return render_template('signup.html')


@app.route("/basedonnees", methods=['POST', 'GET'])
def donnees():
    if request.method == 'POST':
        nom = request.form.get("nom")
        prenom = request.form.get("prenom")
        telephone = request.form.get("telephone")
        email = request.form.get("email")
        password = request.form.get("password")
        age = request.form.get("age")
        sexe = request.form.get("sexe")
        '''    
        sport = request.form.get("sport")
        musique = request.form.get("musique")
        voyage = request.form.get("voyage")
        plage = request.form.get("plage")
        lecture = request.form.get("lecture")
        theatre = request.form.get("theatre")
        cinema = request.form.get("cinema")
        soiree = request.form.get("soiree")
        '''
        comments = request.form.get("comments")
        activity = request.form.get("activity")
        print(activity)
        pays = request.form.get("pays")
        '''
        return render_template("basedonnees.html", 
        m1=nom, m2=prenom, m3=telephone, m4=email, m5=password, m6=age, 
        m7=sexe, m8=sport, m9=musique, m10=voyage, m11=plage, m12=lecture, 
        m13=theatre, m14=cinema, m15=soiree, m16=comments, m17=pays)
        '''
        return render_template("basedonnees.html", 
        m1=nom, m2=prenom, m3=telephone, m4=email, m5=password, m6=age, 
        m7=sexe, m8= activity, m16=comments, m17=pays)

@app.route("/login")
def login():
        return render_template("login.html")


@app.route("/signin", methods=["GET", "POST"])
def signin():
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