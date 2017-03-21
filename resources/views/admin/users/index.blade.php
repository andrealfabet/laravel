@foreach($users as $user)
	<li> {!! $user['first'] !!} {!! $user['last'] !!} from {!! $user['location'] !!}</li>
@endforeach