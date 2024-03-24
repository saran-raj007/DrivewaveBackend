from sqlalchemy import Boolean, Column, ForeignKey,  String, DateTime, LargeBinary
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy import Boolean, Column, ForeignKey, Integer, String, Time,Date,DateTime,BLOB, JSON,Float
from sqlalchemy.orm import relationship
from datetime import date, datetime
from models import engine
#import bcrypt
import uuid
from sqlalchemy.dialects.postgresql import UUID
from sqlalchemy.ext.declarative import declarative_base

Base = declarative_base()
Base.metadata.bind = engine

class User(Base):
    __tablename__ = 'users'
    
    id=Column(Integer,index=True,autoincrement=True, primary_key=True,nullable=False)
    Username=Column(String(255),nullable=False)
    Emailid=Column(String(255),nullable=False)
    Phonenumber=Column(String(255),nullable=False)
    Password=Column(String(255),nullable=False)
    
    
    #comman columns
    Status=Column(String(100),nullable=False)
    Created_at=Column(String(100),nullable=False)

class Query(Base):
    __tablename__ = 'query'
    
    id=Column(Integer,index=True,autoincrement=True, primary_key=True,nullable=False)
    Emailid=Column(String(255),nullable=False)
    Querycontent=Column(String(355),nullable=False)
  
    
    
    #comman columns
    Status=Column(String(100),nullable=False)
    Created_at=Column(String(100),nullable=False)


class Admin(Base):
    __tablename__='admin'

    id=Column(Integer,index=True,autoincrement=True, primary_key=True,nullable=False)
    Username=Column(String(255),nullable=False)
    Password=Column(String(255),nullable=False)


    #comman columns
    Status=Column(String(100),nullable=False)
    Created_at=Column(String(100),nullable=False)

Base.metadata.create_all(bind=engine)