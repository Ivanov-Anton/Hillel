<?php
session_start();
/**
 * AddUserCartModule v1.0
 * @file cart_add Файл cart_add.php проверяет, указан ли POST параметр buy_item и если он указан:
 * 1. определяем количество товара,
 * 2. если пользователь новый создать супер гл., переменную user_cart и просто добавить в нее порядковый номер товара и кол-во мимо поиска
 * 3. если не новый пользователь то кажды рас проверяем на дубликаты товаров в корзине и добавляем товары в корзину
*/
if (isset($_POST['by_item'])) {
	$id_tovar = $_POST['by_item'];	
    // @var tovar_count =  если НЕ указано кол-во then 1 иначе присвоить кол-во              
    $tovar_count = empty($_POST['count']) ? 1 : $_POST['count'];
	// Флаг об успешном добавлении товара
    $isAddTovar = false;
    // Флаг дубликата товаров в корзине
    $isTovarExist = false; 
    
    /* Если переменная USER-CART пустая или не существует значит
    Новый покупатель и первый товар в корзине.
    Создать переменную и присвоить ей пустой массив
    */ 
    if (empty($_SESSION['user_cart'])) {
        $_SESSION['user_cart'] = [];
        // пропустить поиск и добавить товар
        goto addNewTovar;
    }
    // ------------------------------------------------------
    // поиск существующих заказов в корзине товаров 
    $saveNomTovarExist = 0;
    foreach ($_SESSION['user_cart'] as $key => $tovarItem) {
        if ($_SESSION['user_cart'][$key][0] == $id_tovar) {
            // сохранить место совпадение 
            $saveNomTovarExist = $key;
            $isTovarExist = true;
        }
    }
    // ------------------------------------------------------
    if ($isTovarExist) {
        $_SESSION['user_cart'][$saveNomTovarExist][1] += $tovar_count;
        $isAddTovar = true;        
    } elseif (empty($isTovarExist)) {
        addNewTovar:
        // *** НОВЫЙ ТОВАР ***
        $_SESSION['user_cart'][] = [$id_tovar, $tovar_count];
        // товар успешно добавлен как новый
        $isAddTovar = true;
    }
} // END (isset($_POST['by_item']))
header('Location: index.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Card add</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
<div class="container">
    <div class="navbar navbar-dark bg-dark navbar-expand">
        <a href="index.php" class="navbar-brand">
            Logo
        </a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav col-12">
                <li class="navbar-item">
                    <a href="index.php" class="nav-link active">Главная</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <a href="index.php" class="btn btn-info">Вернуться назат в магазин</a>
    <?php if ($isAddTovar): ?>
        <div class="text-center alert alert-success" role="alert">Товар успешно добавлен в корзину</div>
    <?php endif;  ?>
    <img src="img/supermarket.jpg" alt="" width="100%">
</div>

</body>
</html>