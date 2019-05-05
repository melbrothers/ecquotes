<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="The platform is a service that provides electricians with cheaper quotes from the wholesaler quickly and conveniently. The wholesalers will bid for a price of an order and the cheapest order will be returned to the electrician. The service also allows electricians to manage invoices.">
  <meta name="author" content="Xin Zheng, Lixing Zhang">
  <title>{{ config('app.name') }}</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  
  <!-- App CSS -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div id="app"></div>

  @include('scripts')
</body>
</html>
