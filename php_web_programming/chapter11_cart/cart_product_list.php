<html>

<body>
<p><font size="6">과일 목록</font></p>
<p><a href="cart.php">To 쇼핑카트</a></p>
<table width="420" border="1" cellpadding="1">
    <tr align="center">
        <td width="200">이름</td>
        <td width="80">가격</td>
        <td width="140">수량</td>
    </tr>

    <?php
    include("./cart_product.inc");
//    $fruit = array(
//        "사과" => 10,
//        "배" => 20,
//        "복숭아" => 30,
//        "수박" => 40,
//        "감" => 50,
//        "토마토" => 60,
//        "바나나" => 70,
//        "키위" => 80,
//        "파인애플" => 90,
//        "대추" => 100
//    );

    //  while (list($name, $price) = each($fruit)) {
    foreach ($fruit as $name => $price) {
        ?>
        <form name="insert_form" method="post" action="./cart.php?code=insert&name=<?= $name ?>">
            <tr>
                <td width="200"> <?= $name ?></td>
                <td width="80" align="right"><?= $price ?>원</td>
                <td width="140">수량
                    <select name="amount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" value="선택" name="submit">
                </td>
            </tr>
        </form>

        <?php
    }

    ?>


</table>

</body>


</html>