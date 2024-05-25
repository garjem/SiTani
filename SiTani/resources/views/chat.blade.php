<div>
    <!-- Tombol Chat -->
    <button id="chatButton" class="chat-button">
        <img src="chat.png" alt="Chat Icon" width="30" height="30">
    </button>

    <!-- Pop-Up Chat -->
    <div id="chatPopup" class="chat-popup">
        <div class="chat-header">
            <span id="chatHeader">Chat dengan Toko</span>
            <button id="closeChat" class="close-chat">&times;</button>
        </div>
        <div class="chat-content">
            <div id="contactList" class="contact-list">
                <ul>
                    <li class="contact-item" data-chat="Toko 1">
                        <img src="/person/toko1.jpg" alt="Toko 1">
                        <span>Toko 1</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 2">
                        <img src="/person/toko2.jpg" alt="Toko 2">
                        <span>Toko 2</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 3">
                        <img src="/person/toko3.jpg" alt="Toko 3">
                        <span>Toko 3</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 4">
                        <img src="/person/toko4.jpg" alt="Toko 4">
                        <span>Toko 4</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 5">
                        <img src="/person/toko5.jpg" alt="Toko 5">
                        <span>Toko 5</span>
                    </li>
                </ul>
            </div>
            <div id="chatSection" class="chat-section">
                <div id="chatBody" class="chat-body">
                    <div id="chatContent">Pilih toko untuk memulai chat</div>
                </div>
                <div class="chat-footer" id="chatFooter" style="display: none;">
                    <input type="text" id="chatInput" placeholder="Ketik pesan...">
                    <button type="submit" id="sendButton">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var chatButton = document.getElementById('chatButton');
    var chatPopup = document.getElementById('chatPopup');
    var closeChat = document.getElementById('closeChat');
    var contactItems = document.querySelectorAll('.contact-item');
    var chatHeader = document.getElementById('chatHeader');
    var chatBody = document.getElementById('chatBody');
    var chatFooter = document.getElementById('chatFooter');
    var chatContent = document.getElementById('chatContent');
    var chatInput = document.getElementById('chatInput');
    var sendButton = document.getElementById('sendButton');

    var chatHistories = {};

    // Initialize chat histories with a default message from each contact
    contactItems.forEach(function(item) {
        var chatId = item.getAttribute('data-chat');
        chatHistories[chatId] = [{ sender: chatId, message: 'Halo, ada yang bisa kami bantu?' }];
    });

    chatButton.addEventListener('click', function() {
        chatPopup.style.display = 'block';
    });

    closeChat.addEventListener('click', function() {
        chatPopup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == chatPopup) {
            chatPopup.style.display = 'none';
        }
    });

    contactItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var chatId = this.getAttribute('data-chat');
            openChat(chatId, this);
        });
    });

    sendButton.addEventListener('click', function() {
        var message = chatInput.value.trim();
        if (message) {
            var activeChat = document.querySelector('.contact-item.active');
            if (activeChat) {
                var chatId = activeChat.getAttribute('data-chat');
                addMessageToChat(chatId, 'You', message);
                chatInput.value = '';
            }
        }
    });

    function openChat(chatId, selectedItem) {
        // Remove active class from all items
        contactItems.forEach(function(item) {
            item.classList.remove('active');
        });

        // Add active class to selected item
        selectedItem.classList.add('active');

        // Display chat content and footer
        chatHeader.textContent = chatId;
        chatFooter.style.display = 'flex';

        // Load chat history
        if (chatHistories[chatId]) {
            chatContent.innerHTML = chatHistories[chatId].map(msg => 
                `<div class="${msg.sender === 'You' ? 'message-right' : 'message-left'}"><div class="bubble">${msg.message}</div></div>`
            ).join('');
        } else {
            chatContent.innerHTML = 'Mulai percakapan baru';
        }
    }

    function addMessageToChat(chatId, sender, message) {
        if (!chatHistories[chatId]) {
            chatHistories[chatId] = [];
        }
        chatHistories[chatId].push({ sender: sender, message: message });

        // Refresh chat content
        chatContent.innerHTML = chatHistories[chatId].map(msg => 
            `<div class="${msg.sender === 'You' ? 'message-right' : 'message-left'}"><div class="bubble">${msg.message}</div></div>`
        ).join('');
    }
});


</script>

<style>
    /* Styling tombol chat */
    .chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #58A399;
        border: none;
        border-radius: 50%;
        padding: 10px;
        cursor: pointer;
        z-index: 1000;
    }

    .chat-popup {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        border: 1px solid #ccc;
        background-color: white;
        width: 600px;
        height: 400px;
        resize: both;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        border-radius: 10px;
    }

    .chat-header {
        background-color: #58A399;
        padding: 10px;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-content {
        display: flex;
        height: calc(100% - 50px);
    }

    .contact-list {
        width: 25%;
        overflow-y: auto;
        border-right: 1px solid #ccc;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .chat-section {
        width: 75%;
        display: flex;
        flex-direction: column;
        padding: 10px;
    }

    .chat-body {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
    }

    .chat-footer {
        padding: 10px;
        border-top: 1px solid #ccc;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact-item {
        display: flex;
        align-items: center;
        padding: 10px;
        cursor: pointer;
    }

    .contact-item img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .contact-item:hover {
        background-color: #f1f1f1;
    }

    .contact-item.active {
        background-color: #e0e0e0;
    }

    .message-left {
        display: flex;
        justify-content: flex-start;
        margin: 5px;
    }

    .message-left .bubble {
        background-color: #e0e0e0;
        color: black;
        padding: 10px;
        border-radius: 10px;
        position: relative;
        max-width: 70%;
    }

    .message-left .bubble::after {
        content: "";
        position: absolute;
        top: 10px;
        left: -10px;
        border-width: 10px;
        border-style: solid;
        border-color: transparent #e0e0e0 transparent transparent;
    }

    .message-right {
        display: flex;
        justify-content: flex-end;
        margin: 5px;
    }

    .message-right .bubble {
        background-color: #58A399;
        color: white;
        padding: 10px;
        border-radius: 10px;
        position: relative;
        max-width: 70%;
    }

    .message-right .bubble::after {
        content: "";
        position: absolute;
        top: 10px;
        right: -10px;
        border-width: 10px;
        border-style: solid;
        border-color: transparent transparent transparent #58A399;
    }

    #chatInput {
        flex: 1;
        margin-right: 10px;
    }

    #sendButton {
        width: 60px;
    }

</style>
