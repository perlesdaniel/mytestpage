<?php
function fetch_rss_feed($feed_url) {
    $rss = simplexml_load_file($feed_url);
    $rss_items = [];

    foreach ($rss->channel->item as $item) {
        $rss_items[] = [
            'title' => (string) $item->title,
            'link' => (string) $item->link,
            'description' => (string) $item->description,
            'pubDate' => (string) $item->pubDate,
        ];
    }

    return $rss_items;
}

$feed_url = "http://www.bbc.com/news/10628494"; // Replace with the URL of the RSS feed
$rss_items = fetch_rss_feed($feed_url);
?>
