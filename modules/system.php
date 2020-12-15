<?php if ($_GET['action'] == 'server') { ?>
    <div class="box">
        <div class="box-header with-border">
    	<h3 class="box-title">Systeem</h3>
        </div>
        <div class="box-body">
    	<p>
	    Hier is het mogelijk om de serverconfiguratie te bekijken en in te stellen.<br>
	    Wees voorzichtig!
    	</p>
        </div>
    </div>

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
    	<!-- general form elements -->
    	<div class="box box-primary">
    	    <div class="box-header with-border">
    		<h3 class="box-title">Serverstatus</h3>
    	    </div>
    	    <form role="form">
    		<div class="box-body">
    		    <div class="form-group">
			
			
    			<p>Server load:</p>
			<span><strong>21:40:41 up 2 days, 4:07, 0 users, load average: 0.07, 0.04, 0.06 arien </strong>
</span>
			
			
			
    			<p>Geheugen vrij:</p>
    			<div class="progress">
    			    <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
    				<span>32% vrij</span>
    			    </div>
    			</div>
			<p>VSwap-geheugen vrij:</p>
    			<div class="progress">
    			    <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
    				<span>12% vrij</span>
    			    </div>
    			</div>
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

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
    	<!-- general form elements -->
    	<div class="box box-primary">
    	    <div class="box-header with-border">
    		<h3 class="box-title">Caching</h3>
    	    </div>
    	    <form role="form">
    		<div class="box-body">
    		    <div class="form-group">
    			<p>Verwijder de CloudFlare cache. Dit is handig als er iets corrupt is geraakt,
			    of als de server plat is gegaan en de afbeeldingen foute dingen cachen.<br>
			    Na het drukken op de knop kan het nog wel tot een minuut duren voordat de cache geleegd is.
    		</div>
    		<!-- /.box-body -->
    		<div class="box-footer">
    		    <button type="submit" class="btn btn-primary">Leeg cache</button>
    		</div>
    	    </form>
    	</div>
    	<!-- /.box -->
        </div>
    </div>
<?php } ?>