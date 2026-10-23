<?php
declare(strict_types=1);

// AuConveyancingFeeIndex SDK utility: feature_hook

class AuConveyancingFeeIndexFeatureHook
{
    public static function call(AuConveyancingFeeIndexContext $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
