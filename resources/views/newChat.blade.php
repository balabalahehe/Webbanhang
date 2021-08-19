<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="/js/app.js"></script>
        <link rel="stylesheet" type="text/css" href="chat.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body>
		<div id="app" class="container-fluid">
			<div class="row justify-content-center">
                <div class="col-md-12">
                    <ul>
                        @foreach ($listUser as $value)
                            <li><a href="/newlogin/{{$value->id}}">{{ $value->email }}</a></li>
                        @endforeach
                    </ul>
                </div>
				<div class="col-md-12 col-xl-12 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat Messenger</span>
									<p>Hello, {{ empty($user) ? 'Chưa login' : $user->email }} | <a href="/newLogout">Logout |</a></p>
                                    <p><button v-on:click="deleteAllMessage"> Delete All </button></p>
								</div>
							</div>
						</div>
						<div id="bodychat" class="card-body msg_card_body">
                        <template v-for="message in allMessage">
                            <div v-if="message.user_id == userLogin" class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    @{{ message.content }}
                                    <span class="msg_time">@{{ message.created_at }}</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://cdn.iconscout.com/icon/free/png-512/cute-baby-2518795-2114565.png" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div v-else class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    @{{ message.content }}
                                    <span class="msg_time">@{{ message.created_at }}</span>
                                </div>
                            </div>
                        </template>
                        </div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input v-model="myMessage" v-on:keyup.enter="sendMessage" id="content" name="content" class="form-control type_msg" placeholder="Type your message...">
								<div v-on:click="sendMessage" id="sendMessage" class="input-group-append">
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
        // $.ajaxSetup({
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $(document).ready(function() {
            $('#bodychat').animate({scrollTop: $('#bodychat').get(0).scrollHeight});
        });
    </script>
    <script>
        new Vue({
            el: '#app',
            data: {
                allMessage: [],
                myMessage: "",
                userLogin: '',
            },
            created() {
                axios
                    .get('/loadAllMessage')
                    .then((e) => {
                        this.userLogin = e.data[1];
                        this.allMessage = e.data[0];
                    });

                Echo.private('chat')
                    .listen('newMessage', (e) => {
                        console.log(e);
                    });

                // setInterval((e) => {
                //     axios
                //         .get('/loadFake')
                //         .then((e) => {
                //             this.allMessage = this.allMessage.concat(e.data.data);
                //         });
                //     // $('#bodychat').scrollTop($('#bodychat').height());
                // }, 1500);
            },
            methods: {
                sendMessage(){
                    var payload = {
                        'content' : this.myMessage,
                    }
                    axios
                        .post('/newMessage', payload)
                        .then((e) => {
                            this.allMessage.push(e.data.data)
                        });
                    this.myMessage = "";
                    $('#bodychat').animate({scrollTop: $('#bodychat').get(0).scrollHeight});
                },
                deleteAllMessage(){
                    axios
                        .get('/DeleteAllMessage')
                        .then((e) => {
                            if(e.data.trangThai == 'done'){
                                this.allMessage = [];
                            }
                        });
                },
            },
        });
    </script>
</html>
