<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assassins Creed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="container ">
        <?php
        // echo '<h1> Aqui estou usando o comando echo </h1>';
        $nome = 'AC Shadows';
        $lancamento = 2001;
        $valor = 349.49;
        $ehOnline = false;


        if ($lancamento > 2020) {
            echo '<h1>O jogo é recente</h1>';
        } else if ($lancamento > 2010) {
            echo '<h1>Jogo da época de ouro</h1>';
        } else {
            echo '<h1>jogo velho</h1>';
        }

        // echo $nome;
        // echo $lancamento;
        // echo $valor;
        // echo $ehOnline;
        echo 'o nome do jogo é ' . $nome . ', foi lançado em' . $lancamento . ', como o valor de ' . $valor;
        echo '<br>';
        echo "o nome do jogo é {$nome}, foi lançado em {$lancamento}, como o valor de {$valor}";
        echo '<br>';
        echo 'o nome do jogo é $nome, foi lançado em $lancamento, como o valor de $valor';

        //matriz
        $matriz = [
            ['Yaya',        'nivel 4',  'companheira'],
            ['Ibuki',       'nivel 4',  'companheira'],
            ['Oni-yuri',    'nivel 4',  'companheira'],
            ['Gennojo',     'nivel 10', 'vilão'],
            ['Yagoro',      'nivel 10', 'vilão'],
            ['Katsuhime',   'nivel 10', 'vilão'],
            ['Rufino',      'nivel 10', 'vilão'],
            ['Naoe',        'nivel 3',  'principal'],
            ['Yasuke',      'nivel 3',  'principal']
        ];




        ?>
        <h1>Assassins Creed</h1>
        <hr>
        <div class="text-center">
            <img src="./img/naoe.jpg" alt="Naoe">
            <img src="./img/yasuke.jpg" alt="Yasuke">
        </div>
        <p class="mt-3">
            Assassin's Creed Shadows é um jogo de ação e aventura ambientado no Japão feudal, com lançamento previsto para 20 de março de 2025. O jogo permite que os jogadores vivenciem a história através dos olhos de dois personagens distintos: Naoe, uma shinobi habilidosa e furtiva, e Yasuke, um poderoso samurai. O jogo promete uma exploração de mundo aberto com climas imprevisíveis e mudanças de estação, além de estilos de jogo complementares que podem ser combinados para diversas abordagens de missões.
        </p>
        <hr>
        <!-- tabela !! -->
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nivel</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($matriz); $i++) { ?>
                    <tr>
                        <td> <?= $matriz[$i][0] ?></td>
                        <td> <?= $matriz[$i][1] ?></td>
                        <td> <?= $matriz[$i][2] ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>
</body>

</html>