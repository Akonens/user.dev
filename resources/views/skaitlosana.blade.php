<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <h1>Nesakārtots saraksts</h1>
      {{ json_encode ($list) }}
    <h1>Sakārtots saraksts</h1>
      {{ json_encode ($sorted_list) }}
    <h1>Lielākais skaitlis</h1>
      {{ json_encode ($bigest) }}
    <h1>Mazākais cipars</h1>
      {{ json_encode ($small) }}
    <h1>Cik ir vienibas</h1>
      {{ json_encode ($count) }}
    <h1>Name</h1>
      {{ $name }}
    <h2>Cik burti vardam</h2>
      {{ $strlen }}
    <h2>Izdara lai burti ir mazi</h2>
      {{ $name }}
    <h2>Samaina vietam</h2>
      {{ json_encode ($pretejais) }}
  </head>
  <body>

  </body>
</html>
