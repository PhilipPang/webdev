<style>
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
#user_nav-info {
   background-color: #131022;
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
#nav-info {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 4px 15px 4px 15px;
}
#nav-info > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#nav-info > .row > .col-1,
#nav-info > .row > .col-2,
#nav-info > .row > .col-3,
#nav-info > .row > .col-4 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#nav-info > .row > .col-1,
#nav-info > .row > .col-2,
#nav-info > .row > .col-3,
#nav-info > .row > .col-4 {
   float: left;
}
#nav-info > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 8.33333333%;
}
#nav-info > .row > .col-2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 41.66666667%;
}
#nav-info > .row > .col-3 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 25%;
}
#nav-info > .row > .col-4 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 25%;
}
#nav-info:before,
#nav-info:after,
#nav-info .row:before,
#nav-info .row:after {
   content: " ";
   display: table;
}
#nav-info:after,
#nav-info .row:after {
   clear: both;
}
@media (max-width: 480px) {
#nav-info > .row > .col-1,
#nav-info > .row > .col-2,
#nav-info > .row > .col-3,
#nav-info > .row > .col-4 {
   float: none;
   width: 100%  !important;
}
}
#user_nav-info-icon-email {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: inline-block;
   margin: 0;
   padding: 0 4px 0 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#user_nav-info-icon-email a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#nav-info-icon-email {
   height: 36px;
   width: 20px;
}
.nav-info-icon-email {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.nav-info-icon-email:before {
   content: "\f32c";
}
#nav-info-icon-email i {
   color: #F3F6FF;
   display: inline-block;
   font-size: 20px;
   line-height: 36px;
   vertical-align: middle;
   width: 21px;
}
#user_nav-info-icon-email:hover #nav-info-icon-email i {
   color: #FFFFFF;
}
#user_nav-info-icon-email {
   transition: all 500ms linear 0ms;
}
#nav-info-text-email {
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   border-radius: 4px;
   box-sizing: border-box;
   color: #F3F6FF;
   font-family: Poppins;
   font-size: 15px;
   font-style: normal;
   font-weight: normal;
   margin: 0;
   padding: 4px 4px 6px 4px;
   text-align: left;
   vertical-align: top;
}
#nav-info-text-email:focus {
   outline: 0;
}
#user_nav-info-icon-phone {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   display: inline-block;
   margin: 0;
   padding: 0 4px 0 0;
   position: relative;
   text-align: center;
   vertical-align: top;
}
#user_nav-info-icon-phone a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#nav-info-icon-phone {
   height: 36px;
   width: 20px;
}
.nav-info-icon-phone {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.nav-info-icon-phone:before {
   content: "\f4e7";
}
#nav-info-icon-phone i {
   color: #F3F6FF;
   display: inline-block;
   font-size: 20px;
   line-height: 36px;
   vertical-align: middle;
   width: 21px;
}
#user_nav-info-icon-phone:hover #nav-info-icon-phone i {
   color: #FFFFFF;
}
#nav-info-text-phone {
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   border-radius: 4px;
   box-sizing: border-box;
   color: #F3F6FF;
   font-family: Poppins;
   font-size: 15px;
   font-style: normal;
   font-weight: normal;
   margin: 0;
   padding: 4px 4px 6px 4px;
   text-align: left;
   vertical-align: top;
}
#nav-info-text-phone:focus {
   outline: 0;
}
#user_nav-info-icon-fb {
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
#user_nav-info-icon-fb a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#nav-info-icon-fb {
   height: 40px;
   width: 24px;
}
.nav-info-icon-fb {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.nav-info-icon-fb:before {
   content: "\f344";
}
#nav-info-icon-fb i {
   color: #F3F6FF;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_nav-info-icon-fb:hover #nav-info-icon-fb i {
   color: #6366F1;
}
#user_nav-info-icon-ig {
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
#user_nav-info-icon-ig a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#nav-info-icon-ig {
   height: 40px;
   width: 24px;
}
.nav-info-icon-ig {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.nav-info-icon-ig:before {
   content: "\f437";
}
#nav-info-icon-ig i {
   color: #F3F6FF;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_nav-info-icon-ig:hover #nav-info-icon-ig i {
   color: #6366F1;
}
#user_nav-info-icon-tt {
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
#user_nav-info-icon-tt a::after {
   bottom: 0;
   content: "";
   left: 0;
   pointer-events: auto;
   position: absolute;
   right: 0;
   top: 0;
   z-index: 1;
}
#nav-info-icon-tt {
   height: 40px;
   width: 24px;
}
.nav-info-icon-tt {
   display: inline-block;
   font-family: "Bootstrap Icons";
   font-style: normal;
   font-weight: normal;
   left: 0;
   line-height: 1;
   position: relative;
   top: 0;
}
.nav-info-icon-tt:before {
   content: "\f5ef";
}
#nav-info-icon-tt i {
   color: #F3F6FF;
   display: inline-block;
   font-size: 24px;
   line-height: 40px;
   vertical-align: middle;
   width: 25px;
}
#user_nav-info-icon-tt:hover #nav-info-icon-tt i {
   color: #6366F1;
}
#user_navigation {
   background-color: rgba(243,246,255,0.55);
   background-image: none;
   border: 0px solid transparent;
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
#navigation {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 19px 15px 19px 15px;
}
#navigation > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#navigation > .row > .col-1,
#navigation > .row > .col-2,
#navigation > .row > .col-3,
#navigation > .row > .col-4,
#navigation > .row > .col-5 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#navigation > .row > .col-1,
#navigation > .row > .col-2,
#navigation > .row > .col-3,
#navigation > .row > .col-4,
#navigation > .row > .col-5 {
   float: left;
}
#navigation > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 8.33333333%;
}
#navigation > .row > .col-2 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 16.66666667%;
}
#navigation > .row > .col-3 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: right;
   width: 33.33333333%;
}
#navigation > .row > .col-4 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: right;
   width: 16.66666667%;
}
#navigation > .row > .col-5 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: left;
   width: 25%;
}
#navigation:before,
#navigation:after,
#navigation .row:before,
#navigation .row:after {
   content: " ";
   display: table;
}
#navigation:after,
#navigation .row:after {
   clear: both;
}
@media (max-width: 480px) {
#navigation > .row > .col-1,
#navigation > .row > .col-2,
#navigation > .row > .col-3,
#navigation > .row > .col-4,
#navigation > .row > .col-5 {
   float: none;
   width: 100%  !important;
}
}
#user_nav-logo {
   margin: 0;
   vertical-align: top;
}
#nav-logo {
   border: 0px solid #000000;
   border-radius: 0px;
   box-sizing: border-box;
   display: block;
   height: auto;
   margin-left: auto;
   margin-right: auto;
   max-width: 555px;
   padding: 0;
   vertical-align: top;
   width: 100%;
}
#user_nav-menu-grid {
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
#nav-menu-grid {
   box-sizing: border-box;
   margin-left: auto;
   margin-right: auto;
   padding: 18px 15px 0 15px;
}
#nav-menu-grid > .row {
   margin-left: -15px;
   margin-right: -15px;
}
#nav-menu-grid > .row > .col-1 {
   box-sizing: border-box;
   font-size: 0;
   min-height: 1px;
   padding-left: 15px;
   padding-right: 15px;
   position: relative;
}
#nav-menu-grid > .row > .col-1 {
   float: left;
}
#nav-menu-grid > .row > .col-1 {
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   text-align: center;
   width: 100%;
}
#nav-menu-grid:before,
#nav-menu-grid:after,
#nav-menu-grid .row:before,
#nav-menu-grid .row:after {
   content: " ";
   display: table;
}
#nav-menu-grid:after,
#nav-menu-grid .row:after {
   clear: both;
}
@media (max-width: 480px) {
#nav-menu-grid > .row > .col-1 {
   float: none;
   width: 100%  !important;
}
}
#user_nav-menu {
   background-color: transparent;
   background-image: none;
   color: #3E4265;
   font-family: Poppins;
   font-size: 16px;
   font-style: normal;
   font-weight: normal;
   margin: 0;
   text-align: center;
}
#user_nav-menu span {
   margin: 0 24px 0 0px;
}
#basicdate {
   color: #3E4265;
   font-family: "Poppins";
   font-size: 16px;
   font-style: normal;
   font-weight: bold;
   text-align: left;
   text-decoration: none;
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
   z-index: 22;
}
#user_nav-info-icon-ig {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 5;
}
#user_Footer-Icon-FB {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 23;
}
#user_nav-info-icon-tt {
   display: inline-block;
   height: 40px;
   text-align: center;
   width: 24px;
   z-index: 6;
}
#user_nav-info-icon-email {
   display: inline-block;
   height: 36px;
   text-align: center;
   width: 20px;
   z-index: 2;
}
#user_nav-info-icon-phone {
   display: inline-block;
   height: 36px;
   text-align: center;
   width: 20px;
   z-index: 0;
}
#user_JavaScript2 {
   display: inline-block;
   width: 100%;
   z-index: 12;
}
#user_JavaScript1 {
   display: inline-block;
   width: 100%;
   z-index: 10;
}
#greeting {
   color: #3E4265;
   font-family: "Poppins";
   font-size: 16px;
   font-style: normal;
   font-weight: bold;
   text-align: right;
   text-decoration: none;
}
#user_nav-logo {
   display: inline-block;
   height: auto;
   width: 100%;
   z-index: 7;
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