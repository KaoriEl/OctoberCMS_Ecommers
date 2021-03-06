<?php

namespace Kibo\Phast\Services;

use Kibo\Phast\Exceptions\UnauthorizedException;

class ProxyBaseService extends BaseService {
    protected function validateRequest(ServiceRequest $request) {
        $this->validateIntegrity($request);
        try {
            $this->validateToken($request);
            $this->logger()->info('Token OK');
        } catch (UnauthorizedException $e) {
            $this->logger()->info('Token not OK. Validating whitelist.');
            $this->validateWhitelisted($request);
            $this->logger()->info('Whitelisted!');
        }
    }
}
