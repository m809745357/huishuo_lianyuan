@extends('layouts.wechat')

@section('content')
<div class="award-main">
    <img src="/images/myaward-bg.png" alt="">
    <table width="90%" class="award-main_content">
          <tr class="award-main_title">
            <td width="25%">奖项</td>
            <td width="42%">姓名</td>
            <td width="33%">手机号</td>
          </tr>
          @foreach ($logs as $key => $value)
            <tr>
              <td>{{ $value->lottery->award->title }}</td>
              <td>{{ $value->username }}</td>
              <td>{{ $value->phone }}</td>
            </tr>
          @endforeach

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
    </table>
</div>
@endsection
