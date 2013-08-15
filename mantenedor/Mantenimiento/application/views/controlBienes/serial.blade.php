<!doctype html>
<html lang="en">
    <head>
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
    </head>

    <body>
      <form action="/serial" method="POST" target="_blank">
      <h4>Actualizar número de serial</h4> 
      <label> Codigo Bien</label>
        <select name = "bienid">
          @if($ides)
            @foreach($ides as $id)       
                <option value = '{{$id -> id}}'>{{ $id -> id }}</option>
            @endforeach
          @endif
        </select>
      </br>
      <label>Número de serial</label>
      {{ Form::text('serie_text','',array('placeholder' => 'Número de serie')) }}
        <input type = "submit" value = "Actualizar serial" class="btn btn-small btn-primary"> 
      </form>
      

    </body>
</html>
