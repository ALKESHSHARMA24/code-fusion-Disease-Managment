<!DOCTYPE html>
<html>
<head>
  <title>Laboratory Tests</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f5f5f5;
    }

    h1 {
      font-size: 28px;
    }

    h2 {
      font-size: 22px;
      margin-top: 20px;
    }

    label {
      display: block;
      font-size: 18px;
      margin: 10px 0;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 18px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Laboratory Tests</h1>
  
    <form method="POST" action="a2.php">
      <h2>Select a Test:</h2>
      
      <label>
        <input type="radio" name="test" value="covid"> COVID-19 Test
      </label><br>
      
      <label>
        <input type="radio" name="test" value="pneumonia"> Pneumonia Test
      </label><br>
      
      <label>
        <input type="radio" name="test" value="dengue"> Dengue Test
      </label><br>
      
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>