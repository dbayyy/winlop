<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Es Krim Spesial</title>
  <style>
    body {
      background: linear-gradient(to right, #e0f7fa, #ffe0f0);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      text-align: center;
      max-width: 700px;
      width: 100%;
      animation: fadeIn 1.2s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    h1 {
      color: #ff4081;
      margin-bottom: 30px;
      font-size: 2em;
    }

    .icecream {
      width: 200px;
      height: 300px;
      position: relative;
      margin: 0 auto 20px auto;
      cursor: pointer;
      animation: popUp 1s ease-in-out;
    }

    @keyframes popUp {
      0% { transform: translateY(100px) scale(0.8); opacity: 0; }
      100% { transform: translateY(0) scale(1); opacity: 1; }
    }

    .scoop {
      width: 200px;
      height: 150px;
      background: #ffc1cc;
      border-radius: 100px 100px 60px 60px;
      position: absolute;
      top: 0;
      z-index: 2;
      box-shadow: inset 0 -10px 0 #f48fb1;
    }

    .face {
      position: absolute;
      top: 40px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 40px;
    }

    .cone {
      width: 0;
      height: 0;
      border-left: 100px solid transparent;
      border-right: 100px solid transparent;
      border-top: 160px solid #f4a460;
      position: absolute;
      top: 140px;
      z-index: 1;
    }

    p {
      font-size: 18px;
      color: #333;
    }

    @media (max-width: 768px) {
      .icecream {
        width: 150px;
        height: 230px;
      }

      .scoop {
        width: 150px;
        height: 110px;
      }

      .cone {
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 120px solid #f4a460;
        top: 110px;
      }

      .face {
        font-size: 30px;
        top: 30px;
      }

      h1 {
        font-size: 1.6em;
      }

      p {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .icecream {
        width: 120px;
        height: 190px;
      }

      .scoop {
        width: 120px;
        height: 90px;
      }

      .cone {
        border-left: 60px solid transparent;
        border-right: 60px solid transparent;
        border-top: 100px solid #f4a460;
        top: 90px;
      }

      .face {
        font-size: 24px;
        top: 25px;
      }

      h1 {
        font-size: 1.4em;
      }

      p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Buat kamu 🍦</h1>

    <div class="icecream" id="icecream">
      <div class="scoop">
    
      </div>
      <div class="cone"></div>
    </div>

    <p>ICE CREAM YANG ORI NYUSUL HIHI</p>
  </div>
</body>
</html>
