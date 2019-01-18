    // Edit About
    var about_1_temp = "";
    $('#edit-about-1').click(function(){
        $('#txt-about-1 h2').attr('contenteditable', 'true');
        $('#txt-about-1 p').attr('contenteditable', 'true');
        $('#txt-about-1').css('border','1px solid blue');
        $('#txt-about-1').focus();
        $(this).hide();
        $('#save-about-1').show();
        $('#cancel-about-1').show();
        about_1_temp = $('#txt-about-1').html();
    });

    $('#save-about-1').click(function(){
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'about_1',
                jdata: { "about_1": { "title": $('#txt-about-1 h2').text(), "content" : $('#txt-about-1 p').text() } }
            },
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-about-1').show();
                $('#txt-about-1').html($('#txt-about-1').html());
                $('#txt-about-1 h2').attr('contenteditable', 'false');
                $('#txt-about-1 p').attr('contenteditable', 'false');
                $('#edit-about-1').show();
                $('#save-about-1').hide();
                $('#cancel-about-1').hide();
                $('#txt-about-1').css('border','none');
            })

        });

    });

    $('#cancel-about-1').click(function(){
        $('#txt-about-1').show();
        $('#txt-about-1').html(about_1_temp);
        $('#txt-about-1 h2').attr('contenteditable', 'false');
        $('#txt-about-1 p').attr('contenteditable', 'false');
        $('#edit-about-1').show();
        $('#save-about-1').hide();
        $('#cancel-about-1').hide();
        $('#txt-about-1').css('border','none');
    });

    // End Edit About


    // Edit About 2
    var about_2_temp = "";
    $('#edit-about-2').click(function(){
        $('#txt-about-2 h2').attr('contenteditable', 'true');
        $('#txt-about-2 p').attr('contenteditable', 'true');
        $('#txt-about-2').css('border','1px solid blue');
        $('#txt-about-2').focus();
        $(this).hide();
        $('#save-about-2').show();
        $('#cancel-about-2').show();
        about_2_temp = $('#txt-about-2').html();
    });

    $('#save-about-2').click(function(){
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'about_2',
                jdata: {
                    "about_2": {
                            "title": $('#txt-about-2 h2').text(),
                            "content_0" : $('#txt-about-2').children().eq(1).text(),
                            "content_1" : $('#txt-about-2').children().eq(2).text(),
                            "content_2" : $('#txt-about-2').children().eq(3).text()
                        }
                }
            },
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-about-2').show();
                $('#txt-about-2').html($('#txt-about-2').html());
                $('#txt-about-2 h2').attr('contenteditable', 'false');
                $('#txt-about-2 p').attr('contenteditable', 'false');
                $('#edit-about-2').show();
                $('#save-about-2').hide();
                $('#cancel-about-2').hide();
                $('#txt-about-2').css('border','none');
            })

        });

    });

    $('#cancel-about-2').click(function(){
        $('#txt-about-2').show();
        $('#txt-about-2').html(about_2_temp);
        $('#txt-about-2 h2').attr('contenteditable', 'false');
        $('#txt-about-2 p').attr('contenteditable', 'false');
        $('#edit-about-2').show();
        $('#save-about-2').hide();
        $('#cancel-about-2').hide();
        $('#txt-about-2').css('border','none');
    });

    // End Edit About 2
    
    // Function upload base64
    function encodeImageFileAsURL(cb) {
        return function(){
            var file = this.files[0];
            var reader  = new FileReader();
            reader.onloadend = function () {
                cb(reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    //
    
    // Edit img-1
    
    $('#edit-img-1').click(function(){
        $(this).hide();
        $('#save-img-1').show();
        $('#cancel-img-1').show();
        $('#upload-img-1').show();
        
    });
    
    $('#upload-img-1').change(encodeImageFileAsURL(function(base64Img){
        $('#file-img-1').attr('src', base64Img);
    }));

    $('#cancel-img-1').click(function(){
        $(this).hide();
        var pathImage= $('#path-img-1').val();
        $('#edit-img-1').show();
        $('#save-img-1').hide();
        $('#upload-img-1').hide();
        $('#file-img-1').attr('src', pathImage);
    });


    // End Edit img-1

    // Beneffit
    var beneffit_temp = "";
    $('#edit-beneffit').click(function(){
        $('#txt-beneffit h2').attr('contenteditable', 'true');
        $('#txt-beneffit p').attr('contenteditable', 'true');
        $('#txt-beneffit').css('border','1px solid blue');
        $('#txt-beneffit').focus();
        $(this).hide();
        $('#save-beneffit').show();
        $('#cancel-beneffit').show();
        beneffit_temp = $('#txt-beneffit').html();
    });

    $('#save-beneffit').click(function(){
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'beneffit',
                jdata: { "beneffit": { "title": $('#txt-beneffit h2').text(), "content" : $('#txt-beneffit p').text() } }
            },
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-beneffit').show();
                $('#txt-beneffit').html($('#txt-beneffit').html());
                $('#txt-beneffit h2').attr('contenteditable', 'false');
                $('#txt-beneffit p').attr('contenteditable', 'false');
                $('#edit-beneffit').show();
                $('#save-beneffit').hide();
                $('#cancel-beneffit').hide();
                $('#txt-beneffit').css('border','none');
            })

        });

    });

    $('#cancel-beneffit').click(function(){
        $('#txt-beneffit').show();
        $('#txt-beneffit').html(beneffit_temp);
        $('#txt-beneffit h2').attr('contenteditable', 'false');
        $('#txt-beneffit p').attr('contenteditable', 'false');
        $('#edit-beneffit').show();
        $('#save-beneffit').hide();
        $('#cancel-beneffit').hide();
        $('#txt-beneffit').css('border','none');
    });

    // End Beneffit

    // banner

    var txt_banner_1_temp = "";
    $('#txt-banner-1').click(function() {
        txt_banner_1_temp = $('#txt-banner-1').html();
        $(this).css('border', '1px solid yellow');
        $(this).attr('contenteditable', 'true');
        $(this).focus();
        $('#txt-banner-1-ctrl').show();
    });

    $('#txt-banner-1-cancel').click(function() {
        $('#txt-banner-1').css('border', 'none');
        $('#txt-banner-1').attr('contenteditable', 'false');
        $('#txt-banner-1-ctrl').hide();
        $('#txt-banner-1').html(txt_banner_1_temp);
    });

    $('#txt-banner-1-save').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'banner_1',
                jdata: {
                    "banner_1": {
                            "txt" : $('#txt-banner-1').text()
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-banner-1').css('border', 'none');
                $('#txt-banner-1').attr('contenteditable', 'false');
                $('#txt-banner-1-ctrl').hide();
                if(res.type == 'error') {
                    $('#txt-banner-1').html(txt_banner_1_temp);
                } else {
                    $('#txt-banner-1').html($('#txt-banner-1').html());
                }

            })

        });
    });
    // End Text Banner 1

    // Token 1
    var token_1_temp = ""
    $('#edit-token-1').click(function() {
        $('#edit-token-1').hide();
        $('#txt-token-1 h5').attr('contenteditable', 'true');
        $('#txt-token-1 span').attr('contenteditable', 'true');
        $('#txt-token-1').css('border','1px solid yellow');
        $('#txt-token-1').focus();
        $('#save-token-1').show();
        $('#cancel-token-1').show();
        token_1_temp = $('#txt-token-1').html();
    });

    $('#cancel-token-1').click(function() {
        $('#edit-token-1').show();
        $('#txt-token-1').html(token_1_temp);
        $('#txt-token-1 h5').attr('contenteditable', 'false');
        $('#txt-token-1 span').attr('contenteditable', 'false');
        $('#txt-token-1').css('border','none');
        $('#save-token-1').hide();
        $('#cancel-token-1').hide();
    });

    $('#save-token-1').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_1',
                jdata: {
                    "token_1": {
                            "txt_1" : $('#txt-token-1 h5').text(),
                            "txt_2" : $('#txt-token-1 span').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-1').css('border', 'none');
                $('#save-token-1').hide();
                $('#cancel-token-1').hide();
                $('#edit-token-1').show();
                if(res.type == 'error') {
                    $('#txt-token-1').html(token_1_temp);
                    $('#txt-token-1 h5').attr('contenteditable', 'false');
                    $('#txt-token-1 span').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-1').html($('#txt-token-1').html());
                    $('#txt-token-1 h5').attr('contenteditable', 'false');
                    $('#txt-token-1 span').attr('contenteditable', 'false');

                }

            })

        });
    });
    // End Token 1

    // Token 2
    var token_2_temp = ""
    $('#edit-token-2').click(function() {
        $('#edit-token-2').hide();
        token_2_temp = $('#txt-token-2').html();
        $('#txt-token-2 h5').attr('contenteditable', 'true');
        $('#txt-token-2 span').attr('contenteditable', 'true');
        $('#txt-token-2').css('border','1px solid yellow');
        $('#txt-token-2').focus();
        $('#save-token-2').show();
        $('#cancel-token-2').show();
    });

    $('#cancel-token-2').click(function() {
        $('#edit-token-2').show();
        $('#txt-token-2').html(token_2_temp);
        $('#txt-token-2 h5').attr('contenteditable', 'false');
        $('#txt-token-2 span').attr('contenteditable', 'false');
        $('#txt-token-2').css('border','none');
        $('#save-token-2').hide();
        $('#cancel-token-2').hide();
    });

    $('#save-token-2').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_2',
                jdata: {
                    "token_2": {
                            "txt_1" : $('#txt-token-2 h5').text(),
                            "txt_2" : $('#txt-token-2 span').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-2').css('border', 'none');
                $('#save-token-2').hide();
                $('#cancel-token-2').hide();
                $('#edit-token-2').show();
                if(res.type == 'error') {
                    $('#txt-token-2').html(token_2_temp);
                    $('#txt-token-2 h5').attr('contenteditable', 'false');
                    $('#txt-token-2 span').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-2').html($('#txt-token-2').html());
                    $('#txt-token-2 h5').attr('contenteditable', 'false');
                    $('#txt-token-2 span').attr('contenteditable', 'false');

                }

            })

        });
    });
    // End Token 2

    // Token 3
    var token_3_temp = ""
    $('#edit-token-3').click(function() {
        $('#edit-token-3').hide();
        $('#txt-token-3 h5').attr('contenteditable', 'true');
        $('#txt-token-3 span').attr('contenteditable', 'true');
        $('#txt-token-3').css('border','1px solid yellow');
        $('#txt-token-3').focus();
        $('#save-token-3').show();
        $('#cancel-token-3').show();
        token_3_temp = $('#txt-token-3').html();
    });

    $('#cancel-token-3').click(function() {
        $('#edit-token-3').show();
        $('#txt-token-3 h5').attr('contenteditable', 'false');
        $('#txt-token-3 span').attr('contenteditable', 'false');
        $('#txt-token-3').css('border','none');
        $('#save-token-3').hide();
        $('#cancel-token-3').hide();
        $('#txt-token-3').html(token_3_temp);
    });

    $('#save-token-3').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_3',
                jdata: {
                    "token_3": {
                            "txt_1" : $('#txt-token-3 h5').text(),
                            "txt_2" : $('#txt-token-3 span').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-3').css('border', 'none');
                $('#save-token-3').hide();
                $('#cancel-token-3').hide();
                $('#edit-token-3').show();
                if(res.type == 'error') {
                    $('#txt-token-3').html(token_3_temp);
                    $('#txt-token-3 h5').attr('contenteditable', 'false');
                    $('#txt-token-3 span').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-3').html($('#txt-token-3').html());
                    $('#txt-token-3 h5').attr('contenteditable', 'false');
                    $('#txt-token-3 span').attr('contenteditable', 'false');

                }

            })

        });
    });
    // End Token 3

    // Token 4
    var token_4_temp = ""
    $('#edit-token-4').click(function() {
        $('#edit-token-4').hide();
        $('#txt-token-4 h5').attr('contenteditable', 'true');
        $('#txt-token-4 span').attr('contenteditable', 'true');
        $('#txt-token-4').css('border','1px solid yellow');
        $('#txt-token-4').focus();
        $('#save-token-4').show();
        $('#cancel-token-4').show();
        token_4_temp = $('#txt-token-4').html();
    });

    $('#cancel-token-4').click(function() {
        $('#edit-token-4').show();
        $('#txt-token-4 h5').attr('contenteditable', 'false');
        $('#txt-token-4 span').attr('contenteditable', 'false');
        $('#txt-token-4').css('border','none');
        $('#save-token-4').hide();
        $('#cancel-token-4').hide();
        $('#txt-token-4').html(token_4_temp);
    });

    $('#save-token-4').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_4',
                jdata: {
                    "token_4": {
                            "txt_1" : $('#txt-token-4 h5').text(),
                            "txt_2" : $('#txt-token-4 span').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-4').css('border', 'none');
                $('#save-token-4').hide();
                $('#cancel-token-4').hide();
                $('#edit-token-4').show();
                if(res.type == 'error') {
                    $('#txt-token-4').html(token_4_temp);
                    $('#txt-token-4 h5').attr('contenteditable', 'false');
                    $('#txt-token-4 span').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-4').html($('#txt-token-4').html());
                    $('#txt-token-4 h5').attr('contenteditable', 'false');
                    $('#txt-token-4 span').attr('contenteditable', 'false');

                }

            })

        });
    });
    // End Token 4

    // Token 11
    var token_11_temp = ""
    $('#edit-token-11').click(function() {
        $('#edit-token-11').hide();
        token_11_temp = $('#txt-token-11').html();
        $('#txt-token-11 h2').attr('contenteditable', 'true');
        $('#txt-token-11 p').attr('contenteditable', 'true');
        $('#txt-token-11').css('border','1px solid yellow');
        $('#txt-token-11').focus();
        $('#save-token-11').show();
        $('#cancel-token-11').show();

    });

    $('#cancel-token-11').click(function() {
        $('#edit-token-11').show();
        $('#txt-token-11').html(token_11_temp);
        $('#txt-token-11 h2').attr('contenteditable', 'false');
        $('#txt-token-11 p').attr('contenteditable', 'false');
        $('#txt-token-11').css('border','none');
        $('#save-token-11').hide();
        $('#cancel-token-11').hide();
    });

    $('#save-token-11').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_11',
                jdata: {
                    "token_11": {
                            "title" : $('#txt-token-11 h2').text(),
                            "content" : $('#txt-token-11 p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-11').css('border', 'none');
                $('#save-token-11').hide();
                $('#cancel-token-11').hide();
                $('#edit-token-11').show();
                if(res.type == 'error') {
                    $('#txt-token-11').html(token_11_temp);
                    $('#txt-token-11 h2').attr('contenteditable', 'false');
                    $('#txt-token-11 p').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-11').html($('#txt-token-11').html());
                    $('#txt-token-11 h2').attr('contenteditable', 'false');
                    $('#txt-token-11 p').attr('contenteditable', 'false');

                }

            })

        });
    });
    // End Token 11

    // Token 21
    var token_21_temp = ""
    $('#edit-token-21').click(function() {
        $('#edit-token-21').hide();
        token_21_temp = $('#txt-token-21').html();
        $('#txt-token-21 h5').attr('contenteditable', 'true');
        $('#txt-token-21 p').attr('contenteditable', 'true');
        $('#txt-token-21').css('border','1px solid yellow');
        $('#txt-token-21').focus();
        $('#save-token-21').show();
        $('#cancel-token-21').show();
    });

    $('#cancel-token-21').click(function() {
        $('#edit-token-21').show();
        $('#txt-token-21').html(token_21_temp);
        $('#txt-token-21 h5').attr('contenteditable', 'false');
        $('#txt-token-21 p').attr('contenteditable', 'false');
        $('#txt-token-21').css('border','none');
        $('#save-token-21').hide();
        $('#cancel-token-21').hide();
    });

    $('#save-token-21').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_21',
                jdata: {
                    "token_21": {
                            "title" : $('#txt-token-21 h5').text(),
                            "content" : $('#txt-token-21 p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-21').css('border', 'none');
                $('#save-token-21').hide();
                $('#cancel-token-21').hide();
                $('#edit-token-21').show();
                if(res.type == 'error') {
                    $('#txt-token-21').html(token_21_temp);
                    $('#txt-token-21 h5').attr('contenteditable', 'false');
                    $('#txt-token-21 p').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-21').html($('#txt-token-21').html());
                    $('#txt-token-21 h5').attr('contenteditable', 'false');
                    $('#txt-token-21 p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Token 21

    // Token 22
    var token_21_temp = ""
    $('#edit-token-22').click(function() {
        $('#edit-token-22').hide();
        token_22_temp = $('#txt-token-22').html();
        $('#txt-token-22 h5').attr('contenteditable', 'true');
        $('#txt-token-22 p').attr('contenteditable', 'true');
        $('#txt-token-22').css('border','1px solid yellow');
        $('#txt-token-22').focus();
        $('#save-token-22').show();
        $('#cancel-token-22').show();
    });

    $('#cancel-token-22').click(function() {
        $('#edit-token-22').show();
        $('#txt-token-22').html(token_22_temp);
        $('#txt-token-22 h5').attr('contenteditable', 'false');
        $('#txt-token-22 p').attr('contenteditable', 'false');
        $('#txt-token-22').css('border','none');
        $('#save-token-22').hide();
        $('#cancel-token-22').hide();
    });

    $('#save-token-22').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_22',
                jdata: {
                    "token_22": {
                            "title" : $('#txt-token-22 h5').text(),
                            "content" : $('#txt-token-22 p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-22').css('border', 'none');
                $('#save-token-22').hide();
                $('#cancel-token-22').hide();
                $('#edit-token-22').show();
                if(res.type == 'error') {
                    $('#txt-token-22').html(token_22_temp);
                    $('#txt-token-22 h5').attr('contenteditable', 'false');
                    $('#txt-token-22 p').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-22').html($('#txt-token-22').html());
                    $('#txt-token-22 h5').attr('contenteditable', 'false');
                    $('#txt-token-22 p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Token 22

    // Token 23
    var token_21_temp = ""
    $('#edit-token-23').click(function() {
        $('#edit-token-23').hide();
        token_23_temp = $('#txt-token-23').html();
        $('#txt-token-23 h5').attr('contenteditable', 'true');
        $('#txt-token-23 p').attr('contenteditable', 'true');
        $('#txt-token-23').css('border','1px solid yellow');
        $('#txt-token-23').focus();
        $('#save-token-23').show();
        $('#cancel-token-23').show();
    });

    $('#cancel-token-23').click(function() {
        $('#edit-token-23').show();
        $('#txt-token-23').html(token_23_temp);
        $('#txt-token-23 h5').attr('contenteditable', 'false');
        $('#txt-token-23 p').attr('contenteditable', 'false');
        $('#txt-token-23').css('border','none');
        $('#save-token-23').hide();
        $('#cancel-token-23').hide();
    });

    $('#save-token-23').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_23',
                jdata: {
                    "token_23": {
                            "title" : $('#txt-token-23 h5').text(),
                            "content" : $('#txt-token-23 p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-23').css('border', 'none');
                $('#save-token-23').hide();
                $('#cancel-token-23').hide();
                $('#edit-token-23').show();
                if(res.type == 'error') {
                    $('#txt-token-23').html(token_23_temp);
                    $('#txt-token-23 h5').attr('contenteditable', 'false');
                    $('#txt-token-23 p').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-23').html($('#txt-token-23').html());
                    $('#txt-token-23 h5').attr('contenteditable', 'false');
                    $('#txt-token-23 p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Token 23

    // Token 24
    var token_24_temp = ""
    $('#edit-token-24').click(function() {
        $('#edit-token-24').hide();
        token_24_temp = $('#txt-token-24').html();
        $('#txt-token-24 h5').attr('contenteditable', 'true');
        $('#txt-token-24 p').attr('contenteditable', 'true');
        $('#txt-token-24').css('border','1px solid yellow');
        $('#txt-token-24').focus();
        $('#save-token-24').show();
        $('#cancel-token-24').show();
    });

    $('#cancel-token-24').click(function() {
        $('#edit-token-24').show();
        $('#txt-token-24').html(token_24_temp);
        $('#txt-token-24 h5').attr('contenteditable', 'false');
        $('#txt-token-24 p').attr('contenteditable', 'false');
        $('#txt-token-24').css('border','none');
        $('#save-token-24').hide();
        $('#cancel-token-24').hide();
    });

    $('#save-token-24').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'token_24',
                jdata: {
                    "token_24": {
                            "title" : $('#txt-token-24 h5').text(),
                            "content" : $('#txt-token-24 p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-token-24').css('border', 'none');
                $('#save-token-24').hide();
                $('#cancel-token-24').hide();
                $('#edit-token-24').show();
                if(res.type == 'error') {
                    $('#txt-token-24').html(token_24_temp);
                    $('#txt-token-24 h5').attr('contenteditable', 'false');
                    $('#txt-token-24 p').attr('contenteditable', 'false');
                } else {
                    $('#txt-token-24').html($('#txt-token-24').html());
                    $('#txt-token-24 h5').attr('contenteditable', 'false');
                    $('#txt-token-24 p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Token 24

    // Team
    var team_temp = ""
    $('#edit-team').click(function() {
        $('#edit-team').hide();
        team_temp = $('#txt-team').html();
        $('#txt-team h2').attr('contenteditable', 'true');
        $('#txt-team p').attr('contenteditable', 'true');
        $('#txt-team').css('border','1px solid yellow');
        $('#txt-team').focus();
        $('#save-team').show();
        $('#cancel-team').show();
    });

    $('#cancel-team').click(function() {
        $('#edit-team').show();
        $('#txt-team').html(team_temp);
        $('#txt-team h2').attr('contenteditable', 'false');
        $('#txt-team p').attr('contenteditable', 'false');
        $('#txt-team').css('border','none');
        $('#save-team').hide();
        $('#cancel-team').hide();
    });

    $('#save-team').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'team',
                jdata: {
                    "team": {
                            "title" : $('#txt-team h2').text(),
                            "content" : $('#txt-team p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-team').css('border', 'none');
                $('#save-team').hide();
                $('#cancel-team').hide();
                $('#edit-team').show();
                if(res.type == 'error') {
                    $('#txt-team').html(team_temp);
                    $('#txt-team h2').attr('contenteditable', 'false');
                    $('#txt-team p').attr('contenteditable', 'false');
                } else {
                    $('#txt-team').html($('#txt-team').html());
                    $('#txt-team h2').attr('contenteditable', 'false');
                    $('#txt-team p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Team

    // Faq
    var team_temp = ""
    $('#edit-faq').click(function() {
        $('#edit-faq').hide();
        faq_temp = $('#txt-faq').html();
        $('#txt-faq h2').attr('contenteditable', 'true');
        $('#txt-faq p').attr('contenteditable', 'true');
        $('#txt-faq').css('border','1px solid yellow');
        $('#txt-faq').focus();
        $('#save-faq').show();
        $('#cancel-faq').show();
    });

    $('#cancel-faq').click(function() {
        $('#edit-faq').show();
        $('#txt-faq').html(faq_temp);
        $('#txt-faq h2').attr('contenteditable', 'false');
        $('#txt-faq p').attr('contenteditable', 'false');
        $('#txt-faq').css('border','none');
        $('#save-faq').hide();
        $('#cancel-faq').hide();
    });

    $('#save-faq').click(function() {
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'faq',
                jdata: {
                    "faq": {
                            "title" : $('#txt-faq h2').text(),
                            "content" : $('#txt-faq p').text(),
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-faq').css('border', 'none');
                $('#save-faq').hide();
                $('#cancel-faq').hide();
                $('#edit-faq').show();
                if(res.type == 'error') {
                    $('#txt-faq').html(faq_temp);
                    $('#txt-faq h2').attr('contenteditable', 'false');
                    $('#txt-faq p').attr('contenteditable', 'false');
                } else {
                    $('#txt-faq').html($('#txt-faq').html());
                    $('#txt-faq h2').attr('contenteditable', 'false');
                    $('#txt-faq p').attr('contenteditable', 'false');
                }

            })

        });
    });
    // End Faq

    // Banner 2
    var banner_2_temp = "";
    $('#txt-banner-2').click(function() {
        banner_2_temp = $(this).html();
        $(this).attr('contenteditable', 'true');
        $(this).css('border', '1px solid yellow');
        $('#txt-banner-2-ctrl').show();
    });

    $('#txt-banner-2-cancel').click(function() {
        $('#txt-banner-2-ctrl').hide();
        $('#txt-banner-2').css('border', 'none');
        $('#txt-banner-2').html(banner_2_temp);
        $('#txt-banner-2').attr('contenteditable', 'false');
    });

    $('#txt-banner-2-save').click(function() {            
        $.ajax({
            method: "put",
            url: route.EDIT_CONTENT_UPDATE,
            data: {
                _token: route.TOKEN,
                key: 'banner_2',
                jdata: {
                    "banner_2": {
                            "txt" : $('#txt-banner-2').text(),                                
                        }
                }
            }
        }).done(function(res) {
            swal({
                title: res.title,
                text: res.msg,
                icon: res.icon,
                type: res.type
            }).then(function(){
                $('#txt-banner-2-ctrl').hide();
                $('#txt-banner-2').css('border', 'none');
                $('#txt-banner-2').attr('contenteditable', 'false');
                if(res.type == 'error') {
                    $('#txt-banner-2').html(faq_temp);                        
                } else {
                    $('#txt-banner-2').html($('#txt-banner-2').html());
                }

            })

        });
    });
    // End Banner 2
