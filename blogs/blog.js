let blog_section = document.querySelector(`.blog_content`);
let body = document.getElementsByTagName(`body`)[0];
let shr_btn = document.querySelectorAll('.share_btn');
let np_wrap = document.querySelector('.no_post_wrap');
let ap_parent = document.querySelector('.add_post_par');
let ap_main = document.querySelector('.add_post');
let publish_btn = document.querySelector('.publish');
let cancel_btn = document.querySelector('.cancel_b');
let home = document.querySelector('.breadcrumb .home a');

np_wrap.style.opacity = '0';
function show_np_img(){
    setTimeout(() => {
        np_wrap.style.opacity = '1';
    }, 3000);
}
function show_btn(){
    // blank
}

function np_min_hght(){
    if(window.innerHeight>body.offsetHeight){
        blog_section.style.minHeight = `${blog_section.offsetHeight+window.innerHeight-document.getElementsByTagName('body')[0].offsetHeight}px`;
    }
    else blog_section.style.minHeight = 'unset';
}

let prev_scroll;
let ap_flag = 0;
let hght = ap_main.offsetHeight;
ap_parent.style.height = '0px';
ap_main.style.opacity = '0';
function open_ap(){
    prev_scroll = window.scrollY;
    ap_parent.style.height = hght+100+'px';
    setTimeout(() => {
        ap_main.style.opacity = '1';
        document.documentElement.scrollTop = ap_main.offsetTop;
    }, 700);
    menuClose();
    ap_flag = 1;
}
function close_ap(){
    setTimeout(() => {
        document.documentElement.scrollTop = prev_scroll;
    }, 700);
    ap_parent.style.height = '0px';
    ap_main.style.opacity = '0';
    ap_flag = 0;
}
function toggle_ap(){
    if(ap_flag === 0){open_ap();}
    else{close_ap();}
}
//----------------EVENTS
window.addEventListener('load', function(){
    np_min_hght();
    show_np_img();
    show_btn();
});
window.addEventListener('resize', function(){
    np_min_hght();
    show_btn();
});
cancel_btn.addEventListener('click', close_ap);
shr_btn[0].addEventListener('click', open_ap);
home.addEventListener('focus', hide_acc);


// window.addEventListener('resize',function(){
//     if(window.innerWidth>630) {extra_pad = 15;}
//     else {extra_pad = 10;}
//     ap_parent.style.paddingTop = `${navbar.offsetHeight+extra_pad}px`;
//     team_menu.style.top = `${navbar.offsetHeight+extra_pad}px`;
// });
// window.addEventListener('load',function(){
//     if(window.innerWidth>600) extra_pad = 15;
//     else extra_pad = 10;
//     ap_parent.style.paddingTop = `${navbar.offsetHeight+extra_pad}px`;
//     team_menu.style.top = `${navbar.offsetHeight+extra_pad}px`;
// });
// window.addEventListener('scroll', function(){
//     if(window.innerWidth>600) extra_pad = 15;
//     else extra_pad = 10;
//     ap_parent.style.paddingTop = `${navbar.offsetHeight+extra_pad}px`;
//     team_menu.style.top = `${navbar.offsetHeight+extra_pad}px`;
// });