 export let articleCount = function() {
    const author = document.querySelector('[data-author]');
    console.log(author);
    if(author != null) {
        const articleArr  = author.querySelectorAll('[data-article]');
        countArticle(articleArr);

        function countArticle(arr) {
            const valueOutput = author.querySelector('[data-article-count]');
            valueOutput.innerHTML = arr.length;
            console.log(arr.length);
        }
    }
}