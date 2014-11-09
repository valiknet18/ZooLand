$(document).on('submit','form[name=form_create_animal]',function(e){
    e.preventDefault();
    //var form = $('form[name=form_create_animal]');
    //
    //var formData = new FormData(form);
    //formData.append("file");
    //formData.append("image_animal", $('#image_animal').val());
    //formData.append("name_animal", $('#name_animal').val());

    //console.log(formData);

    //console.log(JSON.parse(formData));

    //$.ajax({
    //    url: "/animal/create",
    //    data: {data: formData.toString()},
    //    type: "POST",
    //}).done(function(data){
    //    console.log(data);
    //});


});


$(document).on('submit', '#create_category', function(e){
    e.preventDefault();
    var name_category = $('#create_category input[type=text]').val();
    $('#create_category input[type=text]').val("");
    $.ajax({
        url: "/category/create",
        data: {name_category:name_category},
        type: "POST",
        dataType: "json"
    }).done(function(data,status){

        var data = eval(data);
        switch(data['code']) {
            case 200: {
                str = "";
                $.each(data['data'],function(key,value){
                    str += "<li>";
                        str += "<a href='/category/view/" + value.id + "'>" + value.cname + "</a> | <a href='/category/delete/" + value.id + "' class='delete_category'>Видалити</a>";
                    str += "</li>";
                });

                $('#list_category').html(str);
            }
                break;

            case 404: {

            }
                break;
        }
    })
});


$(document).on('click', '.delete_category', function(e){
    e.preventDefault();
    var url = $(this).attr('href');

    $.ajax({
        url: url,
        type: "DELETE"
    }).done(function(data,status){

        var data = eval(data);
        switch(data['code']) {
            case 200: {
                str = "";
                $.each(data['data'],function(key,value){
                    str += "<li>";
                    str += "<a href='/category/view/" + value.id + "'>" + value.cname + "</a> | <a href='/category/delete/" + value.id + "' class='delete_category'>Видалити</a>";
                    str += "</li>";
                });

                $('#list_category').html(str);
            }
                break;

            case 404: {

            }
                break;
        }
    })
});