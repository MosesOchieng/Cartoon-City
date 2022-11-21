#Python program to get places according to search.
#query using Google Places API.

#Importing required module
import hello
import requests ,json 

#entering api key 
api_key = ""
#variable to store url
url = "Enter you location."
# center defines the center of the map,
# equidistant from all edges of the map. 

#function to define the values to be stored
def getDetail():
    print
    

  
# zoom defines the zoom
# level of the map
zoom = 10
  
# get method of requests module
# return response object
r = requests.get(url + "center =" + center + "&zoom =" +
                   str(zoom) + "&size = 400x400&key =" +
                             api_key + "sensor = false")
  
# wb mode is stand for write binary mode
f = open('address of the file location ', 'wb')
  
# r.content gives content,
# in this case gives image
f.write(r.content)
  
# close method of file object
# save and close the file
f.close()