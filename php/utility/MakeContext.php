<?php
declare(strict_types=1);

// AuConveyancingFeeIndex SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class AuConveyancingFeeIndexMakeContext
{
    public static function call(array $ctxmap, ?AuConveyancingFeeIndexContext $basectx): AuConveyancingFeeIndexContext
    {
        return new AuConveyancingFeeIndexContext($ctxmap, $basectx);
    }
}
