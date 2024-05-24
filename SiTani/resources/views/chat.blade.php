<!-- resources/views/chat.blade.php -->
<div>
    <!-- Tombol Chat -->
    <button id="chatButton" class="chat-button">
        <img src="chat.png" alt="Chat Icon" width="30" height="30">
    </button>

    <!-- Pop-Up Chat -->
    <div id="chatPopup" class="chat-popup">
        <div class="chat-header">
            <span>Chat dengan Toko</span>
            <button id="closeChat" class="close-chat">&times;</button>
        </div>
        <div class="chat-body">
            <ul class="contact-list">
                <li class="contact-item" data-chat="chat1">
                    <img src="toko1.png" alt="Toko 1">
                    <span>Toko 1</span>
                </li>
                <li class="contact-item" data-chat="chat2">
                    <img src="toko2.png" alt="Toko 2">
                    <span>Toko 2</span>
                </li>
                <li class="contact-item" data-chat="chat3">
                    <img src="toko3.png" alt="Toko 3">
                    <span>Toko 3</span>
                </li>
                <li class="contact-item" data-chat="chat4">
                    <img src="toko4.png" alt="Toko 4">
                    <span>Toko 4</span>
                </li>
                <li class="contact-item" data-chat="chat5">
                    <img src="toko5.png" alt="Toko 5">
                    <span>Toko 5</span>
                </li>
            </ul>
        </div>
        <div class="chat-footer">
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

        chatButton.addEventListener('click', function() {
            chatPopup.style.display = 'block';
        });

        closeChat.addEventListener('click', function() {
            chatPopup.style.display = 'none';
        });

        // Menutup pop-up jika pengguna mengklik di luar pop-up
        window.addEventListener('click', function(event) {
            if (event.target == chatPopup) {
                chatPopup.style.display = 'none';
            }
        });

        contactItems.forEach(function(item) {
            item.addEventListener('click', function() {
                var chatId = this.getAttribute('data-chat');
                openChat(chatId);
            });
        });

        function openChat(chatId) {
            // Di sini Anda bisa mengganti konten chat sesuai dengan toko yang dipilih
            // Sebagai contoh, kita hanya akan mengubah teks di dalam elemen chat-body
            var chatBody = document.querySelector('.chat-body');
            chatBody.innerHTML = 'Chat dengan ' + chatId;
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
        width: 300px;
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
    .chat-body {
        max-height: 200px;
        overflow-y: auto;
        padding: 10px;
    }
    .chat-footer {
        padding: 10px;
        border-top: 1px solid #ccc;
    }
    .contact-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .contact-item {
        display: flex;
        align-items: center;
        padding: 10px;
        cursor: pointer;
    }

</style>