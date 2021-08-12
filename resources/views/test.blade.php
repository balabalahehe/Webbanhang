@extends('admin.share.master')
@section('content')
    <input id="button" type="button" value="PLAY">
    <audio id="audio" src="t-rex-roar.mp3"></audio>
@endsection

@section('js')
  <script type="text/javascript">
    $(document).ready(function(){
        function myFunction() {
            document.getElementById("myCheck").click();
        }
        // setInterval(function () {
        //     console.log('Oke.');
        //     var audio = new Audio('t-rex-roar.mp3');
        //     try {
        //         audio.play();
        //     }
        //     catch(err) {
        //         toastr.error("Bạn cần bấm nút bật âm thanh");
        //     }
        // }, 3000 );
    });
 </script>
@endsection
