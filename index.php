<?php
  include_once('_modules/function.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Теплицы35</title>
  <link rel="preload" href="fonts/CoreSansC-65Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
      $css_file = 'css/style.css';
      $css_file_hash = hash_file('sha256', $css_file);
      echo '<link rel="stylesheet" type="text/css" href="'.$css_file.'?v=' .$css_file_hash.'">';
    ?>
</head>
<body>
  <div class=".container-fluid">
  <header>
    <div class="container">
      <div class="d-flex justify-content-between mx-auto title-top">
        <div class="title-top__left-side">
          <div class="d-inline-flex align-items-center">
            <div class="d-inline-block logo-top">
              <img src="img/logo.png" alt="" class="logo-top__img">
            </div>
            <div class="content-top">
            <button type="button" class="btn btn-light content-top__city">Вологда</button>
              <span>Завод по <br>производству теплиц</span>
            </div>
          </div>

        </div>
        <div class="ms-auto title-top__right-side">
          <div class="d-flex align-items-center h-100 title-top__right-side__content">
            <div class="d-flex justify-content-evenly align-items-center social">
              <div><img src="/img/vk.svg" alt="" class="social_icon"></div>
              <div><img src="/img/Instagram.svg" alt="" class="social_icon"></div>
              <div><img src="/img/WhatsApp.svg" alt="" class="social_icon"></div>
            </div>
            <div class="d-inline-flex flex-column justify-content-start align-items-center">
              <span class="phone">+7 8202 52-56-52</span>
              <span class="phone">+7 921 688-47-77</span>
            </div>
            <button type="button" class="btn btn-red btn-call-me">Заказать звонок</button>
            <div class="d-inline-flex align-items-center top-icons">
              <!-- <img src="/img/search.svg" alt="" class="search-icon"> -->
              <!-- <img src="/img/cart.svg" alt="" class="cart-icon"> -->
              <div class="search-icon">
                <svg width="50" height="50" viewBox="0 0 612.08 612.08" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="svg-search" class="svg-fill" d="M237.927,0C106.555,0,0.035,106.52,0.035,237.893c0,131.373,106.52,237.893,237.893,237.893 c50.518,0,97.368-15.757,135.879-42.597l0.028-0.028l176.432,176.433c3.274,3.274,8.48,3.358,11.839,0l47.551-47.551 c3.274-3.274,3.106-8.703-0.028-11.838L433.223,373.8c26.84-38.539,42.597-85.39,42.597-135.907C475.82,106.52,369.3,0,237.927,0z M237.927,419.811c-100.475,0-181.918-81.443-181.918-181.918S137.453,55.975,237.927,55.975s181.918,81.443,181.918,181.918 S338.402,419.811,237.927,419.811z" fill="#000" stroke="#000"/></svg>
              </div>
              <div class="cart-icon">
                <svg viewBox="0 0 25 25" width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="svg-cart" class="svg-fill" d="M17.947 13.208a1.89 1.89 0 001.672-.982l4.291-7.78a.693.693 0 00.09-.34.713.713 0 00-.365-.623.7.7 0 00-.344-.087L21.5 3.394H5.222L4.126 1H1v1.425h2.243l4.528 9.358-1.74 3.376a1.924 1.924 0 00.76 2.615c.263.143.571.226.912.226h13.892v-1.424H6.885l1.884-3.368c3.057.01 6.12 0 9.178 0zm4.134-8.387l-3.857 6.963H9.22L5.902 4.82h16.179zM7.867 19.453c-.525 0-1 .213-1.342.558a1.913 1.913 0 00-.557 1.352c0 .528.213 1.006.557 1.353.343.344.817.558 1.342.558.524 0 1.002-.215 1.349-.562a1.905 1.905 0 000-2.698 1.905 1.905 0 00-1.35-.561zm11.98 0c-.524 0-.998.213-1.34.558a1.913 1.913 0 00-.558 1.352c0 .528.213 1.006.557 1.353.343.344.817.558 1.342.558.525 0 1.002-.215 1.349-.562a1.905 1.905 0 000-2.698 1.905 1.905 0 00-1.35-.561z" fill="#000" stroke="#000"/></svg>
              </div>
            </div>
          </div>
              
        </div>
      </div>
    </div>
    <div class="line-top"></div>
    <div class="container top-menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle top-dropdown-menu" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  МЕНЮ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Теплицы</a></li>
                  <li><a class="dropdown-item" href="#">Парники</a></li>
                  <li><a class="dropdown-item" href="#">Грядки</a></li>
                  <li><a class="dropdown-item" href="#">Клумбы</a></li>
                  <li><a class="dropdown-item" href="#">Поликарбонат</a></li>
                  <li><a class="dropdown-item" href="#">Беседки</a></li>
                  <li><a class="dropdown-item" href="#">Душевые кабинки</a></li>
                  <li><a class="dropdown-item" href="#">Компостер</a></li>
                  <li><a class="dropdown-item" href="#">Штакетник</a></li>
                  <li><a class="dropdown-item" href="#">Автопроветриватель</a></li>
                  <li><a class="dropdown-item" href="#">Дополнительные товары</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">О компании</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Видео</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Наши работы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Оптовое сотрудничество</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Отзывы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="slider">
      <div id="carouselTopMenu" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselTopMenu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselTopMenu" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselTopMenu" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/slide1.png" class="d-block w-100" alt="...">
            <div class="slide-caption d-none d-md-block">
              <div class="d-inline mx-auto slide-caption__content">
                <div class="slide-caption__text">
                  <div>Теплицы из поликарбоната.<br>Парники.Оцинкованные грядки.</div>
                  <div>Производство.Продажа</div>
                </div>
                <div class="row mx-auto slide-caption__block">
                  <div class="col-3">
                    <div class="d-flex flex-column justify-content-center block__item">
                      <div>12</div>
                      <div>лет успешной<br>работы</div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="d-flex flex-column justify-content-center block__item">
                      <div>9000</div>
                      <div>произведенных<br>теплиц</div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="d-flex flex-column justify-content-center block__item">
                      <div>11 000</div>
                      <div>довольных<br>клиентов</div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="d-flex flex-column justify-content-center block__item">
                      <div>2000 м<sup>2</sup></div>
                      <div>площадь<br>производства</div>
                    </div>
                  </div>
                </div>
                <div><button type="button" class="btn btn-yellow btn-call-me">Подробнее</button></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Метка второго слайда</h5>
              <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Метка третьего слайда</h5>
              <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopMenu" data-bs-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTopMenu" data-bs-slide="next">
          <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </header>
  <main>
    <section class="catalog">
      <div class="catalog__line"></div>
      <div class="container">
        <h2 class="section-title"><span>Каталог нашей продукции</span></h2>
        <div class="row row-cols-1 row-cols-lg-4 catalog__block block">
          <? $CATALOG=['Теплицы','Парники','Грядки','Клумбы','Поликарбонат','Беседки','Душевые кабины','Штакетник'];
          for($i=0;$i<8;$i++): ?>

          <div class="col">
            <div class="block__item item">
              <h4 class="item__title"><?=$CATALOG[$i];?></h4>
              <div class="item__image">
                <img class="img-fluid" src="/img/catalog/<?=$i+1;?>.jpg" alt="">
              </div>
              <div class="item__btn"><button type="button" class="btn btn-green">Подробнее</button></div>
            </div>
          </div>
          <? endfor; ?> 
        </div>
      </div>
    </section>
    <section class="choice-customer">
      <div class="container">
      <h2 class="section-title"><span class="title_green">Выбор </span><span class="title_white">покупателей</span></h2>
        <div class="row row-cols-1 row-cols-lg-4 choice-customer_block block">
        <? $CHOICE_CUSTOMER=[ ['“Крепость”<br>теплица из поликарбоната','1',5,23,17,'-10%'],
                              ['“бабочка”<br>парник из поликарбоната','2',5,56,19,null],
                              ['“капелька”<br>теплица 3 метра','3',4,177,16,'ХИТ'],
                              ['комплект грядок<br>в теплицу','4',3,44,23,null]  ];
          foreach($CHOICE_CUSTOMER as $item): ?>
          <div class="col">
            <div class="block__item item">
              <h4 class="item__title"><?=$item[0];?></h4>
              <div class="d-inline-block item__image">
                <div class="item__image__flag <?=($item[5])?'active':'';?>"><?=$item[5];?></div>
                <img class="img-fluid" src="/img/catalog/<?=$item[1];?>.jpg" alt="">
              </div>
              <? rating($item[2]); ?>
              <div class="d-flex justify-content-center rating_comment">
                <div class="hand-img">
                  <svg class="hand_svg svg-fill" role="img" aria-label="Tools">
                    <use xlink:href="bootstrap-icons.svg#hand-thumbs-up"/>
                  </svg>
                </div>
                <div class="count-hand"><?=$item[3];?></div>
                <div class="comment-img">
                  <svg class="comment_svg svg-fill" role="img" aria-label="Tools">
                    <use xlink:href="bootstrap-icons.svg#chat-left"/>
                  </svg>
                </div>
                <div class="count-comment"><?=$item[4];?></div>
              </div>
              <div class="item__btn"><button type="button" class="btn btn-white">В корзину</button></div>
            </div>
          </div>
          <? endforeach; ?> 
        </div>
      </div>
    </section>
    <section class="work-with-us">
      <div class="container">
        <h2 class="section-title"><span class="title_green">Преимущества </span><span>работы с нами</span></h2>
        <div class="row row-cols-md-2 row-cols-lg-3 table-work work">
        <? $WORKUS=[  ['Высочайшее качество','1'],
                      ['Цены завода изготовителя','2'],
                      ['Гарантия','3'],
                      ['Собственное производство','4'],
                      ['Наличие на складе','5'],
                      ['Сервисная поддержка 24/7','6']  ];
          foreach($WORKUS as $item): ?>
          <div class="col work__item item">
            <div class="d-flex align-items-center justify-content-evently">
              <div class="item__img">
                <img class="img-fluid" src="/img/workus/<?=$item[1]?>.png" alt="" >
              </div>
              <div class="item__text"><?=$item[0]?></div>
            </div>
          </div>
          <? endforeach; ?> 
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
      <h2 class="section-title"><span class="title_green">Отзывы наших </span><span>клиентов</span></h2>
        <div class="row row-cols-md-2 row-cols-lg-4 justify-content-center reviews__block">
          <? $REVIEWS=[ ['Мария Смирнова','г.Москва',1,5],
                        ['Валя Кутепова','г.Улан-Уде',2,4],
                        ['Геннадий Петрович','г.Париж',3,5],
                        ['Иннокентий Смоктуновсий','г.Вологда',4,3]  ];
          foreach($REVIEWS as $item): ?>
          <div class="col">
            <div class="block__item item">
              <div class="item__image">
                <img class="img-fluid" src="/img/reviews/<?=$item[2];?>.jpg" alt="">
              </div>
              <? rating($item[3]); ?>
              <div class="item__content">
                <div class="item__name"><?=$item[0];?></div>
                <div class="item__city"><?=$item[1];?></div>  
                <div class="item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa quos quae suscipit cupiditate, veniam obcaecati pariatur distinctio excepturi error! Veniam assumenda reiciendis ratione quae, quod similique, aliquam natus nemo optio vel animi vitae tempore, delectus laboriosam dolor odit! Atque, suscipit?</div>
              </div>
            </div>
          </div>
          <? endforeach; ?> 
          </div>
        </div>
      </div>
    </section>
    <section class="projects">
      <div class="container">
        <h2 class="section-title"><span class="title_green">Реализованные </span><span>проекты</span></h2>
        <div class="row justify-content-center g-3 projects__block">
        <? for($i=0;$i<12;$i++): ?>
          <div class="col-auto block__item">
            <a href=""><img src="\img\<?=$i+1;?>.jpg" alt=""></a>
          </div>
        <? endfor; ?>
        </div>
      </div>
    </section>
    <section class="feedback-form">
      <div class="container">
        <div class="row justify-content-center">
        <h2>Остались вопросы?</h2>
        <h3>Оставьте заявку на консультацию со специалистом.</h3>
          <div class="col">
            <form class="needs-validation" novalidate>
              <div class="row row-cols-1 row-cols-lg-3 g-3">
                <div class="col">
                  <div class="form-floating ">
                    <input type="text" class="form-control" id="floatingName" placeholder="Василий Пупкин" value="" required>
                    <label for="floatingName">Введите ваше имя</label>
                    <div class="invalid-feedback">Пожалуйста, введите имя.</div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatinPhone" placeholder="7912345678" value="" required>
                    <label for="floatinPhone">Введите ваш телефон</label>
                    <div class="invalid-feedback">Пожалуйста, введите телефон.</div>
                  </div>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-red">Получить консультацию</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </section>

  </main>
  

  
  
  
  
  <? footer(); ?>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script/script.js"></script>
</body>
</html>