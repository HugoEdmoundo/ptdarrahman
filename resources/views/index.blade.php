<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesantren E-Learning System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        :root {
            --primary: #1E8449;   /* Hijau Segar (utama banget) */
            --secondary: #145A32; /* Hijau Gelap (navbar/footer) */
            --accent: #F6A21E;    /* Oranye aksen */
            --light: #FFFFFF;     /* Putih */
            --dark: #1C1C1C;      /* Hitam Abu */
            --success: #27AE60;   /* Bootstrap Success style */
            --info: #2ECC71;      /* Hijau Muda (hover/link) */
            --warning: #f39c12;   /* Kuning/Oranye */
            --danger: #e74c3c;    /* Merah */
            --white: #ffffff;
            --black: #000000;
            --gray: #95a5a6;
            --dark-gray: #7f8c8d;
            --light-gray: #bdc3c7;
            --font-primary: 'Poppins', sans-serif;
            --font-secondary: 'Montserrat', sans-serif;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            --transition: all 0.3s ease;
            --border-radius: 0.375rem;
            --border-radius-lg: 0.5rem;
            --border-radius-xl: 1rem;
            --toska-1: #1E8449;   /* Hijau utama */
            --toska-2: #2ECC71;   /* Hijau muda pendukung */
            --deep: #0B3D2E;      /* Hijau sangat gelap */
            --muted: #6b7280;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--light);
            overflow: hidden;
            position: relative;
        }
        
        /* Background animation elements */
        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            z-index: 0;
        }
        
        .circle-1 {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation: float 15s infinite ease-in-out;
        }
        
        .circle-2 {
            width: 500px;
            height: 500px;
            bottom: -200px;
            right: -100px;
            animation: float 20s infinite ease-in-out reverse;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(20px, 30px) rotate(5deg);
            }
            50% {
                transform: translate(-15px, 20px) rotate(-5deg);
            }
            75% {
                transform: translate(10px, -15px) rotate(3deg);
            }
        }
        
        .loading-container {
            text-align: center;
            position: relative;
            z-index: 1;
            max-width: 500px;
            padding: 2rem;
            background: var(--glass);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transform: translateY(0);
            opacity: 1;
            transition: all 0.5s ease;
        }
        
        .logo {
            width: 120px;
            height: 120px;
            background: var(--glass);
            border-radius: 50%;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            border: 2px solid var(--glass-border);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            color: var(--accent);
            position: relative;
            overflow: hidden;
        }
        
        .logo::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(30deg); }
            100% { transform: translateX(100%) rotate(30deg); }
        }
        
        .loading-text {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            background: linear-gradient(to right, var(--light), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: 0.5px;
        }
        
        .loading-subtitle {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 30px;
            font-weight: 300;
        }
        
        .progress-container {
            width: 100%;
            height: 6px;
            background: var(--glass);
            border-radius: 3px;
            margin: 0 auto 25px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            width: 0;
            background: linear-gradient(to right, var(--accent), var(--light));
            border-radius: 3px;
            transition: width 0.3s ease;
            position: relative;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.3) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: progressShine 2s infinite;
        }
        
        @keyframes progressShine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .status-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            opacity: 0.8;
            margin-bottom: 20px;
        }
        
        .redirect-info {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.8;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .redirect-info i {
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .version-info {
            position: absolute;
            bottom: 15px;
            right: 15px;
            font-size: 11px;
            opacity: 0.6;
        }
        
        /* Loading complete animation */
        .loading-complete .loading-container {
            transform: translateY(-20px);
            opacity: 0;
        }
        
        .loading-complete .bg-circle {
            transform: scale(5);
            opacity: 0;
            transition: all 1s ease;
        }
    </style>
</head>
<body>
    <div class="bg-circle circle-1"></div>
    <div class="bg-circle circle-2"></div>
    
    <div class="loading-container">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="loading-text">Pesantren E-Learning</div>
        <div class="loading-subtitle">Sistem Pembelajaran Digital Terintegrasi</div>
        
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        
        <div class="status-info">
            <span>Memuat sistem...</span>
            <span id="progressText">0%</span>
        </div>
        
        <div class="redirect-info">
            <i class="fas fa-arrow-right"></i>
            <span>Mengarahkan ke halaman login</span>
        </div>
        
        <div class="version-info">v2.1.4</div>
    </div>

    <script>
        // simulasi progress loading
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');
        let progress = 0;

        const interval = setInterval(() => {
            progress += 10;
            if (progress > 100) progress = 100;

            progressBar.style.width = progress + '%';
            progressText.innerText = progress + '%';

            if (progress === 100) {
                clearInterval(interval);
                setTimeout(() => {
                    window.location.href = "{{ route('login') }}";
                }, 800); // tunggu 0.8 detik biar smooth
            }
        }, 300);
    </script>

</body>
</html>