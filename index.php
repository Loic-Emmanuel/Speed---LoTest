<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed - LoTest</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo">Speed - LoTest</div>
        <div class="subtitle">Testez votre vitesse de connexion</div>
        
        <div class="speed-display">
            <div class="speed-circle" id="speedCircle">
                <div class="speed-value" id="speedValue">
                    0
                    <span class="speed-unit">Mbps</span>
                </div>
            </div>
        </div>
        
        <button class="test-button" id="testButton" onclick="startSpeedTest()">
            Commencer le test
        </button>
        
        <div class="progress-bar" id="progressBar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
        
        <div class="status" id="status"></div>
        
        <div class="stats">
            <div class="stat-item">
                <div class="stat-label">Ping</div>
                <div class="stat-value" id="pingValue">-- ms</div>
            </div>
            <div class="stat-item">
                <div class="stat-label">Jitter</div>
                <div class="stat-value" id="jitterValue">-- ms</div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>© <?php echo date('Y'); ?> SpeedTest - By <a href="https://github.com/loic-emmanuel">Loïc Emmanuel</a></p>
    </div>

   <script src="script.js"></script>
</body>
</html>