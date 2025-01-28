document.addEventListener('DOMContentLoaded', () => {
    const articles = [
        "文章3：",
        "文章4："

    const articleList = document.getElementById('article-list');
    
    articles.forEach(article => {
        const li = document.createElement('li');
        li.textContent = article;
        articleList.appendChild(li);
    });
});