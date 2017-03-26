/**
 * Created by Rauan on 02.07.2016.
 */
var bread = [];
function initCalc(arData, arBread) {
    const OTHER = 'Другое';
    var h2Content = [
        'Выберите свое устройство',
        'Выберите модель устройство',
        'Выберите вид поломки',

    ]
    var bread = arBread;
    var data = arData;
    //drawing routines
    function drawBlocks(item) {
        if(typeof item != "string") {
            return '<div class="calc-item popup-open" data-order-info="' +
                bread.join(' - ') +' - '+ item.repair + ' - ' + item.price + ' тг' +
                '"> <span>' + item.repair + '</span> </div>';
        }
        else if(item != OTHER )
            return '<div class="calc-item" data-role="calc"> <span>' + item + '</span> </div>';
        else
            return '<div class="calc-item popup-open" data-order-info="' + bread.join(' - ') +'"> <span>' + item + '</span> </div>';

    }

    function drawContent(items) {
        //drawing choices
        var ans = '';
        items.forEach(function (item) {
            ans += drawBlocks(item);
        });
        $('.calc-item-container').html(ans);

        //drawing h2(aka what you have to do)
        $('.calc-container h2').text(h2Content[bread.length]);

    }

    function drawCrumb(item, index) {
        var breadTitle = "Тип";
        if (index == 1)
            breadTitle = "Модель";
        if (index == 2)
            breadTitle = "Поломка";
        var appendCode = '<div class = "calc-breadcrumb-item">' +
            '<span class = "calc-breadcrumb-item-title">' +
            breadTitle +
            '</span> ' +
            '<br> ' +
            '<span class = "calc-breadcrumb-item-content">' +
            item +
            '</span> ' +
            '<div class = "calc-breadcrumb-line"></div> ' +
            '</div>';
        $('.calc-breadcrumb-container').append(appendCode);
    }

    function drawBreadcrumb(bread) {
        var drawedCrumbNumb = $('.calc-breadcrumb-container > .calc-breadcrumb-item').length;
        if (drawedCrumbNumb < bread.length)
            for (var i = drawedCrumbNumb; i < bread.length; i++)
                drawCrumb(bread[i], i);
        else {
            var $breadcrumbItems = $('.calc-breadcrumb-container > .calc-breadcrumb-item');
            for (var i = bread.length; i < drawedCrumbNumb; i++) {
                console.log('hi');
                console.log($breadcrumbItems);
                $breadcrumbItems[i].remove();
            }

        }

    }

    function drawCurrentState() {
        drawBreadcrumb(bread);
        drawContent(getChildren(bread[bread.length - 1]));
    }


    //getting next children
    function getChildren(root) {
        var ans = [];
        if (root == null) {
            data.forEach(function (item) {
                if (ans.indexOf(item.category) == -1)
                    ans.push(item.category);
            });
        }
        else {
            if (bread.length == 1) {
                data.forEach(function (item) {
                    if (ans.indexOf(item.device) == -1 && item.category == bread[0])
                        ans.push(item.device);
                });
            }
            if (bread.length == 2) {
                data.forEach(function (item) {
                    if (ans.indexOf(item.repair) == -1 &&
                        item.category == bread[0] && item.device == bread[1])
                        ans.push(item);
                });
            }
            if (bread.length == 3) {
                alert('pora nahui idti');
                data.forEach(function (item) {
                    if (item.repair = bread[2] &&
                            item.category == bread[0] && item.device == bread[1])
                        return item;
                });
            }

        }

        ans.push(OTHER);
        return ans;
    }

    //helper to concatenate
    function replaceSpace(arString) {
        var ans = [];
        arString.forEach(function (item) {
            ans.push(item.replace(/\s/g,"_"));
        });
        return ans;
    }

    //when choosing block(aka next step)
    function nextStep(choice) {
        bread.push(choice);
        drawCurrentState();
        history.pushState(bread, 'Ремонт ' + bread.join(' - '), '/calc/' + replaceSpace(bread).join('/'));
    }

    function runCalc() {
        drawCurrentState();
        $('.calc-item-container').delegate('.calc-item[data-role="calc"]', 'click', function () {
            nextStep($(this).find('span').text());
        });

        //prepare history api(aka history api init)
        if(bread.length == 0)
            history.pushState(bread, 'Ремонт', '/calc');
        else
            history.pushState(bread, 'Ремонт ' + bread.join(' - '), '/calc/' + replaceSpace(bread).join('/'));

        //listen history api

        window.onpopstate = function (event) {
            if(event.state != null)
                bread = event.state;
            drawCurrentState();
         };
    }

    runCalc();
}




