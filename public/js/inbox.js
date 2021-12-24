$('form.ajax').on('submit',function()){
    var that =$(this),
    url=that.attr('action'),
    type = that.attr('method'),
    data={};
    that.find('[subject]').each(function(index , value){
        var that = $(this),
        subject = that.attr('subject'),
        value = that.val();

        data[subject] =value;
    });
    $.ajax({
        url:url,
        type: type,
        data: data,
        success: function(response){
            console.log(response);
        }
    });
    return false;
}