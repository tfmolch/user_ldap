<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Nem sikerült törölni a hozzárendeléseket.",
"Failed to delete the server configuration" => "Nem sikerült törölni a kiszolgáló konfigurációját",
"The configuration is valid and the connection could be established!" => "A konfiguráció érvényes, és a kapcsolat létrehozható!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "A konfiguráció érvényes, de a kapcsolat nem hozható létre. Kérem ellenőrizze a kiszolgáló beállításait, és az elérési adatokat.",
"No action specified" => "Nincs megadva parancs",
"No configuration specified" => "Nincs megadva konfiguráció",
"No data specified" => "Nincs adat megadva",
" Could not set configuration %s" => "A(z) %s konfiguráció nem állítható be",
"Deletion failed" => "A törlés nem sikerült",
"Take over settings from recent server configuration?" => "Vegyük át a beállításokat az előző konfigurációból?",
"Keep settings?" => "Tartsuk meg a beállításokat?",
"Cannot add server configuration" => "Az új  kiszolgáló konfigurációja nem hozható létre",
"mappings cleared" => "Töröltük a hozzárendeléseket",
"Success" => "Sikeres végrehajtás",
"Error" => "Hiba",
"Select groups" => "Csoportok kiválasztása",
"Select object classes" => "Objektumosztályok kiválasztása",
"Select attributes" => "Attribútumok kiválasztása",
"Connection test succeeded" => "A kapcsolatellenőrzés eredménye: sikerült",
"Connection test failed" => "A kapcsolatellenőrzés eredménye: nem sikerült",
"Do you really want to delete the current Server Configuration?" => "Tényleg törölni szeretné a kiszolgáló beállításait?",
"Confirm Deletion" => "A törlés megerősítése",
"_%s group found_::_%s groups found_" => array("%s csoport van","%s csoport van"),
"_%s user found_::_%s users found_" => array("%s felhasználó van","%s felhasználó van"),
"Invalid Host" => "Érvénytelen gépnév",
"Could not find the desired feature" => "A kívánt funkció nem található",
"Save" => "Mentés",
"Test Configuration" => "A beállítások tesztelése",
"Help" => "Súgó",
"Limit the access to %s to groups meeting this criteria:" => "Korlátozzuk %s elérését a következő feltételeknek megfelelő csoportokra:",
"only those object classes:" => "csak ezek az objektumosztályok:",
"only from those groups:" => "csak ezek a csoportok:",
"Edit raw filter instead" => "Inkább közvetlenül megadom a szűrési kifejezést:",
"Raw LDAP filter" => "Az LDAP szűrőkifejezés",
"The filter specifies which LDAP groups shall have access to the %s instance." => "A szűrő meghatározza, hogy mely LDAP csoportok lesznek jogosultak %s elérésére.",
"groups found" => "csoport van",
"What attribute shall be used as login name:" => "Melyik attribútumot használjuk login névként:",
"LDAP Username:" => "LDAP felhasználónév:",
"LDAP Email Address:" => "LDAP e-mail cím:",
"Other Attributes:" => "Más attribútumok:",
"Add Server Configuration" => "Új kiszolgáló beállításának hozzáadása",
"Host" => "Kiszolgáló",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "A protokoll előtag elhagyható, kivéve, ha SSL-t kíván használni. Ebben az esetben kezdje így:  ldaps://",
"Port" => "Port",
"User DN" => "A kapcsolódó felhasználó DN-je",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Annak a felhasználónak a DN-je, akinek a nevében bejelentkezve kapcsolódunk a kiszolgálóhoz, pl. uid=agent,dc=example,dc=com. Bejelentkezés nélküli eléréshez ne töltse ki a DN és Jelszó mezőket!",
"Password" => "Jelszó",
"For anonymous access, leave DN and Password empty." => "Bejelentkezés nélküli eléréshez ne töltse ki a DN és Jelszó mezőket!",
"One Base DN per line" => "Soronként egy DN-gyökér",
"You can specify Base DN for users and groups in the Advanced tab" => "A Haladó fülre kattintva külön DN-gyökér állítható be a felhasználók és a csoportok számára",
"Limit the access to %s to users meeting this criteria:" => "Korlátozzuk %s elérését a következő feltételeknek megfelelő felhasználókra:",
"The filter specifies which LDAP users shall have access to the %s instance." => "A szűrő meghatározza, hogy mely LDAP felhasználók lesznek jogosultak %s elérésére.",
"users found" => "felhasználó van",
"Back" => "Vissza",
"Continue" => "Folytatás",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Figyelem:</b> a user_ldap és user_webdavauth alkalmazások nem kompatibilisek. Együttes használatuk váratlan eredményekhez vezethet. Kérje meg a rendszergazdát, hogy a kettő közül kapcsolja ki az egyiket.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Figyelmeztetés:</b> Az LDAP PHP modul nincs telepítve, ezért ez az alrendszer nem fog működni. Kérje meg a rendszergazdát, hogy telepítse!",
"Connection Settings" => "Kapcsolati beállítások",
"Configuration Active" => "A beállítás aktív",
"When unchecked, this configuration will be skipped." => "Ha nincs kipipálva, ez a beállítás kihagyódik.",
"User Login Filter" => "Szűrő a bejelentkezéshez",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Ez a szűrő érvényes a bejelentkezés megkísérlésekor. Ekkor az %%uid változó helyére a bejelentkezési név kerül. Például: \"uid=%%uid\"",
"Backup (Replica) Host" => "Másodkiszolgáló (replika)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Adjon meg egy opcionális másodkiszolgálót. Ez a fő LDAP/AD kiszolgáló szinkron másolata (replikája) kell legyen.",
"Backup (Replica) Port" => "A másodkiszolgáló (replika) portszáma",
"Disable Main Server" => "A fő szerver kihagyása",
"Only connect to the replica server." => "Csak a másodlagos (másolati) kiszolgálóhoz kapcsolódjunk.",
"Case insensitve LDAP server (Windows)" => "Az LDAP-kiszolgáló nem tesz különbséget a kis- és nagybetűk között (Windows)",
"Turn off SSL certificate validation." => "Ne ellenőrizzük az SSL-tanúsítvány érvényességét",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Használata nem javasolt (kivéve tesztelési céllal). Ha a kapcsolat csak ezzel a beállítással működik, akkor importálja az LDAP-kiszolgáló SSL tanúsítványát a(z) %s kiszolgálóra!",
"Cache Time-To-Live" => "A gyorsítótár tárolási időtartama",
"in seconds. A change empties the cache." => "másodpercben. A változtatás törli a cache tartalmát.",
"Directory Settings" => "Címtár beállítások",
"User Display Name Field" => "A felhasználónév mezője",
"The LDAP attribute to use to generate the user's display name." => "Ebből az LDAP attribútumból képződik a felhasználó megjelenítendő neve.",
"Base User Tree" => "A felhasználói fa gyökere",
"One User Base DN per line" => "Soronként egy felhasználói fa gyökerét adhatjuk meg",
"User Search Attributes" => "A felhasználók lekérdezett attribútumai",
"Optional; one attribute per line" => "Nem kötelező megadni, soronként egy attribútum",
"Group Display Name Field" => "A csoport nevének mezője",
"The LDAP attribute to use to generate the groups's display name." => "Ebből az LDAP attribútumból képződik a csoport megjelenítendő neve.",
"Base Group Tree" => "A csoportfa gyökere",
"One Group Base DN per line" => "Soronként egy csoportfa gyökerét adhatjuk meg",
"Group Search Attributes" => "A csoportok lekérdezett attribútumai",
"Group-Member association" => "A csoporttagság attribútuma",
"Special Attributes" => "Különleges attribútumok",
"Quota Field" => "Kvóta mező",
"Quota Default" => "Alapértelmezett kvóta",
"in bytes" => "bájtban",
"Email Field" => "Email mező",
"User Home Folder Naming Rule" => "A home könyvtár elérési útvonala",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Hagyja üresen, ha a felhasználónevet kívánja használni. Ellenkező esetben adjon meg egy LDAP/AD attribútumot!",
"Internal Username" => "Belső felhasználónév",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Alapértelmezetten a belső felhasználónév az UUID tulajdonságból jön létre. Ez biztosítja a felhasználónév egyediségét és hogy a nem kell konvertálni a karaktereket benne. A belső felhasználónévnél a megkötés az, hogy csak a következő karakterek engdélyezettek benne: [ a-zA-Z0-9_.@- ]. Ezeken a karaktereken kivül minden karakter le lesz cserélve az adott karakter ASCII kódtáblában használható párjára vagy ha ilyen nincs akkor egyszerűen ki lesz hagyva. Ha így mégis ütköznének a nevek akkor hozzá lesz füzve egy folyamatosan növekvő számláló rész. A  belső felhasználónevet lehet használni a felhasználó azonosítására a programon belül. Illetve ez lesz az alapáértelmezett neve a felhasználó kezdő könyvtárának az ownCloud-ban. Illetve...............................",
"Internal Username Attribute:" => "A belső felhasználónév attribútuma:",
"Override UUID detection" => "Az UUID-felismerés felülbírálása",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Az UUID attribútum alapértelmezetten felismerésre kerül. Az UUID attribútum segítségével az LDAP felhasználók és csoportok egyértelműen azonosíthatók. A belső felhasználónév is azonos lesz az UUID-vel, ha fentebb nincs másként definiálva. Ezt a beállítást felülbírálhatja és bármely attribútummal helyettesítheti. Ekkor azonban gondoskodnia kell arról, hogy a kiválasztott attribútum minden felhasználó és csoport esetén lekérdezhető és egyedi értékkel bír. Ha a mezőt üresen hagyja, akkor az alapértelmezett attribútum lesz érvényes. Egy esetleges módosítás csak az újonnan hozzárendelt (ill. létrehozott) felhasználókra és csoportokra lesz érvényes.",
"UUID Attribute for Users:" => "A felhasználók UUID attribútuma:",
"UUID Attribute for Groups:" => "A csoportok UUID attribútuma:",
"Username-LDAP User Mapping" => "Felhasználó - LDAP felhasználó hozzárendelés",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "A felhasználónevek segítségével történik a (meta)adatok tárolása és hozzárendelése. A felhasználók pontos azonosítása céljából minden LDAP felhasználóhoz egy belső felhasználónevet rendelünk. Ezt a felhasználónevet az LDAP felhasználó UUID attribútumához rendeljük hozzá. Ezen túlmenően a DN is tárolásra kerül a gyorsítótárban, hogy csökkentsük az LDAP lekérdezések számát, de a DN-t nem használjuk azonosításra. Ha a DN megváltozik, akkor a rendszer ezt észleli. A belső felhasználóneveket a rendszer igen sok helyen használja, ezért a hozzárendelések törlése sok érvénytelen adatrekordot eredményez az adatbázisban. A hozzárendelések törlése nem függ a konfigurációtól, minden LDAP konfigurációt érint! Ténylegesen működő szolgáltatás esetén sose törölje a hozzárendeléseket, csak tesztelési vagy kísérleti célú szerveren!",
"Clear Username-LDAP User Mapping" => "A felhasználó - LDAP felhasználó hozzárendelés törlése",
"Clear Groupname-LDAP Group Mapping" => "A csoport - LDAP csoport hozzárendelés törlése"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
