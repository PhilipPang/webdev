<style>
div#container {
   margin: 0 auto 0 auto;
   position: relative;
   text-align: left;
   width: 1280px;
}
body {
   background-color: #FFFFFF;
   color: #131022;
   font-family: Poppins;
   font-size: 16px;
   font-weight: normal;
   line-height: 1.1875;
   margin: 0;
   text-align: center;
}
* {
   scrollbar-color: rgba(99,102,241,1.00) rgba(246,246,246,1.00);
   scrollbar-width: thin;
}
::-webkit-scrollbar {
   width: 10px;
}
::-webkit-scrollbar-track {
   background: rgba(246,246,246,1.00);
}
::-webkit-scrollbar-thumb {
   background-color: rgba(99,102,241,1.00);
   border: 10px solid rgba(99,102,241,1.00);
   border-radius: 10px;
}
::-webkit-scrollbar-corner {
   background: rgba(246,246,246,1.00);
}
::-webkit-scrollbar-thumb:hover {
   background-color: rgba(62,66,101,1.00);
   border-color: rgba(62,66,101,1.00);
}
a {
   color: #6366F1;
   text-decoration: underline;
}
a:visited {
   color: #3E4265;
}
a:hover {
   color: #3E4265;
   text-decoration: underline;
}
.visibility-hidden {
   visibility: hidden;
}
#Footer-logo {
   background-color: transparent;
   background-image: url('/public/css/img/repairtureicon.png');
   background-position: center center;
   background-repeat: no-repeat;
   background-size: cover;
   border: 1px #DADADA solid;
   border-radius: 85px / 85px;
   height: 168px;
   width: 168px;
}
#Footer-logo_text {
   align-items: center;
   box-sizing: border-box;
   display: flex;
   flex-direction: column;
   height: 64.88%;
   justify-content: center;
   left: 17.26%;
   overflow: hidden;
   pointer-events: none;
   position: absolute;
   text-align: center;
   top: 17.26%;
   width: 64.88%;
   word-wrap: break-word;
}
#user_Footer-Text-H3 {
   margin: 0;
   padding: 60px 0 40px 0;
}
#user_Footer-Text-H3 p,
#user_Footer-Text-H3 ul {
   margin: 0;
   padding: 0;
}
#user_Footer-Text-H3 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_Footer-Text-Phone {
   margin: 0;
   padding: 0;
}
#user_Footer-Text-Phone p,
#user_Footer-Text-Phone ul {
   margin: 0;
   padding: 0;
}
#user_Footer-Text-Phone {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_Footer-Text-email {
   margin: 0;
   padding: 20px 0 20px 0;
}
#user_Footer-Text-email p,
#user_Footer-Text-email ul {
   margin: 0;
   padding: 0;
}
#user_Footer-Text-email {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_Footer-social-grid {
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   border-radius: 0px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#Footer-social-grid {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 0 15px 0 15px;
}
#Footer-social-grid > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#Footer-social-grid > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#Footer-social-grid > .row > .col-1 {
   float: left;
}
#Footer-social-grid > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: center;
   width: 100%;
}
#Footer-social-grid:before,
#Footer-social-grid:after,
#Footer-social-grid .row:before,
#Footer-social-grid .row:after {
   content: " ";
   display: table;
}
#Footer-social-grid:after,
#Footer-social-grid .row:after {
   clear: both;
}
@media (max-width: 480px) {
#Footer-social-grid > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#user_Footer-Icon-TT {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 2px;
   display: inline-block;
   margin: 0 10px 0 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#user_Footer-Icon-TT a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#Footer-Icon-TT {
   height: 40px;
   width: 24px;
}
.Footer-Icon-TT {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.Footer-Icon-TT:before {
   content: "\f5ef";
}
#Footer-Icon-TT i {
   color: #131022;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_Footer-Icon-TT:hover #Footer-Icon-TT i {
   color: #6366F1;
}
#user_Footer-Icon-FB {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 2px;
   display: inline-block;
   margin: 0 10px 0 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#user_Footer-Icon-FB a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#Footer-Icon-FB {
   height: 40px;
   width: 24px;
}
.Footer-Icon-FB {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.Footer-Icon-FB:before {
   content: "\f344";
}
#Footer-Icon-FB i {
   color: #131022;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_Footer-Icon-FB:hover #Footer-Icon-FB i {
   color: #6366F1;
}
#user_Footer-Icon-IG {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 2px;
   display: inline-block;
   margin: 0 10px 0 0;
   padding: 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#user_Footer-Icon-IG a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#Footer-Icon-IG {
   height: 40px;
   width: 24px;
}
.Footer-Icon-IG {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.Footer-Icon-IG:before {
   content: "\f437";
}
#Footer-Icon-IG i {
   color: #131022;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_Footer-Icon-IG:hover #Footer-Icon-IG i {
   color: #6366F1;
}
#user_Footer-Menu {
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   border-radius: 0px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#Footer-Menu {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 15px 15px 0 15px;
}
#Footer-Menu > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#Footer-Menu > .row > .col-1,
#Footer-Menu > .row > .col-2 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#Footer-Menu > .row > .col-1,
#Footer-Menu > .row > .col-2 {
   float: left;
}
#Footer-Menu > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: right;
   width: 50%;
}
#Footer-Menu > .row > .col-2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 50%;
}
#Footer-Menu:before,
#Footer-Menu:after,
#Footer-Menu .row:before,
#Footer-Menu .row:after {
   content: " ";
   display: table;
}
#Footer-Menu:after,
#Footer-Menu .row:after {
   clear: both;
}
@media (max-width: 480px) {
#Footer-Menu > .row > .col-1,
#Footer-Menu > .row > .col-2 {
   float: none;
   width: 100%  !important;
}
}
#user_terms-condition {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: right;
}
#user_terms-condition {
   color: #131022;
   font-family: Poppins;
   font-size: 16px;
   font-weight: 400;
   line-height: 28px;
}
#user_terms-condition p,
#user_terms-condition ul {
   margin: 0;
   padding: 0;
}
#user_terms-condition {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_privacy-policy {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 0;
   text-align: left;
}
#user_privacy-policy {
   color: #131022;
   font-family: Poppins;
   font-size: 16px;
   font-weight: 400;
   line-height: 28px;
}
#user_privacy-policy p,
#user_privacy-policy ul {
   margin: 0;
   padding: 0;
}
#user_privacy-policy {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_Text1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #000000;
   border-radius: 0px;
   margin: 0;
   padding: 20px 0 0 0;
   text-align: center;
}
#user_Text1 {
   color: #131022;
   font-family: Poppins;
   font-size: 16px;
   font-weight: normal;
}
#user_Text1 div {
   text-align: center;
}
#user_Text1 {
   box-sizing: border-box;
   display: block;
   margin: 0;
   width: 100%;
}
#user_Footer {
   background-color: #F3F6FF;
   background-image: none;
   border: 0px solid #CCCCCC;
   border-radius: 0px;
   box-sizing: border-box;
   clear: both;
   display: table;
   margin: 0;
   position: relative;
   table-layout: fixed;
   text-align: center;
   width: 100%;
}
#Footer {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 40px 15px 30px 15px;
}
#Footer > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#Footer > .row > .col-1,
#Footer > .row > .col-2,
#Footer > .row > .col-3 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#Footer > .row > .col-1,
#Footer > .row > .col-2,
#Footer > .row > .col-3 {
   float: left;
}
#Footer > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 8.33333333%;
}
#Footer > .row > .col-2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: center;
   width: 83.33333333%;
}
#Footer > .row > .col-3 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 8.33333333%;
}
#Footer:before,
#Footer:after,
#Footer .row:before,
#Footer .row:after {
   content: " ";
   display: table;
}
#Footer:after,
#Footer .row:after {
   clear: both;
}
@media (max-width: 480px) {
#Footer > .row > .col-1,
#Footer > .row > .col-2,
#Footer > .row > .col-3 {
   float: none;
   width: 100%  !important;
}
}
#Footer-divider-top {
   height: 120px;
   left: 0;
   line-height: 0;
   overflow: hidden;
   position: absolute;
   top: 0%;
   width: 100%;
}
#Footer-divider-top svg {
   display: block;
   height: 100%;
   left: 50%;
   position: relative;
   top: 0;
   transform: translateX(-50%);
   width: 100%;
}
#Footer-divider-top .divider-fill {
   fill: #FFFFFF;
   transform-origin: bottom;
   transform: rotateY(0deg);
}
#user_Footer-logo {
   display: inline-block;
   height: 170px;
   position: relative;
   width: 170px;
   z-index: 23;
}
#user_uid1 {
   color: #000000;
}
#user_Footer-Icon-IG {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 20;
}
#nav-info-text-phone {
   display: inline-block;
   line-height: 26px;
   width: 169px;
   z-index: 1;
}
#user_uid0 {
   color: #131022;
}
#user_nav-info-icon-fb {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 4;
}
#user_nav-menu {
   display: inline-block;
   width: 100%;
   z-index: 8;
}
#nav-info-text-email {
   display: inline-block;
   line-height: 26px;
   width: 250px;
   z-index: 3;
}
#user_Footer-Icon-TT {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 18;
}
.cursor,
.cursor2 {
   border-radius: 50%;
   left: -100px;
   pointer-events: none;
   position: fixed;
   top: 50%;
   transform: translateX(-50%) translateY(-50%);
}
.cursor {
   height: 0;
   width: 0;
   z-index: 99999;
}
.cursor2 {
   -webkit-transition: all 0.1s ease-out;
   height: 36px;
   transition: all 0.1s ease-out;
   width: 36px;
   z-index: 99998;
}
.cursor2 {
   border: 3px solid #6366F1;
   box-shadow: 0 0 22px #131022;
}
.cursor2.hover {
   -webkit-transform: scale(2) translateX(-25%) translateY(-25%);
   background: rgba(99,102,241,0.12);
   border: none;
   box-shadow: 0 0 14px #585C7B;
   transform: scale(2) translateX(-25%) translateY(-25%);
}
@media screen and (max-width:1024px) {
.cursor,
.cursor2 {
   display: none;
}
}
</style>