<?php include('settings.php');


if (!loggedin()) {

    echo "<script> window.location.replace(\"login.php\"); </script>";
}





include('data.php');

?>




<!DOCTYPE html>
<html class="dark-theme" style="height: 100%;" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="referals_files/simplebar.css" rel="stylesheet">
    <link href="referals_files/perfect-scrollbar.css" rel="stylesheet">
    <link href="referals_files/metisMenu.css" rel="stylesheet">
    <link href="referals_files/jquery-jvectormap-2.css" rel="stylesheet">
    <link href="referals_files/highcharts.css" rel="stylesheet">
    <!-- loader-->
    <link href="referals_files/pace.css" rel="stylesheet">
    <script src="referals_files/pace.js"></script>
    <!-- Bootstrap CSS -->
    <link href="referals_files/bootstrap.css" rel="stylesheet">
    <link href="referals_files/css2.css" rel="stylesheet">
    <link href="referals_files/app.css" rel="stylesheet">
    <link href="referals_files/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="referals_files/dark-theme.css">
    <link rel="stylesheet" href="referals_files/semi-dark.css">
    <link rel="stylesheet" href="referals_files/header-colors.css">


    <link href="referals_files/sweetalert2.css" rel="stylesheet">
    <script src="referals_files/sweetalert2.js"></script>
    <style>
        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 .625em #d9d9d9
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: static;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            padding: 0;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: 700
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
                font-size: .25em
            }
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            flex-basis: auto !important;
            width: auto;
            height: auto;
            margin: 0 .3125em;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.8em;
            left: -.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-toast-animate-success-line-tip .75s;
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-toast-animate-success-line-long .75s;
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: swal2-toast-show .5s;
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: swal2-toast-hide .1s forwards;
            animation: swal2-toast-hide .1s forwards
        }

        .swal2-container {
            display: flex;
            position: fixed;
            z-index: 1060;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        .swal2-container.swal2-backdrop-hide {
            background: 0 0 !important
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom-end>:first-child,
        .swal2-container.swal2-bottom-left>:first-child,
        .swal2-container.swal2-bottom-right>:first-child,
        .swal2-container.swal2-bottom-start>:first-child,
        .swal2-container.swal2-bottom>:first-child {
            margin-top: auto
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-no-transition {
            transition: none !important
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border: none;
            border-radius: 5px;
            background: #fff;
            font-family: inherit;
            font-size: 1rem
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 1.8em
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-actions {
            display: flex;
            z-index: 1;
            box-sizing: border-box;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 1.25em auto 0;
            padding: 0 1.6em
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-loader {
            display: none;
            align-items: center;
            justify-content: center;
            width: 2.2em;
            height: 2.2em;
            margin: 0 1.875em;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border-width: .25em;
            border-style: solid;
            border-radius: 100%;
            border-color: #2778c4 transparent #2778c4 transparent
        }

        .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            box-shadow: none;
            font-weight: 500
        }

        .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #2778c4;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-deny {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #d14529;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #757575;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: .25em;
            overflow: hidden;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .swal2-timer-progress-bar {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-close {
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s ease-out;
            border: none;
            border-radius: 5px;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer
        }

        .swal2-close:hover {
            transform: none;
            background: 0 0;
            color: #f27474
        }

        .swal2-close:focus {
            outline: 0;
            box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-close::-moz-focus-inner {
            border: 0
        }

        .swal2-content {
            z-index: 1;
            justify-content: center;
            margin: 0;
            padding: 0 1.6em;
            color: #545454;
            font-size: 1.125em;
            font-weight: 400;
            line-height: normal;
            text-align: center;
            word-wrap: break-word
        }

        .swal2-checkbox,
        .swal2-file,
        .swal2-input,
        .swal2-radio,
        .swal2-select,
        .swal2-textarea {
            margin: 1em auto
        }

        .swal2-file,
        .swal2-input,
        .swal2-textarea {
            box-sizing: border-box;
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: inherit;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-file.swal2-inputerror,
        .swal2-input.swal2-inputerror,
        .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-file:focus,
        .swal2-input:focus,
        .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-file::-moz-placeholder,
        .swal2-input::-moz-placeholder,
        .swal2-textarea::-moz-placeholder {
            color: #ccc
        }

        .swal2-file:-ms-input-placeholder,
        .swal2-input:-ms-input-placeholder,
        .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::placeholder,
        .swal2-input::placeholder,
        .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-range {
            margin: 1em auto;
            background: #fff
        }

        .swal2-range input {
            width: 80%
        }

        .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        .swal2-range input,
        .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-file {
            background: inherit;
            font-size: 1.125em
        }

        .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: inherit;
            color: inherit;
            font-size: 1.125em
        }

        .swal2-checkbox,
        .swal2-radio {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        .swal2-checkbox label,
        .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-checkbox input,
        .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-input-label {
            display: flex;
            justify-content: center;
            margin: 1em auto
        }

        .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            margin: 0 -2.7em;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        .swal2-validation-message::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        .swal2-icon {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-error.swal2-icon-show {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -.25em;
            left: -.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-progress-steps {
            flex-wrap: wrap;
            align-items: center;
            max-width: 100%;
            margin: 0 0 1.25em;
            padding: 0;
            background: inherit;
            font-weight: 600
        }

        .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            flex-shrink: 0;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #2778c4;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #2778c4
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            flex-shrink: 0;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #2778c4
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-webkit-keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @-webkit-keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @-webkit-keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            max-width: calc(100% - .625em * 2);
            background-color: transparent !important
        }

        body.swal2-no-backdrop .swal2-container>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-left,
        body.swal2-no-backdrop .swal2-container.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-end,
        body.swal2-no-backdrop .swal2-container.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-left,
        body.swal2-no-backdrop .swal2-container.swal2-center-start {
            top: 50%;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-end,
        body.swal2-no-backdrop .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }
    </style>
    <script src="referals_files/ext-component-sweet-alerts.js"></script>
    <link rel="stylesheet" href="referals_files/custom.css">
    <title>Ravers Trade | Investment Project</title>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="referals_files/translateelement.css">
    <script type="text/javascript" charset="UTF-8" src="referals_files/main.js"></script>
    <script type="text/javascript" charset="UTF-8" src="referals_files/element_main.js"></script>
</head>

<body class="  pace-done" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="8.881.0" data-gr-ext-installed="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!--wrapper-->
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="logo"><img src="referals_files/translate_24dp.png" alt="Google Translate" width="20" height="20"></div>
            </div>
        </div>
        <div class="top" style="padding: 8px; float: left; width: 100%;">
            <h1 class="title gray">Original text</h1>
        </div>
        <div class="middle" style="padding: 8px;">
            <div class="original-text"></div>
        </div>
        <div class="bottom" style="padding: 8px;">
            <div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div>
            <div class="started-activity-container">
                <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                <div class="activity-root"></div>
            </div>
        </div>
        <div class="status-message" style="display: none;"></div>
    </div>
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content mm-active" style="padding: 0px;">
                                <div class="sidebar-header">
                                    <div>
                                        <img src="referals_files/logo-icon.png" class="logo-icon" alt="logo icon">
                                    </div>
                                    <div>
                                        <h4 class="logo-text">Ravers Trade</h4>
                                    </div>
                                    <div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i>
                                    </div>
                                </div>
                                <!--navigation-->
                                <ul class="metismenu mm-show" id="menu">
                                    <li>
                                        <a href="account" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-home-circle"></i>
                                            </div>
                                            <div class="menu-title">MY ACCOUNT</div>
                                        </a>
                                    </li>
                                    <li class="menu-label">FUND MANAGEMENT</li>
                                    <li>
                                        <a href="deposit" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-coin-stack"></i>
                                            </div>
                                            <div class="menu-title">MAKE DEPOSIT</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="withdraw" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-blanket"></i>
                                            </div>
                                            <div class="menu-title">WITHDRAWAL</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="deposit_list" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-wallet-alt"></i>
                                            </div>
                                            <div class="menu-title">INVESTMENTS</div>
                                        </a>
                                    </li>


                                    <li class="menu-label">AFFILIATE PROGRAM</li>
                                    <li class="">
                                        <a href="referals" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-share-alt"></i>
                                            </div>
                                            <div class="menu-title">REFERRALS</div>
                                        </a>
                                    </li>



                                    <hr>
                                    <li>
                                        <a href="logout" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-log-out"></i>
                                            </div>
                                            <div class="menu-title">LOGOUT</div>
                                        </a>
                                    </li>
                                </ul>
                                <!--end navigation-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 756px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 569px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
        <!--end sidebar wrapper -->

        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class="bx bx-menu"></i>
                    </div>

                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">

                            <!-- <center> -->
                            <style type="text/css">
                                <!--
                                a.gflag {
                                    vertical-align: middle;

                                    padding: 1px 0;
                                    background-repeat: no-repeat;

                                }

                                a.gflag img {
                                    border: 0;
                                }



                                #goog-gt-tt {
                                    display: none !important;
                                }

                                .goog-te-banner-frame {
                                    display: none !important;
                                }

                                .goog-te-menu-value:hover {
                                    text-decoration: none !important;
                                }

                                body {
                                    top: 0 !important;
                                }

                                #google_translate_element2 {
                                    display: none !important;
                                }
                                -->
                            </style>

                            <div id="google_translate_element2">
                                <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                                    <div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget">
                                            <option value="" selected="selected">Select Language</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian</option>
                                            <option value="am">Amharic</option>
                                            <option value="ar">Arabic</option>
                                            <option value="hy">Armenian</option>
                                            <option value="az">Azerbaijani</option>
                                            <option value="eu">Basque</option>
                                            <option value="be">Belarusian</option>
                                            <option value="bn">Bengali</option>
                                            <option value="bs">Bosnian</option>
                                            <option value="bg">Bulgarian</option>
                                            <option value="ca">Catalan</option>
                                            <option value="ceb">Cebuano</option>
                                            <option value="ny">Chichewa</option>
                                            <option value="zh-CN">Chinese (Simplified)</option>
                                            <option value="zh-TW">Chinese (Traditional)</option>
                                            <option value="co">Corsican</option>
                                            <option value="hr">Croatian</option>
                                            <option value="cs">Czech</option>
                                            <option value="da">Danish</option>
                                            <option value="nl">Dutch</option>
                                            <option value="eo">Esperanto</option>
                                            <option value="et">Estonian</option>
                                            <option value="tl">Filipino</option>
                                            <option value="fi">Finnish</option>
                                            <option value="fr">French</option>
                                            <option value="fy">Frisian</option>
                                            <option value="gl">Galician</option>
                                            <option value="ka">Georgian</option>
                                            <option value="de">German</option>
                                            <option value="el">Greek</option>
                                            <option value="gu">Gujarati</option>
                                            <option value="ht">Haitian Creole</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian</option>
                                            <option value="iw">Hebrew</option>
                                            <option value="hi">Hindi</option>
                                            <option value="hmn">Hmong</option>
                                            <option value="hu">Hungarian</option>
                                            <option value="is">Icelandic</option>
                                            <option value="ig">Igbo</option>
                                            <option value="id">Indonesian</option>
                                            <option value="ga">Irish</option>
                                            <option value="it">Italian</option>
                                            <option value="ja">Japanese</option>
                                            <option value="jw">Javanese</option>
                                            <option value="kn">Kannada</option>
                                            <option value="kk">Kazakh</option>
                                            <option value="km">Khmer</option>
                                            <option value="rw">Kinyarwanda</option>
                                            <option value="ko">Korean</option>
                                            <option value="ku">Kurdish (Kurmanji)</option>
                                            <option value="ky">Kyrgyz</option>
                                            <option value="lo">Lao</option>
                                            <option value="la">Latin</option>
                                            <option value="lv">Latvian</option>
                                            <option value="lt">Lithuanian</option>
                                            <option value="lb">Luxembourgish</option>
                                            <option value="mk">Macedonian</option>
                                            <option value="mg">Malagasy</option>
                                            <option value="ms">Malay</option>
                                            <option value="ml">Malayalam</option>
                                            <option value="mt">Maltese</option>
                                            <option value="mi">Maori</option>
                                            <option value="mr">Marathi</option>
                                            <option value="mn">Mongolian</option>
                                            <option value="my">Myanmar (Burmese)</option>
                                            <option value="ne">Nepali</option>
                                            <option value="no">Norwegian</option>
                                            <option value="or">Odia (Oriya)</option>
                                            <option value="ps">Pashto</option>
                                            <option value="fa">Persian</option>
                                            <option value="pl">Polish</option>
                                            <option value="pt">Portuguese</option>
                                            <option value="pa">Punjabi</option>
                                            <option value="ro">Romanian</option>
                                            <option value="ru">Russian</option>
                                            <option value="sm">Samoan</option>
                                            <option value="gd">Scots Gaelic</option>
                                            <option value="sr">Serbian</option>
                                            <option value="st">Sesotho</option>
                                            <option value="sn">Shona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala</option>
                                            <option value="sk">Slovak</option>
                                            <option value="sl">Slovenian</option>
                                            <option value="so">Somali</option>
                                            <option value="es">Spanish</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili</option>
                                            <option value="sv">Swedish</option>
                                            <option value="tg">Tajik</option>
                                            <option value="ta">Tamil</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu</option>
                                            <option value="th">Thai</option>
                                            <option value="tr">Turkish</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="uk">Ukrainian</option>
                                            <option value="ur">Urdu</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek</option>
                                            <option value="vi">Vietnamese</option>
                                            <option value="cy">Welsh</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba</option>
                                            <option value="zu">Zulu</option>
                                        </select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="referals_files/googlelogo_color_42x16dp.png" style="padding-right: 3px" alt="Google Translate" width="37px" height="14px">Translate</a></span>
                                </div>
                            </div>

                            <script type="text/javascript">
                                function googleTranslateElementInit2() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en',
                                        autoDisplay: false
                                    }, 'google_translate_element2');
                                }
                            </script>
                            <script type="text/javascript" src="referals_files/element.js"></script>


                            <script type="text/javascript">
                                /* <![CDATA[ */
                                eval(function(p, a, c, k, e, r) {
                                    e = function(c) {
                                        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                                    };
                                    if (!''.replace(/^/, String)) {
                                        while (c--) r[e(c)] = k[c] || e(c);
                                        k = [function(e) {
                                            return r[e]
                                        }];
                                        e = function() {
                                            return '\\w+'
                                        };
                                        c = 1
                                    };
                                    while (c--)
                                        if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                                    return p
                                }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
                                /* ]]> */
                            </script>
                            <div class="flagmenu" style="justify-content: space-between; align-items: flex-start;">

                                <a href="referals?a=home#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="referals_files/de.svg" alt="German">
                                </a>
                                <a href="referals?a=home#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="referals_files/ru.svg" alt="Russian">
                                </a>
                                <a href="referals?a=home#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="referals_files/fr.svg" alt="French">
                                </a>
                                <a href="referals?a=home#" onclick="doGTranslate('en|tr');return false;" title="Turkish" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="referals_files/tr.svg" alt="Turkish">
                                </a>
                                <a href="referals?a=home#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="referals_files/gb.svg" alt="English">
                                </a>

                            </div>


                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list ps">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                                                            ago</span></h6>
                                                    <p class="msg-info">The pdf files generated</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                                                            ago</span></h6>
                                                    <p class="msg-info">5.1 min avarage time response</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                                                    <p class="msg-info">Your new product has approved</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">New customer comments recived</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i class="bx bx-check-square"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i class="bx bx-user-pin"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i class="bx bx-door-open"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                                                            ago</span></h6>
                                                    <p class="msg-info">45% less alerts last 4 weeks</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large d-none ">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                    <i class="bx bx-comment"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list ps">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-1.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-2.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-3.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-4.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-5.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
                                                            ago</span></h6>
                                                    <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-6.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The passage is attributed to an unknown</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-7.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The point of using Lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-8.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">It was popularised in the 1960s</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-9.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-10.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
                                                            ago</span></h6>
                                                    <p class="msg-info">If you are going to use a passage</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="referals_files/avatar-11.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
                                                            ago</span></h6>
                                                    <p class="msg-info">All the Lorem Ipsum generators</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-user"></i>
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php echo $user_name; ?> </p>

                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="edit_account"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>


                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="logout"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->

        <style>
            .refcol {
                text-align: center;
                padding: 20px 15px 34px;
            }

            .tit {
                color: #526270;
                font-size: 20px;
                font-weight: 500;
                text-transform: uppercase;
                text-align: center;
                display: block;
                margin-top: 34px;
                letter-spacing: 4px;
            }

            .name {
                color: #fff;
                font-size: 30px;
                text-transform: uppercase;
                text-align: center;
                display: block;
                margin-top: 7px;
                font-weight: 500;
            }

            .font-48 {
                font-size: 48px;
            }



            .refcol h4 span {
                color: #526270;
            }
        </style>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <div class="container">

                    <div class="container">
                        <div class="col-12">

                            <div class="card-body">
                                <div class="balances d-flex align-items-center">
                                    <div>
                                        <h3 class="mb-0">Wallet BALANCE</h3>
                                        <h2 class="mb-0">$<?php echo $bal; ?></h2>
                                    </div>
                                    </div><br><br><br>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h1>Deposit Wallet</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row  match-height">
                            <div class="col-lg-12 col-md-12">
                                <div class="card text-center">
                                    <div class="card-heading">
                                        <h4 class="card-title text-muted mb-0"> Pay to this Bitcoin Wallet Address</h4>
                                    </div>
                                    <div class="card-body p-t-10">
                                        <div class="input-group mb-3">
                                            <input type="text" id="copy-to-clipboard-input" class="form-control form-control-sm" readonly value="<?= $pay_address; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-xs" id="btn-copy" data-clipboard-target="#copy-to-clipboard-input">Copy</button>
                                            </div>
                                        </div>

                                    </div>

                                    <p>Once we recieve your payment, don't worry your wallet will be credited automatically</p>
                                </div>
                            </div>


                        </div>
                        <div class="row match-height">


                            <div class="col-lg-12 col-md-12">
                                <h4 class="card-title">Deposit History</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive mt-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>S/N</td>
                                                <th>Amount ($)</th>
                                                <th>Coin Equ.</th>
                                                <th>Coin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $deposite_tran = new run_query("select * from transaction where tran_email = '$user_email' and tran_desc ='DEPOSIT'  order by tran_id desc ");
                                            $no = 1;
                                            while ($deposite_tran_data =    $deposite_tran->result()) {

                                                extract($deposite_tran_data);

                                                echo "
							
								

						<tr>
					<td>$no</td>
					<td> $ $trant_amt</td>
					<td> $coin_amt</td>
					<td> $coin</td>
					<td>
					<span class='badge badge-danger'>$tran_status</span>
					</td>
					<td><a href='#!' class='btn btn-sm btn-primary' data-toggle='tooltip' title='Transaction Hash ID: $hash_id'><i class='fa fa-eye'></i></a></td>
					</tr>
								
								";
                                                $no++;
                                            }


                                            ?>



                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>S/N</td>
                                                <th>Amount ($)</th>
                                                <th>Coin Equ.</th>
                                                <th>Coin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>





                    </div>
                    <style>
                        section.box {
                            margin: 15px 0;
                            overflow: hidden;
                            -webkit-box-shadow: 0 2px 28px rgba(0, 0, 0, .1);
                            box-shadow: 0 2px 28px rgba(0, 0, 0, .1);
                        }

                        section header {
                            width: 100%;
                            display: inline-block;
                            border: 1px solid rgba(0, 0, 0, 0.09);
                            border-bottom: 0px solid transparent;
                            vertical-align: top;
                            position: relative;
                            min-height: 75px;
                        }

                        section header .title {
                            margin-top: 10px;
                            font-family: 'Roboto', Arial, Helvetica, sans-serif;
                            font-size: 18px;
                            padding-left: 30px;
                            padding-top: 15px;
                            line-height: 30px;
                            color: #676767;
                            font-weight: 400;
                            display: inline-block;
                        }

                        section .content-body {
                            padding: 5px 20px 30px 20px;
                            border: 1px solid #e53a11;
                            border-top: 0px;
                            -webkit-transition: 800ms;
                            -moz-transition: 800ms;
                            -o-transition: 800ms;
                            transition: 800ms;
                        }

                        section.box .actions {
                            margin: 10px 15px 0 15px;
                            line-height: 50px;
                            position: absolute;
                            right: 0px;
                            top: 0px;
                        }

                        section.box .actions a {
                            color: #bcbcbc;
                            font-size: 12px;
                            margin-left: 0px;
                            padding: 5px;
                            cursor: hand;
                            cursor: pointer;
                            text-decoration: none;
                        }

                        section.box .actions a:hover {
                            color: #999999;
                            text-decoration: none;
                        }

                        i.complete {
                            color: #6fc334;
                            font-size: 12px;
                            margin-right: 7px;
                        }

                        .reward-box {
                            position: relative;
                            border: 1px solid #eee;
                            padding: 20px;
                            transition: all .3s;
                        }

                        .rank-span {
                            position: absolute;
                            top: -16px;
                            left: 50%;
                            transform: translateX(-50%);
                        }

                        .reward-box:hover {
                            border-color: #E53A11;
                            cursor: pointer;
                        }

                        .reward-box small {
                            text-align: center;
                            width: 100%;
                            display: block;
                        }

                        .reward-box img.next {
                            max-width: 120px;
                            -webkit-filter: grayscale(1);
                            filter: grayscale(1);
                        }

                        .fa {
                            font-size: 14px;
                        }

                        .has-border-left-3 {
                            border-bottom: 3px solid #E53A11;
                        }

                        .color-white {
                            color: #fff !important;
                        }

                        .color-primary {
                            color: #E53A11 !important;
                        }

                        .mt-20 {
                            margin-top: 20px !important;
                        }

                        .mt-30 {
                            margin-top: 30px !important;
                        }

                        .mb-10 {
                            margin-bottom: 10px !important;
                        }

                        .no-mt {
                            margin-top: 0 !important;
                        }

                        .badge {
                            display: inline-block;
                            min-width: 10px;
                            padding: 3px 7px;
                            font-size: 12px;
                            font-weight: 400;
                            line-height: 1;
                            color: #fff;
                            background-color: #777;
                            border-radius: 10px;
                            -o-border-radius: 10px;
                            -ms-border-radius: 10px;
                            -moz-border-radius: 10px;
                            -webkit-border-radius: 10px;
                        }

                        .badge.badge-lg {
                            font-size: 17px;
                            padding: 7px 15px;
                            border-radius: 20px;
                            -o-border-radius: 20px;
                            -ms-border-radius: 20px;
                            -moz-border-radius: 20px;
                            -webkit-border-radius: 20px;
                        }

                        .badge .fa {
                            font-size: 12px;
                        }

                        .badge.badge-lg .fa {
                            font-size: 14px;
                        }

                        .badge-primary {
                            background-color: #E53A11;
                            color: #ffffff;
                        }


                        header,
                        section {
                            display: block;
                        }

                        a {
                            background-color: transparent;
                        }

                        a:active,
                        a:hover {
                            outline: 0;
                        }

                        strong {
                            font-weight: 700;
                        }

                        small {
                            font-size: 80%;
                        }

                        img {
                            border: 0;
                        }

                        hr {
                            height: 0;
                            -webkit-box-sizing: content-box;
                            -moz-box-sizing: content-box;
                            box-sizing: content-box;
                        }

                        @media print {

                            *,
                            :after,
                            :before {
                                color: #000 !important;
                                text-shadow: none !important;
                                background: 0 0 !important;
                                -webkit-box-shadow: none !important;
                                box-shadow: none !important;
                            }

                            a,
                            a:visited {
                                text-decoration: underline;
                            }

                            a[href]:after {
                                content: " ("attr(href) ")";
                            }

                            a[href^="#"]:after {
                                content: "";
                            }

                            img {
                                page-break-inside: avoid;
                            }

                            img {
                                max-width: 100% !important;
                            }

                            h2,
                            p {
                                orphans: 3;
                                widows: 3;
                            }

                            h2 {
                                page-break-after: avoid;
                            }
                        }

                        * {
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                        }

                        :after,
                        :before {
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                        }

                        a {
                            color: #337ab7;
                            text-decoration: none;
                        }

                        a:focus,
                        a:hover {
                            color: #23527c;
                            text-decoration: underline;
                        }

                        a:focus {
                            outline: thin dotted;
                            outline: 5px auto -webkit-focus-ring-color;
                            outline-offset: -2px;
                        }

                        img {
                            vertical-align: middle;
                        }

                        hr {
                            margin-top: 20px;
                            margin-bottom: 20px;
                            border: 0;
                            border-top: 1px solid #eee;
                        }

                        h2,
                        h4 {
                            font-family: inherit;
                            font-weight: 500;
                            line-height: 1.1;
                            color: inherit;
                        }

                        h4 small {
                            font-weight: 400;
                            line-height: 1;
                            color: #777;
                        }

                        h2 {
                            margin-top: 20px;
                            margin-bottom: 10px;
                        }

                        h4 {
                            margin-top: 10px;
                            margin-bottom: 10px;
                        }

                        h4 small {
                            font-size: 75%;
                        }

                        h2 {
                            font-size: 30px;
                        }

                        h4 {
                            font-size: 18px;
                        }

                        p {
                            margin: 0 0 10px;
                        }

                        small {
                            font-size: 85%;
                        }

                        .text-center {
                            text-align: center;
                        }

                        .row {
                            margin-right: -15px;
                            margin-left: -15px;
                        }

                        .col-lg-3,
                        .col-lg-8,
                        .col-md-6 {
                            position: relative;
                            min-height: 1px;
                            padding-right: 15px;
                            padding-left: 15px;
                        }

                        @media (min-width:992px) {
                            .col-md-6 {
                                float: left;
                            }

                            .col-md-6 {
                                width: 50%;
                            }
                        }

                        @media (min-width:1200px) {

                            .col-lg-3,
                            .col-lg-8 {
                                float: left;
                            }

                            .col-lg-8 {
                                width: 66.66666667%;
                            }

                            .col-lg-3 {
                                width: 25%;
                            }
                        }

                        .badge {
                            display: inline-block;
                            min-width: 10px;
                            padding: 3px 7px;
                            font-size: 12px;
                            font-weight: 700;
                            line-height: 1;
                            color: #fff;
                            text-align: center;
                            white-space: nowrap;
                            vertical-align: middle;
                            background-color: #777;
                            border-radius: 10px;
                        }

                        .badge:empty {
                            display: none;
                        }

                        .clearfix:after,
                        .clearfix:before,
                        .row:after,
                        .row:before {
                            display: table;
                            content: " ";
                        }

                        .clearfix:after,
                        .row:after {
                            clear: both;
                        }

                        .center-block {
                            display: block;
                            margin-right: auto;
                            margin-left: auto;
                        }

                        .pull-right {
                            float: right !important;
                        }

                        .pull-left {
                            float: left !important;
                        }


                        .fa {
                            display: inline-block;
                            font: normal normal normal 14px/1 FontAwesome;
                            font-size: inherit;
                            text-rendering: auto;
                            -webkit-font-smoothing: antialiased;
                            -moz-osx-font-smoothing: grayscale;
                        }

                        .pull-right {
                            float: right;
                        }

                        .pull-left {
                            float: left;
                        }

                        .fa-star:before {
                            content: "\f005";
                        }

                        .fa-times:before {
                            content: "\f00d";
                        }

                        .fa-cog:before {
                            content: "\f013";
                        }

                        .fa-mail-forward:before {
                            content: "\f064";
                        }

                        .fa-chevron-down:before {
                            content: "\f078";
                        }


                        h2,
                        h4 {
                            margin: 10px 0;
                            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                            font-weight: 400;
                            color: #505458;
                        }

                        .bold {
                            font-weight: 700;
                        }

                        .f-s-14 {
                            font-size: 14px !important;
                        }

                        img {
                            width: 100%;
                        }

                        a {
                            color: #e77512;
                        }

                        a:hover,
                        a:focus {
                            color: #333333;
                        }
                    </style>

                    <!--end page wrapper -->
                    <!--start overlay-->
                    <div class="overlay toggle-icon "></div>
                    <!--end overlay-->
                    <!--Start Back To Top Button--><a href="javascript:;" class="back-to-top "><i class="bx bxs-up-arrow-alt"></i></a>
                    <!--End Back To Top Button-->
                    <footer class="page-footer ">
                        <p class="mb-0 ">Copyright © 2021 <span class="footertext2">Ravers Trade</span>. All right reserved.</p>
                    </footer>
                </div>
            </div>
        </div>


        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon "></div>
        <!--end overlay-->
        <!--Start Back To Top Button--><a href="javascript:;" class="back-to-top "><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer ">
            <p class="mb-0 ">Copyright © 2021 <span class="footertext2 ">Ravers Trade</span>. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <!-- Bootstrap JS -->

    <script src="referals_files/bootstrap.js"></script>
    <!--plugins-->
    <script src="referals_files/jquery.js"></script>
    <script src="referals_files/simplebar.js"></script>

    <script src="referals_files/perfect-scrollbar.js"></script>

    <script src="referals_files/widgets.js"></script>
    <script src="referals_files/clipboard1.js"></script>
    <!--app JS-->
    <script src="referals_files/app.js"></script>
    <script>
        new PerfectScrollbar('.dashboard-top-countries');
    </script>





    </div>
    <div class="goog-te-spinner-pos">
        <div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>