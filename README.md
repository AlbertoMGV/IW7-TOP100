# IW7-TOP100

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)


### Symfony v3.4
To run server:

```sh
$ php bin/console server:run
```
### Tasks

##### Descripción
El proyecto "Top 100" deberá implementar un sitio web en el que se muestre información sobre las canciones más populares del momento. Los visitantes podrán ver los detalles de cada canción (incluido un campo con su posición en el ranking) y encontrarlas en función de su estilo musical principal (ej: pop, rock, punk, heavy, etc.) y de los intérpretes (solistas o grupos estarán en esta misma entidad, no hace falta separarlos). También podrán ver los detalles de cada estilo musical y de cada intérprete, incluida la lista de canciones en cada caso.

##### Funcionalidades básicas (2,5 puntos)
- Personalización de una plantilla (estructura de varios niveles) y sus estilos. 
- Visualizar la portada de la web "Top 100", mostrando dos canciones de cada estilo (las más populares, teniendo en cuenta su posición en el ranking).
- Visualizar los detalles de un estilo determinado, incluida la lista de canciones que haya de ese estilo.
- Visualizar los detalles de un intérprete concreto, incluida la lista de canciones que haya de ese intérprete.
- Visualizar los detalles de una canción concreta, incluido el nombre del estilo al que pertenece y la lista de intérpretes asociados.



### Plan

- En el index mostrar los generos con el top 3 canciones de dicho genero.
- [/genre.php?id=**genreName**]: Informacion extendida del genero.

- [/songs]: Top 100 canciones listadas [name/duracion/artista].
- [/song.php?id=**songName**]: Informacion extendida de la cancion.

- [/artists]: Top artistas.
- [/artist.php?id=**artistName**]: Informacion extendida del artista.
