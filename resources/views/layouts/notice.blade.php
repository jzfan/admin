<div id='notice-div' class="position-fixed" style="top:80px; right: 15px; width: 180px; z-index: 99; display: none;">
    <div class="alert alert-success font-weight-bold notice-alert">
        @if (session()->has('notice'))
        <i class="iconfont icon-check"></i>
        {{ session()->get('notice') }}
        @endif
    </div>
</div>
