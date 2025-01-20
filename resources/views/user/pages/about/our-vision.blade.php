<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Values</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        #core-value {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            text-align: center;
            background-color: #ddd;
            padding: 10px;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #core-value .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        #core-value .grid-item {
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* Add a hover animation for grid items */
        #core-value .grid-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        #core-value .grid-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }

        #core-value .grid-item h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        #core-value .grid-item p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            #core-value .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            #core-value .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

</body>
</html>
