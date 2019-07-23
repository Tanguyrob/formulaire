# -*- coding: utf-8 -*
from flask import Flask, render_template, request, url_for ,redirect

app = Flask(__name__)


@app.route("/")
def hello():
    return 'hello world'

if __name__== "__main__":
    app.run(port=8000)