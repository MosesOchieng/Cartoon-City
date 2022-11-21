# Program to find carrier and region
# of a phone number
import phonenumbers
from phonenumbers import geocoder, carrier

# Parsing String to Phone number
phoneNumber = input("Enter your phone number starting with country code:")


inphonenumber = phonenumbers.parse(phoneNumber)

# Getting carrier of a phone number
Carrier = carrier.name_for_number(inphonenumber, 'en')

# Getting region information
Region = geocoder.description_for_number(inphonenumber, 'en')

# Printing the carrier and region of a phone number
print(Carrier)
print(Region)
