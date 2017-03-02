  <ul>  @foreach ($users as $user)
  <li>  <a href="/users/{{$user->id}}">{{ $user->name  }}</a> <a href="mailto:{{$user->email}}">({{ $user->email }})</a> </li>
    @endforeach </ul>
