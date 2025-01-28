document.addEventListener('DOMContentLoaded', () => {
    const articles = [
        "文章3：Qim的历程3",
        "文章4：Qin的历程4"
    ];

    const articleList = document.getElementById('article-list');
    
    articles.forEach(article => {
        const li = document.createElement('li');
        li.textContent = article;
        articleList.appendChild(li);
    });
});