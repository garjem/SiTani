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
                        <img src="toko1.png" alt="Toko 1">
                        <span>Toko 1</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 2">
                        <img src="toko2.png" alt="Toko 2">
                        <span>Toko 2</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 3">
                        <img src="toko3.png" alt="Toko 3">
                        <span>Toko 3</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 4">
                        <img src="toko4.png" alt="Toko 4">
                        <span>Toko 4</span>
                    </li>
                    <li class="contact-item" data-chat="Toko 5">
                        <img src="toko5.png" alt="Toko 5">
                        <span>Toko 5</span>
                    </li>
                </ul>
            </div>
            <div id="chatBody" class="chat-body">
                <div id="chatContent">Pilih toko untuk memulai chat</div>
            </div>
        </div>
        <div class="chat-footer" id="chatFooter" style="display: none;">
            <input type="text" placeholder="Ketik pesan...">
            <button type="submit">Kirim</button>
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
        var contactList = document.getElementById('contactList');
        var chatContent = document.getElementById('chatContent');

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

        function openChat(chatId, selectedItem) {
            // Remove active class from all items
            contactItems.forEach(function(item) {
                item.classList.remove('active');
            });

            // Add active class to selected item
            selectedItem.classList.add('active');

            // Display chat content and footer
            chatContent.innerHTML = 'Chat dengan ' + chatId;
            chatFooter.style.display = 'block';
            chatHeader.textContent = chatId;
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
        width: 400px;
        height: 500px;
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
        height: calc(100% - 90px);
    }

    .contact-list {
        width: 30%;
        overflow-y: auto;
        border-right: 1px solid #ccc;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .chat-body {
        width: 70%;
        padding: 10px;
        overflow-y: auto;
    }

    .chat-footer {
        padding: 10px;
        border-top: 1px solid #ccc;
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
</style>
