<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="page_box">

       <style>
              
                .chatbot-welcome {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    flex-grow: 1;
                    text-align: center;
                    padding: 20px;
                }
                .chatbot-welcome .input-box {
                    width: 75%;
                }
                .input-box {
                    display: flex;
                    align-items: center;
                    background: #fff;
                    border-radius: 25px;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                    margin: 40px 10px 10px;
                    padding: 5px 10px;
                }
                .input-box input {
                    flex-grow: 1;
                    border: none;
                    outline: none;
                    padding: 10px;
                    border-radius: 25px;
                }
                .input-box button {
                    border: none;
                    background: #9d1686;
                    color: #fff;
                    padding: 10px 15px;
                    border-radius: 50%;
                    cursor: pointer;
                }

                .chat-window {
                    flex-grow: 1;
                    overflow-y: auto;
                    padding: 15px;
                }
                .message {
                    background: #f9f9f9;
                    padding: 10px 15px;
                    margin-bottom: 10px;
                    border-radius: 10px;
                    max-width: 70%;
                }
                .user-message {
                    margin-left: auto;
                    background: #e0f7fa;
                }
                .bot-message img {
                    max-width: 150px;
                    display: block;
                    margin-bottom: 5px;
                }
                .timestamp {
                    font-size: 10px;
                    color: #999;
                    text-align: right;
                }
            </style>



        <!-- Welcome Section -->
        <div class="chatbot-welcome" id="welcomeSection">
            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player 
                src="https://lottie.host/ae24a0b3-d8dc-428b-9cec-444c04a3f42b/DiZs6OkQog.lottie"
                background="transparent"
                speed="1"
                style="width: 450px; height: 450px"
                loop autoplay >
            </dotlottie-player>
            <h1>Ai Chat Bot</h1>
            <p>Got a question? Need advice? Let's chat! Ask me anything and I'll help you out!</p>
            <div class="input-box">
                <input type="text" placeholder="Start Chatting!" id="startChatInput">
                <button onclick="startChat()"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="chat-window" id="chatWindow" style="display:none;">
            <div class="message bot-message">
                <p>Sed ut perspiciatis unde omnis iste natus</p>
            </div>
            <div class="message bot-message">
                <p>accusantium doloremque laudantium, totam rem aperiam</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit</p>
                <div class="timestamp">15:42</div>
            </div>
            <div class="message user-message">
                <p>Sed ut perspiciatis unde omnis iste natus</p>
            </div>
            <div class="message bot-message">
                <p>accusantium doloremque laudantium, totam rem aperiam</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit</p>
                <div class="timestamp">15:42</div>
            </div>

            <div class="input-box" style="position: sticky; bottom: 10px; background: #f9f9f9;">
                <input type="text" placeholder="How can I help you?" id="userInput">
                <button onclick="sendMessage()"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>




</div>   

<?php 
include __DIR__ . '/../includes/footer.php';
?>

<script>
    function startChat() {
        document.getElementById('welcomeSection').style.display = 'none';
        document.getElementById('chatWindow').style.display = 'block';
    }

    function sendMessage() {
        let input = document.getElementById('userInput');
        if (input.value.trim() !== "") {
            let chatWindow = document.getElementById('chatWindow');
            let userMsg = document.createElement('div');
            userMsg.className = 'message user-message';
            userMsg.innerHTML = '<p>' + input.value + '</p>';
            chatWindow.insertBefore(userMsg, input.parentElement);
            input.value = "";
            chatWindow.scrollTop = chatWindow.scrollHeight;
        }
    }
</script>