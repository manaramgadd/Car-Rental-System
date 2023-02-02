function add_to_table(){
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "rented_cars.php",
            dataType: "html",
            cache: false,
            success: function (data) {
                $("#data").html(data);
            }
        });

    });
}

function get_user(){
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "user_data.php",
            dataType: "html",
            cache: false,
            success: function (data) {
                $("#user_data").html(data);
            }
        });

    });
}

function load(){
    add_to_table();
    get_user();
}

function print_data(identifier){
    console.log(identifier.getAttribute('data-id'));
    // ADD PAGE TRANSFER HERE
}