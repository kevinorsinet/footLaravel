<ul>
	@foreach($clubsList as $item)
	<li>{{$item->clubName}}-{{$item->sponsorName}}-{{$item->price}} </li>
	@endforeach
</ul>