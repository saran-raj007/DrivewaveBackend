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
router.mount("/templates", StaticFiles(directory="templates"), name="templates")

@router.get("/vehicledetails")
def rentalpoints(request:Request,db:Session=Depends(get_db)):
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
            return templates.TemplateResponse('vehicledetails.html', context={'request': request,"login_status":login_status}) 
    except:
         return templates.TemplateResponse('vehicledetails.html', context={'request': request,"login_status":login_status}) 
     

@router.get("/payment")
def rentalpoints(request:Request,db:Session=Depends(get_db)):
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
            return templates.TemplateResponse('payment.html', context={'request': request,"login_status":login_status}) 
    except:
         return templates.TemplateResponse('payment.html', context={'request': request,"login_status":login_status}) 