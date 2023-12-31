@extends('layout.app')

@section('title', 'История Мувыра')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/section.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/history.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/twentytwenty.css') }}">
@endsection

@section('content')
    <div class="page_header" id="page_header_history">
        <div class="container">
            <div class="page_header_title">История Мувыра</div>
            <div class="page_header_text">История Александра Корепанова, который восстанавливает свою родную деревню Мувыр, впечатляет своей настойчивостью и преданностью. Несмотря на трудности и неприятности, он несгибаемо привлекает внимание к деревне</div>
            <div class="page_header_buttons">
                <a href="#history" class="page_header_button">Читать</a>
            </div>
        </div>
    </div>
    <section id="history">
        <div class="container">
            <div class="history_text">
                <p>
                    В начале 1980-х родную деревню Корепанова, основанную в 1837-м, стёрли с лица земли.
                    Дома снесли бульдозером, людей перебросили в соседние сёла. «Неперспективный» Мувыр
                    перестал существовать в документах и на картах. А Александр никак не мог понять: зачем
                    и кому это нужно?Он сидел на берегу реки, смотрел на поле, где ещё недавно кипела жизнь,
                    и у него, молодого сильного мужчины, отслужившего срочную на границе с Китаем, опускались
                    руки. Именно тогда он пообещал себе возродить малую родину. Но что мог 20-летний дембель?
                    Сегодня «молодому сильному мужчине» 62. И уже полжизни он восстанавливает деревню Мувыр в
                    Игринском районе Удмуртии, на берегу реки Лоза. Сразу после армии такую ношу было не
                    потянуть. Поэтому десять лет Корепанов прожил в соседней Зуре. Помогал родителям по
                    хозяйству, учился заочно в сельхозинституте. И всё время твердил: «Надо возвращаться
                    в Мувыр...» Отец однажды не выдержал: «Ну, и сколько ты ещё болтать будешь?»— В детстве
                    я смотрел на него — тракториста, механизатора, передовика — и понимал, что тоже хочу
                    связать жизнь с землёй, — вспоминает Александр. — Отец воспитывал меня не словами, а
                    личным примером. Мне хотелось ему помогать. Я гордился нашей деревней. И даже представить
                    себе не мог, что когда-нибудь она исчезнет и мне придётся её возрождать.
                </p>
                <div class="columns_container">
                    <p>
                        В 1992-м он приехал с отцом на место уничтоженного Мувыра, где не было ни дорог, ни
                        электричества, ни воды, и начал строить дом. Знакомые крутили пальцем у виска. Но
                        через год вся семья Корепановых (у Александра уже были жена и две дочери) перебралась
                        в Мувыр. Спустя ещё пару лет у них появился первый сосед. А 16 декабря 2008 г. чудо, в
                        которое «доброжелатели» не хотели верить, случилось: населённый пункт Мувыр был
                        восстановлен официально. У него появился второй день рождения. А у Корепанова снова
                        текли слёзы. От счастья.
                    </p>
                    <div class="comparison">
                        <img src="{{ asset('/images/about3.png') }}" alt="Старый Мувыр">
                        <img src="{{ asset('/images/new1.jpg') }}" alt="Новый Мувыр">
                    </div>
                </div>
                <p>
                    Сейчас в деревне Мувыр на ул. Светлой 13 новых крепких домов. И скоро появятся
                    ещё: Корепанов ставит сруб для младшей дочери, сосед — для сына. Решил переехать
                    и житель Воткинска, у которого в Мувыре родился прадед... Пока 40 человек. Зато
                    случайного ни одного. Каждый перебрался сюда осознанно. И осознанно остался.
                </p>
                <div class="quote">
                    <blockquote>
                        <span>❝</span>
                        <p>Много людей через Мувыр прошло. Не все выдержали. Труд в деревне тяжёлый. Но тем,
                            кто живёт здесь сейчас, я очень благодарен. С ними — и в огонь и в воду. И в разведку.</p>
                        <cite>Александр Корепанов</cite>
                    </blockquote>
                </div>
                <div class="columns_container">
                    <div class="comparison">
                        <img src="{{ asset('/images/old1.jpg') }}" alt="Старый Мувыр">
                        <img src="{{ asset('/images/new2.png') }}" alt="Новый Мувыр">
                    </div>
                    <p>
                        Сначала Александр заготавливал лес, разводил овец, обрабатывал землю. Даже
                        страусов завёл — для привлечения внимания к деревне. Теперь руководителя
                        фермерского хозяйства Корепанова в Удмуртии знают многие. На деньги жителей
                        проложены 4 км гравийной дороги, закуплена техника, возведены две водонапорные
                        башни. А материалы для постройки домов Александр Геннадьевич предоставляет переселенцам
                        безвозмездно. Зарплаты в хозяйстве — 25–30 тыс. руб. Вроде немного. Но работники и
                        зерно получают, и дрова для отопления.
                    </p>
                </div>
                <p>
                    Александр Геннадьевич за всё в ответе. За людей (в Мувыре работают и жители других
                    деревень), за крупный рогатый скот. Общее поголовье — 350 особей, из них 150 — дойные
                    коровы. И на всю продукцию есть покупатель, даже оптовый — натуральное фермерское народ
                    уважает. Пора кафе открывать да кормить туристов. Хотя с ними непросто. Путешественников
                    и в удмуртской столице немного. А от Ижевска до Мувыра 120 км. Не каждый готов сделать
                    крюк ради пейзажей и модного агротуризма. Привлечением гостей занимается младшая дочь
                    Корепанова. Когда началась пандемия, Мария с семьёй бросила работу в Москве и переехала
                    в Мувыр. И потянулись школьники и взрослые в деревню, в которой есть крутая детская
                    площадка, верёвочный экстрим-парк, каскад зарыбленных прудов, где можно посидеть не с
                    гаджетом, а с удочкой...
                </p>
                <div class="columns_container">
                    <p>
                        Наша гордость — висячий мост через реку. На берегу — часовня в честь святого Георгия
                        Победоносца. Батюшка по праздникам служит. Без веры ведь никак нельзя. Ещё организовали
                        базу отдыха. Показываем приезжим занесённый в Красную книгу венерин башмачок.
                        Представляете, какое растение — семечко в землю падает, а цветы появляются только лет
                        через 15.
                    </p>
                    <div class="history_img_box">
                        <img src="{{ asset('/images/most.jpg') }}" alt="Висячий мост">
                    </div>
                </div>
                <div class="quote">
                    <blockquote>
                        <span>❝</span>
                        <p>Мы ведь не вечны. Надо оставить кому-то то, что сделано. Мама моя уже в годах.
                            Помню, спросил: «Чем сегодня будешь заниматься?» Она улыбнулась: «Не переживай,
                            сынок, работа у меня на неделю вперёд запланирована». Вот и я 25 лет без отпуска.
                            Сегодня в районе совещание, а я с утра уже на рыбалку сходил. Говорят же: гены пальцем
                            не придавишь.</p>
                        <cite>Александр Корепанов</cite>
                    </blockquote>
                </div>
                <p>
                    Когда-то поля вокруг Мувыра обрабатывал дед Александра, погибший во время Великой
                    Отечественной. После него здесь трудился отец Корепанова. Их уже нет. Но в деревне
                    живут мама и сестра. Тут же — старшая дочь с семьёй. Прежде учительницей работала.
                    Теперь на ней весь молокозавод и переработка.
                </p>
                <div class="columns_container">
                    <div class="history_img_box">
                        <img src="{{ asset('/images/korepanov.png') }}" alt="Александр Корепанов">
                    </div>
                    <div class="quote">
                        <blockquote>
                            <span>❝</span>
                            <p>Два дела — растить хлеб и защищать Родину — считаю для себя особо важными. Но с
                                рабочей силой большая проблема. Пригласили меня как-то в профтехучилище. Передо мной
                                выступал нефтяник, и на его вопрос «Кто хочет добывать нефть?» человек 15 подняли руки.
                                Потом вышел я, стал рассказывать о нашей жизни... Что вы думаете? Ни один не захотел
                                связать жизнь с сельским хозяйством. Нужны законы на федеральном уровне, чтобы молодёжь
                                захотела работать в деревне.</p>
                            <cite>Александр Корепанов</cite>
                        </blockquote>
                    </div>
                </div>
                <p>
                    30 лет Корепанов восстанавливает жизнь малой родины. Сегодня в Мувыре есть небольшой музей. О деревне написаны две книги. — Чем больше сёл,
                    тем больше осваиваемых земель и зерна в закромах. Значит, россияне сыты, довольны и
                    спокойно работают, не думая о плохом. Так что душа России действительно в деревне.
                </p>
            </div>
        </div>
    </section>
    <script src="{{ asset('/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('/js/jquery.twentytwenty.js') }}"></script>
    <script>
        $(document).ready(() => {
            $(".comparison").twentytwenty({
                default_offset_pct: 0.5,
                orientation: 'horizontal',
                before_label: 'Старый Мувыр',
                after_label: 'Возрожденный Мувыр',
                no_overlay: false,
                move_with_handle_only: true,
                click_to_move: false,
            });

            $('.history_button').addClass('active_header_button');
            new WOW().init();
        })
    </script>
@endsection
