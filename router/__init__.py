from fastapi import APIRouter
from resources.loginSignup import router as userloginRouter
from resources.selectlocation import router as selectlocationRouter
from resources.rentalpoints import router as rentalpointRouter
from resources.vehiclelist import router as vehiclelistRouter
from resources.profile import router as profileRouter
from resources.vehicledetails import router as vehicledetailsRouter
from admin.resources.login import router as adminloginRouter
from admin.resources.dashboard import router as dashboardRouter

router = APIRouter()
router.include_router(userloginRouter, prefix='', tags=['Login'])
router.include_router(selectlocationRouter, prefix='',tags=['Location'])
router.include_router(rentalpointRouter, prefix='',tags=['rental'])
router.include_router(vehiclelistRouter, prefix='',tags=['list'])
router.include_router(profileRouter, prefix='',tags=['profile'])
router.include_router(vehicledetailsRouter, prefix='',tags=['details'])

router.include_router(adminloginRouter, prefix='/admin',tags=['Adminlogin'])
router.include_router(dashboardRouter, prefix='/admin',tags=['Admindashboard'])