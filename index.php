<?php
class User {
    public $name = "Doraemon";
}
$foo = new User;
$foo = json_encode($foo);
var_dump($foo);
?>


<script>
    let bar = JSON.parse('<?= $foo ?>');
    console.log('typeof: ' + typeof bar);

    for (let key in bar) {
        console.log(key + ': ' + bar[key]);
    }
</script>