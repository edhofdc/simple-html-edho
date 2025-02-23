<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacked</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: black;
            color: #00ff00;
            font-family: 'Courier New', monospace;
            text-align: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        h1 {
            font-size: 50px;
            text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00;
        }
        p {
            font-size: 20px;
            text-shadow: 0 0 5px #00ff00;
        }
        .glitch {
            animation: glitch 1s infinite;
        }
        @keyframes glitch {
            0% { transform: translate(0, 0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(2px, -2px); }
            60% { transform: translate(-2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0, 0); }
        }
        .matrix {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            color: #00ff00;
            font-size: 16px;
            font-family: monospace;
            opacity: 0.3;
        }
        .mask {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <canvas class="matrix"></canvas>
    <img class="mask" src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Anonymous_emblem.svg" alt="Anonymous Mask">
    <h1 class="glitch">DEFACED BY HACKER</h1>
    <p>Please patch your system!</p>
    <script>
        const canvas = document.querySelector('.matrix');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        const fontSize = 16;
        const columns = canvas.width / fontSize;
        const drops = Array(Math.floor(columns)).fill(1);
        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#00ff00';
            ctx.font = fontSize + 'px monospace';
            for (let i = 0; i < drops.length; i++) {
                const text = letters.charAt(Math.floor(Math.random() * letters.length));
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        setInterval(drawMatrix, 50);
    </script>
</body>
</html>
