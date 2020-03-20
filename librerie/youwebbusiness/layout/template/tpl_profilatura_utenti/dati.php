<?php 
if (!function_exists('profilatura_utenti_array')) {
    function profilatura_utenti_array($addNew=false) {
        $boxes = array(
            array(
            'title'=>'Amministratori',
            'users'=>5,
            'description'=>'Un profilo completo per gestire  interamente i tuoi rapporti e le configurazioni del servizio',
            'icon'=>'amministratori.svg',
            'blocked-group'=>true
            ),
            array(
            'title'=>'Operatori',
            'users'=>3,
            'description'=>'Un profilo solo parzialmente dispositivo ma con la possibilità di gestire anche gli Incassi , le Anagrafiche e i Dati e le disposizioni',
            'icon'=>'profilatura-utenti.svg',
            'blocked-group'=>true
            ),
            array(
            'title'=>'Addetti',
            'users'=>2,
            'description'=>'Un profilo base solo parzialmente dispositivo, senza possibilità di configurare il servizio. ',
            'icon'=>'addetti.svg',
            'blocked-group'=>true
            ),
            array(
            'title'=>'Movimenti',
            'users'=>6,
            'description'=>'Lorem ipsum dolor sit amet...',
            'icon'=>'profilatura-utenti.svg',
            ),
            array(
            'title'=>'Paghe',
            'users'=>3,
            'description'=>'Lorem ipsum dolor sit amet...',
            'icon'=>'profilatura-utenti.svg',
            ),
            array(
            'title'=>'Controllo',
            'users'=>2,
            'description'=>'Lorem ipsum dolor sit amet...',
            'icon'=>'amministratori.svg',
            ),
        );

        if($addNew) {
            array_push($boxes,array(
                'title'=>'Aggiungi un gruppo',
                'description'=>'Se i Gruppi esistenti non soddisfano le tue esigenze, puoi aggiungerne uno profilandone le caratteristiche',
                'icon'=>'plus.svg',
                'new-group'=>true,
                'blocked-group'=>true
            ));    
        }

        return $boxes;
    }
}