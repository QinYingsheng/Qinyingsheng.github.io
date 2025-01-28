document.addEventListener('DOMContentLoaded', () => {
    const articles = [
        "文章3：chatgpt
共100字
Chatgpt出现后，社交有了新变化。同学们课间不再只聊游戏，而是分享chatgpt给出的奇思妙想。家庭聚会时，长辈们也好奇它。它成了话题焦点，拉近了不同人群的距离，让社交内容更丰富多元，真的很神奇。",
        "文章4：Ai
637字
‌‎Ai is an interesting word. It can stand for many things, such as artificial intelligence, which is the intelligence of machines or computers that are programmed to think and act like humans. Ai can also be an abbreviation for "love" or "air," which are both important aspects of our lives. ‌‎
‌‎In addition, Ai is a common Chinese surname, which adds to its significance. It is fascinating to see how a single word can have so many meanings and interpretations. ‌‎
‌‎As technology advances, the role of ai in our lives will become increasingly important. It will be interesting to see how humans and ai can work together to create a better future.‌‎"
    ];

    const articleList = document.getElementById('article-list');
    
    articles.forEach(article => {
        const li = document.createElement('li');
        li.textContent = article;
        articleList.appendChild(li);
    });
});