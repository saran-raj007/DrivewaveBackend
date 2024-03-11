from fastapi import APIRouter, Depends, HTTPException, FastAPI, Request, Form
from fastapi.encoders import jsonable_encoder
from fastapi.templating import Jinja2Templates
from fastapi.responses import JSONResponse, RedirectResponse
from jose import JWTError
from sqlalchemy.orm import Session
from config.base_config import BaseConfig
from fastapi.staticfiles import StaticFiles
from datetime import  datetime,date, timedelta
from models import get_db,models
from fastapi.security import OAuth2PasswordBearer, OAuth2PasswordRequestForm
from resources.utils import create_access_token
from starlette.middleware.sessions import SessionMiddleware
import requests
from jose import jwt, JWTError
current_datetime = datetime.utcnow()
router = APIRouter()
templates = Jinja2Templates(directory="templates")
router.mount("/DrivewaveBackend/templates", StaticFiles(directory="/DrivewaveBackend/templates"), name="templates")

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
cities_in_india=list_cities_in_india()

@router.get("/locationSelection")
def login_page(request:Request,db:Session=Depends(get_db)):
    login_status=0
    try:
        token = request.session["user"]
        payload = jwt.decode(token, BaseConfig.SECRET_KEY, algorithms=[BaseConfig.ALGORITHM] )
        username: str= payload.get("user_name")
        usermail: str= payload.get("user_email")
        
        if username is None or usermail is None:
            raise HTTPException(status_code=401,detail="Unauthorized")
        else:
            login_status=1
            return templates.TemplateResponse('select.html', context={'request': request,'cities_in_india':cities_in_india,"login_status":login_status}) 
    except:
         return templates.TemplateResponse('select.html', context={'request': request,'cities_in_india':cities_in_india,"login_status":login_status}) 
