import shutil
from typing import List
import uuid
from fastapi import APIRouter, Depends, File, HTTPException, FastAPI, Request, Form, UploadFile
from fastapi.encoders import jsonable_encoder
from fastapi.templating import Jinja2Templates
from fastapi.responses import JSONResponse, RedirectResponse
from sqlalchemy.orm import Session
from config.base_config import BaseConfig
from fastapi.staticfiles import StaticFiles
from datetime import  datetime,date, timedelta
from models import get_db,models
from fastapi.security import OAuth2PasswordBearer, OAuth2PasswordRequestForm
from admin.resources.utils import create_access_token
from starlette.middleware.sessions import SessionMiddleware
from jose import jwt, JWTError
current_datetime = datetime.utcnow()
router = APIRouter()
templates = Jinja2Templates(directory="admin/templates")
router.mount("/admin/templates", StaticFiles(directory="admin/templates"), name="templates")


@router.get("/rentrequest")
def bike(request:Request,db:Session=Depends(get_db)):   
    try:
        token=request.session["admin"]
        payload=jwt.decode(token,BaseConfig.SECRET_KEY,algorithms=[BaseConfig.ALGORITHM])
        user_name:str=payload.get('user_name')

        if user_name is None:
            raise HTTPException(status_code=401,detail="Unauthorized")
        else:
            
            Cars=db.query(models.Cars).filter(models.Cars.Status=="Active").all()
            return templates.TemplateResponse('rentrequest.php', context={'request': request,'cars':Cars})
    except JWTError:
        return RedirectResponse("/admin/login", status_code=303)
       # raise HTTPException(status_code=401,detail="Unauthorized")