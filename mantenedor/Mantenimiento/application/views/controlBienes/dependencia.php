<!doctype html>
<html lang="en">
    <head>
        
    </head>

    <body>
      <form action="dependencia.php" method="POST" target="_blank"> 
        <select name = "otro">
          @if($ides)
            @foreach($ides as $id)       
                <option value = '{{$id -> id}}'>{{ $id -> id }}</option>
            @endforeach
          @endif
        </select>
      </form>
      
    </body>

</html>
