<?php 
    // var_dump($this->sprints);
    var_dump($this->sprint);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../views/css/dashboard.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        
        <form class="search-form" action="dashboard" method="post">
             <select id="sprint" name="sprint" title="sprints">
            <?php
                $SPRINTS = [
                    ['desc' => 'Sprint 1 - Credenciamento', 'start' => '2024-03-22', 'end' => '2024-04-05'],
                    ['desc' => 'Sprint 2 - Correções e Ajustes', 'start' => '2024-04-10', 'end' => '2024-04-18'],
                    ['desc' => 'Sprint 3 - Inscrição, Submissão e Homologação', 'start' => '2024-04-22', 'end' => '2024-05-17'],
                    ['desc' => 'Sprint 4 - Ajustes para Implantação', 'start' => '2024-05-20', 'end' => '2024-06-07'],
                ];

                foreach ($SPRINTS as $index => $sprint) {
                    $description = $sprint['desc'] . ' (' . $sprint['start'] . ' a ' . $sprint['end'] . ')';
                    echo "<option value='$index'>$description</option>";
                }
            ?>
            </select>            
            <input type="submit" value="Buscar">
        </form>
        
        <div class="results">
            <div class="result-item">
                <h4>Resultado 1</h4>
                <p>Descrição do resultado 1...</p>
            </div>
            <div class="result-item">
                <h4>Resultado 2</h4>
                <p>Descrição do resultado 2...</p>
            </div>
        </div>
        <div class="results">
            <div class="result-item">
                <h4>Dashboard 3</h4>
                <p>Descrição....</p>
            </div>
        </div>
    </div>
</body>
</html>
