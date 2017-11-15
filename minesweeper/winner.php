<?php
$name=$_GET["wname"];
$Score=$_GET["time"];

$Connection=mysql_connect('localhost','root','');
 $ConnectingDB=mysql_select_db('minesweeper',$Connection);
 $Query="INSERT INTO winners(wname,score) VALUES ('$name','$Score')";
$Execute=mysql_query($Query);
?>
<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Winner page</title>
</head>
<body>
<div>
    <label>your score</label>
    <textarea disabled><?php echo $Score; ?></textarea>
    </div>
<div>
    <h2>Score board</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php
        $Connection=mysql_connect('localhost','root','');
             $ConnectingDB=mysql_select_db('minesweeper',$Connection);
             
             $ViewQuery="SELECT * FROM scoredata ORDER BY score DESC";
             $Execute=mysql_query($ViewQuery);
             While($datarows=mysql_fetch_array($Execute)){
                $name=$datarows["wname"];
                 $name=$datarows["score"];
        ?>
        <tr>
        <td><?php $name; ?>
            </td>
        <td><?php $score; ?>
            </td>
        </tr>
<?php } ?>
    </table>
    </div>

</body>
</html>