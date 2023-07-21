                                    
import httpx

# URL de la API
url = 'https://emtorch.com/ondaily/notify/send'

# Datos en formato JSON
data = {
        'client_key' : 'oCb6eTQBwbBWkt9D39nXS3yaNgh5JwYiBOkgbMyP3LzTl',
        'identifiers' : ['user-2'],
        # 'categories' : ['conductores'],
        'title_notify' : 'Título de la notificación',
        'message_notify' : 'Mensaje de la notificación',
        'icon_notify' : 'https://emtorch.com/static/images/ice-age-sid.jpg',
        'badge_notify' : 'https://emtorch.com/static/images/icon-main-notify.png',
        'image_notify' : 'https://emtorch.com/static/images/ice-age-la-edad-de-hielo-2.jpg',
        'redirect' : 'https://emtorch.com/',
    }

# Encabezados de la solicitud
headers = {
    'Content-Type': 'application/json'
}

# Realizar la solicitud POST
response = httpx.post(url, json=data, headers=headers, verify=False)

print(response.text)
