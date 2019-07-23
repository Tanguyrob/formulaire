# -*- coding: utf-8 -*
from flask import Flask, render_template, request

app = Flask(__name__)


@app.route("/")
def hello():
    return 'hello world'

@app.route("/signup")
def signup():
    return render_template('signup.html')

if __name__== "__main__":
    app.run(port=8000)