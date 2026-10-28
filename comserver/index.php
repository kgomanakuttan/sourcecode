<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daivadasakam - Coming Soon</title>
  <!-- Google Fonts & Font Awesome -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    :root {
      --bg-dark: #0a0b0d;
      --card-bg: rgba(20, 22, 28, 0.75);
      --card-border: rgba(234, 179, 8, 0.25);
      --accent-gold: #eab308;
      --accent-gold-glow: rgba(234, 179, 8, 0.4);
      --text-primary: #f8fafc;
      --text-secondary: #94a3b8;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--bg-dark);
      color: var(--text-primary);
      font-family: 'Manrope', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
      overflow-x: hidden;
      position: relative;
    }

    /* Ambient Background Glow */
    .bg-glow {
      position: absolute;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(234, 179, 8, 0.15) 0%, rgba(0, 0, 0, 0) 70%);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 0;
      pointer-events: none;
    }

    /* Audio Banner */
    .audio-banner {
      position: fixed;
      top: 1rem;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(234, 179, 8, 0.15);
      border: 1px solid var(--accent-gold);
      backdrop-filter: blur(10px);
      color: #fef08a;
      padding: 0.6rem 1.2rem;
      border-radius: 50px;
      font-size: 0.85rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      cursor: pointer;
      z-index: 100;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    }

    .audio-banner:hover {
      background: rgba(234, 179, 8, 0.25);
      transform: translateX(-50%) scale(1.02);
    }

    /* Main Glass Card */
    .main-card {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 580px;
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      backdrop-filter: blur(16px);
      border-radius: 24px;
      padding: 2.5rem 2rem;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
      text-align: center;
    }

    /* Gurudevan Portrait */
    .portrait-wrapper {
      position: relative;
      width: 160px;
      height: 160px;
      margin: 0 auto 1.5rem auto;
      border-radius: 50%;
      padding: 5px;
      background: linear-gradient(135deg, var(--accent-gold), rgba(234, 179, 8, 0.2));
      box-shadow: 0 0 25px var(--accent-gold-glow);
    }

    .portrait-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      display: block;
    }

    h1 {
      font-family: 'Cinzel', serif;
      font-size: 1.8rem;
      color: var(--accent-gold);
      letter-spacing: 1px;
      margin-bottom: 0.5rem;
    }

    .subtitle {
      color: var(--text-secondary);
      font-size: 0.95rem;
      margin-bottom: 1.5rem;
      letter-spacing: 0.5px;
    }

    /* Embedded Video Player Container */
    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
      height: 0;
      overflow: hidden;
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      margin-bottom: 2rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Countdown Timer */
    .countdown-title {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: var(--text-secondary);
      margin-bottom: 1rem;
    }

    .timer-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.75rem;
      margin-bottom: 2rem;
    }

    .timer-box {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      padding: 0.75rem 0.5rem;
    }

    .timer-val {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-primary);
    }

    .timer-unit {
      font-size: 0.65rem;
      color: var(--text-secondary);
      text-transform: uppercase;
      margin-top: 0.2rem;
    }

    /* Subscription Form */
    .notify-form {
      display: flex;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .notify-input {
      flex: 1;
      background: rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 30px;
      padding: 0.75rem 1.25rem;
      color: #fff;
      font-size: 0.9rem;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .notify-input:focus {
      border-color: var(--accent-gold);
    }

    .notify-btn {
      background: var(--accent-gold);
      color: #000;
      font-weight: 600;
      border: none;
      border-radius: 30px;
      padding: 0.75rem 1.5rem;
      cursor: pointer;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .notify-btn:hover {
      background: #fde047;
      transform: translateY(-1px);
    }

    /* Footer */
    .footer-text {
      font-size: 0.8rem;
      color: var(--text-secondary);
    }

    @media (max-width: 480px) {
      .main-card {
        padding: 1.8rem 1.2rem;
      }
      h1 {
        font-size: 1.5rem;
      }
      .notify-form {
        flex-direction: column;
      }
      .notify-btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="bg-glow"></div>

  <!-- Audio Prompt Banner -->
  <div class="audio-banner" id="audioBanner" onclick="enableAudio()">
    <i class="fa-solid fa-volume-high"></i>
    <span>Click anywhere to enable music playback</span>
  </div>

  <div class="main-card">
    <!-- Gurudevan Photo -->
    <div class="portrait-wrapper">
      <img src="https://images.saatchiart.com/saatchi/695576/art/12252723/11314921-QEWHUHAX-7.jpg" alt="Sree Narayana Guru" class="portrait-img">
    </div>

    <h1>Sree Narayana Gurudevan</h1>
    <p class="subtitle">Daivadasakam • Coming Soon</p>

    <!-- YouTube Video Player -->
    <div class="video-container">
      <iframe 
        id="ytPlayer"
        src="https://www.youtube.com/embed/7xsv0lUilzQ?enablejsapi=1&autoplay=1&mute=1&controls=1&rel=0" 
        title="Daivadasakam Parayanam" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>

    <!-- Countdown Timer -->
    <div class="countdown-title">Launching In</div>
    <div class="timer-grid">
      <div class="timer-box">
        <div class="timer-val" id="days">00</div>
        <div class="timer-unit">Days</div>
      </div>
      <div class="timer-box">
        <div class="timer-val" id="hours">00</div>
        <div class="timer-unit">Hours</div>
      </div>
      <div class="timer-box">
        <div class="timer-val" id="mins">00</div>
        <div class="timer-unit">Mins</div>
      </div>
      <div class="timer-box">
        <div class="timer-val" id="secs">00</div>
        <div class="timer-unit">Secs</div>
      </div>
    </div>

    <!-- Email Signup -->
    <form class="notify-form" onsubmit="handleNotify(event)">
      <input type="email" class="notify-input" placeholder="Enter your email address" required>

      <button type="submit" class="notify-btn">Notify Me</button>
    </form>

    <div class="footer-text">
      © 2026 Sree Narayana Gurudevan Digital Initiative
    </div>
  </div>

  <script>
    //