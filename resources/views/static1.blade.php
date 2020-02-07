<!DOCTYPE html>
<!-- saved from url=(0049)https://careerhigh.in/machine-learning-iris-code/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Machine Learning with Iris Dataset</title><script src="./Machine Learning with Iris Dataset_files/require.min.js"></script>
<link href="https://careerhigh.in/static/AppCareerHigh/img/favicon.png" rel="icon">

<script src="./Machine Learning with Iris Dataset_files/jquery.min.js"></script>

<style type="text/css">
    /*!
*
* Twitter Bootstrap
*
*/
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot');
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.42857143;
  color: #000;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 3px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 33px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 23px;
}
h4,
.h4 {
  font-size: 17px;
}
h5,
.h5 {
  font-size: 13px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 92%;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 541px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: inherit;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 2px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #888;
  background-color: transparent;
  border-radius: 1px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 2px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
@media (min-width: 768px) {
  .container {
    width: 768px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 940px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1140px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 0px;
  padding-right: 0px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 32px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 45px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 31px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 30px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-lg {
  height: 45px;
  line-height: 45px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.form-group-lg select.form-control {
  height: 45px;
  line-height: 45px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 45px;
  min-height: 35px;
  padding: 11px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 45px;
  height: 45px;
  line-height: 45px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #404040;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-left: 0px;
  margin-right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 17px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  border-radius: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 2px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 541px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  line-height: 45px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 2px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 1px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 17px;
  border-radius: 3px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 2px 2px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 2px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 30px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 541px) {
  .navbar {
    border-radius: 2px;
  }
}
@media (min-width: 541px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 0px;
  padding-left: 0px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 541px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 540px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: 0px;
  margin-left: 0px;
}
@media (min-width: 541px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 541px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 541px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 6px 0px;
  font-size: 17px;
  line-height: 18px;
  height: 30px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 541px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 0px;
  padding: 9px 10px;
  margin-top: -2px;
  margin-bottom: -2px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 2px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 541px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 3px 0px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 540px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 541px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 6px;
    padding-bottom: 6px;
  }
}
.navbar-form {
  margin-left: 0px;
  margin-right: 0px;
  padding: 10px 0px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: -1px;
  margin-bottom: -1px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 540px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 541px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: -1px;
  margin-bottom: -1px;
}
.navbar-btn.btn-sm {
  margin-top: 0px;
  margin-bottom: 0px;
}
.navbar-btn.btn-xs {
  margin-top: 4px;
  margin-bottom: 4px;
}
.navbar-text {
  margin-top: 6px;
  margin-bottom: 6px;
}
@media (min-width: 541px) {
  .navbar-text {
    float: left;
    margin-left: 0px;
    margin-right: 0px;
  }
}
@media (min-width: 541px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: 0px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 540px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 540px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 2px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #5e5e5e;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 2px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 1px;
  border-top-left-radius: 1px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 1px;
  border-top-right-radius: 1px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 3px;
  padding-left: 0px;
  padding-right: 0px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #000;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 2px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 2px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 1px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 1px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 2px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 3px;
}
.well-sm {
  padding: 9px;
  border-radius: 1px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 2px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 2px 2px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after,
.item_buttons:before,
.item_buttons:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after,
.item_buttons:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
*
* Font Awesome
*
*/
/*!
 *  Font Awesome 4.2.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?v=4.2.0');
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.2.0') format('embedded-opentype'), url('../components/font-awesome/fonts/fontawesome-webfont.woff?v=4.2.0') format('woff'), url('../components/font-awesome/fonts/fontawesome-webfont.ttf?v=4.2.0') format('truetype'), url('../components/font-awesome/fonts/fontawesome-webfont.svg?v=4.2.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
/*!
*
* IPython base
*
*/
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
code {
  color: #000;
}
pre {
  font-size: inherit;
  line-height: inherit;
}
label {
  font-weight: normal;
}
/* Make the page background atleast 100% the height of the view port */
/* Make the page itself atleast 70% the height of the view port */
.border-box-sizing {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.corner-all {
  border-radius: 2px;
}
.no-padding {
  padding: 0px;
}
/* Flexible box model classes */
/* Taken from Alex Russell http://infrequently.org/2009/08/css-3-progress/ */
/* This file is a compatability layer.  It allows the usage of flexible box 
model layouts accross multiple browsers, including older browsers.  The newest,
universal implementation of the flexible box model is used when available (see
`Modern browsers` comments below).  Browsers that are known to implement this 
new spec completely include:

    Firefox 28.0+
    Chrome 29.0+
    Internet Explorer 11+ 
    Opera 17.0+

Browsers not listed, including Safari, are supported via the styling under the
`Old browsers` comments below.
*/
.hbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
.hbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.vbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
.vbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.hbox.reverse,
.vbox.reverse,
.reverse {
  /* Old browsers */
  -webkit-box-direction: reverse;
  -moz-box-direction: reverse;
  box-direction: reverse;
  /* Modern browsers */
  flex-direction: row-reverse;
}
.hbox.box-flex0,
.vbox.box-flex0,
.box-flex0 {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
  width: auto;
}
.hbox.box-flex1,
.vbox.box-flex1,
.box-flex1 {
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex,
.vbox.box-flex,
.box-flex {
  /* Old browsers */
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex2,
.vbox.box-flex2,
.box-flex2 {
  /* Old browsers */
  -webkit-box-flex: 2;
  -moz-box-flex: 2;
  box-flex: 2;
  /* Modern browsers */
  flex: 2;
}
.box-group1 {
  /*  Deprecated */
  -webkit-box-flex-group: 1;
  -moz-box-flex-group: 1;
  box-flex-group: 1;
}
.box-group2 {
  /* Deprecated */
  -webkit-box-flex-group: 2;
  -moz-box-flex-group: 2;
  box-flex-group: 2;
}
.hbox.start,
.vbox.start,
.start {
  /* Old browsers */
  -webkit-box-pack: start;
  -moz-box-pack: start;
  box-pack: start;
  /* Modern browsers */
  justify-content: flex-start;
}
.hbox.end,
.vbox.end,
.end {
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
}
.hbox.center,
.vbox.center,
.center {
  /* Old browsers */
  -webkit-box-pack: center;
  -moz-box-pack: center;
  box-pack: center;
  /* Modern browsers */
  justify-content: center;
}
.hbox.baseline,
.vbox.baseline,
.baseline {
  /* Old browsers */
  -webkit-box-pack: baseline;
  -moz-box-pack: baseline;
  box-pack: baseline;
  /* Modern browsers */
  justify-content: baseline;
}
.hbox.stretch,
.vbox.stretch,
.stretch {
  /* Old browsers */
  -webkit-box-pack: stretch;
  -moz-box-pack: stretch;
  box-pack: stretch;
  /* Modern browsers */
  justify-content: stretch;
}
.hbox.align-start,
.vbox.align-start,
.align-start {
  /* Old browsers */
  -webkit-box-align: start;
  -moz-box-align: start;
  box-align: start;
  /* Modern browsers */
  align-items: flex-start;
}
.hbox.align-end,
.vbox.align-end,
.align-end {
  /* Old browsers */
  -webkit-box-align: end;
  -moz-box-align: end;
  box-align: end;
  /* Modern browsers */
  align-items: flex-end;
}
.hbox.align-center,
.vbox.align-center,
.align-center {
  /* Old browsers */
  -webkit-box-align: center;
  -moz-box-align: center;
  box-align: center;
  /* Modern browsers */
  align-items: center;
}
.hbox.align-baseline,
.vbox.align-baseline,
.align-baseline {
  /* Old browsers */
  -webkit-box-align: baseline;
  -moz-box-align: baseline;
  box-align: baseline;
  /* Modern browsers */
  align-items: baseline;
}
.hbox.align-stretch,
.vbox.align-stretch,
.align-stretch {
  /* Old browsers */
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  box-align: stretch;
  /* Modern browsers */
  align-items: stretch;
}
div.error {
  margin: 2em;
  text-align: center;
}
div.error > h1 {
  font-size: 500%;
  line-height: normal;
}
div.error > p {
  font-size: 200%;
  line-height: normal;
}
div.traceback-wrapper {
  text-align: left;
  max-width: 800px;
  margin: auto;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
body {
  background-color: #fff;
  /* This makes sure that the body covers the entire window and needs to
       be in a different element than the display: box in wrapper below */
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  overflow: visible;
}
body > #header {
  /* Initially hidden to prevent FLOUC */
  display: none;
  background-color: #fff;
  /* Display over codemirror */
  position: relative;
  z-index: 100;
}
body > #header #header-container {
  padding-bottom: 5px;
  padding-top: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
body > #header .header-bar {
  width: 100%;
  height: 1px;
  background: #e7e7e7;
  margin-bottom: -1px;
}
@media print {
  body > #header {
    display: none !important;
  }
}
#header-spacer {
  width: 100%;
  visibility: hidden;
}
@media print {
  #header-spacer {
    display: none;
  }
}
#ipython_notebook {
  padding-left: 0px;
  padding-top: 1px;
  padding-bottom: 1px;
}
@media (max-width: 991px) {
  #ipython_notebook {
    margin-left: 10px;
  }
}
[dir="rtl"] #ipython_notebook {
  float: right !important;
}
#noscript {
  width: auto;
  padding-top: 16px;
  padding-bottom: 16px;
  text-align: center;
  font-size: 22px;
  color: red;
  font-weight: bold;
}
#ipython_notebook img {
  height: 28px;
}
#site {
  width: 100%;
  display: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  overflow: auto;
}
@media print {
  #site {
    height: auto !important;
  }
}
/* Smaller buttons */
.ui-button .ui-button-text {
  padding: 0.2em 0.8em;
  font-size: 77%;
}
input.ui-button {
  padding: 0.3em 0.9em;
}
span#login_widget {
  float: right;
}
span#login_widget > .button,
#logout {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button:focus,
#logout:focus,
span#login_widget > .button.focus,
#logout.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
span#login_widget > .button:hover,
#logout:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active:hover,
#logout:active:hover,
span#login_widget > .button.active:hover,
#logout.active:hover,
.open > .dropdown-togglespan#login_widget > .button:hover,
.open > .dropdown-toggle#logout:hover,
span#login_widget > .button:active:focus,
#logout:active:focus,
span#login_widget > .button.active:focus,
#logout.active:focus,
.open > .dropdown-togglespan#login_widget > .button:focus,
.open > .dropdown-toggle#logout:focus,
span#login_widget > .button:active.focus,
#logout:active.focus,
span#login_widget > .button.active.focus,
#logout.active.focus,
.open > .dropdown-togglespan#login_widget > .button.focus,
.open > .dropdown-toggle#logout.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  background-image: none;
}
span#login_widget > .button.disabled:hover,
#logout.disabled:hover,
span#login_widget > .button[disabled]:hover,
#logout[disabled]:hover,
fieldset[disabled] span#login_widget > .button:hover,
fieldset[disabled] #logout:hover,
span#login_widget > .button.disabled:focus,
#logout.disabled:focus,
span#login_widget > .button[disabled]:focus,
#logout[disabled]:focus,
fieldset[disabled] span#login_widget > .button:focus,
fieldset[disabled] #logout:focus,
span#login_widget > .button.disabled.focus,
#logout.disabled.focus,
span#login_widget > .button[disabled].focus,
#logout[disabled].focus,
fieldset[disabled] span#login_widget > .button.focus,
fieldset[disabled] #logout.focus {
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button .badge,
#logout .badge {
  color: #fff;
  background-color: #333;
}
.nav-header {
  text-transform: none;
}
#header > span {
  margin-top: 10px;
}
.modal_stretch .modal-dialog {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  min-height: 80vh;
}
.modal_stretch .modal-dialog .modal-body {
  max-height: calc(100vh - 200px);
  overflow: auto;
  flex: 1;
}
@media (min-width: 768px) {
  .modal .modal-dialog {
    width: 700px;
  }
}
@media (min-width: 768px) {
  select.form-control {
    margin-left: 12px;
    margin-right: 12px;
  }
}
/*!
*
* IPython auth
*
*/
.center-nav {
  display: inline-block;
  margin-bottom: -4px;
}
/*!
*
* IPython tree view
*
*/
/* We need an invisible input field on top of the sentense*/
/* "Drag file onto the list ..." */
.alternate_upload {
  background-color: none;
  display: inline;
}
.alternate_upload.form {
  padding: 0;
  margin: 0;
}
.alternate_upload input.fileinput {
  text-align: center;
  vertical-align: middle;
  display: inline;
  opacity: 0;
  z-index: 2;
  width: 12ex;
  margin-right: -12ex;
}
.alternate_upload .btn-upload {
  height: 22px;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
[dir="rtl"] #tabs li {
  float: right;
}
ul#tabs {
  margin-bottom: 4px;
}
[dir="rtl"] ul#tabs {
  margin-right: 0px;
}
ul#tabs a {
  padding-top: 6px;
  padding-bottom: 4px;
}
ul.breadcrumb a:focus,
ul.breadcrumb a:hover {
  text-decoration: none;
}
ul.breadcrumb i.icon-home {
  font-size: 16px;
  margin-right: 4px;
}
ul.breadcrumb span {
  color: #5e5e5e;
}
.list_toolbar {
  padding: 4px 0 4px 0;
  vertical-align: middle;
}
.list_toolbar .tree-buttons {
  padding-top: 1px;
}
[dir="rtl"] .list_toolbar .tree-buttons {
  float: left !important;
}
[dir="rtl"] .list_toolbar .pull-right {
  padding-top: 1px;
  float: left !important;
}
[dir="rtl"] .list_toolbar .pull-left {
  float: right !important;
}
.dynamic-buttons {
  padding-top: 3px;
  display: inline-block;
}
.list_toolbar [class*="span"] {
  min-height: 24px;
}
.list_header {
  font-weight: bold;
  background-color: #EEE;
}
.list_placeholder {
  font-weight: bold;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
}
.list_container {
  margin-top: 4px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 2px;
}
.list_container > div {
  border-bottom: 1px solid #ddd;
}
.list_container > div:hover .list-item {
  background-color: red;
}
.list_container > div:last-child {
  border: none;
}
.list_item:hover .list_item {
  background-color: #ddd;
}
.list_item a {
  text-decoration: none;
}
.list_item:hover {
  background-color: #fafafa;
}
.list_header > div,
.list_item > div {
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
.list_header > div input,
.list_item > div input {
  margin-right: 7px;
  margin-left: 14px;
  vertical-align: baseline;
  line-height: 22px;
  position: relative;
  top: -1px;
}
.list_header > div .item_link,
.list_item > div .item_link {
  margin-left: -1px;
  vertical-align: baseline;
  line-height: 22px;
}
.new-file input[type=checkbox] {
  visibility: hidden;
}
.item_name {
  line-height: 22px;
  height: 24px;
}
.item_icon {
  font-size: 14px;
  color: #5e5e5e;
  margin-right: 7px;
  margin-left: 7px;
  line-height: 22px;
  vertical-align: baseline;
}
.item_buttons {
  line-height: 1em;
  margin-left: -5px;
}
.item_buttons .btn,
.item_buttons .btn-group,
.item_buttons .input-group {
  float: left;
}
.item_buttons > .btn,
.item_buttons > .btn-group,
.item_buttons > .input-group {
  margin-left: 5px;
}
.item_buttons .btn {
  min-width: 13ex;
}
.item_buttons .running-indicator {
  padding-top: 4px;
  color: #5cb85c;
}
.item_buttons .kernel-name {
  padding-top: 4px;
  color: #5bc0de;
  margin-right: 7px;
  float: left;
}
.toolbar_info {
  height: 24px;
  line-height: 24px;
}
.list_item input:not([type=checkbox]) {
  padding-top: 3px;
  padding-bottom: 3px;
  height: 22px;
  line-height: 14px;
  margin: 0px;
}
.highlight_text {
  color: blue;
}
#project_name {
  display: inline-block;
  padding-left: 7px;
  margin-left: -2px;
}
#project_name > .breadcrumb {
  padding: 0px;
  margin-bottom: 0px;
  background-color: transparent;
  font-weight: bold;
}
#tree-selector {
  padding-right: 0px;
}
[dir="rtl"] #tree-selector a {
  float: right;
}
#button-select-all {
  min-width: 50px;
}
#select-all {
  margin-left: 7px;
  margin-right: 2px;
}
.menu_icon {
  margin-right: 2px;
}
.tab-content .row {
  margin-left: 0px;
  margin-right: 0px;
}
.folder_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f114";
}
.folder_icon:before.pull-left {
  margin-right: .3em;
}
.folder_icon:before.pull-right {
  margin-left: .3em;
}
.notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
}
.notebook_icon:before.pull-left {
  margin-right: .3em;
}
.notebook_icon:before.pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
  color: #5cb85c;
}
.running_notebook_icon:before.pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.pull-right {
  margin-left: .3em;
}
.file_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f016";
  position: relative;
  top: -2px;
}
.file_icon:before.pull-left {
  margin-right: .3em;
}
.file_icon:before.pull-right {
  margin-left: .3em;
}
#notebook_toolbar .pull-right {
  padding-top: 0px;
  margin-right: -1px;
}
ul#new-menu {
  left: auto;
  right: 0;
}
[dir="rtl"] #new-menu {
  text-align: right;
}
.kernel-menu-icon {
  padding-right: 12px;
  width: 24px;
  content: "\f096";
}
.kernel-menu-icon:before {
  content: "\f096";
}
.kernel-menu-icon-current:before {
  content: "\f00c";
}
#tab_content {
  padding-top: 20px;
}
#running .panel-group .panel {
  margin-top: 3px;
  margin-bottom: 1em;
}
#running .panel-group .panel .panel-heading {
  background-color: #EEE;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
#running .panel-group .panel .panel-heading a:focus,
#running .panel-group .panel .panel-heading a:hover {
  text-decoration: none;
}
#running .panel-group .panel .panel-body {
  padding: 0px;
}
#running .panel-group .panel .panel-body .list_container {
  margin-top: 0px;
  margin-bottom: 0px;
  border: 0px;
  border-radius: 0px;
}
#running .panel-group .panel .panel-body .list_container .list_item {
  border-bottom: 1px solid #ddd;
}
#running .panel-group .panel .panel-body .list_container .list_item:last-child {
  border-bottom: 0px;
}
[dir="rtl"] #running .col-sm-8 {
  float: right !important;
}
.delete-button {
  display: none;
}
.duplicate-button {
  display: none;
}
.rename-button {
  display: none;
}
.shutdown-button {
  display: none;
}
.dynamic-instructions {
  display: inline-block;
  padding-top: 4px;
}
/*!
*
* IPython text editor webapp
*
*/
.selected-keymap i.fa {
  padding: 0px 5px;
}
.selected-keymap i.fa:before {
  content: "\f00c";
}
#mode-menu {
  overflow: auto;
  max-height: 20em;
}
.edit_app #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.edit_app #menubar .navbar {
  /* Use a negative 1 bottom margin, so the border overlaps the border of the
    header */
  margin-bottom: -1px;
}
.dirty-indicator {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator.pull-left {
  margin-right: .3em;
}
.dirty-indicator.pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-dirty.pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-clean.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00c";
}
.dirty-indicator-clean:before.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.pull-right {
  margin-left: .3em;
}
#filename {
  font-size: 16pt;
  display: table;
  padding: 0px 5px;
}
#current-mode {
  padding-left: 5px;
  padding-right: 5px;
}
#texteditor-backdrop {
  padding-top: 20px;
  padding-bottom: 20px;
}
@media not print {
  #texteditor-backdrop {
    background-color: #EEE;
  }
}
@media print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container {
    padding: 0px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
/*!
*
* IPython notebook
*
*/
/* CSS font colors for translated ANSI colors. */
.ansibold {
  font-weight: bold;
}
/* use dark versions for foreground, to improve visibility */
.ansiblack {
  color: black;
}
.ansired {
  color: darkred;
}
.ansigreen {
  color: darkgreen;
}
.ansiyellow {
  color: #c4a000;
}
.ansiblue {
  color: darkblue;
}
.ansipurple {
  color: darkviolet;
}
.ansicyan {
  color: steelblue;
}
.ansigray {
  color: gray;
}
/* and light for background, for the same reason */
.ansibgblack {
  background-color: black;
}
.ansibgred {
  background-color: red;
}
.ansibggreen {
  background-color: green;
}
.ansibgyellow {
  background-color: yellow;
}
.ansibgblue {
  background-color: blue;
}
.ansibgpurple {
  background-color: magenta;
}
.ansibgcyan {
  background-color: cyan;
}
.ansibggray {
  background-color: gray;
}
div.cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  border-radius: 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  border-width: 1px;
  border-style: solid;
  border-color: transparent;
  width: 100%;
  padding: 5px;
  /* This acts as a spacer between cells, that is outside the border */
  margin: 0px;
  outline: none;
  border-left-width: 1px;
  padding-left: 5px;
  background: linear-gradient(to right, transparent -40px, transparent 1px, transparent 1px, transparent 100%);
}
div.cell.jupyter-soft-selected {
  border-left-color: #90CAF9;
  border-left-color: #E3F2FD;
  border-left-width: 1px;
  padding-left: 5px;
  border-right-color: #E3F2FD;
  border-right-width: 1px;
  background: #E3F2FD;
}
@media print {
  div.cell.jupyter-soft-selected {
    border-color: transparent;
  }
}
div.cell.selected {
  border-color: #ababab;
  border-left-width: 0px;
  padding-left: 6px;
  background: linear-gradient(to right, #42A5F5 -40px, #42A5F5 5px, transparent 5px, transparent 100%);
}
@media print {
  div.cell.selected {
    border-color: transparent;
  }
}
div.cell.selected.jupyter-soft-selected {
  border-left-width: 0;
  padding-left: 6px;
  background: linear-gradient(to right, #42A5F5 -40px, #42A5F5 7px, #E3F2FD 7px, #E3F2FD 100%);
}
.edit_mode div.cell.selected {
  border-color: #66BB6A;
  border-left-width: 0px;
  padding-left: 6px;
  background: linear-gradient(to right, #66BB6A -40px, #66BB6A 5px, transparent 5px, transparent 100%);
}
@media print {
  .edit_mode div.cell.selected {
    border-color: transparent;
  }
}
.prompt {
  /* This needs to be wide enough for 3 digit prompt numbers: In[100]: */
  min-width: 14ex;
  /* This padding is tuned to match the padding on the CodeMirror editor. */
  padding: 0.4em;
  margin: 0px;
  font-family: monospace;
  text-align: right;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
  /* Don't highlight prompt number selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* Use default cursor */
  cursor: default;
}
@media (max-width: 540px) {
  .prompt {
    text-align: left;
  }
}
div.inner_cell {
  min-width: 0;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_area {
  border: 1px solid #cfcfcf;
  border-radius: 2px;
  background: #f7f7f7;
  line-height: 1.21429em;
}
/* This is needed so that empty prompt areas can collapse to zero height when there
   is no content in the output_subarea and the prompt. The main purpose of this is
   to make sure that empty JavaScript output_subareas have no height. */
div.prompt:empty {
  padding-top: 0;
  padding-bottom: 0;
}
div.unrecognized_cell {
  padding: 5px 5px 5px 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.unrecognized_cell .inner_cell {
  border-radius: 2px;
  padding: 5px;
  font-weight: bold;
  color: red;
  border: 1px solid #cfcfcf;
  background: #eaeaea;
}
div.unrecognized_cell .inner_cell a {
  color: inherit;
  text-decoration: none;
}
div.unrecognized_cell .inner_cell a:hover {
  color: inherit;
  text-decoration: none;
}
@media (max-width: 540px) {
  div.unrecognized_cell > div.prompt {
    display: none;
  }
}
div.code_cell {
  /* avoid page breaking on code cells when printing */
}
@media print {
  div.code_cell {
    page-break-inside: avoid;
  }
}
/* any special styling for code cells that are currently running goes here */
div.input {
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.input {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_prompt {
  color: #303F9F;
  border-top: 1px solid transparent;
}
div.input_area > div.highlight {
  margin: 0.4em;
  border: none;
  padding: 0px;
  background-color: transparent;
}
div.input_area > div.highlight > pre {
  margin: 0px;
  border: none;
  padding: 0px;
  background-color: transparent;
}
/* The following gets added to the <head> if it is detected that the user has a
 * monospace font with inconsistent normal/bold/italic height.  See
 * notebookmain.js.  Such fonts will have keywords vertically offset with
 * respect to the rest of the text.  The user should select a better font.
 * See: https://github.com/ipython/ipython/issues/1503
 *
 * .CodeMirror span {
 *      vertical-align: bottom;
 * }
 */
.CodeMirror {
  line-height: 1.21429em;
  /* Changed from 1em to our global default */
  font-size: 14px;
  height: auto;
  /* Changed to auto to autogrow */
  background: none;
  /* Changed from white to allow our bg to show through */
}
.CodeMirror-scroll {
  /*  The CodeMirror docs are a bit fuzzy on if overflow-y should be hidden or visible.*/
  /*  We have found that if it is visible, vertical scrollbars appear with font size changes.*/
  overflow-y: hidden;
  overflow-x: auto;
}
.CodeMirror-lines {
  /* In CM2, this used to be 0.4em, but in CM3 it went to 4px. We need the em value because */
  /* we have set a different line-height and want this to scale with that. */
  padding: 0.4em;
}
.CodeMirror-linenumber {
  padding: 0 8px 0 4px;
}
.CodeMirror-gutters {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.CodeMirror pre {
  /* In CM3 this went to 4px from 0 in CM2. We need the 0 value because of how we size */
  /* .CodeMirror-lines */
  padding: 0;
  border: 0;
  border-radius: 0;
}
/*

Original style from softwaremaniacs.org (c) Ivan Sagalaev <Maniac@SoftwareManiacs.Org>
Adapted from GitHub theme

*/
.highlight-base {
  color: #000;
}
.highlight-variable {
  color: #000;
}
.highlight-variable-2 {
  color: #1a1a1a;
}
.highlight-variable-3 {
  color: #333333;
}
.highlight-string {
  color: #BA2121;
}
.highlight-comment {
  color: #408080;
  font-style: italic;
}
.highlight-number {
  color: #080;
}
.highlight-atom {
  color: #88F;
}
.highlight-keyword {
  color: #008000;
  font-weight: bold;
}
.highlight-builtin {
  color: #008000;
}
.highlight-error {
  color: #f00;
}
.highlight-operator {
  color: #AA22FF;
  font-weight: bold;
}
.highlight-meta {
  color: #AA22FF;
}
/* previously not defined, copying from default codemirror */
.highlight-def {
  color: #00f;
}
.highlight-string-2 {
  color: #f50;
}
.highlight-qualifier {
  color: #555;
}
.highlight-bracket {
  color: #997;
}
.highlight-tag {
  color: #170;
}
.highlight-attribute {
  color: #00c;
}
.highlight-header {
  color: blue;
}
.highlight-quote {
  color: #090;
}
.highlight-link {
  color: #00c;
}
/* apply the same style to codemirror */
.cm-s-ipython span.cm-keyword {
  color: #008000;
  font-weight: bold;
}
.cm-s-ipython span.cm-atom {
  color: #88F;
}
.cm-s-ipython span.cm-number {
  color: #080;
}
.cm-s-ipython span.cm-def {
  color: #00f;
}
.cm-s-ipython span.cm-variable {
  color: #000;
}
.cm-s-ipython span.cm-operator {
  color: #AA22FF;
  font-weight: bold;
}
.cm-s-ipython span.cm-variable-2 {
  color: #1a1a1a;
}
.cm-s-ipython span.cm-variable-3 {
  color: #333333;
}
.cm-s-ipython span.cm-comment {
  color: #408080;
  font-style: italic;
}
.cm-s-ipython span.cm-string {
  color: #BA2121;
}
.cm-s-ipython span.cm-string-2 {
  color: #f50;
}
.cm-s-ipython span.cm-meta {
  color: #AA22FF;
}
.cm-s-ipython span.cm-qualifier {
  color: #555;
}
.cm-s-ipython span.cm-builtin {
  color: #008000;
}
.cm-s-ipython span.cm-bracket {
  color: #997;
}
.cm-s-ipython span.cm-tag {
  color: #170;
}
.cm-s-ipython span.cm-attribute {
  color: #00c;
}
.cm-s-ipython span.cm-header {
  color: blue;
}
.cm-s-ipython span.cm-quote {
  color: #090;
}
.cm-s-ipython span.cm-link {
  color: #00c;
}
.cm-s-ipython span.cm-error {
  color: #f00;
}
.cm-s-ipython span.cm-tab {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAAXNSR0IArs4c6QAAAGFJREFUSMft1LsRQFAQheHPowAKoACx3IgEKtaEHujDjORSgWTH/ZOdnZOcM/sgk/kFFWY0qV8foQwS4MKBCS3qR6ixBJvElOobYAtivseIE120FaowJPN75GMu8j/LfMwNjh4HUpwg4LUAAAAASUVORK5CYII=);
  background-position: right;
  background-repeat: no-repeat;
}
div.output_wrapper {
  /* this position must be relative to enable descendents to be absolute within it */
  position: relative;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  z-index: 1;
}
/* class for the output area when it should be height-limited */
div.output_scroll {
  /* ideally, this would be max-height, but FF barfs all over that */
  height: 24em;
  /* FF needs this *and the wrapper* to specify full width, or it will shrinkwrap */
  width: 100%;
  overflow: auto;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  display: block;
}
/* output div while it is collapsed */
div.output_collapsed {
  margin: 0px;
  padding: 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
div.out_prompt_overlay {
  height: 100%;
  padding: 0px 0.4em;
  position: absolute;
  border-radius: 2px;
}
div.out_prompt_overlay:hover {
  /* use inner shadow to get border that is computed the same on WebKit/FF */
  -webkit-box-shadow: inset 0 0 1px #000;
  box-shadow: inset 0 0 1px #000;
  background: rgba(240, 240, 240, 0.5);
}
div.output_prompt {
  color: #D84315;
}
/* This class is the outer container of all output sections. */
div.output_area {
  padding: 0px;
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.output_area .MathJax_Display {
  text-align: left !important;
}
div.output_area .rendered_html table {
  margin-left: 0;
  margin-right: 0;
}
div.output_area .rendered_html img {
  margin-left: 0;
  margin-right: 0;
}
div.output_area img,
div.output_area svg {
  max-width: 100%;
  height: auto;
}
div.output_area img.unconfined,
div.output_area svg.unconfined {
  max-width: none;
}
/* This is needed to protect the pre formating from global settings such
   as that of bootstrap */
.output {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.output_area {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
div.output_area pre {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
  color: black;
  background-color: transparent;
  border-radius: 0;
}
/* This class is for the output subarea inside the output_area and after
   the prompt div. */
div.output_subarea {
  overflow-x: auto;
  padding: 0.4em;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
  max-width: calc(100% - 14ex);
}
div.output_scroll div.output_subarea {
  overflow-x: visible;
}
/* The rest of the output_* classes are for special styling of the different
   output types */
/* all text output has this class: */
div.output_text {
  text-align: left;
  color: #000;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
}
/* stdout/stderr are 'text' as well as 'stream', but execute_result/error are *not* streams */
div.output_stderr {
  background: #fdd;
  /* very light red background for stderr */
}
div.output_latex {
  text-align: left;
}
/* Empty output_javascript divs should have no height */
div.output_javascript:empty {
  padding: 0;
}
.js-error {
  color: darkred;
}
/* raw_input styles */
div.raw_input_container {
  line-height: 1.21429em;
  padding-top: 5px;
}
pre.raw_input_prompt {
  /* nothing needed here. */
}
input.raw_input {
  font-family: monospace;
  font-size: inherit;
  color: inherit;
  width: auto;
  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;
  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0em 0.25em;
  margin: 0em 0.25em;
}
input.raw_input:focus {
  box-shadow: none;
}
p.p-space {
  margin-bottom: 10px;
}
div.output_unrecognized {
  padding: 5px;
  font-weight: bold;
  color: red;
}
div.output_unrecognized a {
  color: inherit;
  text-decoration: none;
}
div.output_unrecognized a:hover {
  color: inherit;
  text-decoration: none;
}
.rendered_html {
  color: #000;
  /* any extras will just be numbers: */
}
.rendered_html em {
  font-style: italic;
}
.rendered_html strong {
  font-weight: bold;
}
.rendered_html u {
  text-decoration: underline;
}
.rendered_html :link {
  text-decoration: underline;
}
.rendered_html :visited {
  text-decoration: underline;
}
.rendered_html h1 {
  font-size: 185.7%;
  margin: 1.08em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h2 {
  font-size: 157.1%;
  margin: 1.27em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h3 {
  font-size: 128.6%;
  margin: 1.55em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h4 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h5 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h6 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h1:first-child {
  margin-top: 0.538em;
}
.rendered_html h2:first-child {
  margin-top: 0.636em;
}
.rendered_html h3:first-child {
  margin-top: 0.777em;
}
.rendered_html h4:first-child {
  margin-top: 1em;
}
.rendered_html h5:first-child {
  margin-top: 1em;
}
.rendered_html h6:first-child {
  margin-top: 1em;
}
.rendered_html ul {
  list-style: disc;
  margin: 0em 2em;
  padding-left: 0px;
}
.rendered_html ul ul {
  list-style: square;
  margin: 0em 2em;
}
.rendered_html ul ul ul {
  list-style: circle;
  margin: 0em 2em;
}
.rendered_html ol {
  list-style: decimal;
  margin: 0em 2em;
  padding-left: 0px;
}
.rendered_html ol ol {
  list-style: upper-alpha;
  margin: 0em 2em;
}
.rendered_html ol ol ol {
  list-style: lower-alpha;
  margin: 0em 2em;
}
.rendered_html ol ol ol ol {
  list-style: lower-roman;
  margin: 0em 2em;
}
.rendered_html ol ol ol ol ol {
  list-style: decimal;
  margin: 0em 2em;
}
.rendered_html * + ul {
  margin-top: 1em;
}
.rendered_html * + ol {
  margin-top: 1em;
}
.rendered_html hr {
  color: black;
  background-color: black;
}
.rendered_html pre {
  margin: 1em 2em;
}
.rendered_html pre,
.rendered_html code {
  border: 0;
  background-color: #fff;
  color: #000;
  font-size: 100%;
  padding: 0px;
}
.rendered_html blockquote {
  margin: 1em 2em;
}
.rendered_html table {
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
  border-collapse: collapse;
}
.rendered_html tr,
.rendered_html th,
.rendered_html td {
  border: 1px solid black;
  border-collapse: collapse;
  margin: 1em 2em;
}
.rendered_html td,
.rendered_html th {
  text-align: left;
  vertical-align: middle;
  padding: 4px;
}
.rendered_html th {
  font-weight: bold;
}
.rendered_html * + table {
  margin-top: 1em;
}
.rendered_html p {
  text-align: left;
}
.rendered_html * + p {
  margin-top: 1em;
}
.rendered_html img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.rendered_html * + img {
  margin-top: 1em;
}
.rendered_html img,
.rendered_html svg {
  max-width: 100%;
  height: auto;
}
.rendered_html img.unconfined,
.rendered_html svg.unconfined {
  max-width: none;
}
div.text_cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.text_cell > div.prompt {
    display: none;
  }
}
div.text_cell_render {
  /*font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;*/
  outline: none;
  resize: none;
  width: inherit;
  border-style: none;
  padding: 0.5em 0.5em 0.5em 0.4em;
  color: #000;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
a.anchor-link:link {
  text-decoration: none;
  padding: 0px 20px;
  visibility: hidden;
}
h1:hover .anchor-link,
h2:hover .anchor-link,
h3:hover .anchor-link,
h4:hover .anchor-link,
h5:hover .anchor-link,
h6:hover .anchor-link {
  visibility: visible;
}
.text_cell.rendered .input_area {
  display: none;
}
.text_cell.rendered .rendered_html {
  overflow-x: auto;
  overflow-y: hidden;
}
.text_cell.unrendered .text_cell_render {
  display: none;
}
.cm-header-1,
.cm-header-2,
.cm-header-3,
.cm-header-4,
.cm-header-5,
.cm-header-6 {
  font-weight: bold;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.cm-header-1 {
  font-size: 185.7%;
}
.cm-header-2 {
  font-size: 157.1%;
}
.cm-header-3 {
  font-size: 128.6%;
}
.cm-header-4 {
  font-size: 110%;
}
.cm-header-5 {
  font-size: 100%;
  font-style: italic;
}
.cm-header-6 {
  font-size: 100%;
  font-style: italic;
}
/*!
*
* IPython notebook webapp
*
*/
@media (max-width: 767px) {
  .notebook_app {
    padding-left: 0px;
    padding-right: 0px;
  }
}
#ipython-main-app {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook_panel {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook {
  font-size: 14px;
  line-height: 20px;
  overflow-y: hidden;
  overflow-x: auto;
  width: 100%;
  /* This spaces the page away from the edge of the notebook area */
  padding-top: 20px;
  margin: 0px;
  outline: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  min-height: 100%;
}
@media not print {
  #notebook-container {
    padding: 15px;
    background-color: #fff;
    min-height: 0;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
@media print {
  #notebook-container {
    width: 100%;
  }
}
div.ui-widget-content {
  border: 1px solid #ababab;
  outline: none;
}
pre.dialog {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 0.4em;
  padding-left: 2em;
}
p.dialog {
  padding: 0.2em;
}
/* Word-wrap output correctly.  This is the CSS3 spelling, though Firefox seems
   to not honor it correctly.  Webkit browsers (Chrome, rekonq, Safari) do.
 */
pre,
code,
kbd,
samp {
  white-space: pre-wrap;
}
#fonttest {
  font-family: monospace;
}
p {
  margin-bottom: 0;
}
.end_space {
  min-height: 100px;
  transition: height .2s ease;
}
.notebook_app > #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
@media not print {
  .notebook_app {
    background-color: #EEE;
  }
}
kbd {
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  margin: 2px;
  padding-left: 2px;
  padding-right: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
/* CSS for the cell toolbar */
.celltoolbar {
  border: thin solid #CFCFCF;
  border-bottom: none;
  background: #EEE;
  border-radius: 2px 2px 0px 0px;
  width: 100%;
  height: 29px;
  padding-right: 4px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
  display: -webkit-flex;
}
@media print {
  .celltoolbar {
    display: none;
  }
}
.ctb_hideshow {
  display: none;
  vertical-align: bottom;
}
/* ctb_show is added to the ctb_hideshow div to show the cell toolbar.
   Cell toolbars are only shown when the ctb_global_show class is also set.
*/
.ctb_global_show .ctb_show.ctb_hideshow {
  display: block;
}
.ctb_global_show .ctb_show + .input_area,
.ctb_global_show .ctb_show + div.text_cell_input,
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border: 1px solid #cfcfcf;
}
.celltoolbar {
  font-size: 87%;
  padding-top: 3px;
}
.celltoolbar select {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  width: inherit;
  font-size: inherit;
  height: 22px;
  padding: 0px;
  display: inline-block;
}
.celltoolbar select:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.celltoolbar select::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.celltoolbar select:-ms-input-placeholder {
  color: #999;
}
.celltoolbar select::-webkit-input-placeholder {
  color: #999;
}
.celltoolbar select::-ms-expand {
  border: 0;
  background-color: transparent;
}
.celltoolbar select[disabled],
.celltoolbar select[readonly],
fieldset[disabled] .celltoolbar select {
  background-color: #eeeeee;
  opacity: 1;
}
.celltoolbar select[disabled],
fieldset[disabled] .celltoolbar select {
  cursor: not-allowed;
}
textarea.celltoolbar select {
  height: auto;
}
select.celltoolbar select {
  height: 30px;
  line-height: 30px;
}
textarea.celltoolbar select,
select[multiple].celltoolbar select {
  height: auto;
}
.celltoolbar label {
  margin-left: 5px;
  margin-right: 5px;
}
.completions {
  position: absolute;
  z-index: 110;
  overflow: hidden;
  border: 1px solid #ababab;
  border-radius: 2px;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  line-height: 1;
}
.completions select {
  background: white;
  outline: none;
  border: none;
  padding: 0px;
  margin: 0px;
  overflow: auto;
  font-family: monospace;
  font-size: 110%;
  color: #000;
  width: auto;
}
.completions select option.context {
  color: #286090;
}
#kernel_logo_widget {
  float: right !important;
  float: right;
}
#kernel_logo_widget .current_kernel_logo {
  display: none;
  margin-top: -1px;
  margin-bottom: -1px;
  width: 32px;
  height: 32px;
}
#menubar {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin-top: 1px;
}
#menubar .navbar {
  border-top: 1px;
  border-radius: 0px 0px 2px 2px;
  margin-bottom: 0px;
}
#menubar .navbar-toggle {
  float: left;
  padding-top: 7px;
  padding-bottom: 7px;
  border: none;
}
#menubar .navbar-collapse {
  clear: left;
}
.nav-wrapper {
  border-bottom: 1px solid #e7e7e7;
}
i.menu-icon {
  padding-top: 4px;
}
ul#help_menu li a {
  overflow: hidden;
  padding-right: 2.2em;
}
ul#help_menu li a i {
  margin-right: -1.2em;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: block;
  content: "\f0da";
  float: right;
  color: #333333;
  margin-top: 2px;
  margin-right: -10px;
}
.dropdown-submenu > a:after.pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.pull-right {
  margin-left: .3em;
}
.dropdown-submenu:hover > a:after {
  color: #262626;
}
.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
#notification_area {
  float: right !important;
  float: right;
  z-index: 10;
}
.indicator_area {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
#kernel_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  border-left: 1px solid;
}
#kernel_indicator .kernel_indicator_name {
  padding-left: 5px;
  padding-right: 5px;
}
#modal_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
#readonly-indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  margin-top: 2px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;
  display: none;
}
.modal_indicator:before {
  width: 1.28571429em;
  text-align: center;
}
.edit_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f040";
}
.edit_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: ' ';
}
.command_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f10c";
}
.kernel_idle_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f111";
}
.kernel_busy_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f1e2";
}
.kernel_dead_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f127";
}
.kernel_disconnected_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.pull-right {
  margin-left: .3em;
}
.notification_widget {
  color: #777;
  z-index: 10;
  background: rgba(240, 240, 240, 0.5);
  margin-right: 4px;
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget:focus,
.notification_widget.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.notification_widget:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active:hover,
.notification_widget.active:hover,
.open > .dropdown-toggle.notification_widget:hover,
.notification_widget:active:focus,
.notification_widget.active:focus,
.open > .dropdown-toggle.notification_widget:focus,
.notification_widget:active.focus,
.notification_widget.active.focus,
.open > .dropdown-toggle.notification_widget.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  background-image: none;
}
.notification_widget.disabled:hover,
.notification_widget[disabled]:hover,
fieldset[disabled] .notification_widget:hover,
.notification_widget.disabled:focus,
.notification_widget[disabled]:focus,
fieldset[disabled] .notification_widget:focus,
.notification_widget.disabled.focus,
.notification_widget[disabled].focus,
fieldset[disabled] .notification_widget.focus {
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget .badge {
  color: #fff;
  background-color: #333;
}
.notification_widget.warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning:focus,
.notification_widget.warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.notification_widget.warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active:hover,
.notification_widget.warning.active:hover,
.open > .dropdown-toggle.notification_widget.warning:hover,
.notification_widget.warning:active:focus,
.notification_widget.warning.active:focus,
.open > .dropdown-toggle.notification_widget.warning:focus,
.notification_widget.warning:active.focus,
.notification_widget.warning.active.focus,
.open > .dropdown-toggle.notification_widget.warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  background-image: none;
}
.notification_widget.warning.disabled:hover,
.notification_widget.warning[disabled]:hover,
fieldset[disabled] .notification_widget.warning:hover,
.notification_widget.warning.disabled:focus,
.notification_widget.warning[disabled]:focus,
fieldset[disabled] .notification_widget.warning:focus,
.notification_widget.warning.disabled.focus,
.notification_widget.warning[disabled].focus,
fieldset[disabled] .notification_widget.warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.notification_widget.success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success:focus,
.notification_widget.success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.notification_widget.success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active:hover,
.notification_widget.success.active:hover,
.open > .dropdown-toggle.notification_widget.success:hover,
.notification_widget.success:active:focus,
.notification_widget.success.active:focus,
.open > .dropdown-toggle.notification_widget.success:focus,
.notification_widget.success:active.focus,
.notification_widget.success.active.focus,
.open > .dropdown-toggle.notification_widget.success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  background-image: none;
}
.notification_widget.success.disabled:hover,
.notification_widget.success[disabled]:hover,
fieldset[disabled] .notification_widget.success:hover,
.notification_widget.success.disabled:focus,
.notification_widget.success[disabled]:focus,
fieldset[disabled] .notification_widget.success:focus,
.notification_widget.success.disabled.focus,
.notification_widget.success[disabled].focus,
fieldset[disabled] .notification_widget.success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.notification_widget.info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info:focus,
.notification_widget.info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.notification_widget.info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active:hover,
.notification_widget.info.active:hover,
.open > .dropdown-toggle.notification_widget.info:hover,
.notification_widget.info:active:focus,
.notification_widget.info.active:focus,
.open > .dropdown-toggle.notification_widget.info:focus,
.notification_widget.info:active.focus,
.notification_widget.info.active.focus,
.open > .dropdown-toggle.notification_widget.info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  background-image: none;
}
.notification_widget.info.disabled:hover,
.notification_widget.info[disabled]:hover,
fieldset[disabled] .notification_widget.info:hover,
.notification_widget.info.disabled:focus,
.notification_widget.info[disabled]:focus,
fieldset[disabled] .notification_widget.info:focus,
.notification_widget.info.disabled.focus,
.notification_widget.info[disabled].focus,
fieldset[disabled] .notification_widget.info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.notification_widget.danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger:focus,
.notification_widget.danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.notification_widget.danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active:hover,
.notification_widget.danger.active:hover,
.open > .dropdown-toggle.notification_widget.danger:hover,
.notification_widget.danger:active:focus,
.notification_widget.danger.active:focus,
.open > .dropdown-toggle.notification_widget.danger:focus,
.notification_widget.danger:active.focus,
.notification_widget.danger.active.focus,
.open > .dropdown-toggle.notification_widget.danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  background-image: none;
}
.notification_widget.danger.disabled:hover,
.notification_widget.danger[disabled]:hover,
fieldset[disabled] .notification_widget.danger:hover,
.notification_widget.danger.disabled:focus,
.notification_widget.danger[disabled]:focus,
fieldset[disabled] .notification_widget.danger:focus,
.notification_widget.danger.disabled.focus,
.notification_widget.danger[disabled].focus,
fieldset[disabled] .notification_widget.danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger .badge {
  color: #d9534f;
  background-color: #fff;
}
div#pager {
  background-color: #fff;
  font-size: 14px;
  line-height: 20px;
  overflow: hidden;
  display: none;
  position: fixed;
  bottom: 0px;
  width: 100%;
  max-height: 50%;
  padding-top: 8px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  /* Display over codemirror */
  z-index: 100;
  /* Hack which prevents jquery ui resizable from changing top. */
  top: auto !important;
}
div#pager pre {
  line-height: 1.21429em;
  color: #000;
  background-color: #f7f7f7;
  padding: 0.4em;
}
div#pager #pager-button-area {
  position: absolute;
  top: 8px;
  right: 20px;
}
div#pager #pager-contents {
  position: relative;
  overflow: auto;
  width: 100%;
  height: 100%;
}
div#pager #pager-contents #pager-container {
  position: relative;
  padding: 15px 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
div#pager .ui-resizable-handle {
  top: 0px;
  height: 8px;
  background: #f7f7f7;
  border-top: 1px solid #cfcfcf;
  border-bottom: 1px solid #cfcfcf;
  /* This injects handle bars (a short, wide = symbol) for 
        the resize handle. */
}
div#pager .ui-resizable-handle::after {
  content: '';
  top: 2px;
  left: 50%;
  height: 3px;
  width: 30px;
  margin-left: -15px;
  position: absolute;
  border-top: 1px solid #cfcfcf;
}
.quickhelp {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  line-height: 1.8em;
}
.shortcut_key {
  display: inline-block;
  width: 21ex;
  text-align: right;
  font-family: monospace;
}
.shortcut_descr {
  display: inline-block;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
span.save_widget {
  margin-top: 6px;
}
span.save_widget span.filename {
  height: 1em;
  line-height: 1em;
  padding: 3px;
  margin-left: 16px;
  border: none;
  font-size: 146.5%;
  border-radius: 2px;
}
span.save_widget span.filename:hover {
  background-color: #e6e6e6;
}
span.checkpoint_status,
span.autosave_status {
  font-size: small;
}
@media (max-width: 767px) {
  span.save_widget {
    font-size: small;
  }
  span.checkpoint_status,
  span.autosave_status {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  span.checkpoint_status {
    display: none;
  }
  span.autosave_status {
    font-size: x-small;
  }
}
.toolbar {
  padding: 0px;
  margin-left: -5px;
  margin-top: 2px;
  margin-bottom: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.toolbar select,
.toolbar label {
  width: auto;
  vertical-align: middle;
  margin-right: 2px;
  margin-bottom: 0px;
  display: inline;
  font-size: 92%;
  margin-left: 0.3em;
  margin-right: 0.3em;
  padding: 0px;
  padding-top: 3px;
}
.toolbar .btn {
  padding: 2px 8px;
}
.toolbar .btn-group {
  margin-top: 0px;
  margin-left: 5px;
}
#maintoolbar {
  margin-bottom: -3px;
  margin-top: -8px;
  border: 0px;
  min-height: 27px;
  margin-left: 0px;
  padding-top: 11px;
  padding-bottom: 3px;
}
#maintoolbar .navbar-text {
  float: none;
  vertical-align: middle;
  text-align: right;
  margin-left: 5px;
  margin-right: 0px;
  margin-top: 0px;
}
.select-xs {
  height: 24px;
}
.pulse,
.dropdown-menu > li > a.pulse,
li.pulse > a.dropdown-toggle,
li.pulse.open > a.dropdown-toggle {
  background-color: #F37626;
  color: white;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
/** WARNING IF YOU ARE EDITTING THIS FILE, if this is a .css file, It has a lot
 * of chance of beeing generated from the ../less/[samename].less file, you can
 * try to get back the less file by reverting somme commit in history
 **/
/*
 * We'll try to get something pretty, so we
 * have some strange css to have the scroll bar on
 * the left with fix button on the top right of the tooltip
 */
@-moz-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-moz-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
/*properties of tooltip after "expand"*/
.bigtooltip {
  overflow: auto;
  height: 200px;
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
}
/*properties of tooltip before "expand"*/
.smalltooltip {
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 80px;
}
.tooltipbuttons {
  position: absolute;
  padding-right: 15px;
  top: 0px;
  right: 0px;
}
.tooltiptext {
  /*avoid the button to overlap on some docstring*/
  padding-right: 30px;
}
.ipython_tooltip {
  max-width: 700px;
  /*fade-in animation when inserted*/
  -webkit-animation: fadeOut 400ms;
  -moz-animation: fadeOut 400ms;
  animation: fadeOut 400ms;
  -webkit-animation: fadeIn 400ms;
  -moz-animation: fadeIn 400ms;
  animation: fadeIn 400ms;
  vertical-align: middle;
  background-color: #f7f7f7;
  overflow: visible;
  border: #ababab 1px solid;
  outline: none;
  padding: 3px;
  margin: 0px;
  padding-left: 7px;
  font-family: monospace;
  min-height: 50px;
  -moz-box-shadow: 0px 6px 10px -1px #adadad;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  border-radius: 2px;
  position: absolute;
  z-index: 1000;
}
.ipython_tooltip a {
  float: right;
}
.ipython_tooltip .tooltiptext pre {
  border: 0;
  border-radius: 0;
  font-size: 100%;
  background-color: #f7f7f7;
}
.pretooltiparrow {
  left: 0px;
  margin: 0px;
  top: -16px;
  width: 40px;
  height: 16px;
  overflow: hidden;
  position: absolute;
}
.pretooltiparrow:before {
  background-color: #f7f7f7;
  border: 1px #ababab solid;
  z-index: 11;
  content: "";
  position: absolute;
  left: 15px;
  top: 10px;
  width: 25px;
  height: 25px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
ul.typeahead-list i {
  margin-left: -10px;
  width: 18px;
}
ul.typeahead-list {
  max-height: 80vh;
  overflow: auto;
}
ul.typeahead-list > li > a {
  /** Firefox bug **/
  /* see https://github.com/jupyter/notebook/issues/559 */
  white-space: normal;
}
.cmd-palette .modal-body {
  padding: 7px;
}
.cmd-palette form {
  background: white;
}
.cmd-palette input {
  outline: none;
}
.no-shortcut {
  display: none;
}
.command-shortcut:before {
  content: "(command)";
  padding-right: 3px;
  color: #777777;
}
.edit-shortcut:before {
  content: "(edit)";
  padding-right: 3px;
  color: #777777;
}
#find-and-replace #replace-preview .match,
#find-and-replace #replace-preview .insert {
  background-color: #BBDEFB;
  border-color: #90CAF9;
  border-style: solid;
  border-width: 1px;
  border-radius: 0px;
}
#find-and-replace #replace-preview .replace .match {
  background-color: #FFCDD2;
  border-color: #EF9A9A;
  border-radius: 0px;
}
#find-and-replace #replace-preview .replace .insert {
  background-color: #C8E6C9;
  border-color: #A5D6A7;
  border-radius: 0px;
}
#find-and-replace #replace-preview {
  max-height: 60vh;
  overflow: auto;
}
#find-and-replace #replace-preview pre {
  padding: 5px 10px;
}
.terminal-app {
  background: #EEE;
}
.terminal-app #header {
  background: #fff;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.terminal-app .terminal {
  width: 100%;
  float: left;
  font-family: monospace;
  color: white;
  background: black;
  padding: 0.4em;
  border-radius: 2px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
}
.terminal-app .terminal,
.terminal-app .terminal dummy-screen {
  line-height: 1em;
  font-size: 14px;
}
.terminal-app .terminal .xterm-rows {
  padding: 10px;
}
.terminal-app .terminal-cursor {
  color: black;
  background: white;
}
.terminal-app #terminado-container {
  margin-top: 20px;
}
/*# sourceMappingURL=style.min.css.map */
    </style>
<style type="text/css">
    .highlight .hll { background-color: #ffffcc }
.highlight  { background: #f8f8f8; }
.highlight .c { color: #408080; font-style: italic } /* Comment */
.highlight .err { border: 1px solid #FF0000 } /* Error */
.highlight .k { color: #008000; font-weight: bold } /* Keyword */
.highlight .o { color: #666666 } /* Operator */
.highlight .ch { color: #408080; font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: #408080; font-style: italic } /* Comment.Multiline */
.highlight .cp { color: #BC7A00 } /* Comment.Preproc */
.highlight .cpf { color: #408080; font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: #408080; font-style: italic } /* Comment.Single */
.highlight .cs { color: #408080; font-style: italic } /* Comment.Special */
.highlight .gd { color: #A00000 } /* Generic.Deleted */
.highlight .ge { font-style: italic } /* Generic.Emph */
.highlight .gr { color: #FF0000 } /* Generic.Error */
.highlight .gh { color: #000080; font-weight: bold } /* Generic.Heading */
.highlight .gi { color: #00A000 } /* Generic.Inserted */
.highlight .go { color: #888888 } /* Generic.Output */
.highlight .gp { color: #000080; font-weight: bold } /* Generic.Prompt */
.highlight .gs { font-weight: bold } /* Generic.Strong */
.highlight .gu { color: #800080; font-weight: bold } /* Generic.Subheading */
.highlight .gt { color: #0044DD } /* Generic.Traceback */
.highlight .kc { color: #008000; font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: #008000; font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: #008000; font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: #008000 } /* Keyword.Pseudo */
.highlight .kr { color: #008000; font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: #B00040 } /* Keyword.Type */
.highlight .m { color: #666666 } /* Literal.Number */
.highlight .s { color: #BA2121 } /* Literal.String */
.highlight .na { color: #7D9029 } /* Name.Attribute */
.highlight .nb { color: #008000 } /* Name.Builtin */
.highlight .nc { color: #0000FF; font-weight: bold } /* Name.Class */
.highlight .no { color: #880000 } /* Name.Constant */
.highlight .nd { color: #AA22FF } /* Name.Decorator */
.highlight .ni { color: #999999; font-weight: bold } /* Name.Entity */
.highlight .ne { color: #D2413A; font-weight: bold } /* Name.Exception */
.highlight .nf { color: #0000FF } /* Name.Function */
.highlight .nl { color: #A0A000 } /* Name.Label */
.highlight .nn { color: #0000FF; font-weight: bold } /* Name.Namespace */
.highlight .nt { color: #008000; font-weight: bold } /* Name.Tag */
.highlight .nv { color: #19177C } /* Name.Variable */
.highlight .ow { color: #AA22FF; font-weight: bold } /* Operator.Word */
.highlight .w { color: #bbbbbb } /* Text.Whitespace */
.highlight .mb { color: #666666 } /* Literal.Number.Bin */
.highlight .mf { color: #666666 } /* Literal.Number.Float */
.highlight .mh { color: #666666 } /* Literal.Number.Hex */
.highlight .mi { color: #666666 } /* Literal.Number.Integer */
.highlight .mo { color: #666666 } /* Literal.Number.Oct */
.highlight .sa { color: #BA2121 } /* Literal.String.Affix */
.highlight .sb { color: #BA2121 } /* Literal.String.Backtick */
.highlight .sc { color: #BA2121 } /* Literal.String.Char */
.highlight .dl { color: #BA2121 } /* Literal.String.Delimiter */
.highlight .sd { color: #BA2121; font-style: italic } /* Literal.String.Doc */
.highlight .s2 { color: #BA2121 } /* Literal.String.Double */
.highlight .se { color: #BB6622; font-weight: bold } /* Literal.String.Escape */
.highlight .sh { color: #BA2121 } /* Literal.String.Heredoc */
.highlight .si { color: #BB6688; font-weight: bold } /* Literal.String.Interpol */
.highlight .sx { color: #008000 } /* Literal.String.Other */
.highlight .sr { color: #BB6688 } /* Literal.String.Regex */
.highlight .s1 { color: #BA2121 } /* Literal.String.Single */
.highlight .ss { color: #19177C } /* Literal.String.Symbol */
.highlight .bp { color: #008000 } /* Name.Builtin.Pseudo */
.highlight .fm { color: #0000FF } /* Name.Function.Magic */
.highlight .vc { color: #19177C } /* Name.Variable.Class */
.highlight .vg { color: #19177C } /* Name.Variable.Global */
.highlight .vi { color: #19177C } /* Name.Variable.Instance */
.highlight .vm { color: #19177C } /* Name.Variable.Magic */
.highlight .il { color: #666666 } /* Literal.Number.Integer.Long */
    </style>
<style type="text/css">
    
/* Temporary definitions which will become obsolete with Notebook release 5.0 */
.ansi-black-fg { color: #3E424D; }
.ansi-black-bg { background-color: #3E424D; }
.ansi-black-intense-fg { color: #282C36; }
.ansi-black-intense-bg { background-color: #282C36; }
.ansi-red-fg { color: #E75C58; }
.ansi-red-bg { background-color: #E75C58; }
.ansi-red-intense-fg { color: #B22B31; }
.ansi-red-intense-bg { background-color: #B22B31; }
.ansi-green-fg { color: #00A250; }
.ansi-green-bg { background-color: #00A250; }
.ansi-green-intense-fg { color: #007427; }
.ansi-green-intense-bg { background-color: #007427; }
.ansi-yellow-fg { color: #DDB62B; }
.ansi-yellow-bg { background-color: #DDB62B; }
.ansi-yellow-intense-fg { color: #B27D12; }
.ansi-yellow-intense-bg { background-color: #B27D12; }
.ansi-blue-fg { color: #208FFB; }
.ansi-blue-bg { background-color: #208FFB; }
.ansi-blue-intense-fg { color: #0065CA; }
.ansi-blue-intense-bg { background-color: #0065CA; }
.ansi-magenta-fg { color: #D160C4; }
.ansi-magenta-bg { background-color: #D160C4; }
.ansi-magenta-intense-fg { color: #A03196; }
.ansi-magenta-intense-bg { background-color: #A03196; }
.ansi-cyan-fg { color: #60C6C8; }
.ansi-cyan-bg { background-color: #60C6C8; }
.ansi-cyan-intense-fg { color: #258F8F; }
.ansi-cyan-intense-bg { background-color: #258F8F; }
.ansi-white-fg { color: #C5C1B4; }
.ansi-white-bg { background-color: #C5C1B4; }
.ansi-white-intense-fg { color: #A1A6B2; }
.ansi-white-intense-bg { background-color: #A1A6B2; }

.ansi-bold { font-weight: bold; }

    </style>


<style type="text/css">
/* Overrides of notebook CSS for static HTML export */
body {
  overflow: visible;
  padding: 8px;
}

div#notebook {
  overflow: visible;
  border-top: none;
}@media print {
  div.cell {
    display: block;
    page-break-inside: avoid;
  } 
  div.output_wrapper { 
    display: block;
    page-break-inside: avoid; 
  }
  div.output { 
    display: block;
    page-break-inside: avoid; 
  }
}
</style>

<!-- Custom stylesheet, it must be in the same directory as the html file -->
<link rel="stylesheet" href="./Machine Learning with Iris Dataset_files/custom.css">

<!-- Loading mathjax macro -->
<!-- Load mathjax -->
    <script src="./Machine Learning with Iris Dataset_files/MathJax.js"></script>
    <!-- MathJax configuration -->
    <script type="text/x-mathjax-config;executed=true">
    MathJax.Hub.Config({
        tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true,
            processEnvironments: true
        },
        // Center justify equations in code and markdown cells. Elsewhere
        // we use CSS to left justify single line equations in code cells.
        displayAlign: 'center',
        "HTML-CSS": {
            styles: {'.MathJax_Display': {"margin": 0}},
            linebreaks: { automatic: true }
        }
    });
    </script>
    <!-- End of mathjax configuration --><style type="text/css">.MathJax_Hover_Frame {border-radius: .25em; -webkit-border-radius: .25em; -moz-border-radius: .25em; -khtml-border-radius: .25em; box-shadow: 0px 0px 15px #83A; -webkit-box-shadow: 0px 0px 15px #83A; -moz-box-shadow: 0px 0px 15px #83A; -khtml-box-shadow: 0px 0px 15px #83A; border: 1px solid #A6D ! important; display: inline-block; position: absolute}
.MathJax_Menu_Button .MathJax_Hover_Arrow {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; font-family: 'Courier New',Courier; font-size: 9px; color: #F0F0F0}
.MathJax_Menu_Button .MathJax_Hover_Arrow span {display: block; background-color: #AAA; border: 1px solid; border-radius: 3px; line-height: 0; padding: 4px}
.MathJax_Hover_Arrow:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_Hover_Arrow:hover span {background-color: #CCC!important}
</style><style type="text/css">#MathJax_About {position: fixed; left: 50%; width: auto; text-align: center; border: 3px outset; padding: 1em 2em; background-color: #DDDDDD; color: black; cursor: default; font-family: message-box; font-size: 120%; font-style: normal; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_About.MathJax_MousePost {outline: none}
.MathJax_Menu {position: absolute; background-color: white; color: black; width: auto; padding: 5px 0px; border: 1px solid #CCCCCC; margin: 0; cursor: default; font: menu; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_MenuItem {padding: 1px 2em; background: transparent}
.MathJax_MenuArrow {position: absolute; right: .5em; padding-top: .25em; color: #666666; font-size: .75em}
.MathJax_MenuActive .MathJax_MenuArrow {color: white}
.MathJax_MenuArrow.RTL {left: .5em; right: auto}
.MathJax_MenuCheck {position: absolute; left: .7em}
.MathJax_MenuCheck.RTL {right: .7em; left: auto}
.MathJax_MenuRadioCheck {position: absolute; left: .7em}
.MathJax_MenuRadioCheck.RTL {right: .7em; left: auto}
.MathJax_MenuLabel {padding: 1px 2em 3px 1.33em; font-style: italic}
.MathJax_MenuRule {border-top: 1px solid #DDDDDD; margin: 4px 3px}
.MathJax_MenuDisabled {color: GrayText}
.MathJax_MenuActive {background-color: #606872; color: white}
.MathJax_MenuDisabled:focus, .MathJax_MenuLabel:focus {background-color: #E8E8E8}
.MathJax_ContextMenu:focus {outline: none}
.MathJax_ContextMenu .MathJax_MenuItem:focus {outline: none}
#MathJax_AboutClose {top: .2em; right: .2em}
.MathJax_Menu .MathJax_MenuClose {top: -10px; left: -10px}
.MathJax_MenuClose {position: absolute; cursor: pointer; display: inline-block; border: 2px solid #AAA; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; font-family: 'Courier New',Courier; font-size: 24px; color: #F0F0F0}
.MathJax_MenuClose span {display: block; background-color: #AAA; border: 1.5px solid; border-radius: 18px; -webkit-border-radius: 18px; -moz-border-radius: 18px; -khtml-border-radius: 18px; line-height: 0; padding: 8px 0 6px}
.MathJax_MenuClose:hover {color: white!important; border: 2px solid #CCC!important}
.MathJax_MenuClose:hover span {background-color: #CCC!important}
.MathJax_MenuClose:hover:focus {outline: none}
</style><style type="text/css">.MathJax_Preview .MJXf-math {color: inherit!important}
</style><style type="text/css">.MJX_Assistive_MathML {position: absolute!important; top: 0; left: 0; clip: rect(1px, 1px, 1px, 1px); padding: 1px 0 0 0!important; border: 0!important; height: 1px!important; width: 1px!important; overflow: hidden!important; display: block!important; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none}
.MJX_Assistive_MathML.MJX_Assistive_MathML_Block {width: 100%!important}
</style><style type="text/css">#MathJax_Zoom {position: absolute; background-color: #F0F0F0; overflow: auto; display: block; z-index: 301; padding: .5em; border: 1px solid black; margin: 0; font-weight: normal; font-style: normal; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; -webkit-box-sizing: content-box; -moz-box-sizing: content-box; box-sizing: content-box; box-shadow: 5px 5px 15px #AAAAAA; -webkit-box-shadow: 5px 5px 15px #AAAAAA; -moz-box-shadow: 5px 5px 15px #AAAAAA; -khtml-box-shadow: 5px 5px 15px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_ZoomOverlay {position: absolute; left: 0; top: 0; z-index: 300; display: inline-block; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
#MathJax_ZoomFrame {position: relative; display: inline-block; height: 0; width: 0}
#MathJax_ZoomEventTrap {position: absolute; left: 0; top: 0; z-index: 302; display: inline-block; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
</style><style type="text/css">.MathJax_Preview {color: #888}
#MathJax_Message {position: fixed; left: 1em; bottom: 1.5em; background-color: #E6E6E6; border: 1px solid #959595; margin: 0px; padding: 2px 8px; z-index: 102; color: black; font-size: 80%; width: auto; white-space: nowrap}
#MathJax_MSIE_Frame {position: absolute; top: 0; left: 0; width: 0px; z-index: 101; border: 0px; margin: 0px; padding: 0px}
.MathJax_Error {color: #CC0000; font-style: italic}
</style><style type="text/css">.MJXp-script {font-size: .8em}
.MJXp-right {-webkit-transform-origin: right; -moz-transform-origin: right; -ms-transform-origin: right; -o-transform-origin: right; transform-origin: right}
.MJXp-bold {font-weight: bold}
.MJXp-italic {font-style: italic}
.MJXp-scr {font-family: MathJax_Script,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-frak {font-family: MathJax_Fraktur,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-sf {font-family: MathJax_SansSerif,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-cal {font-family: MathJax_Caligraphic,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-mono {font-family: MathJax_Typewriter,'Times New Roman',Times,STIXGeneral,serif}
.MJXp-largeop {font-size: 150%}
.MJXp-largeop.MJXp-int {vertical-align: -.2em}
.MJXp-math {display: inline-block; line-height: 1.2; text-indent: 0; font-family: 'Times New Roman',Times,STIXGeneral,serif; white-space: nowrap; border-collapse: collapse}
.MJXp-display {display: block; text-align: center; margin: 1em 0}
.MJXp-math span {display: inline-block}
.MJXp-box {display: block!important; text-align: center}
.MJXp-box:after {content: " "}
.MJXp-rule {display: block!important; margin-top: .1em}
.MJXp-char {display: block!important}
.MJXp-mo {margin: 0 .15em}
.MJXp-mfrac {margin: 0 .125em; vertical-align: .25em}
.MJXp-denom {display: inline-table!important; width: 100%}
.MJXp-denom > * {display: table-row!important}
.MJXp-surd {vertical-align: top}
.MJXp-surd > * {display: block!important}
.MJXp-script-box > *  {display: table!important; height: 50%}
.MJXp-script-box > * > * {display: table-cell!important; vertical-align: top}
.MJXp-script-box > *:last-child > * {vertical-align: bottom}
.MJXp-script-box > * > * > * {display: block!important}
.MJXp-mphantom {visibility: hidden}
.MJXp-munderover {display: inline-table!important}
.MJXp-over {display: inline-block!important; text-align: center}
.MJXp-over > * {display: block!important}
.MJXp-munderover > * {display: table-row!important}
.MJXp-mtable {vertical-align: .25em; margin: 0 .125em}
.MJXp-mtable > * {display: inline-table!important; vertical-align: middle}
.MJXp-mtr {display: table-row!important}
.MJXp-mtd {display: table-cell!important; text-align: center; padding: .5em 0 0 .5em}
.MJXp-mtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-mlabeledtr {display: table-row!important}
.MJXp-mlabeledtr > .MJXp-mtd:first-child {padding-left: 0}
.MJXp-mlabeledtr:first-child > .MJXp-mtd {padding-top: 0}
.MJXp-merror {background-color: #FFFF88; color: #CC0000; border: 1px solid #CC0000; padding: 1px 3px; font-style: normal; font-size: 90%}
.MJXp-scale0 {-webkit-transform: scaleX(.0); -moz-transform: scaleX(.0); -ms-transform: scaleX(.0); -o-transform: scaleX(.0); transform: scaleX(.0)}
.MJXp-scale1 {-webkit-transform: scaleX(.1); -moz-transform: scaleX(.1); -ms-transform: scaleX(.1); -o-transform: scaleX(.1); transform: scaleX(.1)}
.MJXp-scale2 {-webkit-transform: scaleX(.2); -moz-transform: scaleX(.2); -ms-transform: scaleX(.2); -o-transform: scaleX(.2); transform: scaleX(.2)}
.MJXp-scale3 {-webkit-transform: scaleX(.3); -moz-transform: scaleX(.3); -ms-transform: scaleX(.3); -o-transform: scaleX(.3); transform: scaleX(.3)}
.MJXp-scale4 {-webkit-transform: scaleX(.4); -moz-transform: scaleX(.4); -ms-transform: scaleX(.4); -o-transform: scaleX(.4); transform: scaleX(.4)}
.MJXp-scale5 {-webkit-transform: scaleX(.5); -moz-transform: scaleX(.5); -ms-transform: scaleX(.5); -o-transform: scaleX(.5); transform: scaleX(.5)}
.MJXp-scale6 {-webkit-transform: scaleX(.6); -moz-transform: scaleX(.6); -ms-transform: scaleX(.6); -o-transform: scaleX(.6); transform: scaleX(.6)}
.MJXp-scale7 {-webkit-transform: scaleX(.7); -moz-transform: scaleX(.7); -ms-transform: scaleX(.7); -o-transform: scaleX(.7); transform: scaleX(.7)}
.MJXp-scale8 {-webkit-transform: scaleX(.8); -moz-transform: scaleX(.8); -ms-transform: scaleX(.8); -o-transform: scaleX(.8); transform: scaleX(.8)}
.MJXp-scale9 {-webkit-transform: scaleX(.9); -moz-transform: scaleX(.9); -ms-transform: scaleX(.9); -o-transform: scaleX(.9); transform: scaleX(.9)}
.MathJax_PHTML .noError {vertical-align: ; font-size: 90%; text-align: left; color: black; padding: 1px 3px; border: 1px solid}
</style></head>
<body style=""><div id="MathJax_Message" style="display: none;"></div>
  <div tabindex="-1" id="notebook" class="border-box-sizing">
    <div class="container" id="notebook-container">

<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[1]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[2]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#import the dataset</span>
<span class="n">iris</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="s2">"Iris.csv"</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[3]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#Let's have a look at the dataset</span>
<span class="n">iris</span><span class="o">.</span><span class="n">head</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[3]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped="">
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Id</th>
      <th>SepalLengthCm</th>
      <th>SepalWidthCm</th>
      <th>PetalLengthCm</th>
      <th>PetalWidthCm</th>
      <th>Species</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>1</td>
      <td>5.1</td>
      <td>3.5</td>
      <td>1.4</td>
      <td>0.2</td>
      <td>Iris-setosa</td>
    </tr>
    <tr>
      <th>1</th>
      <td>2</td>
      <td>4.9</td>
      <td>3.0</td>
      <td>1.4</td>
      <td>0.2</td>
      <td>Iris-setosa</td>
    </tr>
    <tr>
      <th>2</th>
      <td>3</td>
      <td>4.7</td>
      <td>3.2</td>
      <td>1.3</td>
      <td>0.2</td>
      <td>Iris-setosa</td>
    </tr>
    <tr>
      <th>3</th>
      <td>4</td>
      <td>4.6</td>
      <td>3.1</td>
      <td>1.5</td>
      <td>0.2</td>
      <td>Iris-setosa</td>
    </tr>
    <tr>
      <th>4</th>
      <td>5</td>
      <td>5.0</td>
      <td>3.6</td>
      <td>1.4</td>
      <td>0.2</td>
      <td>Iris-setosa</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>So we have Species of Iris Flower and their Sepal Length, Sepal Width, Petal Length, Petal Width is given as the features.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[4]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">iris</span><span class="o">.</span><span class="n">columns</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Index(['Id', 'SepalLengthCm', 'SepalWidthCm', 'PetalLengthCm', 'PetalWidthCm',
       'Species'],
      dtype='object')
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[5]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Q : How many data point and features?</span>
<span class="nb">print</span><span class="p">(</span><span class="n">iris</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>(150, 6)
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[6]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#Let's remove the id column.</span>
<span class="n">iris</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'Id'</span><span class="p">,</span> <span class="n">axis</span><span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">inplace</span><span class="o">=</span> <span class="kc">True</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#(Q) How many data points for each class are present?</span>
<span class="nb">print</span><span class="p">(</span><span class="n">iris</span><span class="p">[</span><span class="s1">'Species'</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">())</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Iris-virginica     50
Iris-versicolor    50
Iris-setosa        50
Name: Species, dtype: int64
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="2-D-Scatter-Plot">2-D Scatter Plot<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#2-D-Scatter-Plot">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[8]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="o">%</span><span class="k">matplotlib</span> inline
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[9]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Scatter plot with sepal features as the axis.</span>
<span class="n">iris</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">kind</span> <span class="o">=</span> <span class="s1">'scatter'</span><span class="p">,</span> <span class="n">x</span><span class="o">=</span> <span class="s1">'SepalLengthCm'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'SepalWidthCm'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYUAAAEKCAYAAAD9xUlFAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADl0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uIDMuMC4yLCBodHRwOi8vbWF0cGxvdGxpYi5vcmcvOIA7rQAAIABJREFUeJzt3X+0HWV97/H3B4jhR4JxhdxISdKgQVpUjHCkhAhV8HL9wQ3LYgtdRYqFcquoKPVq1S6UeG2Lt1cttWrx1wX1KhqQC16xoIgIGuwJBpAfyqkgiUI8RAKJQiTme//Yc3ZOdvY5e3b2zOxn9v681tor58zMnv2d50zOc2bm+30eRQRmZmYAe/Q7ADMzS4c7BTMza3KnYGZmTe4UzMysyZ2CmZk1uVMwM7MmdwpmZtbkTsHMzJpK7xQk7SnpB5K+2mbdmZLGJa3NXmeXHY+ZmU1trwo+4zzgHmD/KdZfHhFvzLuzAw44IBYvXlxEXGZmQ2PNmjWPRMS8TtuV2ilIWgC8Cng/cH4R+1y8eDGjo6NF7MrMbGhI+mme7cq+ffRh4O3A9mm2OUXSHZJWSVpYcjxmZjaN0joFSScBv4iINdNsdg2wOCIOB74BXDrFvs6RNCppdHx8vIRozcwMyr1SWA6skPQA8EXgeEmfm7xBRGyMiK3Zt58Ajmy3o4i4JCJGImJk3ryOt8TMzGw3ldYpRMQ7I2JBRCwGTgNuiIjTJ28j6cBJ366g8UDazMz6pIrso51IWgmMRsTVwJslrQC2Ab8Ezqw6HjMz20F1m2RnZGQknH1kZtYdSWsiYqTTdq5ottrbuGUrt6/bxMYtWztvbGbTqvz2kVmR/u/an/GOK+5gxh578NT27XzglMNZsfSgfodlVlu+UrDa2rhlK++44g6efGo7m7du48mntvP2K+7wFYNZD9wpWG2tf/QJZuyx8yk8Y489WP/oE32KyKz+3ClYbS14xj48tX3nYvmntm9nwTP26VNEZvXnTsFqa+6smXzglMPZe8YezJ65F3vP2IMPnHI4c2fN7HdoZrXlB81WayuWHsTyJQew/tEnWPCMfdwhmPXInYLV3txZM90ZmBXEt4/MzKzJnYKZmTW5UzAzsyZ3CmZm1uROwczMmtwpmJlZkzsFMzNrcqdgZmZN7hSsrzwXgllaXNFsfeO5EMzS4ysF6wvPhWCWJncK1heeC8EsTe4UrC88F4JZmtwpWF94LgSzNPlBs/WN50IwS487Besrz4VglhbfPjIzsyZ3CjYlF5aZDR/fPrK2XFhmNpx8pWC7cGGZ2fByp2C7cGGZ2fByp2C7cGGZ2fByp2C7cGGZ2fDyg2Zry4VlZsOp9E5B0p7AKPCziDipZd1M4DLgSGAjcGpEPFB2TJaPC8vMhk8Vt4/OA+6ZYt1ZwKMRsQT4EHBRBfHYkHG9hVl+pV4pSFoAvAp4P3B+m01OBt6bfb0K+IgkRUSUGZcND9dbmHWn7CuFDwNvB7ZPsf4gYB1ARGwDHgPmlhyTDQnXW5h1r7ROQdJJwC8iYs10m7VZtstVgqRzJI1KGh0fHy8sRhtsrrcw616ZVwrLgRWSHgC+CBwv6XMt26wHFgJI2gt4OvDL1h1FxCURMRIRI/PmzSsxZBskrrcw615pnUJEvDMiFkTEYuA04IaIOL1ls6uBP8++fk22jZ8nWCFcb2HWvcrrFCStBEYj4mrgU8BnJY3RuEI4rep4bLC53sKsO6rbH+YjIyMxOjra7zDMzGpF0pqIGOm0nYe5sFKNbdjMqtF1jG3Y3O9QzCwHD3Nhpbngqju5bPWDze/PWLaIlSc/v48RmVknvlKwUoxt2LxThwBw2fce9BWDWeLcKVgp1q7b1NVyM0uDOwUrxdKFc7pabmZpcKdgpVgyfzZnLFu007Izli1iyfzZfYrIzPLwg2YrzcqTn88ZRy9m7bpNLF04xx2CWQ24U7BSLZk/252BWY349tGQGr1/Ix+87keM3r+x36H0zPMlWMqKOD+rPMd9pTCETv/kam4ea3QGF98wxrFL5vLZs4/uc1S7x/MlWMqKOD+rPsd9pTBkRu/f2OwQJnxnbGMtrxg8X4KlrIjzsx/nuDuFIXPTfY90tTxlni/BUlbE+dmPc9ydwpA57pADulqeMs+XYCkr4vzsxznuTmHIjBw8l2OX7Dzj6bFL5jJycP1mQfV8CZayIs7PfpzjHjp7SI3ev5Gb7nuE4w45oJYdwmQbt2z1fAmWrCLOzyL2kXfobHcKZmZDwPMp2LSqyp12DYFZvbhOYQhVlTvtGgKz+vGVwpCpKnfaNQRm9eROYchUlTvtGgKzenKnMGSqyp12DYFZPblTGDJV5U67hsCsnpySOqSqyp12DYFZGvKmpDr7aEjNnTWz51/SefZRxOeYWXV8+6hgqeTlpxKHWVl8jpfDVwoFSiUvP5U4zMric7w8ua4UJB0s6YOSrpR09cSr7ODqJJW8/FTiMCuLz/Fy5b1SuAr4FHANsL3DtkNpIi//yUnNM5GXX+U99VTiMCuLz/Fy5e0UnoyIi0uNpOZSyctPJQ6zsvgcL1feB83/JOk9kpZJOmLiVWpkNZNKXn4qcZiVxed4uXLVKUj6e+C1wH+w4/ZRRMTxJcbWVup1Cqnk5acSh1lZfI53p+g6hVcDz4qI3/QW1uBLJS8/lTjMyuJzvBx5bx/dDszpZseS9pb0fUm3S7pL0oVttjlT0riktdnr7G4+w8zMipX3SmE+cK+kfweaeV8RsWKa92wFjo+ILZJmADdLujYiVrdsd3lEvLGrqK2jsQ2bWbtuE0sXzmHJ/Nldr4dqLs99C8AsLXk7hfd0u+NoPKzYkn07I3vVa6Clmrrgqju5bPWDze/PWLaIlSc/P/d6qKY4yAVIZumZ9vaRpCWSlkfEtye/aPxyX99p55L2lLQW+AVwfUTc2mazUyTdIWmVpIW7dRTWNLZh806/8AEu+96DjG3YnGs9VFMc5AIkszR1eqbwYWBzm+W/ztZNKyJ+GxFLgQXAUZKe17LJNcDiiDgc+AZwabv9SDpH0qik0fHx8U4fO9TWrts07fJO66GaCXI8CY9Zmjp1Cosj4o7WhRExCizO+yERsQm4EXh5y/KNETHxp+EngCOneP8lETESESPz5s3L+7FDaenC9vkAE8s7rYdqioNcgGSWpk6dwt7TrJv2f6+keZLmZF/vA7wMuLdlmwMnfbsCuKdDPNbBkvmzOWPZop2WnbFsUfNhcqf1UE1xkAuQzNI0bfGapC8AN0TEJ1qWnwWcGBGnTvPew2ncDtqTRufzpYhYKWklMBoRV2dFcSuAbcAvgddHxL1T7RPSL15LhbOPzGyyvMVrnTqF+cBXgN8Aa7LFI8DTgFdHxMMFxNoVdwpmZt3L2ylMe/soIjZExDHAhcAD2evCiFjWjw6hDoqY+GNsw2ZWja7bKSOo6H3kiTOVY0lBEW3RaR+eNMZSkKtOISK+JekmGkVse0lalC1/cPp3Dpci8u7z1BD0uo88caZyLCkooi067cM1G5aKvJPsvAnYAFwP/L/s9dUS46qdIvLu89QQ9LqPPHGmciwpKKItOu3DNRuWkrxjH50HHBoRz42I52evw8sMrG6KyLvPU0PQ6z7yxJnKsaSgiLbotA/XbFhK8nYK64DHygyk7orIu89TQ9DrPvLEmcqxpKCItui0D9dsWEo6DXNxvqTzgZ8AN0p658SybLllisi7z1ND0Os+8sSZyrGkoIi26LQP12xYSjqlpE43EF5ExMriQ5pe6impReTd56kh6HUfeeJM5VhSUERbdNqHazasTIXUKUza2R9HxJc7LatC6p2CmVmKCqlTmOSdOZdZIpwTXz+p1HSkEof1x7R1CpJeAbwSOEjSxZNW7U9jaApLkHPi6yeVmo5U4rD+6XSl8HMaw1s8mf078boa+C/lhma7wznx9ZNKTUcqcVh/TXulEBG3A7dL+nxEPFVRTNaDiZz3J9mR4jiR8z531syO661609V0VPlwPpU4rL863T66k2wKTUm7rHcBW3qcE18/qdR0pBKH9Ven20cnAf8V+Hr2+rPs9TVgVbmh2e5wTnz9pFLTkUoc1l95U1JviYjlnZZVwSmp+Tgnvn5SqelIJQ4rVt6U1FyjpAL7SXpxRNyc7fwYYL9eArRyzZ01c9pf9p3WW/WWzJ+dxC/hVOKw/shbp3AW8C+SHpD0APBR4C9Ki6pPqhgzH6rJA3cdQnfq0l5FzJNRhF7rYKr6v2bdyzufwhrgBZL2p3HLaeAGx6tizHyoJg/cdQjdqUt7FTFPRhF6rYOp6v+a7Z5OA+Kdnv07MQDe2cBZgzYgXhVj5kM1eeCuQ+hOXdqriHkyitBrHUxV/9ds93W6fTTx3GD2FK+BUMWY+VDNHAMem787dWmvIubJKEKvc0NU9X/Ndl+n20dfAoiICyuIpW+qGDMfqskDdx1Cd+rSXkXMk1GEXutgqvq/Zruv05XCjyTdJekTks6U9JxKoqpYFWPmQzV54K5D6E5d2quIeTKK0GsdTFX/12z3daxTyDqCYya95gGrgVsi4gOlR9iizDqFKsbMh2rywF2H0J26tFcR82QUodc6mKr+r9kOhc6nMGmnz6Yxaup5wEERUfn1movXzMy6V0jxWlakdgywDFhIY1rO1cDpwG0FxDlwqvoLaPT+jdx03yMcd8gBjBw8t5eQrUaq+Ou4iHPL52d9dZqOczuNX/4fBK6KiF9XFdhUUr5SqCr/+vRPrubmsY3N749dMpfPnn10Icdg6aoiN7+Ic8vnZ5qKmnntd4C/A44Avi7pu5I+IunPJD2riEAHRVX516P3b9zpPxzAd8Y2Mnr/xtbd2QCpIje/iHPL52f9TdspRMTDEXFlRLwtIo4DXgbcC1wI3FdFgHVRVf71Tfc90va9Uy23wVBFbn4R55bPz/rrVNH8dEkvl7RS0jeAdcBrgWuAU6sIsC6qyr8+7pAD2r53quU2GKrIzS/i3PL5WX+dbh+NAecCTwDvAxZExB9ExFsjwvMpTFJV/vXIwXM5dsnOD+6OXTLXD/MGXBW5+UWcWz4/66+rlNQUpPygGZx9ZOVy9pHtrkLqFCRdQzYdZzsRsWL3wtt9qXcKZmYpKmqSnX/sIYC9gZuAmdnnrIqI97RsMxO4DDgS2AicGhEP7O5ndlKX2cjyVDzX5Vh6jaOItijic1KpVO8kz1/onY6lqjbvZFDO8VTizGvaTiEivt3DvrcCx0fEFkkzgJslXRsRqydtcxbwaEQskXQacBElPcCuYoz3IuSZb6Eux9JrHEW0RRGfk8o8GZ1Mrg+4+IaxtvUBnY6lqjbvZFDO8VTi7EaumdckHSJplaS7Jf1k4jXde6JhS/btjOzVeivqZODS7OtVwAmS1EX8uVQxxnsR8sy3UJdj6TWOItqiiM9JZZ6MTvLUB3Q6lqravJNBOcdTibNbeafj/AzwMWAb8FIat3w+2+lNkvaUtBb4BXB9RNzasslBNNJciYhtwGPALte8ks6RNCppdHx8PGfIO1QxxnsR8sy3UJdj6TWOItqiiM9JZZ6MTvLUB3Q6lqravJNBOcdTibNbeTuFfSLimzQeTP80It4LHN/pTRHx24hYCiwAjpL0vJZN2l0V7PJgOyIuiYiRiBiZN29ezpB3qGKM9yLkmW+hLsfSaxxFtEURn5PKPBmd5KkP6HQsVbV5J4NyjqcSZ7fydgpPStoDuE/SGyW9GvhPeT8kIjYBNwIvb1m1nsZAe0jaC3g68Mu8+82rijHei5BnvoW6HEuvcRTRFkV8TirzZHSSpz6g07FU1eadDMo5nkqc3cpVpyDpRcA9wBwaRWxPBz7Q8tC49T3zgKciYpOkfYDrgIsi4quTtjkXeH5E/FX2oPmPIuJPpoull5TUumQJOPtoB2cfdcfZR9WrS5xlzaewP41nyB2foEk6nMZD5D1pXJF8KSJWSloJjEbE1Vna6meBF9K4QjgtIqZ9gO06BTOz7hVVpzCxsxEaD5tnZ98/BvxFRKyZ6j0RcQeNX/atyy+Y9PWTwB/nicHMzMqX95nCp4E3RMTiiFhMYzykz5QWVZ9s3LKV29dtSj5lbJjk+ZlU8XMrIo5e1+fdppNhOs+H6ViLkutKAdgcEd+Z+CYibpZUXRJ2BepYZDLo8vxMUiikyrNNEUVOVU3iNCiG6ViLlPdB84eAfYEv0EgZPRV4FLgCICIqm5qzjGcKG7dsZflFN/DkUzvSx/aesQe3vOP45DMFBlWen0kVP7ci4uh1fVHHOkzn+TAda15Fzbw2YSnwHOA9wHuB36cxd/P/oofxkVJR1yKTQZbnZ5JCIVWebYoocqpqEqdBMUzHWrRct48i4qVlB9JPdS0yGWR5fiYpFFLl2aaIIqeqJnEaFMN0rEXLO/bRfEmfknRt9v1hks4qN7Tq1LXIZJDl+ZmkUEiVZ5siipyqmsRpUAzTsRYt7zOFa2lkG707Il6QVR//ICKqHQaScusUUikysR3y/ExSKKTKs00RRU5VTeI0KIbpWDsptHhN0r9HxIsk/SAiXpgtW5uNa1QpF6+ZmXWv6AfNv5I0l2ywOklH0xjR1KxUefLMxzZsZtXouimHqq4qV73XOOp0rIOS/59KjUtK8tYpnA9cDTxb0i3APOA1pUVlRjGT21SVq95rHHU61kHJ/0+lxiU1014pSHqRpGdmdQh/CLyLxoxq19EY4dSsFEVMblPVJCe9xlGnY63rxDGtUpgsKFWdbh/9K/Cb7OtjgHcD/0KjcO2SEuOyIVfE5DZV5ar3GkedjnVQ8v9TqXFJUafbR3tGxMT8BqcCl0TEFcAV2YxqZqUoYnKbqnLVe42jTsc6KPn/qdS4pKjTlcKeWfopwAnADZPW5X0eYda1Iia3qSpXvdc46nSsg5L/n0qNS4qmTUmV9G7glcAjwCLgiIgISUuASyNieTVh7uCU1OFSxOQ2VeWq9xpHnY51UPL/U6lxqUJhdQpZ+umBwHUR8ats2XOAWVUOhDfBnYKZWfcKm2Sn3ZSbEfHj3Q3M6iOFv3CKiOGbdz/MdXdv4MTD5nPCYc/sWxxFfEYKPxMbbH4uYG2lkF9dRAwnfuhGfrzhVwBcPrqeQ+fvx7+99SWVx1HEZ6TwM7HBl7ei2YZICvnVRcTwzbsfbnYIE3604Vd88+6HK42jiM9I4Wdiw8Gdgu0ihfzqImK47u4NXS0vK44iPiOFn4kNB3cKtosU8quLiOHEw+Z3tbysOIr4jBR+JjYc3CnYLlLIry4ihhMOeyaHzt9vp2WHzt+vq4fNqeSzp/AzseGQa+jslDgltTopZLo4+6j6OGwwFTqfQkrcKZiZda/o+RTMSlHEWPNFzFNQhLqNm2/VqNt54ToF65si8u6LmKegCK4hsHbqeF74SsH6ooi8+yLmKUjlWGzw1PW8cKdgfVFE3n0R8xQUwTUE1k5dzwt3CtYXReTdFzFPQRFcQ2Dt1PW8cKdgfVFE3n0R8xSkciw2eOp6Xjgl1fqqiLz7IuYpKIJrCKydVM6LwobONivT3Fkze/6P0mkfRXxGEXHYcKrbeVHa7SNJCyV9S9I9ku6SdF6bbV4i6TFJa7PXBWXFM2h6zX1OJXe6iBqDVI6lV2MbNrNqdB1jGzb3NY5BaU/bPWVeKWwD/joibpM0G1gj6fqIuLtlu+9ExEklxjFwes19TiV3uogag1SOpVcXXHUnl61+sPn9GcsWsfLk51cex6C0p+2+0q4UIuKhiek6I2IzcA/gs6tHveY+p5I7XUSNQSrH0quxDZt36hAALvveg5VfMQxKe1pvKsk+krQYeCFwa5vVyyTdLulaSc+d4v3nSBqVNDo+Pl5ipOnrNfc5ldzpImoMUjmWXq1dt6mr5WUZlPa03pTeKUiaBVwBvCUiHm9ZfRvwuxHxAuCfgava7SMiLomIkYgYmTdvXrkBJ67X3OdUcqeLqDFI5Vh6tXThnK6Wl2VQ2tN6U2qnIGkGjQ7h8xFxZev6iHg8IrZkX38NmCHpgDJjqrtec59TyZ0uosYglWPp1ZL5szlj2aKdlp2xbBFL5s+uNI5BaU/rTWl1CpIEXAr8MiLeMsU2zwQ2RERIOgpYRePKYcqgXKfQ0Gvucyq500XUGKRyLL0a27CZtes2sXThnMo7hMkGpT1tZ32fT0HSi4HvAHcCE9ek7wIWAUTExyW9EXg9jUylJ4DzI+K70+3XnYKZWff6XrwWETcD6rDNR4CPlBXDIBuUv+ZS+evYzBpc0VxDg5JLnkpuvpnt4AHxamZQcslTyc03s525U6iZQcklTyU338x25k6hZgYllzyV3Hwz25k7hZoZlFzyVHLzzWxnnk+hppx9ZGbd6HtKqpWrbmO0T2XJ/NnuDMwS4ttHZmbW5E6hS3WZgMRx1o/bwlLg20ddqEvRmOOsH7eFpcJXCjnVpWjMcdaP28JS4k4hp7oUjTnO+nFbWErcKeRUl6Ixx1k/bgtLiTuFnOpSNOY468dtYSlx8VqX6lI05jjrx21hZXLxWknqUjTmOOvHbWEp8O0jsxzGNmxm1ei6nob2dh2C1YGvFMw6KGIyINchWF34SsFsGkVMBuQ6BKsTdwpm0yhiMiDXIViduFMwm0YRkwG5DsHqxJ2C2TSKmAzIdQhWJ65TMMuhiMmAXIdg/eQ6BbMCFTEZkOsQrA58+8jMzJrcKZiZWZM7BTMza3KnYGZmTe4UzMysyZ2CmZk1uVMwM7Om0joFSQslfUvSPZLuknRem20k6WJJY5LukHREWfGYmVlnZV4pbAP+OiJ+HzgaOFfSYS3bvAI4JHudA3ysxHiGisfuN7PdUVpFc0Q8BDyUfb1Z0j3AQcDdkzY7GbgsGmNtrJY0R9KB2XttN3nsfjPbXZU8U5C0GHghcGvLqoOAdZO+X58ts93ksfvNrBeldwqSZgFXAG+JiMdbV7d5yy4j9Ek6R9KopNHx8fEywhwYHrvfzHpRaqcgaQaNDuHzEXFlm03WAwsnfb8A+HnrRhFxSUSMRMTIvHnzygl2QHjsfjPrRZnZRwI+BdwTER+cYrOrgTOyLKSjgcf8PKE3HrvfzHpR5tDZy4HXAndKWpstexewCCAiPg58DXglMAb8GnhdifEMjRVLD2L5kgM8dr+Zda3M7KObaf/MYPI2AZxbVgzDzGP3m9nucEWzmZk1uVMwM7MmdwpmZtbkTsHMzJrcKZiZWZM7BTMza1IjK7Q+JI0DP+1zGAcAj/Q5hjwcZ7EcZ7HqEifUJ9bp4vzdiOg4JETtOoUUSBqNiJF+x9GJ4yyW4yxWXeKE+sRaRJy+fWRmZk3uFMzMrMmdwu65pN8B5OQ4i+U4i1WXOKE+sfYcp58pmJlZk68UzMysyZ3CNCTtKekHkr7aZt2ZksYlrc1eZ/cjxiyWByTdmcUx2ma9JF0saUzSHZKOSDTOl0h6bFKbXtCnOOdIWiXpXkn3SFrWsj6V9uwUZ9/bU9Khkz5/raTHJb2lZZu+t2fOOPvenlkcb5V0l6QfSvqCpL1b1s+UdHnWnrdm0yHnVuZ8CoPgPOAeYP8p1l8eEW+sMJ7pvDQipspPfgVwSPb6A+Bj2b/9MF2cAN+JiJMqi6a9fwK+HhGvkfQ0YN+W9am0Z6c4oc/tGRE/ApZC448s4GfAV1o263t75owT+tyekg4C3gwcFhFPSPoScBrwvydtdhbwaEQskXQacBFwat7P8JXCFCQtAF4FfLLfsRTgZOCyaFgNzJF0YL+DSpGk/YHjaMwaSET8JiI2tWzW9/bMGWdqTgD+IyJai0/73p4tpoozFXsB+0jai8YfAq1TGJ8MXJp9vQo4IZsJMxd3ClP7MPB2YPs025ySXe6ukrRwmu3KFsB1ktZIOqfN+oOAdZO+X58tq1qnOAGWSbpd0rWSnltlcJlnAePAZ7Jbh5+UtF/LNim0Z544of/tOdlpwBfaLE+hPSebKk7oc3tGxM+AfwQeBB6iMYXxdS2bNdszIrYBjwFz836GO4U2JJ0E/CIi1kyz2TXA4og4HPgGO3rmflgeEUfQuAw/V9JxLevb/ZXQj7SzTnHeRqMU/wXAPwNXVR0gjb/CjgA+FhEvBH4F/E3LNim0Z544U2hPALLbWyuAL7db3WZZX9IiO8TZ9/aU9AwaVwIHA78D7Cfp9NbN2rw1d3u6U2hvObBC0gPAF4HjJX1u8gYRsTEitmbffgI4stoQd4rl59m/v6BxH/Solk3WA5OvZBaw6yVn6TrFGRGPR8SW7OuvATMkHVBxmOuB9RFxa/b9Khq/fFu36Xd7dowzkfac8ArgtojY0GZdCu05Yco4E2nPlwH3R8R4RDwFXAkc07JNsz2zW0xPB36Z9wPcKbQREe+MiAURsZjGpeQNEbFTb9xyz3MFjQfSlZO0n6TZE18DJwI/bNnsauCMLMvjaBqXnA+lFqekZ07c+5R0FI3zc2OVcUbEw8A6SYdmi04A7m7ZrO/tmSfOFNpzkj9l6lsyfW/PSaaMM5H2fBA4WtK+WSwnsOvvnquBP8++fg2N31+5rxScfdQFSSuB0Yi4GnizpBXANhq98Jl9Cms+8JXsXN0L+D8R8XVJfwUQER8Hvga8EhgDfg28LtE4XwO8XtI24AngtG5O5gK9Cfh8divhJ8DrEmzPPHEm0Z6S9gX+M/DfJi1Lrj1zxNn39oyIWyWtonEraxvwA+CSlt9NnwI+K2mMxu+m07r5DFc0m5lZk28fmZlZkzsFMzNrcqdgZmZN7hTMzKzJnYKZmTW5U7BakvTubKTIO7IRKwsbQE2N0TC/mn19pqSPFLXvNp81R9Ib2n12m21nSPoHSfepMULm9yW9oqzYbDi5TsFqR40hok8CjoiIrVlV6dP6HNbumgO8Afhojm3fBxwIPC877vnAH5YZnA0fXylYHR0IPDIxzEhEPBIRP5d0pKRvZwPu/dtE1bmkGyV9WNJ3s7+wj8qWH5Ut+0H276HTfOZOJJ0o6XuSbpP0ZUmzsuUPSLowW36npN/Lls+TdH22/F8l/TTrzP4BeHZ2tfM/s93P0o55Ej6fVfruC/wl8KZJx70hIr6U7X+LpIuyY/9Gdmw3SvpJVmRplos7Bauj64CFkn4s6aOS/lDSDBqDlL0mIo4EPg3ffn86AAACcklEQVS8f9J79ouIY2j8Vf7pbNm9wHHZgHIXAH+X58OzX+Z/C7wsG+BvFDh/0iaPZMs/BrwtW/YeGsMNHEFj3KdF2fK/oTFM89KI+O/ZshcCbwEOozEa6nJgCfBgRDw+RVj7ATdmx74Z+B80qnNfDazMc1xm4NtHVkMRsUXSkcCxwEuBy2n8EnwecH02lMaeNIYWnvCF7L03Sdpf0hxgNnCppENojCI5I2cIR9P4hX1L9llPA743af2V2b9rgD/Kvn4xjV/QZMN7PDrN/r8fEesBJK0FFgN3dIjpN8DXs6/vBLZGxFOS7szeb5aLOwWrpYj4LXAjcGP2i+9c4K6IWDbVW9p8/z7gWxHxajWmLLwx58cLuD4i/nSK9ROj5/6WHf/Hck9yMun9k/cxBiySNDsiNrd5z1OTxuHZPrGPiNiuxkiZZrn49pHVjhrz6R4yadFSGiNFzsseQk9k6kyeBOXUbPmLaYzC+RiNIYV/lq0/s4sQVgPLJS3J9rmvpOd0eM/NwJ9k258IPCNbvpnGFcu0IuLXNAY6uzgbAA9JB2rXsfTNeuJOwepoFo3bPndLuoPGrZwLaIxieZGk24G17DzO/KOSvgt8nMYctgAfAP5e0i00bjdN5UxJ6ydewEwancgXss9fDfxeh5gvBE6UdBuNMfsfAjZHxEYat6F+OOlB81T+lsZsa3dL+iGNSV7GO7zHrCseJdUGnqQbgbdFxGgfY5gJ/DYitmVXMx+LiKX9isdsKr7XaFaNRcCXJO1B46HwX/Y5HrO2fKVgZmZNfqZgZmZN7hTMzKzJnYKZmTW5UzAzsyZ3CmZm1uROwczMmv4/mPq6aU5rqy0AAAAASUVORK5CYII=">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The plot does not makes much sense. Let's try plotting it using seaborn.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[10]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">set_style</span><span class="p">(</span><span class="s1">'whitegrid'</span><span class="p">);</span>
<span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">5</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">plt</span><span class="o">.</span><span class="n">scatter</span><span class="p">,</span> <span class="s1">'SepalLengthCm'</span><span class="p">,</span> <span class="s1">'SepalWidthCm'</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stderr output_text">
<pre>/home/aman/anaconda3/envs/UDA/lib/python3.6/site-packages/seaborn/axisgrid.py:230: UserWarning: The `size` paramter has been renamed to `height`; please update your code.
  warnings.warn(msg, UserWarning)
</pre>
</div>
</div>

<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[11]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#On the basis of Sepal Length and Width, we can easily separate "Setosa" from "Versicolor" and "Virginica".</span>
<span class="c1">#The red and green points are more intermixed. Let's try and see if we can finng some way to separate them</span>
<span class="c1">#using other plots.</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Pair-Plot">Pair Plot<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Pair-Plot">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[12]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">warnings</span>
<span class="n">warnings</span><span class="o">.</span><span class="n">filterwarnings</span><span class="p">(</span><span class="s1">'ignore'</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[13]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#As the number of features is very less, we can easily use pair plots to get some extra insights.</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[14]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">close</span><span class="p">();</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set_style</span><span class="p">(</span><span class="s2">"whitegrid"</span><span class="p">);</span>
<span class="n">sns</span><span class="o">.</span><span class="n">pairplot</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">3</span><span class="p">);</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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U9dNZkxGXNAmwVu3buWtt94iOzu7y/K3336badOmMX/+fJxOJ83Nzd3Wfemll7juuuu45JJLsNlsaJrG3r17WbNmDS+++CImk4lFixbx1ltv8atf/YoXXniBVatWAbBt2zZWrlzJK6+8gq7rzJ07l1NPPZXi4mLS09P529/+BkB9fT0A1157LbfddhsA//3f/80nn3zCjBkzgrIPvJFHoIUQQgghhBCiDxxttHVMfgEOVTdz83PfcLTRFrRtTJgwodvkt335ypUrWbZsGbt37yY2NrZbmUmTJvHkk0/yt7/9jdLSUqKjo1m/fj3btm3jiiuuYM6cOaxfv57i4uJu627cuJFzzz2XmJgYrFYrM2fO5JtvviE/P59169bx0EMP8c033xAXFwe47lZfeeWVzJ49m6+++oo9e/YEbR94I3eAhRBCCCGEEKIP2BzOjslvu0PVzdgczqBtIyYmxu3yU045hRUrVvDpp59y1113cdNNN2G1Wlm+fDkAixcvZvbs2UycOJG1a9dy0003sXjxYnRd57LLLuPOO+/0ul1d190uHzlyJCtXruTTTz/l4YcfZurUqdx888387ne/47XXXmPIkCEsW7aM1tbWwD64j+QOsBBCCCGEEEL0AbPRwLAkS5dlw5IsmI2GkG+7pKSElJQU5s6dy+WXX8727duZOXMmq1atYtWqVUyYMIHi4mKys7O57rrrmDFjBrt27WLKlCm89957HD16FICamhpKSkoAMBqN2O12wDXB/vDDD2lubqapqYkPP/yQyZMnU1ZWhsViYc6cOdx0003s2LGjY7KblJREY2Mj7733Xsg/fzu5AyyEEEIIIYQQfSDFauap6yZ3ewc4xWoO+ba//vprnn76aYxGIzExMfzxj3/sVmb16tW8+eabGI1GUlNTufXWW0lMTOT222/nxhtvRNM0TCYT9913H0OHDmXu3LlccskljBs3jocffpgf/ehHXHnllYArCNa4ceP4/PPP+dOf/oSqqhiNRhYtWkR8fHzH489Dhw5lwoQJIf/87RTd073qMFVUVEReXp5f6+zfv58RI0aEpkERRvbFMYN1X/SmDwUqkve1tL3vhXO7+6P/eBPO+8obaXffC5e299SHwqWdoSCfLTKF4rOFMgq06FnE3QF2OBx+r+MuwtlgJfvimMG6L3rThwIVyfta2t73wrnd/dF/vAnnfeWNtLvvhUvbe+pD4dLOUJDPFplC8dlUVSEtLiro9QrfyDvAQgghhBBCCCEGBZkACyGEEEIIIYQYFGQCLIQQQgghhBBiUOj3d4D37dvHwoULO/5dXFzMggULuP766/uvUUIIIYQQQgghBpx+nwDn5uayatUqAJxOJ2eeeSYzZ87s51YJIYQQQgghhBhowuoR6PXr15Odnc3QoUP7uylCCCGEEEIIEREKCgo8lYu20QAAIABJREFU/u6qq67qw5a4d/PNN1NXV+f3esuWLePpp58OalvCagL8zjvvcPHFF/d3M4QQQog+1djq4P3tR7A7tf5uihBCiAHC6XQC8NJLL/XJ9rylOXvqqaeIj4/v1za0U3Rd10PeEh/YbDZ++MMf8s4775Camuqx3JYtW4iK8i9vVktLC9HR0YE2cUAYyPsiKjoKU4IJTdFQdRV7rZ3WllaP5ftjX4wdO7ZPt+dOb/pQoPpqX/t7DPgikvtMpLbdU7sHcv95ZlMVL2+t4TdnZXDmCKvP6w20v3G4i9R2g6vt3u4Q9ZWe+lAk7+OeyGfrLhTjdrC1f7agjkGaBk0V4LCB0QwxaaAGdl+yoKCAzZs3s2HDBpYvX056ejqFhYWsXr2643fl5eUsXLiQhoYGnE4nixYtYvLkyV3qufLKK1myZAl5eXkAzJs3j1//+tfk5uby4IMPsnv3bpxOJ7fddhvnnnsuK1euZO3atdhsNpqamvjzn//sdhszZszg1VdfJTk5mTfeeIOnn34aRVEYM2YMDz30ECUlJdxzzz1UVVWRnJzM73//e7Kysli2bBkxMTHcdNNNFBYWcv/999Pc3ExOTg5LliwhISGBefPmUVBQwKZNm5gxYwY33nij133V7+8At/vss88YP36818kvQFRUlN8HYGFhYVicOIWDgbovNF2jqLqI+R/Pp7SxlCxrFo/NeIwxI8agKu6/UAbqvuhJb/pQoPpiX/fmGPBFJB8nkdr2cG53qPpP+VdfA3DEbvGr/nDeV95Iu/teYWFhfzcB6LkPRfI+7ol8tq5CNW4HW9D/bpoG5Tvgpauh5iAk5sBVL0L6uIAnwe22bt3KW2+9RXZ2dpflb7/9NtOmTWP+/Pk4nU6am5u7rTtr1izWrFlDXl4e5eXllJeXc+KJJ/LII49w+umn8/vf/566ujquvPJKzjjjDMB1YevNN98kMTGRf/zjH163UVRUxBNPPMGLL75IcnIyNTU1ADz44INceumlXHbZZbz66qssXryYxx9/vMu6d911F7/97W859dRT+ctf/sLy5cu59957Aairq2PFihU+7Z+wObreeecdZs2a1d/NEBGqqqWKBR8voLSxFIDSxlIWfLyAqpaqfm6Z6CtyDIhIdqTOdcejpKb7yYgQQgxEg3bcbqo4NvkF18+XrnYtD5IJEyZ0m/y2L1+5ciXLli1j9+7dxMbGditz4YUX8u677wKwZs0aLrjgAgC++OILnnrqKebMmcO8efNobW3l8OHDAEydOpXExESftvHVV19xwQUXkJycDNCx3ubNmztehZ0zZw4bN27ssl59fT319fWceuqpAFx22WV88803Hb+/6KKLfN4/YTEBbm5uZt26dZx33nn93RQRoWxOW8cXaLvSxlJsTls/tUj0NTkGRCQrbZv4ltW19HNLhBCibwzacdthOzb5bVdz0LU8SGJiYtwuP+WUU1ixYgUZGRncddddvPHGG3zwwQfMmTOHOXPmsHXrVjIyMkhMTGTnzp2sWbOmy8TyscceY9WqVaxatYq1a9cyatQoACwWi9dtdObr27eKovj1mTu3oSdhMQG2WCxs2LCBuLi4/m6KiFBmg5ksa1aXZVnWLMwGcz+1SPQ1OQZEpGpodVDbbAegrqXn4B1CCDEQDNpx22h2PfbcWWKOa3mIlZSUkJKSwty5c7n88svZvn07M2fO7JjUTpgwAXA9Bv33v/+d+vp6xowZA8C0adNYsWJFxwR2x44dPm+jsylTpvDuu+9SXV0N0PEIdEFBAe+88w4Ab731FieffHKX9eLi4oiPj++467tq1SpOOeWUXu2HsJgACxGo5OhkHpvxWMcXaft7JMnRyf3cMtFX5BgQkaq87a6vUVVokAmwEGKQGLTjdkya653f9klw+zvAMWkh3/TXX3/NpZdeyqWXXsr777/Pdddd57bc+eefz+rVq7nwwgs7lt1yyy04HA4uueQSLr74Yv7yl7/0aht5eXn88pe/ZN68eVxyySX84Q9/AOB//ud/WLlyJbNnz2bVqlUd7/Z29sc//pE//elPzJ49m8LCQm699dZe7YewiQLtq968iD6Qgw74ayDvC7vTTmVzJQ7NgVE1kmpJxWQweSw/kPeFN/3xuftqm5quUdVShc1pw2wwkxyd3C2Qhi9l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jBOGRy7wwhzgs1WxKwoSMGQMMG42cOQ3gYHDwu7zTU/Srge3PofljW8YPu8SHTi2bBQuHvkdTKg4BkPsA0IDX0nMTOIwjWpzYeepP0Zzy3YM3rkeZbvfQ9UX/xOxTMA5AB//4PmYQbBdskMSMts+zejy0fjJhJ+gvacd7ze9jy9av8DaxrVYtU3nbwrAJtiw7JxlGF89PivtIyIqVIKa8s1D2bVx40Y4nbn5VpYoVTabDbW1tTltA2OIClUhxI9os0EVbAgkWbc2GaIoQFIVKHJswii32wVBVSFoV3YVBYAKqCoUVcnoLb52pxMQheDuENyfoipQe3eqqCrULGaXNiJACLYTAEQJwS8uBPgCMhQl9+0LJwoiRLHv7jVJkCBo/wkCAv4AAgHjxGGFEENE+Sof4ofSo+AGwERERERERETJYBIsIiIiIiIiKgocABMREREREVFR4ACYiIiIiIiIigIHwERERERERFQUOAAmIiIiIiKiosABMBERERERERUFDoCJiIiIiIioKHAATEREREREREWBA2AiIiIiIiIqChwAExERERERUVHgAJiIiIiIiIiKAgfAREREREREVBQ4ACYiIiIiIqKiwAEwERERERERFQUOgImIiIiIiKgocABMRERERERERYEDYCIiIiIiIioKHAATERERERFRUeAAmIiIiIiIiIpCwQ2AGxoaEl5n586d6W9IgeJ70adY34tkYihVhfxes+3Zl8/tzkX8mMnn98oM2519+dL2eDGUL+3MBL62wtSfX1uxKrgBcCAQSHid7u7uDLSkMPG96FOs70UyMZSqQn6v2fbsy+d25yJ+zOTze2WG7c6+fGl7vBjKl3ZmAl9bYerPr61YFdwAmIiIiIiIiCgZHAATERERERFRUeAAmIiIiIiIiIoCB8BERERERERUFDgAJiIiIiIioqJgy9SGv/76a/zsZz9DS0sLRFHEzJkzccUVV0Qs8+677+K6667D8OHDAQBnn302brjhhkw1iYiIiIj6gbYuH1o7fRg1uDTXTSGiApOxAbAkSbj11lsxZswYdHR0YMaMGZg0aRKOOuqoiOVOPPFEPProo5lqBiVIURW0elvhk31wSA5UuiohCuYTBZJZJxPbIMoHASWAlu4W+GU/7JIdVe4q2MT4h1rGAFFumcWg9lxJTQlava1QFAU+hbGaS+f/7l9oPNCN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NWoUY8aMYdy4cRw6dMhtZe/evZv77rsPgE8++YQFCxa4rezSsrOzWb16tcttl2axWFiyZAnDhw9n9OjRTJw4kW3btnksNlE/1EZdUkrRt29frly5AhSlR2jXrh179+51LtuvXz8uXbrEBx98wKefflqmrNOnTzN69GgAkpOTSxz7y5Yt4x//+IfLGDIzM3n00Uf5n//5H0aOHMm9997Lr7/+6rbPKOqvxMRExo0bx+jRo5k5cyYFBQUVLr98+fIqlTt06FAuXrwIQPfu3WscZ0U++eQT0tPTXW67tG3btnHLLbdw0003MWLECF544QWPxibqD0/XpUWLFvHOO+84X58+fTpPP/208+/nn3+elStXkp6ezsyZM12WNW3aNH788ccy2y9+bnLlH//4ByNGjGD06NGMHTvW5flNCH8jHWAvOHDgAFu3bmX9+vV89tlnrFy5kpiYGG+HdVWys7P54IMPqrTsa6+9RmZmJhs3bmTjxo0sX76cvLw8D0co6rLaqksajYauXbty8OBB53Y7dOjAgQMHADhx4gQRERFEREQwefJkbr755grLK90BLo9Siocffpg+ffrw9ddf8/nnnzN79myysrJq/qFEvRcUFMSGDRvYuHEjBoOBDz/8sMLlV6xYUUuRVd369evJyMiodLmUlBSeffZZXnzxRb744gs2btxIbGxsLUQo6gNP16Xu3bs7zzd2u51Lly5x/Phx5/sHDhygR48eREdHs3Tp0krLq+r2P/jgA3bu3Mm6devYuHEjq1evRrKnirpA7+0A6qPMzEwiIiIICAgAIDIyEoDDhw/z/PPPk5+fT0REBIsXLyYqKopp06bRvn17fvzxR3Jzc1m0aBFdunQhKSmJRYsWUVhYSFBQEIsWLaJVq1ZViuHbb79l2bJlmM1m4uLiWLx4McHBwQwdOpSbb76Zb775BqvVyquvvkrr1q25ePEic+bM4fLly3Tu3JkdO3bw8ccf89JLL3Hq1CnGjRtH//79uf7668nPz2fmzJmkpKTQsWNHlixZQmFhIWvXrmXz5s3Oz924cWNGjhwJFDXuU6ZM4fvvvycsLIzZs2fz4osvcvbsWebNm8ewYcM88E0If1ebdalHjx7s37+fwYMHc+DAAe666y7++9//AkUXH447XcuWLaNBgwZMnz6dw4cPM2/ePIxGIz169ADAbDazdOlSCgsL2bdvn3PExPHjx5k2bRpnz57lzjvv5I477mDXrl3o9XomT57sjCMxMREouju9bNkyGjVqxNGjR7nhhhtISEhg1apVmEwm/v73v9OiRQsP7n1Rl/Tq1Yuff/4ZgA0bNvDee+9hsVjo2rUr8+fP55VXXqGwsJBx48bRpk0bXnrpJR588EHOnz+PyWTijjvuYNKkSVXa1sWLF5k/fz5nz54FYN68efTs2ZNly5Zx9uxZTp8+XaIeAPz973/ns88+o2nTpkRERNCxY0eaN2/O4cOHeeyxxwgKCmLNmjUAvP/++2XOYW+//Tb3338/rVu3BkCv13P77bcDMHfuXAIDAzlx4gRnz55l8eLFrF+/noMHD9K1a1eef/55t+5rUbd5oi716NGDxYsXA3Ds2DHatm1LZmYmV65cwWg08ssvv5CYmMjp06e5//772bhxI4WFhTz11FMcP36c1q1bU1hYCOC8JnNs/9FHH8Vms/GnP/2JAwcOEB0dzeuvv05QUBArVqxg1apVhISEABAaGsr48eOBorvTo0ePZvfu3VgsFp599llefvllUlNTmT59eonzlhA+R4lal5ubq8aOHauGDx+u5s+fr3bv3q3MZrOaNGmSysrKUkoptWnTJjV37lyllFJTp05VTz/9tFJKqR9++EGNGjVKKaVUTk6OslgsSimlvvvuO/Xwww8rpZTatWuXmjFjhlJKqY8//lj95S9/KbH9rKwsNWXKFJWXl6eUUmrFihVq2bJlSimlhgwZolatWqWUUur9999X8+bNU0op9Ze//EUtX75cKaXUtm3bVEJCgsrKylJpaWnOeBzb7tGjhzp37pyy2WzqtttuU3v27FHJyclq3Lhx5e6ThIQEtXXrVqWUUg8++KC6++67ldlsVsnJyWrs2LHV38miXqjNurRr1y41bdo0pZRSkydPVrm5uWr8+PFKKaWefvpptXbtWqWUUkuXLlVvv/22Ukqp0aNHq927dyullHr++eed2ytdL5cuXaomTZqkTCaTysrKUn369FFms1m9++67auHChS4/+65du1TPnj1Venq6MplMauDAgeq1115TSin1zjvvqOeee65mO1fUed26dVNKKWWxWNT999+vVq9erY4fP67uu+8+ZTablVJKzZ8/X61fv77E8g6XLl1SSilVUFCgRo0apS5evKiUKjqPOOpf6XWUUmr27NmD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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Observation(s):</p>
<p>1.Using sepal_length and sepal_width features, we can distinguish Setosa flowers from others.</p>
<p>2.Seperating Versicolor from Viginica is much harder as they have considerable overlap.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Histogram,-PDF">Histogram, PDF<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Histogram,-PDF">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[15]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># What about 1-D scatter plot using just one feature?</span>
<span class="c1">#1-D scatter plot of petal-length</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="n">iris_setosa</span> <span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">iris</span><span class="p">[</span><span class="s2">"Species"</span><span class="p">]</span> <span class="o">==</span> <span class="s2">"Iris-setosa"</span><span class="p">];</span>
<span class="n">iris_virginica</span> <span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">iris</span><span class="p">[</span><span class="s2">"Species"</span><span class="p">]</span> <span class="o">==</span> <span class="s2">"Iris-virginica"</span><span class="p">];</span>
<span class="n">iris_versicolor</span> <span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">iris</span><span class="p">[</span><span class="s2">"Species"</span><span class="p">]</span> <span class="o">==</span> <span class="s2">"Iris-versicolor"</span><span class="p">];</span>
<span class="c1">#print(iris_setosa["petal_length"])</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">iris_setosa</span><span class="p">[</span><span class="s2">"PetalLengthCm"</span><span class="p">],</span> <span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">iris_setosa</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">]),</span> <span class="s1">'o'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">iris_versicolor</span><span class="p">[</span><span class="s2">"PetalLengthCm"</span><span class="p">],</span> <span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">iris_versicolor</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">]),</span> <span class="s1">'o'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">iris_virginica</span><span class="p">[</span><span class="s2">"PetalLengthCm"</span><span class="p">],</span> <span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">iris_virginica</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">]),</span> <span class="s1">'o'</span><span class="p">)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[16]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">5</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span> <span class="s2">"PetalLengthCm"</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">add_legend</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcQAAAFgCAYAAAAl0gnnAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADl0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uIDMuMC4yLCBodHRwOi8vbWF0cGxvdGxpYi5vcmcvOIA7rQAAIABJREFUeJzs3Xd8leX9//HX2dmbDIbMsBGQLVZq2DMiYkXF3VbF4qoD/Vb94apVsVRaF1ZtbR0oQ0AEBRkqssom7E0WIetknH3//jhJSCDJOUnOyck55/N8PHyYc+773OeTY+I713VfQ6UoioIQQggR5NS+LkAIIYRoCSQQhRBCCCQQhRBCCEACUQghhAAkEIUQQghAAlEIIYQAJBCFEEIIQAJRCCGEACQQhRBCCMCHgXjkyBGvXPfkyZNeua4nSY2e4w91So2eITUKb/NZINpsNq9ct7y83CvX9SSp0XP8oU6p0TOkRuFt0mUqhBBCIIEohBBCABKIQgghBCCBKIQQQgASiEIIIQQggSiEEEIAEohCCCEEIIEohBBCABKIQgghBCCBKIQQQgASiEIIIQQggSiEEEIAoPV1AS1ZUZkFo9m5CHmkQUt0mN7HFQkhhPAWaSHWw2i2sfFwHhsP51UFoxBCiMAkgSiEEEIggSiEEEIAEohCCCEEIIEohBBCABKIQgghBCCBKIQQQgBuzEM0m83ceuutWCwW7HY7Y8eOZfbs2TXOsVgsPPHEE+zfv5+YmBjefPNN2rZt67WihRBCCE9z2ULU6/V8/PHHfP311yxdupRNmzaxa9euGucsWrSIqKgovvvuO+68805ef/11rxUshBBCeIPLQFSpVISHhwNgs9mw2WyoVKoa56xbt46pU6cCMHbsWDZv3oyiKF4oVwghhPAOt5Zus9vt3HDDDZw+fZpbbrmFvn371jiek5NDSkqK84JaLZGRkRQUFBAXF1fnNc1mMxkZGU0ovXYmk8lj17VoI8jKzgLgQpwKY/Ypj1zXkzV6iz/UCP5Rp9ToGf5UY48ePXxdimgEtwJRo9GwbNkyiouLmTVrFocPH6Zr165Vx2trDV7airyUwWDwyg+NJ38YzxaUkZLs/N7iE+JpG9vOI9f1h18Yf6gR/KNOqdEzpEbhbQ0aZRoVFcWQIUPYtGlTjeeTk5PJynK2pGw2G0ajkZiYGM9VKYQQQniZy0DMz8+nuLgYcHYH/Pzzz3Tq1KnGOWlpaSxZsgSA1atXM3ToUJctRCGEEKIlcdllmpuby1NPPYXdbkdRFMaNG8d1113H/Pnz6d27NyNHjuTGG2/k8ccfZ/To0URHR/Pmm282R+1CCCGEx7gMxO7du7N06dLLnn/ooYeqvjYYDPztb3/zbGVCCCFEM5KVaoQQQggkEIUQQghAAlEIIYQAJBCFEEIIQAJRCCGEACQQhRBCCEACUQghhAAkEIUQQghAAlEIIYQAJBCFEEIIQAJRCCGEACQQhRBCCEACUQghhAAkEIUQQghAAlEIIYQAJBCFEEIIQAJRCCGEACQQhRBCCEACUQghhAAkEIUQQghAAlEIIYQAJBCFEEIIQAJRCCGEACQQhRBCCEACUQghhABA6+sCWpKiMgtGs63qsdlq92E1QgghmpMEYjVGs42Nh/OqHve/IsaH1QghhGhO0mUqhBBCIIEohBBCABKIQgghBCCBKIQQQgASiEIIIQQggSiEEEIAEohCCCEEIIEohBBCABKIQgghBCCBWCdFUTDJ0m1CCBE0XAZiVlYWM2fOZPz48UycOJGPP/74snO2bNnCgAEDSE9PJz09nQULFnil2Ob087ELTP3Hz+w5W+jrUoQQQjQDl2uZajQannrqKXr16kVJSQnTpk1j+PDhdOnSpcZ5AwcO5N133/Vaoc1t28l8AHafKeTKtrKmqRBCBDqXLcTExER69eoFQEREBJ06dSInJ8frhfmSyWon12gG4ExBuY+rEUII0RwatNvF2bNnycjIoG/fvpcd27VrF1OmTCExMZEnn3yS1NTUeq9lNpvJyMhoWLVuMJlMjb6uRRtBVnYW54qtAPRKiWB/Vgmnzp3jQpwKY/Ypn9fYXPyhRvCPOqVGz/CnGnv06OHrUkQjuB2IpaWlzJ49m6effpqIiIgax3r16sW6desIDw9nw4YNzJo1izVr1tR7PYPB4JUfmqb8MJ4tKCMlWeFMeT5QxPAuiezPKkEXHkd8QjxtY9v5vMbm4g81gn/UKTV6htQovM2tUaZWq5XZs2czefJkxowZc9nxiIgIwsPDARgxYgQ2m438/HzPVtqM8kvNaFQqeraOAqCo3OrjioQQQniby0BUFIVnnnmGTp06cdddd9V6zvnz51EUBYA9e/bgcDiIjY31bKXN6EKphdhwHfERegCMJpuPKxJCCOFtLrtMd+zYwbJly+jatSvp6ekAPProo2RmZgIwY8YMVq9ezaeffopGoyEkJIR58+ahUqm8W7kXFZVbiQnTExOqA8BokhaiEEIEOpeBOHDgQA4dOlTvObfddhu33Xabx4ryNaPJRqsIA1qNmjC9BqNZWohCCBHoZKWaSyiKQonJRmSIs3UYYdBSIl2mQggR8CQQL1FusWNXFCJDnI3nUL1GlnATQoggIIF4ieKK7tGqQNRJIAohRDCQQLxE5QCayi7TEJ2GcglEIYQIeBKIl6icYlHZQgzRaTBZHb4sSQghRDOQQLzEpYFY2WXqqJhnKYQQIjBJIF6ixGRFr1Fj0GoACNWpUYAyi3SbCiFEIJNAvESZxU6YQVP1OETn/FqmXgghRGCTQLxEmcVOmO7yQJTJ+UIIEdgkEC9RbrUTqr8YiJVfl8jybUIIEdAkEC9RZrETpr+4ol1oZQtRukyFECKgSSBeosxiq9FCrLqHKF2mQggR0CQQq3EoCuUWO2HVu0xlUI0QQgQFCcRqyix2FKgxqMagc35EMqhGCCECmwRiNUXlzoEz1e8hqlUqdBqVrGcqhBABTgKxGmNFIFa/hwig12ool4n5QggR0CQQqymuuE8YdmkgalSywLcQQgQ4CcRqiupoIRq0Glm6TQghApwEYjWlFQNnQnSXdpmq5R6iEEIEOAnEaipbgQZtzY9Fr1HLPUQhhAhwEojVlFvsqACd5pJA1KrlHqIQQgQ4CcRqyiw2dFo1apWqxvMSiEIIEfgkEKsps9oxaC7/SPRa6TIVQohAJ4FYTZnFjl5bSyBqpIUohBCBTgKxmnKL/bIBNVA5ytSBw6H4oCohhBDNQQKxmnKrHb1Wc9nzlSEprUQhhAhcEojVlNXRQqwcdVpqkQW+hRAiUEkgVlNexz3EypAsM0sLUQghApUEYjVlFlud9xCdxyUQhRAiUEkgVlPnoBpNZSBKl6kQQgQqCcQKiqJUDKqpu4VYKi1EIYQIWBKIFUxWBw7FubPFpSoDsVxaiEIIEbAkECuUVOx0UdfEfIBSGVQjhBABSwKxQuX9wfoH1UgLUQghApUEYoX6WoiV3agyylQIIQKXBGKFyrCrLRC1GufuFzKoRgghApcEYoXKFmJtg2rUKhWhOg1lZukyFUKIQCWBWKFyFZraWogAoXqNtBCFECKAuQzErKwsZs6cyfjx45k4cSIff/zxZecoisKLL77I6NGjmTx5Mvv37/dKsd5Uaq57UA1AiE4t0y6EECKAaV2doNFoeOqpp+jVqxclJSVMmzaN4cOH06VLl6pzNm7cyMmTJ1mzZg27d+/m+eefZ9GiRV4t3NMqF+6ubYNggFCdtBCFECKQuWwhJiYm0qtXLwAiIiLo1KkTOTk5Nc5Zu3Yt119/PSqVin79+lFcXExubq53KvaSyhaiXld3IMq0CyGECFwuW4jVnT17loyMDPr27Vvj+ZycHJKTk6seJycnk5OTQ2JiYp3XMpvNZGRkNLBc10wmU6OuezozH61axfnci2HfPUFPVnYWABocXCgq8UjNja2xOflDjeAfdUqNnuFPNfbo0cPXpYhGcDsQS0tLmT17Nk8//TQRERE1jinK5TvJq1Sqeq9nMBi88kPT2B/G0MP7CNOXkJKccvG5sLCqx1F5WZw3qjxSsz/8wvhDjeAfdUqNniE1Cm9za5Sp1Wpl9uzZTJ48mTFjxlx2PDk5mezs7KrH2dnZ9bYOW6ISs51Q/eVTLio5u0zlHqIQQgQql4GoKArPPPMMnTp14q677qr1nLS0NJYuXYqiKOzatYvIyEi/C8Qyi40wfd0N5hAJRCGECGguu0x37NjBsmXL6Nq1K+np6QA8+uijZGZmAjBjxgxGjBjBhg0bGD16NKGhobz88sverdoLSsw2QnX1tRDVMqhGCCECmMtAHDhwIIcOHar3HJVKxXPPPeexonyhzGInrJ4u0xCdhnKrHUVRXN4fFUII4X9kpZoKpWZbvfcQQ/QaFMW5b6IQQojAI4FYodRiq7eFWNmdKt2mQggRmCQQK5S6McoUZAsoIYQIVBKIFUrNNsLqGVQTUnGs3CqBKIQQgUgCEbDZHZhtjnqnXYTqnR+VtBCFECIwSSBycePfegfVyD1EIYQIaBKIXFzY251BNeXSQhRCiIAkgcjFVl99E/NDZFCNEEIENAlEnOuYAoQZZNqFEEIEKwlEoMzsTgtRBtUIIUQgk0Dk4qCa+keZSpepEEIEMglELg6qqW+UqV6jRq2SQTVCCBGoJBBxLtsG9Y8yValUhOm10kIUQogAJYFItWkX9dxDBGcLstwqg2qEECIQSSDiXMcUnDta1CdML5sECyFEoJJApGIdU70GtYt9DkN1EohCCP/z9ttvM3HiRCZPnkx6ejq7d+/22LV/+9vfUlxc7LHr+ZLLDYKDQanFXu8I00pheo0MqhFC+JWdO3eyfv16lixZgl6vJz8/H6vV6rHrv//++x67lq9JIOJsIUbUMym/UpheWzUARwgh/MH58+eJjY1Fr9cDEBcXB0BaWhrjx49ny5YtALzxxhu0b9+e/Px8nnvuOTIzMwF4+umnGTBgAKWlpbz44ovs27cPgAcffJCxY8eSlpbGl19+SVxcHMuWLePf//43VquVvn378txzzwHwzDPPsG/fPlQqFdOmTePOO+9s5k/BPRKIOFefcbeFmFdiboaKhBDCM4YPH87f//53xo4dy7Bhw5gwYQKDBw8GICIigi+//JKlS5fy8ssv8+677/LSSy9xxx13MHDgQDIzM7nnnntYtWoV//jHP4iIiGD58uUAFBUV1XifY8eOsWrVKj799FN0Oh3PP/88y5cvp0uXLuTk5LBixQqAFt29KoEIlJhtRBjcC0S5hyiE8Cfh4eEsXryY7du3s2XLFh555BEee+wxACZNmgTAxIkTeeWVVwD4+eefOXr0aNXrS0pKKCkpYfPmzcybN6/q+ejo6Brvs3nzZvbt28eNN94IgMlkIj4+nuuuu44zZ87wwgsvMGLECK655hqvfr9NIYGIc/WZuHC9y/NCZR6iEMIPaTQahgwZwpAhQ+jatStLly6t81yHw8Hnn39OSEhIjecVRUFVz8BDRVGYOnVqVdhWt2zZMn788Uf++9//smrVqqrwbWlklCnOFmK4my3EcrmHKITwI8ePH+fkyZNVjzMyMmjdujUAq1atAuCbb76hf//+AFxzzTV88sknNc4HZ9dr9ecv7TIdNmwYq1ev5sKFCwAUFhZy7tw58vPzURSFsWPH8tBDD3HgwAHPf5MeIi1EoMxsJ9zFHESo6DK12l3+pSSEEC1FWVkZL774IsXFxWg0Gtq3b8/cuXNZv349FouF6dOn43A4qrpDn3nmGebOncvkyZOx2+0MHDiQuXPncv/99zN37lwmTZqEWq3mwQcfZMyYMVXv06VLFx5++GHuvvtuHA4HOp2OZ599lpCQEObMmYPD4QDg0Ucf9cnn4A4JRJyjTN1pIYbqNSgKmG2Oqv0RhRCiJevduzefffZZrcduueUWHnzwwRrPxcXF8de//vWyc8PDw3n11Vcve37dunVVX0+YMIEJEyZcds6SJUsaWrZPBH2XqaIolFpshLszylQ2CRZCiIAV9C1Es82BQ8HNe4jOc8osNrcG4QghREtVvWUnnIK+hVhSsbB3uDsT8w3SQhRCiEAV9IFYZna9OXClMNkkWAghAlbQB2JlC9GdpdtCdRe7TIUQQgSWoA/EsqrNgd1vIcoC30IIEXiCflDNxXuI0mUqhPCuojILRrPnepgiDVqiw+of4Ne/f3927txZ67Gbb765zikZTfXOO+9w3333eeXa3hL0gVgZbu4MqgmVFqIQogmMZhsbD+d57HrXdk1wGYi1sdvtaDQar4UhwLvvviuB6G+qWohudZnKPUQhhH/asmULCxYsIDExkYyMjKrl2nbu3Elubi6PPPIIJSUl2O12nn/+eQYOHFjj9UeOHGHOnDlYrVYcDgdvvfUWHTp0qHXLpzfffBOTyUR6ejpdunThjTfe4MMPP+Srr74C4MYbb+TOO++krKyMhx9+mOzsbBwOBw888AATJkxgwYIF/PDDD5jNZvr378/cuXObZXWwoA/Esmpdpq6CrqrL1CotRCGE/9m7dy/Lly+nXbt2NZ5fsWIF11xzDffffz92u53y8vLLXvvZZ59x++23M2XKFCwWCw6Ho84tn/74xz/yn//8h2XLlgGwb98+Fi9ezBdffIGiKNx0000MHjyYM2fOkJiYyHvvvQeA0WgE4LbbbqtaQefxxx/nhx9+IC0tzZsfDSCBSGm1LlNXgWjQqlGrpMtUCOGf+vTpc1kYVj7/9NNPY7PZGDVqFD169LjsnH79+vHOO++QnZ3NmDFj6NChQ51bPl1qx44djBo1irCwMABGjx7N9u3b+dWvfsWrr77Ka6+9xnXXXVfVKt2yZQsLFy7EZDJRWFhIamqqBKK3FZVZyC4qR6NWkVtswmJz1Hmuze7gXGE5IToNOcUmisosjeq7F0IIX6kMpEsNGjSITz75hA0bNvDEE09wzz33EB4ezoIFCwB48cUXmTx5Mn379mX9+vXcc889vPjii/Vu+VSdoii1Pt+xY0cWL17Mhg0beOONNxg+fDi//e1v+X//7//x1VdfkZKSwltvvYXZ3Dwbswf1tAuj2caR3FL0GjWbjlzAYq/9PxpAudXBxsN5aFQqTuSVenSkmBBC+NK5c+eIj4/npptuYtq0aezfv5/Ro0ezbNkyli1bRp8+fThz5gzt2rXj9ttvJy0tjUOHDtW55ROAVqvFarUCzsD9/vvvKS8vp6ysjO+//56BAweSk5NDaGgo6enp3HPPPRw4cKAq/GJjYyktLWX16tXN9jm4bCHOmTOH9evXEx8fz4oVKy47vmXLFh544AHatm0LOJvCl66e3pJZbA70Wvf/LtBp1fW2JIUQoi6RBi3Xdk3w6PU8YevWrXzwwQdotVrCwsJq3dXim2++4euvv0ar1ZKQkMCsWbOIiYmpdcunNm3acNNNNzFlyhR69uzJG2+8wQ033MD06dMB56Canj17smnTJv7yl7+gVqvRarU8//zzREVFMX36dCZPnkybNm3o06ePR75Hd6iUutqyFbZt20ZYWBhPPvlknYH4z3/+k3fffbdBb5yRkVFrP3VTNeS6ZwvK+P2/d3DeaObhUV3pf0UMO08XVh2v/rjy67+tPUJsuJ73bx9A29jaux88WaOv+EON4B91So2eITUKb3PZNBo0aBDR0dHNUYtPNLSFqNeqsUoLUQghAo5H2tu7du1iypQpJCYm8uSTT5KamuryNWazmYyMDE+8fQ0mk8nt61q0EZSUm9CoVGRlZ9E9QU9WdlbV8eqPK79W7FZKLAoX8i5gzD7l9Rp9xR9qBP+oU2r0DH+qUVqJ/qnJgdirVy/WrVtHeHg4GzZsYNasWaxZs8bl6wwGQ4voMlVUWiLD9aQkpxAaFkZKckrV8eqPK7+OPGkhv9RCfEI8bWMvH77s6Rp9xR9qBP+oU2r0DKlReFuTR5lGREQQHh4OwIgRI7DZbOTn5ze5sOZisTswNKDL1KBVY7bJPEQhhAg0TQ7E8+fPV80x2bNnDw6Hg9jY2CYX1lzMVnuD7yGa5R6iEEIEHJddpo8++ihbt26loKCAa6+9lj/84Q/YbM45eDNmzGD16tV8+umnaDQaQkJCmDdvXrOsOecpFrsDg6YhLUSNBKIQQgQgl4E4b968eo/fdttt3HbbbR4rqDnZHA6sdgW9zv1ADNGpsTsUmYsohGi4sgKwGD13PX0khNXfI+er7Z/c9dvf/pY33niDqKioBr3urbfeIiwsjHvuucdjtQT10m0mqzPUGtJCrOxelR0vhBANZjHC0bWeu16XkS4DsTbNsf1TdTabDa229rh5//33fV5DpaBeuq1ypwuD1vVeiJUqz5VNgoUQ/mTLli3MnDmTxx57jMmTJwPO1iNAbm4ut956K+np6UyaNInt27df9vrp06dz5MiRqsczZ85k3759lJWVMWfOHKZNm8b111/P999/D8DixYuZPXs29913H3fffXed75GWllY1EHPp0qVMnjyZKVOm8PjjjwPOZeXuuOMOJk+ezB133EFmZuZltWVkZHDTTTcxefJkZs2aRVFRUVWN8+bN47bbbuNf//qXy88oqFuI5RXbODVkUI2hqoUogSiE8C9N2f5p4sSJrFq1itTUVHJzc8nNzaV3797MmzePoUOH8sorr1BcXMz06dO5+uqrAecc9a+//pqYmBj++c9/1vseR44c4e233+bTTz8lLi6OwkLnKmEvvPAC119/PVOnTuXLL7/kxRdf5B//+EeN1z7xxBP86U9/YvDgwcyfP58FCxbwzDPPAFBcXMwnn3zi1ucT3C3EilBr6LQL52uly1QI4V/q2/5p8eLFvPXWWxw+fJiIiIjLzhk/fjzffvstAKtWrWLcuHEA/Pjjj7z//vukp6czc+ZMzGYzWVnOBU2GDx9OTEyMW+/xyy+/MG7cOOLi4gCqXrdz504mTZoEQHp6Ojt27KjxOqPRiNFoZPDgwQBMnTq1Rgt3woQJbn8+QR2IlfsaNqiFqJMuUyGEf3K1/VNSUhJPPPEES5cu5bvvviM9PZ309HT27t1LUlISMTExHDx4kFWrVtUImr/97W9VO2OsX7+ezp07AxAaGlrve1TnYlntKg2dxVC9BleCOhAvthAbcg/R+ZGVmiUQhRCBwZ3tn8DZbbpw4UKMRiPdunUD4JprruGTTz6pCrQDBw64/R7VDRs2jG+//ZaCggKAqi7T/v37s3LlSgCWL1/OgAEDarwuMjKSqKioqlbhsmXLGDRoUKM+h6C+h1jWhHuI5dJlKoRoKH2kc2SoJ6/nAe5s/wQwduxYXnrpJR544IGq5x544AFefvllpkyZgqIotGnTptbdj1y9R2pqKvfddx8zZ85ErVbTs2dP/vznP/N///d/PP3003zwwQfExcXxyiuvXHbtV199leeee47y8nLatWtX6znucLn9k7e0hO2fFvxwhNdXH+bJcd2JDtW5tf1TucXOCysPMDutC4+O6eb1Gn3FH2oE/6hTavQMqVF4W1B3mZY3YlCNXkaZCiFEQArqQCxrxKAajVqFTqOSUaZCCBFggjoQyy12dBoV6gaOWtJrNZRKC1EIIQJKcAei1Y6+ASNMKxm0aukyFUKIABPUgVhmsTfo/mElZyBKl6kQQgSSoA7E8iYForQQhRAikAT3PESLrUEDaioZtBoJRCFEgxWZiyi1lnrseuG6cKIN0fWe4+3tn9auXcuxY8f43e9+16DXufPezzzzDHfddRddunRpSoluC+pALLc2soWoU5NfavFCRUKIQFZqLeWnzJ88dr3hrYe7DMTaeHL7p5EjRzJy5OWLDbjabsmd937ppZeaVFtDBXWXaZm58YNqyqWFKITwI97a/mnx4sXMnTsXgKeeeopXXnmFmTNn8vrrr5Ofn89dd93F1KlTefbZZ7nuuuuqtnqqfO/KumbPns24ceN47LHHqpaBmzlzJnv37gVg48aNTJ06lSlTpnDHHXcAsGfPHm6++Wauv/56br75Zo4fP96kzyjoW4gJEYYGv066TIUQ/sgb2z8dPny4xnknT57ko48+QqPRMHfuXIYOHcrvf/97Nm7cyOeff15rXQcOHGDlypUkJiYyY8YMduzYwcCBA6uO5+fn86c//YlPPvmEdu3aVa1z2qlTJz755BO0Wi0///wzb775Jm+99VajP5/gbiFa7Oh1Df8I9Fo15VY7DodPVr0TQohG8cb2T5caN24cGo2z523Hjh1Vu2Jce+21REfX3r175ZVXkpycjFqtpnv37pw7d67G8V27djFw4MCq2iu3hjIajTz00ENMmjSJV155pUYLtjGCNhAVRXGOMtU0/CMIqbjvWCJTL4QQfsRb2z9VV327JXeXytbr9VVfazQa7PaaPXCKotS67dP8+fMZMmQIK1as4O2338ZiadrYjqANRLPNgV1RGjXKNKRiT0SjSQJRCOH/mrL9U30GDBjAqlWrAOdGwkVFRY2qr3///mzbto0zZ84AF7eGMhqNJCUlAbBkyZJGXbu6oL2HWGp2hlnjRplWBqIVcH/zSSFEcAvXhTO89XCPXs8TmrL9U30efPBBHn30UVatWsWgQYNo1apVrd2xrsTFxTF37lz+8Ic/4HA4iI+P58MPP+Tee+/lqaee4sMPP2To0KENvu6lgnb7p9MXyrj2tR+YdlVbBrSPBXBr+yeAo7kl/POnE3zx+2EM7hjntRp9yR9qBP+oU2r0DKnR/1gsFtRqNVqtlp07d/L888+zbNkyX5dVp+BtIVoa30IMqRiI42whCiGEqE1mZiYPP/wwDocDnU7HCy+84OuS6hW8gVjRZdqUe4jFEohCCFGnDh06sHTpUl+X4bagHVRT2ojNgSvJoBohhAg8QRuIZU1pIVa8prhcWohCCBEogjYQS6pGmTZ86TatRo1eq5YWohBCBJCgDcTKpdca00IEiDBoKZZAFEKIgBG0gVjShHmIUBmI0mUqhBCBImgDscxiQ6NSoVVfvhyQO8INGukyFUKIABK0gVhqthOq19S6Pp47IgxaGVQjhBABJIgD0UaYvuEDaipFGLQyMV8IIQJI8AaixUaorqmBKF2mQggRKII3EM12wgyND8RwGVQjhBAE1TE9AAAgAElEQVQBJYgDsYktxBAtJqsDi83hwaqEEEL4SvAGosVOmL7xS7lGGJyvlfuIQggRGII3EM02Qps4qAZkPVMhhAgULgNxzpw5DBs2jEmTJtV6XFEUXnzxRUaPHs3kyZPZv3+/x4v0hjJL00eZgux4IYQQgcJlIN5www0sXLiwzuMbN27k5MmTrFmzhhdeeIHnn3/ek/V5TUkT7yGGG2THCyGECCQuA3HQoEFER0fXeXzt2rVcf/31qFQq+vXrR3FxMbm5uR4t0tPsDgWT1dG0FmKIDpB7iEIIESiavEFwTk4OycnJVY+Tk5PJyckhMTGx3teZzWYyMjKa+vaXMZlMLq9banGODFWsZrKyS6qe756gJys7q9bHlx5L0CUAcPD4adprCj1eo6/5Q43g+TpjQ0BrN7l9vk0TQoGL0/3hs5QaPaOyxh49evi6FNEITQ5ERVEue86d5dAMBoNXfmjc+WHMLjIBJ0mIjSI2TF/1fGhYGCnJKbU+vvRY2xRnqzkithU9enTyeI2+5g81ghfqLDwNR39x//wuI0mOuaLeU/zhs5QaPcMfahR1a/Io0+TkZLKzs6seZ2dnu2wd+lqpxXnfrymjTMP1lYNq5B6iEEIEgiYHYlpaGkuXLkVRFHbt2kVkZGSLD8SSihBryj1EjVol65kKIUQAcdll+uijj7J161YKCgq49tpr+cMf/oDN5gyUGTNmMGLECDZs2MDo0aMJDQ3l5Zdf9nrRTVVasRdiuF6D0WRv9HWiQmQ9UyGECBQuA3HevHn1HlepVDz33HMeK6g5GM2VLURtkwIxMkQnW0AJIUSACMqVaqpaiE1Y3BsgKlQW+BZCiEARlIFYUq2F2BTRoTqKyqXLVAghAkFQB2J4EwbVAESFSpepEEIEiuAMRJMNjVqFXtu0bz8qREeRBKIQQgSEoAzEUrONCIPWrQUE6mKzO1CpnK3NkxdKKCqzeLBCIYQQzS0oA9FYEYhNUW51kFtsBuD7/blVI1eFEEL4p6AMxFIPBCJcXOmm3Nr4qRtCCCFahqAMxBKzrclTLoCq7aMkEIUQwv8FaSDaq7ZvaooQCUQhhAgYwRmIJisRnmghVnaZWiQQhRDC3wVlIJaa7Z65hygtRCGECBhBGYjOe4ieC0STtBD9n80CteztKYQIHk1PBT/jcCiUWmxEeiAQdRoVGpWKcqvDA5WJZlecCb+8DRnLoeAEqHXQ5ipIvhKSevm6OiFEMwu6QCyz2lEUPNJCVKlUhOg10mXqbxwO2LwAfngJHDboPBKuvAkspXBgKZzZAu2GQp/poG76vWYhhH8IukCs3Bw4IsQz33qoTgLRrxRnwZLfw4kN0G0ijHsZYjtcPD7wblj1BBz9Huxm6H87NGFFIyGE/wi+QKxYUcYTg2oAQnVquYfoL7J2w39/A6YimPIW9J95edhpdNB9EmhD4OAKiGwNqaN9U68QollJIDZRqF5DqVkCscU7vAYW3QmhsXDv967vEXYe6WxNHl4Fid0hul2zlCmE8J2gC8SLmwN75lsP0WnIK5GFvVu0bR/AN3+E5D4w43OISnH9GpUK+kyDC0dg92fwq8dA5d6g7CJzEaXW0qrH1lArmSWZbpcbrgsn2hDt9vlCCM8IukA0mjzdZaqRifkt2aY3YO1c6DoOpn0Ahgj3X6sLg15T4X8fw9lt0G6IWy8rtZbyU+ZPVY+zs7JJtiS7/bbDWw+XQBTCB4IuEEu90GVqstpxyBw27ysrAIuxxlOtdCYoPH35uYoCP82H7R/Alb+B9H+AphH/zVP6Qcx6OPQNtO4PGn3jahdCtHhBF4hV9xBDtJg8MDo0VKdBAcqkleh9FiMcXVvjKWt2NiRf0vpSHLB/CZzcBH1uguvfAXUj16BQqZyDbH75O5zZCh2uaWTxQoiWLuhWqimu2OE+ygOLe8PF1Woqp3MIH1MU51zCk5ug03WQ9n+ND8NK8V2cUzOOrQOH/OEjRKAKukAsKrcSqtOg13rmW6/c8cJosnrkeqKJjqyGExuh4wjoMcUzcwhVKug8CsrzIXtv068nhGiRgi4Qi01WokM90zqEizteGKWF6HunfobD3zoHv/S83rMT6pN6OqdsnPrJ9blCCL8UdIFYVG4lKtRzt05DdRKILUL+cdj3FbTq4RxE4+nVZVRqaH+1cxpGSY5nry2EaBGCblBNcbnNOy1EswSiz5QXwo4PnS24q2bWnC9ot9U+CrUuVlPdx9oNhUPfOluJvW5ofL1CiBYp6AKxqNxKSnSIx64XKvcQfUtRYNd/wGaGIQ845w5WZy2DE9vcv17bQXUfM0RCSl/nnMTuk7w2BcPmsFVN5HcoDsx2M2a7GZ1ah0FjQKt2/WurUWmwK+4PALp08QBZHEAEo6ALxGKTle7JkR67nl6rRoV0mfpK2Pmdzm7MPr9xbwWapmo/HDL/B5k73Z6o74rFbuFsyVnOFJ/hfPl5Ps34lOzSbMx2MxbH5asgGTQG4kPjaRXaivZR7eka25WwS/4Q6JvQl915u92u4dLFA2RxABGMgi4QnfcQPddlqlapCNFpJBB9oewCkWd/gFbd4IqhzfOecZ0gvBWc3d6kQFQUhWOFx9ies52jhUdxKM49NeNC4mgT0YbOMZ0J0Yag1+jRq/Vo1Vrsih2bw0aJpYTz5ec5WniU3ed3o1Fp6Bnfk2vbXkt8aLynvlMhgk5QBaLDoVBitnk0EMF5H7FE7iE2L0WBPV8AKrjy5ubbokmlgjYD4PBq573LRsgty2XF8RWcNZ4lQhfBkOQhdIzuSNvItoRoQ9xu3SmKQnZpNrvP72Zn7k725e1jaOuh/LrtrxtVlxDBLqgC0WiyoSgQ5aG9ECuF6jRyD7G55R6AvEMY240iOjS2ed+7zUDn9I5z250LgDfAjpwdrDqxihBNCBM7TaRfq35oGrkJsUqlIiUihZSIFH7V9lesO72OzZmbOV54nLYRbRt1TSGCWVBNuyiuCC1PjjKFykCUFmKzcdjhwDKISKSsVf/mf//wBIjt6AxEN9ewVRSF705+x8rjK+kU3YkH+j3AgKQBjQ7Dy0rShTO582RmdJ9BkbmIpzY9xbmScx65thDBIqgCsahy2TYPB2KIXgKxWZ36CUpzoUc6eChQGqzNADBmw/lDbp2+9vRaNmdtZlDSIG7ufvNlg2A8JTU2lXv73EuoLpR/7/83Z41nvfI+QgSioAxEb7QQ5R5iM7GZnPfvErpCYk/f1dG6P6g0cHCFy1MzjBn8nPkzA5IGMK7jONRu7qvYWHGhcbw0/CXCdeF8evBTLpRf8Or7CREogioQL5Q6h7DHh3t2/ljlPURFtoDyvlM/g7UUuk1svoE0tdGHQ2IP571Eh6PO084az/LjhR/pEtOF8R3Ho2qmmuNC4rilxy2oUPGfjP9QYilplvcVwp8FVSDml5gBiPN4IKqx2hVM1rr/xyg8wGaG4+udrcPY9r6uxtlKLMmBM7/UethsM7PkyBLCNeHckHqD11uGl4oPjWdGjxmUWkv57OBn2BzSiyFEfYIrEEstqFQQE+bZQAypWL6tsktWeMn+pWAuhi6jfV2JU1Jv0IY411Ctxfenv6fQXEhaqzRCtJ5bHakh2kS0YWrqVDJLM/n+1Pc+qUEIf+FWIG7cuJGxY8cyevRo3nvvvcuOL168mKFDh5Kenk56ejqLFi3yeKGecKHUQkyoDo3as91Wlcu3SSB6kd3qXK80toNzf8KWQGtwbjO1f6lzzdRqThefZkfODoakDCE5JLmOCzSP7nHdGZIyhK3ZWzlw4YBPaxGiJXMZiHa7nblz57Jw4UJWrlzJihUrOHr06GXnTZgwgWXLlrFs2TKmT5/ulWKbqqDM4vHuUri4wHexzEX0nn1fQfE5Z+vQl/cOL9VtPJTlwcmNVU/ZHXa+Of4N0fpoft3u176rrZpRV4yidURrlh9bToGpwNflCNEiuQzEPXv20L59e9q1a4der2fixImsXbu2OWrzuAslFuLDDR6/blULsUwC0SscDtg0z/cjS2vT4RrQR9boNl11chW55bmM6TAGvZcWAG8ojVrDjak3ArD06FIZACZELVwu2ZKTk0Ny8sUun6SkJPbs2XPZeWvWrGHbtm107NiROXPmkJJS/0LLZrOZjIyMRpRcP5PJVOd1s/KNtIvWVR23aCPIys6qOt49QV/n4/qOGcuduwpkHD9FG1V+k2psKVpSjZFnf6Bt3iGKr/kTpTk19yK0Wq1kZWfX+dqouHKK6zne1PN1MSVoW/+KyH3LONL5d5Rh56N9H5FiSCHGHEN2VjZWq5XsLPevmRqW2qDzG3KNYbHDWJ+3nu8OfceV0VdWPX9pjXn6PIrOFDWpBk9rST+TdamssUePHr4uRTSCy0Cs7S/JS4eOX3fddUyaNAm9Xs+nn37Kk08+yb/+9a96r2swGLzyQ1PfD2Ppl2e5Ijmh6vjZgjJSki9+f6FhYaQkp9T6uL5j0WYb7CogPKYVPXp0bFKNLUWLqVFRYON9ENeJqKumEXV8fY3DWdnZpCTXc48uLJTw+o439fyEeBh+N/znG7prz/G+5RxGq5Gbet9ESqTz5yM7K5vkFPevGRYW1qDzG3KNJCWJTHsm2wu3c1X7q0gITai1xoSEBFpHtG5SDZ7WYn4m6+EPNYq6uewyTU5OJrvaX8w5OTkkJibWOCc2Nha93tk1dNNNN7F//34Pl9l0DodCQZnF43MQ4eIoU7mH6AXH1kHWLhj+sO9WpXGl068hNA7j3s/5aP9HDEkeQpvINr6uqlYqlYpJnSah0+hYdnRZ1S4bQgg3ArFPnz6cPHmSM2fOYLFYWLlyJWlpaTXOyc3Nrfp63bp1dO7c2fOVNlFhuRWH4vk5iODcAipcr5FRpt6w6Q2IagN9Z/i6krppdNAznU+yNlFsKWZmz5m+rqheEfoIxnccz7mSc2zJ2uLrcoRoMVx2mWq1Wp599lnuvfde7HY706ZNIzU1lfnz59O7d29GjhzJv//9b9atW4dGoyE6OppXXnmlOWpvkOwiEwDJ0d6ZDxYVqqNQBtV41qnNznVLx/0ZtC1jcEpdirqN59/nvyMtpjupsanklue6fpEP9Yrvxb68ffxw+ge6xXbzdTlCtAhu7YM0YsQIRowYUeO5hx56qOrrxx57jMcee8yzlXlYTrEzECP0Gs4WlAFgtto9dv3oUB0FZc6l4YrKLBirrW0aadAS7eHFAILCj/MgLB6uut3Xlbj0SelhjBo1D5R67mfKm1QqFRM6TuDt3W+z/PhyxsSO8XVJQvhc0KxUk1XRQgwL0bLxcB4bD+dhsXtu6Hl0qI6CirVSjWZb1XtsPJxXIxyFm7L2wJE1MPR+57qhLViZtYz/HvyM6/RJdDv2Iyqz0dcluSXKEMWY9mM4VXyKDGPLHr0pRHMImkDMLjahUkGCF+4hgjMQ8ytaiMIDNr7mnN836Le+rsSlJUeXUGwp5u4+94DdTMgR/5mn2y+xHx2jO7KlYAtF5pY1zUKI5hY0gZhTZCIhwoBW451vOTpUR2Gp3EP0iJz9kPE1DL0PQmN8XU29rA4bH+//mKsSr6Jfr5sh5gpCD37j67LcVjnqVEFhxfEVMmFfBLWgCcTsYhPJUd5bYDk6TIfRbMNik2HsTbbhL87W4dAHfF2JS2syfySrNIs7e93pXFKu9zQMp35Gb/KPblOA2JBYBscO5ljhMfbkXb7ohhDBIngCscjktRGmADEVmw4XSrdp0+QcgANLYcjvISzO19XUS1EUPjryJR0j2jIisiMUnob2w1Epdtoe2wRl+VCWT4TGWvU1ZflgKfN16ZfpFdmLdpHtWH1iteydKIJWUASioihkFpbT2ouBGF0RiHIfsYk2vAr6CBg2y9eVuLS59DQHi09wV1RP1Md+gKNrofAM1qjWtDvxM+QehNyD2LP3V31N7kGwmXxd+mVUKhWTO0/G6rCy6sQqX5cjhE8ERSBeKHVOg2gf773RitFhFYFYKoHYaGe2OluHQx9o8a1DgA/zttHKEMPE6O4Xn1SpKG9/Na2KswlpgS3B+iSEJjCi3Qgy8jPYdHaTr8sRotkFRSCeulAKQMcE7wViZZdpgQysaRxFgdVPQ0QSDH/I9fk+llGeyy+lp7n1ivHo1TWn85raD0MFtMs74ZvimuDq1leTEp7Cgl0LKDQV+rocIZpVUATiiTznX+odvBiI0mXaRPuXwNltkPZ/YIjwdTUufZi3jXC1nuntRl52zBbdhoLwONrlHfdBZU2jVqmZ3HkyRouRv2z7i6/LEaJZBUUgnswrRaNW0TY21GvvER2mQ62C88Ut7/5Qi2cphe+fg6Te0O9WX1fj0hlLIauLDzM9tg9Rutr/yDoT34n4kvOEm4qbubqmSw5P5jfdfsPy48vZeHaj6xcIESCCIhBPXCilbWwoOi/NQQTQqtW0ijSQLYHYcGvnOkdojv9Ly93RopqP83agVqm4Lf6qOs853aoTCtA+92jzFeZBM7rPoHN0Z+ZunisT9kXQCIpAPJRtJDXR+91wSVEhZBebvf4+AeXUZtjyLgz+HXQY7utqXLpgK2Np4T6mRPckSRdZ53nlhghyolvTIfcIKj+c7K7X6Hnpmpe4YLrAMz8+I9tEiaAQ8IFYYrZx7HwJfdp4f8WTpKgQcqWF6D5LKSybBTFXwMjnfF2NW/5zYScWxc6dCQNdnnsiqSvhllJal+Q0Q2We1yuhF38c+Ec2nN3Ax/s/9nU5QnhdwAfigcxiFAX6tI3y+nslR4VIl6m7FAWWPgAFJyB9gV8MpCm1W/gsfxdpkV3oaHA9LSQzrj1mrYFuBSe9X5yX3NL9Fka3H838/81nR84OX5cjhFcFfCDuOescOt67TbTX3yspykBhmdWj20oFrB/fdM45HPU8dLzW19W45cuCvRgdZu5OGOTW+Q61htOtOtPeeA691T//UFKpVMy9ei5tI9vyyA+PcKb4jK9LEsJrAj4Qt5zIp01MKImR3lulplJSxVqpeSUy9aJeGcudA2l6T4OrZ/u6GrdYHXb+dWEHA8PacmVYituvO5HYFY2i0P68fw6uAYjQR7AgbQEKCvevvZ8CU4GvSxLCKwI6EC02Bz8fzWNEt1bN8n6Va6XmGp2tAYeisOZANgvWHcVqD4JBCWUFztGi9f2z8xNYdCck94FRLzgXxPYDy4sOkGsrcbt1WKkoPI6csHi6ZGWAHw9M6RDdgbfS3iKrJIs/rPsD5bZyX5ckhMdpXZ/iv7afzKfUYufXXZsnEDtULA13tqCc6FA9208WsP7QeQB6tYlm5tD2zVKHz1iMzvU865J7ALZ/AJGtoe/NgH90LVscNt45/wu9QpK4JqJDg1+/L74LI89sIaXgLFlxV3i+wGbSL7Eff772z/xxwx+577v7WDByAZH6ukfaCuFvArqF+OWOs0QYtAzvktAs79c6JhS9Vs3p/DIUReHnY3m0iQmla1IEi7YH+b2X07/AtoUQkQxD7gNdmK8rcttXBfvIshqZnTQcVSNatCej2lCmDyM164AXqmteo9uP5tVfvcqe83u4d8290n0qAkrABuJ5o5kVe7K44ao2hBuapyGsUavo3CqCY7klnM4vI9doZnDHOK7rlsies0XklQThHEXFAQdXwp7PID4Vhv0B9N5bQs/Tyh1W3svbwlVhbRgW3rgWvqJScyy5B0lFmUSV+X+AjOs4jvlp8zlacJTbV93O4YLDvi5JCI8IuEBUG8I5W1DG41/uRkFhUp9kzhaUVf3j7RGg/a+IYX9mMT8fu4BBq+bKttFc2c45wnXn6SBbLNlSClvfhaPfQbuhzsn3Ou8PbvKkz/N3k2crZXZi41qHlY4ndcOu1pCaud+D1fnOtW2v5b0x72G0GLl15a0sPbrU1yUJ0WQBF4gmu4q//3CM9YfOk9YtkchQPRsP51X9Y7F7d9WQX3VJoNRiZ++5Iga2j8Wg1dA9KRKtWsX/Tvt/68Bthadh0+tw4Sj0uQmu/I1fLMtWXZHdxAd5Wxke0Z4B4W2bdC2LLoQTial0OH+U0LLA+MNoQNIAvpzyJVe2upI//fQnHlr3EOdKzvm6LCEaLeAG1RSV21i26xxtYkK5JrV5BtNUN6pnEr1bR3G2oLzq/Q06Db1aR/G/U0EQiIoCpzfD/q/AEAVXP+RciaY2dpszON3VzHP5FuT+RLHdzCNJnpknebDNlXTKOUz3Iz+wM6GTR67pawmhCbw3+j0+2v8R7+55l/Sl6dzV+y7SO6ejVjXt7+1wXTjRBu/PHxaiUsAF4j+3ZGK2OZg2oC0adfMP6ddp1Lx921VsOJyHuloXW792MSzacRaHw//WtXSbzQR7PnVu9NuqG/SfCfp6VqCxlsGJbe5fv23Dpjw0xcHyXL7I38PNcX3pFuKZP6zKDRGcSEyl46mtZPS9AVNYrEeu62satYZ7+tzDxE4TeWP7G7yz+x3+tf9f9Evsx5CUIY0eiTq89XAJRNGsAqrLdH9mEeuPFXJNlwSSo3x3r0qlUtUIQ3BOuyiz2DlRsVlxwMk7Ap/d4gzD1DEw+Pf1h2EL5lAUXspaR4wmhFmJV3v02gfbXIlKUeh+YJVHr9sSJIcn89qI11g0eRGDkgexOXMz8/83nyVHlnDOKF2pouULqBbiOxuOE65Xc60Pukpd6VOxdNy+c0V0Nfi4GE/b+yUsfwjUWmcQJvbwdUVNsqxwP7vKM5nbegxRGs/+YVUWEsnJKwbQ6ehGjnQbSWlkkkev3xJ0j+vO00Oepk9CH7Zlb2Pn+Z3szdtLm4g2DE4eTM/4nmj87H6yCA4B00LMKzHz7b4s0lLjCNW3vF+2LokR6LVq9mf634axdbKaYPnD8NU9zs19b13k92F4piyHV7PXc1VYG9JjennlPfb3GItDraHv/xZ55fotRVxoHGM7juWRAY8wrsM4TDYTS44uYf7/5rPhzAZKLCW+LlGIGgKmhbhidyZWu8KYbnEYW+BtOp1GTY/kSPadK2JqxwC4L3LhGCy6A7L3wvCHIO1PYMyCHP+dVmBTHDy+9++gUvNw99vJDnHnHp8dopNrPGMy1H/PzBQSRUbvSVy56yuSsvaTk+Kd4G0pDBoDg1MGMyh5EMcKj7E1eysbzm5g07lN9I7vzaCUQbSJaOPrMoUInED8dn82XZMiuCI2hP35LTARcd5HXLE7E0Xx/lZUXrVvMXw9GzRamPE5dBvn64o84p3zm9lfeIQbYnpzNGsbbi3HHdsBLtneqW/3G1y+7Ei3UXQ6upF+Oz5jzfjnUDQB86tYJ5VKRZfYLnSJ7cKF8gtsy97Grtxd7MnbQ7vIdqRdkUb7qABf3lC0aAHRZXqhxMzWE/mM65Xs+mQf6t06mmKTjZwSm69LaRxTESz+PXx5FyR2h99vCpgw/NF4gvfPb2V061/RO9T7P0cOjY6dA2YQVZxF773BN6k9PjSecR3H8ciARxjbYSyFpkI+3v8xXxz6ggvlF3xdnghSARGI32fk4FBgbO8WHohtnC3Do/l+uITbiU3w9nDYuwhGPAV3rYKYdr6uyiOOmPL449mVpIYkMKvHHc32vtltruR452vpdmA1CbnBufyZQWtgSMoQZvWfxa/b/Zrjhcd5e/fbfHviW4wWo6/LE0EmIPppvt2XTdvYUHqmRLHnaMsdtNK1YsWaoxf8aL/E8gL4/nnY8RHEdYZ71kDbgb6uymNOmwv43amvCFPrWHDF9Ti0zTtdZ9dVN9Eq5yCDf17IdxOex6pvGYue2xw2MksyG/16k61hiyjoNXqubXstVyVexYazG9iWvY27V9/NQ1c9xLTUaTIqVTQLvw/EYpOVn45e4PZh7Zu01mRzCNFpSE2K5Jg/tBAVBfYsgtVzoCwfhj0I1z3tVwtzu3LMdIHfnfoKu+Lgww43kayLpPER0Dh2XQhbr76X675/las3/YNNv36omSuonclmYnfe7ka/vm9C30a9LkIfwcROExmQNIDNmZt54ZcXWHR4EU8NfoowWsYfCyJw+X2X6Zr9OVjsDiZe6f4u5r7Uu3UUh/PMLXvFmjPbaL/uPlh8L0S3g9/9AGNfCqgw3FZ6hjtOfo4DhYUdbqRzSLzPaslP6MS2IXeRmHOQgVs+cv4xEuSSw5N57drXeG3EaxSaC7nz2zv569G/kl2a7evSRADz+0BcsSeTNjGh9GsX4+tS3DKkUzzFZgcZ2S2wazfvKHxxO3wwCn3JGZg4D+79HlIa99d+S2RV7Lx3fgu/Pfkl8dow/tXxN3T10NJsTXG641D29p1K+5NbSPzhz6gc/rF5sjepVCrGdRjH19d/zX1972NbwTamLJ3Cu7vfxWz3g14W4Xf8usu0oNTCj0fyuOeaji2+u7TStanOzYo3Hs6jV+sWMh8xaw/8OA8OLANtKIx4igttxpCU2AqKG7DkVjMvvt1Qh0zn+dO51WSYchkf1Y1nW48iQtNylg062HMCWquJHvsWc3X+UX655vfYtS2nPl8J1YYyq98setObZYXLWLBrAV8c/oJ7+9zLDak3YGhB/w2Ff/PrQPxi+xlsDoX0fv4zqTcxKoROsXq+z8jh/l939l0hdiscXg3b/wnH1oI+Eq6eDcNmQUQimqM74ejahl2zGRffbojj5nzePf8L3xYdIkYTypvtJjMqKtXXZV1OpWJfv2nEJfYhZcNrjPr2RbYNvZP8BB/+nLQgiYZE5v16HluztvL3XX/n5S0vs3DvQm7udjM3pN5AfKjvur1FYPDbQDRZ7Xz400mu7hxPz9b+NdE9rXMEC7fnk5FVTI+UZqxdUSBrNxxYCrv+CyU5EJniXGVm0L0Q6h/dzu4wOaysNx5nee4PbDq/kxC1jjviB3B3wiBitKG+Lq9eRVdO56DKyqAtH5O25s8cSx3BoZ7jKQuX/+EDVavebM3eysK9C/nbzr/x9u63GXXFKMZ2HMvw1sMJaebRwiIwuBWIGwRzZZYAAA3USURBVDdu5KWXXsLhcDB9+nR+97vf1ThusVh44okn2L9/PzExMbz55pu0bdu0DVVdeX31IbKLTbz5m35efR9vGNMlkv/sLuKNNYd5//YB3uvuVRQoOgvndsCJDXDoWzBmgkoNqWNhwB3QZbRzxRk/Z3bYOGq+wM6yc/xScpptZWcoc1hJNMRxb8IQZsZfRWwLD8LqclN6sXriXPrs+opORzfS6ehGzrYbwNn2A8lO6R30XakqlYohKUMYkjKE40XH+fzg53xz4htWnVxFmDaMwcmDGZg8kIFJA+kS20W6VYVbXP6f0G63M3fuXD788EOSkpK48cYbSUtLo0uXLlXnLFq0iKioKL777jtWrlzJ66+/zl//+lePF6soCpuPXWD5nkw+3XqG24ZewbDO/vdXc6RBw2NjuvLiygwe/3IPT0/oQVy43vULHQ6wlYPd4txc12EFa7lzBRlToXN6RNEZ56a7Bacgew+Unne+VhcGndOg2zPOMIzw/UCSS1kVOzbFgU1xYK/4tw0HVsVOmcNKcf4BSoqPYXSYybEaybYaOVmSR16JiVPmAuw4R2e200czMboHY6K6MqjbVDTndvj4O2scmy6EnYNu5WDP8aQe+o6Ox3/iitPbsKu1FMW0pSCuPSURrSgPi6U8LBaLPhy7Vo9drUNtKkblsKGo/f+PHVc6RXdizpA5PD7ocbZlb+O7U9+xNXsr68+uB0Cj0tAhqgNXRF1BUlgSSeFJJIUlEW2IJlwXTpg2zPlvXRh6jR6tSotapUaj1qBT63z7zYlm5fK3Zc+ePbRv35527ZyrkkycOJG1a9fWCMR169bx4IMPAjB27Fjmzp2Loigeb/n8cjyfWxZuQadRcc81HXl6gv/urHDPNR25UGrh3Q3HaBVp4Mlx3V2/6L/T4ej3rs8LjXOuItNlNLS5ClpfBcm9oQW3Khbl72Fulovv7VjNh9GaEOIJ4YqQeEZGptI9pBW9Q5Npra/WDd3EXdtbgvLwOPZc9Rv29ptGwvmjJGfuJS7/FO1ObUVvLa/zde0MEaxMfzVoWpNatZZhrYcxrPUwALJLs9l9fjeHCw5zuOAwZ4xn2J6zvUEr4Dwz5Blu7n6zt0oWLYxKUeqf9PTtt9+yadMmXnrpJQCWLl3Knj17ePbZZ6vOmTRpEgsXLiQ52bl02qhRo/jiiy+Ii4ur87q7du3CYAiOX1QhRHDRarWkprbAgVuiXi5biLXl5aUtP3fOuVS/fv53708IIUTgctmflJycTHb2xdUhcnJySExMvOycrKwsAGw2G0ajkZiYwBmxKIQQIvC5DMQ+ffpw8uRJzpw5g8ViYeXKlaSlpdU4Jy0tjSVLlgCwevVqhg4d6jcT5YUQQghw4x4iwIYNG3j55Zex2+1MmzaN+++/n/nz59O7d29GjhyJ2Wzm8ccfJyMjg+joaN58882qQThCCCGEP3ArEIUQQohA5/9j0oUQQggPkEAUQggh8OO1TC81Z84c1q9fT3x8PCtW/P/27j+mqvqP4/jzghAM0nm1oNA/QqYSLLTsF2O6SxNv45fXka5RmrqVq3VnQGZQsukmtX6u1pblrCUusSXdpWvNCf5Yt5KZxu6giGhNQHRdTAHvD+7l/f2Deb/euCJ+v+pBez/+umf3nPN57Yzx3rnnfD7vPUbHiejkyZOsW7eOv/76i6ioKJYuXcqKFSuMjhXG5/NRWlqK3+8nGAyyaNEi7Ha70bEiuvBMOykpiS1bthgdZ4Tc3FwSEhKIiooiOjqa3bt3Gx1phHPnzvHKK6/Q1taGyWRi8+bNzJ071+hYYTo6OnjhhRdC2ydOnMBut/PUU08ZFyqCTz/9lC+++AKTycTMmTOpqanRudY3GrlJHDlyRFwul+Tn5xsd5ZJOnTolLpdLRET6+vokLy9PfvvtN4NThRsaGpL+/n4REfH7/VJSUiLHjh0zOFVk27Ztk7KyMnn66aeNjhKRxWIRt9ttdIxRrVu3Tnbt2iUiIj6fT86ePWtwotEFAgHJzs6Wzs5Oo6OE6enpEYvFIh6PR0RE7Ha7fPnllwanUlfqpvnJ9P7772fSpHHSX/ASbr/9djIyMgBITEwkNTWVU6dOGZwqnMlkIiEhARieUxoIBMblFJqenh4OHDhASUmJ0VFuWP39/TQ1NYWuYWxsLBMnju/OMd9//z3Tp08nJWX8tXwLBoN4vV4CgQBer3fEfG01/t00BfFG09nZSWtrK1lZ468bfTAYpLi4mOzsbLKzs8dlxs2bN/Piiy8SFTW+/4RXr17NkiVLqKurMzrKCCdOnMBsNvPyyy+zePFiqqqqOH/+vNGxRrV3714KCgqMjjFCUlISq1atwmKxkJOTQ2JiIjk5OUbHUldofP83uUkNDAxgt9uprKwkMTHR6DgjREdH43A4OHjwIM3NzbS1tRkdKUxjYyNms5nMzEyjo4zq888/p76+no8//pgdO3bQ1NRkdKQwgUCAlpYWHn/8cb766ivi4+P56KOPjI51SX6/n4aGBqxWq9FRRjh79iz79+9n//79HD58GI/Hg8PhMDqWukJaEK+zwcFB7HY7hYWF5OXlGR1nVBMnTuTBBx/k8OHDRkcJ89NPP9HQ0EBubi5lZWX88MMPVFRUGB1rhKSkJACmTJnCwoULaW5uNjhRuOTkZJKTk0O/AFitVlpaWgxOdWmHDh0iIyODqVOnGh1lBKfTybRp0zCbzcTExJCXl8exY8eMjqWukBbE60hEqKqqIjU1lZUrVxodJ6Le3l7OnTsHgNfrxel0kpqaanCqcOXl5Rw6dIiGhgbefvttHnroId58802jY4U5f/48/f39oc/ffffduOt+cNttt5GcnExHRwcw/HxuxowZBqe6tL1795Kfn290jIjuvPNOfv75Zzwez3Df1nF+LVVkN820i7KyMo4cOcKZM2eYP38+zz//PI899pjRscIcPXoUh8PBzJkzKS4uBoZzL1iwwOBk/3X69GnWr19PMBhERLBarVgsFqNj3XDcbjfPPfccMPxMtqCggPnz5xucaqRXX32ViooKBgcHmT59OjU1NUZHisjj8eB0Otm4caPRUSLKyspi0aJF2Gw2JkyYQHp6OsuWLTM6lrpCunSbUkophf5kqpRSSgFaEJVSSilAC6JSSikFaEFUSimlAC2ISimlFKAFUV0D6enpFBcXU1BQgN1ux+PxjLr/hx9+OKbz5ubm0tvbC3DNOzLs3r07bJ3Zi8f+p4MHD7JkyRIeffRRrFYrr7/++jXNppS6NrQgqqsuLi4Oh8PBnj17iImJYefOnaPuPx5bN9XX13P69OnL7tfW1samTZt44403+Oabb9izZw/Tpk27DgmVUlfbTTMxX41P8+bN49dffwXA4XCwfft2BgcHycrKorq6mnfeeQev10txcTFpaWm89dZbPPvss/T09ODz+Vi+fPmYJzj39vZSXV1Nd3c3AJWVldx33328//77dHd309nZSXd3NytWrGD58uUAfPDBB3z99dfccccdTJ48mYyMDFJSUnC5XFRUVBAXFxdamLu2tpbGxkYCgQDvvvsuM2bMYOvWraxZsya0KsmECRMoLS0FYP369dxyyy10dHTQ3d1NTU0N9fX1HD9+nKysLF577bWreq2VUv8nQ5tPqZvSnDlzRERkcHBQ1qxZIzt27JD29nZ55plnxO/3i4hIdXW11NfXh+1/wZkzZ0RExOPxSH5+vvT29opIeH/Bfx4jIlJWViZNTU0iItLV1SVWq1VERN577z1ZtmyZ+Hw+cbvd8sADD4jf75fm5mYpKioSj8cjfX19snDhQtm6dauIiDzxxBPS3NwcOrfFYpHPPvtMRERqa2ulsrJSREQWL14sra2tEa/DSy+9JGvXrpWhoSHZt2+fzJ07V3755RcJBoNis9mkpaXliq6rUura0jtEddVduOOD4TvEkpISdu3ahcvlCvXe83q9TJkyJeLx27dvZ9++fQCcPHmSP//8k8mTJ192XKfTSXt7e2i7v78/tJ7oggULiI2NxWw2YzabcbvdHD16lEceeYS4uDiAyy5Rd2Ex9szMzFC+y7FYLJhMJmbNmsXUqVOZNWsWAGlpaXR1dZGenj6m8yilrj0tiOqqu/AM8WIigs1mo7y8fNRjf/zxR5xOJ3V1dcTHx/Pkk0/i8/nGNO7Q0BB1dXWhAnex2NjY0Ofo6GgCgcCYznmxmJgYAKKioggGg8BwYXO5XMyePTviMRfGNZlMYRmioqL+pwxKqWtHX6pR18XDDz/Mt99+i9vtBuDvv/+mq6sLGH7uNjg4CEBfXx+TJk0iPj6e33//nePHj495jJycHGpra0Pbra2to+5/77330tjYiM/nY2BggAMHDoS+S0hIYGBg4LJjrl69mi1btvDHH38Aw0X5k08+GXNmpdT4oXeI6rpIS0tj7dq1rFq1iqGhIWJiYtiwYQMpKSksXbqUoqIi7r77bmpqati5cyeFhYXcddddzJkzJ+L5PB5PWPeIlStXUlVVxcaNGyksLCQYDDJv3rxRuyPcc8895ObmUlRUREpKCpmZmdx6660A2Gw2qqurw16qiWT27NlUVlZSXl6Ox+PBZDKNq+4lSqmx024X6l9tYGCAhIQEPB4PpaWlbNq0iYyMDKNjKaUMoHeI6l9tw4YNtLe34/P5sNlsWgyV+hfTO0SllFIKfalGKaWUArQgKqWUUoAWRKWUUgrQgqiUUkoBWhCVUkopAP4D/a6S7jPK1DQAAAAASUVORK5CYII=">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[17]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#There is some overlapping between versicolor and virginica based on Petal's Length feature</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[18]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">5</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span> <span class="s2">"PetalWidthCm"</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">add_legend</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcUAAAFgCAYAAADKEGLZAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADl0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uIDMuMC4yLCBodHRwOi8vbWF0cGxvdGxpYi5vcmcvOIA7rQAAIABJREFUeJzt3Xd81dXh//HXvbnJzQ5JIIM9QiDsjTiwogyBEBDE0aJfxKpdaF1VcVLU9le1tdpWrFta1CISAREriFhRUIaA7L0ygOxxc3PH7497E4lJSEhucpN738/Hw4dw72eckxvyzjmfMwxOp9OJiIiIYPR2AURERFoKhaKIiIibQlFERMRNoSgiIuKmUBQREXFTKIqIiLgpFEVERNwUiiIiIm4KRREREbdmDcX9+/c3+NwjR454riBe4gt1AN+ohy/UAXyjHr5QB/Cdevi7Zg1Fm83W4HNLS0s9WBLv8IU6gG/UwxfqAL5RD1+oA/hOPfyduk9FRETcFIoiIiJuCkURERE3haKIiIibQlFERMRNoSgiIuKmUBQREXFTKIqIiLgpFEVERNwUiiIiIm4KRRERETeFooiIiJvJ2wXwlvwSK4VlVRcojzCbiAoN8lKJRETE2/w2FAvLbKzfd6bKa6OT2yoURUT8mLpPRURE3BSKIiIibgpFERERN4WiiIiIm0JRRETETaEoIiLiplAUERFxUyiKiIi4KRRFRETcFIoiIiJuCkURERE3haKIiIibQlFERMRNoSgiIuKmUBQREXFTKIqIiLgpFEVERNwUiiIiIm4KRRERETeFooiIiJtCUURExE2hKCIi4qZQFBERcVMoioiIuCkURURE3BSKIiIibnWG4oMPPsioUaOYPHly5Wt5eXnMnj2bcePGMXv2bPLz85u0kCIiIs2hzlC85ppreOWVV6q89vLLLzNq1Cg++eQTRo0axcsvv9xkBRQREWkudYbi8OHDiYqKqvLamjVrmDp1KgBTp07l008/bZrSiYiINCNTQ046e/YscXFxAMTFxZGTk1Ov88rKyti9e3dDbonFYmnwuTWxmsLJyMyo8trZGAOFmUc9do8f83QdvMUX6uELdQDfqIcv1AGq1yMlJcWLpZGGalAoNpTZbG7wN8ru3bs9+k12IreExARnlddi28bSMbqTx+7xY56ug7f4Qj18oQ7gG/XwhTqA79TD3zVo9GlsbCzZ2dkAZGdnExMT49FCiYiIeEODQnHMmDEsW7YMgGXLlnHllVd6tFAiIiLeUGco3n333Vx//fUcPnyY0aNH85///IfbbruNL7/8knHjxvHll19y2223NUdZRUREmlSdzxSfe+65Gl9/8803PV4YERERb9KKNiIiIm4KRRERETeFooiIiJtCUURExE2hKCIi4qZQFBERcVMoioiIuCkURURE3BSKIiIibgpFERERN4WiiIiIm0JRRETETaEoIiLiplAUERFxUyiKiIi4KRRFRETcFIoiIiJuCkURERE3haKIiIibQlFERMRNoSgiIuKmUBQREXFTKIqIiLgpFEVERNwUiiIiIm4KRRERETeFooiIiJtCUURExE2hKCIi4qZQFBERcVMoioiIuCkURURE3BSKIiIibgpFERERN4WiiIiIm0JRRETETaEoIiLiplAUERFxUyiKiIi4KRRFRETcFIoiIiJuCkURERE3haKIiIibqTEnv/HGG/znP//BYDCQnJzM008/jdls9lTZREREmlWDW4pZWVm89dZbvP/++6xYsQK73c7KlSs9WTYREZFm1ajuU7vdjsViwWazYbFYiIuL81S5REREmp3B6XQ6G3rym2++yV/+8hfMZjOXXHIJzz777HmP37ZtW4O7Vy0WC8HBwQ06tyZWUzif7jpV5bWr+rQnyFbksXv8mKfr4C2+UA9fqAP4Rj18oQ5QvR4pKSleLI00VIOfKebn57NmzRrWrFlDREQEd955J+np6aSlpdV6jtlsbvA3yu7duz36TXYit4TEhKq/D8S2jaVjdCeP3ePHPF0Hb/GFevhCHcA36uELdQDfqYe/a3D36YYNG+jYsSMxMTEEBgYybtw4tm7d6smyiYiINKsGh2L79u357rvvKC0txel08tVXX9GjRw9Plk1ERKRZNbj7dODAgYwfP55p06ZhMplISUnhuuuu82TZREREmlWj5inOnTuXuXPneqosIiIiXqUVbURERNwUiiIiIm4KRRERETeFooiIiJtCUURExE2hKCIi4qZQFBERcVMoioiIuCkURURE3BSKIiIibgpFERERN4WiiIiIm0JRRETETaEoIiLiplAUERFxUyiKiIi4KRRFRETcFIoiIiJuCkURERE3haKIiIibQlFERMRNoSgiIuKmUBQREXFT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jhkzhpycHJ566ineeOONytfnzJnDvHnzKv/+hz/8gddff52srCzmzp1b47VmzZrFjh07qt3/xIkTte6sAfDqq68yYcIEJk+ezJQpU1i2bFm9yi4iLZ9CUZpEcHAw6enprFixgsDAQN55553zHr9w4cILuv7gwYPZunUrAA6Hg9zcXA4cOFD5/tatWxkyZAjx8fE1bvHT0PsvXryYDRs2sGTJElasWMG//vUvLfgs4kMUitLkhg0bxtGjRwFIT09nxowZpKWl8eijj2K323nmmWewWCykpaVxzz33APDLX/6Sa665hkmTJvHuu+9Wu+aQIUMqQ3H//v307NmTsLAw8vPzsVqtHDx4kJSUlCqtPovFwm9/+1tSU1O56667sFgsADXe32638/DDDzNp0iRuueWWymMXLlzIY489VrluZ0REROWuCGPGjOG5557juuuu45prruH775umK6gAAAMCSURBVL9nzpw5XHXVVSxevLipvrwi4kEKRWlSNpuN9evXk5yczMGDB1m1ahWLFy8mPT0do9HI8uXLuffeeytbls8++ywATz31FEuXLuX999/n7bffrrbTQHx8PCaTiVOnTrF161YGDRrEgAED2LZtGzt27KBXr16V68tWWLx4McHBwSxfvpw77rijcs3Zmu5/9OhRfvrTn7Jy5UoiIiJYvXo1RUVFFBcX07lz51rrm5CQwLvvvsuwYcN44IEHeP7553nvvffq1VoVEe9rUcu8ie+oaHmBq6U4Y8YM3nvvPXbu3MmMGTMqj4mNja3x/Lfffpv//ve/gGvX9qNHj1ZbB7OiC3Xr1q3Mnj2brKwstmzZQkREBIMHD652zW+++YZZs2YB0Lt3b3r16lVr+Tt27EhKSgrg2r3h5MmTQN07Hlx55ZUAJCcnU1JSUtmiNJvNFBQUEBkZed7zRcS7FIrSJCpaXudyOp1MmzatsouyNhs3bmTDhg28++67hISEMGvWLMrKyqodV9GFum/fPnr27ElCQgKvvfYa4eHhTJ8+vcZr13ctzXNbmQEBAZSVlREeHk5ISAjHjx+nU6dONZ4XGBgIgNForHINo9FYue6qiLRc6j6VZjNq1ChWr17N2bNnAcjLy6tsgZlMJsrLywEoLCwkKiqKkJAQDh48yLZt22q83pAhQ/jss8+IiooiICCANm3aUFhYyLZt2xg0aFC144cPH87y5csB2LdvH3v37q1879z7n89tt93GE088QVFREQBFRUU1PvMUkdZJLUVpNklJSdx1113ccsstOBwOAgMDefTRR+nQoQMzZ85kypQp9OnTh6effpp33nmH1NRUunXrVmPAgauLMjc3t8r0ieTkZIqLi4mJial2/A033MCDDz5IamoqKSkpDBgwoPK9c+//29/+ttY63HjjjZSUlDB9+nQCAwMxmUy1boUkIq2PdskQERFxU/epiIiIm0JRRETETaEoIiLiplAUERFxUyiKiIi4KRRFRETcFIoiIiJu/x9mCZjkkd3JeQAAAABJRU5ErkJggg==">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[19]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">5</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span> <span class="s2">"SepalLengthCm"</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">add_legend</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[20]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">size</span><span class="o">=</span> <span class="mi">5</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span> <span class="s2">"SepalWidthCm"</span><span class="p">)</span>\
   <span class="o">.</span><span class="n">add_legend</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Mean,-Median,-Std-dev">Mean, Median, Std-dev<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Mean,-Median,-Std-dev">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[21]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="s2">"Mean for setosa's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">iris_setosa</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Mean for versicolor's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">iris_versicolor</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Mean for virginica's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">iris_virginica</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Mean for setosa's petal length is 1.464
Mean for versicolor's petal length is 4.26
Mean for virginica's petal length is 5.5520000000000005
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[22]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="s2">"Std-dev for setosa's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">iris_setosa</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Std-dev for versicolor's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">iris_versicolor</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Std-dev for virginica's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">iris_virginica</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Std-dev for setosa's petal length is 0.17176728442867112
Std-dev for versicolor's petal length is 0.4651881339845203
Std-dev for virginica's petal length is 0.546347874526844
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[23]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="s2">"Median for setosa's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">median</span><span class="p">(</span><span class="n">iris_setosa</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Median for versicolor's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">median</span><span class="p">(</span><span class="n">iris_versicolor</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Median for virginica's petal length is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">median</span><span class="p">(</span><span class="n">iris_virginica</span><span class="p">[</span><span class="s1">'PetalLengthCm'</span><span class="p">])))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Median for setosa's petal length is 1.5
Median for versicolor's petal length is 4.35
Median for virginica's petal length is 5.55
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Box-Plot">Box Plot<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Box-Plot">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[24]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">5</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">boxplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'PetalLengthCm'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span> <span class="n">iris</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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nOccC1zMbNUB69ev15gxY5SSkqL4+HhJ//3J6ccff9Qf/vAHJSYmKi4uThs2bDhq/+3bt2v48OFKTExUfHy8duzYIUnKyMjwbZ85c6YqKyv16KOP6sCBA0pMTFRKSookafHixYqLi1NcXJyWLFkiSSorK9NNN92khIQExcXFKTMzU5L05JNPatiwYYqLi9N9990nujwOO9XzeMSIEdq+fbvv6zFjxig3N1dlZWWaNm2ahg0bpmuuuUZvv/22JCk9PV3Jycm65ZZbdOONNx5zjP79+6uwsFCStHz5csXHxyshIUFTpkyRJO3atUtJSUmKj49XUlKSdu/efVS2vLw8jRw5UvHx8ZowYYJ++eUXX8bHHntM1113ndLS0k7XW4k6wtY5n56errlz50qSpk6dqgULFmjMmDF69NFHVVhYqLFjx2rIkCGaOXOm+vXr5zu/D499OFdycrI8Ho9SUlJ836vHjBmjzz//XJL0/vvva8iQIUpISFBSUpIkafPmzRo9erSuueYajR49Wl9//bWNty74GASs7t27G2OMWbdunenWrZv57rvvjvq9RYsWmaefftoYY8zBgwdNSUnJUceZO3euycjIMMYY4/V6zf79+01+fr65+eabTXl5uTHGmFmzZpk33nij2rGNMebzzz83cXFxZt++faa0tNTExsaaL774wmRnZ5sZM2b4XldcXGyMMebnn3/2bbvrrrvMO++8c+pvBOq003UeL1682Dz++OPGGGP27NljBg4caIwxZuHChWb58uXGGGN++eUXM3DgQLNv3z7z+uuvmyuuuMJ3Th5rjH79+pmCggKzbds2M3DgQFNQUGCM+e+5fPPNN5v09HRjjDGvvvqqufXWW40xxqSmppoXXnjBGGNMXFycWb9+vTHGmD//+c9m3rx5xhhjrrvuOjNr1qxTePdQF9k+519//XUzZ84cY4wx99xzj7npppvMwYMHjTHGzJkzxzz77LPGGGPee+89Ex0d7Tunj8x18cUXm++//95UVlaakSNHmk8++cQYc+ic3bx5sykoKDB9+/b1ZT/896GkpMRUVFQYY4z56KOPzO23337qb1g9wMxWHXHhhReqXbt2v7o9PT1dTzzxhLZt26bGjRsf9Zru3bvrueee0/PPP6/du3erYcOGWrt2rXJzc30zW2vXrtXOnTuP2nfjxo26+uqrFRkZqUaN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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[25]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">5</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">boxplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'PetalWidthCm'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span> <span class="n">iris</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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9ufrKGQ+4uTJk+rWrZtSU1M1btw4HTlyRLGxse4fUP369dPx48fVo0cP/fSnP1VMTIyOHj2qYcOGadu2bSotLZUknTt3zv1bUkBAgGpqaiRd/Mbx9ttv66uvvlJlZaXefvttDR48WCUlJWrfvr1SUlI0ZcoUffjhh+7y1bVrV124cEHbtm2z86agVfHmGJak0aNH65VXXlF5ebm+//3vS5Luuusuvfrqq+4fRB9++KHX+7jcsGHDlJeXp7Nnz0q6+PUgXbzu5s0335QkbdmyRbfffnuD13Xs2FGdOnVyj4plZ2dryJAhN+JtQRvWlGMA2RB7AAAE4ElEQVTek9tvv125ubmSLo4eX7qe8XoNHDhQ7733nvusyaWvh/LyckVEREiS3njjjW+1bV/En1r4iHfffVerV69WQECAQkJC9NxzzzVaJycnR3/84x8VEBCgm266SY888oi6dOmimTNn6oEHHlB9fb3atWun+fPnq3v37kpNTVVycrL69OmjZcuW6d5779WECRMkSePHj1efPn303//93/rVr34lPz8/BQQEaOHCherUqZP7dGX37t3d31QAT7w5hiUpLi5OzzzzjB5++GH3socfflhLlixRcnKyjDHq3r27Vq1add376NWrlx566CGlpaXJz89Pffr00bPPPqunnnpKTz75pFavXq2wsDAtXbq00bafe+45LViwQF999ZV69OhxxXWAyzXlmPdk+vTpmjVrlnJzczVkyBDdfPPNVzwdei1hYWHKzMzUjBkzVF9fr27dumnNmjX62c9+pieeeEJr1qzRHXfccd3b9VVMewEAgA+prq52/5J88OBBLVy4UNnZ2bZj+TxGyAAA8CHFxcWaOXOm+6zH008/bTsSxAgZAACAdVzUDwAAYBmFDAAAwDIKGQAAgGUUMgCt3ksvvaTRo0crKSlJKSkpev/992/Yth988EGdP3/+hm0PAK6Ei/oBtGoHDx7Us88+q/Xr1yswMFBlZWWqqalxT0wJAK0B014AaNU+//xzde3a1X2bl0v3mYyJidGoUaO0b98+SdKyZct06623qqysTAsWLFBxcbEk6cknn9Ttt9+uCxcuaPHixTp8+LCki5NnxsXFKSYmRq+99prCwsKUnZ2t9evXq6amRv3799eCBQskSfPmzdPhw4flcrk0btw43X///c38LgBo7ShkAFq1O++8U7/73e8UFxenYcOGKSEhwX0T79DQUL322mvavHmzlixZolWrVumZZ55Renq6Bg8erOLiYk2ZMkW5ubl68cUXFRoaqi1btkhSo9vJfPLJJ8rNzdWGDRvUrl07LVy4UFu2bFFUVJRKSkq0detWSeL0JoBvhUIGoFXr0KGDNm3apP3792vfvn167LHHNHv2bElSYmKipIv3+rt0q6I///nPKioqcr++oqJCFRUV2rt3r5YvX+5e3rlz5wb72bt3rw4fPqzx48dLkr7++mt169ZNd999t44fP66nn35aI0aM0F133eXo5wugbaKQAWj1/P39NXToUA0dOlTR0dHavHnzVdetr6/XH/7wBwUHBzdYboyRy+W66uuMMRo7dqy77F0uOztbf/rTn/Qf//Efys3N5T6VAK4bf2UJoFX79NNPdezYMffjgoICffe735Uk5ebmSpJycnI0cOBASdJdd92lV199tcH60sVTn5cv/+Ypy2HDhmnbtm0qLS2VJJ07d04nT55UWVmZjDGKi4vTo48+qg8//PDGf5IA2jxGyAC0apWVlVq8eLHOnz8vf39/3XrrrcrMzNSuXbtUXV2tCRMmqL6+3n06ct68ecrMzFRSUpLq6uo0ePBgZWZmatq0acrMzFRiYqL8/Pw0ffp0jRw50r2fqKgozZw5Uw888ID7HoDz589XcHCw5s6dq/r6eknSrFmzrLwPAFo3pr0A0CZd/teRANDSccoSAADAMkbIAAAALGOEDAAAwDIKGQAAgGUUMgAAAMsoZAAAAJZRyAAAACz7/1XHo+iCLnKzAAAAAElFTkSuQmCC">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Violin-Plot">Violin Plot<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Violin-Plot">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[26]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># A violin plot combines the benefits of the previous two plots </span>
<span class="c1">#and simplifies them</span>

<span class="c1"># Denser regions of the data are fatter, and sparser ones thinner </span>
<span class="c1">#in a violin plot</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[27]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">5</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'SepalLengthCm'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span> <span class="n">iris</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlsAAAFACAYAAACLPLm0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADl0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uIDMuMC4yLCBodHRwOi8vbWF0cGxvdGxpYi5vcmcvOIA7rQAAIABJREFUeJzs3XlcVPX+x/HXmRn2VRBFcAFccUu95q3UFk2tzFxarCzbrLzVNe81r3nLpTS3rLT8lVmmaWa5lSZXU9HKXMl9wX1DVBAUFRhmmHPO7w+UyhRQmTkzw+f5ePhoGGbO9/0ImPnMd1V0XdcRQgghhBBOYTI6gBBCCCGEN5NiSwghhBDCiaTYEkIIIYRwIim2hBBCCCGcSIotIYQQQggnkmJLCCGEEMKJpNgSQgghhHAiKbaEEEIIIZxIii0hhBBCCCeyGB3gj7Zu3Yqfn5/RMYQQQgghSmWz2WjWrFmpj3OrYsvPz4/ExESjYwghhBBClCo1NbVMj5NhRCGEEEIIJ5JiSwghhBDCiaTYEkIIIYRwIim2hBBCCCGcSIotIYQQQggnkmJLCCGEEMKJpNgSQgghhHAiKbaEEEIIIZxIii0hhBBCCCeSYksIIYQQwomk2BJCCCE8WH5+Pr2f6s0jPR8hLS3N6DjiCqTYEkIIITxYWloaRw4f4dTJU+zbt8/oOOIKpNgSQgghPNi5c+eKb+fk5BiYRFyNFFtCCCGEBzt79uwVbwv3IcWWEEII4cGysrIAUHwUsrOzDU4jrsRidAAhhBBCXL/Tp0+j+CrowTqZmZlGxxFXID1bQgghhAc7efIkBIIWqJF+It3oOOIKpNgSQgghPNjx9ONogRoEQWZGJqqqGh1JXEaKLSGEEMJDORwOTqSfQA/VIaTo65MnTxodS1xGii0hhBDCQ6Wnpxf1ZIVQVHABhw8fNjiVuJwUW0IIIYSHOnDgAAB6mA6hRfcdOnTIwETiSmQ1ohBCCOGh9u3bh2JSIAwwgRKqsHfvXqNjictIz5YQQgjhoXbt2oUerhe/m6vhKjt37UTXdWODiT+RYksIIYTwQHa7nd2pu9Eqa7/fWRlyzuaQni5bQLgTKbaEEEIID5Samoqj0IFe+fdeLD2q6PbWrVuNiiWuQIotIYQQwgNt3LgRFCDqD3eGgCnQVPQ94Tak2BJCCCE80Lr16yAS8P3DnQo4qjjYmLIRh8NhVDRxGSm2hBBCCA+TkZHBgf0H0Kppf/meXk0nPy+fbdu2GZBMXIkUW0IIIYSH+fnnnwHQY6+w6jAaFItS/BhhPCm2hBBCCA+TvDIZJVyBkCt80wJatMaqn1bJUKKbkGJLCCGE8CBpaWmk7k5FrXH1A6e1mhrncs7x22+/uTCZuBoptoQQQggP8uOPPwKg1yxh49JqoPgpLF261EWpREmk2BJCCCE8hMPhYHHSYvRoHQJLeKAJ1BoqP//yMzk5OS7LJ67MqcXW9OnT6dy5M/fffz///ve/sdlszmxOCCGE8Grr16/nTPYZtIS/rkK8nJ6gozpU6d1yA04rtjIyMpgxYwbz589n8eLFqKpKUlKSs5oTQgghvN78BfNRAhWoVoYHhwGVYcF3C1DVq8/vEs7n1J4tVVUpKCjA4XBQUFBAlSpVnNmcEEII4bWOHj3Kpt82oSaoZX731uponDp5ig0bNjg3nCiR04qtqlWr8uyzz3LXXXfRpk0bgoODadOmjbOaE0IIIbza/PnzUcwKenwJE+Mvo8fqKIEKc+bOcWIyURqLsy587tw5kpOTSU5OJiQkhFdffZWFCxfStWvXqz7HZrORmprqrEhCCCGER8rNzWVx0uKi7R78r+GJJlBrq2zetJnly5dTvXp1p2UUV+e0Ymvt2rVUr16diIgIADp27MiWLVtKLLb8/PxITEx0ViQhhBDCI82cORNHoQO9Xtl7tS7RE3SUVIWNGzfSoUMHJ6SruMraQeS0YcSYmBi2bduG1WpF13XWrVtH7dq1ndWcEEII4ZXsdnvRMGA0RZPer5UvqHEqK1as4PTp0+UdT5SB04qtm266iU6dOtG9e3e6dOmCpmn07NnTWc0JIYQQXmn58uWcyzmHWu/6VxTqdXVUTWX+/PnlmEyUlaLr+rX3STpJamqqDCMKIYQQF2maxpO9n+T4+eM47naAcuXHKUeKvqHHXf0t3bTORNDZIBbMX0BgYEk7ooqyKmvdIjvICyGEEG5qw4YNpB1LK+rVukqhBUXF1qWC62q0ehr5efmy56UBpNgSQggh3NScOXNQAhX0GuUwCBUJVIY5c+fIJqcuJsWWEEII4YYOHz7Mpk3XtolpadS6KhmnMli7dm35XFCUiRRbQgghhBsq3sQ0oRynVseAEqQwd97c8rumKJUUW0IIIYSbycvL48dlPxZtYupXjhc2gRqvsnXLVo4cOVKOFxYlkWJLCCGEcDPLli3DVmBDr13+Gwbo8TqKSWHRokXlfm1xZVJsCSGEEG7mh8U/oFRSIMIJF/cHNUZl6Y9LsdvtTmhAXE6KLSGEEMKNHDhwgAP7D6DWct6KQT1eJ/dCrkyUdxEptoQQQgg3snz5cjCBXtOJe45XBSVQYdmyZc5rQxSTYksIIYRwE7quszx5OXpVvXwnxl9OATVWZf369eTm5jqxIQFSbAkhhBBuIzU1lazMLPTqzj9JT6+h43A4ZCjRBaTYEkIIIdzEmjVrQAE9xgXHFkeAEqAUtSmcSootIYQQwk38uuZXqAz4uqAxBdRolXXr1+FwOFzQYMUlxZYQQgjhBrKzszl86DBatOayNvVonQJrAampqS5rsyKSYksIIYRwA5s3bwYomhzvKlWK/pOSkuK6NisgKbaEEEIIN7B161YUXwXCXdioLygRClu3bXVhoxWPFFtCCCGEG9i2fRtahAaKa9tVI1R2794t87acSIotIYQQwmC5ubkcO3oMPdKFQ4iXVAa7zc7Bgwdd33YFIcWWEEIIYbB9+/YBoEe4vti61OaePXtc3nZFIcWWEEIIYbC9e/cW3ahkQOOBYPIz/Z5BlDsptoQQQgiD7d+/H1OQyblH9FyNAmqYyr79+wxovGKQYksIIYQw2L79+1BDVcPa18N1Dh06JJPknUSKLSGEEMJANpuN42nH0cMNmBx/STg4Ch0cP37cuAxeTIotIYTXUlWVb775hi+//JK8vDyj4whxRUePHkXTNPQw44qtS23LikTnkGJLCOG19u/fz8cff8zUqVNZu3at0XGEuKLiAifMwBAhgAKHDh0yMIT3kmJLCOG1srKyrnhbCHdy8OBBFLNSVPAYxQxKqCI9W04ixZYQwmtlZGQU387MzDQwiRBXd+DAgaJhPBfvHH85NUxl737Z/sEZpNgSQnitkydP4mOGGiE6J06cMDqOEH+h6zp79+9FC9OMjgLhkH06m3PnzhmdxOtIsSWE8FppaWlUC9SoFlDI8WNHjY4jxF9kZmaSdyHPtYdPX8Wl1ZAHDhwwOIn3kWJLCOG1Dh86QLVABzFBKuknT2Gz2YyOJMSfXDoix4hjev7i4u71cmxP+ZNiSwjhlS5cuMCpjNPUClapGayiaZqstBJuZ/fu3UXvxEauRLzEF5QQpSiTKFdSbAkhvFJqaioA8aEOEsKKdsWWNxHhbnbs3FE0hGg2OkkRtZLK9h3b0XU36GnzIlJsCSG80o4dO1AUqBPmINJPJ8K/6D4h3IXNZmNP6h60ym4wOf6SKDiXc052ki9nUmwJIbzSbykpJISqBFhAUSAx3Mam31LQNDd6YxMVWmpqKg6HAz3KfXqR9MpFWbZu3WpwEu8ixZYQwuvk5OSQmppKkwh78X1NIh2cO39BJv8Kt5GSklK0t1aU0Un+IARMgaaibKLcSLElhPA6a9euRdN1/hZVWHxfs8qFmBT45ZdfDEwmxO82bNwAkYCP0Un+QAFHFQcpv6XgcDiMTuM1pNgSQnid5cuXUSUQ4kLU4vuCfXQaRRSSvGK5DCUKw2VmZrJv7z60au73u6hX08nLzZM5juVIii0hhFfJyMhg8+YttK5qRbns+JM20XYyMk/LfBRhuF9//RUAPcZ95msViwbFrLB69Wqjk3gNKbaEEF5l0aJFKOjcEWP/y/durmInyFfh+++/NyCZEL9LXpmMEqpAqNFJrsACWlWN5FXJqKpa+uNFqaTYEkJ4jYKCAhYt/J5mkYVUDvjr8IyvGe6ItvLLL79w6tQpAxIKAadOnWLH9h2oNdy3kNFr6pzNPiu9wOVEii0hhNdISkri3PkLdI6zXvUxnWoWoOga3377rQuTCfG7H3/8ESgqaNyVHqOj+CosWbLE6CheQYotIYRXsNlsfDVzBvXCVeqHX73HINJfp001G4sWLSQzM9OFCYUAVVVZ9MMiqAoEG52mBGZQa6isWrWKCxcuGJ3G40mxJYTwCgsWLCD7zFkerp1f6mO7xRegqQ6mT5/u/GBC/MHGjRs5nXkaLd79ViFeTk/QKSwslN6tciDFlhDC4+Xk5DDjy+k0jSwksVLpewNFBWi0jy3gf0lJHDx40AUJhSjy7bffogQq6LHuO4RYLByoDHPmzpE9t26QFFtCCI/32WefYbVa6VW39F6tS3okFBDgAxMnTpBDd4VL7N+/n82bN6PWVj3m3Vetp5KZkSmbAd8gD/lxCyHEle3atYvFi3+gY40CYoPLPjQT7KPzSEIuW7duY/ny5U5MKESRGTNmoPgq6AkeVNzHgBKiMGPmDNkM+AY4rdg6dOgQXbt2Lf7XokULmR8hhChXhYWFjBs7hkp+8GDC1VcgXs1dsXZqh6lM+uhDcnJynJBQiCKHDx/m559/LurV8jU6zTVQQG2gcujgIdasWWN0Go/ltGIrISGBhQsXsnDhQhYsWEBAQAAdOnRwVnNCiApo5syZHD5ylGcaXCDAcu3PNynQJzGXCxfOM3HixPIPKMRFn0/9HMVHQa/rQb1aF+k1dZQQhc8+/0w2Ob1OLhlGXLduHTVq1CA2NtYVzQkhKoC9e/cyY8YMbou20bzy9U/erRGs0S3OSnJyMj/99FP5BRTiol27drH6l9Wo9VTwMzrNdTCB2kjlyOEjrFixwug0HsklxVZSUhL333+/K5oSQlQABQUFjBzxNmG+Gk/VL3n4cPUJX1afKHncpktcAQmhGuPfHUdWVlZ5RhUVnK7rTPq/SSgBCno9z+vVukSvrqNEKHw65VMKCgqMjuNxrqPj/drY7XZWrlzJgAEDSn2szWYjNTXV2ZGEEB5u9tdfc/RYGoOaXyDIp+Q3sJ8vFlptr3BW4iUWE/RtdIE3N5p48403+Ge/fphMsn5I3LiNGzeya+cutJaaC95xnUgBR1MHWT9l8eGHH9KlSxejE3kUp//of/nlFxo1akTlypVLfayfnx+JiYnOjiSE8GBr1qzhp59/5p6aBTSJLL+9f2KCNHrVzWNaaio7d+6kZ8+e5XZtUTHl5+cz+L+DoRLocZ7bq1UsCrTqGj/++CNPPvkk1apVMzqR4craQeT0j25JSUl07tzZ2c0IISqArKwsxoweRVyoRs861776sDTtYu38LcrOp5Mns3fv3nK/vqhYvvjiC85kn0FtpoJidJryod+k49AdfDDhA9mf7ho4tdiyWq2sXbuWjh07OrMZIUQFoKoqI0a8TUFeLi81uoCPE169FAX6JOYT6qPy1vBh5OeXfZNUIf5o//79zJs3Dy1Bg9IHdm6MDliB86AcVIq+dpZAUBuqrF+3ntWrVzuxIe/i1GIrICCADRs2EBIS4sxmhBAVwNdff82WLVvpXT+XmCDnba4Y4qvzj0YXOHHiBB988IHT2hHey+FwMGbsGHRfHb2J83t/lEMKSq6CYlMwbTahHHJuN5peV0cJV3jvg/fkkOoykhmgQgi3t3PnTqZOncotVe3cXu3qE93LS2IlB13jrPz4448sW7bM6e0J7zJnzhz279uPo5nDJRuYKieUEr8udyZw/M3B2TNn+fjjj53blpcoU7G1atUqunXrRqtWrWjRogXNmzenRYsWzs4mhBDk5uby9lvDifTXeDYxD8VFc1+6xRdQL1zl/ffGc+LECdc0Kjze0aNHmTp1atFB09Vd1Ojl+4y6Yt/RCNDqaSQlJZGSkuKCBj1bmYqtUaNGMWbMGDZs2MDmzZvZsmULmzdvdnY2IYTggw/eJzMzk5cbnSfQhUvnzSZ4qVEuOGyMePstHI7yW/kovJPD4eCdUe/gMDnQWmheMyn+avRGOkqowugxo8nNzTU6jlsrU7EVHR1NvXr1UFz1kVIIIYDk5GSWL19B93grdcJcf0xI5QCNZ+pfYNfuVGbNmuXy9oVn+eabb9iTuqdo9aG/0WlcwAyOlg6ysrL46KOPjE7j1sr0OXHgwIE8//zztGrVCl/f3wegn3nmGacFE0JUbFlZWbw3/l3qhKk8EGfcjtW3RheyJcvGtGnTuOWWW6hfv75hWYT7OnjwYNHwYXUdvUYF2hIhErT6GkuWLOH222+ndevWRidyS2Xq2ZowYQIBAQHYbDby8vKK/wkhhDPous6748ZhL7DSt1EuZoOX8jxV30qYr8Y7I0dgtzt/gr7wLHa7nbdHvI3mq1WI4cPL6Y2KVieOGTuGnJwco+O4pTL1bOXk5PDFF184O4sQQgCwbNky1q1fzxP18okOdN42D2UV5KPzXIMLjN96jJkzZ/Lcc88ZHUm4kenTp3P40GHU1h560PSNMoGjlYPzyecZP348I0aMkGlHlynT58XbbruNX3/91dlZhBCCnJwcPpw4gbrhKh1r2IyOU6xZZQeto2189dVMDh06ZHQc4SZ27NjBrFmz0OI1iDE6jYHCijY7/eWXX1i+fLnRadxOmYqtWbNm0adPH5o2bSpbPwghnOqTTz4hPy+P5xrkYnKzD8dP1LMSaNZ4773xclSJoKCggJHvjITAomNsKjq9vg6V4f0P3uf06dNGx3ErZRpG3LJli7NzCCEEu3btYsmSJdxfq4DqwcYPH14uxFfnkdp5TN2xk2XLltGpUyejIwkDffrpp5w8cRL1DhV8jE7jBhRQb1axLrcydtxY3h33rgwnXlRiz9bq1atZunTpX+7/4YcfWLNmjdNCCSEqHk3TmDjhA8L9oVt8+R8yXV7uiLGTEKYx+ZOP5ezECmzbtm3Mnz8frY4GVYxO40aCQW2ssnHDRpYsWWJ0GrdRYrH10Ucf0apVq7/cf8stt/Dhhx86LZQQouJJTk5mz959PJKQh78LNy+9ViYFnqybS/aZs3zzzTdGxxEGsNlsjBk7BiVYccnZh55Gr6NDFHz40YdkZ2cbHcctlFhsWa1WIiIi/nJ/VFSUfKITQpSbwsJCPpvyKbVCNNq44OzDG1U3XKVVFTvfzJ7NmTNnjI4jXGzGjBmkH0/H0cJRxsk4FYwC6t9UrAVWJk6caHQat1BisWW32694REVhYSE2m/usEhJCeLbFixdzKiOTnnXy3G5S/NU8UseK3W7jq6++MjqKcKG0tDS+/vprtFoaVDU6jRsLAbWByk8//SRnJ1JKsdWhQweGDBnyp16s/Px8hg0bRocOHZweTgjh/Ww2GzO+nE6DSipNIjzn/MHoQI221Wws/P47MjMzjY4jXEDXdSZOnIhm1tCbyvBhafT6OkqIwgcffEBhYaHRcQxVYrHVv39/IiMjueuuu+jRowfdu3enXbt2RERE0L9/f1dlFEJ4scWLF5N95iw94vPxtIVL3eIL0FSV2bNnGx1FuEBKSgobN25ETawgZx/eKDM4bnJw/PhxFi1aZHQaQ5U42myxWHjttdd45ZVXOHr0KAC1atXC319+y4QQN85utzPrq5nUD3fQ0IN6tS6JCtBoU83GokUL6dWrF5UrVzY6knASTdP4ZPInRZPi60ivVplFA1Vg+pfTuffeewkMDDQ6kSHKtKmpv78/eXl57Nu3j6VLl/L999/z/fffOzubEMLL/fjjj2Rln3HrrR5K0yWuANXhYM6cOUZHEU60evVqDh44iNpQLeM7pwCKJss3VjmXc44FCxYYncYwZfqVGThwIOPGjWPTpk3s2LGDHTt2sHPnTmdnE0J4MYfDwayvZpIQqtHYA3u1LokO1Ph7FTvff/cd58+fNzqOcJLZ38wu6tWqKb1a1ywSqApz582tsHO3yrRodefOnfzvf/+TnWCFEOXmp59+4sTJU/Rv6nlztS73QLyVdet9mT9/Ps8884zRcUQ52717N7t37UZrpoGH/64aRa2ncnb1WVatWkXHjh2NjuNyZerZqlu3rpxzJIQoN5qmMXPGl8QG67SI8vxPujWCNVpULmTe3DmyB6EXWrp0KYpFQY+TXq3rVhWUEIUlSyvmrvIl9mz17dsXgLy8PDp37kzTpk3x8fn9AKjJkyc7N50QwiutWbOGw0eO0rdRvsfsq1WaB+KtDE/x4fvvv+fxxx83Oo4oJw6Hg5WrVqJGu/H5h4UQEBBA586dSUpKIr/QDQt+BdTqKps3bebMmTNX3DDdm5VYbD377LOuyiGEqCB0XefLL6dTNVDn1qruv1t8WdUJU2kc4eCb2V/To0cPWbXtJfbs2cP5c+fRE924V6sQOnfuTL9+/QCYu2SuwYGuTK+uo6fqbNiwgXvvvdfoOC5V4jBiq1ataNWqFT///HPx7T/eJ4QQ12rt2rXs27efB+LyMXvZqq7uCfnknDsvq7W9yI4dO4puRBmbo0Q+kJSUxIcffkhSUpL79sCFgeKrVMgFdmV6qVu7du1f7vvll1/KPYwQwrtpmsYXUz+naiC0ifaeXq1L6ocX9W59PesrmbvlJVJTUzEFm9x7E1OforOM582bh9Vqdd9iSwGtksauXbuMTuJyJQ4jfv3118yePZu0tDS6dOlSfH9eXh4tWrRwejghhHf56aef2H/gIH0b5Xldr9YlD9XOZ3iKhXnz5tG7d2+j44gbdCrjFGqQanQMr6EH62RkZBgdw+VKLLa6dOnC7bffzvvvv8+AAQOK7w8KCiI8PNzp4YQQ3sPhcPD5Z1OoHqxzmxf2al1SJ0ylReVCvp41iwceeEBeKz3c6dOn0YPceL6WpwmAvNw8bDYbfn5+RqdxmRI/W4aEhFC9enWGDh1KUFBQ8T+gwm5MJoS4PgsXLuR4+gl61sn1mhWIV9OzTj4FBVa+/PJLo6OIG6SqsmN8ubr4/1JVK1ZvYZk2Ne3RowcnT54kNDQUgPPnzxMVFUVkZCQjRoygcePGTg0phPBsFy5cYNoXU2lYyUGzSM/dLb6sYoM17oyx8f3339GtWzdq1apldCRxnXx9faFi1QXOdfH/ZUXq1YIy1utt2rRhypQpbNiwgQ0bNvDZZ59x7733MmzYMN566y1nZxRCeLhp06aRm5tLr3qev1t8WT1Y24qvSWfSpI/QdRmG8lRhYWEotgryS+sKNggIDMBsNhudxKXKVGzt3LmTtm3bFn/dpk0bUlJSaNasGXa79869EELcuEOHDrFgwQLujLFRK6TidBGE+ep0j8tjw4aNV1zRLTxDQnwC5gsVqzBwJuWcQnxcvNExXK5MxVZ4eDhTpkwhPT2d9PR0PvvsM8LCwlBVFZNJBrOFEFem6zoTPnifQIvOw7WtBrQPZ20mTuSZST7ui6s7mDrWsBEbrPPhxAnYbDbXNi7KRUJCAlq+Bq7/9fU+GpjOmahdu7bRSVyuTJXS+PHjycjI4OWXX+all17i5MmTvPfee6iqyoQJE5ydUQjhoZYtW8bWbdt5JCGXEF/XD6Ulp/uSYTVzvtDEtD1BJKf7urR9iwmeqpfLyVMZzJw506Vti/LRqlUrAJSTMpR4w7JBt+vcfPPNRidxuTJNkI+IiGDIkCFX/J5M/BRCXMn58+f5v0kfUTtM5c5YY6YbbDnt+5ev767u2iwNIxzcFm1j9tez6NixIzVr1nRp++LGJCQkEFUlisz0TPQEmXt3I5R0BbPFXFzAViRlKrYOHz7MF198QXp6Og7H7yuJZsyY4bRgQgjPNnnyZM6fP8/AVnmGbfVgU0v+2lV61bWyLduf8ePfZeLED1EqyioBL6AoCvd0uqeoZzIXCDY6kYdygPmombZt2hIYGGh0GpcrU7H16quv8uijj/Lwww/LHC0hRKm2b9/O4sWLua9mQYWaFH81YX46PWvn8sXWbSxdurTCHcLr6bp168asr2ehHdDQm0nv1vVQjirodp2HH37Y6CiGKFOxZbFYePzxx52dRQjhBQoLCxn/7jgqB0APAybFu6s7Y+2sPuXP/036iFtvvVV2lvcgUVFRtG/XnhWrVuCo74AAoxN5GBXMe8zUa1Cvwu7LWaZuqrvuuotZs2aRmZlJTk5O8T8hhLjct99+y5Gjx+hdLxd/WTFfzKTAsw1yycvNZfLkyUbHEdfoueeew6SbUHa54RDw5X9nbvZ3p+xX0PN1/tH3HxV2CL1MPVvfffcdAFOnTi2+T1EUkpOTnZNKCOGRTp48yZfTp9Eyyk6LKDnS63I1gjXurVnA4v/9j3vvvZebbrrJ6EiijGJiYujRowdz581FTVAhwuhEv9NjdJRTyp++dhvWol6tVre0okWLFkanMUyZiq2VK1c6O4cQwgtMnDgBNAdP1s83Oorb6p5gZX2mP++Nf5cvpk3HYinTy7BwA8888wwrVq4gZ1MOjvYOtzkzUU/Q0ffpUAh6I919Vk3qYNpswqJY6P9qf6PTGKpMvypWq5WPP/64ePuHI0eOsGrVKqcGE0J4ljVr1rB27Tp6xOcR6e8mL/ZuyM8MT9bL5cjRY8ybN8/oOOIaBAcH89q/X0PP0VH2uNFwmELRPLJQ0GvrRV+7ASVNQTmh0Oe5PsTGxhodx1BlKrYGDx6Mj48PW7ZsASA6Olo2MxVCFLPZbHw4cQKxwTqdashO6aVpUbmQZpULmfbFVLKysoyOI65B27ZtubvD3Zh2myDb6DRuLA/MW8wkNkyssCsQ/6hMxdaxY8d4/vnni7u7/f395WBVD5efn8+cOXOYPXu2vNiLG/btt99y8lQGT9bLxeImQyvuTFHgiXr5FNptTJkyxeg44hr9+1//pkqVKlg2WkCOB/4rDcwbzfiZ/Rg2dJgMlVPGYsvX15eCgoLiVQTHjh3D19e1x16I8rVy5UomTZps0/ETAAAgAElEQVTEJ598wty5c42OIzxYVlYWX82cQcsoO40jHKU/QQAQHahxb00rS5cuJTU11eg44hoEBwczfNhwFKuCKcUE0vfwJ8oOBbJg4GsDiYmJMTqOWyhTsfXPf/6TPn36cPLkSQYMGMDTTz/NwIEDnZ1NONHevXtRLL7oQZVJ3bPH6DjCg33++ec4Cu08Vlf21LpWD8QVEOoHkyZ9JKMFHqZx48a89I+XUE4oKHvdZJKUOzgOpn0munXrRocOHYxO4zbK1LfXunVrGjZsyLZt29B1nTfeeIPCQlnW7cm2bNmKI6gKmn8ou3fvprCwEB8fH6NjCQ9z8OBBliz5H/fUKKBqoGZ0HI8TYIEH4/OYtmMnv/76K23btjU6krgGDz/8MLt27WLVT6tQw1WINjqRwc6B5TcL9RPr88orrxidxq2UeXZFpUqVuPPOO7nrrruIiIigZ8+epT7n/Pnz9OvXj3vuuYd77723eIK9MFZGRgbHjh3FERaDGhaL3WZj+/btRscSHujTTycTaFHoGl9gdBSPdWeMnWpBOp9O/uRPZ88K96coCoMGDSI+Ph7LBgtcMDqRgexgWWshLDiMd0a+I1ONLnPdU1nL0uX9zjvv0LZtW5YuXcrChQupXbv29TYnytGlfdPUSrVQQ2NRzD6yl5q4Zjt27GD9+g10rpVHsI8MgV0vswkeqZ3HsbTjLF++3Og44hoFBgYyetRogvyCsKytoBPmNTCvN2MqMDHqnVFERUUZncjtXHexVdqW+7m5uaSkpPDQQw8BRZPsQ0NDr7c5UU50XeeHxYvRg6ug+4eB2YK9UhzLV6wgP182ohRl99lnUwjzg46y1cMNaxlVSEKoxrQvpsoUDQ8UExPDqHdGoeQpmNeboSKNqOugbFEgA/4z8D8V9uzD0pQ4Z2vEiBFXLKp0Xef8+fMlXjgtLY2IiAgGDx7Mnj17aNSoEW+88QaBgYFXfY7NZpNVOU62Y8cOjqelYU+4o/g+R5VECnbvZ+rUqdx9990GphOeYt++fWzduo0n6uXL+YflQFHgwYQ83t2aybRp02Tulgfy8/Oj1+O9mDlzJspWBb1FxejtVQ4omA6Z6NSpE3FxcfIefhUlFlslVailVa8Oh4Pdu3czZMgQbrrpJkaOHMmUKVPo3//qW/b7+fmRmJhYSmRxvXRd57333wf/EByRvw/paiFV0EKrsXzFCvr06UNAgBxpL0o25dNPCfeDdrHSq1VemkY6qB2mkrxiOc8++6zsTeSBEhMTsdvtfPvtt2ihGnodLy+4ToJpm4nWrVszePBgTKaKt8leWYvLEv+au3fvft0BoqOjiY6OLj5o9Z577pHN+wy2YsUK9u3diy3hdrjsj8JWvSU5u39g9uzZPPvsswYlFJ5g165dbNq8mcfr5uMrvVrlRlHggTgrH2zLIDk5mU6dOhkdSVyHvn37knY8jbVr16IGqVDN6EROkgOWDRYSaicwdOjQClloXYsSi62+ffuW+OTJkydf9XtRUVFER0dz6NAhEhISWLdunUyQN9CFCxf4aNIk9OAoHJXr/OX7WkhVHJG1+WrWLDp06ECNGjUMSCk8wddff02QryK9Wk7QonIh1YM1Zn89i44dO5Y6N1a4H7PZzNAhQ3np5Zc4vOEwjrscEGZ0qnJWULTyMDw0nHFjx8loSBmUWGzdaA/HkCFDeO211ygsLKRGjRqMHj36hq4nrt+ECRPIycmhoFFXUK78CcRe8+/47DzOO6NGMemjj2QYQ/xFeno6v/66mi61rPjLr0e5UxS4r6aVKbuPkJKSQqtWrYyOJK5DYGAg48aO4/kXnidnTQ6Odg7wNzpVOVHBvNaMj8OHcWPGycrDMirx5fJG/9ATExNZsGDBDV1D3Ljk5GSWL1+OPbY5WlDlqz5O9w3EWvNWdu/6ia+++oqnn37adSGFR/juu+8wAR08ZAWi1aEQEBBA586dSUpKwuoB+1jdGm3nm4NBzJ83T4otD1alShXGjR3HSy+/hL5WR71DBU8fdtdBSVFQzigMGzmM+vXrG53IY5RpkPXIkSP069eP++67j/bt2xf/E+4vLS2NsePGoYVUpTC2eamPVyvXwRFZm2nTprFp0yYXJBSewmaz8b+kxdxcxU4lP8+Y+JvvUOjcuTP9+vWjc+fO5Dvcf1jOxwTtYqys37CBU6dOGR1H3ID69eszdMhQyC4qUjz9DEVlt4IpzcSLL74oK2avUZmKrcGDB/PYY49hNpuZMWMG3bp1o2vXrs7OJm5Qfn4+gwf/F5tDp6D2XVcdPrycLb4NekA4w4YNJyMjw8kphadYvXo1uXn53OlBc7UCLTpJSUl8+OGHJCUlEWjxjHe7O2LsoOssWbLE6CjiBt1xxx288MILmNJMKKnuX+xfjXJMwbTbxL333stjjz1mdByPU6Z3X5vNxq233gpAbGws//znP1m/fr1Tg4kbo2ka77zzDsfSjpFf+y50v+CyP9nsQ36d9lzIt/Lf/76BzeY5b67CeVasWEFEADSs5P5DcZcEWHSsVivz5s3DarUS4CHFVlSARmIlByuWL5MDqr1Ar1696NixI6ZdJjhudJrrcAbMv5lp3KQxAwYMkIUb16FMxZavry+aplGrVi2++uorli9fTnZ2trOziRvwxRdfsHr1amw1WqGFxV7z8/WAcKwJd7B//35GjRotL/gVXH5+PikbN9AqqgCTvM66xN+r2kg7ns7hw4eNjiJukKIoDBw4kMTERCwpFjhrdKJrYC1aeVg5sjKj3hklZx5epzIVW//973+xWq28+eab7Nq1i4ULFzJ27FhnZxPXadmyZcyYMYPCqHo4oq+++azl9H4sp/df9ftqpVrYa7Rk1aqVTJ8+3QlJhafYunUrhQ6V5pXlKBlXaXbx/3VKSorBSUR58PPzY9SoUUSER2BZZwFPOLtdBfM6M766L+PGjiM8PNzoRB6rTMVW06ZNCQoKIjg4mDfeeINJkybRrFkzZ2cT12HHjh2MHjMGLbQa9rjWRWvJr8Jyei+W03tLvF5htaYUVq7LtGnT5JDcCmzbtm1YTFAv3HOGED1dpL9OdJDOtm3bjI4iyklkZCRjRo/BYre4/xmKOiibFMiGIW8OkX0yb1CZiq0dO3bQpUsXHnjggeJ/O3fudHY2cY3S09N5ffBgVJ8grHXag6kc1hkrCvb4Nmih1Rg1ejTbt2+/8WsKj7N//36qB2v4yCbRLhUXXMiB/SV/IBKepX79+rz++utwGpSt7jsmrxxQMB018fTTT3P77bcbHcfjlXkYcdiwYaxcuZKVK1cydOhQBg8e7Oxs4hqcO3eOAa8NJNdqJ79eR/Apxx30TGasdduj+gQz6PXBpKWlld+1hUc4dSKdqgHSq+VqVQNVMjOz0DR37gIR16pDhw488sgjmA6aUI64YcF1uujMw9ta3yb7LZaTMhVbQUFBtGzZsvjrli1bEhQU5LRQ4trYbDZeHzyYEydPkl/3bnR/J5wNYfEnv15H8m0OBrz2GmfPetIMT3Gjzp0/T7CPvOG7WoiPjqbr5ObmGh1FlLO+ffvSvHlzzJvN7jVh3gqW9RZiY2N584035czDclLmOVtDhw5lw4YNbNy4keHDh/P3v/+dXbt2sWvXLmdnFCVQVZURI0awa+dOChLuQAuJdlpbun8o+XU7kJFxmv8MGoTVanVaW8K9mM1mNN0NP4F7Oe3iImCz2dO3HheXs1gsvPXWW0RGRGJZbwG70YkA7eKEeHwZPWo0wcHXsGWQKFGZTjdLTU0FYNKkSX+6f/PmzSiKwowZM8o/mSiVrut88MEH/PLLL9hq/h01MsHpbWohVbDWuYu9e1fw5ptvMmbMGHx8fJzerjBWSEgIubYso2NUOOftJsxmE/7+3nKwnvij8PBwRo4Yycsvv4xpowmttQYGfqZRthdNiB88fDBxcXHGBfFCZSq2Zs6c6ewc4hrpus6UKVNYtGgR9mpNcVRr4rK21Uq1sMW1ISVlNSNHjmTIkCFyaLWXS6hdhz2/pQN5RkepUI7lmomrVUt6trxYw4YN6devHx988AHKXgW9gUF7Gh4H034TDz74IO3atTMmgxcr0zBiVlYW//3vf+nTpw8ABw4cYO7cuU4NJko2bdo0Zs2aRWGVBhTWuNnl7Tuq1MdWsxWrVq1i9OjRqKrq8gzCdZo0aUJGHpzKl/kbrlKgwt4cXxo3aWp0FOFk3bp1484778S00wRGdCDngWWThXr16/HSSy8ZEMD7lemV8/XXX6dNmzZkZmYCEBcXJ0OHBtF1nc8++4zp06dTGFWv1L20nMlRrSn26i1Zvnw5I0eOxOGQ1Wre6s477wRg9QnZPdpVfsv0xabqtG/f3ugowskUReE///kP0dHRWDa6eP6WBuYNZvwt/rz91tsyLcRJylRsnT17lvvuu694VYLFYpEVCgbQNI0JEyYwc+ZMCqPqY49va1ihdUlhbDPsNW4mOTmZN4cMkXMUvVSVKlVo27Yty9IDyS2UifLOpmqw8Egg8XG1aNpUerYqguDgYN4a/hZKgYJpkwlcNJqo7Lo4T+v1wcTExLim0QqoTBVTYGAgZ8+eLT58cuvWrYSEhDg1mPgzm83G8OHD+e677yiMboI9vo3hhdYlhTE3YYu7jbVr1vJq//7k5OQYHUk4wbPPPkuBA+YcCDA6itf7Mc2Pk3kKfZ5/QT7YViCJiYm88PwLKMcV1+y/dRpMe0x07ty5uPdaOEeZhxH/8Y9/cOzYMR599FEGDRrEm2++6exs4qLs7GxeffVVfvrpZ2w1W2Gv9Xe3KbQucVRtSEGddqSm7uHFvn05cuSI0ZFEOatduzaPPPIIK9P92JrlGQsi/Mwlf+2O0nJNzD0YSOvWt9GmTRuj4wgXe/TRR7mp2U2Yt5mvaT2KHqejx11Dd1ghWH6zEF0tmn79+l17UHFNSiy2tm/fzunTp2nUqBFfffUV//73v/H19aV169ZERztvPyfxu9TUVPo8/zype/dTULcdjmruO6SgRsaT3+A+TmXl8OKLfVm7dq3RkUQ569OnD7UT4vl4Vyjpee7f49I8yl7i1+7mvF3h/e1hBIeGMXDgf4pHE0TFYTKZeOO/b+Bn8cOcYi7zcOK1FlvKNgXyis49DAiQ3mpnK/HVctiwYcWT5bZs2cInn3xCr169CA0NZejQoS4JWFHpus6iRYt46eWXyc61kZ94P2pEvNGxSqWFVCWv4QPkmwJ5/fXXmTp1qqxU9CJ+fn6MHjMWv6BQxm8LI7vAvYuB9rF2qgaohPpoPNMgj/ax7ltsWR3w/rYQzhX6MHrMWCIiIoyOJAwSHR3Nq/1eLTo/8ZAT/sYywHTYxKOPPkqTJq7bNqgiK7HYUlWV8PBwAP73v//Rs2dPOnXqRP/+/Tl69KhLAlZE+fn5jBgxkvHjx2MPqkpew65oQZFGxyoz3S+Y/Ib3UxhVjy+//JJ//evfZGXJhpjeIjo6mjFjx5GnBzBqs3sXXIoClfw0YoJU2le3u9voezGrA8ZtDeXQBR+GDhtGw4YNjY4kDHbffffR4m8tMO8wQ345XtgBls0WYqvH8uyzz5bjhUVJSiy2NE0rXs6/bt06brnlluLvSW+Fc+zdu5dnn3uOFckrsFf/GwX17ynfQ6VdxWTBnnA7toTb2bZjB08//QwbNmwwOpUoJ4mJibz3/vtc0AMYsSmcEx4wpOiuztkURm0O4+B5H4YPH87tt99udCThBhRF4T8D/4NFsWDaWn5/X0qqgp6rM+g/g/Dz8yu364qSlfgT7Ny5M0888QT/+Mc/8Pf3Lz6M+ujRo3JmUjnTNI3Zs2fTt29fTmblYG1wH4Wxzd1uIvy1ckTVI69hV847zAwcOJBJkyZht7vvUI4ou0aNGjHxw49Q/cJ4a1M4e856xqR5d3Iiz8TwTeGctPkzatQoWREm/iQmJoanej+Fkq7AqXK44AUw7zNzzz330KxZs3K4oCgrRdf1EmfUbd26ldOnT9O6dWsCAwMBOHz4MPn5+TRq1Khcw6SmppKYmFiu1/QEmZmZjBo1is2bN+OoVAtbfFuX9Gb5714MQEHD+53eFpoD32Mb8cnYTXxCAsOGDiUhwflnOQrnO3HiBANfG8CJE+n0rpdH++ruVUyP/K3og+GbLXMNTvJnW7IsfLwrFP/AEMaMe7dCvvaJ0tntdp7s/SSnck/h6OAo4x4CV2ZebSbgfACzv54tcwLLSVnrllJ/bM2aNaNDhw7FhRZAfHx8uRdaFdXKlSt56umn2bJtB7b4Ntjq3u2Zw4alMVmwx91GQb2OHDl+ij7PP8+cOXPQNM3oZOIGxcTEMPnTKbS8uRXT9gQxNTUQu8wyuCpNh+8P+fP+1hBqxNVmyudTpdASV+Xr68s/X/kn+nkd5fANjHRkAKfg6aeelkLLADLRwiAXLlzg7bdHMHz4cHIJJK9xNxxVGnj8sGFp1Eo1yW3cHVtwNSZNmsS//vUvMjIyjI4lblBISAhjxoylV69erEr34+1NYWTKOYp/ccGu8N7WYOYdCuDuDncz6f8+pmrVqkbHEm6udevWNGnSBPNuM1zPqWg6mHeYiaoSRY8ePco9nyidvBoaYOPGjTzZuzcrkpOxx7Ygv+H96P5hRsdyHZ8ACup2wBbfhq3bd9K791MsWbKEUka0hZszm828+OKLjB49miw1mDdTwknJlHPWLtmXY+bNlHB2n/NnwIABvPnmEPz9vbAXW5Q7RVHo27cveoGOcvA6PpCfBM5Cn+f6yKR4g0ix5UJ5eXmMGzeO1157jTNWDWujByis3gKUCvhjUBQcVRqQ17g7eT5hjB49mkGvvy5bRHiB1q1b8/nUL6iZUJeJ24P5ck9AhR5W1HT44YgfIzeF4hdWlf/7+BO6du0qG5aKa9KkSROaN2+Oeb8ZruXvSQdzqpmq0VXp0KGD0/KJklXAd3ljrFu3jieefJLFSUnYqzUlr1FXtKDKRscynO4firXBfdhq3sKGDSn0euJJkpKSpJfLw8XExPB/H3/CI488wvLj/ry9KYxTFXBY8Zxd4d2tIXx7IJDb77iTz7+YRoMGDYyOJTzUU089hW7VUY5eQ6GeBZyBJ3o9gcUiK4aNUvFe/VwsOzubt956i0GDBpGdr2JN7EJhzVZgkl/6YoqCo1rjol4uSwhjx46lf//+pKWlGZ1M3AAfHx9eeeUVRo0aRbYWwpsbw1l/quIMK6aetfDGxnD2nC8aNnzrrbdkyxxxQ5o3b058Qjzmg2U/xse030RQcBCdOnVybjhRIim2nMThcDB//nx6PfEEK1f9hD22OXmNuqGFVDE6mtvSA8KwNuiMLa41W3fspvdTT/H5559TUFBgdDRxA9q0acMX06ZTp34ik3YGM31PAIVevAhV02HRYX9Gbw4hODKGTz+dIsOGolwoisLDDz2MnqNDdhmeYAXlhMIDXR6Q+YEGk2LLCVJSUnj2ueeYOHEiFyzh5DXuTmH1v4HJbHQ096coOKomktfkQWxhtZgxYwaPP96LFStWyDYRHqxq1ap8+NEkHn30UVYc92fEJvc+5ud65Tvgg23BzDkYwJ133cVnn0+lTp06RscSXqRdu3b4+vmWaShROaaAXrRBuTCWFFvlaP/+/QwYMIABAwZw5GQWBXXvpqD+PegB4UZH8zi6byC2OndhbXg/p606b7/9Ni+88CKbNm0yOpq4ThaLhZdeeol33nmHU/ZAhqSEk+pFu86n55oYmhLO9rN+vPrqqwwbNpygoCCjYwkvExgYyO1tb8ecboZSPn+a08zUq1+PmjVruiacuCoptsrB4cOHGTJkCM899xy/bd2OrebfyWvyEGpEnNfvm+VsWkg0+Y26Yku4g/3H0vnXv/5Fv36vsn37dqOjievUtm1bPp3yGeFVqjNmcwg/pfsaHemGbc+2MHxTODafcCZMmMiDDz4ow4bCadq1a4du0+F0CQ/KA/2sTvt27V2WS1yd93ysNMCePXuYOXMmq1evRrH4YI9tTmF0Y7DIPiblSlFwRNUlNzIeS+Yetu3eziuvvELTm27iqd69admypbyxeZhatWox+dMpDBs6lM9/+41T+WZ61rF65GeT5OO+fLk3iPj4eMaMHSublAqna9myJT4+PmgnNPSqV54pr5ws+mNq06aNK6OJq5Bi6xppmsaGDRv45ptv2LJlC4qPX1GRVbWRdx6z405MFhzRjcmNqo8lcy879uxgwIAB1K5Th8cefZR27drJ0mYPEhwczNhx45gwYQKLFi3inF2hT2I+Zg/pb9d1+P6wP/MPBXDrLbcwbPjwPx1rJoSz+Pv707x5c1L2puC4ypbySoZCdLVoatSo4eJ04krknamM8vPzWbZsGXPnzSPt2DEUvyDsNVpRWKUBWDx/GMSjmH1wVGtMbtVELFn7OXhiFyNHjuSTyZN5sEcP7r//fsLDZZ6cJ7BYLAwYMIDIyEimTZtGgarwcuM8LG5ecOk6fHMggKSj/nTq1IlBgwZJoS9cqlmzZmzcuBEKgMs/5+tgzjbTon0LI6KJK5BXh1KkpaWxcOFCflichDU/Dz04ClvtO1AjEjx7daGuo9jzQbVjyUj1zHMZTWYcVRrgiKqPOSeNzIxdTJkyhS+mTaPD3XfTvXt32UDSAyiKwjPPPENQUBCTJk3i453wcuM8t+3h0nWYc9CfpKP+dOvWjf79+2MyuWlY4bVuuummohvZQOxl37wAmk2jadOmro4lrkKKrStwOBysW7eOBd99x6bffgPFhKNSHIVxjdCCq3heUXIFlsxUTLbzAPgdWQPoOKo2NDTTdVMU1Eo1USvVRMk/i0/GLpYuW8GSJUuo36ABPbp3p127dnImmJt75JFH0DSNjz/+mOC9Os80yHfLP7Ulx/z44UgAXbp0kUJLGKZOnTooioKSo6DH/nnelpJT9IdTv359I6KJK5Bi6w+ysrJYvHgxCxctIjsrC/yCsFf/G46o+ui+3jUXw3z22F++9thi6w/0wErY49tgr9EKS9Z+9h5LZfTo0Xz40Ud0vu8+unbtKnMY3Nijjz7KuXPnmDVrFpUDVB6Isxkd6U82Zvjw9f5A7rjjDgYMGCCFljBMQEAAMbExHM85jn75dvI5RUP0tWrVMiac+IsKX2zpus62bdv47rvv+PmXX9BUFTUslsK6d6NWqum1h0QrmqPErz2exRdHdCMcVRtiOn8SR2Yqc+bOY86cObRseTM9enTn1ltvxWz24KFgL/XCCy9w6tQp5iYnUytY5abK7vG7mZZr4tPdITRulMibb74phZYwXEJ8Aie3n0S7bMMt5YJCTGyMzCN0IxX2J2Gz2Vi5ciXffjuHQ4cOFq0qjEqksGoiun+Y0fFEeVEUtLAYbGEx2O35WE7vZdOO3fz2WwpVo6N5+KGH6Ny5s2w+6UYURWHQoEEcOXyIj3cfYVSrs0T6G3sweYEKH+4IJSg0jLdHjJQhaeEWYmNj0dfqReck/mHI3ZRnomYT2cjUnVS4j2Z5eXnMmjWLhx5+hNGjR3Po1Bls8W3Ivekx7LVukULLi+m+gRTGNie3aU8K6rTnZB5MmjSJ7j16MHnyZM6cOWN0RHGRv78/b48Yiar4MGV3MJqxtRaz9wVyKl9h6LDhVK5c2dgwQlxUrVo1dFUvWpH4R/kQHR1tSCZxZRWmZ8tqtTJnzhxmf/MN+Xl5qGGx2Bv8HS001ismvItrYDKhRsZjjYzHlHsax8kdfD17NnPmzqVb16707t1bto5wAzVq1OCVf/Zj/PjxrEr3pX11uyE5dp+xkJzuR8+ePWnRQpbSC/dRXPgXAAEX7ywEvVAnKirKqFjiCry+2NJ1naVLl/LJ5MnknD2Lo1ItCuPuRguWX0QBWnAUtrrtsBecw+fENubNn8/ipCSe6t2bnj17ypwHg3Xp0oUVK5YzZ9d2WkadJczPtV1chRpM2xtMTLVo+vTp49K2hShNZGRk0Y0/9mxdvB0REeHyPOLqvHoY8fTp07z22muMHj2aMw5frA27YKvXQQot8Re6fxj2hNvJb9KDXP8oPv30U1548UUOHz5sdLQKTVEUXnttIDbNxLxDAaU/oZz9eMyPk3kK/x7wmszTEm4nNDQUAMX+h9GZix3AYWEyJcadeG2xdfDgQZ5/4QV+27wVW63bsCbejxYiZ5aJkukBlbDV60hB3fYcPJrOi337Fu3SLAxTs2ZNejz4ID+l+3HsgutWj563Kyw8GsStt95Cq1atXNauEGV1qdjijzukXCy2QkJCXJ5HXJ1Ti6127drRpUsXunbtSo8ePZzZ1J9kZWXx6qv9OZtbQH7i/TiiG8q8LHFN1Ih48hp2pcAUyOuvv86+ffuMjlShPfXUUwQFBTL3oOt6txYd8cfmgH/84yWXtSnEtSg+i/MPu6MohUXvdbLC2r04vWfryy+/ZOHChSxYsMDZTRX76KNJXMjLJ6/ePWhBkS5rV3gX3S+IvPr3opr9GD1mjNFxKrSQkBAe7/UEW7J82J/j/N6tMwUKycf96XTPPcTFxTm9PSGuh8ViwcfHBwr/cOfFwksORXcvXjeMWFhYyK9rfsVeuS56YCWj47gv1U5AQAAPPfQQAQEBoBqz0svt+fhTEN2EgwcOcOLECaPTVGg9evQgPCyU+Yec/ybywxF/NMXE008/7fS2hLgRfv5+oP7hjovFVkCA6+c4iqtz+lKr5557DkVR6NmzJz179izxsTabjdTU1BtqT1VVHIWF6GbfG7qOt1Mcdjo/0Jl+/foBMGfRUoMTuTFz0cTovXv3cu7cOYPDVGzt7+7A/Pnz2Zdjpl64WvoTrsOZAoVVJ/y5rXVrcnJyyMnJcUo7QpQHk9n052Lr4u3Dhw8X9XoJt+DUYmv27NlUrVqV7OxsnnnmGRISErj55puv+ng/Pz8SExNvuN0GDRqQevgghbHNwCRL969Et/iSlJQEQFJSErpFPgVdka7jkxnw61gAAB4ySURBVLWXsPBKtGnTRl68DBYXF8eK5cv47rCDQc0vOKWNxUf90RUTr7zyCtWqVXNKG0KUl6DAIHLUP3wguFhsNWnSBEXmKjtdWTuInDqMWLVq0eq/yMhIOnTowPbt253ZXLG+ffuCLRe/AytB00p/QkVk9sVqtTJv3jysVitIT+Bf6Tq+xzZgOn+KF194XgotNxAQEMCjjz3OjmwLB8+V/9ytszaFVen+dOzYSQot4RH8/PxQ1D8UVRr4+PhIoeVmnFZs5efnk5ubW3x7zZo11K1b11nN/Unz5s3p/+qrWM4eI2DvUii0uqRd4UVUB34Hf8Ln1E4efPBBOnfubHQicVH37t0JCQ7iu8Pl3xubdNQfFRNPPvlkuV9bCGfw8/XjT+dQq2DxkREdd+O0n0h2djYvv/wyUDSP6v777+f22293VnN/0aNHDwIDA3n33fGYd36HtdZtqBFxLmtfeC7ThQwCjqwG6zmee+45nnzySfmU6EYCAwPp+ehjfP755xw6byYhtHzmbp2zKaxMD6Bjx45Ur169XK4phLP5+V02QV4DXz8ZqXA3Tiu2atSowaJFi5x1+TK55557qF27Nu+8M4pD+1fgqFQLe81Wcti0uLLCfHzTNuFzeh+Vo6IYPGJ8iXMMhXEefPBBvv1mNt8dKmRAs9xyuebio/44NKRXS3gUX19fFO0PHwZV8PWRYsvdeN3WD5erW7cun3/+GS+++CJB1gwCd8zH9+g6GVoUv1Pt+KRvIXj7PPzOHOCRRx7mq5kzpNByY0FBQfR89DG2ZPmUOnfrjhg7d8SUvLVJjk0hOT2Ajp06UaNGjfKMKoRT+fn5/aXYkqOl3I/XF1tQtPFbr169+Gb2bDrfey++GbsJ3jYHn7QUKCwo/QLCO6mFWE5uJ3jbXHyPb+K2v9/MzBkzeOWVV2RDQA/w0EMPERIcxIJSzkxsG2OnbSnF1g9H/HHoCr179y7PiEI4na+v758myCuqIsWWG6oQxdYlkZGRDBo0iJkzZ3LXHW3xPbmd4P9v787DYzz3PoB/Z9+yo1SaiqMNTauWICdFlSrBZGvI61TSIEW1qiocilpSpanlPbVFVMpRb3vZIkEbelCUkqKKLHaOSKxZZE8mmfv9IzWNog0ymZnk+7ku15XMzPM8vzzuZL5z389z38fXQXH5Z8BQbOnyqK5UlkORdRx2J9ZDdflndHjRE8uXL8fcuXPZq2FDtFot3hgSiuPZjzerfE6pBLsz1fD19eW1WmRz1Gr1PfNsqVVqi9VD99egwtYdTz/9NGbOnIk1//43Xu3ZA6prJ2H363ooL/0ESZl55u4hK2AoheLKUdgdXwdlxmF0at8WS5cuxb/+93/h6elp6eroEQQFBT32rPJbfpstPjw8vBYrI6obKpXq7rURKyScPd4KNej7Q93d3TF9+nQMGzYMX3/9NbZv3w7FjVMwNGoFQ/MXITRc7qc+kJQXQXH1JJQ3T0NUGtCte3eEhobWygS6ZFl3ereWLVuGU7lytHGu+OuNqrn122zxA/R6zqtFNkmj0UBUCNP3EiPDljVq0GHrDjc3N0yaNAlDhw7FunXrkLhlCwy3zqHCuQUMru1h1DW2dIm1TvxhZv0/fl8fSErzocg6DkX2WUgB9O7dG0OGDEHLli0tXRrVosDAQHzz9f9h04UKTPV6uJ7pLRc1kEplvAORbJZWq4WoFFVzbUmrerZ4zan1aZDDiA/StGlTjB07Fps2bsSbb4bBvuwmNCkJUJ/eAWnBdUuXV6sqnZ/+0+9tmaQkF6pzP0B7YgM0eRcQ6O+Pb775BtOmTWPQqofUajWGhIYhPVeOU7k1/9Bwq1SCvVdVGKD3M612QWRrTL1Ydzp1K7gItTVi2LoPJycnvPXWW9i0cQNGjhwJJ+NtaNK2Qn0qCdKCa5Yur1ZUPPEcjCoHGOVqlLl3RcUTtj+kJinOhersbmhPxENXmInB//M/WL9uHcaPH88honrO398fzk6OSHiIWeW3XVJDIpFhyJAhZqyMyLx0Ol3VFwYAAjCWG39/jKxG/Rs7qkV2dnYIDQ1FcHAwEhMTsfb/vkZ+2jZUOj6F8qe8YLRrYukSH51EAqHUAtCioqltBy1J6W0or/wCefYFqNQqhISFYtCgQXBycrJ0aVRH1Go1Bv/jDcTExNRoVvm8Mgn2ZqnRt58ve7XIpt0VtoxV/xi2rA97tmpAo9Fg8ODB2LB+HUaPHg0nkQ9NaiJUZ3ZCUpL31zsgs5CUF0N5cT+0JzZCW3gFQ4a8gY0bNmDEiBEMWg1QQEAA7HRabLv017e9f5+hQoWQ4I033qiDyojMx97evuoLA4DfppOzs7OzWD10fwxbD0Gj0eAf//gHNqxfj2HDhkFXcq1qRvqLBzgjfV2qNEBx5Sh0JzZAnX0WrwcFYf26dRg1ahQcHbkUU0Ol1WrhHxCIIzeVuFHy4D9tpZXAriwtunfvznnVyOaZglU5qgIXqgUwshoMW49Aq9Vi2LBh2LB+PYICA6G6dRp2JzZAfjUFMBr/egf0aISA7NY52J3cCGXmMfTo3hVr167FuHHj4OLiYunqyAoEBwcDEil2XXnwDNoHrylRVC4QEhJSh5URmcedYCUpl7Bny4oxbD0GJycnfPDBB1i9ejU6dWwP1eVD0KVuhjS/flxEb00kxbnQnPoO6vN78MzTrli6dCmioqLg6upq6dLIijRp0gTdu3fD3qtqGB7wuWdXpgat/tYSbdu2rdviiMzgfsOIDg4OFquH7o9hqxa4u7tj/rx5mDNnDprYKaBJ3wblhX1ARZmlS7N9xkooMo5Am7oZ9sZCTJgwAStWxPKNkh7Iz88fheXAsZuKe577b4EMl/Kl0Pv5QyKR3GdrItui0+mq2nI5IDFUtWkOI1of3o1YSyQSCbp16wYvLy+sXr0a69atgzI/EyUtXkKlcwtLl2eTpIU3oLn4I1Cciz59+mDMmDG88J3+kpeXFxo3csGPV8vRpanhrucOXFVCLpOhd+/eFqqOqHZJpVJodVoUlBewZ8uKsWerlmk0GowePRqxsbFwd20K9Zn//NbLVW7p0mzHb71ZmrStaKSVYd68eZg2bRqDFtWITCZDr1d742SOEsXVVu8RAki+qUbnLl14IwXVKw4ODlVBq6zqgz+v2bI+DFtm0rp1a6z84guEhYVBeessdKkJkBbesHRZVk9Sehva9G1QZv0K37598dWaNfD29rZ0WWRjevTogQojcOLW70OJlwpkyC4BXnnlFcsVRmQGTk5OpgvktTotpFK+tVsb/o+YkUKhwIgRI7BkyRI0cVBDk7YViqzjVR+x6R6yW+egS02AHUoQFRWFKVOm8BMaPRJPT084OtjjWLWw9estBSQSCXx8fCxYGVHtc7B3gNQgBcoBewder2WNGLbqQNu2bbF61Sq80qMHlBmHoT7zPWAotXRZ1sNYAeWFH6E+vwfPt2lTda7Y+0CPQSaTwatTZ6TmqUyfbVJzFXj2mVYcjqZ6x8HBAZJyCSTlEjjac4jcGjFs1RF7e3vMmjUL48ePh7LwKocVfyMpzYc2bSsUN08jNDQUixZ9zuVTqFZ07NgReaXA9RIpDEbg/G052nfoaOmyiGqdvb296W5EXo9onRi26pBEIkFgYCCWx8TgCScdNOnbIL+e3mCHFWW5l6FLTYSdpAzR0dEYOXIk5HLeIEu14/nnnwcAnLstx38LZDAYwSlDqF5ycHCAsdwIabmU0z5YKYYtC2jdujW+jItDl86dobp0oOpuRWPFX25XbwgjFFeOQn3me/zN3Q1xK1fyOhqqde7u7lApFbiUL8OlAhkAoE2bNhauiqj23bm21VhkZNiyUgxbFuLg4IDPoqMxdOhQKG6dhTZ9GyRlBZYuy/wqSqE+8z2UmcfQr18/LI+JQfPmzS1dFdVDMpkMLVu2REaRDBkFcui0GjzxxBOWLouo1pluJBJcqsdaMWxZkFQqxfDhwxEdHQ2dKIEuNQGyvAxLl2U20qJb0KUmQll4DZGRkZg8eTJUqgevYUf0uFq4t8TVEiWyiqVo4e7OWeOpXqoesHQ6nQUroQdh2LICPj4+iFu5Ei3dnoL69PdQXDkKiHq0oLUQkN84BW3aVjS2U2PpkiUICAjgGx+Z3VNPPYWcEoGMIgXc3J62dDlEZlE9YLFnyzoxbFkJV1dXxMYuh69vXygzj0F9ejtgKLZ0WY+v0gDlhb1QXdyPjh074Msv4+Dp6WnpqqiBePLJJwEAheVAs2bNLFwNkXlotVrT1xqNxoKV0IMwbFkRlUqFKVOmYNKkSVAX34JdSgKkt7MsXdYjkxTnQJeWCGX2eQwdOhTz583jHEdUpzw8PKBRq6GQy013JxLVN9UDVvXgRdaD99lboQEDBqBNmzb4aPp0XDmVhPLm7WB4qiMgsZFs/NuwofpyMhwc7DDzk4Xw8vKydFXUALm7u2PH999bugwis2LPlvWzkXfvhqdVq1aIW7kS/fr5Qpn1KzTp30JSagN3KxpKoTq7E6pLB9DJqwP+vXo1gxYRkRlVD1gMW9aJPVtWTKPR4MMPP0SXLl3w2WfzIEvdjJIWPqhs/KylS7sv6e1MaC/ug7SiFKPeeQchISFcEJWIyMzUavV9vybrwXdCG/Dqq69i9epV8GzjAfX5vVCd2w1UlFm6rN8ZK6H8bzI0p7ajeRMXLF++HIMHD2bQIiKqAwrF7wuuM2xZJ74b2ognn3wSixctQkREBJR5/4Vd6maruHheUpwDbdoWKK6dRECAP1Z9GYfWrVtbuiwiogZJqVRaugS6D4YtGyKXyxEeHo6YZcvwZCNHaE4lQXE5GTBW1n0xQkB+NQW61EQ4yisRHR2NyMhIfqoiIrIAj9YecHRyhIODg6VLofuQCGE9qyCnp6fjueees3QZNqGkpARLly7Fli1bIHSNUdLqFQjNw02rIL95FgBQ0eThrgGTlBdDdWEvZLcz4fPSS5g8aRKcnZ0fah9ERES2rqa5hWHLxh04cABz5s5FYVEJSp/+OyqaeABmnJldlpcBzcV9kKMSY997D/7+/pwJnoiIGqSa5hYOI9q4rl274t+rV6P9iy9AdfFHqM7vBSoNtX8gYYTi8mGoT+9AC9dmiFu5kkvuEBER1QDDVj3QuHFjLFy4EBEREVDknIcubQskpbdr7wCGEmhOJUF59Tj8/PzwxYoVcHd3r739ExER1WMMW/WETCZDeHg4Fi5cCDtZJXSpWyDLu/LY+5UWZcMuLRGqkmxMmTIFEydOhEqlqoWKiYiIGgaGrXrGy8sLX8athLubK9RndkB+49Qj70uWdwXaU9vgrFNh2bKl8PX1rcVKiYiIGgaGrXqoWbNmiIlZhi6dO0N1cT8UWccfeh+y7AtQn/0eLVu0wMovvuDcWURERI+IYaue0mq1mDt3Lnr16gVlxmEosk7UeFtZ9kWoz/+AFzyfx5LFi9C4cWMzVkpERFS/cW3EekyhUOCjjz4CAOzevRtCoa6aGuJPSPOzoL7wAzw9PTF//ry7VpMnIiKih8ewVc/JZDJMmzYNebdv45df9sOodoTRvul9XyspK4D23C64PeWGeZ99xqBFRERUCziM2ADI5XJ8HBWFpk88Ac35H4CK8ntfJIzQnP8BarkM0dGfwt7evu4LJSIiqocYthoIe3t7zJo1E5LyIigzDt/zvPxaGiQFNzBhQiRcXV0tUCEREVH9xLDVgHh6euL111+H4uYpSIpzf3+iohTqrGPo0qULevfubbkCiYiI6iGzh63KykoEBgZi1KhR5j4U1cDQoUOhUqmgzPrV9JjiWhpERRlGjx7N5XeIiIhqmdnD1po1a9CqVStzH4ZqyNHREf5+fpDnXAQMJYAwQnXrNLp4e/P/iYiIyAzMGrauXbuGPXv2YODAgeY8DD2kAQMGAMIIec5FSPOvQpQVQT9ggKXLIiIiqpfMOvXDnDlzMHHiRBQVFdXo9WVlZUhPTzdnSfSbxo2b4HpeBozqfMjlcjg7O/PcExERmYHZwtYPP/wAFxcXvPDCC0hOTq7RNiqVCs8995y5SqJqXnrJB1u2fQtZwTW0ffFFtGvXztIlERER2ZSadlKYLWz98ssv2L17N/bt24eysjIUFhZiwoQJmD9/vrkOSQ/B398fubm5phsYiIiIyDwkQghh7oMkJyfjyy+/RGxs7J++Lj09nT1bREREZBNqmls4zxYRERGRGdXJ2oje3t7w9vaui0MRERERWRX2bBERERGZEcMWERERkRkxbBERERGZEcMWERERkRkxbBERERGZEcMWERERkRkxbBERERGZEcMWERERkRnVyaSmNVVWVlbjRR2JiIiILKmsrKxGr6uTtRGJiIiIGioOIxIRERGZEcMWERERkRkxbBERERGZEcMWERERkRkxbBERERGZEcMWERERkRkxbFmxDh06PPC5wYMHm+24y5cvN9u+qeGxVDuuqREjRiA/P/+ht1u8eDHi4uLMUBHZOnO3+V27dmHFihUPvV1Njj116lScO3fuUcqiP8F5tqxYhw4dcOzYsbseq6yshEwmq/PjEj0qS7Xj6ioqKiCX1+4czosXL4ZWq0VERITFaiDrZKk2zzZmvdizZQOSk5MRFhaGyMhI+Pn5Afj9k9ONGzcwZMgQBAQEQK/X48iRI/dsf/bsWQwcOBABAQHw8/PDpUuXAACJiYmmx6dPn47KykrMnz8fpaWlCAgIQGRkJABg1apV0Ov10Ov1WL16NQCguLgYI0eOhL+/P/R6Pb777jsAwJIlSxAcHAy9Xo+PPvoIzPJ0x+O240GDBuHs2bOm78PCwpCSkoLi4mJ8+OGHCA4ORmBgIHbu3AkAiI+Px9ixY/H2229j+PDhDzxGr169kJOTAwBISEiAn58f/P39MXHiRABAZmYmwsPD4efnh/DwcGRlZd1TW3p6OkJCQuDn54d3330Xt2/fNtW4cOFChIaGYs2aNbV1KslGmKvNx8fHIyoqCgAwefJkzJ07F2FhYZg/fz5ycnIwbNgwBAUFYfr06ejZs6epfd859p26xo4dC19fX0RGRpr+VoeFheHkyZMAgH379iEoKAj+/v4IDw8HAJw4cQKDBw9GYGAgBg8ejAsXLpjj1NU/gqxW+/bthRBCHDp0SLRr105cvnz5nufi4uLEsmXLhBBCVFRUiIKCgnv2ExUVJRITE4UQQpSVlYmSkhJx7tw5MWrUKFFeXi6EEGLGjBli8+bNd+1bCCFOnjwp9Hq9KCoqEoWFhaJ///4iNTVVbN++XUydOtX0uvz8fCGEELm5uabHJkyYIHbt2vX4J4JsWm2141WrVonPP/9cCCHE9evXRZ8+fYQQQixYsEAkJCQIIYS4ffu26NOnjygqKhKbNm0S3bt3N7XJBx2jZ8+eIjs7W5w5c0b06dNHZGdnCyF+b8ujRo0S8fHxQgghNmzYIEaPHi2EEGLRokVi5cqVQggh9Hq9SE5OFkII8a9//UvMnj1bCCFEaGiomDFjxmOcPbJF5m7zmzZtErNmzRJCCDFp0iQxcuRIUVFRIYQQYtasWWL58uVCCCH27t0rPDw8TG26el0dO3YUV69eFZWVlSIkJEQcPnxYCFHVZk+cOCGys7PFyy+/bKr9zu9DQUGBMBgMQgghDhw4IMaMGfP4J6wBYM+WjWjbti3c3Nzu+3h8fDwWL16MM2fOwM7O7p7XtG/fHrGxsVixYgWysrKgVqtx8OBBpKSkmHq2Dh48iIyMjHu2PXr0KHr37g2tVgudTofXXnsNR44cgYeHB3766SfMmzcPR44cgb29PYCqT0yDBg2Cn58fDh06xLF/usvjtON+/fph+/btAICkpCT4+voCAPbv348vvvgCAQEBCAsLQ1lZGa5evQoA6Nq1K5ycnGp0jEOHDsHX1xcuLi4AYNru2LFj0Ov1AICAgAAcPXr0ru0KCgpQUFCALl26AACCgoLu6qXo37//Q54lqk/M0eb/yNfX1zREefToUVObe/nll+Ho6HjfbV588UU0a9YMUqkUbdq0QWZm5l3P//rrr+jUqZOp9ju/DwUFBXj//feh1+sxd+7cu3re6MEYtmyEVqu97+OdO3fG2rVr0bRpU/zzn/9EQkIC/vOf/yAgIAABAQE4efIk/Pz8EBMTA7VajYiICBw8eBBCCAQFBSExMRGJiYnYsWMH3nvvvXv2Lx4wDNiyZUvEx8fDw8MDCxYswJIlS1BWVoZZs2Zh0aJF2Lp1K0JCQmq8SCc1DI/Tjps2bQonJyecOnUKSUlJd4WYRYsWmdrynj170KpVKwCARqP502NU96C2/kcSieShfubqNVDDY642X131NlbTdqxUKk1fy2QyVFZW3vW8EOK+bf3zzz+Ht7c3tm3bhpiYGJSXl9foeA0dw5aNy8zMRKNGjRASEoLg4GCkpqbitddeM73xtG3bFhkZGXBzc8Obb76JXr164fTp0/Dx8cGOHTuQnZ0NAMjLyzN9spHL5TAYDACq/iDs3LkTJSUlKC4uxs6dO9GpUydcv34dGo0GAQEBiIiIQFpamilYOTs7o6ioCDt27LDMSSGbU5N2DAADBgzAypUrUVBQgNatWwMAunXrhrVr15reZNLS0mp8jOp8fHywfft25ObmAqj6nQCqrnP59ttvAQBbt26Fl5fXXdvZ29vDwcHB1JuVmJiIzp0718ZpoXrscdr8n/Hy8kJSUhKAql7fO9cPPqwOHTrg8OHDphGPO78PBQUFaNq0KQBg8+bNj7Tvhoi3Ldi4n3/+GXFxcZDL5dBqtYiOjr7nNd999x22bNkCuVyOxo0b491334WTkxPGjRuH4cOHw2g0QqFQYPr06XB1dUVISAj8/f3h6emJBQsW4PXXX8egQYMAAAMHDoSnpyd+/PFHfPbZZ5BKpZDL5Zg5cyYcHBxMQ4iurq6mPxZEf6Um7RgA+vbti08++QTvvPOO6bF33nkHc+bMgb+/P4QQcHV1RWxs7EMf49lnn8Xbb7+NsLAwSKVSeHp64tNPP8W0adMwZcoUxMXFwcXFBXPnzr1n39HR0ZgxYwZKSkrg5uZ239cQVfc4bf7PjBkzBuPHj0dSUhI6d+6MJk2a3HeI8q+4uLggKioK7733HoxGIxo1aoRVq1bhrbfewuTJk7Fq1Sr8/e9/f+j9NlSc+oGIiKieKC8vN30IPnbsGGbOnInExERLl9XgsWeLiIionsjKysK4ceNMIxYff/yxpUsisGeLiIiIyKx4gTwRERGRGTFsEREREZkRwxYRERGRGTFsEZHViomJwYABA+Dn54eAgAAcP3681vY9YsQI5Ofn19r+iIgehBfIE5FVOnbsGD799FN89dVXUCqVyMnJgcFgME2oSERkKzj1AxFZpZs3b8LZ2dm0rMidNQt79eqFfv36ITk5GQCwYMECtGjRAjk5OZgxYwaysrIAAFOmTIGXlxeKioowe/ZspKSkAKia9LFv377o1asXNm7cCBcXFyQmJuKrr76CwWBAu3btMGPGDADA1KlTkZKSAolEguDgYAwdOrSOzwIR1QcMW0Rklbp27YqlS5eib9++8PHxQf/+/U2LPdvZ2WHjxo1ISEjAnDlzEBsbi08++QTh4eHo1KkTsrKyEBERgaSkJCxbtgx2dnbYunUrANyzfMn58+eRlJSEb775BgqFAjNnzsTWrVvxzDPP4Pr169i2bRsAcMiRiB4ZwxYRWSWdTof4+HgcOXIEycnJ+OCDDxAZGQkA0Ov1AKrWjbuzNM5PP/2Ec+fOmbYvLCxEYWEhDh48iIULF5oed3R0vOs4Bw8eREpKCgYOHAgAKC0tRaNGjdCzZ09kZGTg448/Ro8ePdCtWzez/rxEVH8xbBGR1ZLJZPD29oa3tzc8PDyQkJDwwNcajUasW7cOarX6rseFEJBIJA/cTgiBoKAgU5CrLjExEfv378fXX3+NpKQkrnlIRI+EdyMSkVW6cOECLl26ZPo+PT0dzZs3BwAkJSUBqFpkvUOHDgCAbt26Ye3atXe9Hqgajqz++B+HEX18fLBjxw5kZ2cDAPLy8pCZmYmcnBwIIdC3b1+8//77SEtLq/0fkogaBPZsEZFVKi4uxuzZs5Gfnw+ZTIYWLVogKioKe/bsQXl5OQYNGgSj0WgaIpw6dSqioqLg5+eHyspKdOrUCVFRURg9ejSioqKg1+shlUoxZswY9OnTx3ScZ555BuPGjcPw4cNN68lNnz4darUaH374IYxGIwBg/PjxFjkPRGT7OPUDEdmU6ncREhHZAg4jEhEREZkRe7aIiIiIzIg9W0RERERmxLBFREREZEYMW0RERERmxLBFREREZEYMW0RERERm9P+zdNU2xZiR3QAAAABJRU5ErkJggg==">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[28]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">5</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'SepalWidthCm'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span> <span class="n">iris</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[29]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">5</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span> <span class="s1">'Species'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span> <span class="s1">'PetalLengthCm'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span> <span class="n">iris</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[30]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#2D Density plot, contors-plot</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">10</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">jointplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s2">"PetalLengthCm"</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="s2">"PetalWidthCm"</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">iris_setosa</span><span class="p">,</span> <span class="n">kind</span><span class="o">=</span><span class="s2">"kde"</span><span class="p">);</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">();</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_text output_subarea ">
<pre>&lt;Figure size 720x720 with 0 Axes&gt;</pre>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Darker regions correspond to more density. Points on the same contour have same heights.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="ML-Model">ML Model<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#ML-Model">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[31]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.model_selection</span> <span class="k">import</span> <span class="n">train_test_split</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="k">import</span> <span class="n">confusion_matrix</span><span class="p">,</span> <span class="n">accuracy_score</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[32]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">X</span><span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">iloc</span><span class="p">[:,</span> <span class="mi">0</span><span class="p">:</span><span class="mi">4</span><span class="p">]</span>
<span class="n">y</span><span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">iloc</span><span class="p">[:,</span> <span class="mi">4</span><span class="p">]</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[33]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">X_train</span><span class="p">,</span><span class="n">X_test</span><span class="p">,</span><span class="n">y_train</span><span class="p">,</span><span class="n">y_test</span><span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span> <span class="mf">0.15</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span> <span class="mi">1</span><span class="p">)</span> 
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[34]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="k">import</span> <span class="n">LogisticRegression</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[35]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model_lr</span> <span class="o">=</span> <span class="n">LogisticRegression</span><span class="p">()</span>
<span class="n">model_lr</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_train</span><span class="p">,</span> <span class="n">y_train</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[35]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>LogisticRegression(C=1.0, class_weight=None, dual=False, fit_intercept=True,
          intercept_scaling=1, max_iter=100, multi_class='warn',
          n_jobs=None, penalty='l2', random_state=None, solver='warn',
          tol=0.0001, verbose=0, warm_start=False)</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[36]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">pred_lr</span> <span class="o">=</span> <span class="n">model_lr</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[37]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_lr</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Accuracy Using Logistic Regression is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">accuracy_score</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_lr</span><span class="p">)))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[[8 0 0]
 [0 6 5]
 [0 0 4]]
Accuracy Using Logistic Regression is 0.782608695652174
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[38]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.svm</span> <span class="k">import</span> <span class="n">SVC</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[39]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model_s</span> <span class="o">=</span> <span class="n">SVC</span><span class="p">()</span>
<span class="n">model_s</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_train</span><span class="p">,</span> <span class="n">y_train</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[39]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>SVC(C=1.0, cache_size=200, class_weight=None, coef0=0.0,
  decision_function_shape='ovr', degree=3, gamma='auto_deprecated',
  kernel='rbf', max_iter=-1, probability=False, random_state=None,
  shrinking=True, tol=0.001, verbose=False)</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[40]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">pred_s</span> <span class="o">=</span> <span class="n">model_s</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[41]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_s</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Accuracy Using SVM is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">accuracy_score</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_s</span><span class="p">)))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[[ 8  0  0]
 [ 0 10  1]
 [ 0  0  4]]
Accuracy Using SVM is 0.9565217391304348
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[42]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Let's make the model taking only petal length and width into account</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[43]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">Xp</span> <span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">iloc</span><span class="p">[:,</span> <span class="mi">2</span><span class="p">:</span><span class="mi">4</span><span class="p">]</span>
<span class="n">yp</span> <span class="o">=</span> <span class="n">iris</span><span class="o">.</span><span class="n">iloc</span><span class="p">[:,</span> <span class="mi">4</span><span class="p">]</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[44]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">X_train</span><span class="p">,</span><span class="n">X_test</span><span class="p">,</span><span class="n">y_train</span><span class="p">,</span><span class="n">y_test</span><span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">Xp</span><span class="p">,</span> <span class="n">yp</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span> <span class="mf">0.15</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span> <span class="mi">1</span><span class="p">)</span> 
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[45]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model_s2</span> <span class="o">=</span> <span class="n">SVC</span><span class="p">()</span>
<span class="n">model_s2</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_train</span><span class="p">,</span> <span class="n">y_train</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[45]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>SVC(C=1.0, cache_size=200, class_weight=None, coef0=0.0,
  decision_function_shape='ovr', degree=3, gamma='auto_deprecated',
  kernel='rbf', max_iter=-1, probability=False, random_state=None,
  shrinking=True, tol=0.001, verbose=False)</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[46]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">pred_s2</span> <span class="o">=</span> <span class="n">model_s2</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[47]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_s2</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Accuracy Using SVM is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">accuracy_score</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">pred_s2</span><span class="p">)))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[[ 8  0  0]
 [ 0 10  1]
 [ 0  0  4]]
Accuracy Using SVM is 0.9565217391304348
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Neural-Network-Approach-using-Pytorch">Neural Network Approach using Pytorch<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#Neural-Network-Approach-using-Pytorch">¶</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[48]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">len</span><span class="p">(</span><span class="n">y</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[48]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>150</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[49]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">torch</span>
<span class="kn">from</span> <span class="nn">torch</span> <span class="k">import</span> <span class="n">nn</span>
<span class="kn">import</span> <span class="nn">torch.nn.functional</span> <span class="k">as</span> <span class="nn">F</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[50]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Giving Numerical values to our class labels as we will have to convert them to pytorch tensors.</span>

<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">y</span><span class="p">)):</span>
    <span class="k">if</span> <span class="n">y</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="o">==</span> <span class="s1">'Iris-setosa'</span><span class="p">:</span>
        <span class="n">y</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="o">=</span> <span class="mi">0</span>
    <span class="k">elif</span> <span class="n">y</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="o">==</span> <span class="s1">'Iris-versicolor'</span><span class="p">:</span>
        <span class="n">y</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="o">=</span> <span class="mi">1</span>
    <span class="k">else</span><span class="p">:</span>
        <span class="n">y</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="o">=</span> <span class="mi">2</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[51]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">y</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[51]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>2    50
1    50
0    50
Name: Species, dtype: int64</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[52]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.preprocessing</span> <span class="k">import</span> <span class="n">normalize</span>
<span class="n">X</span> <span class="o">=</span> <span class="n">normalize</span><span class="p">(</span><span class="n">X</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[53]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">y</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">array</span><span class="p">(</span><span class="n">y</span><span class="p">)</span>
<span class="n">y</span> <span class="o">=</span> <span class="n">y</span><span class="o">.</span><span class="n">astype</span><span class="p">(</span><span class="nb">int</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[54]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">X_train</span><span class="p">,</span><span class="n">X_test</span><span class="p">,</span><span class="n">y_train</span><span class="p">,</span><span class="n">y_test</span><span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span> <span class="mf">0.10</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span> <span class="mi">1</span><span class="p">)</span> 
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[55]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">torch</span> <span class="k">import</span> <span class="n">optim</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[56]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span> <span class="o">=</span> <span class="n">nn</span><span class="o">.</span><span class="n">Sequential</span><span class="p">(</span><span class="n">nn</span><span class="o">.</span><span class="n">Linear</span><span class="p">(</span><span class="mi">4</span><span class="p">,</span> <span class="mi">27</span><span class="p">),</span>
                      <span class="n">nn</span><span class="o">.</span><span class="n">ReLU</span><span class="p">(),</span>
                      <span class="n">nn</span><span class="o">.</span><span class="n">Linear</span><span class="p">(</span><span class="mi">27</span><span class="p">,</span><span class="mi">9</span><span class="p">),</span>
                      <span class="n">nn</span><span class="o">.</span><span class="n">ReLU</span><span class="p">(),</span>
                      <span class="n">nn</span><span class="o">.</span><span class="n">Linear</span><span class="p">(</span><span class="mi">9</span><span class="p">,</span><span class="mi">3</span><span class="p">),</span>
                      <span class="n">nn</span><span class="o">.</span><span class="n">LogSoftmax</span><span class="p">(</span><span class="n">dim</span><span class="o">=</span> <span class="mi">1</span><span class="p">))</span>

<span class="n">criterion</span> <span class="o">=</span> <span class="n">nn</span><span class="o">.</span><span class="n">NLLLoss</span><span class="p">()</span>
<span class="n">optimizer</span> <span class="o">=</span> <span class="n">optim</span><span class="o">.</span><span class="n">SGD</span><span class="p">(</span><span class="n">model</span><span class="o">.</span><span class="n">parameters</span><span class="p">(),</span> <span class="n">lr</span><span class="o">=</span><span class="mf">0.003</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[57]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">train</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">criterion</span><span class="p">,</span> <span class="n">optimizer</span><span class="p">,</span> <span class="n">inputs</span><span class="p">,</span> <span class="n">labels</span><span class="p">):</span>
    <span class="c1">#inputs = Variable(inputs, requires_grad= False)</span>
    <span class="c1">#labels = Variable(labels, requires_grad= False)</span>
    
    <span class="n">optimizer</span><span class="o">.</span><span class="n">zero_grad</span><span class="p">()</span>
    <span class="n">output</span> <span class="o">=</span> <span class="n">model</span><span class="p">(</span><span class="n">inputs</span><span class="p">)</span>
    <span class="n">loss</span> <span class="o">=</span> <span class="n">criterion</span><span class="p">(</span><span class="n">output</span><span class="p">,</span> <span class="n">labels</span><span class="p">)</span>
    
    <span class="n">loss</span><span class="o">.</span><span class="n">backward</span><span class="p">()</span>
    <span class="n">optimizer</span><span class="o">.</span><span class="n">step</span><span class="p">()</span>
    
    <span class="k">return</span> <span class="n">loss</span><span class="o">.</span><span class="n">item</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[58]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">predict</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">inputs</span><span class="p">):</span>
    <span class="n">output</span> <span class="o">=</span> <span class="n">model</span><span class="p">(</span><span class="n">inputs</span><span class="p">)</span>
    <span class="k">return</span> <span class="n">output</span><span class="o">.</span><span class="n">data</span><span class="o">.</span><span class="n">numpy</span><span class="p">()</span><span class="o">.</span><span class="n">argmax</span><span class="p">(</span><span class="n">axis</span><span class="o">=</span> <span class="mi">1</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[59]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">X_train</span> <span class="o">=</span> <span class="n">torch</span><span class="o">.</span><span class="n">from_numpy</span><span class="p">(</span><span class="n">X_train</span><span class="p">)</span><span class="o">.</span><span class="n">float</span><span class="p">()</span>
<span class="n">X_test</span> <span class="o">=</span> <span class="n">torch</span><span class="o">.</span><span class="n">from_numpy</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span><span class="o">.</span><span class="n">float</span><span class="p">()</span>
<span class="n">y_train</span> <span class="o">=</span> <span class="n">torch</span><span class="o">.</span><span class="n">from_numpy</span><span class="p">(</span><span class="n">y_train</span><span class="p">)</span><span class="o">.</span><span class="n">long</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>X_train</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[60]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">epochs</span><span class="o">=</span> <span class="mi">100</span>
<span class="n">batch_size</span><span class="o">=</span> <span class="mi">15</span>
<span class="n">n_batches</span> <span class="o">=</span> <span class="mi">9</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[61]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">costs</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">test_accuracies</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">e</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="n">epochs</span><span class="p">):</span>
    <span class="n">running_loss</span> <span class="o">=</span> <span class="mi">0</span>
    <span class="k">for</span> <span class="n">j</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="n">n_batches</span><span class="p">):</span>
        <span class="n">Xbatch</span> <span class="o">=</span> <span class="n">X_train</span><span class="p">[</span><span class="n">j</span><span class="o">*</span><span class="n">batch_size</span><span class="p">:(</span><span class="n">j</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span><span class="o">*</span><span class="n">batch_size</span><span class="p">]</span>
        <span class="n">Ybatch</span> <span class="o">=</span> <span class="n">y_train</span><span class="p">[</span><span class="n">j</span><span class="o">*</span><span class="n">batch_size</span><span class="p">:(</span><span class="n">j</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span><span class="o">*</span><span class="n">batch_size</span><span class="p">]</span>
        
        <span class="n">running_loss</span> <span class="o">+=</span> <span class="n">train</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">criterion</span><span class="p">,</span> <span class="n">optimizer</span><span class="p">,</span> <span class="n">Xbatch</span><span class="p">,</span> <span class="n">Ybatch</span><span class="p">)</span>
        
    <span class="n">Ypred</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">X_test</span><span class="p">)</span>
    <span class="n">acc</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">y_test</span> <span class="o">==</span> <span class="n">Ypred</span><span class="p">)</span>
    
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Epoch: </span><span class="si">%d</span><span class="s2">, cost: </span><span class="si">%f</span><span class="s2">, accuracy: </span><span class="si">%.2f</span><span class="s2">"</span> <span class="o">%</span> <span class="p">(</span><span class="n">e</span><span class="p">,</span> <span class="n">running_loss</span><span class="o">/</span><span class="n">n_batches</span><span class="p">,</span> <span class="n">acc</span><span class="p">))</span>
    
    <span class="n">costs</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">running_loss</span><span class="o">/</span><span class="n">n_batches</span><span class="p">)</span>
    <span class="n">test_accuracies</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">acc</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Epoch: 0, cost: 1.123200, accuracy: 0.33
Epoch: 1, cost: 1.122298, accuracy: 0.33
Epoch: 2, cost: 1.121340, accuracy: 0.33
Epoch: 3, cost: 1.120378, accuracy: 0.33
Epoch: 4, cost: 1.119450, accuracy: 0.33
Epoch: 5, cost: 1.118534, accuracy: 0.33
Epoch: 6, cost: 1.117646, accuracy: 0.33
Epoch: 7, cost: 1.116776, accuracy: 0.33
Epoch: 8, cost: 1.115925, accuracy: 0.33
Epoch: 9, cost: 1.115104, accuracy: 0.33
Epoch: 10, cost: 1.114311, accuracy: 0.33
Epoch: 11, cost: 1.113545, accuracy: 0.33
Epoch: 12, cost: 1.112789, accuracy: 0.33
Epoch: 13, cost: 1.112067, accuracy: 0.33
Epoch: 14, cost: 1.111378, accuracy: 0.33
Epoch: 15, cost: 1.110719, accuracy: 0.33
Epoch: 16, cost: 1.110112, accuracy: 0.33
Epoch: 17, cost: 1.109539, accuracy: 0.33
Epoch: 18, cost: 1.108994, accuracy: 0.33
Epoch: 19, cost: 1.108475, accuracy: 0.33
Epoch: 20, cost: 1.107974, accuracy: 0.33
Epoch: 21, cost: 1.107493, accuracy: 0.33
Epoch: 22, cost: 1.107032, accuracy: 0.33
Epoch: 23, cost: 1.106584, accuracy: 0.33
Epoch: 24, cost: 1.106148, accuracy: 0.33
Epoch: 25, cost: 1.105720, accuracy: 0.33
Epoch: 26, cost: 1.105300, accuracy: 0.33
Epoch: 27, cost: 1.104889, accuracy: 0.33
Epoch: 28, cost: 1.104483, accuracy: 0.33
Epoch: 29, cost: 1.104084, accuracy: 0.33
Epoch: 30, cost: 1.103692, accuracy: 0.33
Epoch: 31, cost: 1.103305, accuracy: 0.33
Epoch: 32, cost: 1.102924, accuracy: 0.33
Epoch: 33, cost: 1.102549, accuracy: 0.33
Epoch: 34, cost: 1.102178, accuracy: 0.33
Epoch: 35, cost: 1.101814, accuracy: 0.33
Epoch: 36, cost: 1.101455, accuracy: 0.33
Epoch: 37, cost: 1.101100, accuracy: 0.33
Epoch: 38, cost: 1.100750, accuracy: 0.33
Epoch: 39, cost: 1.100404, accuracy: 0.33
Epoch: 40, cost: 1.100064, accuracy: 0.33
Epoch: 41, cost: 1.099726, accuracy: 0.33
Epoch: 42, cost: 1.099394, accuracy: 0.33
Epoch: 43, cost: 1.099065, accuracy: 0.33
Epoch: 44, cost: 1.098741, accuracy: 0.33
Epoch: 45, cost: 1.098419, accuracy: 0.33
Epoch: 46, cost: 1.098102, accuracy: 0.33
Epoch: 47, cost: 1.097787, accuracy: 0.33
Epoch: 48, cost: 1.097476, accuracy: 0.33
Epoch: 49, cost: 1.097169, accuracy: 0.33
Epoch: 50, cost: 1.096864, accuracy: 0.33
Epoch: 51, cost: 1.096562, accuracy: 0.33
Epoch: 52, cost: 1.096263, accuracy: 0.33
Epoch: 53, cost: 1.095967, accuracy: 0.33
Epoch: 54, cost: 1.095673, accuracy: 0.33
Epoch: 55, cost: 1.095382, accuracy: 0.33
Epoch: 56, cost: 1.095093, accuracy: 0.33
Epoch: 57, cost: 1.094806, accuracy: 0.33
Epoch: 58, cost: 1.094522, accuracy: 0.33
Epoch: 59, cost: 1.094240, accuracy: 0.33
Epoch: 60, cost: 1.093961, accuracy: 0.33
Epoch: 61, cost: 1.093684, accuracy: 0.33
Epoch: 62, cost: 1.093408, accuracy: 0.33
Epoch: 63, cost: 1.093134, accuracy: 0.33
Epoch: 64, cost: 1.092863, accuracy: 0.33
Epoch: 65, cost: 1.092593, accuracy: 0.33
Epoch: 66, cost: 1.092324, accuracy: 0.33
Epoch: 67, cost: 1.092057, accuracy: 0.33
Epoch: 68, cost: 1.091791, accuracy: 0.33
Epoch: 69, cost: 1.091528, accuracy: 0.33
Epoch: 70, cost: 1.091265, accuracy: 0.33
Epoch: 71, cost: 1.091004, accuracy: 0.33
Epoch: 72, cost: 1.090745, accuracy: 0.33
Epoch: 73, cost: 1.090485, accuracy: 0.33
Epoch: 74, cost: 1.090228, accuracy: 0.33
Epoch: 75, cost: 1.089971, accuracy: 0.33
Epoch: 76, cost: 1.089716, accuracy: 0.33
Epoch: 77, cost: 1.089461, accuracy: 0.33
Epoch: 78, cost: 1.089207, accuracy: 0.33
Epoch: 79, cost: 1.088953, accuracy: 0.33
Epoch: 80, cost: 1.088700, accuracy: 0.33
Epoch: 81, cost: 1.088448, accuracy: 0.33
Epoch: 82, cost: 1.088196, accuracy: 0.33
Epoch: 83, cost: 1.087944, accuracy: 0.33
Epoch: 84, cost: 1.087693, accuracy: 0.33
Epoch: 85, cost: 1.087442, accuracy: 0.33
Epoch: 86, cost: 1.087192, accuracy: 0.33
Epoch: 87, cost: 1.086940, accuracy: 0.33
Epoch: 88, cost: 1.086690, accuracy: 0.33
Epoch: 89, cost: 1.086439, accuracy: 0.33
Epoch: 90, cost: 1.086187, accuracy: 0.33
Epoch: 91, cost: 1.085938, accuracy: 0.33
Epoch: 92, cost: 1.085687, accuracy: 0.33
Epoch: 93, cost: 1.085436, accuracy: 0.33
Epoch: 94, cost: 1.085184, accuracy: 0.33
Epoch: 95, cost: 1.084933, accuracy: 0.33
Epoch: 96, cost: 1.084681, accuracy: 0.33
Epoch: 97, cost: 1.084428, accuracy: 0.33
Epoch: 98, cost: 1.084175, accuracy: 0.33
Epoch: 99, cost: 1.083921, accuracy: 0.33
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[62]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="o">%</span><span class="k">matplotlib</span> inline
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[63]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">costs</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">"Training Costs"</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[64]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">test_accuracies</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">"Test Accuracies"</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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">
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[65]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">ypred</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">X_test</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[66]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="k">import</span> <span class="n">confusion_matrix</span><span class="p">,</span> <span class="n">accuracy_score</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[67]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">ypred</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Accuracy Score is </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">accuracy_score</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">ypred</span><span class="p">)))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[[5 0 0]
 [6 0 0]
 [4 0 0]]
Accuracy Score is 0.3333333333333333
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h4 id="We-can-see-that-due-to-very-less-dataset-accuracy-given-by-the-neural-networks-is-very-less">We can see that due to very less dataset accuracy given by the neural networks is very less<a class="anchor-link" href="https://careerhigh.in/machine-learning-iris-code/#We-can-see-that-due-to-very-less-dataset-accuracy-given-by-the-neural-networks-is-very-less">¶</a></h4>
</div>
</div>
</div>
    </div>
  </div>


 



</body></html>