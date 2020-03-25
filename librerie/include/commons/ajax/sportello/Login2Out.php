<?php
    header('content-type: application/xml; charset=utf-8');

    date_default_timezone_set('Europe/Rome');
    $date = [];
    $timestamp = time();
    $dayseconds = 24 * 60 * 60;
    $num = 0;
    while ($num < 10) {
        $weekday = date('w', $timestamp);
        if ($weekday > 0 && $weekday < 6) {
            $date[$num++] = date('d/m/Y', $timestamp);
        }
        $timestamp += $dayseconds;
    }
    echo <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<login2 xmlns="http://xmlbeans.weservice.it/pda">
    <info>
        <esito val="ok" />
    </info>
    <stateUpdate>
        <nextAuthCode>
            <cod1 val="2" />
            <cod2 val="4" />
            <numCode val="20" />
        </nextAuthCode>
        <dataValuta>
            <bonifico>
                <data val="{$date[0]}" />
                <data val="{$date[1]}" />
                <data val="{$date[2]}" />
                <data val="{$date[3]}" />
                <data val="{$date[4]}" />
                <data val="{$date[5]}" />
                <data val="{$date[6]}" />
                <data val="{$date[7]}" />
                <data val="{$date[8]}" />
                <data val="{$date[9]}" />
            </bonifico>
            <giroconto>
                <data val="{$date[0]}" />
                <data val="{$date[1]}" />
                <data val="{$date[2]}" />
                <data val="{$date[3]}" />
                <data val="{$date[4]}" />
                <data val="{$date[5]}" />
                <data val="{$date[6]}" />
                <data val="{$date[7]}" />
                <data val="{$date[8]}" />
                <data val="{$date[9]}" />
            </giroconto>
        </dataValuta>
        <OTP>
            <ctrlOTP val="true" />
        </OTP>
        <domainData>
            <primaDataBollettino val="{$date[0]}"></primaDataBollettino>
			<bollettini>
                <premarcato>
                    <tipi>
                        <tipo codice="896" />
                        <tipo codice="674" />
                    </tipi>
                </premarcato>
				<auto>
					<presaVisione val="false"></presaVisione>
					<regioni>
						<regione val="Abruzzo"></regione>
						<regione val="Basilicata"></regione>
						<regione val="Campania"></regione>
						<regione val="Emilia Romagna"></regione>
						<regione val="Friuli Venezia Giulia"></regione>
						<regione val="Lazio"></regione>
						<regione val="Liguria"></regione>
						<regione val="Lombardia"></regione>
						<regione val="Marche"></regione>
						<regione val="Piemonte"></regione>
						<regione val="Prov. Aut. di Bolzano"></regione>
						<regione val="Puglia"></regione>
						<regione val="Sardegna"></regione>
						<regione val="Sicilia"></regione>
						<regione val="Toscana"></regione>
						<regione val="Umbria"></regione>
						<regione val="Valle D'Aosta"></regione>
					</regioni>
					<tipiVeicolo>
						<tipoVeicolo codice="AU" valore="Autoveicolo"></tipoVeicolo>
						<tipoVeicolo codice="MO" valore="Motociclo"></tipoVeicolo>
					</tipiVeicolo>
				</auto>
            </bollettini>
        </domainData>
        <bonificoIta maxImporto="20.000,00" commissione="0,50" />
        <giroconto maxImporto="20.000,00" commissione="0,50" />
        <bollettino maxImporto="0,00" commissione="0,00" />
        <rubricaTelefonica verNum="1364344656000" />
        <rubricaTV verNum="1364344656000" />
        <rubricaPrepagate verNum="1364344656000" />
        <infoPrepagate>
            <prepagata tipo="bir" limite="2.500" />
            <prepagata tipo="jeans" limite="2.500" />
            <prepagata tipo="kjeans" limite="2.500" />
            <prepagata tipo="inrete" limite="3.000" />
            <prepagata tipo="poste" limite="1.500" />
        </infoPrepagate>
        <datiCC numero="00599 - 0000002075 - EUR" intestatario="DONATELLA VERTEMARA" iban="IT38W0340201749000000002075" label="00599 0000002075 EUR">
            <saldo margineUtilizzabile="1.969.308,11" saldoContabile="1.970.133,18" fidoConto="0,00" totaleImpegni="-825,07" totalePreavvisi="0,00" saldoGestioniSGR="0,00" saldoOdierneTitoli="0,00" />
        </datiCC>
        <datiCC numero="00599 - 0000004215 - EUR" intestatario="BARBARA BIANCHI" iban="IT26L0340201749000000004215" label="00599 0000004215 EUR">
            <saldo margineUtilizzabile="2.487.915,80" saldoContabile="2.493.494,74" fidoConto="0,00" totaleImpegni="-5.576,24" totalePreavvisi="0,00" saldoGestioniSGR="0,00" saldoOdierneTitoli="0,00" />
        </datiCC>
        <datiCCDep numero="00596 - 0000002075 - EUR" intestatario="DONATELLA VERTEMARA" iban="IT31A0340200001000000002075" base="00599 - 0000002075 - EUR" label="DEP 00596 0000002075 EUR">
            <saldo margineUtilizzabile="64.455,00" margineAlNettoDeiVincoli="1,00" totaleVincolato="64.454,00" totaleImpegni="0,00" totalePreavvisi="0,00" saldoDisponibile="1,00" />
        </datiCCDep>
        <datiCCDep numero="00596 - 0000004215 - EUR" intestatario="BARBARA BIANCHI" iban="IT26P0340200001000000004215" base="00599 - 0000004215 - EUR" label="DEP 00596 0000004215 EUR">
            <saldo margineUtilizzabile="502.941,42" margineAlNettoDeiVincoli="486.589,42" totaleVincolato="16.352,00" totaleImpegni="0,00" totalePreavvisi="0,00" saldoDisponibile="486.589,42" />
        </datiCCDep>
        <labelRapporti short="conto" long="conto corrente" />
        <!--
        A = app
        F = token fisico
        N = niente strong auth
        -->
        <strongAuth val="A" />
    </stateUpdate>
</login2>
EOD;
