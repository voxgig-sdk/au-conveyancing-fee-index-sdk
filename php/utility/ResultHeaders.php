<?php
declare(strict_types=1);

// AuConveyancingFeeIndex SDK utility: result_headers

class AuConveyancingFeeIndexResultHeaders
{
    public static function call(AuConveyancingFeeIndexContext $ctx): ?AuConveyancingFeeIndexResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
