<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freetimers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    
/* input:invalid {
    border: 3px solid red;
} */
</style>
</head>
<body>
    <header>

    </header>
<div class="container">
    <div class="row">
        <form id="calculate" method="POST">
    <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Width</span>
        <input type="number" class="form-control" name="width" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Length</span>
        <input type="number" class="form-control"  name="length" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Depth</span>
        <input type="number" class="form-control" name="depth" required>
        </div>
    </div>
    <div class="col-md-4">
    <label>Depth Unit</label>
    <select class="form-select" name="depth_unit">
  <option value="meter">Meters</option>
  <option value="cm">Centimeters</option>
  <option value="inche">Inches</option>
</select>
    </div>
    <div class="col-md-4">
<label>Measure Unit</label>
    <select class="form-select" name="measure_unit">
  <option value="meter">Meters</option>
  <option value="yard">Yards</option>
  <option value="feet">Foot</option>
</select>
   
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-primary" id="request"  value="Calculate"/>
</div>

</form>
</div>
    </div>
</div>


<div>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Dimension</th>
      <th scope="col">Number Of Bags</th>
      <th scope="col">Total Cost</th>

    </tr>
  </thead>
  <tbody>
    <tr id="result">
      
    </tr>
  </tbody>
</table>
</div>
<footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/calculate.js" type="text/javascript"></script>
</footer>
</body>
</html>
