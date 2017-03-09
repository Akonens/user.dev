  <ul>  @foreach ($users as $user)
  <li>
        <a href="/users/{{$user->id}}">{{ $user->name  }}</a>
        <a href="mailto:{{$user->email}}">({{ $user->email }})</a>
        <a href="/users/{{$user->id}}">Vecums{{ $user->age  }}</a>
  </li>
    @endforeach </ul>

    <?php
  $age = array("Mārcis"=>"23", "Silvestrs"=>"23", "Kaspars"=>"43");
  echo "Mārcis is " . $age['Mārcis'] . " years old.";
  ?>
