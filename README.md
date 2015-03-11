![alt tag](https://raw.githubusercontent.com/nicolascine/AppTarjetaBip/master/codeigniter-servicio/assets/img/logo_repo.png)
===========

#####App en produccion: [http://bip-servicio.herokuapp.com](http://bip-servicio.herokuapp.com)
#####Cliente web: [http://bip-cliente.herokuapp.com](http://bip-cliente.herokuapp.com)

### Descripción
La App de divide en 2 partes, por un lado el servicio REST (CodeIgniter) que utiliza cURL para "scrapear" el sitio oficial del transantiago, consultado el estado de xxxxxx. Por otro lado el cliente (Angular, Materializecss) consulta los datos y los presenta amigablemente en la ui.

#### Requerimientos Instalación
Para instalar la App (servicio) sólo es necesario correr la carpeta "codeigniter-servicio" en un servidor que soporte:
- PHP 5.x
- mod_rewrite (php) activado
- cURL


La App cliente incluye los archivos de desarrollo, generados a partir de [yeoman](http://yeoman.io/) ([generator-gulp-angular](https://github.com/Swiip/generator-gulp-angular)). __El sitio optimizado para producción__ se encuentra en en directorio /dist (__angular-cliente/dist__)
___

## Documentación API
El único método soportado es __GET__
```
api/consulta/tarjeta/{id} 
```

| METHOD        | ENDPOINT                  | USAGE           | RETURNS     |
| ------------- |:--------------------------| :---------------| :-----------|
| GET           | api/consulta/tarjeta/{id} | Get bip! Status | bip! Status |

| ENDPOINT                                                             |
| :--------------------------------------------------------------------|
| GET __http://bip-servicio.herokuapp.com/api/consulta/tarjeta/__{id}  |

| PARAMETROS   | VALOR                                       |
|--------------|:--------------------------------------------|
| id           | Número de identificación de la tarjeta bip! |



### Ejemplo de uso
Al hacer una llamada GET se obtiene un JSON con la data del estado de la tarjeta
```
http://bip-servicio.herokuapp.com/api/consulta/tarjeta/123456
```
donde __123456__ corresponde al número de identificación de XXXX
Siguiendo el ejemplo anterior, obtenemos de vuelta el siguiente JSON:
```
{
  "idTarjeta": "123456",
  "estadoContrato": "Contrato Activo",
  "saldoTarjeta": "$2.120",
  "fechaSaldo": "05/01/2005 20:14"
}
```
### Opciones adicionales
Mediante el parámetro __format__ podemos indicar en qué formato recibiremos la información

JSON  : api/consulta/tarjeta/{id}__?format=json__    
XML   : api/consulta/tarjeta/{id}__?format=xml__    
HTML  : api/consulta/tarjeta/{id}__?format=html__    

El formato por defecto es JSON

Ejemplo: Si indicamos como parámetro __?format=xml__

```
http://bip-servicio.herokuapp.com/api/consulta/tarjeta/123456?format=xml
```
El resultado obtenido será:
```
<xml>
  <idTarjeta>123456</idTarjeta>
  <estadoContrato>Contrato Activo</estadoContrato>
  <saldoTarjeta>$2.120</saldoTarjeta>
  <fechaSaldo>05/01/2005 20:14</fechaSaldo>
</xml>
```

###Librerías externas (créditos)

- [codeigniter rest-server](https://github.com/chriskacerguis/codeigniter-restserver) / Chris Kacerguis
- [codeigniter-curl](https://github.com/philsturgeon/codeigniter-curl) / Phil Sturgeon


