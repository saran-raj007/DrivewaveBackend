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

@router.get("/rentalpoints")
def rentalpoints(request:Request,location:str,latitude:float,longitude:float):
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
            return templates.TemplateResponse('home.html', context={'request': request,'location':location,"login_status":login_status}) 
    except JWTError:
         return templates.TemplateResponse('home.html', context={'request': request,'location':location,"login_status":login_status}) 