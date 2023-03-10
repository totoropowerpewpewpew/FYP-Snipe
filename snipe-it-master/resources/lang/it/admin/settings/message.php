<?php

return [

    'update' => [
        'error'                 => 'Si è verificato un errore durante l\'aggiornamento. ',
        'success'               => 'Impostazioni aggiornate correttamente.',
    ],
    'backup' => [
        'delete_confirm'        => 'Sei sicuro di voler cancellare questo file di backup? Questa operazione è irreversibile. ',
        'file_deleted'          => 'Il file di backup è stato cancellato con successo. ',
        'generated'             => 'Un nuovo file di backup è stato creato con successo.',
        'file_not_found'        => 'Quel file di backup non può essere trovato sul server.',
        'restore_warning'       => 'Si, ripristina. Riconosco che il ripristino sovrascriverà tutti i dati al momento presenti nel database. Inoltre, tutti gli utenti verranno disconnessi (incluso te).',
        'restore_confirm'       => 'Sei sicuro di voler ripristinare il tuo database da :filename?'
    ],
    'purge' => [
        'error'     => 'Si è verificato un errore durante la pulizia. ',
        'validation_failed'     => 'La conferma dell\'eliminazione non è corretta. Digita "DELETE" nel box di conferma.',
        'success'               => 'I record cancellati sono stati correttamente eliminati.',
    ],
    'mail' => [
        'sending' => 'Invio Email Di Prova...',
        'success' => 'Mail inviata!',
        'error' => 'Non è stato possibile inviare l\'email.',
        'additional' => 'Nessun messaggio di errore aggiuntivo fornito. Controlla le impostazioni della posta e il log dell\'app.'
    ],
    'ldap' => [
        'testing' => 'Testo Connessione, Binding e Query LDAP ...',
        '500' => 'Errore del server 500. Controlla i log del tuo server per maggiori informazioni.',
        'error' => 'Qualcosa è andato storto :(',
        'sync_success' => 'Un campione di 10 utenti restituiti dal server LDAP in base alle tue impostazioni:',
        'testing_authentication' => 'Testo l\'Autenticazione LDAP...',
        'authentication_success' => 'Utente autenticato correttamente con LDAP!'
    ],
    'slack' => [
        'sending' => 'Invio messaggio di test su Slack...',
        'success_pt1' => 'Successo! Controlla il ',
        'success_pt2' => ' canale del messaggio di prova, e assicurati di fare clic su SALVA qui sotto per memorizzare le impostazioni.',
        '500' => 'Errore del server 500.',
        'error' => 'Something went wrong. Slack responded with: :error_message',
        'error_misc' => 'Something went wrong. :( ',
    ]
];
