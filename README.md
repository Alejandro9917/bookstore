# Bookstore

-------
## Integrantes

- Miguel Alejandro Meléndez Martínez: [@Alejandro9917](https://github.com/Alejandro9917)
- Daniel Alejandro Molina Menjivar: [@Daalejandro](https://github.com/Daalejandro)
- Josseline Melissa Recinos Rodríguez: [@Josseline-RR](https://github.com/Josseline-RR)
- Rodrigo Fernando Valle Díaz: [@Lawliet25](https://github.com/Lawliet25)
- Oscar Alejandro Linares López: [@Linareswst](https://github.com/Linareswst)

-------
## Trello
[Tablero en Trello](https://trello.com/b/Vh1PW357/bookstore)

-------
## Documentos
### Documento de proyecto
 - [Documento primera fase](https://udbedu-my.sharepoint.com/:b:/g/personal/mm180363_alumno_udb_edu_sv/ERaUJlEGqPJItoYK7Z4k9E8B7HpPnxRIZwpExGUtMcsA-Q?e=Lb5AcA)
### Manual de usuario
 - [Manual de cliente](https://udbedu-my.sharepoint.com/:b:/g/personal/mm180363_alumno_udb_edu_sv/EXZwTRi0DNJOkAvhJ7ALQ6sBuRszV9AVWvv7D-btT7I82Q?e=jXu1Ve)
### Manual técnico

-------
## Imagenes
 
### Idea inicial
 ![Logo](https://i.imgur.com/Gn0zV0Y.png)

### Lógica de la aplicación
 ![Logo](https://i.imgur.com/XteHcxR.jpg)

### Mapa del sitio
 ![Logo](https://i.imgur.com/xuB1IDc.png)

### Mockups
 [Logo](https://imgur.com/a/QQhPedD)

### Base de datos
 ![Logo](https://i.imgur.com/axZ3amA.png)

-------
## Vídeo explicación
- [Vídeo explicación](https://udbedu-my.sharepoint.com/:v:/g/personal/mm180363_alumno_udb_edu_sv/EYxDpR_TOhZPpsbknCMsrL0BF2s2Opir1WEc48bJb1s38Q?e=6rJNPi)
(Si no deja ver el video en vista previa, descargarlo)

-------
### Lincencia Creative Commons
Attribution-NonCommercial-NoDerivs 3.0 IGO

***Para más información leer el LICENSE.md***

# Pasos para iniciar el proyecto
 - Modificar el archivo .env para la base de datos
 - Abrir una terminal y escribir lo siguiente
 - composer update
 - cp .env.example .env
 - php artisan key:generate
 - php artisan migrate:fresh --seed
 - php artisan serve
