var map;

function base64_encode(str) {
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
        }));
}

function base64_decode(data) {
    return decodeURIComponent(atob(data).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}

function fetchForm(formObj, upload) {
    if (upload == undefined) {
        upload = false;
    }

    var formData = {};
    if (upload === true) {
        formData = new FormData(formObj[0]);
    } else {
        var form = formObj.serializeArray();
        $.each(form, function() {
            formData[this.name] = this.value || '';
        });
    }

    return formData;
}

function callAjax(controller, method, args, callback) {
    var isLoading = false,
        dataType = 'json',
        contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
        processData = true,
        urlToCall = controller + '_' + method,
        splitObject = urlToCall.toUpperCase().split("/"),
        objectCall = splitObject[0];

    if (args != null && args['silent'] == null) {
        isLoading = true;
        $("#loading").show();
    }

    if (args != null && args['dataType'] != null) {
        dataType = args['dataType'];
    }

    var data = args;
    if (args != null && args['formData'] != null) {
        if (args['upload'] != null) {
            contentType = false;
            processData = false;
        }
        data = args['formData'];
    }

    objectCall = $.ajax({
        type: "POST",
        timeout: 99999999999999,
        url: rooturl + Array(controller, method).join("/"),
        data: data,
        dataType: dataType,
        contentType: contentType,
        processData: processData,
        success: function(msg) {
            if (args['is_append'] == null) {
                $("#" + args['id']).html('');
            }
            $("#loading").hide();

            if (msg == null) {
                if (isLoading) {
                    $("#loading").hide();
                    if ($("#" + args['id']).length > 0) {
                        $("#" + args['id']).hide();
                    }
                }
                return;
            }

            if (msg == 'expired_session') {
                location.reload();
                return;
            }

            if (msg.result == false && msg.messages != '') {
                showErrorBubble("", msg.messages);
            }

            eval(base64_decode(msg.html));

            if (callback != null) {
                if (msg.result == undefined) {
                    callback(msg, args['id']);
                } else {
                    callback(msg.result, args['id']);
                }
            }
        },
        error: function(request, status, error) {
            if (request.statusText == 'abort' || request.statusText == 'error') return;
            if (error.name == 'NS_ERROR_NOT_AVAILABLE' || request.readyState == 0) {
                if (args['silent'] == null){
                    $('#infoText').html("Request is interrupted unexpectedly");
                    setTimeout(function () {
                        $('#loading').show();
                    }, 3000);

                }
            } else {
                //default is display html return
                $('#' + args['id']).html(request.responseText);
            }
        }
    });
    return objectCall;
}

// Show tooltip when input data is not valid
function showErrorBubble(control, error_msg, seconds) {
    var ctrl = false;
    if ($(control).length > 0) {
        ctrl = $(control);
    }
    var delay = seconds || 5000;
    jQuery.showMessage({
        thisMessage:	    [error_msg],
        className:		    'fail',
        position:		    'top',
        opacity:		    90,
        displayNavigation:	true,
        autoClose:		    true,
        delayTime:		    delay
    });

    if (ctrl !== false) {
        ctrl.focus();
        ctrl.addClass('alert_cnv');
    }

    return false;
}

function showWarningBubble(control, warning_msg, seconds) {
    var ctrl = false;
    if ($(control).length > 0) {
        ctrl = $(control);
    }
    var delay = seconds || 5000;
    jQuery.showMessage({
        thisMessage: [warning_msg],
        className: 'warning loading',
        position: 'top',
        opacity: 90,
        displayNavigation: true,
        autoClose: true,
        delayTime: delay
    });
    if (ctrl !== false) {
        ctrl.focus();
        ctrl.addClass('alert_cnv');
    }
    return false;
};
// Show tooltip when input data is valid
function showSuccessBubble(success_msg, seconds) {
    var delay = seconds || 5000;
    jQuery.showMessage({
        thisMessage:	    [success_msg],
        className:		    'successcnv',
        position:		    'top',
        opacity:		    90,
        displayNavigation:	true,
        autoClose:		    true,
        delayTime:		    delay
    });
    return false;
};

function hideBubble() {
    $('#showMessage').hide();
    return false;
}

function isDate(date) {
    var t = date.match(/^(\d{2})\/(\d{2})\/(\d{4})$/);
    if(t === null)
        return false;
    var d = +t[1], m = +t[2], y = +t[3];

    // Below should be a more acurate algorithm
    if(m >= 1 && m <= 12 && d >= 1 && d <= 31) {
        return true;  
    }

    return false;
}

function isEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateDates(fields, names) {
    var result = true;
    $.each(fields, function(index, field) {
        var obj = $('#'+field);
        var objValStr = String(obj.val());

        if (!isDate(objValStr)) {
            showErrorBubble('#'+field, "Sai Ä‘á»‹nh dáº¡ng " + names[index]);
            result = false;
            return false;
        }
    });
    return result;
}

function validateRequireds(fields, names) {
    var result = true;
    $.each(fields, function(index, field) {
        var obj = $('#'+field);
        var objValStr = String(obj.val());
        if (objValStr.trim() == "") {
            showErrorBubble('#'+field, "Vui lĂ²ng nháº­p " + names[index]);
            result = false;
            return false;
        }
    });
    return result;
}

function validateEmails(fields, names) {
    var result = true;
    $.each(fields, function(index, field) {
        var obj = $('#'+field);
        var objValStr = String(obj.val());
        var emails = [objValStr];
        if (objValStr.indexOf(',') > -1) {
            emails = objValStr.split(',');
        }

        var check = true;
        $.each(emails, function(i, email) {
            if (!isEmail(email.trim())) {
                showErrorBubble('#'+field, "Sai Ä‘á»‹nh dáº¡ng " + names[index]);
                check = false;
                result = false;
                return false;
            }
        });

        return check;
    });
    return result;
}

//Add commas to number string
function addCommas(str, addDecimal) {
    var arr,
        int,
        dec;
    str = str.replace(/,/g, '');

    str += '';
    if (str == '') {
        return '';
    }
    arr = str.split('.');

    if (str.slice(-1) == '%') {
        str = str.replace(/%/g, '');
        if (isNaN(str)) {
            return '0.00';
        }

        var decimal = 2;
        if (arr.length > 1) {
            decimal = decimal + arr[1].length - 1;
        }
        str = parseFloat(str) / 100;
        str = str.toFixed(decimal).toString();
    }
    if (isNaN(str)) {
        return '';
    }

    arr = str.split('.');
    int = parseInt(arr[0]) + '';
    if (arr[0].length == 0) {
        int = 0;
    }

    if (isNaN(int) || int == 'NaN') {
        return '';
    }

    dec = arr.length > 1 ? arr[1] : '';
    dec = dec.length > 1 ? '.' + dec : dec.length == 1 ? '.' + dec + 0 : '.00';

    if (addDecimal) {
        return int.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + dec;
    } else {
        return int.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
}

function stringToNumber(str) {
    if (typeof str === 'string') {
        return isNaN(parseFloat(str.replace(/,/g, ''))) ? 0 : parseFloat(str.replace(/,/g, ''));
    }
    return parseFloat(str);
}

function saveFile(url, callback, params) {
    // Get file name from url.
    var filename = url.substring(url.lastIndexOf("/") + 1).split("?")[0];
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var a = document.createElement('a');
        a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
        a.download = filename; // Set the file name.
        a.style.display = 'none';
        document.body.appendChild(a);
        a.click();
        delete a;

        if (xhr.readyState == 4 && xhr.status == 200)
        {
            callback(params); // Another callback here
        }
    };
    xhr.open('GET', url);
    xhr.send();
}

var sync1 = $("#sync1");
var sync2 = $("#sync2");
$(document).ready(function() {
    var url = window.location;
    var Yheight = $(document).height();
    $('#column-left').css({'height': Yheight});
     

    $(".categories > li > a").each(function(index, value) {
        var link = $(this).attr("href");
        if (url == link) {
            $(this).addClass('currentcate');
        } else {
            $(this).removeClass('currentcate');
        }
    });
});
function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced");
    if($("#sync2").data("owlCarousel") !== undefined){
        center(current)
    }

}

function center(number) {
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

    var num = number;
    var found = false;
    for (var i in sync2visible) {
        if (num === sync2visible[i]) {
            var found = true;
        }
    }
    if(found===false){
        if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
        } else {
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
        }
    } else if(num === sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
        sync2.trigger("owl.goTo", num-1)
    }
}

function loadExtraMenu() {
    if (sessionStorage.extra_menu == undefined) {
        callAjax('page', 'getExtraMenu', {}, loadExtraMenuCallback);
    } else {
        $('#mainmenu').html(base64_decode(sessionStorage.extra_menu));
    }
}

function loadExtraMenuCallback(result) {
    if (result !== false) {
        sessionStorage.extra_menu = base64_encode($('#mainmenu').html());
    }
}

function init() {
    loadExtraMenu();

    $('.txt-capital').on('blur', function() {
        if ($(this).hasClass('capitalised') || $('this').is('[readonly="true"]')) {
            return false;
        }
        var currVal = $(this).val();
        currVal = currVal.toLowerCase().replace(/(^|\s)[a-z]/g, function(txtVal) {
            return txtVal.toUpperCase();
        });
        $(this).val(currVal);
        $(this).addClass('capitalised');
    });

    $('.txt-date').bind('keyup','keydown', function(event) {
        var inputLength = event.target.value.length;
        if (event.keyCode != 8){
            if(inputLength === 2 || inputLength === 5){
                var thisVal = event.target.value;
                thisVal += '/';
                $(event.target).val(thisVal);
            }
        }
    });
}

$(document).ready(function() {
    init();
    Shadowbox.init();
    $('#personlatest').owlCarousel({
        navigation:true,
        auto: true,
        lazyEffect: 'fade',
        navigationText: ['<i class="icon ca-ca-right-arrow"></i>', '<i class="icon ca-ca-right-arrow"></i>'],
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination: false,
        mouseDrag: true,
        scrollPerPage: true
    });

    $('.cnv_carousel').owlCarousel({
        navigation:true,
        auto: true,
        lazyEffect: 'fade',
        navigationText: ['<i class="icon ca-ca-right-arrow"></i>', '<i class="icon ca-ca-right-arrow"></i>'],
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination: false,
        mouseDrag: true,
        scrollPerPage: true
    });

    $('.blog_news').owlCarousel({
        navigation : true,
        itemsDesktop: [1199,4],
        itemsTablet: [1024,4],
        itemsTabletSmall: false,
        itemsMobile: [540,1],
        itemsCustom: [320,1],
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        items: [4],
        pagination: true
    });

    $('#de-xuat').owlCarousel({
        autoPlay: 5000,
        slideSpeed: 200,
        navigation:false,
        auto: true,
        lazyEffect: 'fade',
        navigationText: ['<i class="icon ca-ca-right-arrow"></i>', '<i class="icon ca-ca-right-arrow"></i>'],
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination: false,
        mouseDrag: true,
        scrollPerPage: true
    });

    //carousel for image event
    $('#img-event').owlCarousel({
        navigation:true,
        lazyEffect: 'fade',
        auto: true,
        navigationText: ['<i class="icon ca-ca-right-arrow"></i>', '<i class="icon ca-ca-right-arrow"></i>'],
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination: false,
        mouseDrag: true,
        scrollPerPage: true
    });

    $(".candidate-carousel .owl-carousel").owlCarousel({
        //autoPlay: 5000,
        navigation:true,
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
    });

    $("#videolink").owlCarousel({
        //autoPlay: 5000,
        navigation:true,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
    });
    //

    //tin tuc noi bat
    $('#news-featured').owlCarousel({
        navigation:true,
        auto: true,
        lazyEffect: 'fade',
        navigationText: ['<i class="icon ca-ca-right-arrow"></i>', '<i class="icon ca-ca-right-arrow"></i>'],
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination: false,
        mouseDrag: true,
        scrollPerPage: true
    });

    $("#jobfinder").owlCarousel({
        //autoPlay: 5000,
        navigation:true,
        items : 6,
        itemsDesktop : [1199,6],
        itemsDesktopSmall : [979,6],
    });
    $('label.checkbox').click(function(e) {
        var i = $(this).find('i');
        i.toggleClass('icon-check');
        if (i.hasClass('icon-check')) {
            $(this).find('input').val(1);
        } else {
            $(this).find('input').val(0);
        }
    });
    ///
    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
        afterInit : function(el){
            var btnnext = el.find('.owl-next');
            var btnprev = el.find('.owl-prev');

            btnnext.html('<a href="javascript:void">â€º</a>');
            btnprev.html('<a href="javascript:void">â€¹</a>');
        }
    });

    sync2.owlCarousel({
        items : 6,
        itemsDesktop      : [1199,6],
        itemsDesktopSmall     : [979,6],
        itemsTablet       : [768,6],
        itemsMobile       : [479,6],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
    });

    $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });

    if ($('#owl-banner').length > 0) {
        $("#owl-banner").owlCarousel({
            lazyLoad : true,
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay:5000
        });

        var owl = $("#owl-style");

        owl.owlCarousel({
            items : 3, //10 items above 1000px browser width
            itemsDesktop : [1000,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0;
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });
    }

    //tab
    $("a.tab").click(function () { 

       $(".tab.active").removeClass("active"); 

       $(this).addClass("active"); 

       $(".content").hide(); 

       var content_show = $(this).attr("title"); 
       $("#"+content_show).show(); 
    });

    // Xu ly su kien nhan nut dang ky subscriber
    $('.btn-newslettersubscriber').on('click', function(e){
        e.preventDefault();
        var btnnewslettersubscriber = $(this);
        // add spinner
        btnnewslettersubscriber.html(spinner);

        var dataSend = {
            'femail': $('#femailnewsletter').val()
        };

        $.ajax({
            type: "POST",
            data: dataSend,
            url: rooturl + 'newslettersubscriber/registerajax',
            dataType: "json",
            error: function() {
                btnnewslettersubscriber.html('<i class="icon-mail"></i>');
            },
            success: function(json) {
                // remove spinner
                btnnewslettersubscriber.html('<i class="icon-mail"></i>');
                // renew token
                $('#ftoken').val(json.token);
                $('.newslettermessage').html(json.message);

                if (json.success == 1) {
                    $('#femailnewsletter').val('');
                }
            }
        }); //close $.ajax
    });

    if ($('.customer-radio').length > 0) {
        $('.customer-radio').on('click', function(){
            var target = $(this).data('target');
            var value = $(this).data('value');

            $('.customer-radio[data-target="' + target + '"] i').removeClass('icon-option').addClass('icon-unoption');
            $(this).find('i').addClass('icon-option');
            $('#' + target).val(value);
        });
    }

    $('.link-delete').on('click', function(e){
        e.preventDefault();
        var confirm = window.confirm('Báº¡n cĂ³ cháº¯c cháº¯n muá»‘n xĂ³a?');
        if (confirm == true) {
            var link = $(this).attr('href');
            window.location.href = link;
        }
    });

    // load sub region when region change
    $('#fregion').on('change', function(){
        var regionid = $(this).val();
        var dataSend = {
            'regionid': regionid
        };
        var optionHTML = '<option value="0"> -- Chá»n quáº­n/huyá»‡n -- </option>';
        $.ajax({
            type: "GET",
            data: dataSend,
            url: rooturl + 'region/getsubregion',
            dataType: "json",
            error: function() {
                $('#fsubregion').html(optionHTML);
            },
            success: function(json) {
                if (json.subregions.length > 0) {
                    for (var i = 0; i < json.subregions.length; i++) {
                        var subregion = json.subregions[i];
                        optionHTML += '<option value="' + subregion.id + '">' + subregion.name + '</option>';
                    }
                }
                $('#fsubregion').html(optionHTML);
            }
        }); //close $.ajax
    });

    $('.attach a').on('click', function(e){
        e.preventDefault();
        var parent = $(this).parent();
        var input = parent.find('input');
        input.trigger('click');
    });

    $('.money').autoNumeric('init', {
        mDec: 0
    });

    $('input.digit').on('blur', function(event) {
        var str = addCommas($(this).val(), false);
        if (str != '') {
            $(this).val(str);
        }
    });

    $('.menu-region strong').on('click', function() {
        var parent = $(this).parent();
        parent.find('div').toggle();
    });

    // back to top
    // hide #back-top first
    if ($('.buttomfixed').length > 0) {
        $(".buttomfixed").hide();
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.buttomfixed').fadeIn();
                } else {
                    $('.buttomfixed').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('.buttomfixed .gototop').click(function (e) {
                e.preventDefault();
                $('body, html').animate({
                    scrollTop: 0
                }, 800);
            });
        });
    }
    /*
    if ($('#homebanner').length > 0) {
        //var wHeight = $(window).height();
        //$('#homebanner').css({height: wHeight});
        var youtubeID = $('#homebanner').data('video');
        if (youtubeID != '' && typeof youtubeID !== 'undefined') {
            $('#homebanner').tubular({
                wrapper: '#homebanner',
                videoId: youtubeID,
                wrapperZIndex: 1
            });
        }
    }
    $('.fancybox').fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,
    });

    // open video
    $('.open-youtube').each(function(i, el){
        $(el).on('click', function(e) {
            e.preventDefault();
            $.fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'title': this.title,
                'width': 800,
                'height': 470,
                'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                'type': 'swf',
                'swf': {
                    'wmode': 'transparent',
                    'allowfullscreen': 'true'
                }
            });
        })
    });*/

    // btn like & dislike
    $('.btn-like').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        if (configs.uid > 0) {
            var parent = $(this).parent();
            var btnlike = $(this);
            var btndislike = parent.find('.btn-dislike');
            var likecounter = parent.find('.like-counter');
            var dislikecounter = parent.find('.dislike-counter');
            var dataSend = {
                id: $(this).data('id')
            };
            $.ajax({
                type: "POST",
                data: dataSend,
                url: rooturl + 'candidate/like',
                dataType: "json",
                error: function() {

                },
                success: function(json) {
                    if (json.success == 1) {
                        btnlike.addClass('active').find('i').addClass('active');
                        btndislike.removeClass('active').find('i').removeClass('active');
                        likecounter.html(json.countlike);
                        dislikecounter.html(json.countdislike);
                    }
                }
            }); //close $.ajax
        } else {
            $(this).fancybox({
                type: 'html',
                content: '<p class="textwr">Báº¡n cáº§n <a href="'+rooturl+'login">Ä‘Äƒng nháº­p</a> Ä‘á»ƒ sá»­ dá»¥ng chá»©c nÄƒng nĂ y.</p>'
            });
        }
    });
    // Xu ly btn nut dislike
    $('.btn-dislike').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        if (configs.uid > 0) {
            var parent = $(this).parent();
            var btndislike = $(this);
            var btnlike = parent.find('.btn-like');
            var likecounter = parent.find('.like-counter');
            var dislikecounter = parent.find('.dislike-counter');
            var dataSend = {
                id: $(this).data('id')
            };
            $.ajax({
                type: "POST",
                data: dataSend,
                url: rooturl + 'candidate/dislike',
                dataType: "json",
                error: function() {
                    
                },
                success: function(json) {
                    if (json.success == 1) {
                        btnlike.removeClass('active').find('i').removeClass('active');
                        btndislike.addClass('active').find('i').addClass('active');
                        likecounter.html(json.countlike);
                        dislikecounter.html(json.countdislike);
                    }
                }
            }); //close $.ajax
        } else {
            $.fancybox(
                '<p style="line-height:100px">Báº¡n cáº§n <a href="' + rooturl + 'login">Ä‘Äƒng nháº­p</a> Ä‘á»ƒ sá»­ dá»¥ng chá»©c nÄƒng nĂ y.</p>',
                {
                    'autoDimensions': false,
                    'width': 350,
                    'height': 'auto',
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                }
            );
        }
    });

    $('.btn-wishlist').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        var allow = true;
        var self = $(this);
        self.fancybox();
        if ($(this).hasClass('disable')) {
            allow = false;
        } else {
            $(this).addClass('disable');
        }
        if (configs.uid > 0) {
            if (allow) {
                var dataSend = {
                    id: $(this).data('id')
                };
                $.ajax({
                    type: "POST",
                    data: dataSend,
                    url: rooturl + 'wishlist/add',
                    dataType: "json",
                    error: function() {
                    },
                    success: function(json) {
                        $.fancybox(
                            '<p style="line-height:100px">' + json.message + '</p>',
                            {
                                'autoDimensions': false,
                                'width': 350,
                                'height': 'auto',
                                'transitionIn': 'none',
                                'transitionOut': 'none'
                            }
                        );
                    },
                    complete: function() {
                        self.removeClass('disable')
                    }
                }); //close $.ajax
            }
        } else {
            $.fancybox(
                '<p class="textwr">Báº¡n cáº§n <a href="' + rooturl + 'login">Ä‘Äƒng nháº­p</a> Ä‘á»ƒ sá»­ dá»¥ng chá»©c nÄƒng nĂ y.</p>',
                {
                    'autoDimensions': false,
                    'width': 350,
                    'height': 'auto',
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                }
            );
        }
    });

    $('.btn-removewishlist').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        var allow = true;
        var self = $(this);
        var parent = self.parent('.item');
        self.fancybox();
        if ($(this).hasClass('disable')) {
            allow = false;
        } else {
            $(this).addClass('disable');
        }
        if (configs.uid > 0) {
            if (allow) {
                var dataSend = {
                    id: $(this).data('id')
                };
                $.ajax({
                    type: "POST",
                    data: dataSend,
                    url: rooturl + 'wishlist/delete',
                    dataType: "json",
                    error: function() {
                    },
                    success: function(json) {
                        if (json.success == 1) {
                            parent.hide();
                        }
                        $.fancybox(
                            '<p style="line-height:100px">' + json.message + '</p>',
                            {
                                'autoDimensions': false,
                                'width': 350,
                                'height': 'auto',
                                'transitionIn': 'none',
                                'transitionOut': 'none'
                            }
                        );
                    },
                    complete: function() {
                        self.removeClass('disable')
                    }
                }); //close $.ajax
            }
        } else {
            $.fancybox(
                '<p class="textwr">Báº¡n cáº§n <a href="' + rooturl + 'login">Ä‘Äƒng nháº­p</a> Ä‘á»ƒ sá»­ dá»¥ng chá»©c nÄƒng nĂ y.</p>',
                {
                    'autoDimensions': false,
                    'width': 350,
                    'height': 'auto',
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                }
            );
        }
    });
    
    // Xu ly filter trang chu
    $('.filtergroup .dropdown .filter a').on('click', function(e){
        e.preventDefault();
        var value = $(this).attr('data-value');
        var text = $(this).text();
        var parent = $(this).parent().parent().parent();
        var dropdown = parent.find('.dropdown');
        var span = parent.find('h3').find('span');
        span.html(text);
        parent.attr('data-value', value).data('value', value);
    });
    // Xu ly nut search
    $('.filtergroup .btnsearch').on('click', function(e){
        e.preventDefault();
        var url = rooturl + 'candidate';
        var filter = '';
        var keyword = $('.filtergroup #keyword').val();
        if (keyword != '') {
            filter = 'keyword=' + keyword.replace(/\s/g, '+');
        }
        $('.filtergroup').each(function(index, el) {
            var name = $(el).attr('data-name') || '';
            var value = $(el).attr('data-value') || '';
            if (name != '' && value != '') {
                filter += (filter != '' ? '&' : '') + name + '=' + value;
            }
        });
        url += '?' + filter;
        window.location.href = url;
    });
    // Xu ly ngo phim khung search
    $('#keyword').on('keyup', function(e){
        var code = e.keyCode || e.which;
        if (code == 13) { //Enter
            var keyword = $(this).val();
            if (keyword != '') {
                $('.filtergroup .btnsearch').trigger('click');
            }
        }
    });
    // ===================================================
    // CANDIDATE PROFILE
    $('.hidden_info_button').on('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        $(this).hide();
        $(this).parent().parent().find('.hidden_info').show();
    });
    $('.contactnow, .buttomfixed .contact, .linkcontact, .showcontact').on('click', function(e){
        e.preventDefault();
        var code = $(this).attr('data-code');
        $.fancybox({
            width: '300px',
            type: 'iframe',
            content: '<div class="callforme">MĂ£ á»©ng viĂªn: '+code+'<br />Gá»i ' + configs.hotline + '</div>'
        });
    });
});

function oauth_facebooklogin()
{
    var from = document.getElementById("ffrom").value;
    var redirect_uri = rooturl + 'register/facebook';
    if (typeof from !== 'undefined' && from != '') {
        redirect_uri += '?from=' + from;
    }
    redirect_uri = encodeURIComponent(redirect_uri);
    var url = "https://www.facebook.com/dialog/oauth?client_id="+configs.facebook.appid+"&redirect_uri=" + redirect_uri
    +"&scope=email";
    window.open(url, "mywindowfacebook","location=1,status=1,scrollbars=1, width=1000,height=500");
}

$.fn.focusEnd = function() {
    $(this).focus();
    var tmp = $('<span />').appendTo($(this)),
        node = tmp.get(0),
        range = null,
        sel = null;

    if (document.selection) {
        range = document.body.createTextRange();
        range.moveToElementText(node);
        range.select();
    } else if (window.getSelection) {
        range = document.createRange();
        range.selectNode(node);
        sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    }
    tmp.remove();
    return this;
};

$(document).ready(function() {
    $("#candine .tabs-candine a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $("#candine .tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $("#company .tabs-candine a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $("#company .tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $("#page_profile .tabs-people a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $("#page_profile .tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $("#page-social .tab-job a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $("#page-social .tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $("#checked .customer-radio").click(function (event) {
        event.preventDefault();
        $(this).siblings().removeClass("option");
        $(this).addClass("option");
    });
    $(".policy i").click(function () {
        if($(this).hasClass("icon-uncheck")){
            $(this).removeClass("icon-uncheck");
            $(this).addClass("icon-check");
        }else {
            $(this).removeClass("icon-check");
            $(this).addClass("icon-uncheck");
        }
    });
});

$(document).ready(function(){
    if($('textarea').hasClass('textarea-job')){
        var kinhnghiem = $('.textarea-job').val();
        $('.textarea-out').html(kinhnghiem.replace(/\n/g,'<br />'));
    }
});

//Like cho tung hinh
$(document).ready(function(){
    $('.btnlikepic').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();

        if (configs.uid > 0) {
            var btnlike = $(this);
            var dataSend = {
                peopleid : $('#wraplikepic').attr('data-id'),
                picid: $(this).data('id')
            };
            $.ajax({
                type: "POST",
                data: dataSend,
                url: rooturl + 'peoplemedialike/likepic',
                dataType: "json",
                error: function() {
                },
                success: function(json) {
                    if (json.success == 1) {
                        if(json.type == 1){
                            btnlike.addClass('active');
                            $('.btnlikepic').html('<i class="icon ca-ca-love"></i>ÄĂ£ thĂ­ch');
                            $('.countlikepic').html(json.countlike);
                        }else{
                            btnlike.removeClass('active');
                            $('.btnlikepic').html('<i class="icon ca-ca-love"></i>ThĂ­ch áº£nh');
                            $('.countlikepic').html(json.countlike);
                        }
                    }
                }
            }); //close $.ajax
        } else {
            var base64url = $('.urlBase').val();
            alert('Báº¡n cáº§n Ä‘ang nháº­p Ä‘á»ƒ sá»­ dá»¥ng chá»©c nÄƒng nĂ y.');
            window.location.href = rooturl + 'login?from=' + base64url;
        }
    });
});

$(document).ready(function(){
    $('#actLogin').on('click', function(e){
        ga('send', 'event', 'Login', 'click-login', 'header-nav');
    });
    $('#actRegiter').on('click', function(e){
        ga('send', 'event', 'Register', 'click-register', 'header-nav');
    });
    $('#actFacebook').on('click', function(e){
        ga('send', 'event', 'Login', 'login-facebook', 'login-dialog');
    });
    $('#actbtnLogin').on('click', function(e){
        ga('send', 'event', 'Login', 'login-email', 'login-dialog');
    });
    $('#actForget').on('click', function(e){
        ga('send', 'event', 'Forgot Password', 'click-forgot-passwd', 'login-dialog');
    });
    $('#actlinkRegiter').on('click', function(e){
        ga('send', 'event', 'Register', 'click-register', 'login-dialog');
    });

    $('#atcFacebookRegister').on('click', function(e){
        ga('send', 'event', 'Register', 'register-facebook', 'register-dialog');
    });
    $('#actRegisMail').on('click', function(e){
        ga('send', 'event', 'Register', 'register-email', 'register-dialog');
    });
    $('#actlinkLogin').on('click', function(e){
        ga('send', 'event', 'Login', 'click-login', 'register-dialog');
    });
    $('#actUplink').on('click', function(e){
        ga('send', 'event', 'Profile', 'click-update', 'big-banner');
    });
    $('#actLoglink').on('click', function(e){
        ga('send', 'event', 'Profile', 'click-login', 'big-banner');
    });

    $('#actLoghome').on('click', function(e){
        ga('send', 'event', 'Login', 'click-login', 'left-nav');
    });
});

$(document).ready(function(){
    if ($('.peoplecategory').length > 0) {
        $('.peoplecategory').each(function(index, el){
            var container = $(el);
            container.find('.peoplecategory-choice li a').each(function() {
                $(this).on('click', function(){
                    var boxid = $(this).data('id');
                    var name = $(this).data('name');

                    $('.peoplecategory-choice li a[data-name="' + name + '"]').removeClass('active');
                    $(this).addClass('active');

                    container.find('.listcandidate').removeClass('active');
                    container.find('#' + boxid).addClass('active');
                });
            });
        });
    }
});

function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

function isImageFile(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
    case 'jpg':
    case 'jpeg':
    case 'gif':
    case 'bmp':
    case 'png':
        return true;
    }
    return false;
}

function isApplicationFile(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
    case 'pdf':
    case 'xlsx':
    case 'docx':
    case 'xls':
    case 'doc':
        return true;
    }
    return false;
}

function generateMap(idMapDiv, address, zoom) {
    var geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
        zoom: zoom,
        center: latlng,
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(idMapDiv), myOptions);
    if (geocoder) {
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    map.setCenter(results[0].geometry.location);

                    var infowindow = new google.maps.InfoWindow(
                        { content: '<b>'+address+'</b>',
                            size: new google.maps.Size(150,50)
                        });

                    var marker = new google.maps.Marker({
                        position: results[0].geometry.location,
                        map: map,
                        title:address
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map,marker);
                    });

                } else {
                    alert("KhĂ´ng xĂ¡c Ä‘á»‹nh Ä‘Æ°á»£c Ä‘á»‹a chá»‰ trĂªn Google Maps");
                }
            } else {
                alert("Lá»—i sinh báº£n Ä‘á»“: " + status);
            }
        });
    }
}

function initMapAutocomplete() {
    map = new google.maps.Map(document.getElementById('mapGoogle'), {
            //center: {lat: -33.8688, lng: 151.2195},
            center: {lat: 10.773599, lng: 106.694420},
            zoom: 13,
            mapTypeId: 'roadmap'
        });

    if ($('#fworkingaddress').val().trim() != "") {
        generateMap('mapGoogle', $('#fworkingaddress').val(), 17);
    }
    // Create the search box and link it to the UI element.
    var input = document.getElementById('fworkingaddress');
    var searchBox = new google.maps.places.SearchBox(input);


    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}

function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
        return false;
    }
    return true;
}

function $_GET(param) {
    var vars = {};
    window.location.href.replace(location.hash, '').replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}
function isFacebookApp() {
    var ua = navigator.userAgent;
    return (ua.indexOf("FBAN") > -1) || (ua.indexOf("FBAV") > -1);
}

/******************** *******************/
/*
 * Image preview script
 * powered by jQuery (http://www.jquery.com)
 *
 * written by Alen Grakalic (http://cssglobe.com)
 *
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */

this.imagePreview = function(){
    /* CONFIG */

    xOffset = 10;
    yOffset = 30;

    // these 2 variable determine popup's distance from the cursor
    // you might want to adjust to get the right result

    /* END CONFIG */
    $("a.previewImg").hover(function(e){
            this.t = this.title;
            this.title = "";
            var c = (this.t != "") ? "<br/>" + this.t : "";
            $("body").append("<p id='previewImg'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");
            $("#previewImg")
                .css("top",(e.pageY - xOffset) + "px")
                .css("left",(e.pageX + yOffset) + "px")
                .fadeIn("fast");
        },
        function(){
            this.title = this.t;
            $("#previewImg").remove();
        });
    $("a.previewImg").mousemove(function(e){
        $("#previewImg")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px");
    });
};


// starting the script on page load
$(document).ready(function(){
    imagePreview();
});

(function($){var pl=/\+/g,searchStrict=/([^&=]+)=+([^&]*)/g,searchTolerant=/([^&=]+)=?([^&]*)/g,decode=function(s){return decodeURIComponent(s.replace(pl," "));};$.parseQuery=function(query,options){var match,o={},opts=options||{},search=opts.tolerant?searchTolerant:searchStrict;if('?'===query.substring(0,1)){query=query.substring(1);}while(match=search.exec(query)){o[decode(match[1])]=decode(match[2]);}return o;};$.getQuery=function(options){return $.parseQuery(window.location.search,options);};$.fn.parseQuery=function(options){return $.parseQuery($(this).serialize(),options);};}(jQuery));

// YOUTUBE VIDEO CODE
$(document).ready(function(){
// BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
// Modal Window for dynamically opening videos
    $('a[href^="https://www.youtube.com"]').on('click', function(e){
        // Store the query string variables and values
        // Uses "jQuery Query Parser" plugin, to allow for various URL formats (could have extra parameters)
        var queryString = $(this).attr('href').slice( $(this).attr('href').indexOf('?') + 1);
        var queryVars = $.parseQuery( queryString );

        // if GET variable "v" exists. This is the Youtube Video ID
        if ( 'v' in queryVars )
        {
            // Prevent opening of external page
            e.preventDefault();

            // Variables for iFrame code. Width and height from data attributes, else use default.
            var vidWidth = 800; // default
            var vidHeight = 460; // default
            if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
            if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
            var iFrameCode = '<iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="https://www.youtube.com/embed/'+  queryVars['v'] +'?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1" frameborder="0"></iframe>';

            // Replace Modal HTML with iFrame Embed
            $('#mediaModal .modal-body').html(iFrameCode);
            // Set new width of modal window, based on dynamic video content
            $('#mediaModal').on('show.bs.modal', function () {
                // Add video width to left and right padding, to get new width of modal window
                var modalBody = $(this).find('.modal-body');
                var modalDialog = $(this).find('.modal-dialog');
                var newModalWidth = vidWidth + parseInt(modalBody.css("padding-left")) + parseInt(modalBody.css("padding-right"));
                newModalWidth += parseInt(modalDialog.css("padding-left")) + parseInt(modalDialog.css("padding-right"));
                newModalWidth += 'px';
                // Set width of modal (Bootstrap 3.0)
                $(this).find('.modal-dialog').css('width', newModalWidth);
            });

            // Open Modal
            $('#mediaModal').modal();
        }
    });

    $("#mediaModal").on('hidden.bs.modal', function () {
        $("#mediaModal iframe").attr("src", '');
    });
});