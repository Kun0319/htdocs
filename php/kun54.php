<?php
// 檔案上傳 with 53
$upload = $_FILES['upload'];
// var_dump($upload);
if ($upload['error'] == 0) {
    if (
        move_uploaded_file(
            $upload['tmp_name'],
            "upload/{$upload['name']}"
        )
    ) {
        echo 'Upload success';
    } else {
        echo 'Upload Failure(2)';
    }

} else {
    echo 'Upload Failure(1)' . $upload['error'];
}

?>