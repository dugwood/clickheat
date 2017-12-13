ClickHeat
=========

Please read instructions at https://www.dugwood.com/clickheat/index.html ([Version française](https://www.dugwood.fr/clickheat/index.html)).

This software is GPL Open Source. More info on rights linked to this software in the [LICENSE file](LICENSE) or at http://www.opensource.org/licenses/gpl-license.php

Docker
======

```
docker build -t dugwood/clickheat .
docker run -it -p 80:80 dugwood/clickheat
curl http://localhost
```

Or build and run with a context path

```
docker build --build-arg CONTEXT_PATH=clickheat -t dugwood/clickheat .
docker run -it -p 80:80 dugwood/clickheat
curl http://localhost/clickheat
```

Special thanks
==============

To all translators.

To [Didem Gurdur](http://linkedin.com/in/didemgurdur/) for redesign of the logo.

