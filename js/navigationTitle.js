export let navigationTitle = function() {
    const navMainWrp = document.querySelector('#nav');
    if(navMainWrp != null) {
        const mainPage = navMainWrp.querySelector('[data-main]');
        const chatbotsPage = navMainWrp.querySelector('[data-chatbots]')
        let namePage = document.URL;
       if(namePage == "https://dev.star-up-group.com.ua/ua" ||  namePage == "https://dev.star-up-group.com.ua" || namePage == "https://dev.star-up-group.com.ua/ru" || namePage == "https://dev.star-up-group.com.ua/en" || "http://127.0.0.1:5501/index.html") {
        mainPage.classList.add('active');
       } if(chatbotsPage == "https://dev.star-up-group.com.ua/ua/chatbots" ||  chatbotsPage == "https://dev.star-up-group.com.ua/chatbots" || chatbotsPage == "https://dev.star-up-group.com.ua/ru/chatbots" || chatbotsPage == "https://dev.star-up-group.com.ua/en/chatbots" || "http://127.0.0.1:5501/chat-bot-page.html") {
        chatbotsPage.classList.add('active');
       }
    }
}