"use strict";
//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $('.mobile_menu_list').css({
                'display':'flex',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.mobile_menu_list').css({
                'display':'none',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

//выделение активной ссылки
$(function () {
    $(".header_nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
    })
});
$(function () {
    $(".mobile_menu_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
    })
});

