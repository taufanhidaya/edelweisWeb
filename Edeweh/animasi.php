<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallax Image Effect</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }

        .container {
            width: 500px;
            height: 300px;
            overflow: hidden;
            position: relative;
            border-radius: 15px;
        }

        .image {
            width: 110%;
            height: 110%;
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.05s ease-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="image" src="assets/img/paralax.png" alt="Parallax Image">
    </div>

    <script>
        const container = document.querySelector('.container');
        const image = document.querySelector('.image');

        container.addEventListener('mousemove', (e) => {
            const rect = container.getBoundingClientRect();
            const x = e.clientX - rect.left; // X position within container
            const y = e.clientY - rect.top;  // Y position within container

            // Calculate movement
            const xMove = ((x / rect.width) - 0.5) * 20; // Adjust multiplier for intensity
            const yMove = ((y / rect.height) - 0.5) * 20;

            image.style.transform = `translate(${xMove}px, ${yMove}px)`;
        });

        container.addEventListener('mouseleave', () => {
            image.style.transform = 'translate(0, 0)'; // Reset position
        });
    </script>
</body>
</html>
