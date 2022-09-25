import requests
from requests.auth import HTTPBasicAuth
import json

request = ""

def getAccessToken(request):
    consumer_key = ''
    consumer_secret = ''
    api_URL = ''
    r = requests.get(api_URL, auth=HTTPBasicAuth(consumer_key,consumer_secret))
    mpesa_access_token = json.loads(r.text)
    validate_mpesa_access_token = mpesa_access_token['access_token']
    print(validate_mpesa_access_token)
    
    
