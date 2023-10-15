function deleteData(id, option=null) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            if(option){
                document.getElementById(`delete-form-${option}` + id).submit();
            }else{
                document.getElementById("delete-form-" + id).submit();
            }
        }
    })
}