<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medfin | Knee Replacement</title>
    <link rel="icon" type="image/x-icon" href="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://assets.medfin.in/v02.12.23/assets-v3/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://medfincms.s3.ap-south-1.amazonaws.com/main.css">
    <link rel="stylesheet" href="https://assets.medfin.in/v02.12.23/assets-v3/common/css/slick-slider.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="https://m2.medfin.in/medfin/js/validate.js"></script>
    <script type="text/javascript" src="https://m.medfin.in/assets/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="https://m2.medfin.in/medfin/js/blockUI.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="https://m2.medfin.in/medfin/js/validate.js"></script>
    <script type="text/javascript" src="https://m.medfin.in/assets/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="https://m2.medfin.in/medfin/js/blockUI.js"></script> -->
<style>
    body, html {
    font-family: 'Mulish', sans-serif;
}
:root {
    --medfin--primary: #1D66C7;
    --mdefin--white: #fff;
    --mdefin--grey: #514F4F;
    --medfin--primary2: #2878E3;
    --medfin--secondary: #EE7F00;
    --mdefin--whatsapp: #39BD4C;
}
/*nav css*/
.custom__navbar {
    background-color: var(--mdefin--white);
    padding: 1rem 0rem;
}
.custom__navbar .navbar-logo {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 6rem;
}
.callBtn {
    background-color: var(--medfin--primary);
    color: var(--mdefin--white);
    font-size: .875rem;
    font-weight: 600;
    border-width: 1px;
    border-style: solid;
    border-color: var(--medfin--primary);
    text-decoration: none;
    padding: .5rem .75rem;
    border-radius: .25rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: .2s ease all;
}
.callBtn:hover, .callBtn:focus, .callus--btn:hover {
    outline: none;
    box-shadow: none;
    background-color: #2878E3;
    color: var(--mdefin--white);
}
.whatsappBtn {
    background-color: var(--mdefin--whatsapp) !important;
    border-color: var(--mdefin--whatsapp) !important;
}
.whatsappBtn:hover, .whatsappBtn:focus {
    background-color: #2da840 !important;
}
.font--small {
    font-size: .7rem !important;
}
.font-0 {
    font-size: 0;
}
/*Nav CSS*/

/*Header CSS*/
.custom__landing__header {
    /* margin-top: 4rem; */
    background: linear-gradient(90deg, #1D66C7 0.73%, #1D66C7 34.49%, rgba(29, 102, 199, 0) 58.82%), url('../images/hero.png'), #1D66C7;
    padding: 2.5rem 0rem;
    background-repeat: no-repeat;
    background-position: center right;
    background-size: cover;
}
.display1--heading {
    font-size: 1.5rem;
    margin: 0;
    line-height: 1.3;
    font-weight: 700;
    color: rgba(255, 255, 255, .95);
    letter-spacing: -0.02em;
}
.highligher {
    background-color: var(--mdefin--white);
    border-radius: .125rem;
    padding: .15rem .5rem;
    text-align: center;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.highligher-text {
    background: linear-gradient(92.5deg, #3365C0 18.27%, #3365C0 67.18%, #9A32ED 82.19%, #E23F80 95.67%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.support--text {
    font-weight: 400;
    font-size: .875rem;
    color: var(--mdefin--white);
    opacity: .8;
    margin: 0;
    line-height: 1.3;
}
.formbox {
    background: var(--mdefin--white);
    border: 2px solid #2878E3;
    box-shadow: 0px 32px 64px -12px rgba(16, 24, 40, 0.14);
    border-radius: .5rem;
    padding: 1.25rem;
    max-width: 450px;
}
.form--heading {
    font-weight: 700;
    font-size: 1.125rem;
    margin: 0;
    line-height: 1.3;
    color: var(--medfin--primary);
}
.form--text {
    font-weight: 400;
    font-size: .875rem;
    margin: 0;
    line-height: 1.3;
    color: var(--medfin--primary);
    opacity: .8;
}
.input--box {
    border: 1px solid #1D66C7;
    border-radius: .25rem;
    padding: .7rem 1rem;
    color: var(--mdefin--grey);
}
.medfin__formgroup {
    position: relative;
}
.medfin__formgroup + .medfin__formgroup {
    margin-top: 1rem;
}
.flagbox {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    line-height: 48px;
    padding-left: 20px;
}
.ps--6 {
    padding-left: 5.5rem !important;
}
.secondaryBtn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--mdefin--white);
    background-color: var(--medfin--secondary);
    font-size: .875rem;
    font-weight: 600;
    padding: 1rem 1.5rem;
    border-radius: .5rem;
    border: 0;
    transition: .2s ease all;
}
.secondaryBtn:hover, .secondaryBtn:focus {
    background-color: #df7f11;
    color: var(--mdefin--white);
}
.header__fetaurebox__wrapper {
    max-width: 620px;
}
.fetaurebox__cards {
    box-shadow: 0px 32px 64px -12px rgba(16, 24, 40, 0.14);
    border-radius: 8px;
    background-color: var(--medfin--primary2);
    padding: .75rem;
    text-align: center;
    /* min-height: 125px; */
}
.fetaurebox__cards--title {
    font-size: .75rem;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
    color: var(--mdefin--white);
    opacity: .8;
}
.header__fetaurebox__wrapper > .row {
    margin-left: -8px;
    margin-right: -8px;
}
.header__fetaurebox__wrapper > .row > div[class^="col"] {
    padding-left: 8px;
    padding-right: 8px;
}
/*Header CSS*/
.bg--primary {
    background-color: var(--medfin--primary);
}
.patient__inner__wrapper {
    border-top-right-radius: 2.5rem;
    border-top-left-radius: 2.5rem;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    background-color: var(--mdefin--white);
}
.patient__grid__items {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 1.5rem;
    max-width: 1040px;
    padding-left: 1.5rem;
}
.patient__item {
    display: grid;
    grid-template-columns: 40px 1fr;
    grid-gap: 1rem;
}
.patient__item--title {
    font-weight: 800;
    margin: 0;
    line-height: 1;
    color: var(--medfin--primary);
    font-size: 1rem;
}
.patient__item--text {
    font-weight: 600;
    font-size: 12px;
    margin: 0;
    margin-top: .6rem;
    line-height: 1.4;
    color: var(--medfin--primary2)
}
.plans__section {
    padding: 2rem 0rem 4rem;
}
.section--title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--medfin--primary);
    margin: 0;
    line-height: 1.3;
}
.section--text {
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
    color: var(--mdefin--grey);
    font-size: .875rem;
}
.max--800 {
    max-width: 850px;
}
.max--700 {
    max-width: 700px;
}
.plans__wrapper {
    /* box-shadow: 0px 24px 48px -12px rgba(16, 24, 40, 0.18); */
    position: relative;
    margin-top: 2rem;
}
.plans__wrapper--desktop {
    display: grid;
    grid-gap: 0rem;
    grid-template-columns: 210px 1fr;
}
.plans__wrapper--column2 {
    display: grid;
    grid-template-columns: 1fr 250px;
    grid-gap: 1rem;
    align-items: center;
}
.current__plans--logo {
    padding: 1.5rem 0rem;
}
.plan__box {
    box-shadow: 0px 24px 48px -12px rgba(16, 24, 40, 0.18);
}
.outline-stroke {
    outline: 2px solid #ee7f00;
    position: absolute;
    top: 2px;
    right: 0;
    bottom: 0;
    left: 0;
}
.plan__box-none {
    box-shadow: none !important;
    position: relative;
}
.plan__box--cell {
    font-size: .7rem;
    font-weight: 600;
    margin: 0;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: .7rem .25rem;
    line-height: 1.3;
    background-color: var(--medfin--primary2);
    color: rgba(255, 255, 255, 8);
    width: 100%;
    position: relative;
}
.plan__box--cell.active {
    background-color: var(--medfin--secondary);
}
.plan__box--cell.active-grey {
    background-color: var(--mdefin--grey);
}
.outer--text {
    font-size: .8rem;
    color: var(--mdefin--grey);
    font-weight: 600;
    line-height: 1.4;
    text-align: center;
    margin: 0;
}
.bg--fa {
    background-color: #fafafa !important;
}
.text--grey {
    color: var(--mdefin--grey) !important;
}
.plan__box--cell > img {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    max-width: 90%;
}
.mt--80 {
    margin-top: 75px;
}
.plans__wrapper--column1 .plan__box--cell {
    text-align: start;
    justify-content: flex-start;
}
.plans__wrapper--column1 .plan__box .plan__box--cell:nth-child(3), .plans__wrapper--column2 .plan__box .plan__box--cell:nth-child(4) {
    min-height: 160px;
}
.callus--btn, .knowmore--btn {
    color: var(--mdefin--white);
    background-color: #2E5EB4;
    text-decoration: none;
    border: 0;
    transition: .2s ease all;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: .875rem;
    font-weight: 700;
    border-radius: .25rem;
    padding: 1em 2em;
    min-width: 260px;
}
.knowmore--btn {
    background-color: var(--medfin--secondary) !important;
}
.knowmore--btn:hover, .knowmore--btn:focus {
    background-color: #df7f11 !important;
    color: var(--mdefin--white);
}
.mt--40 {
    margin-top: 40px !important;
}
.mt--60 {
    margin-top: 40px !important;
}
.plans__wrapper--mobile {
    display: grid;
    grid-template-columns: 1fr 120px;
    max-width: 420px;
    margin-left: auto;
    margin-right: auto;
}
.mt--65 {
    margin-top: 117px;
}
.plans__wrapper--mobile .plan__box--cell {
    min-height: 70px;
}
.plans__wrapper--mobile .plans__mobile--column1 .plan__box.planbox__leftbar .plan__box--cell:nth-child(3),.plans__wrapper--mobile .plans__mobile--column1 .planbox__rightbar .plan__box .plan__box--cell:nth-child(4), .plans__wrapper--mobile .plans__mobile--column2 .plan__box.planbox__rightbar .plan__box--cell:nth-child(4) {
    min-height: 160px;
}
.slick-arrow {
    display: none !important;
}
.z1 {
    z-index: 1;
}
.slick__slidernav {
    width: 100%;
    text-align: center;
    margin-top: 1.5rem;
}
ul.slick-dots {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
}
ul.slick-dots li {
    margin: 0 5px;
}
ul.slick-dots li button {
    font-size: 0;
    border: 0;
    background: #EE7F00;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    opacity: .5;
}
ul.slick-dots li.slick-active button {
    opacity: 1;
}
.spacer__section {
    padding: 4rem 0rem;
}
.bg-F8F9FC {
    background-color: #F8F9FC;
}
.list__types {
    display: grid;
    grid-template-columns: 25px 1fr;
    grid-gap: .5rem;
    align-items: center;
}
.list__types--title {
    font-weight: 500;
    color: var(--medfin--primary);
    margin: 0;
    line-height: 1.4;
    text-align: start;
    font-size: .875rem;
}
.partner--box {
    box-shadow: 0px 4px 8px -2px rgba(16, 24, 40, 0.1), 0px 2px 4px -2px rgba(16, 24, 40, 0.06);
    border-radius: 8px;
    background-color: var(--mdefin--white);
    padding: 1rem;
    position: relative;
    min-height: 90px;
}
.partner--box > img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-height: 100%;
    max-height: 75%;
    max-width: 75%;
}
.mx-ng-2 {
    margin-left: -7px;
    margin-right: -7px;
}
.col-lg-2b {
    margin-top: 1rem;
    padding-left: 7px;
    padding-right: 7px;
}
.text--primary {
    color: var(--medfin--primary) !important;
}
.bg--pattern {
    background-color: var(--medfin--primary);
    /* background: linear-gradient(90deg, #1D66C7 0.73%, #1D66C7 34.49%, rgba(29, 102, 199, 0) 58.82%), url('../images/emi.png'), #1D66C7; */
    /* background-image: url('../images/emi.png'); */
    padding-top: 2.5rem;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
.outlineBtn {
    color: var(--mdefin--white);
    border: 1px solid #FFFFFF;
    border-radius: 8px;
    padding: .8rem 1.25rem;
    text-decoration: none;
    font-weight: 600;
    width: 100%;
    display: inline-block;
    transition: .2s ease all;
    background-color: transparent;
}
.outlineBtn:hover, .outlineBtn:focus {
    background-color: var(--mdefin--white);
    color: var(--medfin--primary);
}
.card__layout__grid {
    display: grid;
    grid-gap: 1rem;
}
.card--box {
    box-shadow: 0px 4px 8px -2px rgba(16, 24, 40, 0.1), 0px 2px 4px -2px rgba(16, 24, 40, 0.06);
    border-radius: 4px;
    padding: 1.5rem 1rem .5rem;
    position: relative;
}
.card--boxinfo {
    display: grid;
    grid-template-columns: 60px 1fr;
    grid-gap: 1rem;
    margin-top: 1rem;
}
.card--box--pic {
    width: 100%;
    height: 60px;
    overflow: hidden;
    border-radius: 4px;
    filter: drop-shadow(0px 1px 3px rgba(16, 24, 40, 0.1)) drop-shadow(0px 1px 2px rgba(16, 24, 40, 0.06));
}
.card--box--pic > img {
    width: 100%;
    height: 100%;
    object-position: top;
    object-fit: cover;
}
.card--box--author {
    color: var(--mdefin--grey);
    font-weight: 400;
    margin: 0;
    font-size: .875rem;
}
.card--box--title {
    font-size: 1.125rem;
    color: var(--medfin--primary);
    margin: 0;
    line-height: 1.1;
    font-weight: 700;
}
.card--box--text {
    color: var(--mdefin--grey);
    font-weight: 400;
    margin: 0;
    font-size: 12px;
    padding-top: 0.85rem;
    border-top: 1px solid #EAECF0;
    margin-top: 0.75rem
}
.city--badge {
    background-color: #E23F80;
    color: var(--mdefin--white);
    padding: .35rem .975rem;
    border-radius: 0px 0px 0px 4px;
    font-weight: 400;
    font-size: 14px;
    position: absolute;
    top: 0;
    right: 0;
}
.view--profile {
    display: inline-block;
    color: var(--medfin--primary);
    font-size: .75rem;
    text-decoration: none;
    font-weight: 600;
}
.bg--F8F9FC {
    background-color: #F8F9FC;
}
.list-gap li + li {
    margin-top: 1.5rem;
}
.testimonial__card {
    margin-top: 2.5rem;
    display: grid;
    grid-gap: 1.25rem;
}
.testimonial__card--box {
    background: #FCFCFD;
    border-radius: 8px;
    position: relative;
    padding: 1.5rem;
}
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
    border-radius: 6px;
}
.embed-responsive-16by9::before {
    padding-top: 56.25%;
}
.embed-responsive::before {
    display: block;
    content: "";
}
.embed-responsive iframe {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;    
}
.testimonial__card--title {
    color: var(--medfin--primary);
    font-weight: 700;
    font-size: 1rem;
    margin: 0;
}
.testimonial__card--text {
    font-weight: 400;
    font-size: .8rem;
    margin: 0;
    color: var(--mdefin--grey);
}
.maxw--1000 {
    max-width: 1000px;
}
.accordion__custom .accordion-item {
    border: 1px solid var(--medfin--primary2);
    border-radius: 8px;
    overflow: hidden;
}
.accordion__custom .accordion-item .accordion-button {
    background-color: transparent;
    box-shadow: none;
    outline: none;
    padding-right: 35px;
}
.accordion__custom .accordion-item + .accordion-item {
    margin-top: 1rem;
}
.accordion-button:not(.collapsed) {
    color: var(--medfin--primary);
}
.accordion__custom .accordion-item .accordion-button::after {
    background-image: none;
    position: absolute;
    right: 0;
    right: 15px;
    content: '-';
    font-size: 27px;
    height: auto;
    width: auto;
    transform: none;
}
.accordion__custom .accordion-item .accordion-button.collapsed::after {
    content: '+';
}
.custom__footer {
    background-color: var(--medfin--primary);
    text-align: center;
    padding: 1rem 0rem;
}
.custom__footer p {
    color: var(--mdefin--white);
    font-weight: 400;
    margin: 0;
    font-size: .875rem;
    line-height: 1;
}
.detail--modal .modal-body {
    padding: 1.5rem;
}
.detail--modal .accordion__custom .accordion-item {
    border-radius: 0;
    border-top: 0;
    border-right: 0;
    border-left: 0;
    border-bottom-color: #EAECF0;
}
.detail--modal .accordion__custom .accordion-item + .accordion-item {
    margin-top: 0;
}
.detail--modal .accordion__custom .accordion-item:last-child {
    border-bottom: 0;
}
.detail--modal .accordion__custom .accordion-item .accordion-button, .detail--modal .accordion__custom .accordion-item .accordion-body {
    padding-left: 0;
}
.bottombar {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(200px);
    transition: 1s ease all;
    z-index: 9;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.05);
}
.viewed .bottombar {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
}
.cursor-default {
    cursor: default !important;
}
.detail--modal .accordion__custom .accordion-item .accordion-button {
    border-top: 1px solid #EAECF0;
    border-radius: 0;
}
.accordion__custom {
    margin-top: 1.5rem;
}
.detail--modal .modal-footer {
    background-color: #F8F9FC;
    border: 0;
}
.modal-content {
    border: 0;
}
.top-cards {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 1rem;
    margin-top: 1.25rem;
}
.max--80 {
    max-width: 80px;
    padding: 1rem 0rem;
    margin-left: auto;
    margin-right: auto;
}
.font--14 {
    font-size: 12px !important;
    padding: 1rem 0rem;
    padding-top: 0;
    line-height: 1.28;
}
.max--83 {
    max-width: 83px !important;
    padding-bottom: 0.95rem;
}

@media screen and (min-width: 768px) {
    .display1--heading {
        font-size: 1.75rem;
    }
    .patient__grid__items {
        grid-template-columns: repeat(4,1fr);
        grid-gap: 2rem;
        padding-left: 0;
    }
    .patient__inner__wrapper {
        padding: 3rem 0rem;
    }
    .outlineBtn {
        width: auto;
        min-width: 240px;
        padding: 1rem;
    }
    .card__layout__grid {
        grid-template-columns: repeat(2,1fr);
        grid-gap: 2rem;
    }
    .card--box {
        padding: 2.5rem 1.5rem 1.5rem;
    }
    .w-md-auto {
        width:  auto !important;
    }
    .testimonial__card {
        grid-template-columns: repeat(2,1fr);
    }
    .modal-dialog.maxw--1000 {
        max-width: 650px;
    }
    .card--boxinfo {
        margin-top: 0rem;
    }
    .top-cards {
        grid-template-columns: repeat(4,1fr);
    }
}
@media screen and (min-width: 992px) {
    .callBtn {
        /* font-size: 1rem; */
        font-weight: 700;
        padding: .87rem 1.5rem;
        border-radius: .5rem;
    }
    .callnowBtn, .whatsappBtn {
        padding: .57rem 1rem;
        font-size: .875rem !important;
    }
    /*nav css*/
    /* .custom__navbar {
        box-shadow: 0px 0px 15px rgb(0 0 0 / 5%);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9;
    } */
    .custom__navbar .navbar-logo {
        width: 8rem;
    }
    .custom__navbar {
        padding: 1.25rem 0rem;
    }
    /*nav css*/

    /*Header CSS*/
    .custom__landing__header {
        padding: 4.25rem 0rem;   
        /* margin-top: 5.5rem;  */
    }
    .support--text {
        font-size: 1rem;
    }
    .formbox {
        border-radius: 1rem;
        padding: 2.5rem;
    }
    .form--heading {
        font-size: 1.5rem;
    }
    .form--text {
        font-size: 1rem;
    }
    .input--box {
        border-radius: .5rem;
        padding: .7rem 1.25rem;
    }
    .secondaryBtn {
        padding: 1.25rem;
    }
    .fetaurebox__cards {
        padding: 1rem .5rem;
    }
    .fetaurebox__cards--title {
        font-size: .875rem;
    }
    .header__fetaurebox__wrapper > .row {
        margin-left: -12px;
        margin-right: -12px;
    }
    .header__fetaurebox__wrapper > .row > div[class^="col"] {
        padding-left: 12px;
        padding-right: 12px;
    }
    .patient__item {
        grid-template-columns: 60px 1fr;
    }
    .patient__item--title {
        font-size: 1.25rem;
    }
    .patient__item--text {
        font-size: .875rem;
    }
    .patient__grid__items {
        grid-gap: 4.5rem;
        padding-left: 0;
    }
    .section--title {
        font-size: 2rem;
    }
    .plan__box--cell {
        min-height: 75px;
        padding: .7rem 1rem;
        font-size: .8rem;
    } 
    .outer--text {
        font-size: 1.125rem;
    }
    .mt--40 {
        margin-top: 80px !important;
    }
    .mt--60 {
        margin-top: 60px !important;
    }
    .callus--btn, .knowmore--btn {
        border-radius: .35rem;
        padding: 1rem 2rem;
    }
    .min-w-auto {
        min-width: auto;
    }
    /*Header CSS*/
    .partner--box {
        min-height: 180px;
    }
    .mx-ng-2 {
        margin-left: -12px;
        margin-right: -12px;
    }
    .col-lg-2b {
        flex: 0 0 auto;
        width: 20%;
        margin-top: 1.5rem;
        padding-left: 12px;
        padding-right: 12px;
    }
    .card__layout__grid {
        grid-template-columns: repeat(3,1fr);
    }
    .card--boxinfo {
        grid-template-columns: 80px 1fr;
        grid-gap: 1.25rem;
    }
    .card--box--pic {
        height: 80px;
    }
    .list-gap li + li {
        margin-top: 2rem;
    }
    .testimonial__card {
        grid-gap: 3.875rem;
    }
    .testimonial__card--title {
        font-size: 1.25rem;
    }
    .testimonial__card--text {
        font-size: .875rem;
    }
    .detail--modal .card--boxinfo {
        grid-template-columns: 200px 1fr;
    }
    .detail--modal .card--box--pic {
        height: 200px;
    }
    .modal-dialog.maxw--1000 {
        max-width: 800px;
    }
    .top-cards {
        grid-gap: 1.5rem;
        margin-top: 2rem;
    }
}
@media screen and (min-width: 1200px) {
    .display1--heading {
        font-size: 2.25rem;
    }
    .plans__section {
        padding: 5rem 0rem;
    }
    .section--text {
        font-size: 1rem;
    }
    .plan__box--cell {
        padding: 1.20rem 1rem;
    }
    .plan__box-headercell {
        font-size: 1rem !important;
    }
    .mt--80 {
        margin-top: 80px;
    }
    .plans__wrapper--column1 .plan__box--cell {
        font-size: .875rem;
    }
    .plans__wrapper--column1 .plan__box .plan__box--cell:nth-child(3), .plans__wrapper--column2 .plan__box .plan__box--cell:nth-child(4) {
        min-height: 140px;
    }
    .spacer__section {
        padding: 6rem 0rem;
    }
    .list__types--title {
        font-size: 1rem;
    }
    .list__types {
        grid-template-columns: 30px 1fr;
        grid-gap: .8rem;
    }
    .modal-dialog.maxw--1000 {
        max-width: 1000px;
    }
}
@media screen and (min-width: 1400px) {
    .callBtn {
        padding: 1rem 1.5rem;
        font-size: 1rem;
    }
    .custom__navbar .navbar-logo {
        width: auto;
    }
    .display1--heading {
        font-size: 2.5rem;
    }
    .header__fetaurebox__wrapper {
        margin-top: 3.5rem;
    }
    .container {
        max-width: 1220px;
    }
    .custom__landing__header {
        padding: 6.25rem 0rem;
    }
    .patient__item--title {
        font-size: 1.5rem;
    }
    .patient__inner__wrapper {
        padding: 4rem 0rem;
    }
    .section--title {
        font-size: 2.5rem;
    }
    .spacer__section {
        padding: 8rem 0rem;
    }
    .custom__footer p {
        font-size: 1rem;
    }
    .card__layout__grid {
        grid-gap: 2.5rem;
    }
}
    </style>
</head>
<body>
    
    <!--NAVBAR AREA-->
    <nav class="custom__navbar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto font-0">
                    <a href="#" class="navbar-logo">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/logo.svg" alt="medfin-logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-auto d-none d-xl-inline-block">
                    <span class="callBtn">
                        CALL US ON 
                   
                    </span>
                </div>
                <div class="col-auto ps-0 d-xl-none">
                    <a href="https://wa.me/917026200200?text=Hello Team Medfin, trying to reach you" class="callBtn whatsappBtn font--small">
                        WHATSAPP
                    </a>
                    <a href="tel:" class="callBtn callnowBtn font--small">
                        CALL NOW
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!--HEADER AREA STARTS-->
    <header class="custom__landing__header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display1--heading text-center text-md-start">
                     Minimally Invasive Knee Replacement Surgery Starting at Just  <span class="highligher"><span class="highligher-text">Rs. 1.7 Lakh</span></span>
                        in Bangalore
                    </h1>
                    <p class="support--text mt-3 text-center text-md-start">
                        Regain your life with Medfin by your side. Medfin is where experience meets technology at an affordable price.
                    </p>
                    <div class="header__fetaurebox__wrapper">
                        <!-- <div class="row mt-lg-4 justify-content-center justify-content-md-start">
                            <div class="col-6 col-md-3 mt-3 mt-md-4">
                                <div class="fetaurebox__cards">
                                    <img src="images/emi-logo.svg" alt="emi-logo" class="img-fluid d-block mx-auto">
                                    <h6 class="fetaurebox__cards--title mt-2">
                                        Interest-free EMI
                                    </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-3 mt-md-4">
                                <div class="fetaurebox__cards">
                                    <img src="images/insuarance.svg" alt="insuarance" class="img-fluid d-block mx-auto">
                                    <h6 class="fetaurebox__cards--title mt-2">
                                        All insurances accepted
                                    </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-3 mt-md-4">
                                <div class="fetaurebox__cards">
                                    <img src="images/surgeons.svg" alt="surgeons" class="img-fluid d-block mx-auto">
                                    <h6 class="fetaurebox__cards--title mt-2">
                                        Experienced Surgeons
                                    </h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mt-3 mt-md-4">
                                <div class="fetaurebox__cards">
                                    <img src="images/assistance.svg" alt="assistance" class="img-fluid d-block mx-auto">
                                    <h6 class="fetaurebox__cards--title mt-2">
                                        1:1 personal assistance
                                    </h6>
                                </div>
                            </div>
                        </div> -->
                        <div class="top-cards">
                            <div class="fetaurebox__cards">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/emi-logo.svg" alt="emi-logo" class="img-fluid d-block mx-auto">
                                <h6 class="fetaurebox__cards--title mt-2">
                                    Interest-free EMI
                                </h6>
                            </div>
                            <div class="fetaurebox__cards">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/insuarance.svg" alt="insuarance" class="img-fluid d-block mx-auto">
                                <h6 class="fetaurebox__cards--title mt-2">
                                    All insurances accepted
                                </h6>
                            </div>

                            <div class="fetaurebox__cards">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/surgeons.svg" alt="surgeons" class="img-fluid d-block mx-auto">
                                <h6 class="fetaurebox__cards--title mt-2">
                                    Experienced Surgeons
                                </h6>
                            </div>

                            <div class="fetaurebox__cards">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/assistance.svg" alt="assistance" class="img-fluid d-block mx-auto">
                                <h6 class="fetaurebox__cards--title mt-2">
                                    1:1 personal assistance
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div id="listbox" class="formbox mx-auto me-md-0">
                        <h4 class="form--heading text-center">
                            Request call Back
                        </h4>
                        <p class="form--text text-center mt-2">
                            If you'd like to know more about our services, you can speak to one of our representatives. Please enter the details below.
                        </p>
                        <form class="w-100 mt-4" id="book-appointment" name="book-appointment">
                            <div class="medfin__formgroup">
                                <input type="text" class="form-control input--box" name="name" id="name" placeholder="Name" placeholder="Full Name">
                            </div>
                            <input type="text" id="serviceID" value="13" hidden>
                            <div class="medfin__formgroup">
                                <div class="flagbox">
                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/flag-ind.png" alt="flag-ind">
                                    +91
                                </div>
                                <input type="tel" class="form-control input--box ps--6" id="mobile" name="mobile" placeholder="Phone Number">
                            </div>
                            <!-- <div class="medfin__formgroup">
                                <select class="form-select input--box" aria-label="Default select example">
                                    <option selected>Select your city</option>
                                    <option value="1">Kolkata</option>
                                    <option value="2">Pune</option>
                                    <option value="3">Chandigarh</option>
                                    <option value="3">Kanpur</option>
                                    <option value="3">Delhi</option>
                                    <option value="3">Mumbai</option>
                                </select>
                            </div> -->
                            <div class="medfin__formgroup mt-4">
                                <a class="secondaryBtn text-uppercase w-100" onclick="MEDFINAPP.createLeadRequestWithSource('book-appointment','NORMAL-FLOW','','Book Appointment');" href="javascript:void(0)">
                                    Submit details
</a>
                            </div>
                        </form>
                        <form id="book-appointment" name="book-appointment">
									<div class="container-fluid appointment-form">
										<div class="row">
											<div class="col-12">
													<div class="form-group">
													<input type="text" class="form-control border-0" name="name" id="name" placeholder="Name">
												</div>
												<!-- <div class="form-group">
													<input type="email" class="form-control border-0" name="Email" id="Email" placeholder="Email">
												</div> -->
												<input type="text" id="serviceID" value="13" hidden>
													<div style="position: relative;" class="form-group">
														<div style="position: absolute; top: 7px; left: 0px;">
															<img class="left" src="{{ asset('medfin/images/indian-flag.png') }}" alt="" width="20" > <span style="font-size: 16px; color: #6e757c;">+91 </span>
														</div>
														<input style="padding-left: 60px;" type="tel"  name="mobile" class="form-control" id="mobile" aria-describedby="MobileHelp" placeholder="Phone number">
													</div>
											</div>
										</div>
										<a class="col btn btn-lg btn-appointment"  onclick="MEDFINAPP.createLeadRequestWithSource('book-appointment','NORMAL-FLOW','','Book Appointment');" href="javascript:void(0)" >submit</a>
									</div>
								</form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER AREA ENDS-->

    <!--PATIENT LIST STARTS-->
    <section class="bg--primary">
        <div class="patient__inner__wrapper">
            <div class="container">
                <div class="patient__grid__items mx-auto">
                    <div class="patient__item">
                        <div>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/happy-patients.svg" alt="happy-patients" class="img-fluid">
                        </div>
                        <div>
                            <h5 class="patient__item--title">
                                50,000 +
                            </h5>
                            <p class="patient__item--text">
                                Happy Patients
                            </p>
                        </div>
                    </div>
                    <div class="patient__item">
                        <div>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/specialists.svg" alt="specialists" class="img-fluid">
                        </div>
                        <div>
                            <h5 class="patient__item--title">
                                100 +
                            </h5>
                            <p class="patient__item--text">
                                Specialists
                            </p>
                        </div>
                    </div>
                    <div class="patient__item">
                        <div>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/surgery-centers.svg" alt="surgery-centers" class="img-fluid">
                        </div>
                        <div>
                            <h5 class="patient__item--title">
                                30 +
                            </h5>
                            <p class="patient__item--text">
                                State-of-art surgery centres
                            </p>
                        </div>
                    </div>
                    <div class="patient__item">
                        <div>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/cities.svg" alt="cities" class="img-fluid">
                        </div>
                        <div>
                            <h5 class="patient__item--title">
                                15 +
                            </h5>
                            <p class="patient__item--text">
                                Cities
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PATIENT LIST ENDS-->

    <!--PLAN SECTION STARTS-->
    <section class="plans__section">
        <div class="container">
            <h2 class="section--title text-center">
                Don’t get stuck with old technology
            </h2>
            <p class="section--text text-center mt-2 mx-auto max--800">
                Get access to the latest in Knee Replacement Surgery Technology at the most affordable prices, only at Medfin.
            </p>
            <div class="plans__wrapper">
                <div class="d-none d-lg-block">
                    <div class="plans__wrapper--desktop">
                        <div class="plans__wrapper--column1">

                        </div>
                        <div class="plans__wrapper--column2">
                            <div class="current__plans">
                                <div class="current__plans--logo">
                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/logo.svg" alt="logo" class="img-fluid d-block mx-auto">
                                </div>
                            </div>
                            <div class="other__plans">
                                <div class="current__plans--logo">
                                    <h6 class="outer--text fw-bold">
                                        Normal Multi-Speciality Hospital
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plans__wrapper--desktop">
                        <div class="plans__wrapper--column1">
                            <div class="plan__box mt--80">
                                <!-- <div class="plan__box--cell text-transparent bg-transparent w-100">
                                    
                                </div> -->
                                <div class="plan__box--cell fw-normal">
                                    <span>Price starting at</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>Technology used</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>How the surgery is performed</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>Implants Used</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>Incisions</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>Hospital Stay</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>Interest Free EMI</span>
                                </div>
                                <div class="plan__box--cell fw-normal">
                                    <span>All Insurances Accepted</span>
                                </div>
                            </div>
                        </div>
                        <div class="plans__wrapper--column2">
                            <div class="current__plans">
                            <div class="row mx-0">
                                <div class="col-md-4 px-0">
                                    <div class="plan__box">
                                        <div class="plan__box--cell plan__box-headercell">
                                            Robotic-arm Knee Replacement Surgery
                                        </div>
                                        <div class="plan__box--cell fw-bold bg--fa text--grey">
                                            <span>Rs. 4,00,000*</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/stryker.png" alt="smith" class="img-fluid d-block mx-auto">
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Robot driven: The surgeon directs the robots movements standing at the console. This offer the most precision among all types of surgeries</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Small Incisions</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            1 Day
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Starting from Rs. 10,000 per month</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="plan__box">
                                        <div class="plan__box--cell plan__box-headercell">
                                            Robot assisted Knee replacement
                                        </div>
                                        <div class="plan__box--cell fw-bold bg--fa text--grey">
                                            <span>Rs. 2,10,000*</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/smith.png" alt="smith" class="img-fluid d-block mx-auto">
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Surgeon driven with robotic assistance: Robot provides tactile feedback and assistance to increase precision</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Small Incisions</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            2 Days
                                        </div>
                                        <div class="plan__box--cell bg--fa text--grey">
                                            <span>Starting from Rs. 10,000 per month</span>
                                        </div>
                                        <div class="plan__box--cell bg-white text--grey">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div class="plan__box">
                                        <div class="position-relative">
                                            <div class="outline-stroke"></div>
                                            <div class="plan__box plan__box-none">
                                                <div class="plan__box--cell active plan__box-headercell">
                                                    Minimally invasive Knee replacement
                                                </div>
                                                <div class="plan__box--cell fw-bold bg--fa text--grey">
                                                    <span>Rs. 1,70,000*</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <span>Minimally invasive</span>
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Surgeon Driven: The surgeon uses instruments through small incisions that are created</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Tiny Incisions</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    4 Days
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Starting from Rs. 10,000 per month</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick-correct" class="img-fluid d-block mx-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="other__plans">
                                <div class="plan__box">
                                    <div class="plan__box--cell active-grey plan__box-headercell">
                                        Minimally invasive Knee replacement
                                    </div>
                                    <div class="plan__box--cell fw-bold bg--fa text--grey">
                                        <span>Rs. 2,20,000*</span>
                                    </div>
                                    <div class="plan__box--cell bg-white text--grey">
                                        <span>Minimally invasive</span>
                                    </div>
                                    <div class="plan__box--cell bg--fa text--grey">
                                        <span>Surgeon Driven: The surgeon uses instruments through small incisions that are created</span>
                                    </div>
                                    <div class="plan__box--cell bg-white text--grey">
                                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                    </div>
                                    <div class="plan__box--cell bg--fa text--grey">
                                        <span>Small Incisions</span>
                                    </div>
                                    <div class="plan__box--cell bg-white text--grey">
                                        4 Days
                                    </div>
                                    <div class="plan__box--cell bg--fa text--grey">
                                        <span>Not available</span>
                                    </div>
                                    <div class="plan__box--cell bg-white text--grey">
                                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/wrong-tick.svg" alt="wrong-tick" class="img-fluid d-block mx-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none mobile_plans">
                    <div class="plans__wrapper--mobile">
                        <div class="plans__mobile--column1">
                            <div class="row mx-0">
                                <div class="col-6 px-0">
                                    <div class="plan__box planbox__leftbar mt--65">
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Price starting at</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Technology used</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>How the surgery is performed</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Implants Used</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Incisions</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Hospital Stay</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>Interest Free EMI</span>
                                        </div>
                                        <div class="plan__box--cell text-start justify-content-start fw-normal">
                                            <span>All Insurances Accepted</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-0">
                                    <div class="current__plans--logo max--80">
                                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/logo.svg" alt="logo" class="img-fluid d-block ms-auto">
                                    </div>
                                    <div class="plan__box planbox__rightbar">
                                        <div class="position-relative z1">
                                            <div class="outline-stroke"></div>
                                            <div class="plan__box plan__box-none">
                                                <div class="plan__box--cell active plan__box-headercell">
                                                    Minimally invasive Knee replacement
                                                </div>
                                                <div class="plan__box--cell fw-bold bg--fa text--grey">
                                                    <span>Rs. 1,70,000*</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <span>Minimally invasive</span>
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Surgeon Driven: The surgeon uses instruments through small incisions that are created</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Tiny Incisions</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    4 Days
                                                </div>
                                                <div class="plan__box--cell bg--fa text--grey">
                                                    <span>Starting from Rs. 10,000 per month</span>
                                                </div>
                                                <div class="plan__box--cell bg-white text--grey">
                                                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick-correct" class="img-fluid d-block mx-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plans__mobile--column2">
                            <div class="slick-slider">
                                <div>
                                    <div>
                                        <h6 class="outer--text fw-bold font--14">
                                            Normal Multi-Speciality Hospital
                                        </h6>
                                        <div class="plan__box planbox__rightbar">
                                            <div class="plan__box--cell active-grey plan__box-headercell">
                                                Minimally invasive Knee replacement
                                            </div>
                                            <div class="plan__box--cell fw-bold bg--fa text--grey">
                                                <span>Rs. 2,20,000*</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <span>Minimally invasive</span>
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Surgeon Driven: The surgeon uses instruments through small incisions that are created</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Small Incisions</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                4 Days
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Not available</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/wrong-tick.svg" alt="wrong-tick" class="img-fluid d-block mx-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="current__plans--logo max--80 max--83">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/logo.svg" alt="logo" class="img-fluid d-block ms-auto">
                                        </div>
                                        <div class="plan__box planbox__rightbar">
                                            <div class="plan__box--cell plan__box-headercell">
                                                Robotic-arm Knee Replacement Surgery
                                            </div>
                                            <div class="plan__box--cell fw-bold bg--fa text--grey">
                                                <span>Rs. 4,00,000*</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/stryker.png" alt="stryker" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Robot driven: The surgeon directs the robots movements standing at the console. This offer the most precision among all types of surgeries</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Small Incisions</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                2 Days
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Starting from Rs. 10,000 per month</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick" class="img-fluid d-block mx-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="current__plans--logo max--80 max--83">
                                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/logo.svg" alt="logo" class="img-fluid d-block ms-auto">
                                        </div>
                                        <div class="plan__box planbox__rightbar">
                                            <div class="plan__box--cell plan__box-headercell">
                                                Robot assisted Knee replacement
                                            </div>
                                            <div class="plan__box--cell fw-bold bg--fa text--grey">
                                                <span>Rs. 2,10,000*</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/smith.png" alt="smith" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Surgeon driven with robotic assistance: Robot provides tactile feedback and assistance to increase precision</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/johnson.png" alt="johnson" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Small Incisions</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                2 Days
                                            </div>
                                            <div class="plan__box--cell bg--fa text--grey">
                                                <span>Starting from Rs. 10,000 per month</span>
                                            </div>
                                            <div class="plan__box--cell bg-white text--grey">
                                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tick-correct.svg" alt="tick" class="img-fluid d-block mx-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="slick__slidernav">
                        <div class="slick-slider-dots"></div>
                    </div>
                </div>
                <div class="row justify-content-md-center mt--40">
                    <div class="col-12 col-md-auto">
                        <button type="button" class="scrollBtn knowmore--btn w-100">
                            KNOW MORE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto mt-3 mt-md-0">
                        <a href="tel:+" class="callus--btn w-100 d-lg-none">
                            CALL US
                        </a>
                        <span class="cursor-default callus--btn w-100 d-none d-lg-inline-flex">
                            CALL US ON 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PLAN SECTION ENDS-->

    <!--PAPERWORK SECTION STARTS-->
    <section class="spacer__section bg-F8F9FC">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section--title text-center">
                        We make your health insurance work harder. 
                    </h2>
                    <p class="section--text text-center mt-2 mx-auto max--800">At Medfin, we have experts who can handle your insurance and get the most our of your health insurance</p>
                </div>
            </div>
            <div class="row pt-md-4">
                <div class="col-6 col-md-3 mt-4">
                    <div class="list__types">
                        <span>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/insure-tick.svg" alt="insure-tick" class="img-fluid">
                        </span>
                        <div>
                            <p class="list__types--title">All insurances accepted</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-4">
                    <div class="list__types">
                        <span>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/insure-tick.svg" alt="insure-tick" class="img-fluid">
                        </span>
                        <div class="">
                            <p class="list__types--title">Lower co-pay amount*</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-4">
                    <div class="list__types">
                        <span>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/insure-tick.svg" alt="insure-tick" class="img-fluid">
                        </span>
                        <div>
                            <p class="list__types--title">Free end-to-end insurance processing</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-4">
                    <div class="list__types">
                        <span>
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/insure-tick.svg" alt="insure-tick" class="img-fluid">
                        </span>
                        <div>
                            <p class="list__types--title">Free end-to-end reimbursement processing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 mx-ng-2">
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/star.png" alt="star" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/care.png" alt="care" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/niva.png" alt="niva" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/hdfc.png" alt="hdfc" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/bajaj.png" alt="bajaj" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/tata.png" alt="tata" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/aditya.png" alt="aditya" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sbi.png" alt="sbi" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/reliance.png" alt="reliance" class="img-fluid">
                    </div>
                </div>
                <div class="col-3 col-lg-2b">
                    <div class="partner--box">
                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/icici.png" alt="icici" class="img-fluid">
                    </div>
                </div>
            </div>
            <p class="section--text text-center text--primary mt-4 pt-md-4 mx-auto max--800">And many more...</p>
            <div class="mt-4 pt-3 text-center">
                <button class="scrollBtn knowmore--btn w-100 w-md-auto">
                    CHECK YOUR INSURANCE
                </button>
            </div>
        </div>
    </section>
    <!--PAPERWORK SECTION STARTS-->

    <!--REPLACEMENT SECTION STARTS--> 
    <section class="spacer__section pb-0 bg--pattern">
        <div class="container text-center">
            <h2 class="section--title text-white max--800 mx-auto">
                Minimally invasive Total Knee Replacement starting at just Rs. 10,000* per month
            </h2>
            <p class="section--text text-white mt-3">
                Medfin offers you interest-free EMI on your knee replacement surgery
            </p>
            <button class="scrollBtn outlineBtn mt-4">
                KNOW MORE
            </button>
        </div>
        <div class="patient__inner__wrapper mt--40">
            <div class="container">
                <h2 class="section--title text-center max--800 mx-auto mt-3 mt-md-0">
                    Choose from the best ortho surgeons for your knee replacement surgery
                </h2>
                <p class="section--text mt-3 text-center">
                    Medfin’s specialist Knee Replacement specialists have more than 15 year of experience
                </p>
                <div class="card__layout__grid mt--60">
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sai.png" alt="sai">
                            </div>
                            <div class="card--box--desc">
                                <h6 class="card--box--title">
                                    Dr. Sai Krishna B Naidu
                                </h6>
                                <p class="card--box--author mt-2">Consultant - Trauma and Orthopedics</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    22+ Yrs                                      
                                </p>
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MRCS, Dip. SICOT, FRCS(Ortho), MCh(Ortho), Specialist - Joint Replacements & Sports Injuries. Fellowship - Joint Replacements ( London, UK) Advanced Arthroscopy & sports Injuries ( New York, USA)
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#saiModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/ananya.png" alt="ananya">
                            </div>
                            <div class="card--box--desc">
                                <h6 class="card--box--title">
                                    Dr. Ananya Puttaraju
                                </h6>
                                <p class="card--box--author mt-2">Orthopedic surgeon, Joint Replacement Surgeon</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    20+ Yrs                                      
                                </p>
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MBBS, FRCS - Trauma & Orthopedic Surgery
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ananyaModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sakshi.png" alt="sakshi">
                            </div>
                            <div class="card--box--desc">
                                <h6 class="card--box--title">
                                    Dr. Shashikiran R
                                </h6>
                                <p class="card--box--author mt-2">Orthopedic surgeon, Joint Replacement Surgeon</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    15+ Yrs                                      
                                </p>
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MS - Orthopaedics, MBBS
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#sakshiModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sarath.png" alt="sarath">
                            </div>
                            <div class="card--box--desc">
                                <h6 class="card--box--title">
                                    Dr. Sharath Kumar Shetty
                                </h6>
                                <p class="card--box--author mt-2">Orthopedic surgeon</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    22+ Yrs                                      
                                </p>
                                
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MBBS, MS - Orthopaedics
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#sarathModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/anjan.png" alt="anjan">
                            </div>
                            <div class="card--box--desc">
                                <h6 class="card--box--title">
                                    Dr. Anjan A
                                </h6>
                                <p class="card--box--author mt-2">Orthopedic surgeon</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    15+ Yrs                                      
                                </p>
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MBBS, DNB - Orthopedics/Orthopedic Surgery
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#anjanModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="card--box d-flex flex-column">
                        <div class="city--badge">
                            Bangalore
                        </div>
                        <div class="card--boxinfo">
                            <div class="card--box--pic">
                                <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/hemnath.png" alt="hemnath">
                            </div>
                            <div class="card--box--desc d-flex flex-column">
                                <h6 class="card--box--title">
                                    Dr. Hemanth Hp
                                </h6>
                                <p class="card--box--author mt-2">Orthopedic surgeon, Spine Surgeon (Ortho), Joint Replacement Surgeon</p>
                                <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                    <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <g clip-path="url(#clip0_8_2682)">
                                        <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_8_2682">
                                        <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>  
                                    10+ Yrs                                      
                                </p>
                            </div>
                        </div>
                        <div class="card--box--text mb-2">
                            MBBS, MS - Orthopaedics
                        </div>
                        <div class="text-end mt-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#hemnathModal" class="view--profile">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt--40 mb-4 pb-3 pb-md-0 text-center">
                    <button class="scrollBtn knowmore--btn w-100 w-md-auto">
                        BOOK APPOINTMENT
                    </button>
                </div>
            </div>  
        </div>
    </section>
    <!--REPLACEMENT SECTION ENDS-->   

    <!--TECHNOLOGY SECTION STARTS-->
    <section class="spacer__section bg--F8F9FC">
        <div class="container">
            <h2 class="section--title text-center max--800 mx-auto">
                Technology meets experience with the latest robotic knee replacement technology
            </h2>
            <p class="section--text mt-3 text-center max--700 mx-auto">
                Decades of innovation in knee replacement surgery have led to incredible improvements in medical outcomes and recovery times.
            </p>
            <div class="row mt-4 pt-2">
                <div class="col-md-6 order-md-1">
                    <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/technology.png" alt="technology" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="pe-md-4">
                        <p class="section--text mt-3 max--700 mx-auto">
                            The <b>NAVIO and Mako systems</b> provide two important advantages for people undergoing knee replacement surgery. These include:
                        </p>
                        <ul class="list-unstyled mt-4 list-gap">
                            <li>
                                <div class="list__types align-items-start">
                                    <span>
                                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/blue-tick.svg" alt="blue-tick" class="img-fluid">
                                    </span>
                                    <div>
                                        <p class="section--text">
                                            It helps your surgeon in creating a highly individualized model that is specific to the unique shape and motion of your knee. While other robotic-assisted platforms require CT scans, the NAVIO system does not have any need for them, meaning you will not be harmed by potentially harmful radiation with this type of imaging.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list__types align-items-start">
                                    <span>
                                        <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/blue-tick.svg" alt="blue-tick" class="img-fluid">
                                    </span>
                                    <div>
                                        <p class="section--text">
                                            The second important advantage is robotic assistance. This advanced technology is designed to improve the accuracy of the surgery and it gives you better long-term outcomes.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button class="scrollBtn knowmore--btn w-100 w-md-auto mt-4 min-w-auto">
                            KNOW MORE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TECHNOLOGY SECTION STARTS-->

    <!--TESTIMONIALS SECTION STARTS-->
    <section class="spacer__section">
        <div class="container">
            <h2 class="section--title text-center max--800 mx-auto">
                Customer Testimonials
            </h2>
            <!-- <p class="section--text mt-3 text-center max--700 mx-auto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet imperdiet metus, nec interdum magna tristique vitae.
            </p> -->
            <div class="testimonial__card">
                <div class="testimonial__card--box">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cYFGt1_JhTM" allowfullscreen></iframe>
                    </div>
                    <p class="testimonial__card--title mt-3">
                        Savirthiamma
                    </p>
                    <!-- <p class="testimonial__card--text ">
                        Patient age
                    </p> -->
                </div>
                <div class="testimonial__card--box">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x-SImzulytE" allowfullscreen></iframe>
                    </div>
                    <p class="testimonial__card--title mt-3">
                        Sharada Bhat
                    </p>
                    <!-- <p class="testimonial__card--text ">
                        Patient age
                    </p> -->
                </div>
            </div>
        </div>
    </section>
    <!--TESTIMONIALS SECTION STARTS-->

    <!--FAQs SECTION STARTS-->
    <section class="spacer__section bg--F8F9FC">
        <div class="container">
            <h2 class="section--title text-center max--800 mx-auto">
                Frequently Asked Questions
            </h2>
            <!-- <p class="section--text mt-3 text-center max--700 mx-auto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet imperdiet metus, nec interdum magna tristique vitae.
            </p> -->
            <div class="accordion__custom">
                <div class="accordion mt--60 maxw--1000 mx-auto" id="faqList">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is knee replacement surgery? 
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqList">
                        <div class="accordion-body pt-0 testimonial__card--text">
                            Knee replacement surgery, also known as knee arthroplasty, is a surgical procedure to replace a damaged or worn out knee joint with an artificial joint, or implant. The goal of the surgery is to relieve pain, improve mobility, and improve the quality of life for individuals with severe knee damage or arthritis.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button testimonial__card--title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Who is a candidate for knee replacement surgery? 
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqList">
                        <div class="accordion-body pt-0 testimonial__card--text">
                            Knee replacement surgery is typically recommended for individuals with severe knee damage or arthritis that has not responded to conservative treatments such as medications, physical therapy, or injections. Candidates for the surgery should also be in good overall health, as the surgery requires a significant amount of physical therapy and rehabilitation.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button testimonial__card--title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How is the surgery performed?
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqList">
                        <div class="accordion-body pt-0 testimonial__card--text">
                            Knee replacement surgery is typically performed under general anesthesia. The surgery typically takes two to three hours, and involves making an incision in the skin over the knee joint. The damaged or diseased bone and cartilage are then removed, and the implant is carefully fitted into place. The incision is closed with sutures or staples, and the knee is usually wrapped in a bandage or compression dressing.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button testimonial__card--title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What is the recovery process like?
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqList">
                          <div class="accordion-body pt-0 testimonial__card--text">
                            The recovery process following knee replacement surgery can vary depending on the individual and the extent of the surgery. Most people are able to return home within a few days of the surgery, but will need to use crutches or a walker for several weeks to help support the weight on the operated leg. Physical therapy is typically started within a few days of the surgery to help improve range of motion and strength. The full recovery process can take several months, but most people are able to return to most of their normal activities within three to six months.
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button testimonial__card--title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Are there any risks or complications associated with knee replacement surgery?
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqList">
                          <div class="accordion-body pt-0 testimonial__card--text">
                            As with any surgery, there are risks and complications associated with knee replacement surgery. These may include infection, bleeding, blood clots, and nerve or blood vessel damage. There is also a risk that the implant may loosen or wear out over time, which may require additional surgery to replace or repair the implant.
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button testimonial__card--title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            What kind of implants are used for knee replacement surgery?
                          </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqList">
                          <div class="accordion-body pt-0 testimonial__card--text">
                            There are several different types of implants that may be used in knee replacement surgery. The most common types of implants are:
                            <br>
                            <br>
                            <ol class="faq-ul ps-3">
                                <li>
                                    Total knee replacement: This type of implant is used to replace the entire knee joint, including the upper and lower leg bones and the knee cap. Total knee replacements are made up of three main components: the femoral component, which replaces the upper leg bone; the tibial component, which replaces the lower leg bone; and the patellar component, which replaces the knee cap. These components are typically made of metal or a combination of metal and plastic.
                                </li>
                                <li>
                                    Partial knee replacement: This type of implant is used to replace only a part of the knee joint, typically just the inner or outer compartment of the knee. Partial knee replacements are made up of two main components: the femoral component, which replaces the upper leg bone, and the tibial component, which replaces the lower leg bone. These components are typically made of metal or a combination of metal and plastic.
                                </li>
                                <li>
                                    Custom-made knee replacement: This type of implant is made to fit the specific anatomy of an individual patient. Custom-made knee replacements may be used in cases where the patient has a unique or irregularly shaped knee, or when other types of implants are not suitable. Custom-made knee replacements are typically made of metal or a combination of metal and plastic
                                </li>
                            </ol>

                            It's important to note that the specific type of implant used in knee replacement surgery will depend on the individual's specific needs and circumstances, as well as the surgeon's preference and expertise.
                          </div>
                        </div>
                    </div>
                  </div>
            </div>
            <p class="section--text mt--60 text-center max--700 mx-auto">
                Haven’t found answer to your question here?
            </p>
            <div class="text-center mt-3">
                <a href="tel:" class="callus--btn w-100 w-md-auto d-lg-none">
                    CALL US 
                </a>
                <span class="cursor-default callus--btn d-none d-lg-inline-flex">
                    CALL US ON 
                </span>
            </div>
        </div>
    </section>
    <!--FAQs SECTION STARTS-->


    <!--Footer starts-->
    <footer class="custom__footer">
        <div class="container">
            <p>© Copyright 2023. All rights reserved</p>
        </div>
    </footer>
    <!--Footer starts-->

    <!--BOTTOM BAR FIXED-->
    <div class="custom__navbar bottombar d-lg-none">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-6">
                    <a href="https://wa.me/917026200200?text=Hello Team Medfin, trying to reach you" class="callBtn whatsappBtn w-100 font--small">
                        WHATSAPP
                    </a>
                </div>
                <div class="col-6">
                    <a href="tel:" class="callBtn callnowBtn w-100 font--small">
                        CALL NOW
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--BOTTOM BAR FIXED-->


    <!-- Modal -->
    <div class="modal detail--modal fade" id="saiModal" tabindex="-1" aria-labelledby="saiModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sai-large.png" alt="sai">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Sai Krishna B Naidu
                            </h6>
                            <p class="card--box--author mt-2">Consultant - Trauma and Orthopedics</p>
                            <div class="card--box--text">
                                MRCS, Dip. SICOT, FRCS(Ortho), MCh(Ortho), Specialist - Joint Replacements & Sports Injuries. Fellowship - Joint Replacements ( London, UK) Advanced Arthroscopy & sports Injuries ( New York, USA)
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        15 Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="saiBody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="sai">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#saiAbout" aria-expanded="true" aria-controls="saiAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="saiAbout" class="accordion-collapse collapse show" aria-labelledby="sai" data-bs-parent="#saiBody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Sai Krishna B Naidu is a Trauma & Orthopedic Surgeon with 21 years of total experience and 14 years of specialty. He completed training in India at JJM Medical college from Kuvempu University in 2000. 
                                    <br>
                                    <br>
                                    He later specialized in orthopedics and gained vast experience in UK and USA. He was awarded MRCS in 2008 followed by a Diploma SICOT from the European board for trauma in 2013.   
                                    He has an MSc in Ortho from Anglia Ruskin University, Cambridge in 2017. He is registered under the Karnataka Medical Council, 2000.
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal detail--modal fade" id="ananyaModal" tabindex="-1" aria-labelledby="ananyaModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/ananya.png" alt="ananya">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Ananya Puttaraju
                            </h6>
                            <p class="card--box--author mt-2">Orthopedic surgeon, Joint Replacement Surgeon</p>
                            <div class="card--box--text">
                                MBBS, FRCS - Trauma & Orthopedic Surgery
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        15+ Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="annayaBody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="annaya">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#annayaAbout" aria-expanded="true" aria-controls="annayaAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="annayaAbout" class="accordion-collapse collapse show" aria-labelledby="annaya" data-bs-parent="#annayaBody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Ananya is a Orthopedic surgeon and Joint Replacement Surgeon in Bangalore and has an experience of 20 years in these fields. Dr. Ananya is one of Medfin’s senior orthopaedic consultants. He completed MBBS from Jagadguru Jayadeva Murugarajendra Medical College (JJMMC) in 2003 and FRCS - Trauma & Orthopedic Surgery from Royal College Of Surgeons in 2013.
                                    <br>
                                    <br>
                                    Some of the services provided by the doctor are: Frozen Shoulder Treatment,Minimally Invasive Hip Correction,Primary Hip and Knee Arthroplasty,Ligament and Tendon Repair and Hip Pain Treatment etc
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal detail--modal fade" id="sakshiModal" tabindex="-1" aria-labelledby="sakshiModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sakshi.png" alt="sakshi">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Shashikiran R
                            </h6>
                            <p class="card--box--author mt-2">Orthopedic surgeon, Joint Replacement Surgeon</p>
                            <div class="card--box--text">
                                MS - Orthopaedics, MBBS
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        15+ Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="sakshiBody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="sakshi">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#sakshiAbout" aria-expanded="true" aria-controls="sakshiAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="sakshiAbout" class="accordion-collapse collapse show" aria-labelledby="sakshi" data-bs-parent="#sakshiBody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Shashikiran R is one of the best Orthopaedic surgeons in Bangalore. He has done MBBS, MS - Orthopaedics. Dr. Shashikiran R has more than 15 years of experience as a Orthopaedic. Dr. Shashikiran R also specializes in Orthopaedic, Joint Replacement Surgeon. He is also a member of Bangalore Orthopaedic Society, Karnataka Orthopaedic Association, Indian Orthopaedic Association. Dr. Shashikiran R specializes in Bone Trauma, Fracture Treatment, Joint Replacement Surgery, Knee Pain Treatment, Hip Pain Treatment and many more.
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal detail--modal fade" id="sarathModal" tabindex="-1" aria-labelledby="sarathModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/sarath.png" alt="sarath">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Sharath Kumar Shetty
                            </h6>
                            <p class="card--box--author mt-2">Orthopedic surgeon</p>
                            <div class="card--box--text">
                                MBBS, MS - Orthopaedics
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        22+ Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="sarathBody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="sarath">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#sarathAbout" aria-expanded="true" aria-controls="sarathAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="sarathAbout" class="accordion-collapse collapse show" aria-labelledby="sarath" data-bs-parent="#sarathBody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Sharath Kumar Shetty is an Orthopaedic surgeon with 21 years of experience. He graduated from Kempegowda Institute of Medical Sciences, Bangalore and M.S Orthopaedics from M.S. Ramaiah Medical College, Bangalore. He has performed numerous surgeries, spanning Joint replacement surgeries, complex trauma surgeries, Revision trauma, Knee Arthroscopy, Spine Instrumentation, Vertebroplasty, Discectomy. Special interest in Primary Knee Replacement surgeries and Hip Replacement Surgeries.
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal detail--modal fade" id="anjanModal" tabindex="-1" aria-labelledby="anjanModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/anjan.png" alt="anjan">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Anjan A
                            </h6>
                            <p class="card--box--author mt-2">Orthopedic surgeon</p>
                            <div class="card--box--text">
                                MBBS, DNB - Orthopedics/Orthopedic Surgery
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        15+ Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="anjanBody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="anjan">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#anjanAbout" aria-expanded="true" aria-controls="anjanAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="anjanAbout" class="accordion-collapse collapse show" aria-labelledby="anjan" data-bs-parent="#anjanBody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Anjan A is a Orthopedic surgeon and has an experience of 15 years in this field. He completed MBBS from Vydehi Institute of Medical Sciences and Research Centre, Bangalore in 2008 and DNB - Orthopedics/Orthopedic Surgery from National Board of Examination, India in 2014
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal detail--modal fade" id="hemnathModal" tabindex="-1" aria-labelledby="hemnathModalLabel" aria-hidden="true">
        <div class="modal-dialog maxw--1000 modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card--boxinfo">
                        <div class="card--box--pic">
                            <img src="https://medfincms.s3.ap-south-1.amazonaws.com/knee-replacement-image/hemnath.png" alt="hemnath">
                        </div>
                        <div class="card--box--desc">
                            <h6 class="card--box--title">
                                Dr. Hemanth Hp
                            </h6>
                            <p class="card--box--author mt-2">Orthopedic surgeon, Spine Surgeon (Ortho), Joint Replacement Surgeon</p>
                            <div class="card--box--text">
                                MBBS, MS - Orthopaedics
                            </div>
                            <div class="row mt-2">
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <g clip-path="url(#clip0_8_2682)">
                                            <path d="M6 14V4.66667C6 4.04669 6 3.7367 6.06815 3.48236C6.25308 2.79218 6.79218 2.25308 7.48236 2.06815C7.7367 2 8.04669 2 8.66667 2C9.28665 2 9.59664 2 9.85097 2.06815C10.5412 2.25308 11.0803 2.79218 11.2652 3.48236C11.3333 3.7367 11.3333 4.04669 11.3333 4.66667V14M4.13333 14H13.2C13.9467 14 14.3201 14 14.6053 13.8547C14.8562 13.7268 15.0602 13.5229 15.188 13.272C15.3333 12.9868 15.3333 12.6134 15.3333 11.8667V6.8C15.3333 6.05326 15.3333 5.6799 15.188 5.39468C15.0602 5.1438 14.8562 4.93982 14.6053 4.81199C14.3201 4.66667 13.9467 4.66667 13.2 4.66667H4.13333C3.3866 4.66667 3.01323 4.66667 2.72801 4.81199C2.47713 4.93982 2.27316 5.1438 2.14532 5.39468C2 5.6799 2 6.05326 2 6.8V11.8667C2 12.6134 2 12.9868 2.14532 13.272C2.27316 13.5229 2.47713 13.7268 2.72801 13.8547C3.01323 14 3.3866 14 4.13333 14Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_8_2682">
                                            <rect width="16" height="16" fill="white" transform="translate(0.666626)"/>
                                            </clipPath>
                                            </defs>
                                        </svg>  
                                        10+ Yrs                                      
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <p class="d-flex flex-wrap align-items-center card--box--author mt-1">
                                        <svg class="me-2 flex-shrink-0" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <path d="M6.99996 8.66659C8.10453 8.66659 8.99996 7.77115 8.99996 6.66659C8.99996 5.56202 8.10453 4.66659 6.99996 4.66659C5.89539 4.66659 4.99996 5.56202 4.99996 6.66659C4.99996 7.77115 5.89539 8.66659 6.99996 8.66659Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.99996 14.6666C9.66663 11.9999 12.3333 9.6121 12.3333 6.66659C12.3333 3.72107 9.94548 1.33325 6.99996 1.33325C4.05444 1.33325 1.66663 3.72107 1.66663 6.66659C1.66663 9.6121 4.33329 11.9999 6.99996 14.6666Z" stroke="#1D66C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                             
                                        Bangalore                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__custom">
                        <div class="accordion maxw--1000 mx-auto" id="hemanthbody">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="hemanth">
                                <button class="accordion-button testimonial__card--title" type="button" data-bs-toggle="collapse" data-bs-target="#hemanthAbout" aria-expanded="true" aria-controls="hemanthAbout">
                                    About Doctor
                                </button>
                              </h2>
                              <div id="hemanthAbout" class="accordion-collapse collapse show" aria-labelledby="hemanth" data-bs-parent="#hemanthbody">
                                <div class="accordion-body pt-0 testimonial__card--text">
                                    Dr. Hemanth H P is a orthopedics in Bangalore and has an experience of 10 years in this field. Dr. Hemanth H P practices at Cure and Care in Jayanagar Bangalore. He completed MBBS from CARIMS in 2009,MS - General Surgery from MR MEDICAL COLLEGE GULBARGA in 2013 and MCh - Orthopedics Surgery from American Institution of medicine in 2015.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="col-12 col-md-auto">
                        <button type="button" data-bs-dismiss="modal" class="knowmore--btn w-100 w-md-auto">
                            CLOSE
                        </button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="tel:" class="callus--btn min-w-auto d-lg-none w-100 w-md-auto">
                            CALL US
                        </a>
                        <button type="button" class="cursor-default callus--btn d-none w-100 w-md-auto d-lg-inline-flex">
                            CALL US ON 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- <script defer src="https://m2.medfin.in/medfin/js/semTracking.js"></script> -->
    <!-- <script defer src="{{ asset(medfin/js/semTracking.js)}}"></script> -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://d3fq05t3zrvx7s.cloudfront.net/v19.0.7/assets-v2/assets/common/js/bootstrap.min.js" defer ></script> 
    <script src="https://assets.medfin.in/v02.12.23/assets-v3/common/js/bootstrap.min.bundle.js"></script>
    <script src="https://assets.medfin.in/v02.12.23/assets-v3/common/js/slick-slider.min.js"></script>
    <script src="https://medfincms.s3.ap-south-1.amazonaws.com/main.js"></script>

</body>
</html>