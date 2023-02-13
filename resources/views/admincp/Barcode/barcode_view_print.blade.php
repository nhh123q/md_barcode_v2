@extends('admin_layout')
@section('content_admin')
<style>
    body{
        color:red;
    }
</style>
<button onclick="window.print()">Print this page</button>
@php
    echo $output;
@endphp

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".main-footer").hide();
</script>
