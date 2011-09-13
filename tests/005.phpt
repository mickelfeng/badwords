--TEST--
Do case-insensitive replacement
--SKIPIF--
<?php if (!extension_loaded("boxwood")) print "skip"; ?>
--FILE--
<?php 
$r = boxwood_new(false);
$a = boxwood_add_text($r, "Monkey");
$b = boxwood_add_text($r, "salad");
$c = boxwood_replace_text($r, "My monkey ate some Salad today.","!");
print $c;
?>
--EXPECT--
My m!!!!! ate some S!!!! today.