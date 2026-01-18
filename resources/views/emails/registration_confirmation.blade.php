<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 15px;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo {
            max-width: 80px;
            height: auto;
        }

        .data-box {
            background: #ffffff;
            border-left: 5px solid #198754;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .data-row {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .data-label {
            font-weight: bold;
            color: #555;
            min-width: 140px;
            display: inline-block;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #198754;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://diakholmi.hu/img/logo.png" alt="Logo" class="logo">
        </div>
        <h2>Kedves {{ $student->parent_name }}! 👋</h2>

        <p>Örömmel értesítjük, hogy sikeresen fogadtuk <strong>{{ $student->name }}</strong> jelentkezését a
            <span class="highlight">{{ $student->grade }}. osztályos</span> felkészítőnkre!
        </p>

        <p><strong>Mi történik most?</strong></p>
        <ul>
            <li>A regisztrációt rögzítettük a rendszerünkben.</li>
            <li>Kollégánk hamarosan felveszi Önnel a kapcsolatot a további részletekkel
                és a visszaigazolással kapcsolatban.</li>
            <li>Amennyiben bármilyen kérdése lenne, kérjük, jelezze nekünk a <strong><a
                        href="mailto:felkeszitgyor@gmail.com">felkeszitgyor@gmail.com</a></strong> címen!</li>
        </ul>

        <p>Köszönjük a bizalmát!</p>

        <div class="footer">
            <p><strong>Kérdése van? Keress minket bizalommal!</strong></p>
            <a href="https://diakholmi.hu" class="btn">Vissza a weboldalra</a>
            <p><br> © 2026 A Diákholmi Csapata<br>
                <a href="https://diakholmi.hu" style="color: #888;">www.diakholmi.hu</a>
            </p>
        </div>
    </div>
</body>

</html>
