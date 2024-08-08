<!DOCTYPE html>
<html>
<head>
  <title>Laboratory Test Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .test-list {
      list-style: none;
      padding: 0;
    }

    .test-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
    }

    .test-name {
      flex: 1;
    }

    .test-amount {
      font-weight: bold;
    }

    #total-amount {
      font-size: 20px;
      text-align: right;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Total amount you need to pay</h1>
    <ul class="test-list">
      <li class="test-item">
        <span class="test-name">A chest X-ray</span>
        <input type="checkbox" class="test-checkbox" data-amount="50" checked>
      </li>
      <li class="test-item">
        <span class="test-name">Complete blood count (CBC)</span>
        <input type="checkbox" class="test-checkbox" data-amount="30" checked>
      </li>
      <!-- Add more test items as needed -->
    </ul>
    <p id="total-amount">Total Amount: $0</p>
    <a href = "dashbord.php"><button type="submit">Submit</button></a>
  </div>

  <script>
    const checkboxes = document.querySelectorAll('.test-checkbox');
    const totalAmountElement = document.getElementById('total-amount');

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', updateTotalAmount);
    });

    function updateTotalAmount() {
      let totalAmount = 0;
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          totalAmount += parseFloat(checkbox.getAttribute('data-amount'));
        }
      });

      totalAmountElement.textContent = `Total Amount: $${totalAmount.toFixed(2)}`;
    }
    
    // Initial total amount calculation
    updateTotalAmount();
  </script>
</body>
</html>