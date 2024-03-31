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

@router.get("/vehiclelist")
def rentalpoints(request:Request,location:str,place:str,starttime:str,endtime:str,vtype:str,db:Session=Depends(get_db)):
    login_status=0
    fetch_vehicle=None
    if vtype=="car":
        fetch_vehicle=db.query(models.Cars).filter(models.Cars.Cityname==location).filter(models.Cars.Location==place).filter(models.Cars.Status=="Active").all()
    else:
        fetch_vehicle=db.query(models.Bikes).filter(models.Bikes.Cityname==location).filter(models.Bikes.Location==place).filter(models.Bikes.Status=="Active").all()
    try:
       
        token = request.session["user"]
        payload = jwt.decode(token, BaseConfig.SECRET_KEY, algorithms=[BaseConfig.ALGORITHM] )
        username: str= payload.get("user_name")
        usermail: str= payload.get("user_email")
        
        if username is None or usermail is None:
            raise HTTPException(status_code=401,detail="Unauthorized")
        else:
            login_status=1

            return templates.TemplateResponse('search.html', context={'request': request,'location':location,"login_status":login_status,"starttime":starttime,"endtime":endtime,"location":location,"place":place,"type":vtype,"fetch_vehicle":fetch_vehicle}) 
    except:
         return templates.TemplateResponse('search.html', context={'request': request,'location':location,"login_status":login_status,"starttime":starttime,"endtime":endtime,"location":location,"place":place,"type":vtype,"fetch_vehicle":fetch_vehicle}) 