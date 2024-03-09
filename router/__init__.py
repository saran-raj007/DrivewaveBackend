from fastapi import APIRouter
from resources.loginSignup import router as userloginRouter
from resources.selectlocation import router as selectlocationRouter
from resources.rentalpoints import router as rentalpointRouter
router = APIRouter()
router.include_router(userloginRouter, prefix='', tags=['Login'])
router.include_router(selectlocationRouter, prefix='',tags=['Location'])
router.include_router(rentalpointRouter, prefix='',tags=['rental'])