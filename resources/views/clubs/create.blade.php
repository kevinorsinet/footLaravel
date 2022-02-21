
<form method="POST" action="{{route('clubs.store')}}" >
	@csrf
	<div class="form-group mb-3">
		<label>Nom du Club</label>
		<input type="text" name="name" class="form-control" />
	</div>

	<div class="form-group mb-3">
		<button type="submit" class="btn btn-primary">Ajouter</button>
		<a href="/">Retour</a>
	</div>
</form>
