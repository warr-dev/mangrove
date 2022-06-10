
    const showInputErrors=(err,parentSelector='')=>{
        console.log('err',err);
        $('small').html('')
        err.responseJSON?.errors && (
            Object.entries(err.responseJSON.errors).forEach(([key,value])=>{
                console.log(key,value);
                console.log(parentSelector+' .error-'+key);
                // $('#error-'+key).show()
                $(parentSelector+' .error-'+key).show()
                if(Array.isArray(value)){
                    let msg='';
                    value.forEach((err)=>{
                        msg+=err+'<br>';
                    })
                    $(parentSelector+' .error-'+key).html(msg)
                    // $('#error-'+key).html(msg)
                }
            })
        )
        alertify.error( err.responseJSON?.message)
    }

    const notifInputErrors=(err)=>{
        err.responseJSON?.errors && (
            Object.entries(err.responseJSON.errors).forEach(([key,value])=>{
                alertify.error(value.join())
            })
        )
    }


    const openModal=(name)=>{
        const modal=$('#'+name)[0];
        modal.classList.remove('fadeOut');
        modal.classList.add('fadeIn');
        modal.style.display='flex';
    }
    const closeModal=(name)=>{
        const modal=$('#'+name)[0];
        modal.classList.remove('fadeIn');
        modal.classList.add('fadeOut');
        setTimeout(() => {
                    modal.style.display = 'none';
                }, 500);
    }
    $('.modal .modal-close').click((e)=>{
        // let modal=$('.modal-close').parentNode.parentNode.parentNode.parentNode;
        // console.log(modal);
        // modal.classList.remove('fadeIn');
        // modal.classList.add('fadeOut');
        // setTimeout(() => {
        //             modal.style.display = 'none';
        //         }, 500);
        // // modal.style.display='none';
        $('.modal').css('display','none');

    })
    const loadModal=(url)=>{
        $('#modal-container').html('');
        $.ajax({
            url:url,
            data:{_token:'{{csrf_token()}}'},
            success:(res)=>{
                $('#modal-container').html(res.view);
                openModal('modal-edituser')
            },
            error:(err)=>{
                console.log(err);
            }
        })
        
    }
    const submitForm=(id)=>{
        $('#'+id)[0]?.submit();
    }