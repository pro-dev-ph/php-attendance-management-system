/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/
$(document).ready(function () {
    /*
     * Toggle sidebar on Menu button click
     */
    $('#slidesidebar').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#body').toggleClass('active');
    });

    /*
     * Semantic UI extension detect if form inputs are not empty and not empty class
     */
    $('input, textarea').focusout(function (event) {
        var notempty = $(this).val();
        if (notempty !== '') {
            $(this).addClass('notempty');
        }
    });

    $('input, textarea').each(function (index, el) {
        input = $(this).val();
        if (input !== '') {
            $(this).addClass('notempty');
        };
    });

    $('.ui.dropdown.selection, .ui.search.dropdown').each(function (index, el) {
        var dropdown = $(this).find('select').val();
        var selected = $(this).find('.menu .item.active.selected').attr('data-value');
        if (dropdown !== '' && selected !== undefined || selected !== '' && selected !== undefined) {
            $(this).addClass('notempty');
        }
    });

    $('.ui.dropdown.selection, .ui.search.dropdown').focusout(function (event) {
        var dd = $(this).find('select').val();
        var selected = $(this).find('.menu .item.active.selected').attr('data-value');
        if (dd !== '' && selected !== undefined || selected !== '' && selected !== undefined) {
            $(this).addClass('notempty');
        }
    });

});

/*
 * Hide form message
 */
$('.message .close').on('click', function () {
    $(this).closest('.message').transition('fade');
});

/*
 * Auto-hide sidebar on window resize if window size is small
 */
$(window).resize(function () {
    if ($(window).width() <= 768) {
        $('#sidebar, #body').addClass('active');
    }
});

/*
 * Semantic UI components initialization
 */
$('.dropdown').dropdown();
$('.ui.dropdown').dropdown();
$('.ui.checkbox').checkbox();
$('.ui.radio.checkbox').checkbox();
$('.ui.modal').modal();
$('.ui.basic.modal').modal();
$('.ui.add.modal').modal('attach events', '.btn-add', 'toggle');
$('.ui.edit.modal').modal('attach events', '.btn-edit', 'toggle');
$('.ui.modal.import').modal('attach events', '.btn-import', 'toggle');

/*
 * Prevent Semantic UI modal exit on submit button 
 */
$('.ui.modal.add,.ui.modal.edit').modal({
    onDeny: function () {
        return true;
    },
    onApprove: function () {
        return false;
    }
});

/*
 * Client-side form validation
 */
$('#add_employee_form, #edit_employee_form').form({
    fields: {
        firstname: {
            identifier: 'firstname',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a First name'
            }]
        },
        lastname: {
            identifier: 'lastname',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Last name'
            }]
        },
        emailaddress: {
            identifier: 'emailaddress',
            rules: [{
                type: 'email',
                prompt: 'Please enter an Email address'
            }]
        },
        idno: {
            identifier: 'idno',
            rules: [{
                type: 'empty',
                prompt: 'Please enter an ID number'
            }]
        },
        employmentstatus: {
            identifier: 'employmentstatus',
            rules: [{
                type: 'empty',
                prompt: 'Please select an Employment status'
            }]
        },
    }
});

$('#edit_attendance_form').form({
    fields: {
        employee: {
            identifier: 'employee',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Employee'
            }]
        },
        date: {
            identifier: 'date',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Date'
            }]
        },
        timein: {
            identifier: 'timein',
            rules: [{
                type: 'empty',
                prompt: 'Please enter Time In'
            }]
        },
        timeout: {
            identifier: 'timeout',
            rules: [{
                type: 'empty',
                prompt: 'Please enter Time Out'
            }]
        },
    }
});

$('#add_schedule_form, #edit_schedule_form').form({
    fields: {
        employee: {
            identifier: 'employee',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Employee'
            }]
        },
        intime: {
            identifier: 'intime',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Start time'
            }]
        },
        outime: {
            identifier: 'outime',
            rules: [{
                type: 'empty',
                prompt: 'Please enter an Off time'
            }]
        },
        datefrom: {
            identifier: 'datefrom',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a From date'
            }]
        },
        dateto: {
            identifier: 'dateto',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a To date'
            }]
        },
        hours: {
            identifier: 'hours',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Total hours'
            }]
        },
    }
});

$('#edit_leave_form').form({
    fields: {
        status: {
            identifier: 'status',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Status'
            }]
        },
    }
});

$('#add_user_form').form({
    fields: {
        name: {
            identifier: 'name',
            rules: [{
                type: 'empty',
                prompt: 'Please select an Employee'
            }]
        },
        email: {
            identifier: 'email',
            rules: [{
                type: 'email',
                prompt: 'Please enter an Email address'
            }]
        },
        acc_type: {
            identifier: 'acc_type',
            rules: [{
                type: 'checked',
                prompt: 'Please choose Account type'
            }]
        },
        role_id: {
            identifier: 'role_id',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Role'
            }]
        },
        status: {
            identifier: 'status',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Status'
            }]
        },
        password: {
            identifier: 'password',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Password'
            }]
        },
        password_confirmation: {
            identifier: 'password_confirmation',
            rules: [{
                type: 'match[password]',
                prompt: 'Please confirm Password'
            }]
        },
    }
});

$('#edit_user_form').form({
    fields: {
        name: {
            identifier: 'name',
            rules: [{
                type: 'empty',
                prompt: 'Please select an Employee'
            }]
        },
        email: {
            identifier: 'email',
            rules: [{
                type: 'email',
                prompt: 'Please enter an Email address'
            }]
        },
        acc_type: {
            identifier: 'acc_type',
            rules: [{
                type: 'checked',
                prompt: 'Please choose Account type'
            }]
        },
        role_id: {
            identifier: 'role_id',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Role'
            }]
        },
        status: {
            identifier: 'status',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Status'
            }]
        },
    }
});

$('#add_role_form, #edit_role_form').form({
    fields: {
        role_name: {
            identifier: 'role_name',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Role name'
            }]
        },
        state: {
            identifier: 'state',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Status'
            }]
        },
    }
});

$('#add_company_form').form({
    fields: {
        company: {
            identifier: 'company',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Company name'
            }]
        },
    }
});

$('#add_department_form').form({
    fields: {
        department: {
            identifier: 'department',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Department name'
            }]
        },
    }
});

$('#add_jobtitle_form').form({
    fields: {
        department: {
            identifier: 'department',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Department'
            }]
        },
        jobtitle: {
            identifier: 'jobtitle',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Job Title name'
            }]
        },
    }
});

$('#add_leavetype_form').form({
    fields: {
        leavetype: {
            identifier: 'leavetype',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Leave name'
            }]
        },
        limit: {
            identifier: 'limit',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Credit number'
            }]
        },
        percalendar: {
            identifier: 'percalendar',
            rules: [{
                type: 'checked',
                prompt: 'Please choose a Leave term'
            }]
        },
    }
});

$('#add_leavegroup_form, #edit_leavegroup_form').form({
    fields: {
        leavegroup: {
            identifier: 'leavegroup',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Leave Group name'
            }]
        },
        description: {
            identifier: 'description',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Description'
            }]
        },
        "leaveprivileges[]": {
            identifier: 'leaveprivileges[]',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Leave privileges'
            }]
        },
        status: {
            identifier: 'status',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Status'
            }]
        },
    }
});

$('#request_personal_leave_form, #edit_request_personal_leave_form').form({
    fields: {
        type: {
            identifier: 'type',
            rules: [{
                type: 'empty',
                prompt: 'Please select a Leave type'
            }]
        },
        leavefrom: {
            identifier: 'leavefrom',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Leave date from'
            }]
        },
        leaveto: {
            identifier: 'leaveto',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Leave date to'
            }]
        },
        returndate: {
            identifier: 'returndate',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Return date'
            }]
        },
        reason: {
            identifier: 'reason',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a Reason'
            }]
        },
    }
});

$('#edit_personal_info_form').form({
    fields: {
        firstname: {
            identifier: 'firstname',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your First name'
            }]
        },
        lastname: {
            identifier: 'lastname',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Last name'
            }]
        },
        gender: {
            identifier: 'gender',
            rules: [{
                type: 'empty',
                prompt: 'Please select your Gender'
            }]
        },
        civilstatus: {
            identifier: 'civilstatus',
            rules: [{
                type: 'empty',
                prompt: 'Please select your Civil status'
            }]
        },
        height: {
            identifier: 'height',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Height'
            }]
        },
        weight: {
            identifier: 'weight',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Weight'
            }]
        },
        emailaddress: {
            identifier: 'emailaddress',
            rules: [{
                type: 'email',
                prompt: 'Please enter your Email address'
            }]
        },
        mobileno: {
            identifier: 'mobileno',
            rules: [{
                type: 'integer',
                prompt: 'Please enter your Mobile phone number'
            }]
        },
        age: {
            identifier: 'age',
            rules: [{
                type: 'integer',
                prompt: 'Please enter your Age'
            }]
        },
        birthday: {
            identifier: 'birthday',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Birthday'
            }]
        },
        birthplace: {
            identifier: 'birthplace',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Place of birth'
            }]
        },
        homeaddress: {
            identifier: 'homeaddress',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Home address'
            }]
        },
    }
});

$('#edit_personal_password_form').form({
    fields: {
        currentpassword: {
            identifier: 'currentpassword',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your Current password'
            }]
        },
        newpassword: {
            identifier: 'newpassword',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your New password'
            }]
        },
        confirmpassword: {
            identifier: 'confirmpassword',
            rules: [{
                type: 'empty',
                prompt: 'Please confirm your New password'
            }]
        },
    }
});

$('#edit_personal_user_form').form({
    fields: {
        name: {
            identifier: 'name',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your User name'
            }]
        },
        email: {
            identifier: 'email',
            rules: [{
                type: 'email',
                prompt: 'Please enter your User email'
            }]
        },
    }
});
