<style>
    .preview_img{
        width: 300px;
        height: 190px;
        background: #303d3c;
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        padding: 20px;
    }
    .preview_img .main_img{
        width: 100%;
        height: 100%;
        overflow: hidden;
        box-shadow: inset 0 0 10px 0 #222222;
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .preview_img img{
        width: 100%;
        height: 100%;
        display: block;
    }
    .imgHidden{
        display: none;
    }
    .imgUploadCss{
        display: block;
        width: 300px;
        background: #303d3c;
        font-size: 16px;
        font-weight: 400;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        padding: 20px 20px;
        margin-top: 16px;
        border-radius: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        -ms-border-radius: 6px;
        -o-border-radius: 6px;
        position: relative;
        overflow: hidden;
        cursor: pointer;

    }
    img[alt="Not Image Selected"]{
        color: #c74444;
    }


</style>


<div class="text-center">
    <div class="preview_img">
        <div class="main_img">
            <picture>
                <img src="{{ asset('assets/backend') }}/app-assets/images/placehoder.png" id="preview" class="preview" alt="Not Image Selected">
            </picture>
        </div>
    </div>
    <div>
        <label class="imgUploadCss" id="imgLabel" for="imgUpload">
            <i class="fa-solid fa-cloud-arrow-up pr-5"></i> Choose Image</label>
        <input class="imgHidden" id="imgUpload" name="fevicon" type="file">
    </div>
</div>

<script>
    // Image Upload Click Event

    let img = null;
    let imgUrl =null;
    let imgInput = document.getElementById('imgUpload')
    let nameShow = document.getElementById('imgLabel')
    let preview = document.getElementById('preview')


    function ReadUrl(input){
        let reader =  new FileReader();
        reader.onload = function(e) {
            imgUrl = e.target.result
            $('#preview').attr('src',e.target.result)
        }
        reader.readAsDataURL(input)

    }

    imgInput.addEventListener('change', function (e){
        if(e.currentTarget.files[0].type == 'image/png' ||e.currentTarget.files[0].type == 'image/jpeg'||e.currentTarget.files[0].type == 'image/jpg'){
            ReadUrl(e.currentTarget.files[0])
            img = e.currentTarget.files[0].name
            nameShow.innerText = img
        }else{
            nameShow.innerText = 'please, provide image file'
            nameShow.style.color = '#E91F63'
        }

    })
</script>