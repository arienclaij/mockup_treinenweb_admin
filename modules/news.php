<?php if ($_GET['action'] == 'add') { ?>
    <div class="box">
        <div class="box-body">
    	<p>Hier is het mogelijk om nieuwsberichten aan de site toe te voegen. Indien de Twitter-functionaliteit
    	    goed ingesteld is zullen de nieuwsberichten ook op Twitter toegevoegd worden.<br>
    	    PS: Let er erop dat de opmaak van de site in het invulveld hieronder niet kan corresponderen met de daadwerkelijke opmaak
    	    die uw site als huisstijl gebruikt.
    	</p>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
    	<!-- general form elements -->
    	<div class="box box-primary">
    	    <div class="box-header with-border">
    		<h3 class="box-title">ProRail opent nieuwe fietsenstalling</h3>
    	    </div>
    	    <!-- /.box-header -->
    	    <!-- form start -->
    	    <form role="form">
    		<div class="box-body">
    		    <div class="form-group">
    			<label for="title">Titel</label>
    			<input type="text" class="form-control" id="title" value="ProRail opent nieuwe fietsenstalling">
    		    </div>
    		    <div class="form-group">
    			<label for="category">Categorie</label>
    			<select class="form-control" name="category" id="category">
    			    <option value="1" selected="selected">Binnenland</option>
    			    <option value="2">Buitenland</option>
    			    <option value="3">Materieel</option>
    			    <option value="4">Treinenweb</option>
    			    <option value="5">Interviews</option>
    			    <option value="6">Televisie</option>
    			    <option value="7">Opmerkelijk</option>
    			    <option value="8">Aanbiedingen</option>
    			</select>
    		    </div>
    		    <div class="form-group">
    			<label for="source">Bron:</label>
    			<input type="text" class="form-control" id="source">
    		    </div>		    
    		    <div class="form-group">
    			<label for="source_link">Bron link:</label>
    			<input type="text" class="form-control" id="source_link" value="https://">
    		    </div>
    		    <div class="form-group">
    			<label for="prologue">Inleiding:</label>
    			<textarea class="form-control" id="prologue"></textarea>
    		    </div>
    		    <div class="form-group">
    			<label for="tags">Tags:</label>
    			<input type="text" class="form-control" id="tags"></textarea>
    		    </div>

    		    <div class="form-group">
    			<label>Plannen op:</label>

    			<div class="input-group">
    			    <input type="text" class="form-control timepicker">

    			    <div class="input-group-addon">
    				<i class="fa fa-clock-o"></i>
    			    </div>
    			</div>
    			<!-- /.input group -->
    		    </div>




    		    <div class="col-md-6">
    			<div class="form-group">
    			    <label for="concept">Concept:</label>
    			    <div class="checkbox">
    				<label>
    				    <input type="checkbox"> Ja
    				</label>
    				<p class="help-block">Aanvinken als het niet gepubliceerd moet worden.</p>
    			    </div>
    			</div>
    		    </div>

    		    <div class="col-md-6">
    			<div class="form-group">
    			    <label for="concept">Breaking:</label>
    			    <div class="checkbox">
    				<label>
    				    <input type="checkbox"> Ja
    				</label>
    				<p class="help-block">Dit is breaking news!</p>
    			    </div>
    			</div>
    		    </div>







    		    <div class="form-group">
    			<label for="editor">Inhoud</label>
    			<textarea id="editor"class="form-control" id="editor" placeholder="De inhoud hier....l">
              &lt;p&gt;&lt;strong&gt;Afgelopen maandag is op station Amsterdam Amstel een vernieuwde, uitgebreide en bewaakte fietsenstalling geopend. Deze biedt plaats voor 3.300 fietsen. Al direct na de opening werd er massaal van de stalling gebruik gemaakt door reizigers.&lt;/strong&gt;&lt;/p&gt;

            &lt;p&gt;De bewaakte stalling is voorzien van digitale informatieschermen die fietsers de weg wijzen naar vrije stallingsplekken, en geven aan hoeveel parkeerplakken er nog beschikbaar zijn. Deze stalling biedt plek voor 3.000 fietsen, en daarnaast kunnen reizigers in de stalling gebruiken maken van maar liefst 300 OV-fietsen. Met de fietsenstalling aan de Goudriaanstraat, en de OV-fietsen, is er op station Amsterdam Amstel nu ruimte voor in totaal 5.800 fietsen.&lt;/p&gt;

            &lt;h3&gt;Nieuwe ingang&lt;/h3&gt;

            &lt;p&gt;De ingang van de nieuwe fietsenstalling is verplaatst naar het Julianaplein. Zowel de entree, de glazen schuifdeuren, als de aankleding van de hal van de fietsenstalling sluiten aan bij het historische, monumentale karakter van het Amstelstation welke tachtig jaar geleden zijn deuren opende.&lt;/p&gt;

            &lt;p&gt;ProRail laat weten dat er de komende tijd extra handhavers zullen ingezet. Zij zullen erop toezien dat fietsen op de daarvoor bestemde plekken worden gezet. Dat wil zeggen in de bewaakte fietsenstalling onder het station &amp;eacute;n in de onbewaakte stalling aan de Goudriaanstraat.&lt;/p&gt;

            &lt;p&gt;&lt;img alt=&quot;Foto: ProRail&quot; src=&quot;https://www.treinenweb.nl/uploads/image/ProRail-Fietsenstalling_Amstelstation_2_new_res.jpg&quot; style=&quot;width:600px&quot; /&gt;&lt;/p&gt;

            &lt;p&gt;&lt;img alt=&quot;Foto: ProRail&quot; src=&quot;https://www.treinenweb.nl/uploads/image/ProRail-Fietsenstalling_Amstelstation_1_new_res.jpg&quot; style=&quot;width:600px&quot; /&gt;&lt;br /&gt;
            &lt;em&gt;Foto&amp;#39;s: ProRail&lt;/em&gt;&lt;/p&gt;
    			</textarea>
    		    </div>
    		</div>
    		<!-- /.box-body -->

    		<div class="box-footer">
    		    <button type="submit" class="btn btn-primary">Versturen</button>
    		</div>
    	    </form>
    	</div>
    	<!-- /.box -->
        </div>
    </div>
<?php } elseif ($_GET['action'] == 'list') { ?>
    <div class="box">
        <div class="box-body">
    	<p>Hier ziet u het overzicht van de aangemaakte nieuwsartikelen in uw website.
    	    Hier kunt u ervoor kiezen om een nieuwsartikel aan te passen of te verwijderen.
    	</p>
        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
    	<!-- general form elements -->
    	<div class="box box-primary">
    	    <div class="box-header with-border">
    		<h3 class="box-title">Overzicht</h3>
    	    </div>
    	    <!-- /.box-header -->
    	    <!-- form start -->
    	    <div class="box-body table-responsive no-padding">		
    		<table class="table table-hover">
    		    <tbody><tr>
    			    <th>Artikel
    			    </th><th>Datum
    			    </th><th>Auteur
    			    </th><th>Opties
    			    </th></tr>

    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780"><span class="label label-danger">Breaking</span> NS neemt Deutsche Bahn over (fictief)</a></td>
    			    <td>14 mei 2019 om: 19:53</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7780">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780"><span class="label label-warning">Concept</span> <span class="label label-danger">Breaking</span> Staking op het spoor dreigt (ook fictief)</a></td>
    			    <td>14 mei 2019 om: 19:53</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7780">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780"><span class="label label-warning">Concept</span> V250 weer in dienst in Italië</a></td>
    			    <td>14 mei 2019 om: 19:53</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7780">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7780">Verwijder</a>
    			    </td>
    			</tr><tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7781"><span class="label label-warning">Concept</span> Station Utrecht Centraal wint bouwprijs 2019</a></td>
    			    <td>14 mei 2019 om: 19:51</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7781">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7781">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7776">Mogelijke tijdelijke stop voor tweelanden-trein dreigt</a></td>
    			    <td>14 mei 2019 om: 19:51</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7776">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7776">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7775">Financiële tekorten hinderen tienminutentrein</a></td>
    			    <td>14 mei 2019 om: 12:28</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7775">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7775">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7774">NS: Spoor naar Zandvoort kan capaciteit niet aan tijdens toekomstige evenementen</a></td>
    			    <td>13 mei 2019 om: 13:32</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7774">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7774">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7773">Broodzaak wordt vervangen door Treck</a></td>
    			    <td>10 mei 2019 om: 20:03</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7773">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7773">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7772">Rover: "NS moet langere treinen laten rijden tussen Zwolle en het Noorden"</a></td>
    			    <td>10 mei 2019 om: 19:35</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7772">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7772">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7771">Aanstaande 28 mei opnieuw grote staking in openbaar vervoer</a></td>
    			    <td>8 mei 2019 om: 16:29</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7771">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7771">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7770">Nieuwe ICNG maakt eerste kilometers op testbaan in Tsjechië</a></td>
    			    <td>9 mei 2019 om: 21:59</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7770">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7770">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7769">Vijf weekenden op rij geen treinen rond Amsterdam Zuid</a></td>
    			    <td>7 mei 2019 om: 19:21</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7769">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7769">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7768">DB: Twee plannen voor nieuwbouw van de Friesenbrücke</a></td>
    			    <td>7 mei 2019 om: 19:15</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7768">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7768">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7767">Na de zomer renovatie voor stationshal Amsterdam Amstel</a></td>
    			    <td>6 mei 2019 om: 18:32</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7767">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7767">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7766">Omwonenden spoor in Hengelo vrezen toename van overlast op het spoor</a></td>
    			    <td>6 mei 2019 om: 18:05</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7766">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7766">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7765">Treinen staan tijdens Nationale Herdenking twee minuten stil</a></td>
    			    <td>3 mei 2019 om: 11:29</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7765">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7765">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7764">NS voorziet 1900 conducteurs van smartwatch</a></td>
    			    <td>3 mei 2019 om: 11:01</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7764">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7764">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7763">ProRail tekent eerste contract voor vernieuwing spoor rond Sloterdijk</a></td>
    			    <td>5 mei 2019 om: 08:46</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7763">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7763">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7762">Keolis eist maatregelen van provincie voor veiligheid in de trein</a></td>
    			    <td>3 mei 2019 om: 09:55</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7762">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7762">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7761">Flixbus neemt Eurolines over</a></td>
    			    <td>4 mei 2019 om: 11:10</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7761">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7761">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7760">ProRail: Bredere samenwerking nodig voor bestrijding van problemen door afwisselende klimaat </a></td>
    			    <td>4 mei 2019 om: 13:02</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7760">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7760">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7759">Schiedam krijgt monument ter nagedachtenis aan treinramp van 1976</a></td>
    			    <td>2 mei 2019 om: 13:46</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7759">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7759">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7758">Groot-Brittannië introduceert nieuwe diesel-hybride trein</a></td>
    			    <td>2 mei 2019 om: 10:34</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7758">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7758">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7757">Wisselstoring hindert treinverkeer Zwolle - Groningen</a></td>
    			    <td>1 mei 2019 om: 23:18</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7757">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7757">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7756">ProRail opent vernieuwde fietsenstalling op Amsterdam Amstel</a></td>
    			    <td>1 mei 2019 om: 11:22</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7756">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7756">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7755">Baby valt tussen perron en trein bij station Anna Paulowna</a></td>
    			    <td>1 mei 2019 om: 11:03</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7755">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7755">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7754">Provincie Overijssel ziet verbeteringen bij stiptheid Eurobahn</a></td>
    			    <td>29 apr 2019 om: 20:35</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7754">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7754">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7753">Infrabel publiceert open data voor ontwikkelaars</a></td>
    			    <td>29 apr 2019 om: 10:38</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7753">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7753">Verwijder</a>
    			    </td>
    			</tr>
    			<tr>
    			    <td><a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7752">NS kijkt ondanks koude weer en vernieling terug op mooie Koningsdag</a></td>
    			    <td>27 apr 2019 om: 22:45</td>
    			    <td>Aar</td>
    			    <td>
    				<a href="index.php?module=nieuws&amp;action=news_edit&amp;id=7752">Wijzig</a>
    				<a href="index.php?module=nieuws&amp;action=news_delete&amp;id=7752">Verwijder</a>
    			    </td>
    			</tr>

    		    </tbody></table>
    	    </div>
    	    <!-- /.box-body -->
    	</div>
    	<!-- /.box -->
        </div>
    </div>



<?php } ?>
