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