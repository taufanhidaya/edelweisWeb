<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div style="max-width: 400px; margin: 20px auto; text-align: center; padding: 20px;">
        <div style="position: relative; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.5); background-color: rgba(0,0,0,0.4);">
            <!-- Dropdown Menu -->
            <div style="position: relative; display: inline-block;">
                <button onclick="toggleDropdown()" style="position: absolute; right: -160px; top: -10px; background: none; border: none; font-size: 20px; cursor: pointer; padding: 10px;">⋮</button>
                <div id="myDropdown" style="display: none; position: absolute; right: -160px; top: 20px; background-color: rgba(0,0,0,0.4); min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; border-radius: 4px; text-align: left;">
                    <a href="#" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Edit</a>
                    <a href="#" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Hapus</a>
                </div>
            </div>

            <!-- Profile Image -->
            <img src="assets/img/logo ed new.png"  style="width: 150px; height: 120px; margin: 0 auto 15px; display: block;">

            <!-- Profile Info -->
            <h2 class="text-light" style="font-size: 24px; margin-bottom: 5px;">Periode 1998-1999</h2>
            <p class="text-light" style="color: #666; margin-bottom: 20px;">moto</p>

            <!-- Action Button -->
            <button style="background-color: #0d6efd; color: white; border: none; padding: 8px 24px; border-radius: 4px; cursor: pointer; font-size: 16px;">View More!</button>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            if (dropdown.style.display === "none") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }

        // Close dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('button')) {
                var dropdown = document.getElementById("myDropdown");
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            }
        }
    </script>
</body>
</html>