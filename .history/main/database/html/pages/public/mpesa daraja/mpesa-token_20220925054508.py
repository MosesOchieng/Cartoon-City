import requests
from requests.auth import HTTPBasicAuth
import json

request = ""

def getAccessToken(request):
    consumer_key = ''
    consumer_secret = ''
    api_URL = ''
    r = requests.get(api_URL, auth=HTTPBasicAuth(consumer_key,consumer_secret))
    mpesa_acces_token = json.loads(r.text)