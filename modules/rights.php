<div class="box">
    <div class="box-body">
	<p>			Hier is het mogelijk om de gekozen rechtenset toe te voegen. Per actie geeft u aan wel recht er aangekoppeld is.<br>
	    <b>N.B.:</b> Elke actie heeft een view-right nodig om toegankelijk te zijn. Deze is overervend voor het Access, Create, EditOwn, EditAnother, Delete en Publish recht.
	</p>
    </div>
    <!-- /.box-body -->
</div>

<div class="box box-primary">
    <div class="box-header with-border">
	<h3 class="box-title">Junior redacteur</h3>
    </div>
    <form role="form">
	<div class="box-body">
	    <div class="form-group">
		<label for="title">Titel</label>
		<input type="text" class="form-control" id="title" value="Junior redacteur">
	    </div>
	    <div class="form-group">
		<label for="description">Uitleg:</label>
		<textarea class="form-control" id="description">Deze groep kan nieuws posten, maar niet publiceren.</textarea>
	    </div>
	    <div class="form-group">
		<label for="inheriting">Overerving</label>
		<select class="form-control" name="inheriting" id="category">
		    <option value="positive-inherit">Positive inherit</option>
		    <option value="negative-inherit">Negative inherit</option>
		    <option value="overwrite">Overwrite</option>
		    <option value="ignore">Ignore</option>
		    <option value="clear">Clear</option>
		</select>
	    </div>
	</div>
    </form>
    <!-- /.box-body -->
</div>


<div class="box box-primary">
    <div class="box-header with-border">
	<h3 class="box-title">Rechten</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
	<div class="box-body">
	    <div class="row">
		<div class="col-xs-12">
		    <div class="box">
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
			    <table class="table table-hover">
				<thead>
				    <tr>
					<th>&nbsp;</th>
					<th>access</th>
					<th>create</th>
					<th>edit_own</th>
					<th>edit</th>
					<th>delete</th>
					<th>publish</th>
				    </tr>
				</thead>
				<tbody><tr>
					<td>Administratiepaneel</td><td><select name="rights[admin][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td></td><td></td><td></td><td></td></tr><tr>
					<td>Over jezelf</td><td><select name="rights[me][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td></td><td></td><td></td><td></td></tr><tr>
					<td>Gebruikers</td><td><select name="rights[users][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[users][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[users][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[users][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Rechten</td><td><select name="rights[rights][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[rights][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[rights][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[rights][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Tags</td><td><select name="rights[tags][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[tags][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[tags][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[tags][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Reviews</td><td><select name="rights[reviews][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[reviews][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[reviews][edit_own]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[reviews][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[reviews][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[reviews][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Pagina's</td><td><select name="rights[pages][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[pages][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[pages][edit_own]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[pages][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[pages][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[pages][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Nieuws</td><td><select name="rights[news][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[news][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[news][edit_own]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[news][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[news][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[news][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Agenda</td><td><select name="rights[events][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[events][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[events][edit_own]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[events][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[events][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[events][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Social media</td><td><select name="rights[socialmedia][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[socialmedia][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[socialmedia][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[socialmedia][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[socialmedia][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Video's</td><td><select name="rights[video][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[video][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[video][edit_own]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[video][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[video][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[video][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Webcams</td><td><select name="rights[webcams][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[webcams][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[webcams][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[webcams][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Locaties</td><td><select name="rights[locations][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[locations][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[locations][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[locations][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Maatschappijen</td><td><select name="rights[transportcompanies][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[transportcompanies][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[transportcompanies][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[transportcompanies][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[transportcompanies][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Materieel</td><td><select name="rights[vehicles][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[vehicles][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[vehicles][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[vehicles][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[vehicles][publish]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td></tr><tr>
					<td>Treinseries</td><td><select name="rights[trainseries][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[trainseries][create]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td><select name="rights[trainseries][edit]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td><select name="rights[trainseries][delete]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td></tr><tr>
					<td>Extern nieuws</td><td><select name="rights[external_news][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td></td><td></td><td></td><td></td></tr><tr>
					<td>Systeem en logging</td><td><select name="rights[system][access]"><option value="">-</option><option value="1">Ja</option><option value="0">Nee</option></select></td><td></td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			    </table>
			</div>
			<!-- /.box-body -->
		    </div>
		    <!-- /.box -->
		</div>
	    </div>
	</div>
	<div class="box-footer">
	    <button type="submit" class="btn btn-primary">Versturen</button>
	</div>
    </form>
</div>
<!-- /.box -->