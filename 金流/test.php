<?php
$new_ord_no = "20180604173037";
$all_paid = '10000';
// $ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
$ChkValue=MD5($new_ord_no.'42750898'.$all_paid.'4g54fm67fgvb1j2x8p54d3jq7ergve4c');

//��d�{��  BuySafe
// echo "<form method='post' name='keyinorderm' action='./cart_trade_chk.php?buysafeord=1&errmsg2=' id='keyinorderm'>";
echo "<form method='post' name='keyinorderm' action='https://gomypay.asia/Shopping/creditpay_query.asp' id='keyinorderm' >";
echo "<input type='hidden' name='e_orderno' value='".$new_ord_no."'>";	//�q��s��
echo "<input type='hidden' name='e_url' value='http://localhost/test/test.php'>";	//�^�Ǻ��}
echo "<input type='hidden' name='e_no' value='42750898'>";	//�ө��N��
echo "<input type='hidden' name='e_money' value='".$all_paid."'>";	//������B
echo "<input type='hidden' name='str_check' value='".$ChkValue."'>";	//���ұK�X

echo "<input type='submit'>";

if((isset($_POST['str_ok']))){
echo $_POST['str_ok'];
}


 ?>
