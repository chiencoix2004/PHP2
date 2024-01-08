<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
$array4 = [
    ['name'=> 'Nguyễn Văn A', 'age'=> 35],
    ['name'=> 'Nguyễn Văn A', 'age'=> 28],
    [
        'name'=>'Nguyễn Văn C',
        'age'=> 96,
        'points'=>[
            'Web2'=>10,
            'PHP2'=>9
        ]
        ],
        ];
    ?>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Points</th>
        </tr>
        <?php
        foreach($array4 as $item):
        ?>
        <tr>
            <td><?=$item['name'] ?></td>
            <td><?=$item['age'] ?></td>
            <td>
                <?php if(isset($item['points'])):?>
                <ul>
                    <?php foreach($item['points'] as $subject => $point):?>
                    <li><?=$subject . ': ' . $point ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>