# Naptár | Frontend záródolgozat
**A feladat megoldásához a `Use this template` gomb segítségével hozhatja létre a saját repository-ját. A repository-t a szervezetben hozza létre a-naptar-[monogram] néven. Munkáját folyamatosan commitolja és pusholja. Amennyiben a moodle beadási felületére nem tölt fel állományt, abban az esetben a 18:40 előtti utolsó commit lesz értékelve.** A projekben már elő van készítve a Bootstrap 5 és a Vue.js 3.2, így önnek ezzel már semmilyen teendője nincs! Továbbá talál a gyökérkönyvtárban egy postman_collection.json nevű fájlt, melyet a Postman-be importálva kipróbálhatja a az API-t. A feladat során önnek egy egyszerű naptár frontend oldalát kell elkészítenie Vue.js segítségével.

## Feladatok
1. Készítse el az EventModel osztályt, amely képes tárolni egy [esemény](#az-esemény-adatai) adatait.
2. Készítsen egy EventController osztályt, amelybe tárolja el az eseményeket és valósítsa meg a hozzájuk kapcsolódó [CRUD](#crud-url-ek) műveleteket.
3. Hozza létre az CalendarTable nevű komponenst. A komponens tartalmazzon egy sávos megjelenítésű táblázatot.
   1. A komponensben példányosítsa az EventController-t.
   2. Oldja meg, hogy a komponens létrejöttekor a EventController lekérje az elemeket az API-on keresztül
4. Hozza létre a CalendarRow nevű komponenst, amelyben egy adott EventModel adatait jeleníti meg, valamint a `Módosítás` és `Törlés` gombokat
   1. A CalendarRow prop-ként csak az adott EventModel-t kapja meg, valamint a törlő és módosító függvényt.
   2. A CalendarRow rendelkezzen a módosításhoz szükséges mezőkkel, melynek adatait a függvényen keresztül adja át.
   3. A kezdési és befejezési időt, csak akkor kell megjeleníteni, ha nem egész napos az esemény. Az egész napos eseményt jelző mezőt nem kell megjeleníteni.
5. A törlést, a módosítást és a létrehozást a CalendarTable-ön keresztül valósítsa meg a EventController.
6. A CalendarTable elejére szúrjon be egy speciális sort amely a megfelelő beviteli mezőket tartalmazza, ahhoz hogy új elemet lehessen felvenni.

## Az esemény adatai
| Tárolt adat     | Mező neve   | Tárolt típus |
|-----------------|-------------|--------------|
| Az esemény neve | subject     | String       |
| Leírás          | description | String       |
| Helyszín        | location    | String       |
| Egész napos-e?  | allDay      | Boolean     |
| Kezdés          | start       | DateTime     |
| Befejezés       | end         | DateTime     |

## CRUD URL-ek
| Method | URL                 |
|--------|---------------------|
| GET    | /                   |
| GET    | /api/events         |
| GET    | /api/events/{event} |
| POST   | /api/events         |
| PUT    | /api/events/{event} |
| DELETE | /api/events/{event} |
