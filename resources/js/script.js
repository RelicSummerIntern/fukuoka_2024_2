document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.myform');
    const messageList = document.getElementById('message-list');
    let messageCount = 5; // Initialize count to 5 for numbering

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent form from submitting normally

        const messageInput = document.getElementById('message-input');
        const newMessage = messageInput.value.trim();

        if (newMessage) {
            messageCount++; // Increment message count
            const newListItem = document.createElement('li');
            newListItem.textContent = `${messageCount}. ${newMessage}`;
            messageList.appendChild(newListItem);

            messageInput.value = ''; // Clear input field
        }
    });
});



const urlParams = new URLSearchParams(window.location.search);
const avatarSrc = urlParams.get('avatar');
const author = urlParams.get('author');
const email = urlParams.get('email');
const address = urlParams.get('address');


// 如果查询参数中有头像图片 URL，则更新头像图片
if (avatarSrc) {
    document.getElementById('profile-avatar').src = avatarSrc;
}

if (author) {
    document.getElementById('author-name').textContent = `名 前：${author}`;
}

if (email) {
        document.getElementById('email').textContent = `メール：${email}`;
    }

if (address) {
    document.getElementById('address').textContent = `住 所：${address}`;
}
