<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<style>
.icon-footer{height: 30px;}

		.logo{height: 100px;}
		.container-table{width: 650px; max-width: 650px;}
		.icon-help{height: 100px;}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: inherit;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

		.text-danger {color: #f86c6b !important;}
		.text-white {color: #fff !important;}
		.bg-secondary {background-color: #ced2d8 !important;}

		.btn {
			display: inline-block;
			font-weight: 400;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			border: 1px solid transparent;
			padding: 0.375rem 0.75rem;
			font-size: 1.25rem;
			line-height: 1.5;
			border-radius: 0.25rem;
			transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
			outline: 0;
			text-decoration: none;
		}

		a{cursor: pointer; text-decoration: none;}

		.btn:hover, .btn:focus {text-decoration: none;}
		.btn:focus, .btn.focus {outline: 0;box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);}
		.btn:not(:disabled):not(.disabled) {cursor: pointer;}
		.btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {background-image: none;}

		.btn-danger {
			color: #fff;
			background-color: #f86c6b;
			border-color: #f86c6b;
			cursor: pointer;
		}

		.btn-danger:hover {
			color: #fff;
			background-color: #f63c3a;
			border-color: #f63c3a;
		}

		.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
		.show > .btn-danger.dropdown-toggle {
			color: #fff;
			background-color: #bd2130;
			border-color: #b21f2d;
		}

		.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
		.show > .btn-danger.dropdown-toggle:focus {
			box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
		}

		.text-center{text-align: center;}
		.w-100{width: 100%}

		.w-25 {
			width: 25% !important;
		}

		.w-50 {
			width: 50% !important;
		}

		.w-75 {
			width: 75% !important;
		}

		.w-100 {
			width: 100% !important;
		}

		.h-25 {
			height: 25% !important;
		}

		.h-50 {
			height: 50% !important;
		}

		.h-75 {
			height: 75% !important;
		}

		.h-100 {
			height: 100% !important;
		}

		.mw-100 {
			max-width: 100% !important;
		}

		.mh-100 {
			max-height: 100% !important;
		}

		.m-0 {
			margin: 0 !important;
		}

		.mt-0,
		.my-0 {
			margin-top: 0 !important;
		}

		.mr-0,
		.mx-0 {
			margin-right: 0 !important;
		}

		.mb-0,
		.my-0 {
			margin-bottom: 0 !important;
		}

		.ml-0,
		.mx-0 {
			margin-left: 0 !important;
		}

		.m-1 {
			margin: 0.25rem !important;
		}

		.mt-1,
		.my-1 {
			margin-top: 0.25rem !important;
		}

		.mr-1,
		.mx-1 {
			margin-right: 0.25rem !important;
		}

		.mb-1,
		.my-1 {
			margin-bottom: 0.25rem !important;
		}

		.ml-1,
		.mx-1 {
			margin-left: 0.25rem !important;
		}

		.m-2 {
			margin: 0.5rem !important;
		}

		.mt-2,
		.my-2 {
			margin-top: 0.5rem !important;
		}

		.mr-2,
		.mx-2 {
			margin-right: 0.5rem !important;
		}

		.mb-2,
		.my-2 {
			margin-bottom: 0.5rem !important;
		}

		.ml-2,
		.mx-2 {
			margin-left: 0.5rem !important;
		}

		.m-3 {
			margin: 1rem !important;
		}

		.mt-3,
		.my-3 {
			margin-top: 1rem !important;
		}

		.mr-3,
		.mx-3 {
			margin-right: 1rem !important;
		}

		.mb-3,
		.my-3 {
			margin-bottom: 1rem !important;
		}

		.ml-3,
		.mx-3 {
			margin-left: 1rem !important;
		}

		.m-4 {
			margin: 1.5rem !important;
		}

		.mt-4,
		.my-4 {
			margin-top: 1.5rem !important;
		}

		.mr-4,
		.mx-4 {
			margin-right: 1.5rem !important;
		}

		.mb-4,
		.my-4 {
			margin-bottom: 1.5rem !important;
		}

		.ml-4,
		.mx-4 {
			margin-left: 1.5rem !important;
		}

		.m-5 {
			margin: 3rem !important;
		}

		.mt-5,
		.my-5 {
			margin-top: 3rem !important;
		}

		.mr-5,
		.mx-5 {
			margin-right: 3rem !important;
		}

		.mb-5,
		.my-5 {
			margin-bottom: 3rem !important;
		}

		.ml-5,
		.mx-5 {
			margin-left: 3rem !important;
		}

		.p-0 {
			padding: 0 !important;
		}

		.pt-0,
		.py-0 {
			padding-top: 0 !important;
		}

		.pr-0,
		.px-0 {
			padding-right: 0 !important;
		}

		.pb-0,
		.py-0 {
			padding-bottom: 0 !important;
		}

		.pl-0,
		.px-0 {
			padding-left: 0 !important;
		}

		.p-1 {
			padding: 0.25rem !important;
		}

		.pt-1,
		.py-1 {
			padding-top: 0.25rem !important;
		}

		.pr-1,
		.px-1 {
			padding-right: 0.25rem !important;
		}

		.pb-1,
		.py-1 {
			padding-bottom: 0.25rem !important;
		}

		.pl-1,
		.px-1 {
			padding-left: 0.25rem !important;
		}

		.p-2 {
			padding: 0.5rem !important;
		}

		.pt-2,
		.py-2 {
			padding-top: 0.5rem !important;
		}

		.pr-2,
		.px-2 {
			padding-right: 0.5rem !important;
		}

		.pb-2,
		.py-2 {
			padding-bottom: 0.5rem !important;
		}

		.pl-2,
		.px-2 {
			padding-left: 0.5rem !important;
		}

		.p-3 {
			padding: 1rem !important;
		}

		.pt-3,
		.py-3 {
			padding-top: 1rem !important;
		}

		.pr-3,
		.px-3 {
			padding-right: 1rem !important;
		}

		.pb-3,
		.py-3 {
			padding-bottom: 1rem !important;
		}

		.pl-3,
		.px-3 {
			padding-left: 1rem !important;
		}

		.p-4 {
			padding: 1.5rem !important;
		}

		.pt-4,
		.py-4 {
			padding-top: 1.5rem !important;
		}

		.pr-4,
		.px-4 {
			padding-right: 1.5rem !important;
		}

		.pb-4,
		.py-4 {
			padding-bottom: 1.5rem !important;
		}

		.pl-4,
		.px-4 {
			padding-left: 1.5rem !important;
		}

		.p-5 {
			padding: 3rem !important;
		}

		.pt-5,
		.py-5 {
			padding-top: 3rem !important;
		}

		.pr-5,
		.px-5 {
			padding-right: 3rem !important;
		}

		.pb-5,
		.py-5 {
			padding-bottom: 3rem !important;
		}

		.pl-5,
		.px-5 {
			padding-left: 3rem !important;
		}

		.m-auto {
			margin: auto !important;
		}

		.mt-auto,
		.my-auto {
			margin-top: auto !important;
		}

		.mr-auto,
		.mx-auto {
			margin-right: auto !important;
		}

		.mb-auto,
		.my-auto {
			margin-bottom: auto !important;
		}

		.ml-auto,
		.mx-auto {
			margin-left: auto !important;
		}

		p {
			margin-top: 0;
			margin-bottom: 1rem;
		}

		body {
			margin: 0;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		}

		html {
			font-family: sans-serif;
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
			-ms-overflow-style: scrollbar;
			-webkit-tap-highlight-color: transparent;
		}

		.bg-danger {
  background-color: #f86c6b !important;
}

.text-right{text-align: right;}

.text-primary {
  color: #20a8d8 !important;
}
	</style>


</head>
<body>
	<table class="container-table m-auto" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="3" class="text-center">
				<img src="{{ $message->embed('modules/portal/img/brand/logo.png') }}" class="logo">
			</td>
		</tr>
		<tr>
			<td colspan="3" class="px-5">
				<h2 class="text-primary text-center">{{ $event->name }}</h2>
				<p class="text-center lead mt-4 mb-5">
					{{ $company->name }}, agradecemos a confiança na Scancode para estar juntos com vocês no evento.
				</p>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="bg-secondary px-5 py-4 text-center">
				<p class="text-white lead px-5">
					Seu evento já esta disponivel no portal. Segue abaixo o link para a validação do seus dados
				</p>
				<a href="{{ route('email.import', [base64_encode($company->id), base64_encode($event->id)]) }}" class="btn btn-danger px-5 py-3 mt-2 mx-auto my-1 text-white">Importe seus dados aqui</a>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="px-5 py-4 bg-danger text-center">
				<p class="lead text-white px-5">
					Qualquer dúvida para a validação dos dados ou na utilização do portal entrar em contato
				</p>
				<img src="{{ $message->embed('modules/portal/img/email/help.png') }}" class="icon-help">
			</td>
		</tr>
		<tr>
			<td class="bg-secondary text-white py-2 pl-5">
				<img src="{{ $message->embed('modules/portal/img/email/email.jpeg') }}" class="icon-footer" valign="middle">
				<a href="" class="text-dark">suporte@scancode.com.br</a>
			</td>
			<td class="bg-secondary text-dark">
				<img src="{{ $message->embed('modules/portal/img/email/tel.jpeg') }}" class="icon-footer" valign="middle">
				11 3284-4812
			</td>
			<td class="bg-secondary text-dark text-right pr-5" valign="middle">
				<img src="{{ $message->embed('modules/portal/img/email/zap.jpeg') }}" class="icon-footer">
				11 99999-9999
			</td>

		</tr>
	</table>
</body>
</html>