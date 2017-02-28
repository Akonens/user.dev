
  <ul>  @foreach ($users as $user)
  <li>  {{ $user->name }} <a href="mailto:{{$user->email}}">({{ $user->email }})</a> </li>

    @endforeach </ul>
