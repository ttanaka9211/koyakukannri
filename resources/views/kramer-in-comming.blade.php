@component('mail::message')
# Introduction

クレーマーが来ました。
{{ $kuremer->name }}様

@component('mail::button', ['url' => ''])
顧客管理システムを開く
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
