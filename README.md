 # FORTIFY 
- è UN PACCHETTO(LIBRERIA *e un insieme di logiche, ma anche classi)first party di Laravel(first party-> svilupatto dal team di Laravel), che serve a gestire l'autenticazione

 --Per autenticazione intendiamo un sistema di accesso e registrazione al nostro sito
  (https://laravel.com/docs/master/fortify#introduction)
  -  composer require laravel/fortify (installazione avverra nella cartella vendor, che e addibita alle librerie di php),installazioni di dipendenze di PHP;
  -php artisan fortify:install
      -Abbiamo reso disponibile al nostro progetto dei file di configurazione e delle logiche di fortify perpoter effetuare delle modifiche al comportamento di basi di fortify
      -php artisan migrate 
          -Per lanciare l nuova migrazione che il comando precedente di ha pubblicato

-Registrazione:
  -Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di registrazione
  -Copiamo la logica di questo link =>https://laravel.com/docs/master/fortify#introduction (ovviamente solo l'interno non tutto)
 -creiamo la cartella auth con dentro il file register.blade.php


Utilizziamo il comando php artisan route:list per vedere le nostre rotte e recuperare quelle di Fortify

-Logout
  -utilizziamo la rotta POST fornita da Fortify per creare un form che mi permtte di staccare la sessione dell'utente registrato

  -Accesso(login)
  -Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di login
  --Copiamo la logica di questo link =>https://laravel.com/docs/master/fortify#authentication
  -creiamo la cartella auth con dentro il file login.blade.php

## Midleware

- i middleware sono delle logiche che io scelgo di interporre a determinate richieste.
  -'auth' è l'alias del middleware che controlla se l'utente è autenticato.


# CRUD

C => Create
R => Read
U => Update
D => Delete
Sono le 4 operazioni di base che si possono effetuare in un Database.

-php artisan make:model nomeModello -mcr 

  m => model,
  c => controller,
  r => resources, funzioni per far funzionare il CRUD

  -scriviamo la migrazione con le struttura della nostra tabella
  -Andiamo nel modello a definire i fillable