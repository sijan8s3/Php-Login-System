$(document).ready(function(e){

    //selects the upoaded file
    let $uploadfile = $('#register .upload-profile-image input[type="file"]');
    //informs the file change
    $uploadfile.change(function(){
        //call the funtion to read the url of file
        readURL(this);
    })

    $("#reg-form").submit(function (event){
        let $password = $("#password");
       
        let $confirm_password = $("#confirm_password");
        let $confirm_error = $("#confirm_error");
        if ($password.val() === $confirm_password.val()){
            return true;
        }else{
            $confirm_error.text("Password not Match");
            event.preventDefault();
        }
    })
});

//reads the url of input file
function readURL(input){
    if(input.files && input.files[0]){
        let reader = new FileReader();

        reader.onload= function(e){

            //reads and loads the file in img 
            $("#register .upload-profile-image .img").attr('src', e.target.result);
            //removes the camera icon
            $("#register .upload-profile-image .camera-icon").css({display: "none"});
        },
        
        reader.readAsDataURL(input.files[0]);
    }
    
}