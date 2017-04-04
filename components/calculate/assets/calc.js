/**
 * Created by Rauan on 02.07.2016.
 *
 * bread - array of device objects
 */
var bread = [];
function initCalc(arData, deviceDictionary, indexedPrice, repairMap, bread) {
    var otherContent = [
        'Другое устройство',
        'Другая поломка'
    ];
    var h2Content = [
        'Выберите свое устройство',
        'Выберите вид поломки',
    ]
    var data = arData;


    //helper to concatenate
    function replaceSpace(arDevice) {
        var ans = [];
        arDevice.forEach(function (item) {
            ans.push(deviceDictionary[item.id].title.replace(/\s/g,"_"));
        });
        return ans;
    }
    function breadToString() {
        var ans="";
        bread.forEach(function (item) {
            ans += item.title + " - ";
        })
        return ans;
    }

    //drawing routines
    function drawDeviceBlocks(item) {
            if(item != otherContent[0] ){
                return '<div class="calc-item" data-role="calc" data-device-id="'+ item.id +'"> <span>' + deviceDictionary[item.id].title + '</span> </div>';
            }
        else
            return '<div class="calc-item popup-open" data-order-info="' + breadToString() +'"> <span>' + item + '</span> </div>';

    }

    function drawRepairBlocks(item) {
        if(item != otherContent[1] ){
            return '<div class="calc-item popup-open" data-order-info="' +
                breadToString() +' - '+ repairMap[item.repair_id] + ' - ' + item.price + ' тг' +
                '"> <span>' + repairMap[item.repair_id] + '</span> </div>';
        }
        else
        {
            return '<div class="calc-item popup-open" data-order-info="' + breadToString() +'"> <span>' + item + '</span> </div>';
        }

    }

    function drawContent(items) {
        var ans = '';
        if(bread[bread.length - 1] != undefined && indexedPrice[bread[bread.length - 1].id] != undefined){
            //drawing choices
            items.forEach(function (item) {
                ans += drawRepairBlocks(item);
            });
            $('.calc-item-container').html(ans);

            //drawing h2(aka what you have to do)
            $('.calc-container h2').text(h2Content[1]);

        }
        else {
            //drawing choices
            items.forEach(function (item) {
                ans += drawDeviceBlocks(item);
            });
            $('.calc-item-container').html(ans);

            //drawing h2(aka what you have to do)
            $('.calc-container h2').text(h2Content[0]);
        }



    }



    //getting all add children as device object where root is also device object
    function getAddChildren(root) {
        if(root.add_children != null && root.add_children.length > 0){
            var ans = [];
            root.add_children.split('|').forEach(function (item) {
                ans.push(deviceDictionary[item]);
            });
            return ans;
        }
        return [];
    }

    //getting root children according to DB device tree + additional children
    // or getting repairs array if it has prices
    function getChildren(root) {
        var ans = [];
        //status when bread is empty
        if (root == null) {
            data.forEach(function (item) {
                if (item.is_root != "0")
                    ans.push(item);
            });
            ans.push(otherContent[0]);

        }
        else {
            if(indexedPrice[root.id] != undefined)
            {
                ans = indexedPrice[root.id];
                ans.push(otherContent[1]);
            }
            else
            {
                //get DB tree children
                data.forEach(function (item) {
                    if (item.parent_id == root.id)
                        ans.push(item);
                });

                //get additional children
                getAddChildren(root).forEach(function (item) {
                    ans.push(item);
                });
                ans.push(otherContent[0]);
            }
        }
        return ans;
    }

    function drawCrumb(item,index) {
        var appendCode = '<div class = "calc-breadcrumb-item" data-bread="' +
            index +
            '" >' +
            '<span class = "calc-breadcrumb-item-content">' +
            deviceDictionary[item.id].title +
            '</span> ' +
            '<i class = "fa fa-angle-right">' +
            '</i> ' +
            '<div class = "calc-breadcrumb-line"></div> ' +
            '</div>';
        $('.calc-breadcrumb-container').append(appendCode);
    }

    function drawBreadcrumb(bread) {
        var drawedCrumbNumb = $('.calc-breadcrumb-container > .calc-breadcrumb-item').length;
        if (drawedCrumbNumb < bread.length)
            for (var i = drawedCrumbNumb; i < bread.length; i++)
                drawCrumb(bread[i],i);
        else {
            var $breadcrumbItems = $('.calc-breadcrumb-container > .calc-breadcrumb-item');
            for (var i = bread.length; i < drawedCrumbNumb; i++) {
                $breadcrumbItems[i].remove();
            }

        }

    }

    function drawCurrentState() {
        drawBreadcrumb(bread);
        drawContent(getChildren(bread[bread.length - 1]));
    }

    //when choosing block(aka next step)
    function nextStep(choice) {
        bread.push(deviceDictionary[choice]);
        drawCurrentState();
        history.pushState(bread, 'Ремонт ' + breadToString(), '/calc/' + replaceSpace(bread).join('/'));
    }

    function runCalc() {
        drawCurrentState();
        $('.calc-item-container').delegate('.calc-item[data-role="calc"]', 'click', function () {
            nextStep($(this).data('device-id'));
        });

        $('.calc-breadcrumb-container').delegate('.calc-breadcrumb-item', 'click', function () {
            var newIndex = $(this).data('bread');
            if(bread.length - 1 > newIndex ){
                bread = bread.slice(0,newIndex+1);
                history.go(newIndex - bread.length);
            }
        });

        //prepare history api(aka history api init)
        for (var i = 0; i < bread.length; i++) {
            history.pushState(bread.slice(0, i + 1), 'Ремонт ' + deviceDictionary[bread[i].id].title, '/calc/' + replaceSpace(bread.slice(0, i + 1)).join('/'))
        }
        //listen history api, records all process
        window.onpopstate = function (event) {
            if(event.state == null)
                bread = [];
            else
                bread = event.state;
            drawCurrentState();
         };
    }

    runCalc();
}




