    <div class="main-header__container container">
        <h1 class="visually-hidden">YetiCave</h1>
        <a class="main-header__logo" href="index.php" >
            <img src="img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
        </a>
        <form class="main-header__search" method="get" action="add.php">
            <input type="search" name="search" placeholder="Поиск лота">
            <input class="main-header__search-btn" type="submit" name="find" value="Найти">
        </form>
        <a class="main-header__add-lot button" href="add.php">Добавить лот</a>

        <nav class="user-menu">
            <?php if ($is_auth == true): ?>
               <div class="user-menu__image">
                   <img src="<?=$user_avatar; ?>" width="40" height="40" alt="Пользователь">
               </div>
               <div class="user-menu__logged">
                   <p></p>
               </div>
            <?php else: ?>
                <ul class="user-menu__list">
                    <li class="user-menu__item">
                        <a href="#">Вход</a>
                    </li>
                </ul>
            <?php endif; ?>

        </nav>
    </div>