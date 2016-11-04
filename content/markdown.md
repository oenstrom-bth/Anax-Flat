Testar Markdown
=================================

Länka till andra sidor {#url}
---------------------------------

Jag kan länka till andra dokument. I samma katalog som filen [license.md](license). Eller i en annan katalog, [report/kmom01](report/kmom01).

Det spelar ingen roll vilken underkatalog vi är i. Alla url:er som är relativa får sidans basurl infogad framför sig. Basurl:en är url:en till [`htdocs`]()-katalogen.



Länka till bilder {#img}
---------------------------------

Här är några exempel på hur du kan länka till bilder med Markdown eller HTML.

```text
![alt text](img/dbwebbisar.jpg)
<img src="img/dbwebbisar.jpg" alt="alt text">
```

Och så här blir det.

![alt text](img/dbwebbisar.jpg)

<img src="img/dbwebbisar.jpg" alt="alt text">



Skapa en mailto: länk {#mailto}
---------------------------------

Du kan skapa en mailto-länk med Markdown eller HTML. Det ser ut så här.

```text
<mailto:user@example.com>
<user@example.com>
<a href="mailto:user@example.com">user@example.com</a>
```

Resultatet ser ut så här.

* <mailto:user@example.com>
* <user@example.com>
* <a href="mailto:user@example.com">user@example.com</a>



Fet och kursiv text
-----------------------------------

```
*Här är en kursiv text.*

**Här är en fet text.**

_Kursiv med understreck_

__Fet med understreck__
```

*Här är en kursiv text.*

**Här är en fet text.**

_Kursiv med understreck_

__Fet med understreck__


Olika headings
----------------------------------------

```
Heading 1
========

Heading 2
--------

###Heading 3

####Heading 4

#####Heading 5
```

Result:

Heading 1
========

Heading 2
--------

###Heading 3

####Heading 4

#####Heading 5
