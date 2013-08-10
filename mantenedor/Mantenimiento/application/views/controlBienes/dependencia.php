<!doctype html>
<html lang="en">
    <head>
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
    </head>

    <body>
      <form action="/dependencia" method="POST" target="_blank"> 
        <h4>Cambiar dependencias</h4> 
        <label> Codigo Bien</label>
        <select name = "bienid">
          @if($ides)
            @foreach($ides as $id)       
                <option value = '{{$id -> id}}'>{{ $id -> id }}</option>
            @endforeach
          @endif
        </select>
        </br>
        <label> Nuevo Centro Costo</label>
        <select name = "ant">
          @for($i=1;$i<=4;$i++)
          {
            <?php
              echo "<option value = 'centro de costo $i.'>centro de costo $i.</option>"
            ?>
          }
          @endfor
          <input type = "submit" value = "Cambiar centro de costo" class="btn btn-small btn-primary">
      </form>
      
    </body>

</html>