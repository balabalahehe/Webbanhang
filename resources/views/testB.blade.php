@extends('admin.share.master')
@section('content')

<input id="button" type="button" value="CHUYỂN TRANG A" onclick="playAudio()">
<audio id="audio" src="t-rex-roar.mp3"></audio>
@endsection
@section('js')
<script>
    function playAudio() {
        var audio = document.getElementById("audio");
        audio.play();
        window.location.href='/testA';
    }
</script>
@endsection
