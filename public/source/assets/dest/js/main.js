$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function removeRow(id, url){
    if (confirm('Ban co chac muon xoa khong?')){
        $.ajax({
            type: 'DELETE',
            dataType : 'JSON',
            data: {id},
            url: url,
            success: function(result){
                if (result.error === false){
                    alert(result.message);
                    location.reload();
                }else{
                    alert('Xoa khong thanh cong')
                }

            }
        });
        $('a[href="#"]').attr('href', url);
    }
}