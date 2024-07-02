document.addEventListener('DOMContentLoaded', function() {
    const rssUrl = 'https://www.clarin.com/rss/lo-ultimo/'; // Example RSS feed URL
    const rssFeedContainer = document.getElementById('rss-feed');

    fetch(rssUrl)
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const xmlDoc = parser.parseFromString(data, 'text/xml');
            const items = xmlDoc.getElementsByTagName('item');

            let html = '<ul>';
            for (let i = 0; i < items.length; i++) {
                const title = items[i].getElementsByTagName('title')[0].textContent;
                const link = items[i].getElementsByTagName('link')[0].textContent;

                html += `<li><a href="${link}" target="_blank">${title}</a></li>`;
            }
            html += '</ul>';

            rssFeedContainer.innerHTML = `RSS News ${rssFeedContainer}`;
        })
        .catch(error => console.error('Error fetching the RSS feed:', error));
});
