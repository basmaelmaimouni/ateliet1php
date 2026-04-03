<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - <?php echo $groupe; ?></title>
    <style>
        /* الأساسيات */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* الهيدر */
        header {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            width: 100%;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        h1 { margin: 0; font-size: 2.5rem; letter-spacing: 2px; }

        /* حاوية المحتوى */
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 80%;
            max-width: 800px;
            text-align: center;
        }

        h2 { color: #555; font-weight: 400; }
        
        /* الرابط */
        .btn-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn-link:hover {
            background-color: #218838;
            transform: translateY(-3px);
        }

        /* منطقة الـ PHP (المثلث مثلاً) */
        .php-output {
            margin-top: 30px;
            padding: 20px;
            background: #272822;
            color: #a6e22e;
            border-radius: 8px;
            font-family: 'Courier New', Courier, monospace;
            text-align: left;
            display: inline-block;
        }
    </style>
</head>
<body>

    <header>
        <h1>WELCOME TO MY PORTFOLIO</h1>
    </header>

    <div class="container">
        <?php
        include_once 'traitements.php';
        $groupe = "dev101";
        $plt = "vercel";

        echo "<h2>Premier site de <strong>$groupe</strong> sur <span style='color:#007bff'>$plt</span> !!!</h2>";
        
        // الرابط بشكل زر
        echo "<a href='/Compte Rendu Atelier 1.pdf' class='btn-link'>Voir Atelier 1 (PDF)</a>";
        ?>

        <div class="php-output">
            <h4 style="color: white; border-bottom: 1px solid #444; padding-bottom: 5px;">Output du Triangle :</h4>
            <?php triangle(10); ?>
        </div>
    </div>

</body>
</html>