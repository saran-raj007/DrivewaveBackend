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

@router.get("/rentalpoints")
def rentalpoints(request:Request,location:str,latitude:float,longitude:float,db:Session=Depends(get_db)):
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
    except:
         return templates.TemplateResponse('home.html', context={'request': request,'location':location,"login_status":login_status})

@router.post("/query_request")
def queryRequest(request:Request,db:Session=Depends(get_db),emailid:str=Form(...),querycontent:str=Form(...)):
    query_data=models.Query(Emailid=emailid,Querycontent=querycontent,Status="Active",Created_at=current_datetime)
    db.add(query_data)
    db.commit()
    response="Done"
    json_compatible_item_data = jsonable_encoder(response)
    return JSONResponse(content=json_compatible_item_data)
    