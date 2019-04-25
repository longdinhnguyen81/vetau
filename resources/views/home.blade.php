<p>Có 1 người vừa đặt {{ $people }} vé vào thời gian {{ $time }} ngày {{ $date }}</p>
<p>Họ và tên: {{ $name }}</p>
<p>Số điện thoại: {{ $cmnd }}</p>
<p>Hình thức thanh toán: {{ $type }}</p>
<p>Số tiền cần thanh toán: {{ number_format($people*$cost,0,',','.') }} VND</p>
<p>Mã đặt vé: {{ $id }}</p>