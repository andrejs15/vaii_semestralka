# RealEstate

Andrej Serdel

5ZYI34

## Stručný opis projektu
RealEstate je webová aplikácia určená pre záujemcov o bývanie a slúži na prehliadanie, vyhľadávanie a správu ponúk nehnuteľností. Jej cieľom je umožniť návštevníkom jednoducho prezerať dostupné nehnuteľnosti a zobrazovať ich detailné informácie, napríklad cenu, lokalitu, počet izieb, rozlohu, typ nehnuteľnosti, štýl bývania, prvky prístupnosti a fotografie.
Registrovaní používatelia budú môcť pridávať vlastné ponuky nehnuteľností, upravovať ich a odstraňovať. Správca aplikácie bude mať rozšírené oprávnenia na správu obsahu a pomocných číselníkov. Aplikácia bude rozlišovať verejne dostupnú časť a časť prístupnú iba po prihlásení.

## Role v projekte
### Návštevník 
– neprihlásený používateľ. Môže prezerať zoznam nehnuteľností, zobrazovať ich detail a používať dostupné vyhľadávanie, filtrovanie a zoraďovanie. Nemôže vytvárať ani upravovať ponuky.
### Registrovaný používateľ 
– prihlásený používateľ. Má rovnaké možnosti ako návštevník a navyše môže vytvárať vlastné ponuky, upravovať a odstraňovať svoje ponuky a spravovať ich fotografie.
### Správca 
– používateľ s rozšírenými oprávneniami. Môže spravovať všetky ponuky bez ohľadu na ich autora a spravovať systémové údaje, napríklad typy nehnuteľností a prvky prístupnosti.

## Prípady použitia podľa rolí
### Návštevník
- zobrazí zoznam aktuálne ponúkaných nehnuteľností.
- otvorí detail konkrétnej nehnuteľnosti.
- vyhľadá alebo vyfiltruje nehnuteľnosti podľa zvolených kritérií.
- zoradí ponuky napríklad podľa ceny.
- môže sa prihlásiť alebo vytvoriť používateľský účet.
### Registrovaný používateľ
- prihlási sa a odhlási zo svojho účtu.
- pridá novú ponuku nehnuteľnosti.
- upraví údaje svojej existujúcej ponuky.
- odstráni svoju ponuku.
- nahrá fotografie k nehnuteľnosti a zvolí hlavný obrázok.
- zobrazí si zoznam vlastných ponúk.
### Správca
- zobrazí a upraví ľubovoľnú ponuku v systéme.
- odstráni nevhodnú alebo neaktuálnu ponuku.
- pridáva, upravuje a odstraňuje typy nehnuteľností.
- spravuje prvky prístupnosti používané pri ponukách.
- má prístup k chránenej administrátorskej časti aplikácie.

## Plánované entity
### Používateľ
Reprezentuje používateľský účet v aplikácii. Medzi hlavné atribúty patria identifikátor, meno, e-mail, heslo uložené vo forme bezpečného hashu a používateľská rola. Používateľ môže byť autorom viacerých nehnuteľností.
### Nehnuteľnosť
Hlavná entita aplikácie reprezentujúca jednu ponuku nehnuteľnosti. Obsahuje napríklad názov, cenu, lokalitu, popis, počet izieb, počet kúpeľní a rozlohu. Je prepojená s používateľom, typom nehnuteľnosti, štýlom bývania, obrázkami a prvkami prístupnosti.
### Typ nehnuteľnosti
Číselníková entita určujúca druh nehnuteľnosti, napríklad dom, byt, vila alebo chata. Jeden typ môže byť priradený viacerým nehnuteľnostiam.
### Štýl bývania
Entita určujúca architektonický alebo dispozičný štýl nehnuteľnosti, napríklad bungalow, cottage alebo A-frame. Jeden štýl môže byť použitý pri viacerých nehnuteľnostiach.
### Obrázok nehnuteľnosti
Reprezentuje fotografiu priradenú ku konkrétnej nehnuteľnosti. Obsahuje cestu k súboru a informáciu o tom, či ide o hlavný obrázok ponuky. Jedna nehnuteľnosť môže obsahovať viac obrázkov.
### Prvok prístupnosti
Reprezentuje vlastnosť súvisiacu s bezbariérovosťou alebo prístupnosťou nehnuteľnosti, napríklad bezbariérový vstup, výťah alebo vyhradené parkovanie. Jeden prvok môže byť priradený viacerým nehnuteľnostiam a jedna nehnuteľnosť môže mať viac prvkov prístupnosti.

## Vzťahy medzi entitami
### Používateľ – Nehnuteľnosť: vzťah 1:N
Jeden používateľ môže vytvoriť viac ponúk, pričom každá ponuka patrí jednému používateľovi.

### Typ nehnuteľnosti – Nehnuteľnosť: vzťah 1:N
Jeden typ môže byť použitý pri viacerých nehnuteľnostiach, pričom nehnuteľnosť má práve jeden typ.

### Štýl bývania – Nehnuteľnosť: vzťah 1:N  
Jeden štýl môže byť priradený viacerým nehnuteľnostiam.

### ehnuteľnosť – Obrázok nehnuteľnosti: vzťah 1:N
Jedna nehnuteľnosť môže mať viac fotografií, pričom každý obrázok patrí jednej nehnuteľnosti.

### Nehnuteľnosť – Prvok prístupnosti: vzťah M:N
 Jedna nehnuteľnosť môže obsahovať viac prvkov prístupnosti a rovnaký prvok môže byť použitý pri viacerých nehnuteľnostiach. Väzba bude realizovaná pomocou spojovacej tabuľky.

## Hlavné stránky aplikácie
### Domovská stránka / zoznam nehnuteľností 
Zobrazuje dostupné ponuky a umožňuje ich vyhľadávanie, filtrovanie a zoraďovanie.

### Detail nehnuteľnosti
Zobrazuje kompletné informácie o jednej nehnuteľnosti vrátane fotografií, ceny, lokality, parametrov a prvkov prístupnosti.

### Prihlásenie
Umožňuje používateľovi prihlásiť sa do chránenej časti aplikácie.

### Registrácia 
Umožňuje vytvorenie nového používateľského účtu.

### Pridanie nehnuteľnosti 
Formulár na vytvorenie novej ponuky vrátane nahrávania fotografií.

### Úprava nehnuteľnosti 
Formulár na zmenu údajov existujúcej ponuky a správu jej fotografií.

### Moje ponuky 
Zobrazuje nehnuteľnosti vytvorené aktuálne prihláseným používateľom a umožňuje ich správu.

### Administrátorská stránka 
Umožňuje správcovi spravovať ponuky a pomocné údaje aplikácie, napríklad typy nehnuteľností a prvky prístupnosti.

## Rozdelenie funkcionality
### Základná funkcionalita
- zobrazenie zoznamu a detailu nehnuteľností,
- minimálne päť dynamických stránok aplikácie,
- registrácia, prihlásenie a odhlásenie používateľa,
- rozlíšenie používateľských rolí a kontrola oprávnení,
- chránená časť dostupná iba prihláseným používateľom,
- kompletné CRUD operácie pre nehnuteľnosti,
- kompletné CRUD operácie pre minimálne jednu ďalšiu entitu, napríklad typ nehnuteľnosti,
- databázové vzťahy 1:N a M:N,
- nahrávanie a správa obrázkov nehnuteľností,
- validácia formulárov na strane klienta aj servera,
- bezpečné spracovanie vstupov, ochrana proti SQL injection, XSS a CSRF,
- vyhľadávanie, filtrovanie alebo zoraďovanie ponúk pomocou AJAX požiadaviek,
- responzívne používateľské rozhranie,
- vlastný JavaScript a vlastné CSS štýly,
- spustenie aplikácie pomocou Docker prostredia,
- automatické vytvorenie databázy a vloženie demonštračných údajov pri prvom spustení.
### Rozširujúca funkcionalita
- ukladanie obľúbených nehnuteľností používateľa,
- pokročilé kombinované filtrovanie podľa viacerých parametrov,
- interaktívna mapa s polohou nehnuteľností,
- kontaktovanie autora ponuky prostredníctvom aplikácie,
- používateľský profil a rozšírená správa účtu,
- prehľadové štatistiky v administrátorskej časti,
- stránkovanie väčšieho množstva ponúk.
