#python programme to scrape onefoma website.
#and save the job notifications.

import requests
from pprint import pprint
from bs4 import BeautifulSoup
from config import username, password
import csv



def main():
    url = "https://www.freelancer.com/search/projects?projectLanguages=fr,en&projectSkills=21,22,25,32,39,75,103,121,129,158,174,250,302,367,569,623,662,1070,1694"
    r = requests.get(URL)

    soup = BeautifulSoup(r.content, 'html5lib')


    jobs = [] # a list to store the jobs present in an array .

    table = soup.find('div' , attrs = {'id' : 'job-sites'})


    for row in table.findAll ('div', attrs = {'class':'col-6 col-lg-3 text-center margin-30px-bottom sm-margin-30px-top'}):
        job = {}
        job ['title']= row.h5.text
        job ['company'] = row.h3.text
        job ['url'] = row.a ['href']
        job ['time'] = row.a['time']
        job['payment'] = row.p.text
        jobs.append(job)

    filename = 'jobs.csv'
    with open(filename, 'w' , newline='') as f:
        w = csv.DictWriter(f, ['title','company','url','time','payment'])
        w.writeheader()
        for job in jobs :
            w.writerow(job)
