<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table" >
    <thead>
      <tr>
        <th>ID</th>
        <th>Player Name</th>
        <th>Player Profile</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $data)
        <tr>
            @foreach($data->player as $player)
            <td>
                {{$data->player->id}}
            </td>
            <td> 
                {{ $data->player->player_name}}
            </td> 
            <td>
                <img src="{{asset('players/'. $data->player->player_profile)}}" width="70px" hieght="70px" alt="image">

            </td>
</tr>
             @endforeach
            
             <td>
             @foreach($data->city as $city)
                {{$city->city_name .","}}
                @endforeach
            </td>
  
        </tr>
        @endforeach     


    </tbody>
  </table>
</div>

</body>
</html>