
    const showInputErrors=(err)=>{
        $('small').html('')
        err.responseJSON?.errors && (
            Object.entries(err.responseJSON.errors).forEach(([key,value])=>{
                $('#error-'+key).show()
                $('#error-'+key).html(value)
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
        let modal=$('.modal-close')[0].parentNode.parentNode.parentNode.parentNode;
        modal.classList.remove('fadeIn');
        modal.classList.add('fadeOut');
        setTimeout(() => {
                    modal.style.display = 'none';
                }, 500);
        // modal.style.display='none';
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