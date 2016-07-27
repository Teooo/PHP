<html>
<head>
    <title>Word Mapping</title>
</head>
<body>
<main>
<form action="" method="GET">
    <textarea name="words"></textarea><br>
    <input type="submit">
</form>
<?php if(isset($words)) : ?>
    <table>
        <tbody>
            <?php foreach($words as $word => $count) : ?>
        <tr>
            <td><?=htmlspecialchars($word)?></td>
            <td><?=$count?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</main>
</body>
</html>
<?php
if(isset($_GET['words'])){
    $allWords=preg_split('/W+/',$_GET['words'],null,PREG_SPLIT_NO_EMPTY);
    $words=[];
    foreach($allWords as $word){
        if(!isset($words[strtolower($word)] )){
            $words[strtolower($word)] = 0;
        }
        $words[strtolower($word)]++;
    }
    rsort($words);
}