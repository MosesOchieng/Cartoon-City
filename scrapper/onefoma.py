#python programme to scrape one Foma website.
#and save the job notifications.

import requests
from pprint import pprint
from bs4 import BeautifulSoup
from config import username, password
import csv



def main():
    url = "https://my.oneforma.com/UserPortal/work_opportunities.php"
    r = requests.get(url)

    soup = BeautifulSoup(r.content, 'html5lib')


    jobs = [] # a list to store the jobs present in an array .

    table = soup.find('div' , attrs = {'id' : 'job-sites'})


    for row in table.findAll ('div', attrs = {'class':'row'}):
        job = {}
        job ['title']= row.h5.text
        job ['skill required'] = row.h3.text
        job ['url'] = row.a ['href']
        job ['time'] = row.a['time']
        job['payment'] = row.p.text
        jobs.append(job)

    filename = 'csv/onefoma.csv'
    with open(filename, 'w' , newline='') as f:
        w = csv.DictWriter(f, ['title','skill required','url','time','payment'])
        w.writeheader()
        for job in jobs :
            w.writerow(job)
