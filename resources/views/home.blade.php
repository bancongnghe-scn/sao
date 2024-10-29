@extends('layouts.app',[
    'title' => 'Trang chủ'
])

@section('content')
  <pre>{{ print_r(Session::get('auth_user'), true) }}</pre>
  <pre>{{ print_r(env('SECRET_KEY')) }}</pre>
  <pre>{{ print_r(env('URL_CLIENT_SSO')) }}</pre>
  <pre>{{ print_r(env('URL_SERVER_SSO')) }}</pre>
  <pre>{{ print_r(env('API_LOGOUT_SSO')) }}</pre>
  <pre>{{ print_r(env('API_GET_SESSION')) }}</pre>
  <pre>{{ print_r(env('API_USER_LIST')) }}</pre>
  <pre>{{ print_r(env('API_ORG_LIST')) }}</pre>
  <pre>{{ print_r(env('API_CONFIG_LIST')) }}</pre>
@endsection

