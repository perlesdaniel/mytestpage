<?php include 'fetch_rss.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .rss-item {
            margin-bottom: 20px;
        }
        .rss-item h3 {
            margin: 0;
        }
        .rss-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Latest News</h1>
    <?php if (!empty($rss_items)): ?>
        <?php foreach ($rss_items as $item): ?>
            <div class="rss-item">
                <h3><a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank"><?php echo htmlspecialchars($item['title']); ?></a></h3>
                <p><?php echo htmlspecialchars($item['description']); ?></p>
                <p><small>Published on: <?php echo date('F j, Y, g:i a', strtotime($item['pubDate'])); ?></small></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No news items found.</p>
    <?php endif; ?>
</body>
</html>