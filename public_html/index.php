<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head><title>mit3d.cz - zakázkový 3D tisk</title></head>
      <style>
        /* CSS styl vložím přímo sem pro rychlou ukázku */
        :root {
            --primarni-barva: #3498db;
            --text-barva: #333;
            --pozadi-barva: #f4f4f4;
        }

        /* Moderní Reset - aby vše sedělo */
        * {
            box-sizing: border-box; /* */
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-barva);
            background-color: var(--pozadi-barva);
        }

        /* Layout pomocí Flexboxu/Gridu */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: var(--primarni-barva);
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        main {
            padding: 2rem 0;
            min-height: 80vh;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* */
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        footer {
            text-align: center;
            padding: 2rem;
            background: #222;
            color: white;
        }
    </style>
<body>
    <header>
        <div class="container">
            <h1>mit3d.cz</h1>
        </div>
    </header>

    <main class="container">
        <section>
            <h2>mit3d.cz</h2>
            <p>Michal Šiman</p>
        </section>

        <div class="card-grid">
            <div class="card"><h3>3D tisk</h3><p>Zakázkový multimateriálový tisk.</p></div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Michal Šiman - mit3d.cz :: Všechna práva vyhrazena.</p>
    </footer>
</body>
</html>

<?php

echo "";
