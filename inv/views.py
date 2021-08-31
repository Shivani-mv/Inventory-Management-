from django.shortcuts import render
from .models import *
import json
import requests

def cctv_stock(request):
	json_data=json.loads(request.body)
	products= cctv.objects.all()
	context= {'products': products}
	resp =  render_to_response("cctv_stock.html", products, context_instance=Context(request))
	return resp

def home(request):
	return render(request, 'index.php')

def CCTV(request):
	return render(request,'CCTV.php')

def CCTV2(request):
	return render(request,'CCTV2.php')

def CCTV3(request):
	return render(request,'CCTV3.php')

def CCTV4(request):
	return render(request,'CCTV4.php')

def CCTV5(request):
	return render(request,'CCTV5.php')

def header(request):
	return render(request,'header.php')

def ac(request):
	return render(request,'ac.php')

def ac2(request):
	return render(request,'ac2.php')

def ac3(request):
	return render(request,'ac3.php')

def ac4(request):
	return render(request,'ac4.php')

def ac5(request):
	return render(request,'ac5.php')

def counting_machine(request):
	return render(request,'counting_machine.php')

def counting_machine2(request):
	return render(request,'counting_machine2.php')

def counting_machine3(request):
	return render(request,'counting_machine3.php')

def counting_machine4(request):
	return render(request,'counting_machine4.php')

def counting_machine5(request):
	return render(request,'counting_machine5.php')

def fire_alarm(request):
	return render(request,'fire_alarm.php')

def fire_alarm2(request):
	return render(request,'fire_alarm2.php')

def fire_alarm3(request):
	return render(request,'fire_alarm3.php')

def inverter_battery(request):
	return render(request,'inverter_battery.php')

def inverter_battery2(request):
	return render(request,'inverter_battery2.php')

def inverter_battery3(request):
	return render(request,'inverter_battery3.php')

def tv(request):
	return render(request,'tv.php')

def tv2(request):
	return render(request,'tv2.php')

def tv3(request):
	return render(request,'tv3.php')

def admin1(request):
	return render(request,'admin1.html')

def stock(request):
	return render(request,'stock.html')


