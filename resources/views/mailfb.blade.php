
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Init HTML</title>
</head>
<body style="margin: 0; padding: 0;">
	@php
		$cart = Session::get('cart');
	@endphp
    <div style="background: #fafbfc; margin: 0px; min-height: 300px; padding: 0px 30px 15px; font-family: 'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.5;">
        <div style="max-width: 600px; margin: 0 auto;">
            <div style="text-align: center; padding-bottom: 20px; padding-top: 30px;">
                <span style="font-weight: 700; font-size: 32px; color: #b7bdc1;">Đặt vé tàu thành công</span>
            </div>
            <div style="border-top: 3px solid #32a067; color: #525c65; padding: 10px; background: #fff;">

                <p style="margin: 5px 0;color: #525c65">Xin chào bạn {{ $name }}</p>
                <p style="margin: 5px 0;color: #525c65">Bạn đã đặt {{ $people }} vé tàu từ {{ $train_from }} vào thời gian {{ $time }} ngày {{ $date }}</p>
                <p style="margin: 5px 0;color: #525c65">Hình thức thanh toán của bạn là {{ $type }}</p>
                <p style="margin: 5px 0;color: #525c65">Số tiền bạn phải thanh toán là {{ number_format($people*$cost,0,',','.') }} VND</p>
                <p style="margin: 5px 0;color: #525c65">Quý khách vui lòng chuyển khoản trực tiếp vào số tài khoản bên dưới</p>
                <strong>Ngân hàng Vietcombank</strong>
                <p style="margin: 5px 0;color: #525c65">Chủ TK: Nguyễn Minh Tài</p>
                <p style="margin: 5px 0;color: #525c65">STK: 0041000340980</p>
                <p style="margin: 5px 0;color: #525c65">Chi nhánh: VCB Liên Chiểu - Đà Nẵng</p>
                <strong>Ngân hàng MB Quân đội</strong>
                <p style="margin: 5px 0;color: #525c65">Chủ TK: CTY TNHH DU LỊCH VÀ THƯƠNG MẠI HOÀNG PHÚC</p>
                <p style="margin: 5px 0;color: #525c65">STK: 3011101676768 </p>
                <p style="margin: 5px 0;color: #525c65">Chi nhánh: Đà Nẵng</p>
                <strong>Ví điện tử MOMO</strong>
                <p style="margin: 5px 0;color: #525c65">Chủ TK: Nguyễn Minh Tài</p>
                <p style="margin: 5px 0;color: #525c65">SĐT: 0978175506</p>

                <strong>Nội dung chuyển khoản: {{ $id }}</strong>
                <p style="margin: 30px 0;"><a style="display: block; padding: 10px; background: #32a067; max-width: 350px; text-align: center; color: #fff; text-decoration: none; margin: 0 auto; font-weight: 700; font-size: 16px;" href="https://muavetaulyson.com">Quay lại trang web</a></p>
                <p style="margin: 5px 0;color: #525c65">Sau khi thanh toán hãy gọi tổng đài 0901.841.841 - 0935.091.684 - 0986.841.841 để chúng tôi có thể hướng dẫn bạn cách nhận vé tại 1 trong 4 chi nhánh của chúng tôi.</p>
                <p style="margin: 5px 0;color: #525c65">Chúc bạn có 1 chuyến đi vui vẻ</p>
            </div>
            <div style="text-align: center;"><img style="max-width: 90%;" src="https://www.inithtml.com/demo/email/shadow.png" alt="Shadow"></div>
            <div style="text-align: center; margin-top: 45px; margin-bottom: 45px;">
                <div style="margin-bottom: 30px;">
                    <a href="https://www.facebook.com/dulichlysongiare/" style="margin-right: 20px;"><img alt="Facebook" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/facebook.jpg" width="26" height="26"></a>
                    <a href="maito:datvetaulyson@gmail.com" style="margin-right: 20px;"><img alt="Google Plus" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/google.jpg" width="26" height="26"></a>
                </div>
                <p style="font-size: 12px; color: #b7bdc1; margin-bottom: 15px;">muavetaulyson &#8211; </p>
            </div>
        </div>
    </div>
    <div style="text-align: center; background: rgb(125, 151, 173); padding: 10px 0; color: #fff; font-family: 'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size: 14px;">Cảm ơn bạn!</div>
</body>
</html>