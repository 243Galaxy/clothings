@if(Count($errors) > 0)
<div class="w3-panel w3-red w3-margin w3-card-4 w3-responsive">
    <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
    @foreach($errors->all() as $error)
        <p class="">
            {{$error}}
        </p>
    @endforeach
</div>
@endif

@if(session('success'))
    <div class="w3-panel w3-green w3-margin w3-card-4 w3-responsive">
        <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
        {!! session('success') !!}
    </div>
@endif

@if(session('warning'))
    <div class="w3-panel w3-orange w3-margin w3-card-4 w3-responsive">
        <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
        {!! session('warning') !!}
    </div>
@endif

@if(session('error'))
    <div class="w3-panel w3-red w3-margin w3-card-4 w3-responsive">
        <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
        {!! session('error') !!}
    </div>
@endif

@if(session('message'))
        <?php $top = 100; ?>
        <div class="w3-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-border w3-border-theme w3-hover-red w3-btn" style="cursor:pointer;"><span>&times; </span> Close All</span>
        @foreach(session('message') as $r)
        @if($r['status']=="error")
        <div style="position: absolute;top:{{$top}}px" class="w3-panel w3-red w3-card-4 w3-responsive">
            <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
            <p class="">{!! $r['message'] !!}</p>          
        </div>
        @elseif($r['status']=="success")
        <div style="position: absolute;top:{{$top}}px" class="w3-panel w3-green w3-card-4 w3-responsive">
            <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
            <p class="">{!! $r['message'] !!}</p>          
        </div>
        @elseif($r['status']=="info")
        <div style="position: absolute;top:{{$top}}px;" class="w3-panel w3-blue w3-card-4 w3-responsive">
            <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
            <p class="">{!! $r['message'] !!}</p>          
        </div>
        @elseif($r['status']=="warning")
        <div style="position: absolute;top:{{$top}}px;" class="w3-panel w3-orange w3-card-4 w3-responsive">
            <span onclick="this.parentElement.style.display='none'" class="w3-btn w3-right">&times;</span>
            <p class="">{!! $r['message'] !!}</p>          
        </div>
        @else
        @endif
        <?php $top = $top + 30; ?>
        @endforeach
        </div>
@endif