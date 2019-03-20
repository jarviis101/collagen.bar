<section class="container-fluid" id="footer-section">
    @php
        $contact = \App\Http\Controllers\PageController::getContacts();
        $footer = \App\Http\Controllers\PageController::getFooter();
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                <div class="row title-text">
                    <h5>Соц. сети</h5>
                </div>
                <div class="row justify-content-between">
                    <a href="{{$contact->inst_link}}" class="nav-link"><i class="fab fa-instagram"></i></a>
                    <a href="{{$contact->face_link}}" class="nav-link"><i class="fab fa-facebook-square"></i></a>
                    <a href="{{$contact->youtube_link}}" class="nav-link"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="row title-text">
                    <h5>Телеграм канал</h5>
                </div>
                <div class="row justify-content-between">
                    <a href="{{$contact->tg_link}}" class="nav-link"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="row title-text">
                    <h5>Продукт</h5>
                </div>
                <div class="row justify-content-start">
                    <a href="#" class="nav-link col-12">Коллаген</a>
                    <a href="#" class="nav-link col-12">Косметика с коллагеном</a>
                    <a href="#" class="nav-link col-12">Креатин для волос</a>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="row title-text">
                    <h5>Услуги</h5>
                </div>
                <div class="row justify-content-start">
                    <a href="#" class="nav-link col-12">Диетолог</a>
                    <a href="#" class="nav-link col-12">Косметолог</a>
                    <a href="#" class="nav-link col-12">Работа с кератином</a>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="row title-text">
                    <h5>Галерея</h5>
                </div>
                <div class="row">
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                    <a href="{{$contact->inst_link}}" class="nav-link col-4"><img src="img/micelljarnyjgelmorsk.png" class="img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-xl-4 conference">
                <div class="row title-text">
                    <h5>Конференция</h5>
                </div>
                <div class="row">
                    <p class="text col-12">
                        {{ $footer->content }}
                    </p>
                </div>
                <div class="row">
                    <span class="col-12">
                        Звоните на номер: 
                        <a href="tel:{{$contact->phone_link}}" class="tel-link">
                            +38-095-845-1243
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>