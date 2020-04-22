<p align="center"><img src="https://www.webmasters-fernakademie.de/images/wfa_img/logo-wfa.png?1571290125" width="400"></p>
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">
<a href="https://www.codefactor.io/repository/github/cosnavel/memorily"><img src="https://www.codefactor.io/repository/github/cosnavel/memorily/badge" alt="CodeFactor" /></a>
</p>
<p align="center">
Müsterlösung der Einsedeaufgabe - Webmaster Akademie Class "Einstieg in Laravel 7"
</p>

## About memorily
*memorily* ist eine kleine Applikation, mit der der Lerner die Kenntnisse, die er in der Webmaster Akademie Class "Einstieg in Laravel 7"  Class erworben hast, unter Beweis stellen kann. In memorily stehen zwei Funktionen im Vordergrund. Zum einen können Erinnerungen oder Gedanken festhalten werden – wie bei einem Tagebuch. Die zweite Funktion ist eine Todo-Liste, in der Aufgaben oder Vorsätze festhalten werden können.  
*Warum eine Todo-Liste?* Zum einen ist *memorily* nicht sonderlich komplex. Der ausschlaggebende Punkt ist aber, dass das von mir über Jahre genutzte To-Do-Listen-Tool angefangen hat, Werbung zu schalten, außer ich schließe ein kostenpflichtiges Abo ab. Bei der Suche nach Alternativen hat sich dieses Phänomen durchgezogen. Fast nichts ist in dieser Welt kostenlos – es sei denn, es ist Open Source ❤️. Behalte dies bei solchen Tools immer im Hinterkopf. Entweder du zahlst mit Geld, erhältst Werbung oder bezahlst mit deinen Daten. Weil mich dies so sehr genervt hat, dachte ich mir, schreibe ich mir doch meine eigene Todo-Liste. Dabei ist mir die Idee für diese Einsendeaufgabe eingefallen.

## Installation

1. `composer install`
2. *.env* erstellen (`cp .env.example .env`)
3. Sqlite Datenbank erstellen `touch databse/database.sqlite`
4. *DB_DATABASE* aus *.env* entfernen
5. `DB_CONNECION=sqlite` in *.env*
6. `php artisan key:generate`
7. `php artisan migrate`
8. `php artisan serve`

## Credits
- <a href="https://github.com/papercss/papercss">Paper CSS</a>
