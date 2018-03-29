<?php
$dom=new DOMDocument("1.0","utf-8");
$A=$dom->createElement("A");
$dom->appendChild($A);

$B=$dom->createElement("B","ABCD");
$A->appendChild($B);

$ds=$dom->createAttribute("ds");
$B->appendChild($ds);

$vds=$dom->createTextNode("100");
$ds->appendChild($vds);

$C=$dom->createElement("C");
$A->appendChild($C);

$vC=$dom->createCDATASection("DEFI");
$C->appendChild($vC);

$D=$dom->createElement("D","BCDEF");
$A->appendChild($D);

$dom->save("test.xml");
echo "Tao xml thanh cong";
?>