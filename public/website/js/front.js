'use strict';

function submitSubscription() {
    var email = document.getElementById("subemail");
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email.value)) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/site-projects",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: email.value
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });

    } else {
        round_error_noti('You Need To Enter Correct Email')

    }


}

function request_service() {
    var contact_email = document.getElementById("contact_email");
    var contact_name = document.getElementById("contact_name");
    var contact_phone = document.getElementById("contact_phone");
    var contact_msg = document.getElementById("contact_msg");
    var contact_type = document.getElementById("contact_type");
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (contact_name.value === '') {
            round_error_noti('You Need To Enter Name');
            return;
        }
        if (contact_phone.value === '') {
            round_error_noti('You Need To Enter Phone');
            return;
        }
        if (contact_type.value === '') {
            round_error_noti('You Need To Enter service type')
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/orders",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: contact_email.value,
                name: contact_name.value,
                msg: contact_msg.value,
                type: contact_type.value,
                phone: contact_phone.value
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                    contact_email.value = '';
                    contact_name.value = '';
                    contact_phone.value = '';
                    contact_msg.value = '';
                    contact_type.value = '';
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });

}

function submitContactUs() {
    var contact_us_email = document.getElementById("contact_us_email");
    var contact_us_name = document.getElementById("contact_us_name");
    var contact_us_phone = document.getElementById("contact_us_phone");
    var contact_us_msg = document.getElementById("contact_us_msg");
    var contact_us_subject = document.getElementById("contact_us_subject");

    if (contact_us_name.value === '') {
        round_error_noti('You Need To Enter Name')
        return;
    }
    if (contact_us_phone.value === '') {
        round_error_noti('You Need To Enter Phone')
        return;
    }
    if (contact_us_subject.value === '') {
        round_error_noti('You Need To Enter Subject')
        return;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: app_url + "/" + lang + "/contactus",
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            email: contact_us_email.value,
            name: contact_us_name.value,
            phone: contact_us_phone.value,
            msg: contact_us_msg.value,
            subject: contact_us_subject.value
        },
        async: false,
        success: function(data) {
            var obj = JSON.parse(data);
            if (obj.code === 0) {
                round_error_noti(obj.msg)
            } else {
                round_success_noti(obj.msg)
                contact_us_email.value = '';
                contact_us_name.value = '';
                contact_us_phone.value = '';
                contact_us_msg.value = '';
                contact_us_subject.value = '';
            }
        },
        error: function(error) {
            round_error_noti()
        }
    });
}


function submitDocumentation() {
    var contact_email = document.getElementById("contact_email");
    var contact_name = document.getElementById("contact_name");
    var contact_phone = document.getElementById("contact_phone");
    var contact_msg = document.getElementById("contact_msg");
    var contact_type = document.getElementById("contact_type");


    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (contact_name.value === '') {
            round_error_noti('You Need To Enter Name')
            return;
        }
        if (contact_phone.value === '') {
            round_error_noti('You Need To Enter Phone')
            return;
        }
        if (contact_type.value === '') {
            round_error_noti('You Need To Enter type')
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/contactus",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: contact_email.value,
                name: contact_name.value,
                phone: contact_phone.value,
                msg: contact_msg.value,
                type: contact_type.value
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                    contact_email.value = '';
                    contact_name.value = '';
                    contact_phone.value = '';
                    contact_msg.value = '';
                    contact_subject.value = '';
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });

}

