<?php
declare(strict_types=1);

// AuConveyancingFeeIndex SDK base feature

class AuConveyancingFeeIndexBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(AuConveyancingFeeIndexContext $ctx, array $options): void {}
    public function PostConstruct(AuConveyancingFeeIndexContext $ctx): void {}
    public function PostConstructEntity(AuConveyancingFeeIndexContext $ctx): void {}
    public function SetData(AuConveyancingFeeIndexContext $ctx): void {}
    public function GetData(AuConveyancingFeeIndexContext $ctx): void {}
    public function GetMatch(AuConveyancingFeeIndexContext $ctx): void {}
    public function SetMatch(AuConveyancingFeeIndexContext $ctx): void {}
    public function PrePoint(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreSpec(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreRequest(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreResponse(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreResult(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreDone(AuConveyancingFeeIndexContext $ctx): void {}
    public function PreUnexpected(AuConveyancingFeeIndexContext $ctx): void {}
}
