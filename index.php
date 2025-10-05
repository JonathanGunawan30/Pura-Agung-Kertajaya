<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pura Agung Kertajaya</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            background: url('puraAgungKertajaya.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.45);
        }

        h1 {
            position: relative;
            color: #fff;
            font-size: clamp(2rem, 5vw, 4rem);
            text-align: center;
            letter-spacing: 2px;
            z-index: 2;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="overlay"></div>
        <h1>Pura Agung Kertajaya</h1>
    </div>
</body>
</html>
