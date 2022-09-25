import requests
from requests.auth import HTTPBasicAuth
import json

request = ""

def getAccessToken(request):
    consumer_key = ''
    consumer_secret = ''
    apI_URL = ''
    r = requests.get(api_URL, auth=HTTPBasicAuth(consumer_key,consumer_secret))
    