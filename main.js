$(document).ready(function() {
    _flag = false;
    if (localStorage.hasOwnProperty("snils") && localStorage.hasOwnProperty("type") && localStorage.hasOwnProperty("code") && localStorage.hasOwnProperty("form")) {
        $('#snils').val(localStorage.getItem('snils'));
        $("#type option:selected").val(localStorage.getItem('type'));
        $("#code").val(localStorage.getItem('code'));
        $("#form").val(localStorage.getItem('form'));
    }
});

$(document).ready(function () {
    if (window.matchMedia("(max-width: 767px)").matches) {
        document.getElementById("withSogl").addEventListener("click", callbackSogl);
        document.getElementById("withSogl").addEventListener("touchstart", callbackSogl);
        function callbackSogl(e) {
            e.preventDefault()
            document.getElementById("withSogl").removeEventListener("click", callbackSogl);
            document.getElementById("withSogl").removeEventListener("touchstart", callbackSogl);
            mobilefindPersonSogl(getType(), getSnils(), getCode(), getForm())
        }
        // document.getElementById("withSogl").addEventListener('click', function () {
        //     mobilefindPersonSogl(getType(), getSnils(), getCode(), getForm())
        // });
        document.getElementById("withoutSogl").addEventListener("click", callbackDef);
        document.getElementById("withoutSogl").addEventListener("touchstart", callbackDef);
        function callbackDef(e) {
            e.preventDefault()
            document.getElementById("withoutSogl").removeEventListener("click", callbackDef);
            document.getElementById("withoutSogl").removeEventListener("touchstart", callbackDef);
            mobilefindPersonDef(getType(), getSnils(), getCode(), getForm())
        }
        // document.getElementById('withoutSogl').addEventListener('click', function () {
        //     mobilefindPersonDef(getType(), getSnils(), getCode(), getForm())
        // });
    } else {
        $('#person-data').hide();
        document.getElementById("withSogl").addEventListener('click', function () {
            findPersonSogl(getType(), getSnils(), getCode(), getForm())
        });
        document.getElementById('withoutSogl').addEventListener('click', function () {
            findPersonDef(getType(), getSnils(), getCode(), getForm())
        });
    }
});

    function getType() {
        return $("#type option:selected").val();
    }

    function getSnils() {
        return $("#snils").val();
    }

    function getCode() {
        return $("#code").val();
    }

    function getForm() {
        return $("#form").val();
    }

    function getXmlHttp() {
        var xmlhttp;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false;
            }
        }
        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
            xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }

    function findPersonSogl(type, snils, code, form) {
        select1 = type;
        specCode = code;
        eduForm = form;
        eduFin = "Бюджетная основа";
        $('#form-block').hide();
        $('#person-data').show();
        var xmlhttp = getXmlHttp();
        xmlhttp.open('POST', 'https://raitinglistpk.mospolytech.ru/rating_list_ajax.php', true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send("select1=" + encodeURIComponent(select1) + "&specCode=" + encodeURIComponent(specCode) + "&eduForm=" + encodeURIComponent(eduForm) + "&eduFin=" + encodeURIComponent(eduFin)); // Отправляем POST-запрос
        xmlhttp.onreadystatechange = function() {
            var data = xmlhttp.responseText;
            document.getElementById('table').innerHTML = data;
            container = $("font:contains(" + getSnils() + ")").parent().parent();
            childs = container.children();
            if (childs.length > 0) {
                _flag = true;
                var allPosition = document.getElementById('all-position');
                allPosition.innerHTML = childs[0].innerHTML;
                var realPosition = document.getElementById('real-position');
                realPosition.innerHTML = childs[1].innerHTML;
                var points = document.getElementById('points');
                points.innerHTML = childs[14].innerHTML;
                var allDocs = document.getElementById('all-docs');
                allDocs.innerHTML = getAllDocuments();
                var allSogls = document.getElementById('all-sogls');
                allSogls.innerHTML = getAllSogl()
                // document.getElementById('data').innerHTML = 'Глобальный номер: ' + childs[0].innerHTML +
                //     '<br> Номер из списка согласий:' + childs[1].innerHTML +
                //     '<br> Итоговый балл:' + childs[14].innerHTML;
                const previousSogls = localStorage.getItem('soglCount');
                window.setTimeout(function () {
                    if (localStorage.hasOwnProperty("soglCount")) {
                        var soglCountBlock = document.getElementById('dynamics');
                        nowSogls = getAllSogl();
                        if (_flag == true) {
                            if (nowSogls > previousSogls) {
                                cnt = nowSogls - previousSogls;
                                soglCountBlock.innerHTML = 'Добавилось ' + cnt + ' согласий';
                                localStorage.setItem('soglCount', getAllSogl());
                            } else if (nowSogls < previousSogls) {
                                cnt = previousSogls - nowSogls;
                                soglCountBlock.innerHTML = 'Забрали ' + cnt + ' согласия(й)';
                                localStorage.setItem('soglCount', getAllSogl());
                            } else if (nowSogls == previousSogls) {
                                soglCountBlock.innerHTML = 'Количество поданых согласий не изменилось'
                            }
                        }
                    }
                }, 3000);
            }
            localStorage.setItem('snils', snils);
            localStorage.setItem('type', type);
            localStorage.setItem('code', code);
            localStorage.setItem('form', form);
            if (!localStorage.hasOwnProperty("soglCount")) {
                localStorage.setItem('soglCount', getAllSogl());
            }
        };
    }

    function findPersonDef(type, snils, code, form) {
        select1 = type;
        specCode = code;
        eduForm = form;
        eduFin = "Бюджетная основа";
        $('#form-block').hide();
        $('#person-data').show();

        var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
        xmlhttp.open('POST', 'https://raitinglistpk.mospolytech.ru/rating_list_ajax.php', true); // Открываем асинхронное соединение
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
        xmlhttp.send("select1=" + encodeURIComponent(select1) + "&specCode=" + encodeURIComponent(specCode) + "&eduForm=" + encodeURIComponent(eduForm) + "&eduFin=" + encodeURIComponent(eduFin)); // Отправляем POST-запрос
        xmlhttp.onreadystatechange = function() {
            var data = xmlhttp.responseText;
            document.getElementById('table').innerHTML = data;
            container = $("td:contains('" + getSnils() + "')").parent().eq(1)

            if (container != undefined) {
                childs = container.children();
            }
            if (childs.length > 0) {
                $('#dynamics-parent').hide();
                realPos = Number(childs[0].children[0].innerHTML.replace(/&nbsp;/gi, ''));
                getApproximatePosition(realPos);
                $('#form-block').hide();
                var napr = document.getElementById('napravleniye');
                napr.innerHTML = code;
                var allPosition = document.getElementById('all-position');
                allPosition.innerHTML = childs[0].innerHTML;
                var realPosition = document.getElementById('real-position');
                realPosition.innerHTML = getApproximatePosition(realPos);;
                var points = document.getElementById('points');
                points.innerHTML = childs[14].innerHTML;
                var allDocs = document.getElementById('all-docs');
                allDocs.innerHTML = getAllDocuments();
                var allSogls = document.getElementById('all-sogls');
                allSogls.innerHTML = getAllSogl()
            }
            localStorage.setItem('snils', snils);
            localStorage.setItem('type', type);
            localStorage.setItem('code', code);
            localStorage.setItem('form', form);
        };
    }


function mobilefindPersonSogl(type, snils, code, form) {
    select1 = type;
    specCode = code;
    eduForm = form;
    eduFin = "Бюджетная основа";
    var xmlhttp = getXmlHttp();
    xmlhttp.open('POST', 'https://raitinglistpk.mospolytech.ru/rating_list_ajax.php', true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.send("select1=" + encodeURIComponent(select1) + "&specCode=" + encodeURIComponent(specCode) + "&eduForm=" + encodeURIComponent(eduForm) + "&eduFin=" + encodeURIComponent(eduFin)); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function () {
        var data = xmlhttp.responseText;
        document.getElementById('table').innerHTML = data;
        container = $("font:contains(" + getSnils() + ")").parent().parent();
        childs = container.children();
        if (childs.length > 0) {
            _flag = true;
            var allPosition = document.getElementById('all-position');
            allPosition.innerHTML = childs[0].innerHTML;
            var realPosition = document.getElementById('real-position');
            realPosition.innerHTML = childs[1].innerHTML;
            var points = document.getElementById('points');
            points.innerHTML = childs[14].innerHTML;
            var allDocs = document.getElementById('all-docs');
            allDocs.innerHTML = getAllDocuments();
            var allSogls = document.getElementById('all-sogls');
            allSogls.innerHTML = getAllSogl()
            // document.getElementById('data').innerHTML = 'Глобальный номер: ' + childs[0].innerHTML +
            //     '<br> Номер из списка согласий:' + childs[1].innerHTML +
            //     '<br> Итоговый балл:' + childs[14].innerHTML;
            const previousSogls = localStorage.getItem('soglCount');
            window.setTimeout(function () {
                if (localStorage.hasOwnProperty("soglCount")) {
                    var soglCountBlock = document.getElementById('dynamics');
                    previousSogls = localStorage.getItem('soglCount');
                    nowSogls = getAllSogl();
                    if (_flag == true) {
                        if (nowSogls > previousSogls) {
                            cnt = nowSogls - previousSogls;
                            soglCountBlock.innerHTML = 'Добавилось ' + cnt + ' согласий';
                            localStorage.setItem('soglCount', nowSogls);
                        } else if (nowSogls < previousSogls) {
                            cnt = previousSogls - nowSogls;
                            soglCountBlock.innerHTML = 'Забрали ' + cnt + ' согласия(й)';
                            localStorage.setItem('soglCount', nowSogls);
                        } else if (nowSogls == previousSogls) {
                            soglCountBlock.innerHTML = 'Количество поданых согласий не изменилось'
                        }
                    }
                }
            }, 3000);
        }
        localStorage.setItem('snils', snils);
        localStorage.setItem('type', type);
        localStorage.setItem('code', code);
        localStorage.setItem('form', form);
        if (!localStorage.hasOwnProperty("soglCount")) {
            localStorage.setItem('soglCount', getAllSogl());
        }
    };
}

function mobilefindPersonDef(type, snils, code, form) {
    select1 = type;
    specCode = code;
    eduForm = form;
    eduFin = "Бюджетная основа";

    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', 'https://raitinglistpk.mospolytech.ru/rating_list_ajax.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.send("select1=" + encodeURIComponent(select1) + "&specCode=" + encodeURIComponent(specCode) + "&eduForm=" + encodeURIComponent(eduForm) + "&eduFin=" + encodeURIComponent(eduFin)); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function () {
        var data = xmlhttp.responseText;
        document.getElementById('table').innerHTML = data;
        container = $("td:contains('" + getSnils() + "')").parent().eq(1)

        if (container != undefined) {
            childs = container.children();
        }
        if (childs.length > 0) {
            realPos = Number(childs[0].children[0].innerHTML.replace(/&nbsp;/gi, ''));
            getApproximatePosition(realPos);
            var allPosition = document.getElementById('all-position');
            allPosition.innerHTML = childs[0].innerHTML;
            var realPosition = document.getElementById('real-position');
            realPosition.innerHTML = getApproximatePosition(realPos);;
            var points = document.getElementById('points');
            points.innerHTML = childs[14].innerHTML;
            var allDocs = document.getElementById('all-docs');
            allDocs.innerHTML = getAllDocuments();
            var allSogls = document.getElementById('all-sogls');
            allSogls.innerHTML = getAllSogl()
        }
        localStorage.setItem('snils', snils);
        localStorage.setItem('type', type);
        localStorage.setItem('code', code);
        localStorage.setItem('form', form);
    };
}

function getApproximatePosition(userNumber){
    $('#div4 > table > tbody  > tr').each(function (index, tr) {
        trData = tr.children;
        if (trData[1].children.length > 0){
            prepareNumber = trData[0].children[0].innerHTML.replace(/&nbsp;/gi,'');
            personNumber = Number(prepareNumber);
            
            realPrepareNumber = trData[1].children[0].innerHTML;
            realPrepareNumber = realPrepareNumber.replace('<font color="black">', '');
            realPrepareNumber = realPrepareNumber.replace('</font>', '');
            realPrepareNumber = Number(realPrepareNumber);

            if (userNumber > personNumber) {
                realNum = realPrepareNumber + 1
            }
        }
    });
    return realNum;
}

function getAllDocuments() {
    allDocuments = -1
    $('#div4 > table > tbody  > tr').each(function (index, tr) {
        allDocuments++
    });
    return allDocuments
}

function getAllSogl(){
    allSogl = -1
    $('#div4 > table > tbody  > tr').each(function (index, tr) {
        trData = tr.children;
        if (trData[1].children.length > 0) {
            allSogl++

            // realPrepareNumber = trData[1].children[0].innerHTML;
            // realPrepareNumber = realPrepareNumber.replace('<font color="black">', '');
            // realPrepareNumber = realPrepareNumber.replace('</font>', '');
            // realPrepareNumber = Number(realPrepareNumber);
        }
    });
    return allSogl;
}
