'use strict';

var userText = $('#copy-to-clipboard-input');
var btnCopy = $('#btn-copy');

// copy text on click
btnCopy.on('click', function() {
    userText.select();
    document.execCommand('copy');
    Swal.fire({
        position: 'bottom-end',
        icon: 'success',
        title: 'Link copied',
        showConfirmButton: false,
        timer: 1500,
        customClass: {
            confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false
    });
});