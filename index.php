<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>
    <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css">
    <script src="main.js"></script>
    <title>Политех списки</title>
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="Получение информации о вашем текущем месте в рейтинге абитуриентов по номеру снилс.">
    <meta name="description" content="Получение информации о вашем текущем месте в рейтинге абитуриентов по номеру снилс. Сервис предназначен для бюджетных мест.">
</head>

<body class="bg-gray-100">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(83860510, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/83860510" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <section id="data">
        <div class="rounded-md bg-yellow-50 p-4 ml-2 mr-2 mt-2">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" x-description="Heroicon name: solid/exclamation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">
                        Обратите внимание
                    </h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>
                            Сервис плохо функционирует на мобильных устройствах фирмы Apple.<br><span class="only-comp"> Используйте компьютер или другие мобильные устройства для полноценной работоспособности</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="person">
            <section id="form-block" class="mt-4 ml-2 mr-2 mb-2">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-3xl mx-auto">
                            <div class="space-y-8 divide-y divide-gray-200">
                                <div>
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Отслеживание позиции заявления
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Для поступающих в Московский политехнический университет
                                        </p>
                                    </div>
                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                                        <div class="sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">
                                                Категория
                                            </label>
                                            <div class="mt-1">
                                                <select name="type" id="type" autocomplete="country" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option value="000000017_01">Москва (бакалавриат/специалитет)</option>
                                                    <option value="000000018_01">Москва (магистратура)</option>
                                                    <option value="000000019_01">Москва (аспирантура)</option>
                                                    <option value="000000017_03">Филиал в г. Коломне</option>
                                                    <option value="000000017_02">Филиал в г. Рязани</option>
                                                    <option value="000000018_02">Филиал в г. Рязани (магистратура)</option>
                                                    <option value="000000017_05">Филиал в г. Чебоксары</option>
                                                    <option value="000000017_06">Филиал в г. Электросталь</option>
                                                    <option value="000000017_04">Филиал в п. Тучково (ВПО)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="street_address" class="block text-sm font-medium text-gray-700">
                                                Снилс
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" placeholder="Ваш снилс" name="snils" id="snils" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">
                                                Направление
                                            </label>
                                            <div class="mt-1">
                                                <select name="code" id="code" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option value="08.03.01">08.03.01 Строительство</option>
                                                    <option value="08.05.01">08.05.01 Строительство уникальных зданий и сооружений </option>
                                                    <option value="09.03.01_Веб-технологии">09.03.01.01 Веб-технологии</option>
                                                    <option value="09.03.01_Интеграция и программирование в САПР">09.03.01.02 Интеграция и программирование в САПР</option>
                                                    <option value="09.03.01_Программное обеспечение информационных систем">09.03.01.03 Программное обеспечение информационных систем</option>
                                                    <option value="09.03.01_Киберфизические системы">09.03.01.04 Киберфизические системы</option>
                                                    <option value="09.03.02_Информационные системы и технологии (Информационные системы и технологии обработки цифрового контента; Информационные и автоматизированные системы обр">09.03.02.01 Информационные системы и технологии</option>
                                                    <option value="09.03.02_Информационные системы и технологии обработки цифрового контента">09.03.02.02 Информационные системы и технологии обработки цифрового контента</option>
                                                    <option value="09.03.02_Информационные системы автоматизированных комплексов медиаиндустрии">09.03.02.03 Информационные системы автоматизированных комплексов медиаиндустрии</option>
                                                    <option value="09.03.02_Цифровая трансформация">09.03.02.04 Цифровая трансформация</option>
                                                    <option value="09.03.03_Корпоративные информационные системы">09.03.03.01 Корпоративные информационные системы</option>
                                                    <option value="09.03.03_Большие и открытые данные">09.03.03.02 Большие и открытые данные</option>
                                                    <option value="10.03.01">10.03.01 Информационная безопасность</option>
                                                    <option value="10.05.03">10.05.03 Информационная безопасность автоматизированных систем</option>
                                                    <option value="11.03.01_Системы дальней связи">11.03.01 Радиотехника</option>
                                                    <option value="13.03.01">13.03.01 Теплоэнергетика и теплотехника</option>
                                                    <option value="13.03.02">13.03.02 Электроэнергетика и электротехника</option>
                                                    <option value="13.03.03_Автоматизированные энергетические установки">13.03.03.01 Автоматизированные энергетические установки</option>
                                                    <option value="13.03.03_Энергоустановки для транспорта и малой энергетики">13.03.03.02 Энергоустановки для транспорта и малой энергетики</option>
                                                    <option value="15.03.01_Машиностроение (Машины и технологии обработки материалов давлением; Оборудование и технологии сварочного производства; Машины и технологии высокоэффек">15.03.01.01 Машиностроение</option>
                                                    <option value="15.03.01_Машины и технологии обработки материалов давлением в метизных производствах">15.03.01.02 Машины и технологии обработки материалов давлением в метизных производствах</option>
                                                    <option value="15.03.01_Комплексные технологические процессы и оборудование машиностроения">15.03.01.03 Комплексные технологические процессы и оборудование машиностроения</option>
                                                    <option value="15.03.02_Разработка и маркетинг технологического оборудования">15.03.02.01 Разработка и маркетинг технологического оборудования</option>
                                                    <option value="15.03.02_Оборудование упаковочного и полиграфического производства">15.03.02.02 Оборудование упаковочного и полиграфического производства</option>
                                                    <option value="15.03.03">15.03.03 Прикладная механика</option>
                                                    <option value="15.03.04">15.03.04 Автоматизация технологических процессов и производств</option>
                                                    <option value="15.05.01">15.05.01 Проектирование технологических машин и комплексов</option>
                                                    <option value="16.03.03">16.03.03 Холодильная, криогенная техника и системы жизнеобеспечения</option>
                                                    <option value="18.05.01">18.05.01 Химическая технология энергонасыщенных материалов и изделий</option>
                                                    <option value="19.03.01">19.03.01 Биотехнология</option>
                                                    <option value="20.03.01_Экологическая безопасность и охрана труда">20.03.01.01 Экологическая безопасность и охрана труда</option>
                                                    <option value="20.03.01_Безотходные технологии химических и нефтехимических производств">20.03.01.02 Безотходные технологии химических и нефтехимических производств</option>
                                                    <option value="21.03.01">21.03.01 Нефтегазовое дело</option>
                                                    <option value="21.05.04">21.05.04 Горное дело</option>
                                                    <option value="22.03.01_Перспективные материалы и технологии">22.03.01.01 Перспективные материалы и технологии</option>
                                                    <option value="22.03.01_Материаловедение и защитные технологии">22.03.01.02 Материаловедение и защитные технологии</option>
                                                    <option value="22.03.02">22.03.02 Металлургия</option>
                                                    <option value="23.03.03_Инжиниринг и эксплуатация транспортных систем">23.03.03 Эксплуатация транспортно-технологических машин и комплексов</option>
                                                    <option value="23.05.01_Спортивные транспортные средства">23.05.01.01 Спортивные транспортные средства</option>
                                                    <option value="23.05.01_Перспективные транспортные средства">23.05.01.02 Перспективные транспортные средства</option>
                                                    <option value="23.05.01_Компьютерное моделирование транспортных средств">23.05.01.03 Компьютерное моделирование транспортных средств</option>
                                                    <option value="27.03.01_Метрологическое обеспечение производств">27.03.01 Стандартизация и метрология</option>
                                                    <option value="27.03.02_Управление качеством на производстве">27.03.02.01 Управление качеством на производстве</option>
                                                    <option value="27.03.02_Управление качеством в принтмедиа">27.03.02.02 Управление качеством в принтмедиа</option>
                                                    <option value="27.03.04_Электронные системы управления">27.03.04 Электронные системы управления</option>
                                                    <option value="27.03.05_Аддитивные технологии">27.03.05 Инноватика</option>
                                                    <option value="29.03.03">29.03.03 Технология полиграфического и упаковочного производства</option>
                                                    <option value="29.03.04_Современные технологии в производстве художественных изделий; Художественное проектирование и цифровые технологии в ювелирном производстве">29.03.04.01 Современные технологии в производстве художественных изделий; Художественное проектирование и цифровые технологии в ювелирном производстве</option>
                                                    <option value="29.03.04_Технологический инжиниринг в производстве художественных изделий">29.03.04.02 Технологический инжиниринг в производстве художественных изделий</option>
                                                    <option value="38.03.М1">38.03.М1 Экономика и управление</option>
                                                    <option value="38.03.М2">38.03.М2 Экономика и управление</option>
                                                    <option value="38.03.01_Economics and Finance of an Enteprise (study in English)">38.03.01 Economics and Finance of an Enterprise (study in English)</option>
                                                    <option value="38.03.03">38.03.03 Управление персоналом</option>
                                                    <option value="42.03.01">42.03.01 Реклама и связи с общественностью</option>
                                                    <option value="42.03.02_Периодические издания и мультимедийная журналистика">42.03.02 Журналистика</option>
                                                    <option value="42.03.03">42.03.03 Издательское дело</option>
                                                    <option value="54.03.01_Транспортный и промышленный дизайн">54.03.01.01 Транспортный и промышленный дизайн</option>
                                                    <option value="54.03.01_Графический дизайн мультимедиа">54.03.01.02 Графический дизайн мультимедиа</option>
                                                    <option value="54.05.03">54.05.03 Графика</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">
                                                Форма обучения
                                            </label>
                                            <div class="mt-1">
                                                <select name="form" id="form" autocomplete="country" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option value="Очная">Очная</option>
                                                    <option value="Очно-заочная">Очно-заочная (вечерняя)</option>
                                                    <option value="Заочная">Заочная</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button id="withoutSogl" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Подано заявление
                                    </button>
                                    <button id="withSogl" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Подано согласие
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="person-data" class="mt-4 ml-2 mr-2 mb-2">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Информация о поступающем
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Данные взяты из официальных источников
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Позиция в общем рейтинге
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="all-position">0
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Реальная позиция (по согласиям)
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="real-position">0
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Ваш итоговый балл
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="points">0
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="bg-white shadow sm:rounded-lg mt-2">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Статистика по направлению
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500" id="napravleniye"></p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Всего подано заявлений
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="all-docs">0
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Всего подано согласий
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="all-sogls">0
                                </dd>
                            </div>
                            <div class="sm:col-span-1" id="dynamics-parent">
                                <dt class="text-sm font-medium text-gray-500">
                                    Динамика согласий с последнего обновления запроса
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900" id="dynamics">
                                    Только для направления с согласием
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <button onclick="location.reload()" class="w-full mt-2 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Назад к выбору направления
                </button>
            </section>
            <!-- <select name="type" id="type">
                <option value="000000017_01">Москва (бакалавриат/специалитет)</option>
                <option value="000000018_01">Москва (магистратура)</option>
                <option value="000000019_01">Москва (аспирантура)</option>
                <option value="000000017_03">Филиал в г. Коломне</option>
                <option value="000000017_02">Филиал в г. Рязани</option>
                <option value="000000018_02">Филиал в г. Рязани (магистратура)</option>
                <option value="000000017_05">Филиал в г. Чебоксары</option>
                <option value="000000017_06">Филиал в г. Электросталь</option>
                <option value="000000017_04">Филиал в п. Тучково (ВПО)</option>
            </select>
            <input type="text" placeholder="Ваш снилс" name="snils" id="snils">
            <select name="code" id="code">
                <option value="08.03.01">08.03.01 Строительство</option>
                <option value="08.05.01">08.05.01 Строительство уникальных зданий и сооружений </option>
                <option value="09.03.01_Веб-технологии">09.03.01.01 Веб-технологии</option>
                <option value="09.03.01_Интеграция и программирование в САПР">09.03.01.02 Интеграция и программирование в САПР</option>
                <option value="09.03.01_Программное обеспечение информационных систем">09.03.01.03 Программное обеспечение информационных систем</option>
                <option value="09.03.01_Киберфизические системы">09.03.01.04 Киберфизические системы</option>
                <option value="09.03.02_Информационные системы и технологии (Информационные системы и технологии обработки цифрового контента; Информационные и автоматизированные системы обр">09.03.02.01 Информационные системы и технологии</option>
                <option value="09.03.02_Информационные системы и технологии обработки цифрового контента">09.03.02.02 Информационные системы и технологии обработки цифрового контента</option>
                <option value="09.03.02_Информационные системы автоматизированных комплексов медиаиндустрии">09.03.02.03 Информационные системы автоматизированных комплексов медиаиндустрии</option>
                <option value="09.03.02_Цифровая трансформация">09.03.02.04 Цифровая трансформация</option>
                <option value="09.03.03_Корпоративные информационные системы">09.03.03.01 Корпоративные информационные системы</option>
                <option value="09.03.03_Большие и открытые данные">09.03.03.02 Большие и открытые данные</option>
                <option value="10.03.01">10.03.01 Информационная безопасность</option>
                <option value="10.05.03">10.05.03 Информационная безопасность автоматизированных систем</option>
                <option value="11.03.01_Системы дальней связи">11.03.01 Радиотехника</option>
                <option value="13.03.01">13.03.01 Теплоэнергетика и теплотехника</option>
                <option value="13.03.02">13.03.02 Электроэнергетика и электротехника</option>
                <option value="13.03.03_Автоматизированные энергетические установки">13.03.03.01 Автоматизированные энергетические установки</option>
                <option value="13.03.03_Энергоустановки для транспорта и малой энергетики">13.03.03.02 Энергоустановки для транспорта и малой энергетики</option>
                <option value="15.03.01_Машиностроение (Машины и технологии обработки материалов давлением; Оборудование и технологии сварочного производства; Машины и технологии высокоэффек">15.03.01.01 Машиностроение</option>
                <option value="15.03.01_Машины и технологии обработки материалов давлением в метизных производствах">15.03.01.02 Машины и технологии обработки материалов давлением в метизных производствах</option>
                <option value="15.03.01_Комплексные технологические процессы и оборудование машиностроения">15.03.01.03 Комплексные технологические процессы и оборудование машиностроения</option>
                <option value="15.03.02_Разработка и маркетинг технологического оборудования">15.03.02.01 Разработка и маркетинг технологического оборудования</option>
                <option value="15.03.02_Оборудование упаковочного и полиграфического производства">15.03.02.02 Оборудование упаковочного и полиграфического производства</option>
                <option value="15.03.03">15.03.03 Прикладная механика</option>
                <option value="15.03.04">15.03.04 Автоматизация технологических процессов и производств</option>
                <option value="15.05.01">15.05.01 Проектирование технологических машин и комплексов</option>
                <option value="16.03.03">16.03.03 Холодильная, криогенная техника и системы жизнеобеспечения</option>
                <option value="18.05.01">18.05.01 Химическая технология энергонасыщенных материалов и изделий</option>
                <option value="19.03.01">19.03.01 Биотехнология</option>
                <option value="20.03.01_Экологическая безопасность и охрана труда">20.03.01.01 Экологическая безопасность и охрана труда</option>
                <option value="20.03.01_Безотходные технологии химических и нефтехимических производств">20.03.01.02 Безотходные технологии химических и нефтехимических производств</option>
                <option value="21.03.01">21.03.01 Нефтегазовое дело</option>
                <option value="21.05.04">21.05.04 Горное дело</option>
                <option value="22.03.01_Перспективные материалы и технологии">22.03.01.01 Перспективные материалы и технологии</option>
                <option value="22.03.01_Материаловедение и защитные технологии">22.03.01.02 Материаловедение и защитные технологии</option>
                <option value="22.03.02">22.03.02 Металлургия</option>
                <option value="23.03.03_Инжиниринг и эксплуатация транспортных систем">23.03.03 Эксплуатация транспортно-технологических машин и комплексов</option>
                <option value="23.05.01_Спортивные транспортные средства">23.05.01.01 Спортивные транспортные средства</option>
                <option value="23.05.01_Перспективные транспортные средства">23.05.01.02 Перспективные транспортные средства</option>
                <option value="23.05.01_Компьютерное моделирование транспортных средств">23.05.01.03 Компьютерное моделирование транспортных средств</option>
                <option value="27.03.01_Метрологическое обеспечение производств">27.03.01 Стандартизация и метрология</option>
                <option value="27.03.02_Управление качеством на производстве">27.03.02.01 Управление качеством на производстве</option>
                <option value="27.03.02_Управление качеством в принтмедиа">27.03.02.02 Управление качеством в принтмедиа</option>
                <option value="27.03.04_Электронные системы управления">27.03.04 Электронные системы управления</option>
                <option value="27.03.05_Аддитивные технологии">27.03.05 Инноватика</option>
                <option value="29.03.03">29.03.03 Технология полиграфического и упаковочного производства</option>
                <option value="29.03.04_Современные технологии в производстве художественных изделий; Художественное проектирование и цифровые технологии в ювелирном производстве">29.03.04.01 Современные технологии в производстве художественных изделий; Художественное проектирование и цифровые технологии в ювелирном производстве</option>
                <option value="29.03.04_Технологический инжиниринг в производстве художественных изделий">29.03.04.02 Технологический инжиниринг в производстве художественных изделий</option>
                <option value="38.03.М1">38.03.М1 Экономика и управление</option>
                <option value="38.03.М2">38.03.М2 Экономика и управление</option>
                <option value="38.03.01_Economics and Finance of an Enteprise (study in English)">38.03.01 Economics and Finance of an Enterprise (study in English)</option>
                <option value="38.03.03">38.03.03 Управление персоналом</option>
                <option value="42.03.01">42.03.01 Реклама и связи с общественностью</option>
                <option value="42.03.02_Периодические издания и мультимедийная журналистика">42.03.02 Журналистика</option>
                <option value="42.03.03">42.03.03 Издательское дело</option>
                <option value="54.03.01_Транспортный и промышленный дизайн">54.03.01.01 Транспортный и промышленный дизайн</option>
                <option value="54.03.01_Графический дизайн мультимедиа">54.03.01.02 Графический дизайн мультимедиа</option>
                <option value="54.05.03">54.05.03 Графика</option>
            </select>
            <select name="form" id="form">
                <option value="Очная">Очная</option>
                <option value="Очно-заочная">Очно-заочная (вечерняя)</option>
                <option value="Заочная">Заочная</option>
            </select>
            <button onclick="findPersonDef(getType(), getSnils(), getCode(), getForm())">Без согласия</button>
            <button onclick="findPersonSogl(getType(), getSnils(), getCode(), getForm())">С согласием</button> -->
        </div>
    </section>
    <section id="table" style="display: none;">
    </section>
</body>

</html>
