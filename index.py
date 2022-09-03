import requests
from pprint import pprint
from bs4 import BeautifulSoup
from config import username, password



def main():
    url = "https://www.freelancer.com/search/projects?projectLanguages=fr,en&projectSkills=21,22,25,32,39,75,103,121,129,158,174,250,302,367,569,623,662,1070,1694"
    
    with requests.session() as session:
        response = session.post(url, auth=(username, password))
        
        pprint(response.text)
        
        
        with open('') as f:
            f.write(response.text) 
        
        
# Making a GET request
r =requests.get('https://www.freelancer.com/search/projects?projectLanguages=fr,en&projectSkills=21,22,25,32,39,75,103,121,129,158,174,250,302,367,569,623,662,1070,1694')

 
# check status code for response received

# check status code for response received
# success code - 200
print(r)
 
# Parsing the HTML
soup = BeautifulSoup(r.content, 'html.parser')
print(soup.prettify())
