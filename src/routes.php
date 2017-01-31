<?php
// Routes

$app->any('/service', function ($request, $response, $args) {
    //print('Hello!<br><br>');
    //print('$response = ' . $response . '<br><br>');
    //print('<pre>$args = ' . print_r($args, true) . '</pre>');
    //print('<pre>$request = ' . print_r($request, true) . '</pre>');
    //print('<pre>$this = ' . print_r($this, true) . '</pre>');
    print('<pre>DI counter = ' . ++$this->data->counter . '</pre>');
    return 'Service!';
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
