<?php
session_start();
if (!isset($_SESSION['id']))
    header('Location:kun46.php');
$username = $_SESSION['readname'];



?>
<meta charset="utf-8">
<script>
    //向頁面一開始為1
    var page = 1;
    // 建立一個新的xhttp要求

    var xhttp = new XMLHttpRequest();


    // 用一個函式來定義連接資料庫
    function fetchPageData() {
        // 沒有括號代表的是定義
        // 下面那行定義當xhttp 的readystate改變時 呼叫函式callback
        // readystate是 XMLHttpRequest 請求的狀態 從1~4 最後4為完成
        xhttp.onreadystatechange = callback;
        // 此處使用的是post的傳遞方式 若為get 要改成字串相加  'kun48.php?page=' + page;

        // var url = 'kun48.php?page=' + page;  //這是get的方法
        var url = 'kun50.php'               //這是post的方法


        // 向伺服器發出請求要用到 open()，send()兩種方法
        // open的值第一個是傳遞方式get或post 第二個是伺服器的位置 第三個是非同步true 或同步 false 非同步可以同時執行其他函式 
        xhttp.open('post', url, true);

        xhttp.setRequestHeader("Content-type",
            "application/x-www-form-urlencoded");
        xhttp.send('page=' + page); //這是post的方式
        // xhttp.send(); //這是get的方式
    }
    // callback 在xhttp就緒狀態改變時會被呼叫
    function callback() {
        // 如果就緒狀態完成且狀態status為200時 
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // 取得table元素
            var table = document.getElementById('table');
            // 清除第二列以後的tr
            // 取得tr標籤元素
            var trs = document.getElementsByTagName('tr');
            // 取得tr的長度
            var len = trs.length;
            // 使用for迴圈 刪除一整個tr
            for (var i = 1; i < len; i++) {
                table.removeChild(trs[1]);
            }
            // 用變數接JSON型態的資料並使用parse方法數據變為js物件括號裡的值是xhttp回應字串符
            var root = JSON.parse(xhttp.responseText);

            console.log(root.length);

            for (var i = 0; i < root.length; i++) {

                var row = root[i];
                // console.log(row.ID + ":" + row.Name);

                // 創建所需要的資料td
                var tr = document.createElement('tr');
                // 前面已經將資料轉成js物件 並用row變數接收了
                // 這裡使用呼叫物件中的屬性來填入到創建的td中
                // row.後面接的屬性名稱是MySQL資料庫的欄位名稱
                var td_id = document.createElement('td');
                td_id.innerHTML = row.ID;
                tr.appendChild(td_id);

                var td_name = document.createElement('td');
                td_name.innerHTML = row.Name;
                tr.appendChild(td_name);

                var td_tel = document.createElement('td');
                td_tel.innerHTML = row.Tel;
                tr.appendChild(td_tel);

                var td_pic = document.createElement('td');
                td_pic.innerHTML = '<img src="' + row.Pic + '" width="160px" height="90x" />';
                tr.appendChild(td_pic);

                table.appendChild(tr);
            }
        }
    }

    // 當按下prev按鈕時 page減少 呼叫資料庫函式
    function prev() {
        page--;
        fetchPageData();
    }
    // 當按下next按鈕時 page增加 呼叫資料庫函式
    function next() {
        page++;
        fetchPageData();
    }


    fetchPageData();

</script>
<h1>Kun BIG Company</h1>
<hr>
Welcome,
<?php echo $username; ?>
<hr>
<a href="logout.php">Logout</a>
<hr />
<input type="button" value="Prev" onclick="prev()">
<input type="button" value="Next" onclick="next()">
<hr>
<table id="table" border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Image</th>
    </tr>


</table>