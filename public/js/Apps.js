const Apps = {

    addToCart : function(elm){
        var id = elm.getAttribute("data-id");
        $.ajax({
            url : ROOT_URL + '?controller=cart&action=test',
            dataType : 'json',
            data : {
                id : id,
            },
            success: function(result){
                console.log(result.data);
            }
        })
    }

}