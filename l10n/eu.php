<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Mapeatzeen garbiketak huts egin du.",
"Failed to delete the server configuration" => "Zerbitzariaren konfigurazioa ezabatzeak huts egin du",
"The configuration is valid and the connection could be established!" => "Konfigurazioa egokia da eta konexioa ezarri daiteke!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Konfigurazioa ongi dago, baina Bind-ek huts egin du. Mesedez egiaztatu zerbitzariaren ezarpenak eta kredentzialak.",
"The configuration is invalid. Please have a look at the logs for further details." => "Konfigurazioa ez dago ongi. Mesedez ikusi egunerokoak (log) informazio gehiago eskuratzeko.",
"No action specified" => "Ez da ekintzarik zehaztu",
"No configuration specified" => "Ez da konfiguraziorik zehaztu",
"No data specified" => "Ez da daturik zehaztu",
" Could not set configuration %s" => "Ezin izan da %s konfigurazioa ezarri",
"Deletion failed" => "Ezabaketak huts egin du",
"Take over settings from recent server configuration?" => "oraintsuko zerbitzariaren konfigurazioaren ezarpenen ardura hartu?",
"Keep settings?" => "Mantendu ezarpenak?",
"{nthServer}. Server" => "{nthServer}. Zerbitzaria",
"Cannot add server configuration" => "Ezin da zerbitzariaren konfigurazioa gehitu",
"mappings cleared" => "Mapeatzeak garbi",
"Success" => "Arrakasta",
"Error" => "Errorea",
"Please specify a Base DN" => "Mesdez zehaztu Base DN",
"Could not determine Base DN" => "Ezin izan da zehaztu Base DN",
"Please specify the port" => "Mesdez zehaztu portua",
"Configuration OK" => "Konfigurazioa ongi dago",
"Configuration incorrect" => "Konfigurazioa ez dago ongi",
"Configuration incomplete" => "Konfigurazioa osatu gabe dago",
"Select groups" => "Hautatu taldeak",
"Select object classes" => "Hautatu objektu klaseak",
"Select attributes" => "Hautatu atributuak",
"Connection test succeeded" => "Konexio froga ongi burutu da",
"Connection test failed" => "Konexio frogak huts egin du",
"Do you really want to delete the current Server Configuration?" => "Ziur zaude Zerbitzariaren Konfigurazioa ezabatu nahi duzula?",
"Confirm Deletion" => "Baieztatu Ezabatzea",
"_%s group found_::_%s groups found_" => array("Talde %s aurkitu da","%s talde aurkitu dira"),
"_%s user found_::_%s users found_" => array("Erabiltzaile %s aurkitu da","%s erabiltzaile aurkitu dira"),
"Could not find the desired feature" => "Ezin izan da nahi zen ezaugarria aurkitu",
"Invalid Host" => "Baliogabeko hostalaria",
"Server" => "Zerbitzaria",
"User Filter" => "Erabiltzaileen iragazkia",
"Login Filter" => "Saioa hasteko Iragazkia",
"Group Filter" => "Taldeen iragazkia",
"Save" => "Gorde",
"Test Configuration" => "Egiaztatu Konfigurazioa",
"Help" => "Laguntza",
"Groups meeting these criteria are available in %s:" => "Baldintza horiek betetzen dituzten taldeak bertan eskuragarri %s:",
"only those object classes:" => "bakarrik objektu klase hauetakoak:",
"only from those groups:" => "bakarrik talde hauetakoak:",
"Raw LDAP filter" => "Raw LDAP iragazkia",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Iragazkiak zehazten du  ze LDAP taldek izango duten sarrera %s instantziara:",
"groups found" => "talde aurkituta",
"Users login with this attribute:" => "Erabiltzaileak atributu honekin sartzen dira:",
"LDAP Username:" => "LDAP Erabiltzaile izena:",
"LDAP Email Address:" => "LDAP Eposta helbidea:",
"Other Attributes:" => "Bestelako atributuak:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Definitu aplikatu beharreko iragazkia sartzen saiatzean. %%uid erabiltzailearen izena ordezten du sartzeko ekintzan. Adibidez: \"uid=%%uid\"",
"1. Server" => "1. Zerbitzaria",
"%s. Server:" => "%s. Zerbitzaria:",
"Add Server Configuration" => "Gehitu Zerbitzariaren Konfigurazioa",
"Delete Configuration" => "Ezabatu Konfigurazioa",
"Host" => "Hostalaria",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Protokoloa ez da beharrezkoa, SSL behar baldin ez baduzu. Honela bada hasi ldaps://",
"Port" => "Portua",
"User DN" => "Erabiltzaile DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Lotura egingo den bezero erabiltzailearen DNa, adb. uid=agent,dc=example,dc=com. Sarrera anonimoak gaitzeko utzi DN eta Pasahitza hutsik.",
"Password" => "Pasahitza",
"For anonymous access, leave DN and Password empty." => "Sarrera anonimoak gaitzeko utzi DN eta Pasahitza hutsik.",
"One Base DN per line" => "DN Oinarri bat lerroko",
"You can specify Base DN for users and groups in the Advanced tab" => "Erabiltzaile eta taldeentzako Oinarrizko DN zehaztu dezakezu Aurreratu fitxan",
"Limit %s access to users meeting these criteria:" => "Mugatu %s sarbidea baldintza horiek betetzen dituzten erabiltzaileei.",
"The filter specifies which LDAP users shall have access to the %s instance." => "Iragazkiak zehazten du  ze LDAP erabiltzailek izango duten sarrera %s instantziara:",
"users found" => "erabiltzaile aurkituta",
"Back" => "Atzera",
"Continue" => "Jarraitu",
"Expert" => "Aditua",
"Advanced" => "Aurreratua",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Abisua:</b> user_ldap eta user_webdavauth aplikazioak bateraezinak dira. Portaera berezia izan dezakezu. Mesedez eskatu zure sistema kudeatzaileari bietako bat desgaitzeko.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Abisua:</b> PHPk behar duen LDAP modulua ez dago instalaturik, motorrak ez du funtzionatuko. Mesedez eskatu zure sistema kudeatzaileari instala dezan.",
"Connection Settings" => "Konexio Ezarpenak",
"Configuration Active" => "Konfigurazio Aktiboa",
"When unchecked, this configuration will be skipped." => "Markatuta ez dagoenean, konfigurazio hau ez da kontutan hartuko.",
"Backup (Replica) Host" => "Babeskopia (Replica) Ostalaria",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Eman babeskopia ostalari gehigarri bat. LDAP/AD zerbitzari nagusiaren replica bat izan behar da.",
"Backup (Replica) Port" => "Babeskopia (Replica) Ataka",
"Disable Main Server" => "Desgaitu Zerbitzari Nagusia",
"Only connect to the replica server." => "Konektatu bakarrik erreplika zerbitzarira",
"Case insensitive LDAP server (Windows)" => "Maiuskulak eta minuskulak ezberditzen ez dituen LDAP zerbitzaria (Windows)",
"Turn off SSL certificate validation." => "Ezgaitu SSL ziurtagirien egiaztapena.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Ez da gomendagarria, erabili bakarrik probarako! Konexioak aukera hau ezinbestekoa badu, inportatu LDAP zerbitzariaren SSL ziurtagiria zure %s zerbitzarian.",
"Cache Time-To-Live" => "Katxearen Bizi-Iraupena",
"in seconds. A change empties the cache." => "segundutan. Aldaketak katxea husten du.",
"Directory Settings" => "Karpetaren Ezarpenak",
"User Display Name Field" => "Erabiltzaileen bistaratzeko izena duen eremua",
"The LDAP attribute to use to generate the user's display name." => "Erabiltzailearen bistaratze izena sortzeko erabiliko den LDAP atributua.",
"Base User Tree" => "Oinarrizko Erabiltzaile Zuhaitza",
"One User Base DN per line" => "Erabiltzaile DN Oinarri bat lerroko",
"User Search Attributes" => "Erabili Bilaketa Atributuak ",
"Optional; one attribute per line" => "Aukerakoa; atributu bat lerro bakoitzeko",
"Group Display Name Field" => "Taldeen bistaratzeko izena duen eremua",
"The LDAP attribute to use to generate the groups's display name." => "Taldearen bistaratze izena sortzeko erabiliko den LDAP atributua.",
"Base Group Tree" => "Oinarrizko Talde Zuhaitza",
"One Group Base DN per line" => "Talde DN Oinarri bat lerroko",
"Group Search Attributes" => "Taldekatu Bilaketa Atributuak ",
"Group-Member association" => "Talde-Kide elkarketak",
"Nested Groups" => "Talde habiaratuak",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "Piztuta dagoenean, taldeak dauzkaten taldeak onartzen dira. (Bakarrik taldeko kideen atributuak DNak baditu).",
"Special Attributes" => "Atributu Bereziak",
"Quota Field" => "Kuota Eremua",
"Quota Default" => "Kuota Lehenetsia",
"in bytes" => "bytetan",
"Email Field" => "Eposta eremua",
"User Home Folder Naming Rule" => "Erabiltzailearen Karpeta Nagusia Izendatzeko Patroia",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Utzi hutsik erabiltzaile izenarako (lehentsia). Bestela zehaztu LDAP/AD atributua.",
"Internal Username" => "Barneko erabiltzaile izena",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Modu lehenetsian barneko erabiltzaile-izena UUID atributuan oinarritua sortuko da. Horrek bermatzen du erabiltzailea bakarra dela eta karaktereak ez direla bihurtu behar. Barneko erabiltzaile-izenak muga bat du, hain zuzen bakarrik karaktere hauek onartzen direla:  [ a-zA-Z0-9_.@- ]. Gainerako karaktereak haien ASCII kodean dagokienekin ordezten dira edo saltatu egiten dira. Talka egotekotan zenbaki bat erantsi edo handituko da. Barneko erabiltzaile-izena erabiltzailea barnean identifikatzeko erabiltzen da. Era berean izen hau da erabiltzailearen karpeta nagusiaren izen lehentsia. Bai eta URL helbidearen zatia, esate baterako *DAV zerbitzu guztietan. Ezarpen hauekin lehenetsitako jokaera alda daiteke. Lortzeko ownCloud 5aren aurreko antzeko jokaera sartu erabiltzaile-izenaren atributua hurrengo eremuan. Hutsik utzi lehenetsitako jokaera izateko. Aldaketok bakarrik eragingo diete berriki mapeatutako (erantsitako) LDAP erabiltzaileei.",
"Internal Username Attribute:" => "Baliogabeko Erabiltzaile Izen atributua",
"Override UUID detection" => "Gainidatzi UUID antzematea",
"UUID Attribute for Users:" => "Erabiltzaileentzako UUID atributuak:",
"UUID Attribute for Groups:" => "Taldeentzako UUID atributuak:"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
