<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BS GROUP</title>

<link rel="stylesheet" type="text/css" href="{!!asset('public/assets/frontend/email.css')!!}" />

</head>

<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
	<tr>
		<td></td>
		<td class="header container" >

				<div class="content">
				<table bgcolor="#999999">
					<tr>
						<td><img src="{!!asset('public/assets/frontend/images/logo-email.png')!!}" /></a></td>
					</tr>
				</table>
				</div>

		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<p class="lead"></p>
						<p>BS GROUP vừa nhận được một thông tin liên hệ từ khách hàng:</p>
						<p><b>Tên khách hàng:</b> {!!$name!!}</p>
						<p><b>Email khách hàng:</b> {!!$email!!}</p>
						<p><b>Số điện thoại khách hàng:</b> {!!$phone!!}</p>
						<p><b>Dịch vụ:</b></p>
						<ul class="list">
							@foreach($service as $item_service)
								<li>{!!$item_service!!}</li>
							@endforeach
						</ul>

						<p><b>Thời gian:</b></p>
						<ul class="list">
							@foreach($timing as $item_time)
								<li>{!!$$item_time!!}</li>
							@endforeach
						</ul>

						<p><b>Ngân sách:</b></p>
						<ul class="list">
							@foreach($budget as $item_budget)
								<li>{!!$$item_budget!!}</li>
							@endforeach
						</ul>
						<!-- Callout Panel -->
						<p class="callout">
							Đây là email thông báo tự động vui lòng không trả lời email này. Cảm ơn!
						</p><!-- /Callout Panel -->
					</td>
				</tr>
			</table>
			</div><!-- /content -->

		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">

				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						<p>
							<a href="{!!route('front.getIndex')!!}">Bs Group</a> |
							<a href="{!!route('front.getContact')!!}">Contact</a>
						</p>
					</td>
				</tr>
			</table>
				</div><!-- /content -->

		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>
