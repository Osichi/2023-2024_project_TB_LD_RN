# FONTOS, AMIKOR LEHÚZOD:

[php](https://www.php.net/downloads.php)

[Composer](https://getcomposer.org/download/)

[Node.js](https://nodejs.org/en/)

Ha ezek lent vannak akkor nyisd meg a projektet és egy terminal -ba (CTRL-Ö) írd be a következőket:

```
npm install
```

```
composer install
```

Mivel sok php extension kell hozzá, ezért inkább berakom az **_[enyém](https://anotepad.com/notes/jt4peybd)_**, ezt a php-(verziószám)/php.ini -fileba kell berakni

# Changelog

**2023.11.07**: laravel keretrendszeres projekt elkezdve

**2023.11.08**: npm install

**2023.11.19**: regisztráció létrehozva

**2023.11.26**: bejelentkezés létrehozva

**2024.01.16**: kijelentkezés létrehozva, design elkezdve

**2024.01.17**: admin panel elkezdve, admin panelnek és profil oldal file létrehozva

**2024.01.24**: főoldal designolva

**2024.02.01**: hozzáférések + alert hozzáadva

**2024.02.02**: admin panel kész, profil oldal elkezve

**2024.02.06**: profil oldalon látszanak a bejelentkezett felhasználó adatai, jelszó megjelenítése gomb hozzáadva a formokhoz

**2024.02.14**: profil oldal frissítve, adatok módosíthatók, profilkép hozzáadva, éttermek fül hozzáadva, kezdetleges posztolás létrehozva

**2024.02.16**: admin felület frissítve, helyszínek törlése hozzáadva admin felületen és a helyszínek közt, helszínek posztolása megjelenik bootstrap cardként

**2024.02.20**: git issuek kezelve, id alapján lehet törölni a helyszíneket

**2024.02.26**: cardok fixelve

**2024.03.07**: keresés hozzáadva

**2024.03.08**: dokumentáció változtatva, kiegészítve

## Ha kell helyszín teszteléshez (igen, van ami ismétlődik):

```
INSERT INTO posts VALUES(8, 2, 'Nyugi Kert', 06308251595, 'Vitéz utca 28', 'Étterem', 'A szegedi egyetemisták körében méltán híres Nyugi Kert a TIK-kel szemben, garantáltan addiktív atmoszférával, változatos programokkal és egyedi gasztrosörökkel, hatalmas italkínálattal várja a kikapcsolódni vágyókat.', 'https://szegedietterem.hu/wp-content/uploads/2022/07/nyugi-kert0.jpg', 'https://www.facebook.com/szegedikocsma/');
INSERT INTO posts VALUES(9, 3, 'Campus Beer&More', 06209722978, 'Vitéz utca 24', 'Étterem', 'Végre birtokba vehetitek a Campus épületét a TIK-kel szemben, kezdődik az első szemeszter!', 'https://lh3.googleusercontent.com/p/AF1QipPa_MYtLw1i2N8f0Hm6tLpKGG2m69_TzWebbpJp=s680-w680-h510', 'https://www.facebook.com/campusszeged/');
INSERT INTO posts VALUES(10, 2, 'Pivo Bar & Pizzeria', 0, 'Vitéz utca 26', 'Bár', 'Na', 'https://lh3.googleusercontent.com/p/AF1QipN6ARbLStG5sXqYdXLzR6zR6XvDSI_nd-zmRSU4=s680-w680-h510', 'https://www.facebook.com/pivoszeged/?locale=hu_HU');
INSERT INTO posts VALUES(11, 3, 'Aradi Büfé (Budi Büfé)', 0, ' Aradi vértanúk tere', 'Kajálda', 'Na', 'https://lh3.googleusercontent.com/p/AF1QipMtMnI2SpXB_mYg3yFLt3WwHvBlHf6EaDuaviWa=s680-w680-h510', 'Na');
INSERT INTO posts VALUES(12, 2, 'Jobb Mint Otthon Kisvendéglő', 0662555808, 'Lencsés u 4', 'Étterem', 'A Jobb Mint Otthon Kisvendéglő egy közkedvelt, színvonalas szegedi halászcsárda.', 'https://lh3.googleusercontent.com/p/AF1QipOuf1ClxC7mHT1qQGEjgsVaGChaun_szgeNWs0C=s680-w680-h510', 'https://www.jobbmintotthonkisvendeglo.hu');
INSERT INTO posts VALUES(13, 3, 'Trója Ételbár', 06306279056, 'Kölcsey u. 4', 'Kajálda', 'Megéheztél? Gyere el hozzánk vagy rendelj a Trója hatalmas ételkínálatából!', 'https://lh3.googleusercontent.com/p/AF1QipMRREaRVdiAsPblrYmP5aKW7bqYJoyilbwbXmu2=s680-w680-h510', 'https://trojaszeged.hu/?gad_source=1&gclid=CjwKCAiAxaCvBhBaEiwAvsLmWDATYTHHgpVsjYyT3hHQqXiFZJ-a-3plN6Vba2nwW-qOrENlLozXChoC32oQAvD_BwE');

```
