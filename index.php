<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicaciones Web - MVC</title>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        
        .cards-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .card-image {
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
        }
        
        .ciberseguridad .card-image {
            background-color: #4a6fa5;
            background-image: linear-gradient(135deg, #4a6fa5 0%, #166d67 100%);
        }
        
        .inteligencia .card-image {
            background-color: #8e44ad;
            background-image: linear-gradient(135deg, #8e44ad 0%, #3498db 100%);
        }
        
        .marketing .card-image {
            background-color: #e74c3c;
            background-image: linear-gradient(135deg, #e74c3c 0%, #f39c12 100%);
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-title {
            font-size: 1.5rem;
            margin: 0 0 10px 0;
            color: #333;
        }
        
        .card-description {
            color: #666;
            margin: 0;
            line-height: 1.5;
        }
        
        .icon {
            font-size: 4rem;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Aplicaciones Web - MVC</h1>
    
    <div class="cards-container">
        <!-- Tarjeta de Ciberseguridad -->
        <a href="Ciberseguridad/index.php" class="card ciberseguridad">
            <div class="card-image">
                <i class='icon bx bx-shield-alt'></i>
            </div>
            <div class="card-content">
                <h2 class="card-title">Ciberseguridad</h2>
                <p class="card-description">
                    Explora las mejores prácticas y herramientas para proteger sistemas y redes contra ataques digitales.
                </p>
            </div>
        </a>
        
        <!-- Tarjeta de Inteligencia Artificial -->
        <a href="InteligenciaArtificial/index.php" class="card inteligencia">
            <div class="card-image">
                <i class='icon bx bx-brain'></i>
            </div>
            <div class="card-content">
                <h2 class="card-title">Inteligencia Artificial</h2>
                <p class="card-description">
                    Descubre el mundo de los algoritmos inteligentes y cómo están transformando nuestra sociedad.
                </p>
            </div>
        </a>
        
        <!-- Tarjeta de Marketing Digital -->
        <a href="MarketingDigital/index.php" class="card marketing">
            <div class="card-image">
                <i class='icon bx bx-line-chart'></i>
            </div>
            <div class="card-content">
                <h2 class="card-title">Marketing Digital</h2>
                <p class="card-description">
                    Aprende estrategias efectivas para promocionar productos y servicios en el mundo digital.
                </p>
            </div>
        </a>
    </div>
</body>
</html>