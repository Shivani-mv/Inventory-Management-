from django.urls import path
from django.urls import path
from . import views
from inv import views
from django.contrib.staticfiles.urls import staticfiles_urlpatterns

urlpatterns = [
	path('',views.home,name='home'),
	path('CCTV',views.CCTV),
	path('CCTV2',views.CCTV2),
	path('CCTV3',views.CCTV3),
	path('CCTV4',views.CCTV4),
	path('CCTV5',views.CCTV5),
	path('fire_alarm',views.fire_alarm),
	path('fire_alarm2',views.fire_alarm2),
	path('fire_alarm3',views.fire_alarm3),
	path('ac',views.ac),
	path('ac2',views.ac2),
	path('ac3',views.ac3),
	path('ac4',views.ac4),
	path('ac5',views.ac5),
	path('counting_machine',views.counting_machine),
	path('counting_machine2',views.counting_machine2),
	path('counting_machine3',views.counting_machine3),
	path('counting_machine4',views.counting_machine4),
	path('counting_machine5',views.counting_machine5),
	path('inverter_battery',views.inverter_battery),
	path('inverter_battery2',views.inverter_battery2),
	path('inverter_battery3',views.inverter_battery3),
	path('tv',views.tv),
	path('tv2',views.tv2),
	path('tv3',views.tv3),
	path('admin1',views.admin1),
	path('stock',views.stock),
	path('cctv_stock',views.cctv_stock)
]

urlpatterns += staticfiles_urlpatterns()
