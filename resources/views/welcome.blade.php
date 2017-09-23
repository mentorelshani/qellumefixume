<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E qelluar e fixuar by mentori</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAACfklEQVRoQ+2ZXU7CQBSFbyM+6w7EFQivhsayAtmBsANYie7AugJxBdZofBVXIO4AntWMZ6Y/aSvQmc4dsAmTkJDQn/PNPffeGcajhg+v4fppD7DrCDqNgAjoWAJ6ES1cgboF8GmoAJ4pbCZAjx4VwAv1GwcgfBpA9L0SLqgPiMgFhBMLKe//0BsEtxPRczqgrotccAPg0y2EK//nRohcGHFHgR0A1pHCJcCqMeJOaFYAcU4dWEUmriqfK8YC1up7rzTjigQbQOL7jw3iU80LQJ5y5QMLgBL/jZn3EAGdIRCBFiLB0OCsAYzFp4BMEFYAtcXnINAfujpBW3dNbQBr8UyRqAXAJp4BwhiAXbwlhBGARp23sbO817hPaAMkHfZao87bQxBNdDt2JUDSoKRwuUTY5gjR8CZVvWIjQLIkluLb21See9cc32U0ptplVM34F12iqw7xCXYkvPhagb2EwK7ukB7KEfkTgcQyA9wgAS7+CcATtEhLTSsB8oJFT0UgxM0nOwER9Clzb9NuTjeJb/Cgqy1D3GHGx1ZJXIhGvFGRIEeOQZZ4/pitjBYg4g1L5BBiiQ1PYLLhqbRQebaTpUSEvDhjjYSgd+wRgirLlN9pDCAfwA5RU7zUUguAFcJCvBUACwTEo0TqbUPX+LV2BNLn1baT5cyn77cGqBUJJvHWFiqU2PjvxLlGiV2iFLdNq826iscSgcxO1X3CuM5XlWpWAGWnJv+1mEXCVwca5bXTHZYHw6oZNf2dPQK5pJ5lq1i5qmxRh8v3eUgnAImVmnvAkVmpF5/KoFkFptbQvd5ZBHIJ3eBDvqYfs+rawOY6pxayEaZ77x5Ad6ZcXfcL1tziMU7hdioAAAAASUVORK5CYII=">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .errors {
                padding-left: 40%;
                position: absolute;
            }
            .container {
                text-align: center;
                position: relative;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        <div style="font-size: 100px;">XYZ</div>
      
        <form action="/play" method="post">
         {{csrf_field()}}
            <input type="number" name="number" style="height: 20%">
           
            <input type="submit" value="Try" style=""><br>
             @if($errors->has('number'))
                {{$errors->first('number')}}
            @endif
            
        </form>

            
        
            @if ($info)
                @foreach ($info as $in)
                    {{$in}}
                    <br>
                @endforeach
            @endif            
        </div>
        <div class="errors">
        </div>
    </body>
</html>
