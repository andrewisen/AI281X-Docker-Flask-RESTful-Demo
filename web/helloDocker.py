# Taken from:
# https://flask-restful.readthedocs.io/en/latest/quickstart.html

from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
app.debug = True
api = Api(app)

class HelloWorld(Resource):
    def get(self):
        return {'Hello': 'Docker'}

api.add_resource(HelloWorld, '/')

if __name__ == '__main__':
    app.run()