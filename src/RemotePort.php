<?php

namespace Luisinder\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

Class RemotePort
{
	public function __construct() 
	{

	}

	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
	{
		if (!$next) {
			return $response;
		}

		$remotePort = $this->determineClientRemotePort($request);
		$request = $request->withAttribute("remotePort", $remotePort);

		return $response = $next($request, $response);
	}

	protected function determineClientRemotePort($request)
	{
		$remotePort = null;
		$serverParams = $request->getServerParams();
		$remotePort = $serverParams['REMOTE_PORT'];
		return $remotePort;
	}
}