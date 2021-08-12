<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="chat.css">
	</head>
	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-12 col-xl-12 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Fake Chat Messenger</span>
									<p>Hello, {{ $user->fullname }} | <a href="/logout">Logout |</a></p>
                                    {{-- <p><button id="clickLoad"> Click Load </button></p> --}}
								</div>
							</div>
						</div>
						<div id="bodychat" class="card-body msg_card_body">
                            @foreach ($data as $value)
                                @if($value->user_id == $user->id)
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        {{ $value->content }}
                                        <span class="msg_time">{{ Carbon\Carbon::parse($value->created_at)->format('H:i:s') }}</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://cdn.iconscout.com/icon/free/png-512/cute-baby-2518795-2114565.png" class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                @else
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        {{ $value->content }}
                                        <span class="msg_time">{{ Carbon\Carbon::parse($value->created_at)->format('H:i:s') }}</span>
                                    </div>
                                </div>
                                @endif
                            @endforeach
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input id="content" name="content" class="form-control type_msg" placeholder="Type your message...">
								<div id="sendMessage" class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $("#sendMessage").click(function(){
                var content = $("#content").val();
                $.ajax({
                    url  : '/chat',
                    type : 'post',
                    data : {
                        content: content
                    },
                    success: function($chat){
                        // console.log($chat.chat.content);
                        var date_format = new Date($chat.chat.created_at);
                        var time = date_format.getHours()+':' + date_format.getMinutes() + ':' + date_format.getSeconds();
                        // console.log(date_format.getMonth()+'/'+ date_format.getDate()+'/'+date_format.getFullYear() );
                        var html = "<div class='d-flex justify-content-end mb-4'><div class='msg_cotainer_send'>";
                        html += $chat.chat.content;
                        html +=	"<span class='msg_time'>";
                        html +=	time;
                        html += "</span></div><div class='img_cont_msg'><img src='https://cdn.iconscout.com/icon/free/png-512/cute-baby-2518795-2114565.png' class='rounded-circle user_img_msg'></div></div>";
                        $("#bodychat").append(html);
                        $("#content").val("");
                    },
                });
            });

            $('#content').keypress(function(e){
                if(e.which == 13){//Enter key pressed
                    $('#sendMessage').click();//Trigger search button click event
                }
            });

            setInterval(function(){
                $.ajax({
                    url  : '/load',
                    type : 'get',
                    success: function($data){
                        console.log($data.data);
                        if($data.data.length > 0){
                            $.each($data.data, function(key, value){
                                var date_format = new Date(value.created_at);
                                var time = date_format.getHours()+':' + date_format.getMinutes() + ':' + date_format.getSeconds();
                                var html = "<div class='d-flex justify-content-start mb-4'><div class='img_cont_msg'><img src='https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg' class='rounded-circle user_img_msg'></div><div class='msg_cotainer'>"+value.content+"<span class='msg_time'>"+time+"</span></div></div>";
                                $("#bodychat").append(html);
                            });
                        }
                    },
                });
            }, 1500);


            // $("#clickLoad").click(function() {
            //     $.ajax({
            //         url  : '/load',
            //         type : 'get',
            //         success: function($data){
            //             console.log($data.data);
            //             if($data.data.length > 0){
            //                 $.each($data.data, function(key, value){
            //                     var date_format = new Date(value.created_at);
            //                     var time = date_format.getHours()+':' + date_format.getMinutes() + ':' + date_format.getSeconds();
            //                     var html = "<div class='d-flex justify-content-start mb-4'><div class='img_cont_msg'><img src='https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg' class='rounded-circle user_img_msg'></div><div class='msg_cotainer'>"+value.content+"<span class='msg_time'>"+time+"</span></div></div>";
            //                     $("#bodychat").append(html);
            //                 });
            //             }
            //         },
            //     });
            // });
        });
    </script>
</html>
