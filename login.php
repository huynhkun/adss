<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Của Bạn</title>
    <style>
        /* Cấu hình cho popup */
        .popup-container {
            position: fixed;
            bottom: 0;
            z-index: 98;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
        }
        .popup-content {
            display: inline-block;
            position: relative;
        }
        .popup-images img {
            width: 700px;
            height: 80px;
        }
        .close-btn {
            position: absolute;
            top: -10px;
            right: 1px;
            background: rgb(161, 90, 90);
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 50%;
        }
    </style>
</head>

 <!-- Popup Quảng Cáo -->
    <div id="popup-ad" class="popup-container">
        <div class="popup-content">
            <div class="popup-images">
                <!-- Banner Quảng Cáo 1 -->
                <a href="https://example-ad-link-1.com" target="_blank">
                    <img src="https://i.imgur.com/KumTDYV.gif?v=1.4" alt="Quảng cáo 1">
                </a>
                <!-- Banner Quảng Cáo 2 -->
                <a href="https://example-ad-link-2.com" target="_blank">
                    <img src="https://i.imgur.com/KumTDYV.gif?v=1.2" alt="Quảng cáo 2">
                </a>
            </div>
            <div class="close-btn" onclick="closePopup()">X</div>
        </div>
    </div>

    <script>
        // Hàm đóng popup khi người dùng click vào "X"
        function closePopup() {
            document.getElementById('popup-ad').style.display = 'none';
        }
    </script>
</body>
</html>
