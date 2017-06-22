<?php

namespace Flagrow\Bazaar\Api\Controllers;

use Illuminate\Support\Arr;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class FavoriteExtensionController extends ConnectedExtensionResourceController
{
    /**
     * Get the data to be serialized and assigned to the response document.
     *
     * @param ServerRequestInterface $request
     * @param Document $document
     * @return mixed
     * @throws \Exception
     */
    protected function data(ServerRequestInterface $request, Document $document)
    {
        $this->checkConnected();

        $response = $this->extensions->favorite(
            Arr::get($request->getQueryParams(), 'id'),
            Arr::get($request->getParsedBody(), 'favorite')
        );

        if ($response) {
            return $response;
        }

        throw new \Exception('Could not favorite, connection to service failed.');
    }
}
