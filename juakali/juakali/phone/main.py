import phonenumbers
import pyautogui
import time
from test import number
from phonenumbers import geocoder

time.sleep(3)
int count = 0
while count<=5:



ch_number = phonenumbers.parse(number,"CH")
print(geocoder.description_for_number(ch_nmber,"eng"))

from phonenumbers import carrier
service_nmber = phonenumbers.parse(number,"RO")
print(carrier.name_for_number(service_nmber,"eng"))
