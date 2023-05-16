<?php
require './now.php';
require './lifegame_logic.php';

// TODO: $_GET を外から渡す
list($g, $b, $s) = run_lifegame();
?>
<!doctype html>
<head>
    <title>LIFEGAME</title>
</head>
<body>
<h3 class="generation">GENERATION: <?php echo htmlspecialchars($g) ?></h3>
<table class="board">
    <?php foreach ($b as $cs): ?>
        <tr>
            <?php foreach ($cs as $c): ?>
                <td>
                    <?php echo htmlspecialchars($c) ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/lifegame.php?g=<?php echo rawurldecode($g + 1) ?>&prev=<?php echo rawurldecode($s) ?>">NEXT GENERATION</a>
<br/>
<?php echo htmlspecialchars($tstp) ?>
</body>
