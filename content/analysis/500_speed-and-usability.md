Hastighet och användbarhet
=============================

Vi har analyserat hastighet och användbarhet på fyra olika sidor. Du hittar vårat excel-dokument med alla analyserade sidor [här.](https://docs.google.com/spreadsheets/d/1_zoF2tNDr3aeE0hGtAsekoGoNuAzYuzmt4OGMs3L1bo/edit?usp=sharing)

1. dbwebb.se
-----------------------------

![dbwebb.se](image/analysis/dbwebb.png?w=750)

Sidan laddar in all CSS via ett externt stylesheet. För att snabba upp renderingen kan man skjuta upp inläsningen av resurserna som blockerar renderingen, eller läsa in dem asynkront eller genom att infoga de viktigaste delarna direkt i HTML-koden. HTML-koden och “responsive-menu.js” bör också minifieras.


2. blocket.se
-----------------------------

![blocket.se](image/analysis/blocket.png?w=750)

Komprimera och formatera bilder, javascript, html och css så det går snabbare att hämta och tolka sidan. Detta sparar många kilobyte, vilket medför snabbare laddningstid.


3. developer.mozilla.org
-----------------------------

![developer.mozilla.org](image/analysis/developer-mozilla.png?w=750)

Det första som MDN måste fixa är att sluta blockera renderingen av Javascript och CSS. Fixa responstiden till servern och göra så att knapparna och länkarna är större. Och ta del av webbläsarens caching.


4. stackoverflow.com
-----------------------------

![stackoverflow.com](image/analysis/stackoverflow.png?w=750)

Komprimera och formatera bilderna för att få en snabbare laddningstid på http://stackoverflow.com/users. Bilderna är mycket större än de borde vara.  Utnyttja caching. Inte blockera JavaScript och CSS.


Vanliga förbättringar
-----------------------------

Med hjälp av att ta bort JavaScript samt CSS-kod som blockerar renderingen så får man en snabbare laddningstid på sin webbplats. Även komprimering och formatering av bilder kan förbättra sidans laddningstid.


Laddningstid
-----------------------------

En laddningstid på under två sekunder är ett bra värde. Värden mellan två och fyra sekunder anser vi vara en acceptabel laddningstid. Webbplatser med laddningstid på över fem sekunder bör kolla upp förbättringar av javascript, html, css, bilder med mera.


Analys av
-----------------------------
Olof Enström, Ara Nourbakhsh, Niklas Hallberg och Magnus Greiff
