<?php

namespace App\Security;

use PHPUnit\Util\Json;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
public function handle(Request $request, AccessDeniedException $accessDeniedException)
{
    return new JsonResponse(['accessdenied'=>'bloquer']);
}
}