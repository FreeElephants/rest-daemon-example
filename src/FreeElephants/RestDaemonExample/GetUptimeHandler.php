<?php

namespace FreeElephants\RestDaemonExample;

use FreeElephants\RestDaemon\Endpoint\Handler\AbstractEndpointMethodHandler;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GetUptimeHandler extends AbstractEndpointMethodHandler
{
    private $startTime;

    private $numberOfRequest = 0;

    public function __construct()
    {
        $this->startTime = time();
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next): ResponseInterface
    {
        $uptime = time() - $this->startTime;
        $data = [
            'startTimestamp' => $this->startTime,
            'startDateTime' => date(DATE_W3C, $this->startTime),
            'currentDateTime' => date(DATE_W3C),
            'uptime' => $uptime,
            'numberOfRequest' => ++$this->numberOfRequest,
        ];
        $response->getBody()->write(json_encode($data));
        return $next($request, $response);
    }
}