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
    <link href="deposit_files/simplebar.css" rel="stylesheet">
    <link href="deposit_files/perfect-scrollbar.css" rel="stylesheet">
    <link href="deposit_files/metisMenu.css" rel="stylesheet">
    <link href="deposit_files/jquery-jvectormap-2.css" rel="stylesheet">
    <link href="deposit_files/highcharts.css" rel="stylesheet">
    <!-- loader-->
    <link href="deposit_files/pace.css" rel="stylesheet">
    <script src="deposit_files/pace.js"></script>
    <!-- Bootstrap CSS -->
    <link href="deposit_files/bootstrap.css" rel="stylesheet">
    <link href="deposit_files/css2.css" rel="stylesheet">
    <link href="deposit_files/app.css" rel="stylesheet">
    <link href="deposit_files/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="deposit_files/dark-theme.css">
    <link rel="stylesheet" href="deposit_files/semi-dark.css">
    <link rel="stylesheet" href="deposit_files/header-colors.css">


    <link href="deposit_files/sweetalert2.css" rel="stylesheet">
    <script src="deposit_files/sweetalert2.js"></script>
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
    <script src="deposit_files/ext-component-sweet-alerts.js"></script>
    <link rel="stylesheet" href="deposit_files/custom.css">
    <title>Invest-Card | Investment Project</title>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="deposit_files/translateelement.css">
    <script type="text/javascript" charset="UTF-8" src="deposit_files/main.js"></script>
    <script type="text/javascript" charset="UTF-8" src="deposit_files/element_main.js"></script>
</head>

<body class="  pace-done" style="position: relative; min-height: 100%; top: 0px;" data-new-gr-c-s-check-loaded="8.881.0" data-gr-ext-installed="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!--wrapper-->
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
                                        <img src="deposit_files/logo-icon.png" class="logo-icon" alt="logo icon">
                                    </div>
                                    <div>
                                        <h4 class="logo-text">Invest Card</h4>
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
                                    <li class="mm-active">
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
                                            <div class="menu-title">DEPOSITS</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="earnings" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-stats"></i>
                                            </div>
                                            <div class="menu-title">HISTORY</div>
                                        </a>
                                    </li>

                                    <li class="menu-label">AFFILIATE PROGRAM</li>
                                    <li>
                                        <a href="referals" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-share-alt"></i>
                                            </div>
                                            <div class="menu-title">REFERRALS</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="referallinks" aria-expanded="true">
                                            <div class="parent-icon"><i class="bx bx-hash"></i>
                                            </div>
                                            <div class="menu-title">PROMO MATERIALS</div>
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
                <div class="simplebar-placeholder" style="width: auto; height: 747px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 576px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
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
                                        </select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="deposit_files/googlelogo_color_42x16dp.png" style="padding-right: 3px" alt="Google Translate" width="37px" height="14px">Translate</a></span>
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
                            <script type="text/javascript" src="deposit_files/element.js"></script>


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

                                <a href="deposit?a=home#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="deposit_files/de.svg" alt="German">
                                </a>
                                <a href="deposit?a=home#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="deposit_files/ru.svg" alt="Russian">
                                </a>
                                <a href="deposit?a=home#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="deposit_files/fr.svg" alt="French">
                                </a>
                                <a href="deposit?a=home#" onclick="doGTranslate('en|tr');return false;" title="Turkish" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="deposit_files/tr.svg" alt="Turkish">
                                </a>
                                <a href="deposit?a=home#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px; ">
                                    <img src="deposit_files/gb.svg" alt="English">
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
                                                    <img src="deposit_files/avatar-1.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-2.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-3.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-4.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-5.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-6.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-7.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-8.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-9.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-10.png" class="msg-avatar" alt="user avatar">
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
                                                    <img src="deposit_files/avatar-11.png" class="msg-avatar" alt="user avatar">
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
                                <p class="user-name mb-0">Asa</p>

                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="edit_account"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item" href="security"><i class="bx bx-cog"></i><span>Settings</span></a>
                            </li>

                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="logout;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <style>
            .inspiration {
                position: fixed;
                bottom: 0;
                right: 0;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                font-family: 'Gill Sans', sans-serif;
                font-size: 12px;
                color: #fff;
            }

            .left {
                position: absolute;
                left: 0;
                width: 60vw;
                height: 100vh;
                background-image: linear-gradient(to right, #202020, #808080);
            }

            .right {
                position: absolute;
                right: 0;
                width: 60vw;
                height: 100vh;
                overflow: hidden;
            }

            .right .strip-top {
                width: calc(50vw + 90px);
                transform: skewX(20deg) translateX(160px);
            }

            .right .strip-bottom {
                width: calc(50vw + 40px);
                transform: skewX(-15deg) translateX(90px);
            }

            .cardmain {
                justify-content: center;

                margin-bottom: 1rem;
            }

            .card2 {
                width: 400px;
                height: 250px;
            }

            .flip {
                width: inherit;
                height: inherit;
                transition: 0.7s;
                transform-style: preserve-3d;
                -webkit-animation: flip 2.5s ease;
                animation: flip 2.5s ease;
            }

            .front,
            .back {
                position: absolute;
                width: inherit;
                height: inherit;
                border-radius: 15px;
                color: #fff;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
                box-shadow: 0 1px 10px 1px rgba(0, 0, 0, 0.3);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                background-image: linear-gradient(to right, #111, #555);
                overflow: hidden;
            }

            .front {
                transform: translateZ(0);
            }

            .strip-bottom,
            .strip-top {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(to bottom, #572215, #bf270561);
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);
            }

            .strip-bottom {
                width: 200px;
                transform: skewX(-15deg) translateX(50px);
            }

            .strip-top {
                width: 180px;
                transform: skewX(20deg) translateX(50px);
            }

            .logo {
                position: absolute;
                top: 30px;
                right: 25px;
            }

            .investor {
                position: relative;
                top: 30px;
                left: 25px;
                text-transform: uppercase;
            }

            .chip {
                position: relative;
                top: 60px;
                left: 25px;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 40px;
                border-radius: 5px;
                background-image: linear-gradient(to bottom left, #ffecc7, #d0b978);
                overflow: hidden;
            }

            .chip .chip-line {
                position: absolute;
                width: 100%;
                height: 1px;
                background-color: #333;
            }

            .chip .chip-line:nth-child(1) {
                top: 13px;
            }

            .chip .chip-line:nth-child(2) {
                top: 20px;
            }

            .chip .chip-line:nth-child(3) {
                top: 28px;
            }

            .chip .chip-line:nth-child(4) {
                left: 25px;
                width: 1px;
                height: 50px;
            }

            .chip .chip-main {
                width: 20px;
                height: 25px;
                border: 1px solid #333;
                border-radius: 3px;
                background-image: linear-gradient(to bottom left, #efdbab, #e1cb94);
                z-index: 1;
            }

            .wave {
                position: relative;
                top: 7px;
                left: 100px;
            }

            .card-number {
                position: relative;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 30px 25px 10px;
                font-size: 23px;
                font-family: 'cc font', monospace;
            }

            .end {
                margin-left: 25px;
                text-transform: uppercase;
                font-family: 'cc font', monospace;
                z-index: 888;
                position: relative;
            }

            .end .end-text {
                font-size: 9px;
                color: rgba(255, 255, 255, 0.8);
            }

            .card-holder {
                margin: 2px 25px;
                text-transform: uppercase;
                font-family: 'cc font', monospace;
            }

            .master {
                position: absolute;
                right: 20px;
                bottom: 20px;
                display: flex;
            }

            .master .circle {
                width: 25px;
                height: 25px;
                border-radius: 50%;
            }

            .master .master-red {
                background-color: #eb001b;
            }

            .master .master-yellow {
                margin-left: -10px;
                background-color: rgb(37 37 37 / 23%);
            }

            .card2 {
                perspective: 1000;
            }



            .back {
                transform: rotateY(180deg) translateZ(0);
                background: #9e9e9e;
            }

            .back .strip-black {
                position: absolute;
                top: 30px;
                left: 0;
                width: 100%;
                height: 50px;
                background: #000;
            }

            .back .ccv {
                position: absolute;
                top: 110px;
                left: 0;
                right: 0;
                height: 36px;
                width: 90%;
                padding: 10px;
                margin: 0 auto;
                border-radius: 5px;
                text-align: right;
                letter-spacing: 1px;
                color: #000;
                background: #fff;
            }

            .back .ccv label {
                display: block;
                margin: -30px 0 15px;
                font-size: 10px;
                text-transform: uppercase;
                color: #fff;
            }

            .back .terms {
                position: absolute;
                top: 150px;
                padding: 20px;
                font-size: 10px;
                text-align: justify;
            }

            @font-face {
                font-family: 'cc font';
                src: url("data:application/font-woff2;charset=utf-8;base64,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") format("woff2");
                font-weight: normal;
                font-style: normal;
            }





            .strip-bottom,
            .strip-top {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(to bottom, #000000ba, #000000ba);
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);
            }

            .deposit-form .method_add input[type="radio"],
            .payment_method input[type="radio"] {
                display: none;
            }

            .method_add {
                margin-bottom: 10px;
                position: relative;
                padding: 0 10px 30px 0px;
            }


            .deposit-form .method_add label {
                display: block;
                cursor: pointer;
                text-align: inherit;
            }

            .padding-top-30 {
                padding-top: 30px;
            }




            .deposit-form .method_add input[type="radio"]#plan4+.crypto,
            .deposit-form .method_add input[type="radio"]#plan5+.crypto,
            .deposit-form .method_add input[type="radio"]#plan6+.crypto {
                opacity: 0.4;

            }

            .deposit-form .method_add input[type="radio"]#plan4:checked+.crypto,
            .deposit-form .method_add input[type="radio"]#plan5:checked+.crypto,
            .deposit-form .method_add input[type="radio"]#plan6:checked+.crypto {
                opacity: 1;
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                transform: scale(1.1);
                position: relative;
                z-index: 4;
                -webkit-transition: .5s;
                transition: .5s;

            }


            .deposit-form .method_add input[type="radio"]#plan4:checked+.crypto .front .strip-bottom {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(to bottom, #572215, #bf270561);
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);


            }

            .deposit-form .method_add input[type="radio"]#plan4:checked+.crypto .front .strip-top {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(to bottom, #572215, #bf270561);
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);

            }

            .deposit-form .method_add input[type="radio"]#plan5:checked+.crypto .front .strip-bottom {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(rgb(28 33 133 / 40%), rgb(40 37 222 / 80%));
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);


            }

            .deposit-form .method_add input[type="radio"]#plan5:checked+.crypto .front .strip-top {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(rgb(28 33 133 / 40%), rgb(40 37 222 / 80%));
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);

            }


            .deposit-form .method_add input[type="radio"]#plan6:checked+.crypto .front .strip-bottom {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(rgb(112 222 12 / 45%), rgb(89 195 28 / 61%));
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);


            }

            .deposit-form .method_add input[type="radio"]#plan6:checked+.crypto .front .strip-top {
                position: absolute;
                right: 0;
                height: inherit;
                background-image: linear-gradient(rgb(112 222 12 / 45%), rgb(89 195 28 / 61%));
                box-shadow: 0 0 10px 0px rgb(0 0 0 / 50%);

            }








            span.max_deposit {

                font-size: 20px;
            }

            @media (min-width: 992px) and (max-width: 1534px) {
                .card2 {
                    width: 300px;
                    height: 210px;
                }

                .chip {

                    top: 45px
                }

                .card-number {
                    position: relative;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin: 0px 25px 10px;
                    font-size: 5px;
                    font-family: none;
                }

                .wave {
                    position: relative;
                    top: -10px;
                    left: 90px;
                }

                .front .logo {
                    width: 60px;
                    height: 60px;
                }

                .card-holder {

                    z-index: 99999;
                    position: relative;
                }

            }

            @media (max-width: 461px) {
                .card2 {
                    width: 340px;

                }

                span.max_deposit {
                    font-size: 15px;
                }
            }
        </style>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <div class="container">


                    <script language="javascript">
                        <!--
                        function openCalculator(id) {

                            w = 225;
                            h = 400;
                            t = (screen.height - h - 30) / 2;
                            l = (screen.width - w - 30) / 2;
                            window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");



                            for (i = 0; i < document.spendform.h_id.length; i++) {
                                if (document.spendform.h_id[i].value == id) {
                                    document.spendform.h_id[i].checked = true;
                                }
                            }



                        }

                        function updateCompound() {
                            var id = 0;
                            var tt = document.spendform.h_id.type;
                            if (tt && tt.toLowerCase() == 'hidden') {
                                id = document.spendform.h_id.value;
                            } else {
                                for (i = 0; i < document.spendform.h_id.length; i++) {
                                    if (document.spendform.h_id[i].checked) {
                                        id = document.spendform.h_id[i].value;
                                    }
                                }
                            }

                            var cpObj = document.getElementById('compound_percents');
                            if (cpObj) {
                                while (cpObj.options.length != 0) {
                                    cpObj.options[0] = null;
                                }
                            }

                            if (cps[id] && cps[id].length > 0) {
                                document.getElementById('coumpond_block').style.display = '';

                                for (i in cps[id]) {
                                    cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                }
                            } else {
                                document.getElementById('coumpond_block').style.display = 'none';
                            }
                        }
                        var cps = {};
                        -->
                    </script>






                    <div class="deposit-form">
                        <form method="post" name="spendform"><input type="hidden" name="form_id" value="16281796145400"><input type="hidden" name="form_token" value="a3683441b75db9f7e7747c37a737e462">
                            <input type="hidden" name="a" value="deposit">

                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                                    <div id="method" class="method_add">
                                        <input type="radio" name="h_id" value="4" id="plan4" onclick="updateCompound()">
                                        <div class="crypto">
                                            <label for="plan4">
                                                <div class="card cardmain" style="align-items: center; background-color:transparent; box-shadow:none;">
                                                    <div class="card2">
                                                        <div class="flip">
                                                            <div class="front">
                                                                <div class="strip-bottom"></div>
                                                                <div class="strip-top"></div>
                                                                <svg class="logo" width="80" height="80" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.03 16.01">
                                                                    <path d="M6.33,13.17H2.79a.43.43,0,1,0,0,.86h.4a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44h-1a.43.43,0,0,0,0,.86H6.33a.43.43,0,0,0,.43-.43V13.6A.43.43,0,0,0,6.33,13.17Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path>
                                                                    <path d="M6.33,16.6H1.42a.43.43,0,1,0,0,.86H3.47a.44.44,0,0,1,0,.87H3.08a.43.43,0,0,0,0,.86h.1a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44H2.1a.43.43,0,0,0,0,.86h.43a.43.43,0,1,1,0,.86H1.42a.44.44,0,1,0,0,.87H2.91a.43.43,0,0,1,0,.86H1.85a.44.44,0,0,0,0,.87H6.33a.44.44,0,0,0,.43-.44V17A.43.43,0,0,0,6.33,16.6Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path><text transform="translate(5.87 12.47)" font-size="13.33" fill="#e53a11" font-family="CooperBlack, Cooper Black">N</text><text transform="translate(16.53 12.33) scale(0.71 1)" font-size="14.7" fill="#f4f2f2" font-family="CooperBlack, Cooper Black">
                                                                        <tspan letter-spacing="-0.03em">v</tspan>
                                                                        <tspan x="8.76" y="0">e</tspan>
                                                                        <tspan x="16.55" y="0" letter-spacing="0em">s</tspan>
                                                                        <tspan x="23.6" y="0">t</tspan>
                                                                    </text><text transform="translate(6.71 3.35)" font-size="3" fill="#f4f2f2" font-family="CooperBlack, Cooper Black" letter-spacing="-0.01em">C<tspan x="2.13" y="0" letter-spacing="0em">ARD</tspan></text>
                                                                </svg>
                                                                <div class="investor"> Lite Card</div>
                                                                <div class="chip">
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-main"></div>
                                                                </div>
                                                                <svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white">
                                                                    <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path>
                                                                    <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path>
                                                                    <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path>
                                                                </svg>
                                                                <div class="card-number">
                                                                    <div class="section"><span class="max_deposit">$10.00</span> - <span class="max_deposit">$1999.99</span></div>

                                                                </div>
                                                                <div class="end"><span class="end-text">expire:</span><span class="end-date">20 Days</span></div>
                                                                <div class="card-holder">Daily Profit (1.50%)</div>
                                                                <div class="master">
                                                                    <div class="circle master-red"></div>
                                                                    <div class="circle master-yellow"></div>
                                                                </div>
                                                            </div>
                                                            <div class="back">
                                                                <div class="strip-black"></div>
                                                                <div class="ccv">
                                                                    <label>ccv</label>
                                                                    <div>459</div>
                                                                </div>
                                                                <div class="terms">
                                                                    <p>This card is specially produced for Invest-card users. It is used as a virtual card. Invest-Card is an investment project.</p>
                                                                    <p>Use of this card is subject to the debit card agreement.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    cps[4] = [];
                                </script>
                                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                                    <div id="method" class="method_add">
                                        <input type="radio" name="h_id" value="5" id="plan5" onclick="updateCompound()">
                                        <div class="crypto">
                                            <label for="plan5">
                                                <div class="card cardmain" style="align-items: center; background-color:transparent; box-shadow:none;">
                                                    <div class="card2">
                                                        <div class="flip">
                                                            <div class="front">
                                                                <div class="strip-bottom"></div>
                                                                <div class="strip-top"></div>
                                                                <svg class="logo" width="80" height="80" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.03 16.01">
                                                                    <path d="M6.33,13.17H2.79a.43.43,0,1,0,0,.86h.4a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44h-1a.43.43,0,0,0,0,.86H6.33a.43.43,0,0,0,.43-.43V13.6A.43.43,0,0,0,6.33,13.17Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path>
                                                                    <path d="M6.33,16.6H1.42a.43.43,0,1,0,0,.86H3.47a.44.44,0,0,1,0,.87H3.08a.43.43,0,0,0,0,.86h.1a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44H2.1a.43.43,0,0,0,0,.86h.43a.43.43,0,1,1,0,.86H1.42a.44.44,0,1,0,0,.87H2.91a.43.43,0,0,1,0,.86H1.85a.44.44,0,0,0,0,.87H6.33a.44.44,0,0,0,.43-.44V17A.43.43,0,0,0,6.33,16.6Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path><text transform="translate(5.87 12.47)" font-size="13.33" fill="#e53a11" font-family="CooperBlack, Cooper Black">N</text><text transform="translate(16.53 12.33) scale(0.71 1)" font-size="14.7" fill="#f4f2f2" font-family="CooperBlack, Cooper Black">
                                                                        <tspan letter-spacing="-0.03em">v</tspan>
                                                                        <tspan x="8.76" y="0">e</tspan>
                                                                        <tspan x="16.55" y="0" letter-spacing="0em">s</tspan>
                                                                        <tspan x="23.6" y="0">t</tspan>
                                                                    </text><text transform="translate(6.71 3.35)" font-size="3" fill="#f4f2f2" font-family="CooperBlack, Cooper Black" letter-spacing="-0.01em">C<tspan x="2.13" y="0" letter-spacing="0em">ARD</tspan></text>
                                                                </svg>
                                                                <div class="investor"> Pro Card</div>
                                                                <div class="chip">
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-main"></div>
                                                                </div>
                                                                <svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white">
                                                                    <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path>
                                                                    <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path>
                                                                    <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path>
                                                                </svg>
                                                                <div class="card-number">
                                                                    <div class="section"><span class="max_deposit">$2000.00</span> - <span class="max_deposit">$9999.99</span></div>

                                                                </div>
                                                                <div class="end"><span class="end-text">expire:</span><span class="end-date">30 Days</span></div>
                                                                <div class="card-holder">Daily Profit (2.50%)</div>
                                                                <div class="master">
                                                                    <div class="circle master-red"></div>
                                                                    <div class="circle master-yellow"></div>
                                                                </div>
                                                            </div>
                                                            <div class="back">
                                                                <div class="strip-black"></div>
                                                                <div class="ccv">
                                                                    <label>ccv</label>
                                                                    <div>459</div>
                                                                </div>
                                                                <div class="terms">
                                                                    <p>This card is specially produced for Invest-card users. It is used as a virtual card. Invest-Card is an investment project.</p>
                                                                    <p>Use of this card is subject to the debit card agreement.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    cps[5] = [];
                                </script>
                                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                                    <div id="method" class="method_add">
                                        <input type="radio" name="h_id" value="6" id="plan6" onclick="updateCompound()" checked="checked">
                                        <div class="crypto">
                                            <label for="plan6">
                                                <div class="card cardmain" style="align-items: center; background-color:transparent; box-shadow:none;">
                                                    <div class="card2">
                                                        <div class="flip">
                                                            <div class="front">
                                                                <div class="strip-bottom"></div>
                                                                <div class="strip-top"></div>
                                                                <svg class="logo" width="80" height="80" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.03 16.01">
                                                                    <path d="M6.33,13.17H2.79a.43.43,0,1,0,0,.86h.4a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44h-1a.43.43,0,0,0,0,.86H6.33a.43.43,0,0,0,.43-.43V13.6A.43.43,0,0,0,6.33,13.17Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path>
                                                                    <path d="M6.33,16.6H1.42a.43.43,0,1,0,0,.86H3.47a.44.44,0,0,1,0,.87H3.08a.43.43,0,0,0,0,.86h.1a.43.43,0,0,1,.43.43.44.44,0,0,1-.43.44H2.1a.43.43,0,0,0,0,.86h.43a.43.43,0,1,1,0,.86H1.42a.44.44,0,1,0,0,.87H2.91a.43.43,0,0,1,0,.86H1.85a.44.44,0,0,0,0,.87H6.33a.44.44,0,0,0,.43-.44V17A.43.43,0,0,0,6.33,16.6Z" transform="translate(-0.98 -11.99)" fill="#e53a11"></path><text transform="translate(5.87 12.47)" font-size="13.33" fill="#e53a11" font-family="CooperBlack, Cooper Black">N</text><text transform="translate(16.53 12.33) scale(0.71 1)" font-size="14.7" fill="#f4f2f2" font-family="CooperBlack, Cooper Black">
                                                                        <tspan letter-spacing="-0.03em">v</tspan>
                                                                        <tspan x="8.76" y="0">e</tspan>
                                                                        <tspan x="16.55" y="0" letter-spacing="0em">s</tspan>
                                                                        <tspan x="23.6" y="0">t</tspan>
                                                                    </text><text transform="translate(6.71 3.35)" font-size="3" fill="#f4f2f2" font-family="CooperBlack, Cooper Black" letter-spacing="-0.01em">C<tspan x="2.13" y="0" letter-spacing="0em">ARD</tspan></text>
                                                                </svg>
                                                                <div class="investor"> Expert Card</div>
                                                                <div class="chip">
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-line"></div>
                                                                    <div class="chip-main"></div>
                                                                </div>
                                                                <svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white">
                                                                    <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path>
                                                                    <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path>
                                                                    <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path>
                                                                </svg>
                                                                <div class="card-number">
                                                                    <div class="section"><span class="max_deposit">$10000.00</span> - <span class="max_deposit">$50000.00</span></div>

                                                                </div>
                                                                <div class="end"><span class="end-text">expire:</span><span class="end-date">40 Days</span></div>
                                                                <div class="card-holder">Daily Profit (3.50%)</div>
                                                                <div class="master">
                                                                    <div class="circle master-red"></div>
                                                                    <div class="circle master-yellow"></div>
                                                                </div>
                                                            </div>
                                                            <div class="back">
                                                                <div class="strip-black"></div>
                                                                <div class="ccv">
                                                                    <label>ccv</label>
                                                                    <div>459</div>
                                                                </div>
                                                                <div class="terms">
                                                                    <p>This card is specially produced for Invest-card users. It is used as a virtual card. Invest-Card is an investment project.</p>
                                                                    <p>Use of this card is subject to the debit card agreement.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    cps[6] = [];
                                </script>
                            </div>


                            <style>
                                img {
                                    border-style: none;
                                }

                                input {
                                    font-family: inherit;
                                    font-size: 100%;
                                    line-height: 1.15;
                                    margin: 0;
                                }

                                input {
                                    overflow: visible;
                                }

                                [type="radio"] {
                                    box-sizing: border-box;
                                    padding: 0;
                                }

                                h3.h3 {
                                    font-weight: 600;
                                    font-size: 24px;
                                    line-height: 1.2;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                }

                                h3.h3 img {
                                    margin-right: 24px;
                                }


                                input {
                                    color: inherit;
                                    -webkit-transition: 0.5s;
                                    transition: 0.5s;
                                }

                                h3 {
                                    font-size: inherit;
                                    margin: 0;
                                }

                                .visually_hidden {
                                    position: absolute;
                                    width: 1px;
                                    height: 1px;
                                    overflow: hidden;
                                    clip: rect(0 0 0 0);
                                }

                                .tab_content {
                                    display: none;
                                }

                                .tab_content.active {
                                    display: block;
                                }

                                .select_currency {
                                    margin-bottom: 27px;
                                }

                                .payrow {
                                    display: grid;
                                    grid-template-columns: repeat(4, 1fr);
                                    grid-gap: 16px;
                                    max-width: 100%;
                                    width: 100%;
                                    margin-bottom: 23px;
                                    margin-top: 23px;
                                }

                                .payrad-wrap {
                                    border: 1px solid #383434;
                                    border-radius: 10px;
                                    padding: 18px 16px 19px 14px;
                                    background: transparent;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    max-width: 100%;
                                    cursor: pointer;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                    position: relative;
                                }

                                .payrad-wrap:before {
                                    content: '';
                                    display: block;
                                    background: #FFFFFF;
                                    width: 4px;
                                    height: 4px;
                                    border-radius: 50%;
                                    position: absolute;
                                    top: 10px;
                                    left: 10px;
                                    opacity: 0;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                }

                                .payrad-icon {
                                    min-width: 32px;
                                    height: 32px;
                                    display: block;
                                    margin-right: 8px;
                                    position: relative;
                                }

                                .payrad-icon .active {
                                    position: absolute;
                                    opacity: 0;
                                    left: 0;
                                    top: 0;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                    -webkit-filter: drop-shadow(0px 4px 4px rgba(45, 12, 84, 0.29));
                                    filter: drop-shadow(0px 4px 4px rgba(45, 12, 84, 0.29));
                                }

                                .payrad-icon .default {
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                }

                                .payrad-text {
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -webkit-flex-direction: column;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                }

                                .payrad-title {
                                    font-size: 14px;
                                    color: #fff;
                                    font-weight: 500;
                                    margin-bottom: 4px;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    max-width: 100px;
                                }

                                .payrad-currency {
                                    color: #737373;
                                    font-size: 12px;
                                    font-weight: 500;
                                }

                                .payrad-mark {
                                    min-width: 16px;
                                    height: 16px;
                                    border-radius: 50%;
                                    background: #f1d4c3;
                                    display: block;
                                    margin-left: auto;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                }

                                input:checked~.payrad-wrap {
                                    background: #272727;
                                }

                                input:checked~.payrad-wrap:before {
                                    opacity: 1;
                                }

                                input:checked~.payrad-wrap .payrad-text .payrad-currency {
                                    opacity: .5;
                                    color: #FFFFFF;
                                }

                                input:checked~.payrad-wrap .payrad-icon .active {
                                    opacity: 1;
                                }

                                input:checked~.payrad-wrap .payrad-icon .default {
                                    opacity: 0;
                                }

                                input:checked~.payrad-wrap .payrad-mark {
                                    background: url("data:image/svg+xml,%3Csvg width='11' height='9' viewBox='0 0 11 9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.66667 1L3.70833 7.5L1 4.54545' stroke='url(%23paint0_linear)' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear' x1='5.33333' y1='7.5' x2='5.33333' y2='1' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%237A00FF'/%3E%3Cstop offset='1' stop-color='%239900FF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E%0A") center no-repeat #fff;
                                }

                                @media screen and (max-width: 1400px) {
                                    .payrad-wrap {
                                        padding: 18px 10px 19px;
                                    }
                                }

                                @media screen and (max-width: 1250px) {
                                    .payrow {
                                        grid-gap: 10px;
                                    }

                                    .payrad-icon {
                                        min-width: 24px;
                                    }
                                }

                                @media screen and (max-width: 767px) {
                                    .payrow {
                                        grid-template-columns: 1fr 1fr;
                                    }
                                }

                                @media screen and (max-width: 355px) {
                                    .payrow {
                                        grid-template-columns: 1fr;
                                    }
                                }

                                strong {
                                    font-weight: bolder;
                                }

                                img {
                                    border-style: none;
                                }

                                input {
                                    font-family: inherit;
                                    font-size: 100%;
                                    line-height: 1.15;
                                    margin: 0;
                                }

                                input {
                                    overflow: visible;
                                }

                                h3.h3 {
                                    font-weight: 600;
                                    font-size: 24px;
                                    line-height: 1.2;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                }

                                h3.h3 img {
                                    margin-right: 24px;
                                }

                                * {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    outline: none;
                                }

                                input {
                                    color: inherit;
                                    -webkit-transition: 0.5s;
                                    transition: 0.5s;
                                }

                                h3 {
                                    font-size: inherit;
                                    margin: 0;
                                }



                                .input_block {
                                    position: relative;
                                    display: block;
                                    width: 100%;
                                }

                                .input_block:before {
                                    content: '';
                                    display: block;
                                    height: 1px;
                                    width: 100%;
                                    position: absolute;
                                    left: 0;
                                    bottom: 0;
                                    background: #383434;
                                }

                                .input_block:after {
                                    content: '';
                                    display: block;
                                    height: 1px;
                                    width: 0%;
                                    position: absolute;
                                    left: 0;
                                    bottom: 0;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                    background: var(--gradient-accent);
                                }

                                .input_block.filled:after {
                                    width: 100%;
                                }

                                .input_block.filled .input_block_label {
                                    bottom: 36px;
                                    color: #787878;
                                    font-size: 12px;
                                }

                                .input_block_field {
                                    border: none;
                                    -webkit-transition: .5s;
                                    transition: .5s;
                                    background: none;
                                    font-size: 18px;
                                    line-height: 2;
                                    padding: 15px 0 5px;
                                    color: #fff;
                                    width: 100%;
                                    position: relative;
                                }

                                .input_block_label {
                                    pointer-events: none;
                                    position: absolute;
                                    bottom: 6px;
                                    left: 0;
                                    color: #383434;
                                    font-size: 18px;
                                    line-height: 2;
                                    -webkit-transition: .3s;
                                    transition: .3s;
                                    -webkit-transition-timing-function: linear;
                                    transition-timing-function: linear;
                                }

                                .input_block_currency {
                                    position: absolute;
                                    top: 50%;
                                    color: #787878;
                                    right: 0;
                                    -webkit-transform: translate(0, -50%);
                                    -ms-transform: translate(0, -50%);
                                    transform: translate(0, -50%);
                                    font-size: 12px;
                                }

                                .input_block_error-text {
                                    display: none;
                                }



                                .select_amount_form {
                                    border: 1px solid #383434;
                                    border-radius: 10px;
                                    padding: 16px 48px 20px;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    -webkit-box-pack: justify;
                                    -webkit-justify-content: space-between;
                                    -ms-flex-pack: justify;
                                    justify-content: space-between;
                                    margin-bottom: 16px;
                                }

                                .select_amount_form .input_block {
                                    max-width: 336px;
                                    margin-right: 20px;
                                }

                                .select_amount_form_minmax {
                                    margin-top: 8px;
                                    font-weight: 500;
                                    font-size: 14px;
                                    line-height: 1.7;
                                    margin-right: 20px;
                                }

                                .select_amount_form_min {
                                    color: #ff513d;
                                }

                                .select_amount_form_max {
                                    color: #787878;
                                }

                                @media screen and (max-width: 1400px) {
                                    .select_amount_form .input_block {
                                        margin-right: 80px;
                                    }

                                    .select_amount_form_minmax {
                                        margin-right: 80px;
                                    }
                                }

                                @media screen and (max-width: 1250px) {
                                    .select_amount_form .input_block {
                                        margin-right: 40px;
                                    }

                                    .select_amount_form_minmax {
                                        margin-right: 40px;
                                    }
                                }

                                @media screen and (max-width: 767px) {
                                    .select_amount_form {
                                        -webkit-flex-wrap: wrap;
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                        padding: 15px;
                                    }

                                    .select_amount_form .input_block {
                                        margin-right: 0;
                                        margin-bottom: 20px;
                                    }
                                }
                            </style>

                            <div class="row pt-2">
                                <section class="select_currency tabs card">
                                    <h3 class="h3 pt-3">
                                        Payment system </h3>
                                    <p>For BNB deposits and withdrawals you need to use BEP20 network.</p>
                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#mainadd" role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class="bx bx-coin-stack font-18 me-1"></i>
                                                    </div>
                                                    <div class="tab-title">From payment system</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#mainbalanceadd" role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class="bx bx-coin font-18 me-1"></i>
                                                    </div>
                                                    <div class="tab-title">From Balance</div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="tab_content active" id="mainadd">
                                        <div class="payrow">

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_18" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/18a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/18d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            PerfectMoney </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_51" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/51a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/51d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            ePayCore </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_48" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/48a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/48d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Bitcoin </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_68" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/68a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/68d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Litecoin </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_79" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/79a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/79d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Dogecoin </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_69" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/69a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/69d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Ethereum </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_77" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/77a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/77d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Bitcoin Cash </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_71" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/71a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/71d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Dash </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_72" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/72a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/72d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Ripple </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_92" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/92a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/92d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Tether TRC20 </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_85" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/85a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/85d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Tron </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_94" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/94a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/94d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            BNB </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_86" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/86a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/86d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Stellar </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="process_99" data-min-text="10 USD" class="visually_hidden" data-fiat="">


                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/99a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/99d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Chiliz </span>
                                                        <span class="payrad-currency">
                                                            Pay from wallet </span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="tab_content" id="mainbalanceadd">
                                        <div class="payrow">
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_18" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/18a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/18d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            PerfectMoney</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_51" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/51a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/51d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            ePayCore</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_48" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/48a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/48d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Bitcoin</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_68" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/68a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/68d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Litecoin</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_79" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/79a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/79d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Dogecoin</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_69" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/69a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/69d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Ethereum</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_77" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/77a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/77d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Bitcoin Cash</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_71" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/71a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/71d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Dash</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_72" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/72a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/72d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Ripple</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_92" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/92a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/92d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Tether TRC20</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_85" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/85a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/85d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Tron</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_94" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/94a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/94d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            BNB</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_86" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/86a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/86d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Stellar</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>
                                            <label class="payrad filled">
                                                <input type="radio" name="type" value="account_99" class="visually_hidden" data-fiat="" disabled="disabled">

                                                <span class="payrad-wrap">
                                                    <picture class="payrad-icon">
                                                        <img src="deposit_files/99a.svg" alt="#" style="display: block;
    max-width: 100%;" class="active">
                                                        <img src="deposit_files/99d.svg" alt="#" style="display: block;
    max-width: 100%;" class="default">
                                                    </picture>
                                                    <span class="payrad-text">
                                                        <span class="payrad-title">
                                                            Chiliz</span>
                                                        <span class="payrad-currency">
                                                            $0.00</span>
                                                    </span>
                                                    <span class="payrad-mark"></span>
                                                </span>
                                            </label>

                                        </div>
                                    </div>
                                </section>

                                <section class="select_amount card col-lg-8">
                                    <h3 class="h3 pt-3">
                                        Amount </h3>
                                    <div class="select_amount_form">
                                        <label class="input_block filled">

                                            <input type="text" name="amount" value="10" id="calc_amount" class="input_block_field">

                                            <span class="input_block_label">
                                                Enter transaction amount </span>
                                            <span class="input_block_currency" id="balance_amount_currency" style="font-weight:bold;">
                                                USD </span>
                                            <span class="input_block_error-text">

                                            </span>
                                        </label>
                                        <div class="select_amount_form_minmax">
                                            <div class="select_amount_form_min">
                                                Minimum: <strong id="balance_min_amount">10 USD</strong>
                                            </div>
                                            <div class="select_amount_form_max">
                                                Maximum: <strong>50.000 USD</strong>
                                            </div>

                                        </div>
                                    </div>

                                </section>

                                <section class="select_confirm card col-lg-4" style="justify-content: center;">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary px-5">
                                            DEPOSIT </button>
                                    </div>

                                </section>
                            </div>

                        </form>


                        <script language="javascript">
                            /*
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
*/
                            updateCompound();
                        </script>



                    </div>
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
            <p class="mb-0 ">Copyright © 2021 <span class="footertext2 ">Invest-Card</span>. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <!-- Bootstrap JS -->

    <script src="deposit_files/bootstrap.js"></script>
    <!--plugins-->
    <script src="deposit_files/jquery.js"></script>
    <script src="deposit_files/simplebar.js"></script>

    <script src="deposit_files/perfect-scrollbar.js"></script>

    <script src="deposit_files/widgets.js"></script>
    <script src="deposit_files/clipboard.js"></script>
    <!--app JS-->
    <script src="deposit_files/app.js"></script>
    <script>
        new PerfectScrollbar('.dashboard-top-countries');
    </script>
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="logo"><img src="deposit_files/translate_24dp.png" alt="Google Translate" width="20" height="20"></div>
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





    <div class="goog-te-spinner-pos">
        <div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>