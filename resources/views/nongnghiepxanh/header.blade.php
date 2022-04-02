<header class="header">
    <div class="container">
        <div class="header__top">
            <div class="header__logo logo logo--small">
                <a href="/">
                    <img src="/admintemplate/img/logo.png" alt="logo" class="header__img" />
                    <span><strong>Nông Nghiệp Xanh</strong></span>
                </a>
            </div>
            <div class="header__search">
                <form class="header__form">
                    <input class="header__input" type="text" placeholder="Tìm kiếm tin tức" />
                    <button class="header__btn btn btn--small btn--primary"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="header__control logged-in">
                @if(Auth::guard('user')->check())
                <div class="header__profile">
                    <div class="header__avt">
                        <button class="avatar btn">
                            <img src="{{Auth::guard('user')->user()->user_avatar}}" alt="avt" />
                        </button>
                    </div>
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="./profile.html" class="header__link"><i class="fas fa-user-circle"></i>Trang cá nhân</a>
                        </li>
                        <li class="header__item">
                            <a href="./info.html" class="header__link"><i class="fas fa-user"></i>Tài khoản của tôi</a>
                        </li>
                        <li class="header__item">
                            <a href="./post.html" class="header__link"><i class="fas fa-edit"></i>Viết bài</a>
                        </li>
                        <li class="header__item">
                            <a href="/log-out" class="header__link"><i class="fas fa-power-off"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </div>

                @else
                <a href="/sign-up" class="link link--regular">Đăng ký</a>
                <span style="padding: 0 6px;"> | </span>
                <a href="/sign-in" class="link link--regular">Đăng nhập</a>
                @endif

                <!-- <div class="header__auth">
                   
               </div> -->


            </div>




        </div>
        <nav class="header__nav nav">
            <a href="#" class="nav__link link link--regular link--bold active"><i class="link__icon fas fa-home"></i></a>
            <a href="./category.html" class="nav__link link link--regular link--bold">Nông nghiệp 4.0</a>
            <a href="#" class="nav__link link link--regular link--bold">Thời tiết & đất</a>
            <a href="#" class="nav__link link link--regular link--bold">Cây giống & bệnh hại</a>
            <a href="#" class="nav__link link link--regular link--bold">Vật nuôi & bệnh hại</a>
            <a href="#" class="nav__link link link--regular link--bold">Thuốc & vật tư nông nghiệp</a>

            <a href="../Forums/" class="nav__link link link--regular link--bold">Diễn đàn</a>
        </nav>
    </div>
</header>