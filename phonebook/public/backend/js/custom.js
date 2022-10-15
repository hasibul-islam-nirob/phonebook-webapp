


function SearchContactList(){
    let sInput = $('#SearchContactList').val();

        let url = "/SearchContact";
        axios.post(url, {sInput:sInput} ).then((res)=>{
            $('#contactListTableSearch').empty();
            var jsonData = res.data;
            console.log(jsonData)
            $.each(jsonData, function(i){
                $('<tr>').html("<th scope='row'>"+(i+1)+"</th>"+
                    "<td>"+jsonData[i].name+"</td>"+
                    "<td>"+jsonData[i].email+"</td>"+
                    "<td>"+jsonData[i].phone_one+"</td>"+
                    "<td> "+jsonData[i].phone_two+"</td>"+
                    "<td class='th-sm'>" +
                    "<a class='favoriteBtn' data-id="+jsonData[i].id +"><i class='fas fa-star px-1'></i></a>" +
                    "<a class='siteEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit px-1'></i></a>"+
                    "<a class='siteDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt px-1'></i></a>"+
                    "</td>"
                ).appendTo('#contactListTableSearch');
            });

        }).catch( (err)=>{

        })

}


function getAllUserSiteList() {
    axios.get('/getContactList').then( function(res){
        if (res.status == 200) {

            $('#contactListTable').empty();
            var jsonData = res.data;
            console.log(jsonData)
            $.each(jsonData, function(i){
                $('<tr>').html("<th scope='row'>"+(i+1)+"</th>"+
                    "<td>"+jsonData[i].name+"</td>"+
                    "<td>"+jsonData[i].email+"</td>"+
                    "<td>"+jsonData[i].phone_one+"</td>"+
                    "<td> "+jsonData[i].phone_two+"</td>"+
                    "<td class='th-sm'>" +
                    "<a class='favoriteBtn' data-id="+jsonData[i].id +"><i class='fas fa-star px-1'></i></a>" +
                    "<a class='siteEditBtn' data-id="+jsonData[i].id +"><i class='fas fa-edit px-1'></i></a>"+
                    "<a class='siteDeleteBtn' data-id="+jsonData[i].id +"><i class='fas fa-trash-alt px-1'></i></a>"+
                    "</td>"
                ).appendTo('#contactListTable');
            });
            // Project Edit
            $('.siteEditBtn').on('click',function(){
                let id = $(this).data('id');
                getUserSiteByID(id);
                $('#modalEditDataID').html(id);
                $('#updateDataModal').modal('show');
            })
            // Project Delete
            $('.siteDeleteBtn').on('click',function(){
                let id = $(this).data('id');
                $('#modalSiteDeleteDataID').html(id);
                $('#deleteSiteDataModal').modal('show');
            })


        } else {

        }

    }).catch(function (error){

    })

}













$('#AddNewBtn').on('click',function (){
    $('#addMewContactModal').modal('show');
})

$('#addNewConfirmBtn').on('click',function (){
    let name = $('#name').val();
    let email = $('#email').val();
    let phoneOne = $('#phoneOne').val();
    let phoneTwo = $('#phoneTwo').val();

    //alert(name)
    addNewContact(name,email,phoneOne,phoneTwo)
})

// Add New User Function
function addNewContact(name,email,phoneOne,phoneTwo) {
    $('#addNewConfirmBtn').addClass('disabled');
    $('#addNewConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div> Loading...");
    let url = "/onContactSave";
    axios.post(url, {name:name, email:email, phoneOne:phoneOne, phoneTwo:phoneTwo} ).then((res)=>{
        if (res.status==200) {
            $('#addNewConfirmBtn').removeClass('disabled');
            $('#addNewConfirmBtn').html('Save');
            if (res.data == 1){
                $('#addMewContactModal').modal('hide');
                $('#addNewConfirmBtn').html('Save');
                getAllUserSiteList();
                swal({
                    title: "Save Success!",
                    icon: "success",
                    button: "Ok",
                });
                $('#name').val('');
                $('#email').val('');
                $('#phoneOne').val('');
                $('#phoneTwo').val('');

            }else if(res.data == 10){
                $('#addNewConfirmBtn').removeClass('disabled');
                $('#addNewConfirmBtn').html('Save');
                swal({
                    title: "Save Fail",
                    text: "Mail Address Already Exist, Please Try Again!",
                    icon: "info",
                    button: "Ok",
                });
            }


        } else {
            $('#addNewConfirmBtn').removeClass('disabled');
            $('#addNewConfirmBtn').html('Save');
            swal({
                title: "Save Fail",
                text: "Something Happen, Please Try Again!",
                icon: "warning",
                button: "Ok",
            });

        }
    }).catch( (err)=>{
        $('#addNewConfirmBtn').removeClass('disabled');
        $('#addNewConfirmBtn').html('Save');
        swal({
            title: "Save Fail",
            text: "Something Went wrong, Please Try Again!",
            icon: "error",
            button: "Ok",
        });

    })
}
