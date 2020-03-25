<section>
    <h4 class="strongTitle">I miei finanziamenti</h4>
    <div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
            <table class="tb-finanz">
                <thead>
                    <tr>
                        <th class="left">Finanziamento</th>
                        <th class="center">Data attivazione</th>
                        <th class="right">Importo &euro;</th>
                        <th class="center">Ammort.</th>
                        <th class="center">Dett.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="dispari">
                        <td class="left">20000-1122334/Prestito Webank</td>
                        <td class="center">02/02/2020</td>
                        <td class="right">300.000</td>
                        <td class="center"><a href="#!" class="no-underline btn-icon btn-pianoamm" title="Piano ammortamento"><i class="icon icon-document_table"></i></a></td>
                        <td class="center"><a href="#!" class="no-underline btn-icon btn-disabled" title="Piano ammortamento"><i class="icon icon-zoom_more_table"></i></a></td>
                    </tr>
                    <tr class="pari">
                        <td class="left">20000-1122335/Prestito Webank</td>
                        <td class="center">02/02/2021</td>
                        <td class="right">3.000.000</td>
                        <td class="center"><a href="#!" class="no-underline btn-icon btn-disabled" title="Dettaglio finanziamento"><i class="icon icon-document_table"></i></a></td>
                        <td class="center"><a href="#!" class="no-underline btn-icon btn-dettfinanz" title="Dettaglio finanziamento"><i class="icon icon-zoom_more_table"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
            <table>
                <thead>
                    <tr>
                        <th class="left">Finanziamento</th>
                        <th class="center">Data attivazione</th>
                        <th class="right">Importo &euro;</th>
                        <th class="center">Ammort.</th>
                        <th class="center">Dett.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="dispari">
                        <td class="left" colspan="5">Non sono presenti finanziamenti riferiti al conto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- OVERLAYER PIANO AMMORTAMENTO -->
<div class="modal fade" id="pianoAmm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Piano ammortamento</h2>
            </div>
            <div class="modal-body">
                <section>
                    <p> Per ogni rata del finanziamento sono evidenziati la quota di capitale effettivamente restituita alla banca, la quota di interessi, lo stato della rata (da pagare, pagata, ecc.). </p>
                </section>
                <section>
                    <h4>Riepilogo dati</h4>
                    <form class="formGenerico borderFormRounded output" role="form" id="form02">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">Conto corrente</label> <span class="output">01099 - 0000017966 - EUR</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">Finanziamento</label>
                                    <!-- <span class="output">< %=filFin%>-< %=nPart%>< %=(finanziamento.getNumeroPrestito() == 0) ? "" : "-" + nPrestito%>< %=" "+finanziamento.getDescrizioneProdotto()%></span> --><span class="output">5978754 MUTUO WEBANK OPZIONE</span> </div>
                            </div>
                        </div>
                    </form>
                </section>
                <section>
                    <h4>Piano di ammortamento</h4>
                    <div class="headerContainerNoBootS">
                        <div class="tableContainerNoBootS">
                            <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
                                <thead>
                                    <tr>
                                        <th data-field="rata" data-sortable="true" class="">Rata</th>
                                        <th data-field="scadenza" data-sortable="true" class="">Scadenza</th>
                                        <th data-field="quotaCapitale" data-sortable="true" class="right">Quota capitale &#8364;</th>
                                        <th data-field="quotaInteressi" data-sortable="true" class="right">Quota interessi &#8364;</th>
                                        <th data-field="importoRata" data-sortable="true" class="right">Importo rata &#8364;</th>
                                        <th data-field="statoRata" data-sortable="true" class="center">Stato rata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="pari" data-index=0>
                                        <td class="" style="">1</td>
                                        <td class="" style="">31/12/2012</td>
                                        <td class="right" style="">248,17</td>
                                        <td class="right" style="">462,22</td>
                                        <td class="right" style="">710,39</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=1>
                                        <td class="" style="">2</td>
                                        <td class="" style="">31/01/2013</td>
                                        <td class="right" style="">249,03</td>
                                        <td class="right" style="">446,45</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=2>
                                        <td class="" style="">3</td>
                                        <td class="" style="">28/02/2013</td>
                                        <td class="right" style="">249,88</td>
                                        <td class="right" style="">445,60</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=3>
                                        <td class="" style="">4</td>
                                        <td class="" style="">31/03/2013</td>
                                        <td class="right" style="">250,74</td>
                                        <td class="right" style="">444,74</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=4>
                                        <td class="" style="">5</td>
                                        <td class="" style="">30/04/2013</td>
                                        <td class="right" style="">251,60</td>
                                        <td class="right" style="">443,88</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=5>
                                        <td class="" style="">6</td>
                                        <td class="" style="">31/05/2013</td>
                                        <td class="right" style="">252,47</td>
                                        <td class="right" style="">443,01</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=6>
                                        <td class="" style="">7</td>
                                        <td class="" style="">30/06/2013</td>
                                        <td class="right" style="">253,34</td>
                                        <td class="right" style="">442,14</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=7>
                                        <td class="" style="">8</td>
                                        <td class="" style="">31/07/2013</td>
                                        <td class="right" style="">254,21</td>
                                        <td class="right" style="">441,27</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=8>
                                        <td class="" style="">9</td>
                                        <td class="" style="">31/08/2013</td>
                                        <td class="right" style="">255,09</td>
                                        <td class="right" style="">440,39</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=9>
                                        <td class="" style="">10</td>
                                        <td class="" style="">30/09/2013</td>
                                        <td class="right" style="">255,96</td>
                                        <td class="right" style="">439,52</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=10>
                                        <td class="" style="">11</td>
                                        <td class="" style="">31/10/2013</td>
                                        <td class="right" style="">256,84</td>
                                        <td class="right" style="">438,64</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=11>
                                        <td class="" style="">12</td>
                                        <td class="" style="">30/11/2013</td>
                                        <td class="right" style="">257,73</td>
                                        <td class="right" style="">437,75</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=12>
                                        <td class="" style="">13</td>
                                        <td class="" style="">31/12/2013</td>
                                        <td class="right" style="">258,61</td>
                                        <td class="right" style="">436,87</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=13>
                                        <td class="" style="">14</td>
                                        <td class="" style="">31/01/2014</td>
                                        <td class="right" style="">259,50</td>
                                        <td class="right" style="">435,98</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=14>
                                        <td class="" style="">15</td>
                                        <td class="" style="">28/02/2014</td>
                                        <td class="right" style="">260,40</td>
                                        <td class="right" style="">435,08</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=15>
                                        <td class="" style="">16</td>
                                        <td class="" style="">31/03/2014</td>
                                        <td class="right" style="">261,29</td>
                                        <td class="right" style="">434,19</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=16>
                                        <td class="" style="">17</td>
                                        <td class="" style="">30/04/2014</td>
                                        <td class="right" style="">262,19</td>
                                        <td class="right" style="">433,29</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=17>
                                        <td class="" style="">18</td>
                                        <td class="" style="">31/05/2014</td>
                                        <td class="right" style="">263,09</td>
                                        <td class="right" style="">432,39</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=18>
                                        <td class="" style="">19</td>
                                        <td class="" style="">30/06/2014</td>
                                        <td class="right" style="">264,00</td>
                                        <td class="right" style="">431,48</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=19>
                                        <td class="" style="">20</td>
                                        <td class="" style="">31/07/2014</td>
                                        <td class="right" style="">264,91</td>
                                        <td class="right" style="">430,57</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=20>
                                        <td class="" style="">21</td>
                                        <td class="" style="">31/08/2014</td>
                                        <td class="right" style="">265,82</td>
                                        <td class="right" style="">429,66</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=21>
                                        <td class="" style="">22</td>
                                        <td class="" style="">30/09/2014</td>
                                        <td class="right" style="">266,73</td>
                                        <td class="right" style="">428,75</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=22>
                                        <td class="" style="">23</td>
                                        <td class="" style="">31/10/2014</td>
                                        <td class="right" style="">267,65</td>
                                        <td class="right" style="">427,83</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=23>
                                        <td class="" style="">24</td>
                                        <td class="" style="">30/11/2014</td>
                                        <td class="right" style="">268,57</td>
                                        <td class="right" style="">426,91</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=24>
                                        <td class="" style="">25</td>
                                        <td class="" style="">31/12/2014</td>
                                        <td class="right" style="">269,50</td>
                                        <td class="right" style="">425,98</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=25>
                                        <td class="" style="">26</td>
                                        <td class="" style="">31/01/2015</td>
                                        <td class="right" style="">270,42</td>
                                        <td class="right" style="">425,06</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=26>
                                        <td class="" style="">27</td>
                                        <td class="" style="">28/02/2015</td>
                                        <td class="right" style="">271,35</td>
                                        <td class="right" style="">424,13</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=27>
                                        <td class="" style="">28</td>
                                        <td class="" style="">31/03/2015</td>
                                        <td class="right" style="">272,29</td>
                                        <td class="right" style="">423,19</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=28>
                                        <td class="" style="">29</td>
                                        <td class="" style="">30/04/2015</td>
                                        <td class="right" style="">273,23</td>
                                        <td class="right" style="">422,25</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=29>
                                        <td class="" style="">30</td>
                                        <td class="" style="">31/05/2015</td>
                                        <td class="right" style="">274,17</td>
                                        <td class="right" style="">421,31</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=30>
                                        <td class="" style="">31</td>
                                        <td class="" style="">30/06/2015</td>
                                        <td class="right" style="">275,11</td>
                                        <td class="right" style="">420,37</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=31>
                                        <td class="" style="">32</td>
                                        <td class="" style="">31/07/2015</td>
                                        <td class="right" style="">276,06</td>
                                        <td class="right" style="">419,42</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=32>
                                        <td class="" style="">33</td>
                                        <td class="" style="">31/08/2015</td>
                                        <td class="right" style="">277,01</td>
                                        <td class="right" style="">418,47</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=33>
                                        <td class="" style="">34</td>
                                        <td class="" style="">30/09/2015</td>
                                        <td class="right" style="">277,96</td>
                                        <td class="right" style="">417,52</td>
                                        <td class="right" style="">695,48</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=34>
                                        <td class="" style="">35</td>
                                        <td class="" style="">31/10/2015</td>
                                        <td class="right" style="">278,91</td>
                                        <td class="right" style="">291,87</td>
                                        <td class="right" style="">570,78</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=35>
                                        <td class="" style="">36</td>
                                        <td class="" style="">30/11/2015</td>
                                        <td class="right" style="">279,87</td>
                                        <td class="right" style="">291,20</td>
                                        <td class="right" style="">571,07</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=36>
                                        <td class="" style="">37</td>
                                        <td class="" style="">31/12/2015</td>
                                        <td class="right" style="">280,84</td>
                                        <td class="right" style="">290,52</td>
                                        <td class="right" style="">571,36</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=37>
                                        <td class="" style="">38</td>
                                        <td class="" style="">31/01/2016</td>
                                        <td class="right" style="">281,80</td>
                                        <td class="right" style="">289,84</td>
                                        <td class="right" style="">571,64</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=38>
                                        <td class="" style="">39</td>
                                        <td class="" style="">29/02/2016</td>
                                        <td class="right" style="">282,77</td>
                                        <td class="right" style="">289,16</td>
                                        <td class="right" style="">571,93</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=39>
                                        <td class="" style="">40</td>
                                        <td class="" style="">31/03/2016</td>
                                        <td class="right" style="">283,75</td>
                                        <td class="right" style="">288,48</td>
                                        <td class="right" style="">572,23</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=40>
                                        <td class="" style="">41</td>
                                        <td class="" style="">30/04/2016</td>
                                        <td class="right" style="">284,72</td>
                                        <td class="right" style="">287,80</td>
                                        <td class="right" style="">572,52</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=41>
                                        <td class="" style="">42</td>
                                        <td class="" style="">31/05/2016</td>
                                        <td class="right" style="">285,70</td>
                                        <td class="right" style="">287,11</td>
                                        <td class="right" style="">572,81</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=42>
                                        <td class="" style="">43</td>
                                        <td class="" style="">30/06/2016</td>
                                        <td class="right" style="">286,69</td>
                                        <td class="right" style="">286,42</td>
                                        <td class="right" style="">573,11</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=43>
                                        <td class="" style="">44</td>
                                        <td class="" style="">31/07/2016</td>
                                        <td class="right" style="">287,67</td>
                                        <td class="right" style="">285,73</td>
                                        <td class="right" style="">573,40</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=44>
                                        <td class="" style="">45</td>
                                        <td class="" style="">31/08/2016</td>
                                        <td class="right" style="">288,66</td>
                                        <td class="right" style="">285,04</td>
                                        <td class="right" style="">573,70</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=45>
                                        <td class="" style="">46</td>
                                        <td class="" style="">30/09/2016</td>
                                        <td class="right" style="">289,65</td>
                                        <td class="right" style="">284,34</td>
                                        <td class="right" style="">573,99</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=46>
                                        <td class="" style="">47</td>
                                        <td class="" style="">31/10/2016</td>
                                        <td class="right" style="">290,65</td>
                                        <td class="right" style="">283,64</td>
                                        <td class="right" style="">574,29</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=47>
                                        <td class="" style="">48</td>
                                        <td class="" style="">30/11/2016</td>
                                        <td class="right" style="">291,65</td>
                                        <td class="right" style="">282,94</td>
                                        <td class="right" style="">574,59</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=48>
                                        <td class="" style="">49</td>
                                        <td class="" style="">31/12/2016</td>
                                        <td class="right" style="">292,66</td>
                                        <td class="right" style="">282,24</td>
                                        <td class="right" style="">574,90</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=49>
                                        <td class="" style="">50</td>
                                        <td class="" style="">31/01/2017</td>
                                        <td class="right" style="">293,66</td>
                                        <td class="right" style="">281,54</td>
                                        <td class="right" style="">575,20</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=50>
                                        <td class="" style="">51</td>
                                        <td class="" style="">28/02/2017</td>
                                        <td class="right" style="">294,67</td>
                                        <td class="right" style="">280,83</td>
                                        <td class="right" style="">575,50</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=51>
                                        <td class="" style="">52</td>
                                        <td class="" style="">31/03/2017</td>
                                        <td class="right" style="">295,69</td>
                                        <td class="right" style="">280,12</td>
                                        <td class="right" style="">575,81</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=52>
                                        <td class="" style="">53</td>
                                        <td class="" style="">30/04/2017</td>
                                        <td class="right" style="">296,70</td>
                                        <td class="right" style="">279,40</td>
                                        <td class="right" style="">576,10</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=53>
                                        <td class="" style="">54</td>
                                        <td class="" style="">31/05/2017</td>
                                        <td class="right" style="">297,72</td>
                                        <td class="right" style="">278,69</td>
                                        <td class="right" style="">576,41</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=54>
                                        <td class="" style="">55</td>
                                        <td class="" style="">30/06/2017</td>
                                        <td class="right" style="">298,75</td>
                                        <td class="right" style="">277,97</td>
                                        <td class="right" style="">576,72</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=55>
                                        <td class="" style="">56</td>
                                        <td class="" style="">31/07/2017</td>
                                        <td class="right" style="">299,78</td>
                                        <td class="right" style="">277,25</td>
                                        <td class="right" style="">577,03</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=56>
                                        <td class="" style="">57</td>
                                        <td class="" style="">31/08/2017</td>
                                        <td class="right" style="">300,81</td>
                                        <td class="right" style="">276,53</td>
                                        <td class="right" style="">577,34</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="dispari" data-index=57>
                                        <td class="" style="">58</td>
                                        <td class="" style="">30/09/2017</td>
                                        <td class="right" style="">301,84</td>
                                        <td class="right" style="">275,80</td>
                                        <td class="right" style="">577,64</td>
                                        <td class="center" style="">SCADUTA PAGATA TOTALMENTE</td>
                                    </tr>
                                    <tr class="pari" data-index=58>
                                        <td class="" style="">59</td>
                                        <td class="" style="">31/10/2017</td>
                                        <td class="right" style="">302,88</td>
                                        <td class="right" style="">275,08</td>
                                        <td class="right" style="">577,96</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=59>
                                        <td class="" style="">60</td>
                                        <td class="" style="">30/11/2017</td>
                                        <td class="right" style="">303,92</td>
                                        <td class="right" style="">274,35</td>
                                        <td class="right" style="">578,27</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=60>
                                        <td class="" style="">61</td>
                                        <td class="" style="">31/12/2017</td>
                                        <td class="right" style="">304,97</td>
                                        <td class="right" style="">273,61</td>
                                        <td class="right" style="">578,58</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=61>
                                        <td class="" style="">62</td>
                                        <td class="" style="">31/01/2018</td>
                                        <td class="right" style="">306,02</td>
                                        <td class="right" style="">272,88</td>
                                        <td class="right" style="">578,90</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=62>
                                        <td class="" style="">63</td>
                                        <td class="" style="">28/02/2018</td>
                                        <td class="right" style="">307,07</td>
                                        <td class="right" style="">272,14</td>
                                        <td class="right" style="">579,21</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=63>
                                        <td class="" style="">64</td>
                                        <td class="" style="">31/03/2018</td>
                                        <td class="right" style="">308,13</td>
                                        <td class="right" style="">271,40</td>
                                        <td class="right" style="">579,53</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=64>
                                        <td class="" style="">65</td>
                                        <td class="" style="">30/04/2018</td>
                                        <td class="right" style="">309,19</td>
                                        <td class="right" style="">270,66</td>
                                        <td class="right" style="">579,85</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=65>
                                        <td class="" style="">66</td>
                                        <td class="" style="">31/05/2018</td>
                                        <td class="right" style="">310,25</td>
                                        <td class="right" style="">269,91</td>
                                        <td class="right" style="">580,16</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=66>
                                        <td class="" style="">67</td>
                                        <td class="" style="">30/06/2018</td>
                                        <td class="right" style="">311,32</td>
                                        <td class="right" style="">269,16</td>
                                        <td class="right" style="">580,48</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=67>
                                        <td class="" style="">68</td>
                                        <td class="" style="">31/07/2018</td>
                                        <td class="right" style="">312,39</td>
                                        <td class="right" style="">268,41</td>
                                        <td class="right" style="">580,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=68>
                                        <td class="" style="">69</td>
                                        <td class="" style="">31/08/2018</td>
                                        <td class="right" style="">313,47</td>
                                        <td class="right" style="">267,66</td>
                                        <td class="right" style="">581,13</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=69>
                                        <td class="" style="">70</td>
                                        <td class="" style="">30/09/2018</td>
                                        <td class="right" style="">314,55</td>
                                        <td class="right" style="">266,90</td>
                                        <td class="right" style="">581,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=70>
                                        <td class="" style="">71</td>
                                        <td class="" style="">31/10/2018</td>
                                        <td class="right" style="">315,63</td>
                                        <td class="right" style="">266,15</td>
                                        <td class="right" style="">581,78</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=71>
                                        <td class="" style="">72</td>
                                        <td class="" style="">30/11/2018</td>
                                        <td class="right" style="">316,71</td>
                                        <td class="right" style="">265,38</td>
                                        <td class="right" style="">582,09</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=72>
                                        <td class="" style="">73</td>
                                        <td class="" style="">31/12/2018</td>
                                        <td class="right" style="">317,80</td>
                                        <td class="right" style="">264,62</td>
                                        <td class="right" style="">582,42</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=73>
                                        <td class="" style="">74</td>
                                        <td class="" style="">31/01/2019</td>
                                        <td class="right" style="">318,90</td>
                                        <td class="right" style="">263,85</td>
                                        <td class="right" style="">582,75</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=74>
                                        <td class="" style="">75</td>
                                        <td class="" style="">28/02/2019</td>
                                        <td class="right" style="">319,99</td>
                                        <td class="right" style="">263,09</td>
                                        <td class="right" style="">583,08</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=75>
                                        <td class="" style="">76</td>
                                        <td class="" style="">31/03/2019</td>
                                        <td class="right" style="">321,10</td>
                                        <td class="right" style="">262,31</td>
                                        <td class="right" style="">583,41</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=76>
                                        <td class="" style="">77</td>
                                        <td class="" style="">30/04/2019</td>
                                        <td class="right" style="">322,20</td>
                                        <td class="right" style="">261,54</td>
                                        <td class="right" style="">583,74</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=77>
                                        <td class="" style="">78</td>
                                        <td class="" style="">31/05/2019</td>
                                        <td class="right" style="">323,31</td>
                                        <td class="right" style="">260,76</td>
                                        <td class="right" style="">584,07</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=78>
                                        <td class="" style="">79</td>
                                        <td class="" style="">30/06/2019</td>
                                        <td class="right" style="">324,42</td>
                                        <td class="right" style="">259,98</td>
                                        <td class="right" style="">584,40</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=79>
                                        <td class="" style="">80</td>
                                        <td class="" style="">31/07/2019</td>
                                        <td class="right" style="">325,54</td>
                                        <td class="right" style="">259,20</td>
                                        <td class="right" style="">584,74</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=80>
                                        <td class="" style="">81</td>
                                        <td class="" style="">31/08/2019</td>
                                        <td class="right" style="">326,66</td>
                                        <td class="right" style="">258,42</td>
                                        <td class="right" style="">585,08</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=81>
                                        <td class="" style="">82</td>
                                        <td class="" style="">30/09/2019</td>
                                        <td class="right" style="">327,78</td>
                                        <td class="right" style="">257,63</td>
                                        <td class="right" style="">585,41</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=82>
                                        <td class="" style="">83</td>
                                        <td class="" style="">31/10/2019</td>
                                        <td class="right" style="">328,91</td>
                                        <td class="right" style="">256,84</td>
                                        <td class="right" style="">585,75</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=83>
                                        <td class="" style="">84</td>
                                        <td class="" style="">30/11/2019</td>
                                        <td class="right" style="">330,04</td>
                                        <td class="right" style="">256,05</td>
                                        <td class="right" style="">586,09</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=84>
                                        <td class="" style="">85</td>
                                        <td class="" style="">31/12/2019</td>
                                        <td class="right" style="">331,18</td>
                                        <td class="right" style="">255,25</td>
                                        <td class="right" style="">586,43</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=85>
                                        <td class="" style="">86</td>
                                        <td class="" style="">31/01/2020</td>
                                        <td class="right" style="">332,32</td>
                                        <td class="right" style="">254,45</td>
                                        <td class="right" style="">586,77</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=86>
                                        <td class="" style="">87</td>
                                        <td class="" style="">29/02/2020</td>
                                        <td class="right" style="">333,46</td>
                                        <td class="right" style="">253,65</td>
                                        <td class="right" style="">587,11</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=87>
                                        <td class="" style="">88</td>
                                        <td class="" style="">31/03/2020</td>
                                        <td class="right" style="">334,61</td>
                                        <td class="right" style="">252,85</td>
                                        <td class="right" style="">587,46</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=88>
                                        <td class="" style="">89</td>
                                        <td class="" style="">30/04/2020</td>
                                        <td class="right" style="">335,76</td>
                                        <td class="right" style="">252,04</td>
                                        <td class="right" style="">587,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=89>
                                        <td class="" style="">90</td>
                                        <td class="" style="">31/05/2020</td>
                                        <td class="right" style="">336,91</td>
                                        <td class="right" style="">251,23</td>
                                        <td class="right" style="">588,14</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=90>
                                        <td class="" style="">91</td>
                                        <td class="" style="">30/06/2020</td>
                                        <td class="right" style="">338,07</td>
                                        <td class="right" style="">250,42</td>
                                        <td class="right" style="">588,49</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=91>
                                        <td class="" style="">92</td>
                                        <td class="" style="">31/07/2020</td>
                                        <td class="right" style="">339,24</td>
                                        <td class="right" style="">249,60</td>
                                        <td class="right" style="">588,84</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=92>
                                        <td class="" style="">93</td>
                                        <td class="" style="">31/08/2020</td>
                                        <td class="right" style="">340,40</td>
                                        <td class="right" style="">248,79</td>
                                        <td class="right" style="">589,19</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=93>
                                        <td class="" style="">94</td>
                                        <td class="" style="">30/09/2020</td>
                                        <td class="right" style="">341,57</td>
                                        <td class="right" style="">247,97</td>
                                        <td class="right" style="">589,54</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=94>
                                        <td class="" style="">95</td>
                                        <td class="" style="">31/10/2020</td>
                                        <td class="right" style="">342,75</td>
                                        <td class="right" style="">247,14</td>
                                        <td class="right" style="">589,89</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=95>
                                        <td class="" style="">96</td>
                                        <td class="" style="">30/11/2020</td>
                                        <td class="right" style="">343,93</td>
                                        <td class="right" style="">246,32</td>
                                        <td class="right" style="">590,25</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=96>
                                        <td class="" style="">97</td>
                                        <td class="" style="">31/12/2020</td>
                                        <td class="right" style="">345,11</td>
                                        <td class="right" style="">245,49</td>
                                        <td class="right" style="">590,60</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=97>
                                        <td class="" style="">98</td>
                                        <td class="" style="">31/01/2021</td>
                                        <td class="right" style="">346,30</td>
                                        <td class="right" style="">244,65</td>
                                        <td class="right" style="">590,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=98>
                                        <td class="" style="">99</td>
                                        <td class="" style="">28/02/2021</td>
                                        <td class="right" style="">347,49</td>
                                        <td class="right" style="">243,82</td>
                                        <td class="right" style="">591,31</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=99>
                                        <td class="" style="">100</td>
                                        <td class="" style="">31/03/2021</td>
                                        <td class="right" style="">348,69</td>
                                        <td class="right" style="">242,98</td>
                                        <td class="right" style="">591,67</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=100>
                                        <td class="" style="">101</td>
                                        <td class="" style="">30/04/2021</td>
                                        <td class="right" style="">349,89</td>
                                        <td class="right" style="">242,14</td>
                                        <td class="right" style="">592,03</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=101>
                                        <td class="" style="">102</td>
                                        <td class="" style="">31/05/2021</td>
                                        <td class="right" style="">351,09</td>
                                        <td class="right" style="">241,30</td>
                                        <td class="right" style="">592,39</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=102>
                                        <td class="" style="">103</td>
                                        <td class="" style="">30/06/2021</td>
                                        <td class="right" style="">352,30</td>
                                        <td class="right" style="">240,45</td>
                                        <td class="right" style="">592,75</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=103>
                                        <td class="" style="">104</td>
                                        <td class="" style="">31/07/2021</td>
                                        <td class="right" style="">353,51</td>
                                        <td class="right" style="">239,60</td>
                                        <td class="right" style="">593,11</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=104>
                                        <td class="" style="">105</td>
                                        <td class="" style="">31/08/2021</td>
                                        <td class="right" style="">354,73</td>
                                        <td class="right" style="">238,75</td>
                                        <td class="right" style="">593,48</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=105>
                                        <td class="" style="">106</td>
                                        <td class="" style="">30/09/2021</td>
                                        <td class="right" style="">355,95</td>
                                        <td class="right" style="">237,89</td>
                                        <td class="right" style="">593,84</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=106>
                                        <td class="" style="">107</td>
                                        <td class="" style="">31/10/2021</td>
                                        <td class="right" style="">357,17</td>
                                        <td class="right" style="">237,04</td>
                                        <td class="right" style="">594,21</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=107>
                                        <td class="" style="">108</td>
                                        <td class="" style="">30/11/2021</td>
                                        <td class="right" style="">358,40</td>
                                        <td class="right" style="">236,18</td>
                                        <td class="right" style="">594,58</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=108>
                                        <td class="" style="">109</td>
                                        <td class="" style="">31/12/2021</td>
                                        <td class="right" style="">359,64</td>
                                        <td class="right" style="">235,31</td>
                                        <td class="right" style="">594,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=109>
                                        <td class="" style="">110</td>
                                        <td class="" style="">31/01/2022</td>
                                        <td class="right" style="">360,87</td>
                                        <td class="right" style="">234,44</td>
                                        <td class="right" style="">595,31</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=110>
                                        <td class="" style="">111</td>
                                        <td class="" style="">28/02/2022</td>
                                        <td class="right" style="">362,11</td>
                                        <td class="right" style="">233,57</td>
                                        <td class="right" style="">595,68</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=111>
                                        <td class="" style="">112</td>
                                        <td class="" style="">31/03/2022</td>
                                        <td class="right" style="">363,36</td>
                                        <td class="right" style="">232,70</td>
                                        <td class="right" style="">596,06</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=112>
                                        <td class="" style="">113</td>
                                        <td class="" style="">30/04/2022</td>
                                        <td class="right" style="">364,61</td>
                                        <td class="right" style="">231,83</td>
                                        <td class="right" style="">596,44</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=113>
                                        <td class="" style="">114</td>
                                        <td class="" style="">31/05/2022</td>
                                        <td class="right" style="">365,87</td>
                                        <td class="right" style="">230,95</td>
                                        <td class="right" style="">596,82</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=114>
                                        <td class="" style="">115</td>
                                        <td class="" style="">30/06/2022</td>
                                        <td class="right" style="">367,12</td>
                                        <td class="right" style="">230,06</td>
                                        <td class="right" style="">597,18</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=115>
                                        <td class="" style="">116</td>
                                        <td class="" style="">31/07/2022</td>
                                        <td class="right" style="">368,39</td>
                                        <td class="right" style="">229,18</td>
                                        <td class="right" style="">597,57</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=116>
                                        <td class="" style="">117</td>
                                        <td class="" style="">31/08/2022</td>
                                        <td class="right" style="">369,65</td>
                                        <td class="right" style="">228,29</td>
                                        <td class="right" style="">597,94</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=117>
                                        <td class="" style="">118</td>
                                        <td class="" style="">30/09/2022</td>
                                        <td class="right" style="">370,93</td>
                                        <td class="right" style="">227,40</td>
                                        <td class="right" style="">598,33</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=118>
                                        <td class="" style="">119</td>
                                        <td class="" style="">31/10/2022</td>
                                        <td class="right" style="">372,20</td>
                                        <td class="right" style="">226,51</td>
                                        <td class="right" style="">598,71</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=119>
                                        <td class="" style="">120</td>
                                        <td class="" style="">30/11/2022</td>
                                        <td class="right" style="">373,48</td>
                                        <td class="right" style="">225,61</td>
                                        <td class="right" style="">599,09</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=120>
                                        <td class="" style="">121</td>
                                        <td class="" style="">31/12/2022</td>
                                        <td class="right" style="">374,77</td>
                                        <td class="right" style="">224,71</td>
                                        <td class="right" style="">599,48</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=121>
                                        <td class="" style="">122</td>
                                        <td class="" style="">31/01/2023</td>
                                        <td class="right" style="">376,06</td>
                                        <td class="right" style="">223,80</td>
                                        <td class="right" style="">599,86</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=122>
                                        <td class="" style="">123</td>
                                        <td class="" style="">28/02/2023</td>
                                        <td class="right" style="">377,35</td>
                                        <td class="right" style="">222,90</td>
                                        <td class="right" style="">600,25</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=123>
                                        <td class="" style="">124</td>
                                        <td class="" style="">31/03/2023</td>
                                        <td class="right" style="">378,65</td>
                                        <td class="right" style="">221,99</td>
                                        <td class="right" style="">600,64</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=124>
                                        <td class="" style="">125</td>
                                        <td class="" style="">30/04/2023</td>
                                        <td class="right" style="">379,95</td>
                                        <td class="right" style="">221,07</td>
                                        <td class="right" style="">601,02</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=125>
                                        <td class="" style="">126</td>
                                        <td class="" style="">31/05/2023</td>
                                        <td class="right" style="">381,26</td>
                                        <td class="right" style="">220,16</td>
                                        <td class="right" style="">601,42</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=126>
                                        <td class="" style="">127</td>
                                        <td class="" style="">30/06/2023</td>
                                        <td class="right" style="">382,57</td>
                                        <td class="right" style="">219,24</td>
                                        <td class="right" style="">601,81</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=127>
                                        <td class="" style="">128</td>
                                        <td class="" style="">31/07/2023</td>
                                        <td class="right" style="">383,89</td>
                                        <td class="right" style="">218,32</td>
                                        <td class="right" style="">602,21</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=128>
                                        <td class="" style="">129</td>
                                        <td class="" style="">31/08/2023</td>
                                        <td class="right" style="">385,21</td>
                                        <td class="right" style="">217,39</td>
                                        <td class="right" style="">602,60</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=129>
                                        <td class="" style="">130</td>
                                        <td class="" style="">30/09/2023</td>
                                        <td class="right" style="">386,54</td>
                                        <td class="right" style="">216,46</td>
                                        <td class="right" style="">603,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=130>
                                        <td class="" style="">131</td>
                                        <td class="" style="">31/10/2023</td>
                                        <td class="right" style="">387,87</td>
                                        <td class="right" style="">215,53</td>
                                        <td class="right" style="">603,40</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=131>
                                        <td class="" style="">132</td>
                                        <td class="" style="">30/11/2023</td>
                                        <td class="right" style="">389,20</td>
                                        <td class="right" style="">214,60</td>
                                        <td class="right" style="">603,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=132>
                                        <td class="" style="">133</td>
                                        <td class="" style="">31/12/2023</td>
                                        <td class="right" style="">390,54</td>
                                        <td class="right" style="">213,66</td>
                                        <td class="right" style="">604,20</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=133>
                                        <td class="" style="">134</td>
                                        <td class="" style="">31/01/2024</td>
                                        <td class="right" style="">391,88</td>
                                        <td class="right" style="">212,72</td>
                                        <td class="right" style="">604,60</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=134>
                                        <td class="" style="">135</td>
                                        <td class="" style="">29/02/2024</td>
                                        <td class="right" style="">393,23</td>
                                        <td class="right" style="">211,77</td>
                                        <td class="right" style="">605,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=135>
                                        <td class="" style="">136</td>
                                        <td class="" style="">31/03/2024</td>
                                        <td class="right" style="">394,58</td>
                                        <td class="right" style="">210,82</td>
                                        <td class="right" style="">605,40</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=136>
                                        <td class="" style="">137</td>
                                        <td class="" style="">30/04/2024</td>
                                        <td class="right" style="">395,94</td>
                                        <td class="right" style="">209,87</td>
                                        <td class="right" style="">605,81</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=137>
                                        <td class="" style="">138</td>
                                        <td class="" style="">31/05/2024</td>
                                        <td class="right" style="">397,30</td>
                                        <td class="right" style="">208,92</td>
                                        <td class="right" style="">606,22</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=138>
                                        <td class="" style="">139</td>
                                        <td class="" style="">30/06/2024</td>
                                        <td class="right" style="">398,67</td>
                                        <td class="right" style="">207,96</td>
                                        <td class="right" style="">606,63</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=139>
                                        <td class="" style="">140</td>
                                        <td class="" style="">31/07/2024</td>
                                        <td class="right" style="">400,04</td>
                                        <td class="right" style="">207,00</td>
                                        <td class="right" style="">607,04</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=140>
                                        <td class="" style="">141</td>
                                        <td class="" style="">31/08/2024</td>
                                        <td class="right" style="">401,42</td>
                                        <td class="right" style="">206,03</td>
                                        <td class="right" style="">607,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=141>
                                        <td class="" style="">142</td>
                                        <td class="" style="">30/09/2024</td>
                                        <td class="right" style="">402,80</td>
                                        <td class="right" style="">205,07</td>
                                        <td class="right" style="">607,87</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=142>
                                        <td class="" style="">143</td>
                                        <td class="" style="">31/10/2024</td>
                                        <td class="right" style="">404,19</td>
                                        <td class="right" style="">204,10</td>
                                        <td class="right" style="">608,29</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=143>
                                        <td class="" style="">144</td>
                                        <td class="" style="">30/11/2024</td>
                                        <td class="right" style="">405,58</td>
                                        <td class="right" style="">203,12</td>
                                        <td class="right" style="">608,70</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=144>
                                        <td class="" style="">145</td>
                                        <td class="" style="">31/12/2024</td>
                                        <td class="right" style="">406,97</td>
                                        <td class="right" style="">202,14</td>
                                        <td class="right" style="">609,11</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=145>
                                        <td class="" style="">146</td>
                                        <td class="" style="">31/01/2025</td>
                                        <td class="right" style="">408,37</td>
                                        <td class="right" style="">201,16</td>
                                        <td class="right" style="">609,53</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=146>
                                        <td class="" style="">147</td>
                                        <td class="" style="">28/02/2025</td>
                                        <td class="right" style="">409,78</td>
                                        <td class="right" style="">200,18</td>
                                        <td class="right" style="">609,96</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=147>
                                        <td class="" style="">148</td>
                                        <td class="" style="">31/03/2025</td>
                                        <td class="right" style="">411,19</td>
                                        <td class="right" style="">199,19</td>
                                        <td class="right" style="">610,38</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=148>
                                        <td class="" style="">149</td>
                                        <td class="" style="">30/04/2025</td>
                                        <td class="right" style="">412,60</td>
                                        <td class="right" style="">198,20</td>
                                        <td class="right" style="">610,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=149>
                                        <td class="" style="">150</td>
                                        <td class="" style="">31/05/2025</td>
                                        <td class="right" style="">414,02</td>
                                        <td class="right" style="">197,20</td>
                                        <td class="right" style="">611,22</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=150>
                                        <td class="" style="">151</td>
                                        <td class="" style="">30/06/2025</td>
                                        <td class="right" style="">415,45</td>
                                        <td class="right" style="">196,21</td>
                                        <td class="right" style="">611,66</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=151>
                                        <td class="" style="">152</td>
                                        <td class="" style="">31/07/2025</td>
                                        <td class="right" style="">416,88</td>
                                        <td class="right" style="">195,20</td>
                                        <td class="right" style="">612,08</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=152>
                                        <td class="" style="">153</td>
                                        <td class="" style="">31/08/2025</td>
                                        <td class="right" style="">418,31</td>
                                        <td class="right" style="">194,20</td>
                                        <td class="right" style="">612,51</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=153>
                                        <td class="" style="">154</td>
                                        <td class="" style="">30/09/2025</td>
                                        <td class="right" style="">419,75</td>
                                        <td class="right" style="">193,19</td>
                                        <td class="right" style="">612,94</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=154>
                                        <td class="" style="">155</td>
                                        <td class="" style="">31/10/2025</td>
                                        <td class="right" style="">421,20</td>
                                        <td class="right" style="">192,18</td>
                                        <td class="right" style="">613,38</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=155>
                                        <td class="" style="">156</td>
                                        <td class="" style="">30/11/2025</td>
                                        <td class="right" style="">422,64</td>
                                        <td class="right" style="">191,16</td>
                                        <td class="right" style="">613,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=156>
                                        <td class="" style="">157</td>
                                        <td class="" style="">31/12/2025</td>
                                        <td class="right" style="">424,10</td>
                                        <td class="right" style="">190,14</td>
                                        <td class="right" style="">614,24</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=157>
                                        <td class="" style="">158</td>
                                        <td class="" style="">31/01/2026</td>
                                        <td class="right" style="">425,56</td>
                                        <td class="right" style="">189,12</td>
                                        <td class="right" style="">614,68</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=158>
                                        <td class="" style="">159</td>
                                        <td class="" style="">28/02/2026</td>
                                        <td class="right" style="">427,02</td>
                                        <td class="right" style="">188,10</td>
                                        <td class="right" style="">615,12</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=159>
                                        <td class="" style="">160</td>
                                        <td class="" style="">31/03/2026</td>
                                        <td class="right" style="">428,49</td>
                                        <td class="right" style="">187,07</td>
                                        <td class="right" style="">615,56</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=160>
                                        <td class="" style="">161</td>
                                        <td class="" style="">30/04/2026</td>
                                        <td class="right" style="">429,97</td>
                                        <td class="right" style="">186,03</td>
                                        <td class="right" style="">616,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=161>
                                        <td class="" style="">162</td>
                                        <td class="" style="">31/05/2026</td>
                                        <td class="right" style="">431,45</td>
                                        <td class="right" style="">185,00</td>
                                        <td class="right" style="">616,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=162>
                                        <td class="" style="">163</td>
                                        <td class="" style="">30/06/2026</td>
                                        <td class="right" style="">432,93</td>
                                        <td class="right" style="">183,96</td>
                                        <td class="right" style="">616,89</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=163>
                                        <td class="" style="">164</td>
                                        <td class="" style="">31/07/2026</td>
                                        <td class="right" style="">434,42</td>
                                        <td class="right" style="">182,91</td>
                                        <td class="right" style="">617,33</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=164>
                                        <td class="" style="">165</td>
                                        <td class="" style="">31/08/2026</td>
                                        <td class="right" style="">435,91</td>
                                        <td class="right" style="">181,87</td>
                                        <td class="right" style="">617,78</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=165>
                                        <td class="" style="">166</td>
                                        <td class="" style="">30/09/2026</td>
                                        <td class="right" style="">437,41</td>
                                        <td class="right" style="">180,81</td>
                                        <td class="right" style="">618,22</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=166>
                                        <td class="" style="">167</td>
                                        <td class="" style="">31/10/2026</td>
                                        <td class="right" style="">438,92</td>
                                        <td class="right" style="">179,76</td>
                                        <td class="right" style="">618,68</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=167>
                                        <td class="" style="">168</td>
                                        <td class="" style="">30/11/2026</td>
                                        <td class="right" style="">440,43</td>
                                        <td class="right" style="">178,70</td>
                                        <td class="right" style="">619,13</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=168>
                                        <td class="" style="">169</td>
                                        <td class="" style="">31/12/2026</td>
                                        <td class="right" style="">441,95</td>
                                        <td class="right" style="">177,64</td>
                                        <td class="right" style="">619,59</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=169>
                                        <td class="" style="">170</td>
                                        <td class="" style="">31/01/2027</td>
                                        <td class="right" style="">443,47</td>
                                        <td class="right" style="">176,57</td>
                                        <td class="right" style="">620,04</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=170>
                                        <td class="" style="">171</td>
                                        <td class="" style="">28/02/2027</td>
                                        <td class="right" style="">444,99</td>
                                        <td class="right" style="">175,51</td>
                                        <td class="right" style="">620,50</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=171>
                                        <td class="" style="">172</td>
                                        <td class="" style="">31/03/2027</td>
                                        <td class="right" style="">446,52</td>
                                        <td class="right" style="">174,43</td>
                                        <td class="right" style="">620,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=172>
                                        <td class="" style="">173</td>
                                        <td class="" style="">30/04/2027</td>
                                        <td class="right" style="">448,06</td>
                                        <td class="right" style="">173,36</td>
                                        <td class="right" style="">621,42</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=173>
                                        <td class="" style="">174</td>
                                        <td class="" style="">31/05/2027</td>
                                        <td class="right" style="">449,60</td>
                                        <td class="right" style="">172,28</td>
                                        <td class="right" style="">621,88</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=174>
                                        <td class="" style="">175</td>
                                        <td class="" style="">30/06/2027</td>
                                        <td class="right" style="">451,15</td>
                                        <td class="right" style="">171,19</td>
                                        <td class="right" style="">622,34</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=175>
                                        <td class="" style="">176</td>
                                        <td class="" style="">31/07/2027</td>
                                        <td class="right" style="">452,70</td>
                                        <td class="right" style="">170,10</td>
                                        <td class="right" style="">622,80</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=176>
                                        <td class="" style="">177</td>
                                        <td class="" style="">31/08/2027</td>
                                        <td class="right" style="">454,26</td>
                                        <td class="right" style="">169,01</td>
                                        <td class="right" style="">623,27</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=177>
                                        <td class="" style="">178</td>
                                        <td class="" style="">30/09/2027</td>
                                        <td class="right" style="">455,82</td>
                                        <td class="right" style="">167,92</td>
                                        <td class="right" style="">623,74</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=178>
                                        <td class="" style="">179</td>
                                        <td class="" style="">31/10/2027</td>
                                        <td class="right" style="">457,39</td>
                                        <td class="right" style="">166,82</td>
                                        <td class="right" style="">624,21</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=179>
                                        <td class="" style="">180</td>
                                        <td class="" style="">30/11/2027</td>
                                        <td class="right" style="">458,96</td>
                                        <td class="right" style="">165,72</td>
                                        <td class="right" style="">624,68</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=180>
                                        <td class="" style="">181</td>
                                        <td class="" style="">31/12/2027</td>
                                        <td class="right" style="">460,54</td>
                                        <td class="right" style="">164,61</td>
                                        <td class="right" style="">625,15</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=181>
                                        <td class="" style="">182</td>
                                        <td class="" style="">31/01/2028</td>
                                        <td class="right" style="">462,13</td>
                                        <td class="right" style="">163,50</td>
                                        <td class="right" style="">625,63</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=182>
                                        <td class="" style="">183</td>
                                        <td class="" style="">29/02/2028</td>
                                        <td class="right" style="">463,72</td>
                                        <td class="right" style="">162,39</td>
                                        <td class="right" style="">626,11</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=183>
                                        <td class="" style="">184</td>
                                        <td class="" style="">31/03/2028</td>
                                        <td class="right" style="">465,31</td>
                                        <td class="right" style="">161,27</td>
                                        <td class="right" style="">626,58</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=184>
                                        <td class="" style="">185</td>
                                        <td class="" style="">30/04/2028</td>
                                        <td class="right" style="">466,91</td>
                                        <td class="right" style="">160,15</td>
                                        <td class="right" style="">627,06</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=185>
                                        <td class="" style="">186</td>
                                        <td class="" style="">31/05/2028</td>
                                        <td class="right" style="">468,52</td>
                                        <td class="right" style="">159,02</td>
                                        <td class="right" style="">627,54</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=186>
                                        <td class="" style="">187</td>
                                        <td class="" style="">30/06/2028</td>
                                        <td class="right" style="">470,13</td>
                                        <td class="right" style="">157,89</td>
                                        <td class="right" style="">628,02</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=187>
                                        <td class="" style="">188</td>
                                        <td class="" style="">31/07/2028</td>
                                        <td class="right" style="">471,75</td>
                                        <td class="right" style="">156,76</td>
                                        <td class="right" style="">628,51</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=188>
                                        <td class="" style="">189</td>
                                        <td class="" style="">31/08/2028</td>
                                        <td class="right" style="">473,37</td>
                                        <td class="right" style="">155,62</td>
                                        <td class="right" style="">628,99</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=189>
                                        <td class="" style="">190</td>
                                        <td class="" style="">30/09/2028</td>
                                        <td class="right" style="">475,00</td>
                                        <td class="right" style="">154,48</td>
                                        <td class="right" style="">629,48</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=190>
                                        <td class="" style="">191</td>
                                        <td class="" style="">31/10/2028</td>
                                        <td class="right" style="">476,64</td>
                                        <td class="right" style="">153,33</td>
                                        <td class="right" style="">629,97</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=191>
                                        <td class="" style="">192</td>
                                        <td class="" style="">30/11/2028</td>
                                        <td class="right" style="">478,28</td>
                                        <td class="right" style="">152,18</td>
                                        <td class="right" style="">630,46</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=192>
                                        <td class="" style="">193</td>
                                        <td class="" style="">31/12/2028</td>
                                        <td class="right" style="">479,92</td>
                                        <td class="right" style="">151,03</td>
                                        <td class="right" style="">630,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=193>
                                        <td class="" style="">194</td>
                                        <td class="" style="">31/01/2029</td>
                                        <td class="right" style="">481,57</td>
                                        <td class="right" style="">149,87</td>
                                        <td class="right" style="">631,44</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=194>
                                        <td class="" style="">195</td>
                                        <td class="" style="">28/02/2029</td>
                                        <td class="right" style="">483,23</td>
                                        <td class="right" style="">148,71</td>
                                        <td class="right" style="">631,94</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=195>
                                        <td class="" style="">196</td>
                                        <td class="" style="">31/03/2029</td>
                                        <td class="right" style="">484,89</td>
                                        <td class="right" style="">147,55</td>
                                        <td class="right" style="">632,44</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=196>
                                        <td class="" style="">197</td>
                                        <td class="" style="">30/04/2029</td>
                                        <td class="right" style="">486,56</td>
                                        <td class="right" style="">146,38</td>
                                        <td class="right" style="">632,94</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=197>
                                        <td class="" style="">198</td>
                                        <td class="" style="">31/05/2029</td>
                                        <td class="right" style="">488,24</td>
                                        <td class="right" style="">145,21</td>
                                        <td class="right" style="">633,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=198>
                                        <td class="" style="">199</td>
                                        <td class="" style="">30/06/2029</td>
                                        <td class="right" style="">489,92</td>
                                        <td class="right" style="">144,03</td>
                                        <td class="right" style="">633,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=199>
                                        <td class="" style="">200</td>
                                        <td class="" style="">31/07/2029</td>
                                        <td class="right" style="">491,60</td>
                                        <td class="right" style="">142,85</td>
                                        <td class="right" style="">634,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=200>
                                        <td class="" style="">201</td>
                                        <td class="" style="">31/08/2029</td>
                                        <td class="right" style="">493,29</td>
                                        <td class="right" style="">141,66</td>
                                        <td class="right" style="">634,95</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=201>
                                        <td class="" style="">202</td>
                                        <td class="" style="">30/09/2029</td>
                                        <td class="right" style="">494,99</td>
                                        <td class="right" style="">140,47</td>
                                        <td class="right" style="">635,46</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=202>
                                        <td class="" style="">203</td>
                                        <td class="" style="">31/10/2029</td>
                                        <td class="right" style="">496,69</td>
                                        <td class="right" style="">139,28</td>
                                        <td class="right" style="">635,97</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=203>
                                        <td class="" style="">204</td>
                                        <td class="" style="">30/11/2029</td>
                                        <td class="right" style="">498,40</td>
                                        <td class="right" style="">138,08</td>
                                        <td class="right" style="">636,48</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=204>
                                        <td class="" style="">205</td>
                                        <td class="" style="">31/12/2029</td>
                                        <td class="right" style="">500,12</td>
                                        <td class="right" style="">136,88</td>
                                        <td class="right" style="">637,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=205>
                                        <td class="" style="">206</td>
                                        <td class="" style="">31/01/2030</td>
                                        <td class="right" style="">501,84</td>
                                        <td class="right" style="">135,68</td>
                                        <td class="right" style="">637,52</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=206>
                                        <td class="" style="">207</td>
                                        <td class="" style="">28/02/2030</td>
                                        <td class="right" style="">503,57</td>
                                        <td class="right" style="">134,47</td>
                                        <td class="right" style="">638,04</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=207>
                                        <td class="" style="">208</td>
                                        <td class="" style="">31/03/2030</td>
                                        <td class="right" style="">505,30</td>
                                        <td class="right" style="">133,25</td>
                                        <td class="right" style="">638,55</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=208>
                                        <td class="" style="">209</td>
                                        <td class="" style="">30/04/2030</td>
                                        <td class="right" style="">507,04</td>
                                        <td class="right" style="">132,03</td>
                                        <td class="right" style="">639,07</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=209>
                                        <td class="" style="">210</td>
                                        <td class="" style="">31/05/2030</td>
                                        <td class="right" style="">508,78</td>
                                        <td class="right" style="">130,81</td>
                                        <td class="right" style="">639,59</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=210>
                                        <td class="" style="">211</td>
                                        <td class="" style="">30/06/2030</td>
                                        <td class="right" style="">510,53</td>
                                        <td class="right" style="">129,58</td>
                                        <td class="right" style="">640,11</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=211>
                                        <td class="" style="">212</td>
                                        <td class="" style="">31/07/2030</td>
                                        <td class="right" style="">512,29</td>
                                        <td class="right" style="">128,35</td>
                                        <td class="right" style="">640,64</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=212>
                                        <td class="" style="">213</td>
                                        <td class="" style="">31/08/2030</td>
                                        <td class="right" style="">514,05</td>
                                        <td class="right" style="">127,12</td>
                                        <td class="right" style="">641,17</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=213>
                                        <td class="" style="">214</td>
                                        <td class="" style="">30/09/2030</td>
                                        <td class="right" style="">515,82</td>
                                        <td class="right" style="">125,88</td>
                                        <td class="right" style="">641,70</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=214>
                                        <td class="" style="">215</td>
                                        <td class="" style="">31/10/2030</td>
                                        <td class="right" style="">517,59</td>
                                        <td class="right" style="">124,64</td>
                                        <td class="right" style="">642,23</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=215>
                                        <td class="" style="">216</td>
                                        <td class="" style="">30/11/2030</td>
                                        <td class="right" style="">519,38</td>
                                        <td class="right" style="">123,39</td>
                                        <td class="right" style="">642,77</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=216>
                                        <td class="" style="">217</td>
                                        <td class="" style="">31/12/2030</td>
                                        <td class="right" style="">521,16</td>
                                        <td class="right" style="">122,14</td>
                                        <td class="right" style="">643,30</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=217>
                                        <td class="" style="">218</td>
                                        <td class="" style="">31/01/2031</td>
                                        <td class="right" style="">522,96</td>
                                        <td class="right" style="">120,88</td>
                                        <td class="right" style="">643,84</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=218>
                                        <td class="" style="">219</td>
                                        <td class="" style="">28/02/2031</td>
                                        <td class="right" style="">524,76</td>
                                        <td class="right" style="">119,62</td>
                                        <td class="right" style="">644,38</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=219>
                                        <td class="" style="">220</td>
                                        <td class="" style="">31/03/2031</td>
                                        <td class="right" style="">526,56</td>
                                        <td class="right" style="">118,35</td>
                                        <td class="right" style="">644,91</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=220>
                                        <td class="" style="">221</td>
                                        <td class="" style="">30/04/2031</td>
                                        <td class="right" style="">528,37</td>
                                        <td class="right" style="">117,08</td>
                                        <td class="right" style="">645,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=221>
                                        <td class="" style="">222</td>
                                        <td class="" style="">31/05/2031</td>
                                        <td class="right" style="">530,19</td>
                                        <td class="right" style="">115,81</td>
                                        <td class="right" style="">646,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=222>
                                        <td class="" style="">223</td>
                                        <td class="" style="">30/06/2031</td>
                                        <td class="right" style="">532,02</td>
                                        <td class="right" style="">114,53</td>
                                        <td class="right" style="">646,55</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=223>
                                        <td class="" style="">224</td>
                                        <td class="" style="">31/07/2031</td>
                                        <td class="right" style="">533,85</td>
                                        <td class="right" style="">113,25</td>
                                        <td class="right" style="">647,10</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=224>
                                        <td class="" style="">225</td>
                                        <td class="" style="">31/08/2031</td>
                                        <td class="right" style="">535,68</td>
                                        <td class="right" style="">111,96</td>
                                        <td class="right" style="">647,64</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=225>
                                        <td class="" style="">226</td>
                                        <td class="" style="">30/09/2031</td>
                                        <td class="right" style="">537,53</td>
                                        <td class="right" style="">110,67</td>
                                        <td class="right" style="">648,20</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=226>
                                        <td class="" style="">227</td>
                                        <td class="" style="">31/10/2031</td>
                                        <td class="right" style="">539,38</td>
                                        <td class="right" style="">109,38</td>
                                        <td class="right" style="">648,76</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=227>
                                        <td class="" style="">228</td>
                                        <td class="" style="">30/11/2031</td>
                                        <td class="right" style="">541,23</td>
                                        <td class="right" style="">108,08</td>
                                        <td class="right" style="">649,31</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=228>
                                        <td class="" style="">229</td>
                                        <td class="" style="">31/12/2031</td>
                                        <td class="right" style="">543,09</td>
                                        <td class="right" style="">106,77</td>
                                        <td class="right" style="">649,86</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=229>
                                        <td class="" style="">230</td>
                                        <td class="" style="">31/01/2032</td>
                                        <td class="right" style="">544,96</td>
                                        <td class="right" style="">105,46</td>
                                        <td class="right" style="">650,42</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=230>
                                        <td class="" style="">231</td>
                                        <td class="" style="">29/02/2032</td>
                                        <td class="right" style="">546,84</td>
                                        <td class="right" style="">104,15</td>
                                        <td class="right" style="">650,99</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=231>
                                        <td class="" style="">232</td>
                                        <td class="" style="">31/03/2032</td>
                                        <td class="right" style="">548,72</td>
                                        <td class="right" style="">102,83</td>
                                        <td class="right" style="">651,55</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=232>
                                        <td class="" style="">233</td>
                                        <td class="" style="">30/04/2032</td>
                                        <td class="right" style="">550,61</td>
                                        <td class="right" style="">101,51</td>
                                        <td class="right" style="">652,12</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=233>
                                        <td class="" style="">234</td>
                                        <td class="" style="">31/05/2032</td>
                                        <td class="right" style="">552,50</td>
                                        <td class="right" style="">100,18</td>
                                        <td class="right" style="">652,68</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=234>
                                        <td class="" style="">235</td>
                                        <td class="" style="">30/06/2032</td>
                                        <td class="right" style="">554,40</td>
                                        <td class="right" style="">98,85</td>
                                        <td class="right" style="">653,25</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=235>
                                        <td class="" style="">236</td>
                                        <td class="" style="">31/07/2032</td>
                                        <td class="right" style="">556,31</td>
                                        <td class="right" style="">97,51</td>
                                        <td class="right" style="">653,82</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=236>
                                        <td class="" style="">237</td>
                                        <td class="" style="">31/08/2032</td>
                                        <td class="right" style="">558,22</td>
                                        <td class="right" style="">96,17</td>
                                        <td class="right" style="">654,39</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=237>
                                        <td class="" style="">238</td>
                                        <td class="" style="">30/09/2032</td>
                                        <td class="right" style="">560,15</td>
                                        <td class="right" style="">94,82</td>
                                        <td class="right" style="">654,97</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=238>
                                        <td class="" style="">239</td>
                                        <td class="" style="">31/10/2032</td>
                                        <td class="right" style="">562,07</td>
                                        <td class="right" style="">93,47</td>
                                        <td class="right" style="">655,54</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=239>
                                        <td class="" style="">240</td>
                                        <td class="" style="">30/11/2032</td>
                                        <td class="right" style="">564,01</td>
                                        <td class="right" style="">92,12</td>
                                        <td class="right" style="">656,13</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=240>
                                        <td class="" style="">241</td>
                                        <td class="" style="">31/12/2032</td>
                                        <td class="right" style="">565,95</td>
                                        <td class="right" style="">90,76</td>
                                        <td class="right" style="">656,71</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=241>
                                        <td class="" style="">242</td>
                                        <td class="" style="">31/01/2033</td>
                                        <td class="right" style="">567,89</td>
                                        <td class="right" style="">89,39</td>
                                        <td class="right" style="">657,28</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=242>
                                        <td class="" style="">243</td>
                                        <td class="" style="">28/02/2033</td>
                                        <td class="right" style="">569,85</td>
                                        <td class="right" style="">88,02</td>
                                        <td class="right" style="">657,87</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=243>
                                        <td class="" style="">244</td>
                                        <td class="" style="">31/03/2033</td>
                                        <td class="right" style="">571,81</td>
                                        <td class="right" style="">86,65</td>
                                        <td class="right" style="">658,46</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=244>
                                        <td class="" style="">245</td>
                                        <td class="" style="">30/04/2033</td>
                                        <td class="right" style="">573,78</td>
                                        <td class="right" style="">85,27</td>
                                        <td class="right" style="">659,05</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=245>
                                        <td class="" style="">246</td>
                                        <td class="" style="">31/05/2033</td>
                                        <td class="right" style="">575,75</td>
                                        <td class="right" style="">83,89</td>
                                        <td class="right" style="">659,64</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=246>
                                        <td class="" style="">247</td>
                                        <td class="" style="">30/06/2033</td>
                                        <td class="right" style="">577,73</td>
                                        <td class="right" style="">82,50</td>
                                        <td class="right" style="">660,23</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=247>
                                        <td class="" style="">248</td>
                                        <td class="" style="">31/07/2033</td>
                                        <td class="right" style="">579,72</td>
                                        <td class="right" style="">81,11</td>
                                        <td class="right" style="">660,83</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=248>
                                        <td class="" style="">249</td>
                                        <td class="" style="">31/08/2033</td>
                                        <td class="right" style="">581,71</td>
                                        <td class="right" style="">79,71</td>
                                        <td class="right" style="">661,42</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=249>
                                        <td class="" style="">250</td>
                                        <td class="" style="">30/09/2033</td>
                                        <td class="right" style="">583,72</td>
                                        <td class="right" style="">78,31</td>
                                        <td class="right" style="">662,03</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=250>
                                        <td class="" style="">251</td>
                                        <td class="" style="">31/10/2033</td>
                                        <td class="right" style="">585,72</td>
                                        <td class="right" style="">76,90</td>
                                        <td class="right" style="">662,62</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=251>
                                        <td class="" style="">252</td>
                                        <td class="" style="">30/11/2033</td>
                                        <td class="right" style="">587,74</td>
                                        <td class="right" style="">75,49</td>
                                        <td class="right" style="">663,23</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=252>
                                        <td class="" style="">253</td>
                                        <td class="" style="">31/12/2033</td>
                                        <td class="right" style="">589,76</td>
                                        <td class="right" style="">74,07</td>
                                        <td class="right" style="">663,83</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=253>
                                        <td class="" style="">254</td>
                                        <td class="" style="">31/01/2034</td>
                                        <td class="right" style="">591,79</td>
                                        <td class="right" style="">72,65</td>
                                        <td class="right" style="">664,44</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=254>
                                        <td class="" style="">255</td>
                                        <td class="" style="">28/02/2034</td>
                                        <td class="right" style="">593,83</td>
                                        <td class="right" style="">71,22</td>
                                        <td class="right" style="">665,05</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=255>
                                        <td class="" style="">256</td>
                                        <td class="" style="">31/03/2034</td>
                                        <td class="right" style="">595,87</td>
                                        <td class="right" style="">69,79</td>
                                        <td class="right" style="">665,66</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=256>
                                        <td class="" style="">257</td>
                                        <td class="" style="">30/04/2034</td>
                                        <td class="right" style="">597,92</td>
                                        <td class="right" style="">68,35</td>
                                        <td class="right" style="">666,27</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=257>
                                        <td class="" style="">258</td>
                                        <td class="" style="">31/05/2034</td>
                                        <td class="right" style="">599,98</td>
                                        <td class="right" style="">66,91</td>
                                        <td class="right" style="">666,89</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=258>
                                        <td class="" style="">259</td>
                                        <td class="" style="">30/06/2034</td>
                                        <td class="right" style="">602,04</td>
                                        <td class="right" style="">65,47</td>
                                        <td class="right" style="">667,51</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=259>
                                        <td class="" style="">260</td>
                                        <td class="" style="">31/07/2034</td>
                                        <td class="right" style="">604,11</td>
                                        <td class="right" style="">64,02</td>
                                        <td class="right" style="">668,13</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=260>
                                        <td class="" style="">261</td>
                                        <td class="" style="">31/08/2034</td>
                                        <td class="right" style="">606,19</td>
                                        <td class="right" style="">62,56</td>
                                        <td class="right" style="">668,75</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=261>
                                        <td class="" style="">262</td>
                                        <td class="" style="">30/09/2034</td>
                                        <td class="right" style="">608,28</td>
                                        <td class="right" style="">61,10</td>
                                        <td class="right" style="">669,38</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=262>
                                        <td class="" style="">263</td>
                                        <td class="" style="">31/10/2034</td>
                                        <td class="right" style="">610,37</td>
                                        <td class="right" style="">59,63</td>
                                        <td class="right" style="">670,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=263>
                                        <td class="" style="">264</td>
                                        <td class="" style="">30/11/2034</td>
                                        <td class="right" style="">612,47</td>
                                        <td class="right" style="">58,16</td>
                                        <td class="right" style="">670,63</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=264>
                                        <td class="" style="">265</td>
                                        <td class="" style="">31/12/2034</td>
                                        <td class="right" style="">614,58</td>
                                        <td class="right" style="">56,68</td>
                                        <td class="right" style="">671,26</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=265>
                                        <td class="" style="">266</td>
                                        <td class="" style="">31/01/2035</td>
                                        <td class="right" style="">616,69</td>
                                        <td class="right" style="">55,20</td>
                                        <td class="right" style="">671,89</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=266>
                                        <td class="" style="">267</td>
                                        <td class="" style="">28/02/2035</td>
                                        <td class="right" style="">618,82</td>
                                        <td class="right" style="">53,71</td>
                                        <td class="right" style="">672,53</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=267>
                                        <td class="" style="">268</td>
                                        <td class="" style="">31/03/2035</td>
                                        <td class="right" style="">620,95</td>
                                        <td class="right" style="">52,22</td>
                                        <td class="right" style="">673,17</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=268>
                                        <td class="" style="">269</td>
                                        <td class="" style="">30/04/2035</td>
                                        <td class="right" style="">623,08</td>
                                        <td class="right" style="">50,73</td>
                                        <td class="right" style="">673,81</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=269>
                                        <td class="" style="">270</td>
                                        <td class="" style="">31/05/2035</td>
                                        <td class="right" style="">625,23</td>
                                        <td class="right" style="">49,22</td>
                                        <td class="right" style="">674,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=270>
                                        <td class="" style="">271</td>
                                        <td class="" style="">30/06/2035</td>
                                        <td class="right" style="">627,38</td>
                                        <td class="right" style="">47,72</td>
                                        <td class="right" style="">675,10</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=271>
                                        <td class="" style="">272</td>
                                        <td class="" style="">31/07/2035</td>
                                        <td class="right" style="">629,54</td>
                                        <td class="right" style="">46,20</td>
                                        <td class="right" style="">675,74</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=272>
                                        <td class="" style="">273</td>
                                        <td class="" style="">31/08/2035</td>
                                        <td class="right" style="">631,70</td>
                                        <td class="right" style="">44,69</td>
                                        <td class="right" style="">676,39</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=273>
                                        <td class="" style="">274</td>
                                        <td class="" style="">30/09/2035</td>
                                        <td class="right" style="">633,88</td>
                                        <td class="right" style="">43,16</td>
                                        <td class="right" style="">677,04</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=274>
                                        <td class="" style="">275</td>
                                        <td class="" style="">31/10/2035</td>
                                        <td class="right" style="">636,06</td>
                                        <td class="right" style="">41,64</td>
                                        <td class="right" style="">677,70</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=275>
                                        <td class="" style="">276</td>
                                        <td class="" style="">30/11/2035</td>
                                        <td class="right" style="">638,25</td>
                                        <td class="right" style="">40,10</td>
                                        <td class="right" style="">678,35</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=276>
                                        <td class="" style="">277</td>
                                        <td class="" style="">31/12/2035</td>
                                        <td class="right" style="">640,44</td>
                                        <td class="right" style="">38,56</td>
                                        <td class="right" style="">679,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=277>
                                        <td class="" style="">278</td>
                                        <td class="" style="">31/01/2036</td>
                                        <td class="right" style="">642,65</td>
                                        <td class="right" style="">37,02</td>
                                        <td class="right" style="">679,67</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=278>
                                        <td class="" style="">279</td>
                                        <td class="" style="">29/02/2036</td>
                                        <td class="right" style="">644,86</td>
                                        <td class="right" style="">35,47</td>
                                        <td class="right" style="">680,33</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=279>
                                        <td class="" style="">280</td>
                                        <td class="" style="">31/03/2036</td>
                                        <td class="right" style="">647,08</td>
                                        <td class="right" style="">33,92</td>
                                        <td class="right" style="">681,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=280>
                                        <td class="" style="">281</td>
                                        <td class="" style="">30/04/2036</td>
                                        <td class="right" style="">649,30</td>
                                        <td class="right" style="">32,36</td>
                                        <td class="right" style="">681,66</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=281>
                                        <td class="" style="">282</td>
                                        <td class="" style="">31/05/2036</td>
                                        <td class="right" style="">651,54</td>
                                        <td class="right" style="">30,79</td>
                                        <td class="right" style="">682,33</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=282>
                                        <td class="" style="">283</td>
                                        <td class="" style="">30/06/2036</td>
                                        <td class="right" style="">653,78</td>
                                        <td class="right" style="">29,22</td>
                                        <td class="right" style="">683,00</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=283>
                                        <td class="" style="">284</td>
                                        <td class="" style="">31/07/2036</td>
                                        <td class="right" style="">656,03</td>
                                        <td class="right" style="">27,64</td>
                                        <td class="right" style="">683,67</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=284>
                                        <td class="" style="">285</td>
                                        <td class="" style="">31/08/2036</td>
                                        <td class="right" style="">658,28</td>
                                        <td class="right" style="">26,06</td>
                                        <td class="right" style="">684,34</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=285>
                                        <td class="" style="">286</td>
                                        <td class="" style="">30/09/2036</td>
                                        <td class="right" style="">660,55</td>
                                        <td class="right" style="">24,47</td>
                                        <td class="right" style="">685,02</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=286>
                                        <td class="" style="">287</td>
                                        <td class="" style="">31/10/2036</td>
                                        <td class="right" style="">662,82</td>
                                        <td class="right" style="">22,88</td>
                                        <td class="right" style="">685,70</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=287>
                                        <td class="" style="">288</td>
                                        <td class="" style="">30/11/2036</td>
                                        <td class="right" style="">665,10</td>
                                        <td class="right" style="">21,28</td>
                                        <td class="right" style="">686,38</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=288>
                                        <td class="" style="">289</td>
                                        <td class="" style="">31/12/2036</td>
                                        <td class="right" style="">667,39</td>
                                        <td class="right" style="">19,68</td>
                                        <td class="right" style="">687,07</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=289>
                                        <td class="" style="">290</td>
                                        <td class="" style="">31/01/2037</td>
                                        <td class="right" style="">669,69</td>
                                        <td class="right" style="">18,07</td>
                                        <td class="right" style="">687,76</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=290>
                                        <td class="" style="">291</td>
                                        <td class="" style="">28/02/2037</td>
                                        <td class="right" style="">671,99</td>
                                        <td class="right" style="">16,46</td>
                                        <td class="right" style="">688,45</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=291>
                                        <td class="" style="">292</td>
                                        <td class="" style="">31/03/2037</td>
                                        <td class="right" style="">674,30</td>
                                        <td class="right" style="">14,84</td>
                                        <td class="right" style="">689,14</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=292>
                                        <td class="" style="">293</td>
                                        <td class="" style="">30/04/2037</td>
                                        <td class="right" style="">676,62</td>
                                        <td class="right" style="">13,21</td>
                                        <td class="right" style="">689,83</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=293>
                                        <td class="" style="">294</td>
                                        <td class="" style="">31/05/2037</td>
                                        <td class="right" style="">678,95</td>
                                        <td class="right" style="">11,58</td>
                                        <td class="right" style="">690,53</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=294>
                                        <td class="" style="">295</td>
                                        <td class="" style="">30/06/2037</td>
                                        <td class="right" style="">681,29</td>
                                        <td class="right" style="">9,94</td>
                                        <td class="right" style="">691,23</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=295>
                                        <td class="" style="">296</td>
                                        <td class="" style="">31/07/2037</td>
                                        <td class="right" style="">683,63</td>
                                        <td class="right" style="">8,30</td>
                                        <td class="right" style="">691,93</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=296>
                                        <td class="" style="">297</td>
                                        <td class="" style="">31/08/2037</td>
                                        <td class="right" style="">685,99</td>
                                        <td class="right" style="">6,65</td>
                                        <td class="right" style="">692,64</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=297>
                                        <td class="" style="">298</td>
                                        <td class="" style="">30/09/2037</td>
                                        <td class="right" style="">688,35</td>
                                        <td class="right" style="">5,00</td>
                                        <td class="right" style="">693,35</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="pari" data-index=298>
                                        <td class="" style="">299</td>
                                        <td class="" style="">31/10/2037</td>
                                        <td class="right" style="">690,71</td>
                                        <td class="right" style="">3,34</td>
                                        <td class="right" style="">694,05</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                    <tr class="dispari" data-index=299>
                                        <td class="" style="">300</td>
                                        <td class="" style="">30/11/2037</td>
                                        <td class="right" style="">694,17</td>
                                        <td class="right" style="">1,67</td>
                                        <td class="right" style="">695,84</td>
                                        <td class="center" style="">CALCOLATA E NON PAGATA</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="totali">
                                        <td colspan="2"><strong>Totale</strong></td>
                                        <td id="qCapitale" class="right bgWhite">130.000,00</td>
                                        <td id="qInteressi" class="right bgWhite">59.521,64</td>
                                        <td id="iRata" class="right bgWhite">189.521,64</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="form-group btnWrapper">
                        <div class="btn-align-right"> <a type="button" class="btn btn-primary" onclick="javascript:window.print();">Stampa pagina</a> </div>
                        <div class="clear"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</section>
<!-- FINE OVERLAYER PIANO AMMORTAMENTO -->

<!-- OVERLAYER DETTAGLIO FINANZIAMENTO -->
<div class="modal fade" id="dettFinanz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Dettaglio finanziamento</h2>
            </div>
            <div class="modal-body">
                <script type="text/javascript">
                <!--
                function apriAiuto(help) {
                    target = 'main';
                    opzioni = 'width=240,height=640,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes';
                    window.open(help, target, opzioni);
                }
                //-->
                </script>
                <section>
                    <p>Di seguito sono riportati i dati di dettaglio del finanziamento e le condizioni in essere ad oggi.</p>
                </section>
                <section>
                    <h4>Riepilogo dati</h4>
                    <form class="formGenerico borderFormRounded output" role="form" id="form01">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">Conto corrente</label> <span class="output">01099 - 0000017966 - EUR</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">Intestatario</label> <span class="output">RESTELLI CHIARA, RIVOLTA MARCO                              </span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label-output">Finanziamento</label>
                                    <!--<span class="output">< %=filFin%>-< %=nPart%>< %=(finanziamento.getNumeroPrestito() == 0) ? "" : "-" + nPrestito%>< %=" "+finanziamento.getDescrizioneProdotto()%></span>  --><span class="output">5978754 MUTUO WEBANK OPZIONE</span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">Data erogazione (1)</label> <span class="output">29/11/2012</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">Importo erogato EUR (2)</label> <span class="output">130.000,00&nbsp;EUR</span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">Durata (in mesi)</label> <span class="output">300</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">Periodicit&agrave; rate</label> <span class="output">MENSILE</span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label-output">Debito residuo EUR</label> <span class="output">0,00</span> </div>
                            </div>
                        </div>
                    </form>
                </section>
                <section>
                    <h4>Condizioni del finanziamento</h4>
                    <form class="formGenerico borderFormRounded output" role="form" id="form02">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">TAN (tasso annuo nominale)</label> <span class="output">2,893%</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">TAEG (Tasso annuo effettivo globale)</label> <span class="output">N.D.</span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label-output">Tasso di mora</label>
                                    <!--  <span class="output">< %=percFormatter.format(beanDett.getIndicatoreTassoMora())%>%</span>--><span class="output">N.D.</span> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label-output">Percentuale spese di estinzione</label>
                                    <!-- <span class="output">< %=percFormatter.format(beanDett.getPenaleEstinzioneAnticipata())%>%</span>  --><span class="output">N.D.</span> </div>
                                <div class="col-sm-6">
                                    <label class="control-label-output">Commissioni per incasso rata</label> <span class="output">0,00 EUR</span> </div>
                            </div>
                        </div>
                    </form>
                </section>
                <section>
                    <div class="form-group btnWrapper">
                        <div class="btn-align-right"> <a type="button" class="btn btn-primary" onclick="javascript:window.print();">Stampa pagina</a> </div>
                        <br class="clear"> </div>
                    <p class="note"> (1) per i finanziamenti rinegoziati o erogati "a tranche", corrisponde alla data dell'ultima erogazione effettuata sul conto del cliente; </p>
                    <p class="note"> (2) per i finanziamenti rinegoziati, corrisponde all'importo rinegoziato. Per i finanziamenti erogati a "tranche" corrisponde all'importo totale erogato. </p>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- FINE OVERLAYER DETTAGLIO FINANZIAMENTO -->

<script>
    $(function () {
        $('.tb-finanz').on('click', '.btn-pianoamm', function () {
            $('#pianoAmm').modal();
        }).on('click', '.btn-dettfinanz', function () {
            $('#dettFinanz').modal();
        });
    });
</script>