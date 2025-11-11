
    $(document).on('click','#checkAll',function(){
        if(this.checked) {
            $('.check-item').each(function(){
                this.checked = true;
            })
        }else{
            $('.check-item').each(function(){
                this.checked = false;
            })
        }

        buttonisabled()

    })


    $(document).on('click','.check-item',function(){
    if($('.check-item').length === $('.check-item:checked').length){
        $('#checkAll').prop('checked',true);
    }else{
        $('#checkAll').prop('checked',false);
    }

    buttonisabled()
})

function buttonisabled(){
    if($('.check-item:checked').length>0){
        $('.dropdown-toggle').removeAttr('disabled')
    }else{
        $('.dropdown-toggle').attr('disabled',true)
    }
}

function submitFrom(url, status){
    // console.log(status)
    $.ajax({
        url:url,
        type:'post',
        data:$('#MyForm').serialize() + '&status='+ status,
        success:function (data) {
            if(data.success){
                toastr.success(data.success);
                let page = $('li.page-item.active.page-link').html();
                getData(page);
            }
        }
    })
}
