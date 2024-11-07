<?php
$cookie_duration = 120; 


if (isset($_POST['cor_fundo'])) {
    setcookie('cor_fundo', $_POST['cor_fundo'], time() + $cookie_duration, '/');
    $cor_fundo = $_POST['cor_fundo'];
} elseif (isset($_COOKIE['cor_fundo'])) {
    $cor_fundo = $_COOKIE['cor_fundo'];
} else {
    $cor_fundo = '#ffffff'; 
}


if (isset($_POST['tamanho_fonte'])) {
    setcookie('tamanho_fonte', $_POST['tamanho_fonte'], time() + $cookie_duration, '/');
    $tamanho_fonte = $_POST['tamanho_fonte'];
} elseif (isset($_COOKIE['tamanho_fonte'])) {
    $tamanho_fonte = $_COOKIE['tamanho_fonte'];
} else {
    $tamanho_fonte = '16px'; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio</title>
    <style>
       
        :root {
            --fundo-claro: #ffffff;
            --fundo-escuro: #1C1C1C;
            --texto-claro: #000000;
            --texto-escuro: #FFC0CB;
            --botao-claro: #4CAF50;
            --botao-escuro: #FA8072;
        }

     
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo $cor_fundo == '#ffffff' ? 'var(--fundo-claro)' : 'var(--fundo-escuro)'; ?>;
            color: <?php echo $cor_fundo == '#ffffff' ? 'var(--texto-claro)' : 'var(--texto-escuro)'; ?>;
            padding: 20px;
            margin: 0;
            font-size: <?php echo $tamanho_fonte; ?>;
            transition: background-color 0.3s ease, color 0.3s ease, font-size 0.3s ease;
        }


        .container {
            text-align: center;
            margin-top: 50px;
        }

 
        h1 {
            font-size: 36px;
            color: inherit;
        }

     
        select {
            font-size: 18px;
            padding: 10px;
            margin: 20px;
            width: 160px;
            border-radius: 4px;
            border: 1px solid #ccc;
            background-color: <?php echo $cor_fundo == '#ffffff' ? '#f0f0f0' : '#444'; ?>;
            color: <?php echo $cor_fundo == '#ffffff' ? '#000' : '#fff'; ?>;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

 
        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: <?php echo $cor_fundo == '#ffffff' ? 'var(--botao-claro)' : 'var(--botao-escuro)'; ?>;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


        button:hover {
            background-color: <?php echo $cor_fundo == '#ffffff' ? '#45a049' : '#4CAF50'; ?>;
        }

        
        .P p {
            font-size: <?php echo $tamanho_fonte; ?>; 
            line-height: 1.6;
            margin-top: 20px;
            color: inherit;
            text-align: justify;
            margin-left: 300px;
            margin-right: 300px;
        }

        img {
            width: 700px;
            margin-left: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rock In Rio</h1>
        
      
        <form method="post">
            <label for="cor_fundo">Cor de fundo:</label>
            <select name="cor_fundo" id="cor_fundo">
                <option value="#ffffff" <?php if ($cor_fundo == '#ffffff') echo 'selected'; ?>>Modo Claro</option>
                <option value="#000000" <?php if ($cor_fundo == '#000000') echo 'selected'; ?>>Modo Escuro</option>
            </select>
            
        
            <label for="tamanho_fonte">tamanho da fonte:</label>
            <select name="tamanho_fonte" id="tamanho_fonte">
                <option value="14px" <?php if ($tamanho_fonte == '14px') echo 'selected'; ?>>Pequeno</option>
                <option value="16px" <?php if ($tamanho_fonte == '16px') echo 'selected'; ?>>Médio</option>
                <option value="18px" <?php if ($tamanho_fonte == '18px') echo 'selected'; ?>>Grande</option>
            </select>
            
            <button type="submit">Aplicar Preferências</button>
        </form>
    </div>

    <div class="P">
        <p>O Rock in Rio é um festival de música idealizado pelo empresário brasileiro Roberto Medina pela primeira vez em 1985. É reconhecido como um dos maiores festivais musicais do planeta. Foi originalmente organizado no Rio de Janeiro, de onde vem o nome. Tornou-se um evento de repercussão em nível mundial e teve em 2004 sua primeira edição fora do Brasil, em Lisboa, Portugal.</p>
        <p>Ao longo da sua história, o Rock in Rio teve 22 edições, nove no Brasil, nove em Portugal, três na Espanha e uma nos Estados Unidos. Em 2008, foi realizado pela primeira vez em dois locais diferentes, Lisboa e Madrid. Além destas, duas edições foram canceladas: Madrid e Buenos Aires, ambas programadas para 2014.</p>
        <p>O hino do festival é de autoria do compositor Nelson Wellington e do maestro Eduardo Souto Neto e foi gravado originalmente pelo grupo Roupa Nova. O festival é considerado o oitavo melhor do mundo pelo site especializado Festival Fling. Desde sua 4ª edição no Brasil, o festival costuma ocorrer bianualmente no início da primavera em seu país de origem (Brasil). A última edição do festival ocorreu em 2022 no Parque Olímpico do Rio de Janeiro.</p>
        <img src="imgro.jpg" alt="Imagem do Rock in Rio">
    </div>
</body>
</html>
