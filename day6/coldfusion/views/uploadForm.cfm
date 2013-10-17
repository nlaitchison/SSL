<html>
<body>
<br /><br />
<form id="captcha_verify" method="post" action="?action=captchaVerify">
    <div class="form_input">
        <label for="captcha_form"> Captcha Verification: </label>
        <input type="text" accept="image" name="captcha_input" id="captcha_input"/>
        <input type="submit" name="captcha_submit" id="captcha_submit" value="Verify" />
    </div>		
</form>
<br />
-----------------------
<br /><br />
<form id="create_album" method="post" action="?action=uploadImage" enctype="multipart/form-data">
    <div class="form_input">
        <label for="album_image"> Upload Image: </label>
        <input type="file" accept="image" name="album_image" id="album_image"/>
        <input type="submit" name="upload_img" id="upload_img" value="Upload"/>
    </div>		
</form>
</body>
</html>
