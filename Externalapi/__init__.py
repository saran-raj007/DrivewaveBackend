import requests
import json

def list_cities_in_india():
    base_url = "http://api.geonames.org/searchJSON"
    params = {
        "country": "IN",
        "featureClass": "P",
        "maxRows": 10,
        "username": "derivewave"  
    }
    response = requests.get(base_url, params=params)
    if response.status_code == 200:
        data = response.json()
        cities=[]
        for city in data.get("geonames", []):
            cities.append(city.get("name"))
        return cities
    else:
        print(response)
        
        
def get_lat_lon(city):
    base_url = "https://nominatim.openstreetmap.org/search"
    params = {
        "q": city,
        "format": "json"
    }
    headers = {
    'User-Agent': 'Drivewaverental/1.0 (k.saranraj000@gmail.com)'
    }
    response = requests.get(base_url, params=params,headers=headers)
    print(response)
    data = response.json()
    if data:
        return float(data[0]['lat']), float(data[0]['lon'])
    else:
        return None, None
    # try:
    #     response = requests.get(base_url, params=params,headers=headers)
    #     response.raise_for_status()  # Raise an HTTPError for bad responses (4xx and 5xx)
    # except requests.exceptions.RequestException as e:
    #     print(f"Error during requests to {base_url} : {str(e)}")
    #     return None, None

    # try:
    #     data = response.json()
    # except requests.exceptions.JSONDecodeError as e:
    #     print(f"Error parsing JSON response: {str(e)}")
    #     return None, None

    # if data:
    #     return float(data[0]['lat']), float(data[0]['lon'])
    # else:
    #     print(f"No data found for city: {city}")
    #     return None, None

def get_place(city_name,lat,long):
    
    latitude, longitude = get_lat_lon(city_name)
    print(latitude, longitude)
    if latitude is not None and longitude is not None:
        url = "https://api.foursquare.com/v3/places/search?fields=location"


        params = {
            "query": ".",
            "ll": f"{latitude},{longitude}",
            "open_now": "true",
            "sort":"DISTANCE"
        }

        headers = {
            "Accept": "application/json",
            "Authorization": "fsq3p3luPWi0VhyF2iCplYqfpbkkVQazLEVcCay1L0o6Q9s="
        }

        data = requests.request("GET", url, params=params, headers=headers)
        data_dict = json.loads(data.text)
        response = [result['location']['formatted_address'] for result in data_dict['results']]
        return response

    else:
        print(f"Could not find the latitude and longitude for {city_name}")