<div class="eProductCart2">

    <div class="eProductCart2__body">
        <div class="eProductCart2__delete">
            <a href="#">
                <svg width="28" height="28">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </a>
        </div>
        <div class="row middle-xs">
            <div class="col-xs-4">
                <a href="#" class="eProductCart2__image">
                    <img src="{{ asset('images/products/product.png') }}" alt="">
                </a>
            </div>
            <div class="col-xs-8">
                <a href="" class="eProductCart2__title">
                    Снежколеп
                    <strong>
                        «BOOBON SMILE»
                    </strong>
                </a>
                <p class="eProductCart2__size">
                    <a href="#" class="item active">
                        Большой
                    </a>
                    {{--  if isset small size --}}
                    <a href="#" class="item">
                        Маленький
                    </a>
                    {{--  endif --}}
                </p>
            </div>
        </div>
    </div>
    @php($opt = true)
    <div class="eProductCart2__footer">
        <div class="row">
            <div class="col">
                <span class="label">
                    @if ($opt)
                        <strong>
                            Ящики <span>(1 = 50 шт)</span>
                        </strong>
                    @else
                        Количетсво:
                    @endif
                </span>

                @include('front.pages.cart.parts.eQtySelect', ['modifier' => 'black'])

            </div>
            <div class="col">
                <span class="label">
                    Цвет:
                </span>

                @include('front.pages.cart.parts.eColorSelect', ['modifier' => 'black'])

            </div>
            <div class="col">
                <p class="eProductCart2__price">
                    <span class="label">
                        Стоимость:
                    </span>
                    <strong class="price">
                        3777 руб
                    </strong>
                </p>
            </div>

        </div>
        @if ($opt)
            <div class="row middle-xs">
                <div class="col">
                    <p class="text"><strong>Ваша скидка = 31%</strong></p>
                </div>
                <div class="col">
                    <p class="text">Чтобы получить скидку 23%,<br>
                        купите еще 3 ящика</p>
                </div>
            </div>
        @endif
    </div>

</div>