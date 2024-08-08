<!DOCTYPE html>
<html>
<head>
    <title>Checkbox Redirect</title>
</head>
<body>
    <form id="redirectForm">
        <label>
            <input type="checkbox" name="destination" value="corona.php">Corona
        </label>
        <label>
            <input type="checkbox" name="destination" value="dengue.php"> Dengue
        </label>
        <label>
            <input type="checkbox" name="destination" value="malaria.php"> Malaria
        </label>
        <button type="button" id="redirectButton">Redirect</button>
    </form>

    <script>
        const redirectButton = document.getElementById('redirectButton');
        redirectButton.addEventListener('click', () => {
            const selectedCheckbox = document.querySelector('input[name="destination"]:checked');
            if (selectedCheckbox) {
                const destinationURL = selectedCheckbox.value;
                window.location.href = destinationURL;
            } else {
                alert('Please select a destination.');
            }
        });
    </script>
</body>
</html>
