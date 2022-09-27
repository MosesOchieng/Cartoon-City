# Plan B

Website application Deployment link

https://planbapplication.herokuapp.com/

Website application that provides notifications for jobs from different free lancing accounts all in one website.
The website application also enables juakali artisans to find jobs with their numbers to clients by using python phone numbers library as a geo locator and python py auto gui to enable sending of whatsapp messages.

Enabling use of third party software applications otherwise known as SAAS to professionals.

The website application allows connection to job notifications from sites like Up work , Free Lancer , Guru , One foma and other Job notification platforms, enabling free lancers have their job updates securely and easily retrievable therefore
increasing their chances of getting the jobs.

The site also allows its users to user softwares they would need like Grammerly or cloud technologies with a chosen premium plan.

Website is divided into frontend where the user interacts first with the homepage that is informational and offers instruction to the user on how to navigate the website.
Concepts applied :
~ Africa's Talking website API for usssd registration for Jua Kali artisans.
~ MPESA DARAJA for Lipa Na Mpesa Integration to pay for premium plans as a registered user.
~ Web scrapping with python to enable pulling of job notifications.
~csv to save the information scrapped
~  Xss live feed.
~ Web technologies .
~ Application programming interface.
~ Database technology .
Mongoose for saving job notifications and mongodb for user registrations and login.

*Technologies used

~ Programming Languages

Front end ; javascript , HTML (frontend form validation.),website structure., HTML5 (PUG), SCSS , Bootstrap , Sass , CSS, CSS5 .

Backend ;PHP,(collecting and validating forms data(backend security),sending data to the lampp database)PHP COOKIES ,
PHP GOOGLE RECAPTCHA ~ to enhance the security of the login pages., (PHPMAILER)for sending email verification links to emails for newly registered users to authenticate their registration.,
 Python;(Libraries -,phone numbers,config,pyautogui, Beautiful soap, requests, url ) for
(Web scrapping websites)and feeding them to the application , Pyschript for connecting to html dashboard page and enabling python run on html.Python test files to show the backend website scrapping.
Firebase cloud ,database.

Images ; Unsplash Images.

API's ; Form spree for communications.

Website Structure

Main file contains the index.html and supporting folders and files to give the homepage which is informational on what the website application really does.

The folder Dashboard contains the users Dashboard that the user will be able to use once they have signed up and paid for the premium plans.

The folder main contains the support to clients and also the database which contains the premium files and the sign up.

The folder scrapper contains the individual python files that enable the scrapping.
Jua Kali folder contains the Jua Kali folder details with clients and artisans information.
USSD Logins to Jua Kali users with ussd.php files.
Jua Kali has a separate login and the backedn is built in firebase .
They have a chat app and the concept behind it using geolocator and phone numbers to connect jua kali artisans to potential clients.
Project Phases.

Phase I :
Pulling notification of jobs across platforms.
Linking Jua Kali Artisans to jobs.
Enabling use of SAAS applications.
MPESA Payment Integration with Daraja API.
Integration to Grammerly , Plagarism Checker  SAAS application.
Integration of functional user Database and User sign up and sign in.
Integration of African Talking website for USSD (Unstructured Supplementary Service Data) users in Jua Kali sector.

Pages available;
Homepage.
Free Lancer Dashboard.
Jua Kali Artisans Dashboard.
Premium Payment and Display information page.
USSD Setting for free lancers.


Phase II :
Enabling linking to whatsapp of job notifications.
Enabling Saving of Jobs.
Local Job Contracts.
Connecting to local job websites for notifications.
Scheduling interview with clients.
MPESA withdrawals.

Phase III :
More changes....