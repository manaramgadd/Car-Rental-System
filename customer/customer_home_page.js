function add_to_table(){
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "action_retrive.php",
            dataType: "html",
            cache: false,
            success: function (data) {
                $("#tableContents").html(data);
            }
        });

    });
}

function searchFunction(){
    let searchWord = document.forms["searchForm"]["search"].value;
    let searchMethod = document.forms["searchForm"]["searchOption"].value;
    if(searchWord == "" || searchMethod == ""){
        console.log("test");
        return false;
    }
    console.log("test2");
    return true;
}

function get_user(){
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "user_retrive.php",
            dataType: "html",
            cache: false,
            success: function (data) {
                $("#user").html(data);
            }
        });

    });
}

function load(){
    add_to_table();
    get_user();
}

function rent(identifier){
    var pno = identifier.getAttribute('data-id');
    window.location.href="rent_cars.php?"+"pno="+pno;
}
