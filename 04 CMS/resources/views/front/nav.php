    <nav class="nav">
        <div class="nav__welcome">
            <div class="nav__welcome__contenedor contenedor">
                <span class="nav__welcome__contenedor--msj">
                    Mensaje de saludo
                </span>
                <div class="nav__welcome__contenedor__access">
                    <?php
                        if(!isset($_SESSION['user_rol'])){
                            ?>
                                <a href="login.php" class="nav__welcome__contenedor__access--account p-1">
                                    <i class="fa-solid fa-right-to-bracket"></i> Login
                                </a>
                                <a href="register.php" class="nav__welcome__contenedor__access--account p-1">
                                    <i class="fa-solid fa-user-plus"></i> Register
                                </a>
                        <?php } else {
                            ?>
                                <a href="#" class="nav__welcome__contenedor__access--account p-1">
                                    <i class="fa-solid fa-user"></i> Bienvenido(a) <?php echo $_SESSION['user_nombres']; ?>
                                </a>
                        <?php }
                    ?>
                    <select class="nav__welcome__contenedor__access--moneda">
                        <option>USD $</option>
                        <option>PEN S/</option>
                    </select>
                    <select class="nav__welcome__contenedor__access--idioma ml-1">
                        <option>English</option>
                        <option>Spanish</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="nav__menu">
            <div class="nav__menu__contenedor contenedor">
                <img src="img/logo2.png" alt="Jobaria Logo">
                <a class="nav__menu__contenedor--iconMenu" href="#">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <div class="nav__menu__contenedor__right">
                    <ul class="nav__menu__contenedor__right__box">
                        <li class="nav__menu__contenedor__right__box__item">
                            <a href="#" class="nav__menu__contenedor__right__box__item--link">
                                home
                            </a>
                        </li>
                        <li class="nav__menu__contenedor__right__box__item">
                            <a href="#" class="nav__menu__contenedor__right__box__item--link">
                                shop
                            </a>
                        </li>
                        <li class="nav__menu__contenedor__right__box__item">
                            <a href="#" class="nav__menu__contenedor__right__box__item--link">
                                blog
                            </a>
                        </li>
                        <li class="nav__menu__contenedor__right__box__item">
                            <a href="#" class="nav__menu__contenedor__right__box__item--link">
                                pages
                            </a>
                        </li>
                        <li class="nav__menu__contenedor__right__box__item">
                            <a href="#" class="nav__menu__contenedor__right__box__item--link">
                                contact
                            </a>
                        </li>
                        <?php
                            if(isset($_SESSION['user_rol']) && $_SESSION['user_rol'] == 'admin'){
                                ?>
                                    <li class="nav__menu__contenedor__right__box__item">
                                        <a href="admin" class="nav__menu__contenedor__right__box__item--link">
                                            ADMIN
                                        </a>
                                    </li>
                            <?php }
                        ?>
                    </ul>
                    <a href="#" class="nav__menu__contenedor__right__cart">
                        <div class="nav__menu__contenedor__right__cart--box">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>2</span>
                        </div>
                        <span class="nav__menu__contenedor__right__cart--title">
                            My Cart
                        </span>
                        <span class="nav__menu__contenedor__right__cart--price">
                            S/ 54.99
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav__search">
            <div class="nav__search__contenedor contenedor">
                <div class="nav__search__contenedor__categoria">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <span class="ml-1 mr-2">shop by categories</span>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <form class="nav__search__contenedor__form pr-2">
                    <input type="text" placeholder="Enter your search key ...">
                    <select>
                        <option value="">All Categories</option>
                    </select>
                    <i class="fa-solid fa-angle-down mr-5"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
                <aside class="nav__search__contenedor__phone">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span>(080) 123 4567 890</span>
                </aside>
            </div>
        </div>
    </nav>