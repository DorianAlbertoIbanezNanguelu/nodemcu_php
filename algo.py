import requests

humedad = "25"

temperatura = "5"

url = 'https://ecotech-up.000webhostapp.com/prueba/setT_H.php?temperatura='+temperatura+'&humedad='+humedad

x = requests.post(url)

print(x.text)