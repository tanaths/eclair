<?php
for($b=10; $b>0; $b--){
    for($c=10; $c>$b; $c--){
    echo "*";
    }
    
    echo "<br>";
}
?>

<?php
/*for($b=1; $b<=10; $b++){
    for($c=1; $c<=10; $c++){
    echo "*";
    }
    
    echo "<br>";
} */
?>

<?php
for($a=10; $a>0; $a--){
    for($b=1; $b<=$a; $b++){ //spasi
        echo "_";
    }
    for($c=10; $c>$a; $c--){ //bintang
        echo "*";
    }
    echo "<br>";
}
echo"<br>";
?>

<?php
for($a=10;$a>0;$a--){
    for($b=1; $b<$a; $b++){
        echo "_";
    }
    for($c=10; $c>=$a; $c--){
        echo "*";
    }
    for($d=9; $d>$a-1; $d--){
        echo "*";
    }
    echo "<br>";
}
?>

