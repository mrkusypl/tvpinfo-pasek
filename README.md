
# Pasek informacyjny TVP INFO
![example.png](https://github.com/mrkusypl/tvpinfo-pasek/blob/main/img/example.png?raw=true)
## Funkcje paska

Pasek informacyjny oferuje następujące funkcjonalności:

1.  Wyświetlanie imienia i nazwiska.
    
2.  Edycja treści głównego paska informacyjnego.
    
3.  Modyfikacja treści sekcji "PILNE".
    
4.  Edycja tekstu w dolnym pasku informacyjnym.
    
5.  Zmiana grafiki oraz godziny zapowiedzi programów.
    
6.  Możliwość ręcznej zmiany czasu (domyślnie: czas rzeczywisty).
    
7.  Modyfikacja tekstu na pasku "NA ŻYWO".
    
8.  Zarządzanie widocznością poszczególnych elementów paska:
    
    -   Włączanie/wyłączanie głównej informacji.
        
    -   Włączanie/wyłączanie sekcji "PILNE".
        
    -   Włączanie/wyłączanie zapowiedzi programów.
        
    -   Włączanie/wyłączanie opcji "wydanie specjalne".
        

## Instalacja

**Wymagania wstępne:** Przed instalacją należy pobrać i zainstalować [XAMPP](https://www.apachefriends.org/pl/index.html).

### Kroki instalacyjne:

1.  Pobierz archiwum zawierające pliki aplikacji.
    
2.  Wypakuj zawartość do katalogu: **(?)\xampp\htdocs**, gdzie (?) oznacza katalog nadrzędny instalacji XAMPP.
    
3.  Uruchom **XAMPP Control Panel** i aktywuj usługi Apache oraz MySQL.
    
4.  Przejdź do panelu administracyjnego MySQL ([http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)).
    
5.  Utwórz nową bazę danych o nazwie **tvpinfo**.
    
6.  Zaimportuj bazę danych z pliku **tvpinfo.sql** (znajdującego się w rozpakowanym archiwum).
    

## Instrukcja użytkowania (na przykładzie OBS Studio)

1.  Dodaj nowe źródło obrazu **Przeglądarka** w OBS Studio.
    
2.  W polu „Adres URL” wklej ścieżkę do głównego paska: [http://localhost/tvpinfo/index.html](http://localhost/tvpinfo/index.html).
    
3.  Powtórz proces dla znacznika "NA ŻYWO", korzystając z adresu: [http://localhost/tvpinfo/nazywo.html](http://localhost/tvpinfo/nazywo.html).
    
4.  Otwórz stronę ustawień paska: [http://localhost/tvpinfo/formularz.html](http://localhost/tvpinfo/formularz.html).
    
5.  Wybierz odpowiednie ustawienia paska lub załaduj je z obrazu.
    
6.  Wprowadź treści, które chcesz wyświetlić, oraz dostosuj ustawienia przełączników.
    
7.  Podglądaj wprowadzone zmiany, rozsuwając pasek poprzez najechanie kursorem w prawym dolnym rogu.
    
8.  Po weryfikacji kliknij **Wyświetl** lub **Ustaw**, aby zatwierdzić zmiany.
    

----------
### Na zakończenie...

_Pasek informacyjny jest własnością intelektualną Telewizji Polskiej, ale tego się domyślacie..._

_Aplikacja została opracowana w technologiach: HTML, jQuery, CSS oraz PHP._

**Autor: kusy**  
Udostępniane na licencji Apache 2.0. Szczegóły: [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0%E2%80%9D).
