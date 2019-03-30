<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculator</title>
    </head>
    <body>
      <h3 style="color:brown">AreaCalculator using (OCP) Open close principle</h3>
      <h4>OCP : Objects or entities should be open for extension, but closed for modification</h4>
      <hr>
      <h3 style="color:blue">Code guidelines</h3>
        <ul>
          <li>App\OCP\Shapes\Circle</li>
          <li>App\OCP\Shapes\Rectangle</li>
          <li>App\OCP\Shapes\Square</li>
          <li>App\OCP\AreaCalculator</li>
          <li>App\OCP\HomeContoller</li>
        </ul>
        <hr>
      Total Area for all shapes as defiend in HomeContoller = {{$sum}}
    </body>
</html>
