import os
from flask import Flask, request

app = Flask(__name__)

@app.route("/ussd", methods = ['POST'])
def ussd():
  # Read the variables sent via POST from our API
  session_id   = request.values.get("sessionId", None)
  serviceCode  = request.values.get("serviceCode", None)
  phone_number = request.values.get("phoneNumber", None)
  text         = request.values.get("text", "default")

  if text      == '':
      # This is the first request. Note how we start the response with CON
      response  = "CON Hello there welcome to Plan B artisans.Kindly choose your type of user. \n"
      response += "1. Employer \n"
      response += "2. Jua Kali Artisans \n"
      response += "3. Learn more about Plan B artisans"

  elif text    == '1':
      # Business logic for first level response
      response  = "CON Hello employer kindly access services with your phone number \n"

  elif text   == '2':
      # Business Logic for second.
      response = "CON Hello choose the options to proceed. \n"
      response += "1. Register. \n"
      response += "2. Login. \n"
      response += "3. Cancel"
  elif text == '1*1':
      response = "CON Enter service in need of: \n"
      response += "Carpenter. \n"
      response += "Plumber. \"


  # Send the response back to the API
  return response

if __name__ == '__main__':
    app.run(debug=True)

