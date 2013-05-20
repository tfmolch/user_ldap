<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Nie można usunąć konfiguracji serwera",
"The configuration is valid and the connection could be established!" => "Konfiguracja jest prawidłowa i można ustanowić połączenie!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Konfiguracja jest prawidłowa, ale Bind nie. Sprawdź ustawienia serwera i poświadczenia.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Konfiguracja jest nieprawidłowa. Proszę przejrzeć logi dziennika ownCloud ",
"Deletion failed" => "Usunięcie nie powiodło się",
"Take over settings from recent server configuration?" => "Przejmij ustawienia z ostatnich konfiguracji serwera?",
"Keep settings?" => "Zachować ustawienia?",
"Cannot add server configuration" => "Nie można dodać konfiguracji serwera",
"Success" => "Sukces",
"Error" => "Błąd",
"Connection test succeeded" => "Test połączenia udany",
"Connection test failed" => "Test połączenia nie udany",
"Do you really want to delete the current Server Configuration?" => "Czy chcesz usunąć bieżącą konfigurację serwera?",
"Confirm Deletion" => "Potwierdź usunięcie",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Ostrzeżenie:</b> Aplikacje user_ldap i user_webdavauth nie są  kompatybilne. Mogą powodować nieoczekiwane zachowanie. Poproś administratora o wyłączenie jednej z nich.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Ostrzeżenie:</b>  Moduł PHP LDAP nie jest zainstalowany i nie będzie działał. Poproś administratora o włączenie go.",
"Server configuration" => "Konfiguracja servera",
"Add Server Configuration" => "Dodaj konfigurację servera",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Można pominąć protokół, z wyjątkiem wymaganego protokołu SSL. Następnie uruchom z ldaps://",
"Base DN" => "Baza DN",
"One Base DN per line" => "Jedna baza DN na linię",
"You can specify Base DN for users and groups in the Advanced tab" => "Bazę DN można określić dla użytkowników i grup w karcie Zaawansowane",
"User DN" => "Użytkownik DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN użytkownika klienta, z którym powiązanie wykonuje się, np. uid=agent,dc=example,dc=com. Dla dostępu anonimowego pozostawić DN i hasło puste",
"Password" => "Hasło",
"For anonymous access, leave DN and Password empty." => "Dla dostępu anonimowego pozostawić DN i hasło puste.",
"User Login Filter" => "Filtr logowania użytkownika",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Definiuje filtr do zastosowania, gdy podejmowana jest próba logowania. %%uid zastępuje nazwę użytkownika w działaniu logowania.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "Użyj %%uid zastępczy, np. \"uid=%%uid\"",
"User List Filter" => "Lista filtrów użytkownika",
"Defines the filter to apply, when retrieving users." => "Definiuje filtry do zastosowania, podczas pobierania użytkowników.",
"without any placeholder, e.g. \"objectClass=person\"." => "bez żadnych symboli zastępczych np. \"objectClass=person\".",
"Group Filter" => "Grupa filtrów",
"Defines the filter to apply, when retrieving groups." => "Definiuje filtry do zastosowania, podczas pobierania grup.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "bez żadnych symboli zastępczych np. \"objectClass=posixGroup\".",
"Connection Settings" => "Konfiguracja połączeń",
"Configuration Active" => "Konfiguracja archiwum",
"When unchecked, this configuration will be skipped." => "Gdy niezaznaczone, ta konfiguracja zostanie pominięta.",
"Port" => "Port",
"Backup (Replica) Host" => "Kopia zapasowa (repliki) host",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dać opcjonalnie  hosta kopii zapasowej . To musi być repliką głównego serwera LDAP/AD.",
"Backup (Replica) Port" => "Kopia zapasowa (repliki) Port",
"Disable Main Server" => "Wyłącz serwer główny",
"When switched on, ownCloud will only connect to the replica server." => "Po włączeniu, ownCloud tylko połączy się z serwerem repliki.",
"Use TLS" => "Użyj TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Nie używaj go dodatkowo dla połączeń protokołu LDAPS, zakończy się niepowodzeniem.",
"Case insensitve LDAP server (Windows)" => "Wielkość liter serwera LDAP (Windows)",
"Turn off SSL certificate validation." => "Wyłączyć sprawdzanie poprawności certyfikatu SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Jeśli połączenie działa tylko z tą opcją, zaimportuj certyfikat SSL serwera LDAP w serwerze ownCloud.",
"Not recommended, use for testing only." => "Niezalecane, użyj tylko testowo.",
"Cache Time-To-Live" => "Przechowuj czas życia",
"in seconds. A change empties the cache." => "w sekundach. Zmiana opróżnia pamięć podręczną.",
"Directory Settings" => "Ustawienia katalogów",
"User Display Name Field" => "Pole wyświetlanej nazwy użytkownika",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Atrybut LDAP służy do generowania nazwy użytkownika ownCloud.",
"Base User Tree" => "Drzewo bazy użytkowników",
"One User Base DN per line" => "Jeden użytkownik Bazy DN na linię",
"User Search Attributes" => "Szukaj atrybutów",
"Optional; one attribute per line" => "Opcjonalnie; jeden atrybut w wierszu",
"Group Display Name Field" => "Pole wyświetlanej nazwy grupy",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Atrybut LDAP służy do generowania nazwy grup ownCloud.",
"Base Group Tree" => "Drzewo bazy grup",
"One Group Base DN per line" => "Jedna grupa bazy DN na linię",
"Group Search Attributes" => "Grupa atrybutów wyszukaj",
"Group-Member association" => "Członek grupy stowarzyszenia",
"Special Attributes" => "Specjalne atrybuty",
"Quota Field" => "Pole przydziału",
"Quota Default" => "Przydział domyślny",
"in bytes" => "w bajtach",
"Email Field" => "Pole email",
"User Home Folder Naming Rule" => "Reguły nazewnictwa folderu domowego użytkownika",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Pozostaw puste dla user name (domyślnie). W przeciwnym razie podaj atrybut LDAP/AD.",
"Test Configuration" => "Konfiguracja testowa",
"Help" => "Pomoc"
);
