import phonenumbers

from test import number

from phonenumbers import geocoder
ch_number = phonenumbers.parse(number,"CH")
print(geocoder.description_for_number(ch_))
