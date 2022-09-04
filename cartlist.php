<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
    <?php 
    class Obj_list
    {
        public $_id , $_name ,$_price ,$_img ; 
        public function __construct ($id,$name,$price,$img)
        {
            $this ->_id = $id; 
            $this ->_name = $name;
            $this ->_price = $price;  
            $this ->_img = $img; 
        }
    }


    $cart1 = new Obj_list(1,"Boncafe Espresso Ground Coffee",100,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-Boncafe-Espresso-Ground-Coffee.jpg');
    $cart2 = new Obj_list(2,"Doi Chang",100,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-Doi-Chang-Professional-Ground-CoffeeMedium-to-Dark.jpg');
    $cart3 = new Obj_list(3,"DoiTung Drip Coffee Medium Roast",150,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-DoiTung-Drip-Coffee-Medium-Roast.jpg');
    $cart4 = new Obj_list(4,"Mezzo Coffee Bean",200,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-Mezzo-Coffee-Bean.jpg');
    $cart5 = new Obj_list(5,'SUZUKI COFFEE Premium Blend',200,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F%E0%B8%84%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9A%E0%B8%94-SUZUKI-COFFEE-Premium-Blend-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%A1.jpg');
    $cart6 = new Obj_list(6,'Phou phieng Drip Coffee 100% Premium Arabica',150,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-PhouphiengDrip-Coffee-100-Premium-Arabica.jpg');
    $cart7 = new Obj_list(7,'Espresso Pure by NLCOFFEE',180,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-Espresso-Pure-by-NLCOFFEE.jpg');
    $cart8 = new Obj_list(8,'Craze Cafe Single Origin',170,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F%E0%B8%9E%E0%B8%A3%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A1-Craze-Cafe-Single-Origin.jpg');
    $cart9 = new Obj_list(9,'ILLY Classico Roasted Ground Coffee 100%',100,'https://www.top10.in.th/wp-content/uploads/2020/09/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F-ILLY-Classico-Roasted-Ground-Coffee-100.jpg');
    $cart10 = new Obj_list(10,'Dao Coffee Arabica Premium',115,'https://www.top10.in.th/wp-content/uploads/2021/01/Dao-Coffee-Arabica-Premium-Whole-Beans-Coffee.jpg');

    $array_cart = array($cart1,$cart2,$cart3,$cart4,$cart5,$cart6,$cart7,$cart8,$cart9,$cart10);
    
    echo '<table width="100%"  border="0">';
    for($i=0; $i<10;  $i++)

    {
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);

        echo'

        <tr>
        <td> <p style="color:rgb('.$r.', '.$g.', '.$b.')">'.$array_cart[$i]->_name.'</td>
        <td>'.$array_cart[$i]->_price.'</td>
        <td> <img src ='.$array_cart[$i]->_img.'></td>
      </tr>
        ';

    }

    echo '</table>';
    

?>


    
</body>
</html>